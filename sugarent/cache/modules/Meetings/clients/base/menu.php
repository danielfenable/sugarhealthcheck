<?php
$clientCache['Meetings']['base']['menu'] = array (
  'quickcreate' => 
  array (
    'meta' => 
    array (
      'layout' => 'create',
      'label' => 'LNK_NEW_MEETING',
      'visible' => true,
      'order' => 7,
      'icon' => 'fa-calendar',
    ),
  ),
  'header' => 
  array (
    'meta' => 
    array (
      0 => 
      array (
        'route' => '#Meetings/create',
        'label' => 'LNK_NEW_MEETING',
        'acl_action' => 'create',
        'acl_module' => 'Meetings',
        'icon' => 'fa-plus',
      ),
      1 => 
      array (
        'route' => '#Meetings',
        'label' => 'LNK_MEETING_LIST',
        'acl_action' => 'list',
        'acl_module' => 'Meetings',
        'icon' => 'fa-bars',
      ),
      2 => 
      array (
        'route' => '#bwc/index.php?module=Import&action=Step1&import_module=Meetings&return_module=Meetings&return_action=index',
        'label' => 'LNK_IMPORT_MEETINGS',
        'acl_action' => 'import',
        'acl_module' => 'Meetings',
        'icon' => 'fa-arrow-circle-o-up',
      ),
    ),
  ),
  '_hash' => '08ebd98b559f659bf787c723cf6c6ad4',
);

