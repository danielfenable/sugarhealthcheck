<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from modules/Calls/Ext/LogicHooks/logic_hooks.php

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

$hook_array['before_relationship_update'][] = array(
    1,
    'CallsAcceptStatus',
    'include/CalendarEvents/CalendarEventsHookManager.php',
    'CalendarEventsHookManager',
    'beforeRelationshipUpdate',
);

?>
