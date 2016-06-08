<?php
$clientCache['Calls']['base']['filter'] = array (
  'default' => 
  array (
    'meta' => 
    array (
      'default_filter' => 'all_records',
      'fields' => 
      array (
        'name' => 
        array (
        ),
        'status' => 
        array (
        ),
        'date_start' => 
        array (
        ),
        'date_end' => 
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
        5 => 
        array (
          'id' => 'my_scheduled_calls',
          'name' => 'LBL_MY_SCHEDULED_CALLS',
          'filter_definition' => 
          array (
            0 => 
            array (
              '$owner' => '',
            ),
            1 => 
            array (
              'status' => 
              array (
                '$in' => 
                array (
                  0 => 'Planned',
                ),
              ),
            ),
          ),
          'editable' => false,
        ),
      ),
    ),
  ),
  '_hash' => '84217904d207c73700247fec4a1f6c28',
);

