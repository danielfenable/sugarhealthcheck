<?php 
 $GLOBALS["dictionary"]["Meeting"]=array (
  'table' => 'meetings',
  'activity_enabled' => true,
  'unified_search' => true,
  'full_text_search' => true,
  'unified_search_default_enabled' => true,
  'comment' => 'Meeting activities',
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
      'relationship' => 'meetings_favorite',
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
      'relationship' => 'meetings_following',
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
      'vname' => 'LBL_SUBJECT',
      'required' => true,
      'type' => 'name',
      'dbType' => 'varchar',
      'unified_search' => true,
      'full_text_search' => 
      array (
        'enabled' => true,
        'boost' => 3,
      ),
      'len' => '50',
      'comment' => 'Meeting name',
      'importable' => 'required',
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
      'relationship' => 'meetings_created_by',
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
      'relationship' => 'meetings_modified_user',
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
      'relationship' => 'meeting_activities',
      'vname' => 'LBL_ACTIVITY_STREAM',
      'link_type' => 'many',
      'module' => 'Activities',
      'bean_name' => 'Activity',
      'source' => 'non-db',
    ),
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
      'relationship' => 'meetings_assigned_user',
      'vname' => 'LBL_ASSIGNED_TO_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
      'duplicate_merge' => 'enabled',
      'id_name' => 'assigned_user_id',
      'table' => 'users',
    ),
    'team_id' => 
    array (
      'name' => 'team_id',
      'vname' => 'LBL_TEAM_ID',
      'group' => 'team_name',
      'reportable' => false,
      'dbType' => 'id',
      'type' => 'team_list',
      'audited' => true,
      'duplicate_on_record_copy' => 'always',
      'comment' => 'Team ID for the account',
    ),
    'team_set_id' => 
    array (
      'name' => 'team_set_id',
      'rname' => 'id',
      'id_name' => 'team_set_id',
      'vname' => 'LBL_TEAM_SET_ID',
      'type' => 'id',
      'audited' => true,
      'studio' => 'false',
      'dbType' => 'id',
      'duplicate_on_record_copy' => 'always',
      'full_text_search' => 
      array (
        'enabled' => true,
      ),
    ),
    'team_count' => 
    array (
      'name' => 'team_count',
      'rname' => 'team_count',
      'id_name' => 'team_id',
      'vname' => 'LBL_TEAMS',
      'join_name' => 'ts1',
      'table' => 'teams',
      'type' => 'relate',
      'required' => 'true',
      'isnull' => 'true',
      'module' => 'Teams',
      'link' => 'team_count_link',
      'massupdate' => false,
      'dbType' => 'int',
      'source' => 'non-db',
      'importable' => 'false',
      'reportable' => false,
      'duplicate_merge' => 'disabled',
      'duplicate_on_record_copy' => 'always',
      'studio' => 'false',
      'hideacl' => true,
    ),
    'team_name' => 
    array (
      'name' => 'team_name',
      'db_concat_fields' => 
      array (
        0 => 'name',
        1 => 'name_2',
      ),
      'sort_on' => 'tj.name',
      'join_name' => 'tj',
      'rname' => 'name',
      'id_name' => 'team_id',
      'vname' => 'LBL_TEAMS',
      'type' => 'relate',
      'required' => 'true',
      'table' => 'teams',
      'isnull' => 'true',
      'module' => 'Teams',
      'link' => 'team_link',
      'massupdate' => true,
      'dbType' => 'varchar',
      'source' => 'non-db',
      'len' => 36,
      'custom_type' => 'teamset',
      'studio' => 
      array (
        'portallistview' => false,
        'portalrecordview' => false,
      ),
      'duplicate_on_record_copy' => 'always',
      'exportable' => true,
    ),
    'team_link' => 
    array (
      'name' => 'team_link',
      'type' => 'link',
      'relationship' => 'meetings_team',
      'vname' => 'LBL_TEAMS_LINK',
      'link_type' => 'one',
      'module' => 'Teams',
      'bean_name' => 'Team',
      'source' => 'non-db',
      'duplicate_merge' => 'disabled',
      'studio' => 'false',
    ),
    'team_count_link' => 
    array (
      'name' => 'team_count_link',
      'type' => 'link',
      'relationship' => 'meetings_team_count_relationship',
      'link_type' => 'one',
      'module' => 'Teams',
      'bean_name' => 'TeamSet',
      'source' => 'non-db',
      'duplicate_merge' => 'disabled',
      'reportable' => false,
      'studio' => 'false',
    ),
    'teams' => 
    array (
      'name' => 'teams',
      'type' => 'link',
      'relationship' => 'meetings_teams',
      'bean_filter_field' => 'team_set_id',
      'rhs_key_override' => true,
      'source' => 'non-db',
      'vname' => 'LBL_TEAMS',
      'link_class' => 'TeamSetLink',
      'link_file' => 'modules/Teams/TeamSetLink.php',
      'studio' => 'false',
      'reportable' => false,
    ),
    'accept_status' => 
    array (
      'name' => 'accept_status',
      'vname' => 'LBL_ACCEPT_STATUS',
      'type' => 'varchar',
      'dbType' => 'varchar',
      'len' => '20',
      'source' => 'non-db',
    ),
    'set_accept_links' => 
    array (
      'name' => 'set_accept_links',
      'vname' => 'LBL_ACCEPT_LINK',
      'type' => 'varchar',
      'dbType' => 'varchar',
      'len' => '20',
      'source' => 'non-db',
    ),
    'location' => 
    array (
      'name' => 'location',
      'vname' => 'LBL_LOCATION',
      'type' => 'varchar',
      'len' => '50',
      'comment' => 'Meeting location',
    ),
    'password' => 
    array (
      'name' => 'password',
      'vname' => 'LBL_PASSWORD',
      'type' => 'varchar',
      'len' => '50',
      'comment' => 'Meeting password',
      'studio' => 
      array (
        'wirelesseditview' => false,
        'wirelessdetailview' => false,
        'wirelesslistview' => false,
        'wireless_basic_search' => false,
      ),
      'dependency' => 'isInEnum($type,getDD("extapi_meeting_password"))',
    ),
    'join_url' => 
    array (
      'name' => 'join_url',
      'vname' => 'LBL_URL',
      'type' => 'varchar',
      'len' => '600',
      'comment' => 'Join URL',
      'studio' => 'false',
      'reportable' => false,
    ),
    'host_url' => 
    array (
      'name' => 'host_url',
      'vname' => 'LBL_HOST_URL',
      'type' => 'varchar',
      'len' => '600',
      'comment' => 'Host URL',
      'studio' => 'false',
      'reportable' => false,
    ),
    'displayed_url' => 
    array (
      'name' => 'displayed_url',
      'vname' => 'LBL_DISPLAYED_URL',
      'type' => 'url',
      'len' => '400',
      'comment' => 'Meeting URL',
      'studio' => 
      array (
        'wirelesseditview' => false,
        'wirelessdetailview' => false,
        'wirelesslistview' => false,
        'wireless_basic_search' => false,
      ),
      'dependency' => 'and(isAlpha($type),not(equal($type,"Sugar")))',
    ),
    'creator' => 
    array (
      'name' => 'creator',
      'vname' => 'LBL_CREATOR',
      'type' => 'varchar',
      'len' => '50',
      'comment' => 'Meeting creator',
      'studio' => 'false',
    ),
    'external_id' => 
    array (
      'name' => 'external_id',
      'vname' => 'LBL_EXTERNALID',
      'type' => 'varchar',
      'len' => '50',
      'comment' => 'Meeting ID for external app API',
      'studio' => 'false',
    ),
    'duration_hours' => 
    array (
      'name' => 'duration_hours',
      'vname' => 'LBL_DURATION_HOURS',
      'type' => 'int',
      'comment' => 'Duration (hours)',
      'importable' => 'required',
      'required' => true,
      'massupdate' => false,
      'studio' => false,
      'processes' => true,
      'default' => 0,
    ),
    'duration_minutes' => 
    array (
      'name' => 'duration_minutes',
      'vname' => 'LBL_DURATION_MINUTES',
      'type' => 'enum',
      'dbType' => 'int',
      'options' => 'duration_intervals',
      'group' => 'duration_hours',
      'len' => '2',
      'comment' => 'Duration (minutes)',
      'required' => true,
      'massupdate' => false,
      'studio' => false,
      'processes' => true,
      'default' => 0,
    ),
    'date_start' => 
    array (
      'name' => 'date_start',
      'vname' => 'LBL_CALENDAR_START_DATE',
      'type' => 'datetimecombo',
      'dbType' => 'datetime',
      'comment' => 'Date of start of meeting',
      'importable' => 'required',
      'required' => true,
      'massupdate' => false,
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
      'validation' => 
      array (
        'type' => 'isbefore',
        'compareto' => 'date_end',
        'blank' => false,
      ),
      'studio' => 
      array (
        'recordview' => false,
      ),
    ),
    'date_end' => 
    array (
      'name' => 'date_end',
      'vname' => 'LBL_CALENDAR_END_DATE',
      'type' => 'datetimecombo',
      'dbType' => 'datetime',
      'massupdate' => false,
      'comment' => 'Date meeting ends',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
      'studio' => 
      array (
        'recordview' => false,
        'wirelesseditview' => false,
      ),
      'readonly' => true,
    ),
    'parent_type' => 
    array (
      'name' => 'parent_type',
      'vname' => 'LBL_PARENT_TYPE',
      'type' => 'parent_type',
      'dbType' => 'varchar',
      'group' => 'parent_name',
      'options' => 'parent_type_display',
      'len' => 100,
      'comment' => 'Module meeting is associated with',
      'studio' => 
      array (
        'searchview' => false,
        'wirelesslistview' => false,
      ),
    ),
    'status' => 
    array (
      'name' => 'status',
      'vname' => 'LBL_STATUS',
      'type' => 'enum',
      'len' => 100,
      'options' => 'meeting_status_dom',
      'comment' => 'Meeting status (ex: Planned, Held, Not held)',
      'default' => 'Planned',
      'duplicate_on_record_copy' => 'no',
    ),
    'type' => 
    array (
      'name' => 'type',
      'vname' => 'LBL_TYPE',
      'type' => 'enum',
      'len' => 255,
      'function' => 'getMeetingsExternalApiDropDown',
      'comment' => 'Meeting type (ex: WebEx, Other)',
      'options' => 'eapm_list',
      'default' => 'Sugar',
      'massupdate' => false,
      'studio' => 
      array (
        'wireless_basic_search' => false,
      ),
    ),
    'direction' => 
    array (
      'name' => 'direction',
      'vname' => 'LBL_DIRECTION',
      'type' => 'enum',
      'len' => 100,
      'options' => 'call_direction_dom',
      'comment' => 'Indicates whether call is inbound or outbound',
      'source' => 'non-db',
      'importable' => 'false',
      'massupdate' => false,
      'reportable' => false,
      'studio' => 'false',
    ),
    'parent_id' => 
    array (
      'name' => 'parent_id',
      'vname' => 'LBL_PARENT_ID',
      'type' => 'id',
      'group' => 'parent_name',
      'reportable' => false,
      'comment' => 'ID of item indicated by parent_type',
      'studio' => 
      array (
        'searchview' => false,
      ),
    ),
    'reminder_checked' => 
    array (
      'name' => 'reminder_checked',
      'vname' => 'LBL_POPUP_REMINDER',
      'type' => 'bool',
      'source' => 'non-db',
      'comment' => 'checkbox indicating whether or not the reminder value is set (Meta-data only)',
      'massupdate' => false,
      'studio' => false,
    ),
    'reminder_time' => 
    array (
      'name' => 'reminder_time',
      'vname' => 'LBL_POPUP_REMINDER_TIME',
      'type' => 'enum',
      'dbType' => 'int',
      'options' => 'reminder_time_options',
      'reportable' => false,
      'massupdate' => false,
      'default' => -1,
      'comment' => 'Specifies when a reminder alert should be issued; -1 means no alert; otherwise the number of seconds prior to the start',
      'studio' => 
      array (
        'recordview' => false,
        'wirelesseditview' => false,
      ),
    ),
    'email_reminder_checked' => 
    array (
      'name' => 'email_reminder_checked',
      'vname' => 'LBL_EMAIL_REMINDER',
      'type' => 'bool',
      'source' => 'non-db',
      'comment' => 'checkbox indicating whether or not the email reminder value is set (Meta-data only)',
      'massupdate' => false,
      'studio' => false,
    ),
    'email_reminder_time' => 
    array (
      'name' => 'email_reminder_time',
      'vname' => 'LBL_EMAIL_REMINDER_TIME',
      'type' => 'enum',
      'dbType' => 'int',
      'options' => 'reminder_time_options',
      'reportable' => false,
      'massupdate' => false,
      'default' => -1,
      'comment' => 'Specifies when a email reminder alert should be issued; -1 means no alert; otherwise the number of seconds prior to the start',
      'studio' => 
      array (
        'recordview' => false,
        'wirelesseditview' => false,
      ),
    ),
    'email_reminder_sent' => 
    array (
      'name' => 'email_reminder_sent',
      'vname' => 'LBL_EMAIL_REMINDER_SENT',
      'default' => 0,
      'type' => 'bool',
      'comment' => 'Whether email reminder is already sent',
      'studio' => false,
      'massupdate' => false,
    ),
    'outlook_id' => 
    array (
      'name' => 'outlook_id',
      'vname' => 'LBL_OUTLOOK_ID',
      'type' => 'varchar',
      'len' => '255',
      'reportable' => false,
      'comment' => 'When the Sugar Plug-in for Microsoft Outlook syncs an Outlook appointment, this is the Outlook appointment item ID',
    ),
    'sequence' => 
    array (
      'name' => 'sequence',
      'vname' => 'LBL_SEQUENCE',
      'type' => 'int',
      'len' => '11',
      'reportable' => false,
      'default' => 0,
      'comment' => 'Meeting update sequence for meetings as per iCalendar standards',
      'studio' => 
      array (
        'related' => false,
        'formula' => false,
        'rollup' => false,
      ),
    ),
    'contact_name' => 
    array (
      'name' => 'contact_name',
      'rname' => 'name',
      'db_concat_fields' => 
      array (
        0 => 'first_name',
        1 => 'last_name',
      ),
      'id_name' => 'contact_id',
      'massupdate' => false,
      'vname' => 'LBL_CONTACT_NAME',
      'type' => 'relate',
      'link' => 'contacts',
      'table' => 'contacts',
      'isnull' => 'true',
      'module' => 'Contacts',
      'join_name' => 'contacts',
      'dbType' => 'varchar',
      'source' => 'non-db',
      'len' => 36,
      'importable' => 'false',
      'studio' => false,
    ),
    'contacts' => 
    array (
      'name' => 'contacts',
      'type' => 'link',
      'module' => 'Contacts',
      'relationship' => 'meetings_contacts',
      'source' => 'non-db',
      'vname' => 'LBL_CONTACTS',
    ),
    'parent_name' => 
    array (
      'name' => 'parent_name',
      'parent_type' => 'record_type_display',
      'type_name' => 'parent_type',
      'id_name' => 'parent_id',
      'vname' => 'LBL_LIST_RELATED_TO',
      'type' => 'parent',
      'group' => 'parent_name',
      'source' => 'non-db',
      'options' => 'parent_type_display',
      'studio' => true,
    ),
    'users' => 
    array (
      'name' => 'users',
      'type' => 'link',
      'relationship' => 'meetings_users',
      'source' => 'non-db',
      'vname' => 'LBL_USERS',
    ),
    'accept_status_users' => 
    array (
      'massupdate' => false,
      'name' => 'accept_status_users',
      'type' => 'enum',
      'studio' => 'false',
      'source' => 'non-db',
      'vname' => 'LBL_ACCEPT_STATUS',
      'options' => 'dom_meeting_accept_status',
      'importable' => 'false',
      'link' => 'users',
      'rname_link' => 'accept_status',
    ),
    'accounts' => 
    array (
      'name' => 'accounts',
      'type' => 'link',
      'relationship' => 'account_meetings',
      'source' => 'non-db',
      'vname' => 'LBL_ACCOUNT',
    ),
    'revenuelineitems' => 
    array (
      'name' => 'revenuelineitems',
      'type' => 'link',
      'relationship' => 'revenuelineitem_meetings',
      'module' => 'RevenueLineItems',
      'bean_name' => 'RevenueLineItem',
      'source' => 'non-db',
      'vname' => 'LBL_REVENUELINEITEMS',
      'workflow' => false,
    ),
    'products' => 
    array (
      'name' => 'products',
      'type' => 'link',
      'relationship' => 'product_meetings',
      'module' => 'Products',
      'bean_name' => 'Product',
      'source' => 'non-db',
      'vname' => 'LBL_PRODUCTS',
    ),
    'bugs' => 
    array (
      'name' => 'bugs',
      'type' => 'link',
      'relationship' => 'bug_meetings',
      'source' => 'non-db',
      'vname' => 'LBL_BUGS',
      'module' => 'Bugs',
    ),
    'leads' => 
    array (
      'name' => 'leads',
      'type' => 'link',
      'relationship' => 'meetings_leads',
      'source' => 'non-db',
      'vname' => 'LBL_LEADS',
    ),
    'opportunity' => 
    array (
      'name' => 'opportunity',
      'type' => 'link',
      'relationship' => 'opportunity_meetings',
      'source' => 'non-db',
      'vname' => 'LBL_OPPORTUNITY',
    ),
    'prospects' => 
    array (
      'name' => 'prospects',
      'type' => 'link',
      'relationship' => 'prospect_meetings',
      'source' => 'non-db',
      'vname' => 'LBL_PROSPECTS',
      'module' => 'Prospects',
    ),
    'quotes' => 
    array (
      'name' => 'quotes',
      'type' => 'link',
      'relationship' => 'quote_meetings',
      'source' => 'non-db',
      'vname' => 'LBL_QUOTES',
    ),
    'cases' => 
    array (
      'name' => 'cases',
      'type' => 'link',
      'relationship' => 'case_meetings',
      'source' => 'non-db',
      'vname' => 'LBL_CASE',
    ),
    'notes' => 
    array (
      'name' => 'notes',
      'type' => 'link',
      'relationship' => 'meetings_notes',
      'module' => 'Notes',
      'bean_name' => 'Note',
      'source' => 'non-db',
      'vname' => 'LBL_NOTES',
    ),
    'contact_id' => 
    array (
      'name' => 'contact_id',
      'type' => 'relate',
      'link' => 'contacts',
      'rname' => 'id',
      'source' => 'non-db',
      'studio' => false,
    ),
    'repeat_type' => 
    array (
      'name' => 'repeat_type',
      'vname' => 'LBL_CALENDAR_REPEAT_TYPE',
      'type' => 'enum',
      'len' => 36,
      'options' => 'repeat_type_dom',
      'comment' => 'Type of recurrence',
      'importable' => 'false',
      'massupdate' => false,
      'reportable' => false,
      'studio' => 'false',
    ),
    'repeat_interval' => 
    array (
      'name' => 'repeat_interval',
      'vname' => 'LBL_CALENDAR_REPEAT_INTERVAL',
      'type' => 'int',
      'len' => 3,
      'default' => 1,
      'comment' => 'Interval of recurrence',
      'importable' => 'false',
      'massupdate' => false,
      'reportable' => false,
      'studio' => 'false',
    ),
    'repeat_dow' => 
    array (
      'name' => 'repeat_dow',
      'vname' => 'LBL_CALENDAR_REPEAT_DOW',
      'type' => 'varchar',
      'len' => 7,
      'comment' => 'Days of week in recurrence',
      'importable' => 'false',
      'massupdate' => false,
      'reportable' => false,
      'studio' => 'false',
    ),
    'repeat_until' => 
    array (
      'name' => 'repeat_until',
      'vname' => 'LBL_CALENDAR_REPEAT_UNTIL_DATE',
      'type' => 'date',
      'comment' => 'Repeat until specified date',
      'importable' => 'false',
      'massupdate' => false,
      'reportable' => false,
      'studio' => 'false',
    ),
    'repeat_count' => 
    array (
      'name' => 'repeat_count',
      'vname' => 'LBL_CALENDAR_REPEAT_COUNT',
      'type' => 'int',
      'len' => 7,
      'comment' => 'Number of recurrence',
      'importable' => 'false',
      'massupdate' => false,
      'reportable' => false,
      'studio' => 'false',
    ),
    'repeat_parent_id' => 
    array (
      'name' => 'repeat_parent_id',
      'vname' => 'LBL_REPEAT_PARENT_ID',
      'type' => 'id',
      'len' => 36,
      'comment' => 'Id of the first element of recurring records',
      'importable' => 'false',
      'massupdate' => false,
      'reportable' => false,
      'studio' => 'false',
    ),
    'recurring_source' => 
    array (
      'name' => 'recurring_source',
      'vname' => 'LBL_RECURRING_SOURCE',
      'type' => 'varchar',
      'len' => 36,
      'comment' => 'Source of recurring meeting',
      'importable' => false,
      'massupdate' => false,
      'reportable' => false,
      'studio' => false,
    ),
    'send_invites' => 
    array (
      'name' => 'send_invites',
      'vname' => 'LBL_SEND_INVITES',
      'type' => 'bool',
      'source' => 'non-db',
      'comment' => 'checkbox indicating whether or not to send out invites (Meta-data only)',
      'massupdate' => false,
    ),
    'invitees' => 
    array (
      'name' => 'invitees',
      'source' => 'non-db',
      'type' => 'collection',
      'vname' => 'LBL_INVITEES',
      'links' => 
      array (
        0 => 'contacts',
        1 => 'leads',
        2 => 'users',
      ),
      'order_by' => 'name:asc',
      'studio' => false,
    ),
    'auto_invite_parent' => 
    array (
      'name' => 'auto_invite_parent',
      'type' => 'bool',
      'source' => 'non-db',
      'comment' => 'Flag to allow for turning off auto invite of parent record -  (Meta-data only)',
      'massupdate' => false,
    ),
    'task_parent' => 
    array (
      'name' => 'task_parent',
      'type' => 'link',
      'relationship' => 'task_meetings_parent',
      'source' => 'non-db',
      'reportable' => false,
    ),
    'contact_parent' => 
    array (
      'name' => 'contact_parent',
      'type' => 'link',
      'relationship' => 'contact_meetings_parent',
      'source' => 'non-db',
      'reportable' => false,
    ),
    'lead_parent' => 
    array (
      'name' => 'lead_parent',
      'type' => 'link',
      'relationship' => 'lead_meetings',
      'source' => 'non-db',
      'reportable' => false,
    ),
  ),
  'relationships' => 
  array (
    'meetings_favorite' => 
    array (
      'lhs_module' => 'Meetings',
      'lhs_table' => 'meetings',
      'lhs_key' => 'id',
      'rhs_module' => 'Users',
      'rhs_table' => 'users',
      'rhs_key' => 'id',
      'relationship_type' => 'user-based',
      'join_table' => 'sugarfavorites',
      'join_key_lhs' => 'record_id',
      'join_key_rhs' => 'modified_user_id',
      'relationship_role_column' => 'module',
      'relationship_role_column_value' => 'Meetings',
      'user_field' => 'created_by',
    ),
    'meetings_following' => 
    array (
      'lhs_module' => 'Meetings',
      'lhs_table' => 'meetings',
      'lhs_key' => 'id',
      'rhs_module' => 'Users',
      'rhs_table' => 'users',
      'rhs_key' => 'id',
      'relationship_type' => 'user-based',
      'join_table' => 'subscriptions',
      'join_key_lhs' => 'parent_id',
      'join_key_rhs' => 'created_by',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'Meetings',
      'user_field' => 'created_by',
    ),
    'meetings_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Meetings',
      'rhs_table' => 'meetings',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'meetings_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Meetings',
      'rhs_table' => 'meetings',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'meeting_activities' => 
    array (
      'lhs_module' => 'Meetings',
      'lhs_table' => 'meetings',
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
      'relationship_role_column_value' => 'Meetings',
    ),
    'meetings_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Meetings',
      'rhs_table' => 'meetings',
      'rhs_key' => 'assigned_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'meetings_team_count_relationship' => 
    array (
      'lhs_module' => 'Teams',
      'lhs_table' => 'team_sets',
      'lhs_key' => 'id',
      'rhs_module' => 'Meetings',
      'rhs_table' => 'meetings',
      'rhs_key' => 'team_set_id',
      'relationship_type' => 'one-to-many',
    ),
    'meetings_teams' => 
    array (
      'lhs_module' => 'Meetings',
      'lhs_table' => 'meetings',
      'lhs_key' => 'team_set_id',
      'rhs_module' => 'Teams',
      'rhs_table' => 'teams',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'team_sets_teams',
      'join_key_lhs' => 'team_set_id',
      'join_key_rhs' => 'team_id',
    ),
    'meetings_team' => 
    array (
      'lhs_module' => 'Teams',
      'lhs_table' => 'teams',
      'lhs_key' => 'id',
      'rhs_module' => 'Meetings',
      'rhs_table' => 'meetings',
      'rhs_key' => 'team_id',
      'relationship_type' => 'one-to-many',
    ),
    'meetings_notes' => 
    array (
      'lhs_module' => 'Meetings',
      'lhs_table' => 'meetings',
      'lhs_key' => 'id',
      'rhs_module' => 'Notes',
      'rhs_table' => 'notes',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'Meetings',
    ),
  ),
  'acls' => 
  array (
    'SugarACLOpi' => true,
    'SugarACLStatic' => true,
  ),
  'indices' => 
  array (
    'id' => 
    array (
      'name' => 'idx_meetings_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    'date_modified' => 
    array (
      'name' => 'idx_meetings_date_modfied',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'date_modified',
      ),
    ),
    'deleted' => 
    array (
      'name' => 'idx_meetings_id_del',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'id',
        1 => 'deleted',
      ),
    ),
    'date_entered' => 
    array (
      'name' => 'idx_meetings_date_entered',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'date_entered',
      ),
    ),
    'team_set_meetings' => 
    array (
      'name' => 'idx_meetings_tmst_id',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'team_set_id',
      ),
    ),
    0 => 
    array (
      'name' => 'idx_mtg_name',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'name',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_meet_par_del',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'parent_id',
        1 => 'parent_type',
        2 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_meet_stat_del',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'assigned_user_id',
        1 => 'status',
        2 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'idx_meet_date_start',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'date_start',
      ),
    ),
    4 => 
    array (
      'name' => 'idx_meet_date_start_end_del',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'date_start',
        1 => 'date_end',
        2 => 'deleted',
      ),
    ),
    5 => 
    array (
      'name' => 'idx_meet_repeat_parent_id',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'repeat_parent_id',
        1 => 'deleted',
      ),
    ),
    6 => 
    array (
      'name' => 'idx_meet_date_start_reminder',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'date_start',
        1 => 'reminder_time',
      ),
    ),
  ),
  'optimistic_locking' => true,
  'duplicate_check' => 
  array (
    'enabled' => false,
  ),
  'name_format_map' => 
  array (
  ),
  'visibility' => 
  array (
    'TeamSecurity' => true,
  ),
  'templates' => 
  array (
    'team_security' => 'team_security',
    'assignable' => 'assignable',
    'basic' => 'basic',
    'following' => 'following',
    'favorite' => 'favorite',
  ),
  'favorites' => true,
  'related_calc_fields' => 
  array (
  ),
  'custom_fields' => false,
);