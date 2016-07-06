<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
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

 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$viewdefs['Meetings']['mobile']['view']['edit'] = array(
    'templateMeta' => array(
        'maxColumns' => '1',
        'widths' => array(
            array('label' => '10', 'field' => '30'),
        ),
    ),
    'panels' => array(
        array(
            'label' => 'LBL_PANEL_DEFAULT',
            'fields' => array(
                array(
                    'name' => 'name',
                    'displayParams' => array(
                        'required' => true,
                        'wireless_edit_only' => true,)),
                'date_start',
                'status',
                array(
                    'name' => 'duration',
                    'type' => 'fieldset',
                    'related_fields' => array('duration_hours', 'duration_minutes'),
                    'label' => "LBL_DURATION",
                    'fields' => array(
                        array(
                            'name' => 'duration_hours',
                            'displayParams' => array('required' => true),
                        ),
                        array(
                            'name' => 'duration_minutes',
                            'type' => 'enum',
                            'options' => 'duration_intervals',
                            'displayParams' => array('required' => true),  
                        ),
                    ),
                ),
                array(
                    'name' => 'reminder',
                    'type' => 'fieldset',
                    'orientation' => 'horizontal',
                    'related_fields' => array('reminder_checked', 'reminder_time'),
                    'label' => "LBL_REMINDER",
                    'fields' => array(
                        array(
                            'name' => 'reminder_checked',
                        ),
                        array(
                            'name' => 'reminder_time',
                            'type' => 'enum',
                            'options' => 'reminder_time_options'
                        ),
                    ),
                ),
                array(
                    'name' => 'email_reminder',
                    'type' => 'fieldset',
                    'orientation' => 'horizontal',
                    'related_fields' => array('email_reminder_checked', 'email_reminder_time'),
                    'label' => "LBL_EMAIL_REMINDER",
                    'fields' => array(
                        array(
                            'name' => 'email_reminder_checked',
                        ),
                        array(
                            'name' => 'email_reminder_time',
                            'type' => 'enum',
                            'options' => 'reminder_time_options'
                        ),
                    ),
                ),
                'description',
                'parent_name',
                'assigned_user_name',
                'team_name',
            )
        )
    ),
);
?>