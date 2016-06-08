<?php
$clientCache['Notes']['base']['menu'] = array (
  'quickcreate' => 
  array (
    'meta' => 
    array (
      'layout' => 'create',
      'label' => 'LNK_NEW_NOTE',
      'visible' => true,
      'order' => 9,
      'icon' => 'fa-plus',
      'related' => 
      array (
        0 => 
        array (
          'module' => 'Contacts',
          'link' => 'notes',
        ),
      ),
    ),
  ),
  'header' => 
  array (
    'meta' => 
    array (
      0 => 
      array (
        'route' => '#Notes/create',
        'label' => 'LNK_NEW_NOTE',
        'acl_action' => 'create',
        'acl_module' => 'Notes',
        'icon' => 'fa-plus',
      ),
      1 => 
      array (
        'route' => '#Notes',
        'label' => 'LNK_NOTE_LIST',
        'acl_action' => 'list',
        'acl_module' => 'Notes',
        'icon' => 'fa-bars',
      ),
      2 => 
      array (
        'route' => '#bwc/index.php?module=Import&action=Step1&import_module=Notes&return_module=Notes&return_action=index',
        'label' => 'LNK_IMPORT_NOTES',
        'acl_action' => 'import',
        'acl_module' => 'Notes',
        'icon' => 'fa-arrow-circle-o-up',
      ),
    ),
  ),
  '_hash' => '243ee8b1e743781bc483ea7e94d67b8c',
);

