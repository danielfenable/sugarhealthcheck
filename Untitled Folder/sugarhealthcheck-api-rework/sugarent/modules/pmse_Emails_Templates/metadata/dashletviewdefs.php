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

$dashletData['pmse_Emails_TemplatesDashlet']['searchFields'] = array (
    'date_entered' =>
        array (
            'default' => '',
        ),
    'date_modified' =>
        array (
            'default' => '',
        ),
    'team_id' =>
        array (
            'default' => '',
        ),
    'assigned_user_id' =>
        array (
            'type' => 'assigned_user_name',
            'default' => 'Administrator',
        ),
);
$dashletData['pmse_Emails_TemplatesDashlet']['columns'] = array (
    'name' =>
        array (
            'width' => '40',
            'label' => 'LBL_LIST_NAME',
            'link' => true,
            'default' => true,
            'name' => 'name',
        ),
    'date_entered' =>
        array (
            'width' => '15',
            'label' => 'LBL_DATE_ENTERED',
            'default' => true,
            'name' => 'date_entered',
        ),
    'date_modified' =>
        array (
            'width' => '15',
            'label' => 'LBL_DATE_MODIFIED',
            'name' => 'date_modified',
        ),
    'created_by' =>
        array (
            'width' => '8',
            'label' => 'LBL_CREATED',
            'name' => 'created_by',
        ),
    'assigned_user_name' =>
        array (
            'width' => '8',
            'label' => 'LBL_LIST_ASSIGNED_USER',
            'name' => 'assigned_user_name',
        ),
);
