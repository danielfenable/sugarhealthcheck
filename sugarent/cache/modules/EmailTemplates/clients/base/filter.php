<?php
$clientCache['EmailTemplates']['base']['filter'] = array (
  'default' => 
  array (
    'meta' => 
    array (
      'default_filter' => 'all_email_type',
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
      'filters' => 
      array (
        0 => 
        array (
          'id' => 'all_email_type',
          'name' => 'LBL_FILTER_EMAIL_TYPE_TEMPLATES',
          'filter_definition' => 
          array (
            '$or' => 
            array (
              0 => 
              array (
                'type' => 
                array (
                  '$is_null' => '',
                ),
              ),
              1 => 
              array (
                'type' => 
                array (
                  '$equals' => '',
                ),
              ),
              2 => 
              array (
                'type' => 
                array (
                  '$equals' => 'email',
                ),
              ),
            ),
          ),
          'editable' => false,
        ),
      ),
    ),
  ),
  '_hash' => '2cf247c05bf66d360352fd32c7b1a94a',
);

