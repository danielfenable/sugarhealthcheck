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

require_once 'modules/pmse_Inbox/engine/PMSEImporter.php';
require_once 'modules/pmse_Inbox/engine/PMSEEngineUtils.php';

/**
 * Imports a record of encrypted file.
 *
 * This class extends the class ADAMImporter to import
 * records to an encrypted file BPMRuleSet table.
 * @package PMSE
 * @codeCoverageIgnore
 */
class PMSEBusinessRuleImporter extends PMSEImporter
{

    public function __construct()
    {
        $this->bean = BeanFactory::getBean('pmse_Business_Rules'); //new BpmRuleSet();
        $this->name = 'name';
        $this->id = 'rst_id';
        $this->suffix = 'rst_';
        $this->extension = 'pbr';
        $this->module = 'rst_module';
    }

    /**
     * Method to save record in database
     * @param $projectData
     * @return bool
     */
    public function saveProjectData($projectData)
    {
        $source_definition = json_decode($projectData['rst_source_definition']);
        if (isset($projectData[$this->suffix . 'name']) && !empty($projectData[$this->suffix . 'name'])) {
            $name = $this->getNameWithSuffix($projectData[$this->suffix . 'name']);
        } else {
            $name = $this->getNameWithSuffix($projectData[$this->name]);
        }
        $projectData['rst_uid'] = PMSEEngineUtils::generateUniqueID();
        $source_definition->name = $name;
        $source_definition->id = $projectData['rst_uid'];
        $projectData['rst_source_definition'] = json_encode($source_definition);
        unset($projectData[$this->id]);
        unset($projectData['rst_uid']);
        $new_uid = parent::saveProjectData($projectData);
        if ($new_uid) {
            // Update new id into 'rst_source_definition' field
            $br_bean = BeanFactory::getBean('pmse_Business_Rules', $new_uid);
            $def = json_decode($br_bean->rst_source_definition);
            $def->id = $new_uid;
            $br_bean->rst_source_definition = json_encode($def);
            $br_bean->save();
            return $new_uid;
        } else {
            return false;
        }
    }
}
