<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

$dictionary['KBDocumentRevision'] = array(
    'table' => 'kbdocument_revisions',
    'fields' => array(
        'id' => array(
            'name' => 'id',
            'vname' => 'LBL_REVISION_NAME',
            'type' => 'id',
            'len' => '36',
            'required' => true,
            'reportable' => false,
        ),

        'change_log' => array(
            'name' => 'change_log',
            'vname' => 'LBL_CHANGE_LOG',
            'type' => 'varchar',
            'len' => '255',
        ),

        'kbdocument_id' => array(
            'name' => 'kbdocument_id',
            'vname' => 'LBL_DOCUMENT',
            'type' => 'id',
            'len' => '36',
            'required' => false,
            'reportable' => false,
        ),

        'date_entered' => array(
            'name' => 'date_entered',
            'vname' => 'LBL_DATE_ENTERED',
            'type' => 'datetime',
        ),
        'created_by' => array(
            'name' => 'created_by',
            'rname' => 'user_name',
            'id_name' => 'modified_user_id',
            'vname' => 'LBL_CREATED',
            'type' => 'assigned_user_name',
            'table' => 'users',
            'isnull' => 'false',
            'dbType' => 'id',
            'source' => 'db',
        ),
        'filename' => array(
            'name' => 'filename',
            'vname' => 'LBL_FILENAME',
            'type' => 'varchar',
            'required' => false,
            'len' => '255',
        ),
        'file_ext' => array(
            'name' => 'file_ext',
            'vname' => 'LBL_FILE_EXTENSION',
            'type' => 'varchar',
            'len' => 100,
        ),
        'file_mime_type' => array(
            'name' => 'file_mime_type',
            'vname' => 'LBL_MIME',
            'type' => 'varchar',
            'len' => '100',
        ),

        'revision' => array(
            'name' => 'revision',
            'vname' => 'LBL_REVISION',
            'type' => 'varchar',
            'len' => 100,
            'importable' => 'required',
        ),

        'deleted' => array(
            'name' => 'deleted',
            'vname' => 'LBL_DELETED',
            'type' => 'bool',
            'default' => 0,
            'reportable' => false,
        ),
        'latest' => array(
            'name' => 'latest',
            'vname' => 'LBL_LATEST',
            'type' => 'bool',
            'default' => 0,
            'reportable' => false,
        ),
        'kbcontent_id' => array(
            'name' => 'kbcontent_id',
            'vname' => 'LBL_KBCONTENT',
            'type' => 'id',
            'len' => '36',
            'required' => false,
            'reportable' => false,
        ),
        'document_revision_id' => array(
            'name' => 'document_revision_id',
            'vname' => 'LBL_LATEST_REVISION',
            'type' => 'id',
            'len' => '36',
            'required' => false,
            'reportable' => false,
        ),
        'date_modified' => array(
            'name' => 'date_modified',
            'vname' => 'LBL_DATE_MODIFIED',
            'type' => 'datetime',
        ),
        'documents' => array(
            'name' => 'documents',
            'type' => 'link',
            'relationship' => 'kbdocument_revisions',
            'source' => 'non-db',
            'vname' => 'LBL_REVISIONS',
        ),

        'created_by_link' => array(
            'name' => 'created_by_link',
            'type' => 'link',
            'relationship' => 'kbrev_revisions_created_by',
            'vname' => 'LBL_CREATED_BY_USER',
            'link_type' => 'one',
            'module' => 'Users',
            'bean_name' => 'User',
            'source' => 'non-db',
        ),

        'created_by_name' => array(
            'name' => 'created_by_name',
            'rname' => 'full_name',
            'id_name' => 'created_by',
            'vname' => 'LBL_CREATED_BY_NAME',
            'type' => 'relate',
            'table' => 'users',
            'isnull' => 'true',
            'module' => 'Users',
            'dbType' => 'varchar',
            'link' => 'created_by_link',
            'len' => '255',
            'source' => 'non-db',
        ),
        'latest_revision_id' => array(
            'name' => 'latest_revision_id',
            'vname' => 'LBL_REVISION',
            'type' => 'id',
            'len' => '36',
            'source' => 'non-db',
        ),
    ),
    'relationships' => array(
        'kbrev_revisions_created_by' => array(
            'lhs_module' => 'Users',
            'lhs_table' => 'users',
            'lhs_key' => 'id',
            'rhs_module' => 'KBDocumentRevisions',
            'rhs_table' => 'kbdocument_revisions',
            'rhs_key' => 'created_by',
            'relationship_type' => 'one-to-many'
        ),
    ),
    'indices' => array(
        array(
            'name' => 'knowledgedocumentrevisionspk',
            'type' => 'primary',
            'fields' => array('id')
        ),
        array(
            'name' => 'idx_del_latest_kbcontent_id',
            'type' => 'index',
            'fields' => array(
                'deleted',
                'latest',
                'kbcontent_id'
            )
        ),
        array(
            'name' => 'idx_cont_id_doc_id',
            'type' => 'index',
            'fields' => array('kbcontent_id', 'kbdocument_id')
        ),
        array(
            'name' => 'idx_name_rev_id_del',
            'type' => 'index',
            'fields' => array('document_revision_id', 'kbdocument_id', 'deleted')
        ),
    ),
    'acls' => array('SugarACLParentModule' => array('parentModule' => 'KBDocuments', 'parentLink' => 'documents')),
    'visibility' => array('ParentModuleVisibility' => array('parentLink' => 'documents')),
);
?>
