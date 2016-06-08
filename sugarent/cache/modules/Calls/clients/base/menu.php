<?php
$clientCache['Calls']['base']['menu'] = array (
  'quickcreate' => 
  array (
    'meta' => 
    array (
      'layout' => 'create',
      'label' => 'LNK_NEW_CALL',
      'visible' => true,
      'order' => 6,
      'icon' => 'fa-phone',
    ),
  ),
  'header' => 
  array (
    'meta' => 
    array (
      0 => 
      array (
        'route' => '#Calls/create',
        'label' => 'LNK_NEW_CALL',
        'acl_action' => 'create',
        'acl_module' => 'Calls',
        'icon' => 'fa-plus',
      ),
      1 => 
      array (
        'route' => '#Calls',
        'label' => 'LNK_CALL_LIST',
        'acl_action' => 'list',
        'acl_module' => 'Calls',
        'icon' => 'fa-bars',
      ),
      2 => 
      array (
        'route' => '#bwc/index.php?module=Import&action=Step1&import_module=Calls&query=true&report_module=Calls',
        'label' => 'LNK_IMPORT_CALLS',
        'acl_action' => 'import',
        'acl_module' => 'Calls',
        'icon' => 'fa-arrow-circle-o-up',
      ),
      3 => 
      array (
        'route' => '#bwc/index.php?module=Reports&action=index&view=Calls',
        'label' => 'LBL_ACTIVITIES_REPORTS',
        'acl_action' => 'list',
        'acl_module' => 'Reports',
        'icon' => 'fa-bar-chart-o',
      ),
    ),
  ),
  '_hash' => '3bd3fe7d0bfb72da0e0e1db3fb7c7488',
);

