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
  $object_name.'_type_dom' => 
  array (
    '' => '[-blank-]',
    'Analyst' => '분석자',
    'Competitor' => '경쟁사',
    'Customer' => '고객사',
    'Integrator' => '적분기',
    'Investor' => '투자자',
    'Other' => '기타',
    'Partner' => '파트너',
    'Press' => '언론사',
    'Prospect' => '가망고객사',
    'Reseller' => '리셀러',
  ),
);

