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



global $current_user, $app_strings;

$dashletData['MyEmailsDashlet']['searchFields'] = array(
												 	   'date_sent'  => array('default' => ''),
                                                       'name'  => array('default' => ''),
													   //'from_addr_name' => array('default' => ''),
                                                       //'team_id'          => array('default' => '', 'label'=>'LBL_TEAMS'),
                                                       'assigned_user_id'   => array('default' => ''),
                                                       );
$dashletData['MyEmailsDashlet']['columns'] = array(
                                                   'from_addr' => array('width'   => '15',
                                                                       'label'   => 'LBL_FROM',
                                                                       'default' => true),
												   'name' => array('width'   => '40',
                                                                   'label'   => 'LBL_SUBJECT',
                                                                   'link'    => true,
                                                                   'default' => true),
                                                   'to_addrs' => array('width'   => '15',
                                                                         'label'   => 'LBL_TO_ADDRS',
                                                                         'default' => false),
                                                   'assigned_user_name' => array('width'   => '15',
                                                                         'label'   => 'LBL_LIST_ASSIGNED',
                                                                         'default' => false),

                                                   'team_name' => array('width'   => '15',
                                                                        'label'   => 'LBL_LIST_TEAM',
                                                                        'sortable' => false),
                                                   'date_sent' => array('width'   => '15',
                                                                         'label'   => 'LBL_DATE_SENT',
                                                                         'default' => true,
                                                                         'defaultOrderColumn' => array('sortOrder' => 'ASC')
                                                                         ),
                                                  'date_entered' => array('width'   => '15',
                                                                          'label'   => 'LBL_DATE_ENTERED'),
                                                  'date_modified' => array('width'   => '15',
                                                                           'label'   => 'LBL_DATE_MODIFIED'),
                                                  'quick_reply' => array('width'   => '15',
                                                                        'label'   => '',
                                                                        'sortable' => false,
                                                                        'default' => true),
                                                   'create_related' => array('width'   => '25',
                                                                        'label'   => '',
                                                                        'sortable' => false,
                                                                        'default' => true),
                                                                        );

?>
