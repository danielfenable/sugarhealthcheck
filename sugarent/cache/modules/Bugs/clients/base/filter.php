<?php
$clientCache['Bugs']['base']['filter'] = array (
  'default' => 
  array (
    'meta' => 
    array (
      'quicksearch_field' => 
      array (
        0 => 'name',
        1 => 'bug_number',
      ),
      'quicksearch_priority' => 2,
      'default_filter' => 'all_records',
      'fields' => 
      array (
        'name' => 
        array (
        ),
        'status' => 
        array (
        ),
        'priority' => 
        array (
        ),
        'found_in_release' => 
        array (
        ),
        'fixed_in_release' => 
        array (
        ),
        'resolution' => 
        array (
        ),
        'bug_number' => 
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
        'tag' => 
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
  '_hash' => 'a82d032ad7fca07abeacffb23c746ac5',
);

