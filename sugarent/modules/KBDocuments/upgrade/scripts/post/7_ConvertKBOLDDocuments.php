<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

/**
 * Converts old KB module.
 */
class SugarUpgradeConvertKBOLDDocuments extends UpgradeScript
{
    public $order = 7100;
    public $type = self::UPGRADE_DB;
    public $version = '7.5';

    /**
     * @var array ID => Name.
     */
    protected $newTags = array();

    /**
     * Converted tags to categories.
     * @var array
     */
    protected $convertedTagsCategories = array();

    /**
     * Converted tags to tag.
     * @var array
     */
    protected $convertedTagsTag = array();

    public function run()
    {
        if (!version_compare($this->from_version, '7.7.0', '<=')) {
            return;
        }

        // Relationships for KBContents are not loaded yet.
        SugarRelationshipFactory::rebuildCache();

        // Need to setup custom tables.
        $rac = new RepairAndClear();
        $rac->execute = true;
        $rac->show_output = false;
        $rac->repairDatabase();

        //Setup category root
        $KBContent = BeanFactory::getBean('KBContents');
        $KBContent->setupCategoryRoot();
        //Setup primary language
        $KBContent->setupPrimaryLanguage();
        $this->convertTags();

        $app_list_strings = return_app_list_strings_language('en_us');

        while ($documents = $this->getOldDocuments()) {
            foreach ($documents as $row) {
                $this->log("Convert the KBOLDDocument {$row['id']} to a KBContent.");

                /** @var $KBBean KBContent */
                $KBContent = BeanFactory::getBean('KBContents');

                $data = $row;
                unset($data['id']);
                $data['kbdocument_body'] = $data['body'];
                $data['kbsapprover_id'] = $data['kbdoc_approver_id'];
                $data['is_external'] = empty($data['is_external_article']) ? false : true;
                $data['viewcount'] = $data['views_number'];

                // Yes, the status_id is a lable.
                if ($data['status_id'] == 'Published') {
                    $data['status'] = KBContent::ST_PUBLISHED;
                } else {
                    $statusKey = array_search($data['status_id'], $app_list_strings['kbdocument_status_dom']);
                    $data['status'] = ($statusKey !== false) ? $statusKey : KBContent::DEFAULT_STATUS;
                }

                $KBContent->populateFromRow($data);
                $this->checkImages($KBContent);
                $KBContent->set_created_by = false;
                $KBContent->update_modified_by = false;
                $KBContent->save();


                $KBContent->load_relationship('tag_link');
                foreach ($this->getOldDocTagIDs($row['id']) as $tag) {
                    $tagBean = $this->convertTagToTag(array('id' => $tag));
                    if ($tagBean) {
                        $KBContent->tag_link->add($tagBean);
                    }
                }

                foreach ($KBContent->kbarticles_kbcontents->getBeans() as $bean) {
                    $bean->assigned_user_id = $data['assigned_user_id'];
                    $bean->save();
                }
                foreach ($KBContent->kbdocuments_kbcontents->getBeans() as $bean) {
                    $bean->assigned_user_id = $data['assigned_user_id'];
                    $bean->save();
                }

                if (!empty($data['parent_type']) && $data['parent_type'] == 'Cases') {
                    $case = BeanFactory::getBean('Cases', $data['parent_id']);
                    if (!empty($case) && !empty($case->id)) {
                        $KBContent->load_relationship('relcases_kbcontents');
                        $KBContent->relcases_kbcontents->add($case);
                    }
                }

                $KBContent->load_relationship('attachments');

                // Converts attached files to Notes.
                $attachments = $this->getAttachments($row['id']);
                foreach ($attachments as $note) {
                    $this->log("Convert attachment {$note->id}.");
                    $KBContent->attachments->add($note);
                }
            }
        }
        $this->checkMenu();

        $tables = array(
            'prepKBDoc',
            'prepKBAtt',
            'prepKBTag',
            'prepKBCustom',
            'prepKBDocTag',
        );

        foreach ($tables as $table) {
            if ($this->db->tableExists($table)) {
                $this->db->dropTableName($table);
            }
        }
    }

