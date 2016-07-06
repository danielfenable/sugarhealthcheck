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
 * Add modules to tabs for CE->PRO
 * TODO: irrelevant for 7?
 */
class SugarUpgradeAddPMSEModules extends UpgradeScript
{
    public $order = 4001;
    public $type = self::UPGRADE_DB;

    public function run()
    {
        if ($this->fromFlavor('ent') && version_compare($this->from_version, '7.6.0', '>=')) {
            return;
        }

        //include tab controller
        require_once('modules/MySettings/TabController.php');
        $newTB = new TabController();

        $must_have_modules= array(
            'pmse_Project',
            'pmse_Inbox',
            'pmse_Business_Rules',
            'pmse_Emails_Templates',
        );

        //grab the existing system tabs
        $tabs = $newTB->get_system_tabs();

        //add the new tabs to the array
        foreach($must_have_modules as $nm ){
            $tabs[$nm] = $nm;
        }

        //now assign the modules to system tabs
        $newTB->set_system_tabs($tabs);
        $this->log('module tabs updated with pmse');
    }
}
