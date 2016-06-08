<?php
$clientCache['Releases']['base']['filter'] = array (
  'default' => 
  array (
    'meta' => 
    array (
      'default_filter' => 'all_records',
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
          'name' => 'LBL_ACTIVE_RELEASES',
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
  '_hash' => 'a27922978f8ee95c2831d380e5772bf6',
);

