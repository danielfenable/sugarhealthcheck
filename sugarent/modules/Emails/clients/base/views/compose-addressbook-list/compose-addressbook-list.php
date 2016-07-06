<?php
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
$viewdefs['Emails']['base']['view']['compose-addressbook-list'] = array(
    'template'   => 'list',
    'selection'  => array(
        'type'                     => 'multi',
        'actions'                  => array(),
        'disable_select_all_alert' => true,
    ),
    'panels'     => array(
        array(
            'fields' => array(
                array(
                    'name'    => 'name',
                    'label'   => 'LBL_LIST_NAME',
                    'enabled' => true,
                    'default' => true,
                ),
                array(
                    'name'     => 'email',
                    'label'    => 'LBL_LIST_EMAIL',
                    'type'     => 'email',
                    'sortable' => true,
                    'enabled'  => true,
                    'default'  => true,
                ),
                array(
                    'name'     => '_module',
                    'label'    => 'LBL_MODULE',
                    'sortable' => false,
                    'enabled'  => true,
                    'default'  => true,
                ),
            ),
        ),
    ),
    'rowactions' => array(
        'css_class' => 'pull-right',
        'actions'   => array(
            array(
                'type'       => 'rowaction',
                'css_class'  => 'btn',
                'tooltip'    => 'LBL_PREVIEW',
                'event'      => 'list:preview:fire',
                'icon'       => 'fa-eye',
                'acl_action' => 'view',
            ),
        ),
    ),
);
