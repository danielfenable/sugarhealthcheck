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
/*********************************************************************************
 * $Id: field_arrays.php 20512 2007-02-28 00:18:41 +0000 (Wed, 28 Feb 2007) vineet $
 * Description: TODO:  To be written.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/
$fields_array['KBDocumentRevision'] = array ('column_fields' => Array("id"
		,"change_log"
		,"kbdocument_id"
		,"date_entered"
		,"created_by"
		,"filename"
		,"file_ext"
		,"file_mime_type"
		,"revision"
		,"date_modified"
		,"deleted"				
		),
        'list_fields' =>  Array("id"
		,"change_log"
		,"document_id"
		,"date_entered"
		,"created_by"
		,"filename"
		,"file_ext"
		,"file_mime_type"
		,"revision"
		,"date_modified"
		,"deleted"		
		,"latest_revision_id"		
		),
        'required_fields' => Array("revision"=>1),
);
?>