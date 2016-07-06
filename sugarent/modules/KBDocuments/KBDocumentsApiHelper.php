<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
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

require_once('data/SugarBeanApiHelper.php');

/**
 * This class is here to add in the file information to the KBDocuments so that it can be easily displayed by remote consumers of the API. Otherwise you have to traverse a number of links to pull up this information.
 */
class KBDocumentsApiHelper extends SugarBeanApiHelper
{

    public function formatForApi(SugarBean $bean, array $fieldList = array(), array $options = array() )
    {
        $db = DBManagerFactory::getInstance();
        $query = "SELECT
            jt0.id assigned_user_id,
            jt0.user_name assigned_user_name,
            jt0.first_name assgn_fn,
            jt0.last_name assgn_ln,
            jt1.id kbdoc_approver_id,
            jt1.user_name kbdoc_approver_name,
            jt1.first_name appr_fn,
            jt1.last_name appr_ln,
            kvr.views_number views_number
        FROM
            kbdocuments LEFT JOIN kbdocuments_views_ratings kvr ON kbdocuments.id = kvr.kbdocument_id
            LEFT JOIN  users jt0 ON jt0.id = kbdocuments.assigned_user_id AND jt0.deleted = 0
            LEFT JOIN  users jt1 ON jt1.id = kbdocuments.kbdoc_approver_id AND jt1.deleted = 0
        WHERE
            kbdocuments.id = {$db->quoted($bean->id)}";
        $res = $db->query($query);
        $addon = $db->fetchRow($res);

        if (in_array('views_number', $fieldList) && !empty($addon['views_number'])) {
            $bean->views_number = $addon['views_number'];
        }

        // bug 56834 - the api doesn't return kbdoc_approver_name
        $isKbApprover = in_array('kbdoc_approver_name', $fieldList);

        if ($isKbApprover && !empty($addon['kbdoc_approver_id'])) {
            $bean->kbdoc_approver_id = $addon['kbdoc_approver_id'];
        }
        //add kbdoc_approver_id if not in fieldList
        if ( $isKbApprover && !in_array('kbdoc_approver_id', $fieldList) ) {
            $fieldList[] = 'kbdoc_approver_id';
        }
        $data = parent::formatForApi($bean, $fieldList, $options);

        // bug 56834 - manually fill kbdoc_approver_name if in fieldList
        if ( (empty($fieldList) || $isKbApprover) && isset($data['kbdoc_approver_id']) ) {
            $user = BeanFactory::getBean('Users');
            $user->populateFromRow(
                array(
                    'id' => $addon['kbdoc_approver_id'],
                    'first_name' => $addon['appr_fn'],
                    'last_name' => $addon['appr_ln'],
                )
            );
            $data['kbdoc_approver_name'] =  Localization::getObject()->formatName($user);
        }

        if (in_array('assigned_user_name', $fieldList) && !empty($addon['assigned_user_id'])) {
            $user = BeanFactory::getBean('Users');
            $user->populateFromRow(
                array(
                    'id' => $addon['assigned_user_id'],
                    'first_name' => $addon['assgn_fn'],
                    'last_name' => $addon['assgn_ln'],
                )
            );
            $data['assigned_user_name'] =  Localization::getObject()->formatName($user);
        }

        if (empty($fieldList) || in_array('attachment_list', $fieldList)) {
            $query = "SELECT rev.id rev_id, rev.filename filename, kbrev.id docrev_id FROM kbdocument_revisions kbrev LEFT JOIN document_revisions rev ON (kbrev.document_revision_id = rev.id) WHERE kbrev.kbdocument_id = '".$bean->id."' AND kbrev.deleted = 0 AND rev.deleted = 0 AND kbrev.kbcontent_id is NULL";
            $ret = $db->query($query,true);
            $files = array();
            while ( $row = $db->fetchByAssoc($ret) ) {
                $thisFile = array();
                $thisFile['document_revision_id'] = $row['rev_id'];
                // add some extra meta so we can build the urls on the client
                $thisFile['id'] = $row['rev_id'];
                $thisFile['module'] = 'DocumentRevisions';
                $thisFile['field_name'] = 'filename';
                $thisFile['name'] = $row['filename'];
                $thisFile['kbdocument_revision_id'] = $row['docrev_id'];
                $thisFile['uri'] = $this->api->getResourceURI(array('DocumentRevisions',$row['rev_id'],'file','filename'));
                $files[] = $thisFile;
            }
            $data['attachment_list'] = $files;
        }

        return $data;
    }
}
