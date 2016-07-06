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
//change directories to where this file is located.
chdir(dirname(__FILE__));
define('ENTRY_POINT_TYPE', 'api');
require_once('include/entryPoint.php');

$sapi_type = php_sapi_name();
if (substr($sapi_type, 0, 3) != 'cli') {
    sugar_die("silentFTSIndex.php is CLI only.\n");
}

if(empty($current_language)) {
	$current_language = $sugar_config['default_language'];
}

$app_list_strings = return_app_list_strings_language($current_language);
$app_strings = return_application_language($current_language);

global $current_user;
$current_user = BeanFactory::getBean('Users');
$current_user->getSystemUser();

// Pop off the filename
array_shift($argv); 

// Don't wipe the index if we're just doing individual modules
$clearData = empty($argv);

// Allows for php -f silentFTSIndex.php Bugs Cases
$modules = $argv;

require_once('include/SugarSearchEngine/SugarSearchEngineFullIndexer.php');
require_once('include/SugarSearchEngine/SugarSearchEngineAbstractBase.php');
try {
    SugarSearchEngineAbstractBase::markSearchEngineStatus(false); // set search engine to "up"
    $indexer = new SugarSearchEngineFullIndexer();
    if(!$indexer->performFullSystemIndex($modules, $clearData)) {
        echo "FTS index failed. Please check the sugarcrm.log for more details.\n";
        exit(1);
    }
} catch(Exception $e) {
    echo "Exception: ".$e->getMessage()."\n";
    exit(1);
}
exit(0);
