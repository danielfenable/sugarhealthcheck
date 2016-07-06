<?php 
 $GLOBALS["dictionary"]["tracker_sessions"]=array (
  'table' => 'tracker_sessions',
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'vname' => 'LBL_ID',
      'type' => 'int',
      'len' => '11',
      'reportable' => true,
      'isnull' => 'false',
      'auto_increment' => true,
    ),
    'session_id' => 
    array (
      'name' => 'session_id',
      'vname' => 'LBL_SESSION_ID',
      'type' => 'varchar',
      'len' => '36',
      'isnull' => 'false',
    ),
    'date_start' => 
    array (
      'name' => 'date_start',
      'vname' => 'LBL_DATE_START',
      'type' => 'datetime',
      'isnull' => 'false',
    ),
    'date_end' => 
    array (
      'name' => 'date_end',
      'vname' => 'LBL_DATE_LAST_ACTION',
      'type' => 'datetime',
      'isnull' => 'false',
    ),
    'seconds' => 
    array (
      'name' => 'seconds',
      'vname' => 'LBL_SECONDS',
      'type' => 'int',
      'len' => '9',
      'isnull' => 'false',
      'default' => '0',
    ),
    'client_ip' => 
    array (
      'name' => 'client_ip',
      'vname' => 'LBL_CLIENT_IP',
      'type' => 'varchar',
      'len' => '45',
      'isnull' => 'false',
    ),
    'user_id' => 
    array (
      'name' => 'user_id',
      'vname' => 'LBL_USER_ID',
      'type' => 'id',
      'len' => '36',
      'isnull' => 'false',
    ),
    'active' => 
    array (
      'name' => 'active',
      'vname' => 'LBL_ACTIVE',
      'type' => 'bool',
      'default' => '1',
    ),
    'round_trips' => 
    array (
      'name' => 'round_trips',
      'vname' => 'LBL_ROUNDTRIPS',
      'type' => 'int',
      'len' => '5',
      'isnull' => 'false',
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'vname' => 'LBL_DELETED',
      'type' => 'bool',
      'default' => '0',
      'reportable' => false,
      'comment' => 'Record deletion indicator',
    ),
    'assigned_user_link' => 
    array (
      'name' => 'assigned_user_link',
      'type' => 'link',
      'relationship' => 'tracker_user_id',
      'vname' => 'LBL_ASSIGNED_TO_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'tracker_sessions_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_tracker_sessions_s_id',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'session_id',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_tracker_sessions_uas_id',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'user_id',
        1 => 'active',
        2 => 'session_id',
      ),
    ),
  ),
  'relationships' => 
  array (
    'tracker_user_id' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'TrackerSessions',
      'rhs_table' => 'tracker',
      'rhs_key' => 'user_id',
      'relationship_type' => 'one-to-many',
    ),
  ),
  'related_calc_fields' => 
  array (
  ),
  'custom_fields' => false,
);