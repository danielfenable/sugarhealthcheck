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
    'P1' => '高',
    'P2' => '中',
    'P3' => '低',
  ),
  $object_name.'_resolution_dom' => 
  array (
    '' => '[-空白-]',
    'Accepted' => '已接受',
    'Closed' => '已关闭',
    'Duplicate' => '复制',
    'Invalid' => '无效',
    'Out of Date' => '已过期',
  ),
  $object_name.'_status_dom' => 
  array (
    'Assigned' => '已指派',
    'Closed' => '已关闭',
    'Duplicate' => '复制',
    'New' => '新建',
    'Pending Input' => '等待输入',
    'Rejected' => '已拒绝',
  ),
  $object_name.'_type_dom' => 
  array (
    'Administration' => '系统管理',
    'Product' => '产品',
    'User' => '用户',
  ),
);

