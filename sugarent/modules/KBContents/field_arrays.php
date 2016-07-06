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
 * $Id: field_arrays.php 13782 2006-06-06 17:58:55 +0000 (Tue, 06 Jun 2006) majed $
 * Description:  Contains field arrays that are used for caching
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/
$fields_array['KBContent'] = array ('column_fields' => Array("id"		
		,"kbdocument_body"
		,"document_revision_id"
		,"date_entered"
		,"created_by"
		,"revision"
		,"date_modified"
		,"deleted"				
		),
        'list_fields' =>  Array("id"				
		,"date_entered"
		,"created_by"
		,"revision"
		,"date_modified"
		,"deleted"			
		),
        'required_fields' => Array("revision"=>1),
);
?>