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

$dictionary['Prospect'] = array(
    'table' => 'prospects',
    'unified_search' => true,
    'fields' => array(
        'tracker_key' => array(
            'name' => 'tracker_key',
            'vname' => 'LBL_TRACKER_KEY',
            'type' => 'int',
            'len' => '11',
            'required' => true,
            'auto_increment' => true,
            'readonly' => true,
            'importable' => 'false',
            'studio' => array('editview' => false),
        ),
        'birthdate' => array(
            'name' => 'birthdate',
            'vname' => 'LBL_BIRTHDATE',
            'massupdate' => false,
            'type' => 'date',
        ),
        'do_not_call' => array(
            'name' => 'do_not_call',
            'vname' => 'LBL_DO_NOT_CALL',
            'type' => 'bool',
            'default' => '0',
        ),
        'lead_id' => array(
            'name' => 'lead_id',
            'type' => 'id',
            'reportable' => false,
            'vname' => 'LBL_LEAD_ID',
        ),
        'account_name' => array(
            'name' => 'account_name',
            'vname' => 'LBL_ACCOUNT_NAME',
            'type' => 'varchar',
            'len' => '150',
        ),
        'campaign_id' => array(
        'name' => 'campaign_id',
            'comment' => 'Campaign that generated lead',
            'vname' => 'LBL_CAMPAIGN_ID',
            'rname' => 'id',
            'id_name' => 'campaign_id',
            'type' => 'id',
            'table' => 'campaigns',
            'isnull' => 'true',
            'module' => 'Campaigns',
            //'dbType' => 'char',
            'reportable' => false,
            'massupdate' => false,
            'duplicate_merge' => 'disabled',
        ),
        'email_addresses' => array(
            'name' => 'email_addresses',
            'type' => 'link',
            'relationship' => 'prospects_email_addresses',
            'source' => 'non-db',
            'vname' => 'LBL_EMAIL_ADDRESSES',
            'reportable' => false,
            'rel_fields' => array('primary_address' => array('type' => 'bool')),
        ),
        'email_addresses_primary' => array(
            'name' => 'email_addresses_primary',
            'type' => 'link',
            'relationship' => 'prospects_email_addresses_primary',
            'source' => 'non-db',
            'vname' => 'LBL_EMAIL_ADDRESS_PRIMARY',
            'duplicate_merge' => 'disabled',
        ),
        'campaigns' => array(
            'name' => 'campaigns',
            'type' => 'link',
            'relationship' => 'prospect_campaign_log',
            'module' => 'CampaignLog',
            'bean_name' => 'CampaignLog',
            'source' => 'non-db',
            'vname' => 'LBL_CAMPAIGNLOG',
        ),
        'prospect_lists' => array(
            'name' => 'prospect_lists',
            'type' => 'link',
            'relationship' => 'prospect_list_prospects',
            'module' => 'ProspectLists',
            'source' => 'non-db',
            'vname' => 'LBL_PROSPECT_LIST',
        ),
        'calls' => array(
            'name' => 'calls',
            'type' => 'link',
            'relationship' => 'prospect_calls',
            'source' => 'non-db',
            'vname' => 'LBL_CALLS',
            'module' => 'Calls',
        ),
        'meetings' => array(
            'name' => 'meetings',
            'type' => 'link',
            'relationship' => 'prospect_meetings',
            'source' => 'non-db',
            'vname' => 'LBL_MEETINGS',
            'module' => 'Meetings',
        ),
        'notes' => array(
            'name' => 'notes',
            'type' => 'link',
            'relationship' => 'prospect_notes',
            'source' => 'non-db',
            'vname' => 'LBL_NOTES',
        ),
        //d&b principal id, a unique id assigned to a contact by D&B API
        //this contact is used for dupe check
        'dnb_principal_id' => array (
            'name' => 'dnb_principal_id',
            'vname' => 'LBL_DNB_PRINCIPAL_ID',
            'type' => 'varchar',
            'len' => 30,
            'comment' => 'Unique Id For D&B Contact',
        ),
        'tasks' => array (
            'name' => 'tasks',
            'type' => 'link',
            'relationship' => 'prospect_tasks',
            'source' => 'non-db',
            'vname' => 'LBL_TASKS',
        ),
        'emails' => array(
            'name' => 'emails',
            'type' => 'link',
            'relationship' => 'emails_prospects_rel',
            'source' => 'non-db',
            'vname' => 'LBL_EMAILS',
        ),
        'archived_emails' => array(
            'name' => 'archived_emails',
            'type' => 'link',
            'link_file' => 'modules/Emails/ArchivedEmailsLink.php',
            'link_class' => 'ArchivedEmailsLink',
            'source' => 'non-db',
            'vname' => 'LBL_EMAILS',
            'module' => 'Emails',
            'link_type' => 'many',
            'relationship' => '',
            'hideacl' => true,
            'readonly' => true,
        ),
        'lead' => array(
            'name' => 'lead',
            'type' => 'link',
            'relationship' => 'lead_prospect',
            'module' => 'Leads',
            'source' => 'non-db',
            'vname' => 'LBL_LEAD',
        ),
    ),
    'indices' => array(
        array(
            'name' => 'prospect_auto_tracker_key',
            'type' => 'index',
            'fields' => array('tracker_key')
        ),
        array(
            'name' => 'idx_prospects_last_first',
            'type' => 'index',
            'fields' => array(
                'last_name',
                'first_name',
                'deleted'
            )
        ),
        array(
            'name' => 'idx_prospecs_del_last',
            'type' => 'index',
            'fields' => array(
                'last_name',
                'deleted'
            )
        ),
        array('name' => 'idx_prospects_assigned', 'type' => 'index', 'fields' => array('assigned_user_id')),
        array('name' => 'idx_prospect_title', 'type' => 'index', 'fields' => array('title')),
    ),
    'relationships' => array(
        'prospect_tasks' => array(
            'lhs_module' => 'Prospects',
            'lhs_table' => 'prospects',
            'lhs_key' => 'id',
            'rhs_module' => 'Tasks',
            'rhs_table' => 'tasks',
            'rhs_key' => 'parent_id',
            'relationship_type' => 'one-to-many',
            'relationship_role_column' => 'parent_type',
            'relationship_role_column_value' => 'Prospects'
        ),
        'prospect_notes' => array(
            'lhs_module' => 'Prospects',
            'lhs_table' => 'prospects',
            'lhs_key' => 'id',
            'rhs_module' => 'Notes',
            'rhs_table' => 'notes',
            'rhs_key' => 'parent_id',
            'relationship_type' => 'one-to-many',
            'relationship_role_column' => 'parent_type',
            'relationship_role_column_value' => 'Prospects'
        ),
        'prospect_meetings' => array(
            'lhs_module' => 'Prospects',
            'lhs_table' => 'prospects',
            'lhs_key' => 'id',
            'rhs_module' => 'Meetings',
            'rhs_table' => 'meetings',
            'rhs_key' => 'parent_id',
            'relationship_type' => 'one-to-many',
            'relationship_role_column' => 'parent_type',
            'relationship_role_column_value' => 'Prospects'
        ),
        'prospect_calls' => array(
            'lhs_module' => 'Prospects',
            'lhs_table' => 'prospects',
            'lhs_key' => 'id',
            'rhs_module' => 'Calls',
            'rhs_table' => 'calls',
            'rhs_key' => 'parent_id',
            'relationship_type' => 'one-to-many',
            'relationship_role_column' => 'parent_type',
            'relationship_role_column_value' => 'Prospects'
        ),
        'prospect_emails' => array(
            'lhs_module' => 'Prospects',
            'lhs_table' => 'prospects',
            'lhs_key' => 'id',
            'rhs_module' => 'Emails',
            'rhs_table' => 'emails',
            'rhs_key' => 'parent_id',
            'relationship_type' => 'one-to-many',
            'relationship_role_column' => 'parent_type',
            'relationship_role_column_value' => 'Prospects'
        ),
        'prospect_campaign_log' => array(
            'lhs_module' => 'Prospects',
            'lhs_table' => 'prospects',
            'lhs_key' => 'id',
            'rhs_module' => 'CampaignLog',
            'rhs_table' => 'campaign_log',
            'rhs_key' => 'target_id',
            'relationship_type' => 'one-to-many'
        ),

    ),
    'duplicate_check' => array(
        'enabled' => true,
        'FilterDuplicateCheck' => array(
            'filter_template' => array(
                array(
                    '$or' => array(
                        array(
                            '$and' => array(
                                array('first_name' => array('$starts' => '$first_name')),
                                array('last_name' => array('$starts' => '$last_name')),
                                array('account_name' => array('$starts' => '$account_name')),
                                array('dnb_principal_id' => array('$equals' => '$dnb_principal_id')),
                            )
                        ),
                        array('phone_work' => array('$equals' => '$phone_work'))
                    )
                )
            ),
            'ranking_fields' => array(
                array('in_field_name' => 'phone_work', 'dupe_field_name' => 'phone_work'),
                array('in_field_name' => 'account_name', 'dupe_field_name' => 'account_name'),
                array('in_field_name' => 'last_name', 'dupe_field_name' => 'last_name'),
                array('in_field_name' => 'first_name', 'dupe_field_name' => 'first_name'),
            )
        )
    ),
);
VardefManager::createVardef(
    'Prospects',
    'Prospect',
    array(
        'default',
        'assignable',
        'team_security',
        'person'
    )
);