    /**
     * Check old embedded images in document's body and replace it with new embedded files.
     * @param SugarBean $bean
     */
    protected function checkImages($bean)
    {
        $matches = array();
        $host = $config = SugarConfig::getInstance()->get('site_url');
        $body = html_entity_decode($bean->kbdocument_body);
        if (preg_match_all(
            '|<img.*src=[\'"]{1}index\.php\?entryPoint=download[^\'"]+id=([^&=]*)[^\'"]*[\'"]{1}.*alt=[\'"]{1}([^\'"]*)[\'"]{1}[^>]*>|miu',
            $body,
            $matches
        )) {
            foreach ($matches[0] as $key => $match) {
                $file = 'upload://' . $matches[1][$key];
                if (!file_exists($file)) {
                    $this->log("Embedded file {$matches[1][$key]} doesn't exist");
                    continue;
                }
                $ef = BeanFactory::getBean('EmbeddedFiles');
                $ef->file_mime_type = get_file_mime_type($file);
                $ef->id = create_guid();
                $ef->new_with_id = true;
                $ef->filename = $ef->name = $matches[1][$key];
                $ef->set_created_by = false;
                $ef->update_modified_by = false;
                $ef->created_by = $bean->created_by;
                $ef->modified_user_id = $bean->modified_user_id;
                copy($file, 'upload://' . $ef->id);
                $ef->description = $matches[2][$key];
                $ef->save(false);
                $newimg = <<<EOF
<img alt="{$ef->description}" src="rest/v10/EmbeddedFiles/{$ef->id}/file/kbdocument_body_file?force_download=0&amp;platform=base"
 data-mce-src="{$host}/rest/v10/EmbeddedFiles/{$ef->id}/file/kbdocument_body_file?force_download=0&amp;platform=base" />
EOF;
                $body = str_replace($match, $newimg, $body);
                $this->log("Embedded file {$matches[1][$key]} replaced");
            }
            $bean->kbdocument_body = htmlentities($body);
        }
    }

    /**
     * Get IDs of tags for old document by old ID.
     * @param $id
     * @return array
     */
    protected function getOldDocTagIDs($id)
    {
        $data = array();
        $query = "SELECT
            kbtag_id
            FROM prepKBDocTag
            WHERE kbdocument_id = {$this->db->quoted($id)}";
        $result = $this->db->query($query);
        while ($row = $this->db->fetchByAssoc($result)) {
            array_push($data, $row['kbtag_id']);
        }
        return $data;
    }

    /**
     * Convert all old tags to new categories.
     */
    protected function convertTags()
    {
        foreach ($this->getOldTags() as $tag) {
            $this->convertTagsToCategoriesRecursive($tag);
            $this->convertTagToTag($tag);
        }
    }

    /**
     * Convert old tag to new one.
     * @param $tag
     * @return null|SugarBean
     */
    protected function convertTagToTag($tag)
    {
        if (isset($this->convertedTagsTag[$tag['id']])) {
            return $this->convertedTagsTag[$tag['id']];
        }
        $tagBean = BeanFactory::getBean('Tags');
        $tagName = trim($tag['tag_name']);
        if (empty($tagName)) {
            return null;
        }

        // See if this tag exists already. If it does send back the bean for it
        $q = new SugarQuery();
        // Get the tag from the lowercase version of the name, selecting all
        // fields so that we can load the bean from these fields if found
        $q->select(array('id', 'name', 'name_lower'));
        $q->from($tagBean)
            ->where()
            ->equals('name_lower', strtolower($tagName));
        $result = $q->execute();

        // If there is a result for this tag name, send back the bean for it
        if (!empty($result[0]['id'])) {
            $tagBean->fromArray($result[0]);
        } else {
            $tagBean->fromArray(array('name' => $tagName));
            $tagBean->verifiedUnique = true;
            $tagBean->save();
        }

        $this->convertedTagsTag[$tag['id']] = $tagBean;
        return $tagBean;
    }

    /**
     * Add new KB to menu if need.
     * Remove old KB from portal and add new one.
     */
    protected function checkMenu()
    {
        require_once('modules/MySettings/TabController.php');
        require_once('include/SubPanel/SubPanelDefinitions.php');
        $tc = new TabController();

        if (!empty($this->upgrader->state['addKBToMenu'])) {
            $tabs = $tc->get_system_tabs();
            $tabs['KBContents'] = 'KBContents';
            $tc->set_system_tabs($tabs);
        }
        //Check KBDocuments in hidden subpanels.
        $focus = BeanFactory::getBean('KBContents');
        $subpanel = new SubPanelDefinitions($focus);
        $panels = $subpanel->get_hidden_subpanels();
        if (in_array('kbdocuments', $panels)) {
            unset($panels['kbdocuments']);
            $subpanel->set_hidden_subpanels($panels);
        }
    }

