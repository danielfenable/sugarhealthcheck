<?php 
 $GLOBALS["dictionary"]["Scheduler"]=array (
  'table' => 'schedulers',
  'fields' => 
  array (
    'my_favorite' => 
    array (
      'massupdate' => false,
      'name' => 'my_favorite',
      'vname' => 'LBL_FAVORITE',
      'type' => 'bool',
      'source' => 'non-db',
      'comment' => 'Favorite for the user',
      'studio' => 
      array (
        'list' => false,
        'recordview' => false,
      ),
      'link' => 'favorite_link',
      'rname' => 'id',
      'rname_exists' => true,
    ),
    'favorite_link' => 
    array (
      'name' => 'favorite_link',
      'type' => 'link',
      'relationship' => 'schedulers_favorite',
      'source' => 'non-db',
      'vname' => 'LBL_FAVORITE',
    ),
    'following' => 
    array (
      'massupdate' => false,
      'name' => 'following',
      'vname' => 'LBL_FOLLOWING',
      'type' => 'bool',
      'source' => 'non-db',
      'comment' => 'Is user following this record',
      'studio' => 'false',
      'link' => 'following_link',
      'rname' => 'id',
      'rname_exists' => true,
    ),
    'following_link' => 
    array (
      'name' => 'following_link',
      'type' => 'link',
      'relationship' => 'schedulers_following',
      'source' => 'non-db',
      'vname' => 'LBL_FOLLOWING',
    ),
    'id' => 
    array (
      'name' => 'id',
      'vname' => 'LBL_ID',
      'type' => 'id',
      'required' => true,
      'reportable' => true,
      'duplicate_on_record_copy' => 'no',
      'comment' => 'Unique identifier',
      'mandatory_fetch' => true,
    ),
    'name' => 
    array (
      'name' => 'name',
      'vname' => 'LBL_NAME',
      'type' => 'name',
      'link' => true,
      'dbType' => 'varchar',
      'len' => 255,
      'unified_search' => true,
      'full_text_search' => 
      array (
        'enabled' => true,
        'boost' => 3,
      ),
      'required' => true,
      'importable' => 'required',
      'duplicate_merge' => 'enabled',
      'merge_filter' => 'selected',
      'duplicate_on_record_copy' => 'always',
    ),
    'date_entered' => 
    array (
      'name' => 'date_entered',
      'vname' => 'LBL_DATE_ENTERED',
      'type' => 'datetime',
      'group' => 'created_by_name',
      'comment' => 'Date record created',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
      'studio' => 
      array (
        'portaleditview' => false,
      ),
      'duplicate_on_record_copy' => 'no',
      'readonly' => true,
      'massupdate' => false,
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'vname' => 'LBL_DATE_MODIFIED',
      'type' => 'datetime',
      'group' => 'modified_by_name',
      'comment' => 'Date record last modified',
      'enable_range_search' => true,
      'studio' => 
      array (
        'portaleditview' => false,
      ),
      'options' => 'date_range_search_dom',
      'duplicate_on_record_copy' => 'no',
      'readonly' => true,
      'massupdate' => false,
    ),
    'modified_user_id' => 
    array (
      'name' => 'modified_user_id',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_MODIFIED',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => false,
      'group' => 'modified_by_name',
      'dbType' => 'id',
      'reportable' => true,
      'comment' => 'User who last modified record',
      'massupdate' => false,
      'duplicate_on_record_copy' => 'no',
      'readonly' => true,
    ),
    'modified_by_name' => 
    array (
      'name' => 'modified_by_name',
      'vname' => 'LBL_MODIFIED',
      'type' => 'relate',
      'reportable' => false,
      'source' => 'non-db',
      'rname' => 'full_name',
      'table' => 'users',
      'id_name' => 'modified_user_id',
      'module' => 'Users',
      'link' => 'modified_user_link',
      'duplicate_merge' => 'disabled',
      'massupdate' => false,
      'duplicate_on_record_copy' => 'no',
      'readonly' => true,
      'sort_on' => 
      array (
        0 => 'last_name',
      ),
      'exportable' => true,
    ),
    'created_by' => 
    array (
      'name' => 'created_by',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_CREATED',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => false,
      'dbType' => 'id',
      'group' => 'created_by_name',
      'comment' => 'User who created record',
      'massupdate' => false,
      'duplicate_on_record_copy' => 'no',
      'readonly' => true,
    ),
    'created_by_name' => 
    array (
      'name' => 'created_by_name',
      'vname' => 'LBL_CREATED',
      'type' => 'relate',
      'reportable' => false,
      'link' => 'created_by_link',
      'rname' => 'full_name',
      'source' => 'non-db',
      'table' => 'users',
      'id_name' => 'created_by',
      'module' => 'Users',
      'duplicate_merge' => 'disabled',
      'importable' => false,
      'massupdate' => false,
      'duplicate_on_record_copy' => 'no',
      'readonly' => true,
      'sort_on' => 
      array (
        0 => 'last_name',
      ),
      'exportable' => true,
    ),
    'doc_owner' => 
    array (
      'name' => 'doc_owner',
      'vname' => 'LBL_DOC_OWNER',
      'type' => 'id',
      'reportable' => false,
      'source' => 'non-db',
      'duplicate_merge' => 'disabled',
      'importable' => 'false',
      'massupdate' => false,
      'full_text_search' => 
      array (
        'enabled' => true,
      ),
      'default' => '',
    ),
    'user_favorites' => 
    array (
      'name' => 'user_favorites',
      'vname' => 'LBL_USER_FAVORITES',
      'type' => 'id',
      'reportable' => false,
      'source' => 'non-db',
      'duplicate_merge' => 'disabled',
      'importable' => 'false',
      'massupdate' => false,
      'full_text_search' => 
      array (
        'enabled' => true,
      ),
      'default' => '',
    ),
    'description' => 
    array (
      'name' => 'description',
      'vname' => 'LBL_DESCRIPTION',
      'type' => 'text',
      'comment' => 'Full text of the note',
      'rows' => 6,
      'cols' => 80,
      'duplicate_on_record_copy' => 'always',
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'vname' => 'LBL_DELETED',
      'type' => 'bool',
      'default' => '0',
      'reportable' => false,
      'duplicate_on_record_copy' => 'no',
      'comment' => 'Record deletion indicator',
    ),
    'created_by_link' => 
    array (
      'name' => 'created_by_link',
      'type' => 'link',
      'relationship' => 'schedulers_created_by',
      'vname' => 'LBL_CREATED_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'modified_user_link' => 
    array (
      'name' => 'modified_user_link',
      'type' => 'link',
      'relationship' => 'schedulers_modified_user',
      'vname' => 'LBL_MODIFIED_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'activities' => 
    array (
      'name' => 'activities',
      'type' => 'link',
      'relationship' => 'scheduler_activities',
      'vname' => 'LBL_ACTIVITY_STREAM',
      'link_type' => 'many',
      'module' => 'Activities',
      'bean_name' => 'Activity',
      'source' => 'non-db',
    ),
    'job' => 
    array (
      'name' => 'job',
      'vname' => 'LBL_JOB',
      'type' => 'varchar',
      'len' => '255',
      'required' => true,
      'reportable' => false,
    ),
    'job_url' => 
    array (
      'name' => 'job_url',
      'vname' => 'LBL_JOB_URL',
      'type' => 'varchar',
      'len' => '255',
      'required' => false,
      'reportable' => false,
      'source' => 'non-db',
      'dependency' => 'equal($job_function, "url::")',
    ),
    'job_function' => 
    array (
      'name' => 'job_function',
      'vname' => 'LBL_JOB',
      'type' => 'enum',
      'function' => 
      array (
        'name' => 
        array (
          0 => 'Scheduler',
          1 => 'getJobsList',
        ),
        'params' => 
        array (
        ),
      ),
      'len' => '255',
      'required' => false,
      'reportable' => false,
      'massupdate' => false,
      'source' => 'non-db',
    ),
    'date_time_start' => 
    array (
      'name' => 'date_time_start',
      'vname' => 'LBL_DATE_TIME_START',
      'type' => 'datetimecombo',
      'required' => true,
      'reportable' => false,
      'display_default' => '2005/01/01',
    ),
    'date_time_end' => 
    array (
      'name' => 'date_time_end',
      'vname' => 'LBL_DATE_TIME_END',
      'type' => 'datetimecombo',
      'reportable' => false,
    ),
    'job_interval' => 
    array (
      'name' => 'job_interval',
      'vname' => 'LBL_INTERVAL',
      'type' => 'varchar',
      'len' => '100',
      'required' => true,
      'reportable' => false,
    ),
    'adv_interval' => 
    array (
      'name' => 'adv_interval',
      'vname' => 'LBL_ADV_OPTIONS',
      'type' => 'bool',
      'required' => false,
      'reportable' => false,
      'source' => 'non-db',
    ),
    'time_from' => 
    array (
      'name' => 'time_from',
      'vname' => 'LBL_TIME_FROM',
      'type' => 'time',
      'required' => false,
      'reportable' => false,
    ),
    'time_to' => 
    array (
      'name' => 'time_to',
      'vname' => 'LBL_TIME_TO',
      'type' => 'time',
      'required' => false,
      'reportable' => false,
    ),
    'last_run' => 
    array (
      'name' => 'last_run',
      'vname' => 'LBL_LAST_RUN',
      'type' => 'datetime',
      'required' => false,
      'reportable' => false,
      'massupdate' => false,
    ),
    'status' => 
    array (
      'name' => 'status',
      'vname' => 'LBL_STATUS',
      'type' => 'enum',
      'options' => 'scheduler_status_dom',
      'len' => 100,
      'required' => false,
      'reportable' => false,
      'importable' => 'required',
    ),
    'catch_up' => 
    array (
      'name' => 'catch_up',
      'vname' => 'LBL_CATCH_UP',
      'type' => 'bool',
      'len' => 1,
      'required' => false,
      'default' => '1',
      'reportable' => false,
    ),
    'schedulers_times' => 
    array (
      'name' => 'schedulers_times',
      'vname' => 'LBL_SCHEDULER_TIMES',
      'type' => 'link',
      'relationship' => 'schedulers_jobs_rel',
      'module' => 'SchedulersJobs',
      'bean_name' => 'Scheduler',
      'source' => 'non-db',
    ),
  ),
  'acls' => 
  array (
    'SugarACLAdminOnly' => true,
  ),
  'indices' => 
  array (
    'id' => 
    array (
      'name' => 'idx_schedulers_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    'date_modified' => 
    array (
      'name' => 'idx_schedulers_date_modfied',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'date_modified',
      ),
    ),
    'deleted' => 
    array (
      'name' => 'idx_schedulers_id_del',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'id',
        1 => 'deleted',
      ),
    ),
    'date_entered' => 
    array (
      'name' => 'idx_schedulers_date_entered',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'date_entered',
      ),
    ),
    0 => 
    array (
      'name' => 'idx_schedule',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'date_time_start',
        1 => 'deleted',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_scheduler_job_interval',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'job_interval',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_scheduler_status',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'status',
      ),
    ),
  ),
  'relationships' => 
  array (
    'schedulers_favorite' => 
    array (
      'lhs_module' => 'Schedulers',
      'lhs_table' => 'schedulers',
      'lhs_key' => 'id',
      'rhs_module' => 'Users',
      'rhs_table' => 'users',
      'rhs_key' => 'id',
      'relationship_type' => 'user-based',
      'join_table' => 'sugarfavorites',
      'join_key_lhs' => 'record_id',
      'join_key_rhs' => 'modified_user_id',
      'relationship_role_column' => 'module',
      'relationship_role_column_value' => 'Schedulers',
      'user_field' => 'created_by',
    ),
    'schedulers_following' => 
    array (
      'lhs_module' => 'Schedulers',
      'lhs_table' => 'schedulers',
      'lhs_key' => 'id',
      'rhs_module' => 'Users',
      'rhs_table' => 'users',
      'rhs_key' => 'id',
      'relationship_type' => 'user-based',
      'join_table' => 'subscriptions',
      'join_key_lhs' => 'parent_id',
      'join_key_rhs' => 'created_by',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'Schedulers',
      'user_field' => 'created_by',
    ),
    'schedulers_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Schedulers',
      'rhs_table' => 'schedulers',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'schedulers_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Schedulers',
      'rhs_table' => 'schedulers',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'scheduler_activities' => 
    array (
      'lhs_module' => 'Schedulers',
      'lhs_table' => 'schedulers',
      'lhs_key' => 'id',
      'rhs_module' => 'Activities',
      'rhs_table' => 'activities',
      'rhs_key' => 'id',
      'rhs_vname' => 'LBL_ACTIVITY_STREAM',
      'relationship_type' => 'many-to-many',
      'join_table' => 'activities_users',
      'join_key_lhs' => 'parent_id',
      'join_key_rhs' => 'activity_id',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'Schedulers',
    ),
    'schedulers_created_by_rel' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Schedulers',
      'rhs_table' => 'schedulers',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-one',
    ),
    'schedulers_modified_user_id_rel' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Schedulers',
      'rhs_table' => 'schedulers',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'schedulers_jobs_rel' => 
    array (
      'lhs_module' => 'Schedulers',
      'lhs_table' => 'schedulers',
      'lhs_key' => 'id',
      'rhs_module' => 'SchedulersJobs',
      'rhs_table' => 'job_queue',
      'rhs_key' => 'scheduler_id',
      'relationship_type' => 'one-to-many',
    ),
  ),
  'name_format_map' => 
  array (
  ),
  'visibility' => 
  array (
  ),
  'duplicate_check' => 
  array (
    'enabled' => true,
    'FilterDuplicateCheck' => 
    array (
      'filter_template' => 
      array (
        0 => 
        array (
          'name' => 
          array (
            '$starts' => '$name',
          ),
        ),
      ),
      'ranking_fields' => 
      array (
        0 => 
        array (
          'in_field_name' => 'name',
          'dupe_field_name' => 'name',
        ),
      ),
    ),
  ),
  'favorites' => true,
  'templates' => 
  array (
    'basic' => 'basic',
    'following' => 'following',
    'favorite' => 'favorite',
  ),
  'related_calc_fields' => 
  array (
  ),
  'custom_fields' => false,
);