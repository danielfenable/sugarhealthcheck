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
 * Rebuild dashlets cache
 */
class SugarUpgradeRebuildDashlets extends UpgradeScript
{
    public $order = 3000;
    public $type = self::UPGRADE_CUSTOM;

    public function run()
    {
        if(is_file(sugar_cached('dashlets/dashlets.php'))) {
            unlink(sugar_cached('dashlets/dashlets.php'));
        }

        require_once('include/Dashlets/DashletCacheBuilder.php');
        $dc = new DashletCacheBuilder();
        $dc->buildCache();
    }
}
