<?php
$clientCache['Documents']['base']['filter'] = array (
  'default' => 
  array (
    'meta' => 
    array (
      'default_filter' => 'all_records',
      'quicksearch_field' => 
      array (
        0 => 'document_name',
      ),
      'quicksearch_priority' => 2,
      'filters' => 
      array (
        0 => 
        array (
          'id' => 'created_by_me',
          'name' => 'LBL_CREATED_BY_ME',
          'filter_definition' => 
          array (
            '$creator' => '',
          ),
          'editable' => false,
        ),
      ),
      'fields' => 
      array (
        'document_name' => 
        array (
        ),
        'category_id' => 
        array (
        ),
        'subcategory_id' => 
        array (
        ),
        'status_id' => 
        array (
        ),
        'doc_type' => 
        array (
        ),
        'active_date' => 
        array (
        ),
        'exp_date' => 
        array (
        ),
        'date_entered' => 
        array (
        ),
        'date_modified' => 
        array (
        ),
        'assigned_user_name' => 
        array (
        ),
        'team_name' => 
        array (
        ),
        '$owner' => 
        array (
          'predefined_filter' => true,
          'vname' => 'LBL_CURRENT_USER_FILTER',
        ),
        '$favorite' => 
        array (
          'predefined_filter' => true,
          'vname' => 'LBL_FAVORITES_FILTER',
        ),
      ),
    ),
  ),
  'file' => 
  array (
    'meta' => 
    array (
      'quicksearch_field' => 
      array (
        0 => 'document_name',
      ),
      'quicksearch_priority' => 2,
    ),
  ),
  'basic' => 
  array (
    'meta' => 
    array (
      'create' => true,
      'quicksearch_field' => 
      array (
        0 => 'name',
      ),
      'quicksearch_priority' => 1,
      'quicksearch_split_terms' => false,
      'filters' => 
      array (
        0 => 
        array (
          'id' => 'all_records',
          'name' => 'LBL_LISTVIEW_FILTER_ALL',
          'filter_definition' => 
          array (
          ),
          'editable' => false,
        ),
        1 => 
        array (
          'id' => 'assigned_to_me',
          'name' => 'LBL_ASSIGNED_TO_ME',
          'filter_definition' => 
          array (
            '$owner' => '',
          ),
          'editable' => false,
        ),
        2 => 
        array (
          'id' => 'favorites',
          'name' => 'LBL_FAVORITES',
          'filter_definition' => 
          array (
            '$favorite' => '',
          ),
          'editable' => false,
        ),
        3 => 
        array (
          'id' => 'recently_viewed',
          'name' => 'LBL_RECENTLY_VIEWED',
          'filter_definition' => 
          array (
            '$tracker' => '-7 DAY',
          ),
          'editable' => false,
        ),
        4 => 
        array (
          'id' => 'recently_created',
          'name' => 'LBL_NEW_RECORDS',
          'filter_definition' => 
          array (
            'date_entered' => 
            array (
              '$dateRange' => 'last_7_days',
            ),
          ),
          'editable' => false,
        ),
      ),
    ),
  ),
  '_hash' => '77f0682f39ebc32d8743cac9ea4e2577',
);

