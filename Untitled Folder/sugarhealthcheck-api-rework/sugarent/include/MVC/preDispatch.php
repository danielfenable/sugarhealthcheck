<?php
if(!defined('sugarEntry'))define('sugarEntry', true);
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

if (!defined('SUGAR_BASE_DIR')) {
    define('SUGAR_BASE_DIR', str_replace('\\', '/', realpath(dirname(__FILE__) . '/../..')));
}

/*
 * First step in removing getimage and getYUIComboFile -- at least this bypasses most of the app,
 * making assets load faster.
 */
if( isset($_GET["entryPoint"]) )
{
	if($_GET["entryPoint"] == "getImage")
    {
		require_once('include/utils.php');
        require_once('include/SugarTheme/SugarTheme.php');
        require_once('include/utils/autoloader.php');
        require_once('include/SugarLogger/SugarNullLogger.php');
        $GLOBALS['log'] = new SugarNullLogger();

        SugarAutoLoader::init();

        SugarAutoLoader::requireWithCustom('include/SugarMetric/Helper.php');
        SugarMetric_Helper::run('image');

		include("include/SugarTheme/getImage.php");
		die();
	}
	else if($_GET["entryPoint"] == "getYUIComboFile")
    {
        require_once 'include/SugarMetric/Helper.php';
        require_once('include/SugarLogger/SugarNullLogger.php');
        $GLOBALS['log'] = new SugarNullLogger();

        SugarMetric_Helper::run('YUIComboFile');

		include("include/javascript/getYUIComboFile.php");
		die();
	}
}
