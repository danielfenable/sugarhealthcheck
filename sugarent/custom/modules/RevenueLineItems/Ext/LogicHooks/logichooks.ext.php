<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from modules/RevenueLineItems/Ext/LogicHooks/SetForecastCommitStage.php

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
 * Before we save an opportunity, check if we need to set the commit stage
 */
$hook_array['before_save'][] = array(
    1,
    'setCommitStageIfEmpty',
    'modules/Forecasts/ForecastHooks.php',
    'ForecastHooks',
    'setCommitStageIfEmpty',
);

?>
<?php
// Merged from modules/RevenueLineItems/Ext/LogicHooks/SyncBestWorstWithLikely.php

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
 * Before we save an RevenueLineItem, if the sales stage is in one of the Forecasts Closed States, then we need to
 * make sure we sync the values
 */
$hook_array['before_save'][] = array(
    1,
    'setBestWorstEqualToLikelyAmount',
    'modules/Forecasts/ForecastHooks.php',
    'ForecastHooks',
    'setBestWorstEqualToLikelyAmount',
);

?>
<?php
// Merged from modules/RevenueLineItems/Ext/LogicHooks/ResaveRLIForAccounts.php

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
 * Resave RLI bean after the account_link relationship is removed. This will cause the RLI to pick up
 * the account from it's associated Opportunity through sugarlogic
 */
$hook_array['after_relationship_delete'][] = array(
    1,
    'afterRelationshipDelete',
    'modules/RevenueLineItems/RevenueLineItemHooks.php',
    'RevenueLineItemHooks',
    'afterRelationshipDelete',
);

?>
