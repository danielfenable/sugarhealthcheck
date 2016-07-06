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




if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


	
$object_name = strtolower($object_name);
$app_list_strings = array (
  $object_name.'_type_dom' => 
  array (
    'Partner' => 'Partner',
    'Prospect' => 'Prospect',
    '' => '',
    'Integrator' => 'Integrator',
    'Investor' => 'Investor',
    'Analyst' => 'Analytiker',
    'Competitor' => 'Konkurrent',
    'Customer' => 'Kunde',
    'Press' => 'Presse',
    'Reseller' => 'Distributør',
    'Other' => 'Annen',
  ),
);

