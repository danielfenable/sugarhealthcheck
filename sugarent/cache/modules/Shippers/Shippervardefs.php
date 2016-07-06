<?php 
 $GLOBALS["dictionary"]["Shipper"]=array (
  'table' => 'shippers',
  'favorites' => false,
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'vname' => 'LBL_ID',
      'type' => 'id',
      'required' => true,
      'reportable' => false,
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'vname' => 'LBL_DELETED',
      'type' => 'bool',
      'reportable' => false,
      'required' => false,
    ),
    'date_entered' => 
    array (
      'name' => 'date_entered',
      'vname' => 'LBL_DATE_ENTERED',
      'type' => 'datetime',
      'required' => true,
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'vname' => 'LBL_DATE_MODIFIED',
      'type' => 'datetime',
      'required' => true,
    ),
    'modified_user_id' => 
    array (
      'name' => 'modified_user_id',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_ASSIGNED_TO',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => 'false',
      'dbType' => 'id',
      'reportable' => true,
      'required' => true,
    ),
    'created_by' => 
    array (
      'name' => 'created_by',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_ASSIGNED_TO',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => 'false',
      'dbType' => 'id',
    ),
    'name' => 
    array (
      'name' => 'name',
      'vname' => 'LBL_NAME',
      'type' => 'name',
      'dbType' => 'varchar',
      'len' => '50',
      'required' => true,
      'importable' => 'required',
    ),
    'list_order' => 
    array (
      'name' => 'list_order',
      'vname' => 'LBL_LIST_ORDER',
      'type' => 'int',
      'len' => '4',
      'importable' => 'required',
    ),
    'default_cost' => 
    array (
      'name' => 'default_cost',
      'vname' => 'LBL_DEFAULT_COST',
      'type' => 'currency',
      'len' => '26,6',
      'audited' => true,
      'comment' => 'Default cost (Shown)',
    ),
    'default_cost_usdollar' => 
    array (
      'name' => 'default_cost_usdollar',
      'vname' => 'LBL_DEFAULT_COST_USDOLLAR',
      'type' => 'decimal',
      'len' => '26,6',
      'studio' => 
      array (
        'editview' => false,
        'mobile' => false,
      ),
      'readonly' => true,
      'is_base_currency' => true,
    ),
    'status' => 
    array (
      'name' => 'status',
      'vname' => 'LBL_STATUS',
      'type' => 'enum',
      'options' => 'shipper_status_dom',
      'dbType' => 'varchar',
      'len' => 100,
      'importable' => 'required',
    ),
    'quotes' => 
    array (
      'name' => 'quotes',
      'type' => 'link',
      'relationship' => 'shipper_quotes',
      'vname' => 'LBL_QUOTES',
      'source' => 'non-db',
    ),
  ),
  'acls' => 
  array (
    'SugarACLDeveloperOrAdmin' => 
    array (
      'aclModule' => 'Products',
      'allowUserRead' => true,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'shipperspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_shippers',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'name',
        1 => 'deleted',
      ),
    ),
  ),
  'relationships' => 
  array (
    'shipper_quotes' => 
    array (
      'lhs_module' => 'Shippers',
      'lhs_table' => 'shippers',
      'lhs_key' => 'id',
      'rhs_module' => 'Quotes',
      'rhs_table' => 'quotes',
      'rhs_key' => 'shipper_id',
      'relationship_type' => 'one-to-many',
    ),
  ),
  'related_calc_fields' => 
  array (
  ),
  'custom_fields' => false,
);