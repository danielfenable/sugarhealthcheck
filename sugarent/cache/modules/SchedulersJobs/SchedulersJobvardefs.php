<?php 
 $GLOBALS["dictionary"]["SchedulersJob"]=array (
  'table' => 'job_queue',
  'comment' => 'Job queue keeps the list of the jobs executed by this instance',
  'fields' => 
  array (
    'assigned_user_id' => 
    array (
      'name' => 'assigned_user_id',
      'vname' => 'LBL_ASSIGNED_TO_ID',
      'group' => 'assigned_user_name',
      'type' => 'id',
      'reportable' => false,
      'isnull' => 'false',
      'audited' => true,
      'duplicate_on_record_copy' => 'always',
      'comment' => 'User ID assigned to record',
      'duplicate_merge' => 'disabled',
      'mandatory_fetch' => true,
      'massupdate' => false,
    ),
    'assigned_user_name' => 
    array (
      'name' => 'assigned_user_name',
      'link' => 'assigned_user_link',
      'vname' => 'LBL_ASSIGNED_TO',
      'rname' => 'full_name',
      'type' => 'relate',
      'reportable' => false,
      'source' => 'non-db',
      'table' => 'users',
      'id_name' => 'assigned_user_id',
      'module' => 'Users',
      'duplicate_merge' => 'disabled',
      'duplicate_on_record_copy' => 'always',
      'sort_on' => 
      array (
        0 => 'last_name',
      ),
      'exportable' => true,
    ),
    'assigned_user_link' => 
    array (
      'name' => 'assigned_user_link',
      'type' => 'link',
      'relationship' => 'schedulersjobs_assigned_user',
      'vname' => 'LBL_ASSIGNED_TO_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
      'duplicate_merge' => 'enabled',
      'id_name' => 'assigned_user_id',
      'table' => 'users',
    ),
    'id' => 
    array (
      'name' => 'id',
      'vname' => 'LBL_NAME',
      'type' => 'id',
      'len' => '36',
      'required' => true,
      'reportable' => false,
    ),
    'name' => 
    array (
      'name' => 'name',
      'vname' => 'LBL_NAME',
      'type' => 'name',
      'link' => true,
      'dbType' => 'varchar',
      'len' => 255,
      'required' => true,
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'vname' => 'LBL_DELETED',
      'type' => 'bool',
      'required' => true,
      'default' => '0',
      'reportable' => false,
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
    'scheduler_id' => 
    array (
      'name' => 'scheduler_id',
      'vname' => 'LBL_SCHEDULER',
      'type' => 'id',
      'required' => false,
      'reportable' => false,
    ),
    'execute_time' => 
    array (
      'name' => 'execute_time',
      'vname' => 'LBL_EXECUTE_TIME',
      'type' => 'datetime',
      'required' => true,
    ),
    'status' => 
    array (
      'name' => 'status',
      'vname' => 'LBL_STATUS',
      'type' => 'enum',
      'options' => 'schedulers_times_dom',
      'len' => 20,
      'required' => true,
      'reportable' => true,
      'readonly' => true,
    ),
    'resolution' => 
    array (
      'name' => 'resolution',
      'vname' => 'LBL_RESOLUTION',
      'type' => 'enum',
      'options' => 'schedulers_resolution_dom',
      'len' => 20,
      'required' => true,
      'reportable' => true,
      'readonly' => true,
    ),
    'message' => 
    array (
      'name' => 'message',
      'vname' => 'LBL_MESSAGE',
      'type' => 'text',
      'required' => false,
      'reportable' => false,
    ),
    'target' => 
    array (
      'name' => 'target',
      'vname' => 'LBL_TARGET',
      'type' => 'varchar',
      'len' => 255,
      'required' => true,
      'reportable' => true,
    ),
    'data' => 
    array (
      'name' => 'data',
      'vname' => 'LBL_DATA',
      'type' => 'longtext',
      'required' => false,
      'reportable' => true,
    ),
    'requeue' => 
    array (
      'name' => 'requeue',
      'vname' => 'LBL_REQUEUE',
      'type' => 'bool',
      'default' => 0,
      'required' => false,
      'reportable' => true,
    ),
    'retry_count' => 
    array (
      'name' => 'retry_count',
      'vname' => 'LBL_RETRY_COUNT',
      'type' => 'tinyint',
      'required' => false,
      'reportable' => true,
      'readonly' => true,
    ),
    'failure_count' => 
    array (
      'name' => 'failure_count',
      'vname' => 'LBL_FAIL_COUNT',
      'type' => 'tinyint',
      'required' => false,
      'reportable' => true,
      'readonly' => true,
    ),
    'job_delay' => 
    array (
      'name' => 'job_delay',
      'vname' => 'LBL_INTERVAL',
      'type' => 'int',
      'required' => false,
      'reportable' => false,
    ),
    'client' => 
    array (
      'name' => 'client',
      'vname' => 'LBL_CLIENT',
      'type' => 'varchar',
      'len' => 255,
      'required' => true,
      'reportable' => true,
    ),
    'percent_complete' => 
    array (
      'name' => 'percent_complete',
      'vname' => 'LBL_PERCENT',
      'type' => 'int',
      'required' => false,
    ),
    'job_group' => 
    array (
      'name' => 'job_group',
      'vname' => 'LBL_JOB_GROUP',
      'type' => 'varchar',
      'len' => 255,
      'required' => false,
      'reportable' => true,
    ),
    'schedulers' => 
    array (
      'name' => 'schedulers',
      'vname' => 'LBL_SCHEDULER_ID',
      'type' => 'link',
      'relationship' => 'schedulers_jobs_rel',
      'source' => 'non-db',
      'link_type' => 'one',
    ),
  ),
  'acls' => 
  array (
    'SugarACLAdminOnly' => true,
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'job_queuepk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_status_scheduler',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'status',
        1 => 'scheduler_id',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_status_time',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'status',
        1 => 'execute_time',
        2 => 'date_entered',
      ),
    ),
    3 => 
    array (
      'name' => 'idx_status_entered',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'status',
        1 => 'date_entered',
      ),
    ),
    4 => 
    array (
      'name' => 'idx_status_modified',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'status',
        1 => 'date_modified',
      ),
    ),
    5 => 
    array (
      'name' => 'idx_group_status',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'job_group',
        1 => 'status',
      ),
    ),
  ),
  'relationships' => 
  array (
    'schedulersjobs_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'SchedulersJobs',
      'rhs_table' => 'job_queue',
      'rhs_key' => 'assigned_user_id',
      'relationship_type' => 'one-to-many',
    ),
  ),
  'name_format_map' => 
  array (
  ),
  'visibility' => 
  array (
  ),
  'templates' => 
  array (
    'assignable' => 'assignable',
  ),
  'related_calc_fields' => 
  array (
  ),
  'custom_fields' => false,
);