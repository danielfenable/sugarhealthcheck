<?php
// created: 2016-07-06 08:10:28
$unified_search_modules = array (
  'Accounts' => 
  array (
    'fields' => 
    array (
      'name' => 
      array (
        'query_type' => 'default',
      ),
      'email' => 
      array (
        'query_type' => 'default',
        'operator' => 'subquery',
        'subquery' => 'SELECT eabr.bean_id FROM email_addr_bean_rel eabr JOIN email_addresses ea ON (ea.id = eabr.email_address_id) WHERE eabr.deleted=0 AND ea.email_address LIKE',
        'db_field' => 
        array (
          0 => 'id',
        ),
        'vname' => 'LBL_ANY_EMAIL',
      ),
      'phone' => 
      array (
        'query_type' => 'default',
        'db_field' => 
        array (
          0 => 'phone_office',
        ),
        'vname' => 'LBL_ANY_PHONE',
      ),
    ),
    'default' => true,
  ),
  'Bugs' => 
  array (
    'fields' => 
    array (
      'name' => 
      array (
        'query_type' => 'default',
      ),
      'bug_number' => 
      array (
        'query_type' => 'default',
        'operator' => 'in',
      ),
    ),
    'default' => true,
  ),
  'Calls' => 
  array (
    'fields' => 
    array (
      'name' => 
      array (
        'query_type' => 'default',
      ),
    ),
    'default' => true,
  ),
  'Campaigns' => 
  array (
    'fields' => 
    array (
      'name' => 
      array (
        'query_type' => 'default',
      ),
    ),
    'default' => false,
  ),
  'Cases' => 
  array (
    'fields' => 
    array (
      'name' => 
      array (
        'query_type' => 'default',
      ),
      'case_number' => 
      array (
        'query_type' => 'default',
        'operator' => 'in',
      ),
      'account_name' => 
      array (
        'query_type' => 'default',
        'db_field' => 
        array (
          0 => 'accounts.name',
        ),
      ),
    ),
    'default' => true,
  ),
  'Contacts' => 
  array (
    'fields' => 
    array (
      'email' => 
      array (
        'query_type' => 'default',
        'operator' => 'subquery',
        'subquery' => 'SELECT eabr.bean_id FROM email_addr_bean_rel eabr JOIN email_addresses ea ON (ea.id = eabr.email_address_id) WHERE eabr.deleted=0 AND ea.email_address LIKE',
        'db_field' => 
        array (
          0 => 'id',
        ),
      ),
      'first_name' => 
      array (
        'query_type' => 'default',
      ),
      'last_name' => 
      array (
        'query_type' => 'default',
      ),
      'phone' => 
      array (
        'query_type' => 'default',
        'db_field' => 
        array (
          0 => 'phone_mobile',
          1 => 'phone_work',
          2 => 'phone_other',
          3 => 'phone_fax',
          4 => 'assistant_phone',
        ),
      ),
      'assistant' => 
      array (
        'query_type' => 'default',
      ),
      'account_name' => 
      array (
        'query_type' => 'default',
        'db_field' => 
        array (
          0 => 'accounts.name',
        ),
      ),
      'search_name' => 
      array (
        'query_type' => 'default',
        'db_field' => 
        array (
          0 => 'first_name',
          1 => 'last_name',
        ),
        'force_unifiedsearch' => true,
      ),
    ),
    'default' => true,
  ),
  'Contracts' => 
  array (
    'fields' => 
    array (
      'name' => 
      array (
        'query_type' => 'default',
      ),
      'account_name' => 
      array (
        'query_type' => 'default',
        'db_field' => 
        array (
          0 => 'accounts.name',
        ),
      ),
    ),
    'default' => false,
  ),
  'Documents' => 
  array (
    'fields' => 
    array (
      'document_name' => 
      array (
        'query_type' => 'default',
      ),
    ),
    'default' => true,
  ),
  'KBDocuments' => 
  array (
    'fields' => 
    array (
      'kbdocument_name' => 
      array (
        'query_type' => 'default',
      ),
    ),
    'default' => false,
  ),
  'Leads' => 
  array (
    'fields' => 
    array (
      'email' => 
      array (
        'query_type' => 'default',
        'operator' => 'subquery',
        'subquery' => 'SELECT eabr.bean_id FROM email_addr_bean_rel eabr JOIN email_addresses ea ON (ea.id = eabr.email_address_id) WHERE eabr.deleted=0 AND ea.email_address LIKE',
        'db_field' => 
        array (
          0 => 'id',
        ),
      ),
      'first_name' => 
      array (
        'query_type' => 'default',
      ),
      'last_name' => 
      array (
        'query_type' => 'default',
      ),
      'phone' => 
      array (
        'query_type' => 'default',
        'db_field' => 
        array (
          0 => 'phone_mobile',
          1 => 'phone_work',
          2 => 'phone_other',
          3 => 'phone_fax',
          4 => 'phone_home',
        ),
      ),
      'assistant' => 
      array (
        'query_type' => 'default',
      ),
      'account_name' => 
      array (
        'query_type' => 'default',
        'db_field' => 
        array (
          0 => 'leads.account_name',
        ),
      ),
      'search_name' => 
      array (
        'query_type' => 'default',
        'db_field' => 
        array (
          0 => 'first_name',
          1 => 'last_name',
        ),
        'force_unifiedsearch' => true,
      ),
    ),
    'default' => true,
  ),
  'Manufacturers' => 
  array (
    'fields' => 
    array (
      'name' => 
      array (
        'query_type' => 'default',
      ),
    ),
    'default' => true,
  ),
  'Meetings' => 
  array (
    'fields' => 
    array (
      'name' => 
      array (
        'query_type' => 'default',
      ),
    ),
    'default' => true,
  ),
  'Notes' => 
  array (
    'fields' => 
    array (
      'name' => 
      array (
        'query_type' => 'default',
      ),
    ),
    'default' => true,
  ),
  'Opportunities' => 
  array (
    'fields' => 
    array (
      'name' => 
      array (
        'query_type' => 'default',
      ),
      'account_name' => 
      array (
        'query_type' => 'default',
        'db_field' => 
        array (
          0 => 'accounts.name',
        ),
      ),
    ),
    'default' => true,
  ),
  'ProductCategories' => 
  array (
    'fields' => 
    array (
      'name' => 
      array (
        'query_type' => 'default',
      ),
    ),
    'default' => true,
  ),
  'Products' => 
  array (
    'fields' => 
    array (
      'name' => 
      array (
        'query_type' => 'default',
        'force_unifiedsearch' => true,
      ),
    ),
    'default' => true,
  ),
  'Project' => 
  array (
    'fields' => 
    array (
      'name' => 
      array (
        'query_type' => 'default',
      ),
    ),
    'default' => false,
  ),
  'ProjectTask' => 
  array (
    'fields' => 
    array (
      'name' => 
      array (
        'query_type' => 'default',
      ),
    ),
    'default' => false,
  ),
  'ProspectLists' => 
  array (
    'fields' => 
    array (
      'name' => 
      array (
        'query_type' => 'default',
      ),
    ),
    'default' => false,
  ),
  'Prospects' => 
  array (
    'fields' => 
    array (
      'first_name' => 
      array (
        'query_type' => 'default',
      ),
      'last_name' => 
      array (
        'query_type' => 'default',
      ),
      'phone' => 
      array (
        'query_type' => 'default',
        'db_field' => 
        array (
          0 => 'phone_mobile',
          1 => 'phone_work',
          2 => 'phone_other',
          3 => 'phone_fax',
          4 => 'phone_home',
        ),
      ),
      'assistant' => 
      array (
        'query_type' => 'default',
      ),
      'search_name' => 
      array (
        'query_type' => 'default',
        'db_field' => 
        array (
          0 => 'first_name',
          1 => 'last_name',
        ),
        'force_unifiedsearch' => true,
      ),
    ),
    'default' => false,
  ),
  'Quotes' => 
  array (
    'fields' => 
    array (
      'name' => 
      array (
        'query_type' => 'default',
      ),
      'quote_num' => 
      array (
        'query_type' => 'default',
        'operator' => 'in',
      ),
    ),
    'default' => false,
  ),
  'Tasks' => 
  array (
    'fields' => 
    array (
      'name' => 
      array (
        'query_type' => 'default',
      ),
      'contact_name' => 
      array (
        'query_type' => 'default',
        'db_field' => 
        array (
          0 => 'contacts.first_name',
          1 => 'contacts.last_name',
        ),
        'force_unifiedsearch' => true,
      ),
    ),
    'default' => false,
  ),
);