    /**
     * Return legacy KBOLDDocuments.
     *
     * @return array|bool
     */
    protected function getOldDocuments()
    {
        static $count = 0;
        static $custom = null;
        if ($custom === null) {
            $custom = $this->db->tableExists('prepKBCustom');
        }
        $data = array();
        $query = "SELECT prepKBDoc.*";
        if ($custom) {
            $query .= ", prepKBCustom.* from prepKBDoc LEFT JOIN prepKBCustom on prepKBCustom.id_c = prepKBDoc.id";
        } else {
            $query .= " from prepKBDoc";
        }
        $query .= " WHERE 1=1 ORDER BY prepKBDoc.date_entered";
        $query = $this->db->limitQuery($query, $count * 100, 100, false, '', false);
        $result = $this->db->query($query);
        while ($row = $this->db->fetchByAssoc($result)) {
            array_push($data, $row);
        }
        $count = $count + 1;
        return count($data) > 0 ? $data : false;
    }

    /**
     * Get attachments for old document.
     * @param string $docId
     * @return array
     */
    protected function getAttachments($docId)
    {
        $data = array();
        $query = "SELECT
            id, filename, file_mime_type
            FROM prepKBAtt
            WHERE kbdocument_id = {$this->db->quoted($docId)}";
        $result = $this->db->query($query);
        while ($row = $this->db->fetchByAssoc($result)) {
            $fileLocation = "upload://{$row['id']}";
            if (!file_exists($fileLocation)) {
                $this->log("Attachment file {$fileLocation} doesn't exist");
                continue;
            }
            $note = BeanFactory::getBean('Notes');
            $note->id = create_guid();
            $note->new_with_id = true;
            $note->name = $row['filename'];
            $note->filename = $row['filename'];
            $note->portal_flag = true;
            $noteFile = "upload://{$note->id}";
            $note->file_mime_type = $row['file_mime_type'];
            copy($fileLocation, $noteFile);
            $note->save();
            array_push($data, $note);
        }
        return $data;
    }

    /**
     * Return tags by document ID.
     * Written because the KBOLDDocument's functions get_tags() and get_kbdoc_tags() return only one tag.
     *
     * @return array
     */
    protected function getOldTags()
    {
        $data = array();
        $query = "SELECT * FROM prepKBTag";
        $result = $this->db->query($query);
        while ($row = $this->db->fetchByAssoc($result)) {
            array_push($data, $row);
        }
        return $data;
    }

    /**
     * Return data for old KBTag.
     * @param string $id
     * @return mixed
     */
    protected function getOldTag($id)
    {
        $query = "SELECT * FROM prepKBTag WHERE id = {$this->db->quoted($id)}";
        return $this->db->fetchOne($query);
    }

    /**
     * Recursively converts old tags to categories.
     *
     * @param array $tag
     * @return string Associated category ID.
     */
    protected function convertTagsToCategoriesRecursive($tag)
    {
        if (isset($this->convertedTagsCategories[$tag['id']])) {
            return $this->convertedTagsCategories[$tag['id']];
        }
        $name = trim($tag['tag_name']);
        if (empty($name)) {
            return null;
        }
        $category = BeanFactory::newBean('Categories');
        $category->name = $name;

        if ($tag['parent_tag_id']) {
            $parentTag = $this->getOldTag($tag['parent_tag_id']);
            $parentCategoryId = $this->convertTagsToCategoriesRecursive($parentTag);
            if ($parentCategoryId) {
                $parentCategory = BeanFactory::getBean('Categories', $parentCategoryId, array('use_cache' => false));
                $parentCategory->append($category);
            }
        } else {
            $KBContent = BeanFactory::getBean('KBContents');
            $rootCategory = BeanFactory::getBean(
                'Categories',
                $KBContent->getCategoryRoot(),
                array('use_cache' => false)
            );
            $rootCategory->append($category);
        }

        $categoryID = $category->save();
        $this->convertedTagsCategories[$tag['id']] = $categoryID;

        return $categoryID;
    }
}
