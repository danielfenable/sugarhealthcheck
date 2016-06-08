<?php
$clientCache['Documents']['base']['menu'] = array (
  'quickcreate' => 
  array (
    'meta' => 
    array (
      'layout' => 'create',
      'label' => 'LNK_NEW_DOCUMENT',
      'visible' => true,
      'order' => 4,
      'icon' => 'fa-plus',
      'related' => 
      array (
        0 => 
        array (
          'module' => 'Accounts',
          'link' => 'documents',
        ),
        1 => 
        array (
          'module' => 'Contacts',
          'link' => 'documents',
        ),
        2 => 
        array (
          'module' => 'Opportunities',
          'link' => 'documents',
        ),
        3 => 
        array (
          'module' => 'RevenueLineItems',
          'link' => 'documents',
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
        'route' => '#bwc/index.php?module=Documents&action=editview',
        'label' => 'LNK_NEW_DOCUMENT',
        'acl_action' => 'create',
        'acl_module' => 'Documents',
        'icon' => 'fa-plus',
      ),
      1 => 
      array (
        'route' => '#Documents',
        'label' => 'LNK_DOCUMENT_LIST',
        'acl_action' => 'list',
        'acl_module' => 'Documents',
        'icon' => 'fa-bars',
      ),
    ),
  ),
  '_hash' => 'f3c1ca7753f8900185f26c4592889329',
);

