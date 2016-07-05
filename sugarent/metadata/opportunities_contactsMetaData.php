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
$dictionary['opportunities_contacts'] = array(
    'table' => 'opportunities_contacts',
    'fields' => array(
        array('name' => 'id',               'type' => 'varchar', 'len' => '36'),
        array('name' => 'contact_id',       'type' => 'varchar', 'len' => '36'),
        array('name' => 'opportunity_id',   'type' => 'varchar', 'len' => '36'),
        array('name' => 'contact_role',     'type' => 'varchar', 'len' => '50'),
        array('name' => 'date_modified',    'type' => 'datetime'),
        array('name' => 'deleted',          'type' => 'bool',    'len' => '1', 'default' => '0', 'required' => false)
    ),
    'indices' => array(
        array('name' => 'opportunities_contactspk', 'type' => 'primary', 'fields' => array('id')),
        array('name' => 'idx_con_opp_con', 'type' => 'index', 'fields' => array('contact_id')),
        array('name' => 'idx_con_opp_opp', 'type' => 'index', 'fields' => array('opportunity_id')),
        array('name' => 'idx_opportunities_contacts', 'type' => 'alternate_key', 'fields' => array('opportunity_id', 'contact_id'))


    ),
    'relationships' => array(
        'opportunities_contacts' => array(
            'lhs_module' => 'Opportunities',
            'lhs_table' => 'opportunities',
            'lhs_key' => 'id',
            'rhs_module' => 'Contacts',
            'rhs_table' => 'contacts',
            'rhs_key' => 'id',
            'relationship_type' => 'many-to-many',
            'join_table' => 'opportunities_contacts',
            'join_key_lhs' => 'opportunity_id',
            'join_key_rhs' => 'contact_id',
        )
    )
)



?>
