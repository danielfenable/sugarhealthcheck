<?php 
 $GLOBALS["dictionary"]["KBContent"]=array (
  'table' => 'kbcontents',
  'audited' => true,
  'engine' => 'MyISAM',
  'comment' => 'A content represents information about document',
  'fields' => 
  array (
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
      'relationship' => 'kbcontents_team',
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
      'relationship' => 'kbcontents_team_count_relationship',
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
      'relationship' => 'kbcontents_teams',
      'bean_filter_field' => 'team_set_id',
      'rhs_key_override' => true,
      'source' => 'non-db',
      'vname' => 'LBL_TEAMS',
      'link_class' => 'TeamSetLink',
      'link_file' => 'modules/Teams/TeamSetLink.php',
      'studio' => 'false',
      'reportable' => false,
    ),
    'id' => 
    array (
      'name' => 'id',
      'type' => 'id',
      'vname' => 'LBL_ID',
      'required' => true,
      'reportable' => true,
      'comment' => 'Unique identifer',
    ),
    'kbdocument_body' => 
    array (
      'name' => 'kbdocument_body',
      'vname' => 'LBL_TEXT_BODY',
      'type' => 'longtext',
      'comment' => 'Article body',
    ),
    'document_revision_id' => 
    array (
      'name' => 'document_revision_id',
      'vname' => 'LBL_DOCUMENT_REVISION_ID',
      'type' => 'id',
      'audited' => true,
      'reportable' => false,
      'comment' => 'The document revision id to which this content is associated',
    ),
    'date_entered' => 
    array (
      'name' => 'date_entered',
      'vname' => 'LBL_DATE_ENTERED',
      'type' => 'datetime',
      'comment' => 'Date record created',
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'vname' => 'LBL_DATE_MODIFIED',
      'type' => 'datetime',
      'comment' => 'Date record last modified',
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'vname' => 'LBL_DELETED',
      'type' => 'bool',
      'default' => 0,
      'reportable' => false,
      'comment' => 'Record deletion indicator',
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
      'reportable' => true,
      'dbType' => 'id',
    ),
    'kb_index' => 
    array (
      'name' => 'kb_index',
      'vname' => 'LBL_NUMBER',
      'type' => 'int',
      'len' => 11,
      'required' => true,
      'auto_increment' => true,
      'readonly' => true,
      'comment' => 'Currently used only by instances using sql server.',
      'duplicate_merge' => 'disabled',
    ),
  ),
  'indices' => 
  array (
    'team_set_kbcontents' => 
    array (
      'name' => 'idx_kbcontents_tmst_id',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'team_set_id',
      ),
    ),
    0 => 
    array (
      'name' => 'kbcontentspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'fts_unique_idx',
      'type' => 'unique',
      'fields' => 
      array (
        0 => 'kb_index',
      ),
    ),
    2 => 
    array (
      'name' => 'kbcontentsftk',
      'type' => 'fulltext',
      'fields' => 
      array (
        0 => 'kbdocument_body',
      ),
      'db' => 'mysql',
    ),
    3 => 
    array (
      'name' => 'kbcontentsftk',
      'type' => 'fulltext',
      'fields' => 
      array (
        0 => 'kbdocument_body',
      ),
      'db' => 'ibm_db2',
      'options' => 'UPDATE FREQUENCY D(*) H(*) M(0, 5, 10, 15, 20, 25, 30, 35, 40, 45, 50, 55) UPDATE MINIMUM 1',
      'message_locale' => 'en_US',
    ),
    4 => 
    array (
      'name' => 'kbcontentsftk',
      'type' => 'fulltext',
      'fields' => 
      array (
        0 => 'kbdocument_body',
      ),
      'db' => 'oci8',
      'indextype' => 'CTXSYS.CONTEXT',
      'parameters' => 'sync (on commit)',
    ),
    5 => 
    array (
      'name' => 'kbcontentsftk',
      'type' => 'fulltext',
      'fields' => 
      array (
        0 => 'kbdocument_body',
      ),
      'db' => 'mssql',
      'key_index' => 'fts_unique_idx',
      'change_tracking' => 'AUTO',
      'language' => 1033,
      'catalog' => 'default',
    ),
  ),
  'relationships' => 
  array (
    'kbcontents_team_count_relationship' => 
    array (
      'lhs_module' => 'Teams',
      'lhs_table' => 'team_sets',
      'lhs_key' => 'id',
      'rhs_module' => 'KBContents',
      'rhs_table' => 'kbcontents',
      'rhs_key' => 'team_set_id',
      'relationship_type' => 'one-to-many',
    ),
    'kbcontents_teams' => 
    array (
      'lhs_module' => 'KBContents',
      'lhs_table' => 'kbcontents',
      'lhs_key' => 'team_set_id',
      'rhs_module' => 'Teams',
      'rhs_table' => 'teams',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'team_sets_teams',
      'join_key_lhs' => 'team_set_id',
      'join_key_rhs' => 'team_id',
    ),
    'kbcontents_team' => 
    array (
      'lhs_module' => 'Teams',
      'lhs_table' => 'teams',
      'lhs_key' => 'id',
      'rhs_module' => 'KBContents',
      'rhs_table' => 'kbcontents',
      'rhs_key' => 'team_id',
      'relationship_type' => 'one-to-many',
    ),
  ),
  'name_format_map' => 
  array (
  ),
  'visibility' => 
  array (
    'TeamSecurity' => true,
  ),
  'acls' => 
  array (
  ),
  'templates' => 
  array (
    'team_security' => 'team_security',
  ),
  'related_calc_fields' => 
  array (
  ),
  'custom_fields' => false,
);