<?php 
 $GLOBALS["dictionary"]["KBDocument"]=array (
  'table' => 'kbdocuments',
  'favorites' => false,
  'unified_search' => true,
  'full_text_search' => true,
  'comment' => 'Knowledge Document management and FTS',
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
      'relationship' => 'kbdocuments_team',
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
      'relationship' => 'kbdocuments_team_count_relationship',
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
      'relationship' => 'kbdocuments_teams',
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
      'vname' => 'LBL_ID',
      'type' => 'id',
      'len' => '36',
      'required' => true,
      'reportable' => true,
    ),
    'kbdocument_name' => 
    array (
      'name' => 'kbdocument_name',
      'vname' => 'LBL_NAME',
      'type' => 'varchar',
      'required' => true,
      'importable' => 'required',
      'unified_search' => true,
      'full_text_search' => 
      array (
        'enabled' => true,
        'boost' => 3,
      ),
      'sortable' => true,
    ),
    'name' => 
    array (
      'name' => 'name',
      'vname' => 'LBL_NAME',
      'type' => 'varchar',
      'fields' => 
      array (
        0 => 'kbdocument_name',
      ),
      'sort_on' => 'kbdocument_name',
      'source' => 'non-db',
      'group' => 'kbdocument_name',
      'db_concat_fields' => 
      array (
        0 => 'kbdocument_name',
      ),
      'importable' => 'false',
    ),
    'body' => 
    array (
      'name' => 'body',
      'vname' => 'LBL_KBDOC_BODY',
      'type' => 'html',
      'default' => '',
      'studio' => 'false',
      'source' => 'non-db',
    ),
    'active_date' => 
    array (
      'name' => 'active_date',
      'vname' => 'LBL_DOC_ACTIVE_DATE',
      'type' => 'date',
      'importable' => 'required',
      'sortable' => true,
    ),
    'exp_date' => 
    array (
      'name' => 'exp_date',
      'vname' => 'LBL_DOC_EXP_DATE',
      'type' => 'date',
      'sortable' => true,
    ),
    'status_id' => 
    array (
      'name' => 'status_id',
      'vname' => 'LBL_DOC_STATUS',
      'type' => 'enum',
      'len' => 100,
      'options' => 'kbdocument_status_dom',
      'reportable' => false,
    ),
    'date_entered' => 
    array (
      'name' => 'date_entered',
      'vname' => 'LBL_DATE_ENTERED',
      'type' => 'datetime',
      'readonly' => true,
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'vname' => 'LBL_DATE_MODIFIED',
      'type' => 'datetime',
      'readonly' => true,
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'vname' => 'LBL_DELETED',
      'type' => 'bool',
      'default' => 0,
      'reportable' => false,
    ),
    'is_external_article' => 
    array (
      'name' => 'is_external_article',
      'vname' => 'LBL_IS_EXTERNAL_ARTICLE',
      'type' => 'bool',
      'default' => 0,
      'reportable' => true,
      'studio' => 'visible',
    ),
    'description' => 
    array (
      'name' => 'description',
      'vname' => 'LBL_DESCRIPTION',
      'type' => 'text',
    ),
    'modified_user_id' => 
    array (
      'name' => 'modified_user_id',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_MODIFIED',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => 'false',
      'reportable' => true,
      'dbType' => 'id',
    ),
    'created_by' => 
    array (
      'name' => 'created_by',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_CREATED',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => 'false',
      'dbType' => 'id',
    ),
    'kbdocument_revision_id' => 
    array (
      'name' => 'kbdocument_revision_id',
      'vname' => 'LBL_LATEST_REVISION',
      'type' => 'id',
      'len' => '36',
      'reportable' => false,
    ),
    'kbdocument_revision_number' => 
    array (
      'name' => 'kbdocument_revision_number',
      'vname' => 'LBL_KBDOCUMENT_REVISION_NUMBER',
      'type' => 'varchar',
      'len' => 100,
      'comment' => 'Kbdocument revision number',
    ),
    'revisions' => 
    array (
      'name' => 'revisions',
      'type' => 'link',
      'relationship' => 'kbdocument_revisions',
      'source' => 'non-db',
      'vname' => 'LBL_REVISIONS',
    ),
    'latest_revision' => 
    array (
      'name' => 'latest_revision',
      'vname' => 'LBL_LATEST_REVISION',
      'type' => 'varchar',
      'reportable' => false,
      'source' => 'non-db',
    ),
    'last_rev_create_date' => 
    array (
      'name' => 'last_rev_create_date',
      'type' => 'date',
      'table' => 'kbdocument_revisions',
      'link' => 'revisions',
      'join_name' => 'kbdocument_revisions',
      'vname' => 'LBL_LAST_REV_CREATE_DATE',
      'rname' => 'date_entered',
      'reportable' => false,
      'source' => 'non-db',
    ),
    'mail_merge_document' => 
    array (
      'name' => 'mail_merge_document',
      'vname' => 'LBL_MAIL_MERGE_DOCUMENT',
      'type' => 'bool',
      'dbType' => 'varchar',
      'len' => '3',
      'default' => 'off',
      'reportable' => false,
      'audited' => true,
    ),
    'cases' => 
    array (
      'name' => 'cases',
      'type' => 'link',
      'relationship' => 'case_kbdocuments',
      'source' => 'non-db',
      'vname' => 'LBL_CASES',
    ),
    'emails' => 
    array (
      'name' => 'emails',
      'type' => 'link',
      'relationship' => 'email_kbdocuments',
      'source' => 'non-db',
      'vname' => 'LBL_EMAILS',
    ),
    'contracts' => 
    array (
      'name' => 'contracts',
      'type' => 'link',
      'relationship' => 'contracts_documents',
      'source' => 'non-db',
      'vname' => 'LBL_CONTRACTS',
    ),
    'created_by_link' => 
    array (
      'name' => 'created_by_link',
      'type' => 'link',
      'relationship' => 'kbdocuments_created_by',
      'vname' => 'LBL_CREATED_BY_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'modified_user_link' => 
    array (
      'name' => 'modified_user_link',
      'type' => 'link',
      'relationship' => 'kbdocuments_modified_user',
      'vname' => 'LBL_MODIFIED_BY_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'related_doc_id' => 
    array (
      'name' => 'related_doc_id',
      'vname' => 'LBL_RELATED_DOCUMENT_ID',
      'reportable' => false,
      'dbType' => 'id',
      'type' => 'id',
      'len' => '36',
    ),
    'related_doc_rev_id' => 
    array (
      'name' => 'related_doc_rev_id',
      'vname' => 'LBL_RELATED_DOCUMENT_REVISION_ID',
      'reportable' => false,
      'dbType' => 'id',
      'type' => 'id',
      'len' => '36',
    ),
    'is_template' => 
    array (
      'name' => 'is_template',
      'vname' => 'LBL_IS_TEMPLATE',
      'type' => 'bool',
      'default' => 0,
      'reportable' => false,
    ),
    'template_type' => 
    array (
      'name' => 'template_type',
      'vname' => 'LBL_TEMPLATE_TYPE',
      'type' => 'enum',
      'len' => 100,
      'options' => 'document_template_type_dom',
      'reportable' => false,
    ),
    'latest_revision_name' => 
    array (
      'name' => 'latest_revision_name',
      'vname' => 'LBL_LATEST_REVISION_NAME',
      'type' => 'varchar',
      'reportable' => false,
      'source' => 'non-db',
    ),
    'selected_revision_name' => 
    array (
      'name' => 'selected_revision_name',
      'vname' => 'LBL_SELECTED_REVISION_NAME',
      'type' => 'varchar',
      'reportable' => false,
      'source' => 'non-db',
    ),
    'contract_status' => 
    array (
      'name' => 'contract_status',
      'vname' => 'LBL_CONTRACT_STATUS',
      'type' => 'varchar',
      'reportable' => false,
      'source' => 'non-db',
    ),
    'contract_name' => 
    array (
      'name' => 'contract_name',
      'vname' => 'LBL_CONTRACT_NAME',
      'type' => 'varchar',
      'reportable' => false,
      'source' => 'non-db',
    ),
    'linked_id' => 
    array (
      'name' => 'linked_id',
      'vname' => 'LBL_LINKED_ID',
      'type' => 'varchar',
      'reportable' => false,
      'source' => 'non-db',
    ),
    'selected_revision_id' => 
    array (
      'name' => 'selected_revision_id',
      'vname' => 'LBL_SELECTED_REVISION_ID',
      'type' => 'varchar',
      'reportable' => false,
      'source' => 'non-db',
    ),
    'latest_revision_id' => 
    array (
      'name' => 'latest_revision_id',
      'vname' => 'LBL_LATEST_REVISION',
      'type' => 'varchar',
      'reportable' => false,
      'source' => 'non-db',
    ),
    'selected_revision_filename' => 
    array (
      'name' => 'selected_revision_filename',
      'vname' => 'LBL_SELECTED_REVISION_FILENAME',
      'type' => 'varchar',
      'reportable' => false,
      'source' => 'non-db',
    ),
    'keywords' => 
    array (
      'name' => 'keywords',
      'vname' => 'LBL_KEYWORDS',
      'type' => 'relate',
      'reportable' => false,
      'source' => 'non-db',
      'studio' => false,
    ),
    'kbdoc_approver_id' => 
    array (
      'name' => 'kbdoc_approver_id',
      'rname' => 'user_name',
      'id_name' => 'kbdoc_approver_id',
      'vname' => 'LBL_KBDOC_APPROVER',
      'type' => 'assigned_user_name',
      'table' => 'kbdoc_approver_id_users',
      'reportable' => true,
      'dbType' => 'id',
      'len' => 36,
      'audited' => true,
      'comment' => 'User ID of the document approver',
      'duplicate_merge' => 'disabled',
    ),
    'kbdoc_approver_name' => 
    array (
      'name' => 'kbdoc_approver_name',
      'vname' => 'LBL_KBDOC_APPROVER_NAME',
      'type' => 'varchar',
      'reportable' => false,
      'source' => 'non-db',
      'table' => 'users',
      'id_name' => 'kbdoc_approver_id',
      'module' => 'Users',
      'link' => 'kbdoc_approver_link',
    ),
    'assigned_user_id' => 
    array (
      'name' => 'assigned_user_id',
      'vname' => 'LBL_ASSIGNED_TO',
      'type' => 'id',
      'isnull' => 'false',
      'reportable' => false,
      'audited' => true,
      'comment' => 'User ID assigned to record',
    ),
    'assigned_user_name' => 
    array (
      'name' => 'assigned_user_name',
      'vname' => 'LBL_ASSIGNED_TO',
      'type' => 'varchar',
      'reportable' => false,
      'source' => 'non-db',
      'table' => 'users',
    ),
    'assigned_user_link' => 
    array (
      'name' => 'assigned_user_link',
      'type' => 'link',
      'relationship' => 'kb_assigned_user',
      'vname' => 'LBL_ASSIGNED_TO_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
      'duplicate_merge' => 'disabled',
      'rname' => 'user_name',
      'id_name' => 'assigned_user_id',
      'table' => 'users',
    ),
    'kbdoc_approver_link' => 
    array (
      'name' => 'kbdoc_approver_link',
      'type' => 'link',
      'relationship' => 'kbdoc_approver_user',
      'vname' => 'LBL_KBDOC_APPROVED_BY',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
      'duplicate_merge' => 'disabled',
    ),
    'views_number' => 
    array (
      'name' => 'views_number',
      'vname' => 'LBL_VIEWS_NUMBER',
      'type' => 'varchar',
      'reportable' => false,
      'source' => 'non-db',
    ),
    'attachment_list' => 
    array (
      'name' => 'attachment_list',
      'type' => 'text',
      'source' => 'non-db',
      'reportable' => false,
      'read-only' => true,
      'studio' => false,
    ),
    'parent_id' => 
    array (
      'name' => 'parent_id',
      'type' => 'id',
      'reportable' => true,
    ),
    'parent_type' => 
    array (
      'name' => 'parent_type',
      'type' => 'varchar',
      'len' => '255',
      'vname' => 'LBL_PARENT_TYPE',
      'reportable' => false,
    ),
    'case_id' => 
    array (
      'name' => 'case_id',
      'vname' => 'LBL_CASE_ID',
      'rname' => 'id',
      'id_name' => 'case_id',
      'type' => 'id',
      'table' => 'cases',
      'isnull' => 'true',
      'module' => 'Cases',
      'massupdate' => false,
      'duplicate_merge' => 'disabled',
      'reportable' => false,
    ),
    'case_name' => 
    array (
      'name' => 'case_name',
      'rname' => 'name',
      'vname' => 'LBL_CASE',
      'type' => 'relate',
      'link' => 'revisions',
      'isnull' => 'true',
      'reportable' => false,
      'source' => 'non-db',
      'table' => 'cases',
      'id_name' => 'case_id',
      'module' => 'Cases',
      'duplicate_merge' => 'disabled',
    ),
  ),
  'indices' => 
  array (
    'team_set_kbdocuments' => 
    array (
      'name' => 'idx_kbdocuments_tmst_id',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'team_set_id',
      ),
    ),
    0 => 
    array (
      'name' => 'kbdocumentspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_kbdocument_date_entered',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'date_entered',
      ),
    ),
  ),
  'relationships' => 
  array (
    'kbdocuments_team_count_relationship' => 
    array (
      'lhs_module' => 'Teams',
      'lhs_table' => 'team_sets',
      'lhs_key' => 'id',
      'rhs_module' => 'KBDocuments',
      'rhs_table' => 'kbdocuments',
      'rhs_key' => 'team_set_id',
      'relationship_type' => 'one-to-many',
    ),
    'kbdocuments_teams' => 
    array (
      'lhs_module' => 'KBDocuments',
      'lhs_table' => 'kbdocuments',
      'lhs_key' => 'team_set_id',
      'rhs_module' => 'Teams',
      'rhs_table' => 'teams',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'team_sets_teams',
      'join_key_lhs' => 'team_set_id',
      'join_key_rhs' => 'team_id',
    ),
    'kbdocuments_team' => 
    array (
      'lhs_module' => 'Teams',
      'lhs_table' => 'teams',
      'lhs_key' => 'id',
      'rhs_module' => 'KBDocuments',
      'rhs_table' => 'kbdocuments',
      'rhs_key' => 'team_id',
      'relationship_type' => 'one-to-many',
    ),
    'kbdocument_revisions' => 
    array (
      'lhs_module' => 'KBDocuments',
      'lhs_table' => 'kbdocuments',
      'lhs_key' => 'id',
      'rhs_module' => 'KBDocumentRevisions',
      'rhs_table' => 'kbdocument_revisions',
      'rhs_key' => 'kbdocument_id',
      'relationship_type' => 'one-to-many',
    ),
    'kbdocuments_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'KBDocuments',
      'rhs_table' => 'kbdocuments',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'kbdocuments_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'KBDocuments',
      'rhs_table' => 'kbdocuments',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'kb_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'KBDocuments',
      'rhs_table' => 'kbdocuments',
      'rhs_key' => 'assigned_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'kbdoc_approver_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'KBDocuments',
      'rhs_table' => 'kbdocuments',
      'rhs_key' => 'kbdoc_approver_id',
      'relationship_type' => 'one-to-many',
    ),
    'case_kbdocuments' => 
    array (
      'lhs_module' => 'Cases',
      'lhs_table' => 'cases',
      'lhs_key' => 'id',
      'rhs_module' => 'KBDocuments',
      'rhs_table' => 'kbdocuments',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'Cases',
    ),
    'email_kbdocuments' => 
    array (
      'lhs_module' => 'Emails',
      'lhs_table' => 'emails',
      'lhs_key' => 'id',
      'rhs_module' => 'KBDocuments',
      'rhs_table' => 'kbdocuments',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'Emails',
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
    'SugarACLStatic' => true,
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