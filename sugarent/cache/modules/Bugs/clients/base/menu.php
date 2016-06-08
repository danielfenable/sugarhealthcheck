<?php
$clientCache['Bugs']['base']['menu'] = array (
  'quickcreate' => 
  array (
    'meta' => 
    array (
      'layout' => 'create',
      'label' => 'LNK_NEW_BUG',
      'visible' => false,
      'icon' => 'fa-plus',
    ),
  ),
  'header' => 
  array (
    'meta' => 
    array (
      0 => 
      array (
        'route' => '#Bugs/create',
        'label' => 'LNK_NEW_BUG',
        'acl_action' => 'create',
        'acl_module' => 'Bugs',
        'icon' => 'fa-plus',
      ),
      1 => 
      array (
        'route' => '#Bugs',
        'label' => 'LNK_BUG_LIST',
        'acl_action' => 'list',
        'acl_module' => 'Bugs',
        'icon' => 'fa-bars',
      ),
      2 => 
      array (
        'route' => '#bwc/index.php?module=Reports&action=index&view=bugs&query=true&report_module=Bugs',
        'label' => 'LNK_BUG_REPORTS',
        'acl_action' => 'list',
        'acl_module' => 'Bugs',
        'icon' => 'fa-bars',
      ),
      3 => 
      array (
        'route' => '#bwc/index.php?module=Import&action=Step1&import_module=Bugs&return_module=Bugs&return_action=index',
        'label' => 'LNK_IMPORT_BUGS',
        'acl_action' => 'import',
        'acl_module' => 'Bugs',
        'icon' => 'fa-arrow-circle-o-up',
      ),
    ),
  ),
  '_hash' => '3cc8471c593311e6f4005f50311f4409',
);

