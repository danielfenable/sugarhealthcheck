<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from Ext/LogicHooks/SugarMetricHooks.php

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

$hook_array['after_entry_point'][] = array(1, 'smm', 'include/SugarMetric/HookManager.php', 'SugarMetric_HookManager', 'afterEntryPoint');
$hook_array['server_round_trip'][] = array(1, 'smm', 'include/SugarMetric/HookManager.php', 'SugarMetric_HookManager', 'serverRoundTrip');

?>
<?php
// Merged from Ext/LogicHooks/pmse.php

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

// Full text search.

$pmseHookClassPath = SugarAutoLoader::requireWithCustom('modules/pmse_Inbox/engine/PMSELogicHook.php');
$pmseHookClassName = SugarAutoLoader::customClass('PMSELogicHook');
$hook_array['before_save'][] = array(
    100,
    'fts',
    $pmseHookClassPath,
    $pmseHookClassName,
    'before_save'
);
$hook_array['after_save'][] = array(
    100,
    'fts',
    $pmseHookClassPath,
    $pmseHookClassName,
    'after_save'
);
$hook_array['after_delete'][] = array(
    100,
    'fts',
    $pmseHookClassPath,
    $pmseHookClassName,
    'after_delete'
);
//remove unnecessary globals
unset($pmseHookClassPath);
unset($pmseHookClassName);

?>
<?php
// Merged from Ext/LogicHooks/fts.php

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

// Full text search.

$managerClassPath = SugarAutoLoader::requireWithCustom('include/SugarSearchEngine/SugarSearchEngineQueueManager.php');
$managerClassName = SugarAutoLoader::customClass('SugarSearchEngineQueueManager');

$hook_array['after_save'][] = array(
    1,
    'fts',
    $managerClassPath,
    $managerClassName,
    'populateIndexQueue'
);

?>
<?php
// Merged from Ext/LogicHooks/activitystream.php

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

// Activity stream.
$activitystream = array(
    1,
    'activitystream',
    'modules/ActivityStream/Activities/ActivityQueueManager.php',
    'ActivityQueueManager',
    'eventDispatcher',
);
$hook_array['after_save'][] = $activitystream;
$hook_array['after_delete'][] = $activitystream;
$hook_array['after_undelete'][] = $activitystream;
$hook_array['after_relationship_add'][] = $activitystream;
$hook_array['after_relationship_delete'][] = $activitystream;
unset($activitystream);

?>
