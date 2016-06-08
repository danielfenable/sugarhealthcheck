<?php
$clientCache['Manufacturers']['base']['filter'] = array (
  'default' => 
  array (
    'meta' => 
    array (
      'default_filter' => 'all_records',
      'quicksearch_field' => 
      array (
        0 => 'name',
      ),
      'quicksearch_priority' => 1,
    ),
  ),
  'basic' => 
  array (
    'meta' => 
    array (
      'create' => false,
      'filters' => 
      array (
        0 => 
        array (
          'id' => 'all_records',
          'name' => 'LBL_MODULE_NAME',
          'filter_definition' => 
          array (
            'status' => 
            array (
              '$in' => 
              array (
                0 => 'Active',
              ),
            ),
          ),
          'editable' => false,
        ),
      ),
    ),
  ),
  '_hash' => '999a430d16014fb0b30e9932ac4a4559',
);

