<?php
$clientCache['UserSignatures']['base']['filter'] = array (
  'default' => 
  array (
    'meta' => 
    array (
      'default_filter' => 'created_by_me',
    ),
  ),
  'basic' => 
  array (
    'meta' => 
    array (
      'create' => false,
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
            '$creator' => '',
          ),
          'editable' => false,
        ),
        1 => 
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
    ),
  ),
  '_hash' => '2ebdf0d31e99ace8b8f25360c3232ea6',
);

