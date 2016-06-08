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
/*********************************************************************************

 * Description:
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc. All Rights
 * Reserved. Contributor(s): ______________________________________..
 * *******************************************************************************/


session_start();
$GLOBALS['installing'] = true;


require_once('include/JSON.php');

require_once('include/utils/db_utils.php');

require_once('include/utils/zip_utils.php');

require_once('modules/UpgradeWizard/uw_utils.php');



$json = getJSONobj();
/*
$upgradeStepTime = $json->decode(html_entity_decode($_REQUEST['upgradeStepTime']));
if(isset($tagdata['jsonObject']) && $tagdata['jsonObject'] != null){
	$upgradeStepTime = $upgradeStepTime['jsonObject'];
 }

 if(!isset($_SESSION['totalUpgradeTime'])){
   $_SESSION['totalUpgradeTime'] = 0;
 }
*/

 $_SESSION['totalUpgradeTime'] = $_SESSION['totalUpgradeTime']+$_REQUEST['upgradeStepTime'];
 $response = $_SESSION['totalUpgradeTime'];

$GLOBALS['log']->fatal('TOTAL TIME .....'.$_SESSION['totalUpgradeTime']);
 //$uptime = $uptime+$_REQUEST['upgradeStepTime'];
 $GLOBALS['log']->fatal($response);


 if (!empty($response)) {
    $json = getJSONobj();
	print $json->encode($response);
 }

sugar_cleanup();
exit();

?>
