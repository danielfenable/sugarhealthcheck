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


$object_name = strtolower($object_name);
$app_list_strings = array (
  $object_name.'_priority_dom' => 
  array (
    'P1' => 'Високий',
    'P2' => 'Середній',
    'P3' => 'Низький',
  ),
  $object_name.'_resolution_dom' => 
  array (
    '' => '',
    'Accepted' => 'Прийнятий',
    'Closed' => 'Закритий',
    'Duplicate' => 'Дублікат',
    'Invalid' => 'Недійсний',
    'Out of Date' => 'Застарілий',
  ),
  $object_name.'_status_dom' => 
  array (
    'Assigned' => 'Призначений',
    'Closed' => 'Закритий',
    'Duplicate' => 'Дублікат',
    'New' => 'Новий',
    'Pending Input' => 'Очікує рішення',
    'Rejected' => 'Відхилений',
  ),
  $object_name.'_type_dom' => 
  array (
    'Administration' => 'Адміністрування',
    'Product' => 'Продукт',
    'User' => 'Користувач',
  ),
);

