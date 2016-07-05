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

// $Id: vardefs.php 13782 2006-06-06 17:58:55 +0000 (Tue, 06 Jun 2006) majed $
$dictionary['projects_opportunities'] = array (
    'table' => 'projects_opportunities',
    'fields' => array (
        array('name' => 'id', 'type' => 'varchar', 'len' => '36'),
        array('name' => 'opportunity_id', 'type' => 'varchar', 'len' => '36'),
        array('name' => 'project_id', 'type' => 'varchar', 'len' => '36'),
        array('name' => 'date_modified', 'type' => 'datetime'),
        array('name' => 'deleted', 'type' => 'bool', 'len' => '1', 'default' => '0', 'required' => false),
    ),
    'indices' => array (
        array('name' => 'projects_opportunities_pk', 'type' =>'primary', 'fields'=>array('id')),
        array('name' => 'idx_proj_opp_proj', 'type' =>'index', 'fields'=>array('project_id')),
        array('name' => 'idx_proj_opp_opp', 'type' =>'index', 'fields'=>array('opportunity_id')),
        array('name' => 'projects_opportunities_alt', 'type'=>'alternate_key', 'fields'=>array('project_id','opportunity_id')),
    ),
    'relationships' => array (
        'projects_opportunities' => array(
            'lhs_module' => 'Project',
            'lhs_table' => 'project',
            'lhs_key' => 'id',
            'rhs_module' => 'Opportunities',
            'rhs_table' => 'opportunities',
            'rhs_key' => 'id',
            'relationship_type' => 'many-to-many',
            'join_table' => 'projects_opportunities',
            'join_key_lhs' => 'project_id',
            'join_key_rhs' => 'opportunity_id',
        ),
    ),
);
?>
