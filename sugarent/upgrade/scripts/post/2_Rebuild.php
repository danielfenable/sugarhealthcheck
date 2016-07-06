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
/**
 * Apply "repair&rebuild" to each bean's table
 * Rebuild relationships
 */
class SugarUpgradeRebuild extends UpgradeScript
{
    public $order = 2100;
    public $type = self::UPGRADE_ALL;

    public function run()
    {
        global $dictionary, $beanFiles;
        include "include/modules.php";
        require_once("modules/Administration/QuickRepairAndRebuild.php");
        $rac = new RepairAndClear('', '', false, false);
        $rac->clearVardefs();
        $rac->rebuildExtensions();
        $rac->clearExternalAPICache();
        // this is dirty, but otherwise SugarBean caches old defs :(
        $GLOBALS['reload_vardefs'] = true;
        $repairedTables = array();
        foreach ($beanFiles as $bean => $file) {
    	    if(file_exists($file)){
		        unset($GLOBALS['dictionary'][$bean]);
		        require_once($file);
		        $focus = new $bean ();
		        if(empty($focus->table_name) || isset($repairedTables[$focus->table_name])) {
		           continue;
		        }

        		if (($focus instanceOf SugarBean)) {
		        	if(!isset($repairedTables[$focus->table_name])) {
				            $sql = $this->db->repairTable($focus, true);
                            if(trim($sql) != '') {
				                $this->log('Running sql: ' . $sql);
                            }
				            $repairedTables[$focus->table_name] = true;
			        }

        			//Check to see if we need to create the audit table
		            if($focus->is_AuditEnabled() && !$focus->db->tableExists($focus->get_audit_table_name())){
                        $this->log('Creating audit table:' . $focus->get_audit_table_name());
		                $focus->create_audit_table();
                    }
		        }
	        }
        }

        unset ($dictionary);
        include ("modules/TableDictionary.php");
        foreach ($dictionary as $meta) {
	        $tablename = $meta['table'];

	        if(isset($repairedTables[$tablename])) {
	           continue;
	        }

	        $fielddefs = $meta['fields'];
	        $indices = $meta['indices'];
	        $sql = $this->db->repairTableParams($tablename, $fielddefs, $indices, true);
	        if(!empty($sql)) {
	            $this->log('Running sql: '. $sql);
	            $repairedTables[$tablename] = true;
	        }

        }

        $this->log('Database repaired');

        $this->log('Start rebuilding relationships');
        $_REQUEST['silent'] = true;
        include('modules/Administration/RebuildRelationship.php');
        $_REQUEST['upgradeWizard'] = true;
        include('modules/ACL/install_actions.php');
        $this->log('Done rebuilding relationships');
        unset($GLOBALS['reload_vardefs']);

        // enable metadata caching once the database schema has been rebuilt
        MetaDataManager::enableCache();
    }
}
