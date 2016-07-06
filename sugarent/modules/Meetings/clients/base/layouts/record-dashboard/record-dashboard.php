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

$viewdefs['Meetings']['base']['layout']['record-dashboard'] = array(
    'metadata' => array(
        'components' => array(
            array(
                'rows' => array(
                    array(
                        array(
                            'view' => array(
                                'type' => 'dashablelist',
                                'label' => 'LBL_MY_SCHEDULED_MEETINGS',
                                'display_columns' => array(
                                    'date_start',
                                    'name',
                                    'parent_name',
                                ),
                                'orderBy' => array(
                                    'field' => 'date_start',
                                    'direction' => 'asc',
                                ),
                                'filter_id' => 'my_scheduled_meetings',
                            ),
                            'context' => array(
                                'module' => 'Meetings',
                            ),
                            'width' => 12,
                        ),
                    ),
                ),
                'width' => 12,
            ),
        ),
    ),
    'name' => 'LBL_DEFAULT_DASHBOARD_TITLE',
);

