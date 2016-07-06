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
  $object_name.'_category_dom' => 
  array (
    '' => '',
    'Knowledege Base' => 'Base de Conocimiento',
    'Marketing' => 'Mercadotecnia',
    'Sales' => 'Ventas',
  ),
  $object_name.'_status_dom' => 
  array (
    'Active' => 'Activo',
    'Draft' => 'Borrador',
    'Expired' => 'Caducado',
    'FAQ' => 'FAQ',
    'Pending' => 'Pendiente',
    'Under Review' => 'En Revisión',
  ),
  $object_name.'_subcategory_dom' => 
  array (
    '' => '',
    'FAQ' => 'FAQ',
    'Marketing Collateral' => 'Impresos de Mercadotecnia',
    'Product Brochures' => 'Folletos de Producto',
  ),
);

