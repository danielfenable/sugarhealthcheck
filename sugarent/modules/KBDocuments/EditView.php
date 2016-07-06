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

require_once('vendor/ytree/Tree.php');
require_once('vendor/ytree/Node.php');
require_once('modules/KBTags/TreeData.php');

require_once('modules/KBDocuments/Forms.php');
require_once('include/json_config.php');

require_once('modules/KBDocuments/SearchUtils.php');
$json_config = new json_config();


global $app_strings, $theme;
global $app_list_strings;
global $mod_strings;
global $current_user;
global $sugar_version, $sugar_config;

$focus = BeanFactory::getBean('KBDocuments');
$load_signed=false;

if ((isset($_REQUEST['load_signed_id']) and !empty($_REQUEST['load_signed_id']))) {
	$load_signed=true;
	if (isset($_REQUEST['record'])) {
		$focus->related_doc_id=$_REQUEST['record'];
	}
	if (isset($_REQUEST['selected_revision_id'])) {
		$focus->related_doc_rev_id=$_REQUEST['selected_revision_id'];
	}
}

if(!$load_signed and isset($_REQUEST['record'])) {
   	$focus->retrieve($_REQUEST['record']);
}

$old_id = '';
if(isset($_REQUEST['isDuplicate']) && $_REQUEST['isDuplicate'] == 'true')
{
    $old_id = $focus->id;
	$focus->id = "";
	$focus->status_id = 'Draft';
}

$xtpl=new XTemplate ('modules/KBDocuments/EditView.html');

$from_case = '';

if (isset($_REQUEST['acase_id']) && isset($_REQUEST['acase_name'])) {
    $_REQUEST['case_id'] = $_REQUEST['acase_id'];
    $_REQUEST['case_name'] = $_REQUEST['acase_name'];
}

if (isset($_REQUEST['parent_type']) && $_REQUEST['parent_type'] == "Cases") {
    $_REQUEST['case_id'] = $_REQUEST['parent_id'];
}

if(isset($_REQUEST['case_id']) && !empty($_REQUEST['case_id'])){
	$from_case = BeanFactory::getBean('Cases', $_REQUEST['case_id']);
	$xtpl->assign('PARENT_ID',$_REQUEST['case_id']);
	$xtpl->assign('PARENT_TYPE','Cases');
    $xtpl->assign("CASE_ID", $from_case->id);
    $xtpl->assign("CASE_NAME", $from_case->name);
} elseif (!empty($focus->parent_id) && !empty($focus->case_name)) {
    $xtpl->assign("CASE_ID", $focus->parent_id);
    $xtpl->assign("CASE_NAME", $focus->case_name);
}

if(isset($_REQUEST['return_module']) && $_REQUEST['return_module'] == 'Cases'){
  if(isset($_REQUEST['record']) && !empty($_REQUEST['record'])){
	$from_case = BeanFactory::getBean('Cases', $_REQUEST['record']);
	$xtpl->assign('PARENT_ID',$_REQUEST['record']);
	$xtpl->assign('PARENT_TYPE','Cases');
  }
}
if(isset($_REQUEST['email_id']) && !empty($_REQUEST['email_id'])){
	$from_email = BeanFactory::getBean('Emails', $_REQUEST['email_id']);
	$xtpl->assign('PARENT_ID',$_REQUEST['email_id']);
	$xtpl->assign('PARENT_TYPE','Emails');
}

$params = array();
if(empty($focus->id)){
	$params[] = $GLOBALS['app_strings']['LBL_CREATE_BUTTON_LABEL'];
}else{
	$params[] = "<a href='index.php?module=KBDocuments&action=DetailView&record={$focus->id}'>{$focus->kbdocument_name}</a>";
	$params[] = $GLOBALS['app_strings']['LBL_EDIT_BUTTON_LABEL'];
}
echo getClassicModuleTitle("KBDocuments", $params, true);

$GLOBALS['log']->info("KBDocument detail view");

$xtpl->assign("MOD", $mod_strings);
$xtpl->assign("APP", $app_strings);

$json = getJSONobj();
// Article approver Popup
$popup_request_data = array(
	'call_back_function' => 'set_return',
	'form_name' => 'EditView',
	'field_to_name_array' => array(
		'id' => 'kbdoc_approver_id',
		'user_name' => 'kbdoc_approver_name',
		),
	);
$xtpl->assign('encoded_approvers_popup_request_data', $json->encode($popup_request_data));


$popup_request_data = array(
	'call_back_function' => 'set_return',
	'form_name' => 'EditView',
	'field_to_name_array' => array(
		'id' => 'team_id',
		'name' => 'team_name',
		),
	);
$json = getJSONobj();
$xtpl->assign('encoded_team_popup_request_data', $json->encode($popup_request_data));

$popup_request_data = array(
	'call_back_function' => 'set_return',
	'form_name' => 'EditView',
	'field_to_name_array' => array(
		'id' => 'assigned_user_id',
		'user_name' => 'assigned_user_name',
		),
	);
$xtpl->assign('encoded_assigned_users_popup_request_data', $json->encode($popup_request_data));

$popup_request_data_cases = array(
    'call_back_function'    => 'set_return',
    'form_name'             => 'EditView',
    'field_to_name_array'   => array('id'   => 'case_id',
                                     'name' => 'case_name',
    ),
);
$xtpl->assign('encoded_case_popup_request_data', $json->encode($popup_request_data_cases));

if (isset($_REQUEST['return_module'])) $xtpl->assign("RETURN_MODULE", $_REQUEST['return_module']);
if (isset($_REQUEST['return_action'])) $xtpl->assign("RETURN_ACTION", $_REQUEST['return_action']);
if (isset($_REQUEST['return_id'])) $xtpl->assign("RETURN_ID", $_REQUEST['return_id']);
// handle Create $module then Cancel
if (empty($_REQUEST['return_id'])) {
	$xtpl->assign("RETURN_ACTION", 'index');
}
$xtpl->assign("THEME", SugarThemeRegistry::current()->__toString());
$xtpl->assign("PRINT_URL", "index.php?".$GLOBALS['request_string']);

$javascript = get_set_focus_js().get_validate_record_js();


require_once('include/QuickSearchDefaults.php');
require_once('modules/KBDocuments/SearchUtils.php');
$qsd = QuickSearchDefaults::getQuickSearchDefaults();

$sqs_objects = array(
                     'team_name' => $qsd->getQSTeam(),
                     'EditView_assigned_user_name' => $qsd->getQSUser(),
                     'EditView_kbdoc_approver_name' => getQSApprover());

require_once('include/SugarFields/Fields/Teamset/SugarFieldTeamset.php');
$teamSetField = new SugarFieldTeamset('Teamset');
$teamSetField->initClassicView($focus->field_defs);
$sqs_objects = array_merge($sqs_objects, $teamSetField->getClassicViewQS());

$quicksearch_js = '<script type="text/javascript" language="javascript">sqs_objects = ' . $json->encode($sqs_objects) . '; enableQS();</script>';
/*
$quicksearch_js .= '<script type="text/javascript" language="javascript">
						sqs_objects[\'tags\'] = ' . $json->encode($sqs_objects['tags']) . ';
						sqs_objects[\'team_name\'] = ' . $json->encode($sqs_objects['team_name']) . ';
						</script>';
*/
$javascript = get_set_focus_js().$quicksearch_js;
$tag = BeanFactory::getBean('KBTags');
$xtpl->assign("TAG_NAME", $tag->tag_name);
 //tree header.
        $tagstree=new Tree('tagstree');
        $tagstree->set_param('module','KBTags');
        $tagstree->set_param('moduleview','modal');
       //$nodes = get_tags_nodes_cached(null);
        $nodes=get_tags_nodes(false,false,null);
        $root_node = new Node('All_Tags', $mod_strings['LBL_TAGS_ROOT_LABEL']);
         //$tagstree->add_node($root_node);
        foreach ($nodes as $node) {
          $root_node->add_node($node);
        }
        $href_string = "javascript:handler:SUGAR.kb.modalClose('tagstree')";
    	 if ($root_node) {
    	    $root_node->set_property("href",$href_string);
    	 }
         $root_node->expanded = true;
         $tagstree->add_node($root_node);
         $xtpl->assign("TREEINSTANCE",$tagstree->generate_nodes_array());
/* get document body
if(from_html(KBDocument::get_kbdoc_body_without_incrementing_count($focus->id)) != null) {
	$xtpl->assign("KBDOC_BODY", from_html(KBDocument::get_kbdoc_body_without_incrementing_count($focus->id)));
   }
else {
	$xtpl->assign("KBDOC_BODY", "");
  }
*/
//for attachments and kbtags
$kbId = '';
if(!empty($focus->id)) {
	    $kbId = $focus->id;
 }
else if(!empty($old_id)) {
	    $xtpl->assign('OLD_ID', $old_id);
	    $kbId = $old_id;
}

if(isset($_REQUEST['isDuplicate']) && $_REQUEST['isDuplicate'] == 'true')
{
    //nothing
}
else{
	//get document tags
	if(KBDocument::get_kbdoc_tags_heirarchy($kbId,"Edit") != null){
	  $xtpl->assign("KBTAG_TITLE",$mod_strings['LBL_KBDOC_TAGS']);
	  $xtpl->assign("KBDOC_TAGS",KBDocument::get_kbdoc_tags_heirarchy($kbId,"Edit"));
	}
	else{
		$xtpl->assign("KBTAG_TITLE","");
		$xtpl->assign("KBDOC_TAGS","");
	}
	//get document attachments
	if(KBDocument::get_kbdoc_attachments($kbId,'Edit') != null){
		$xtpl->assign("KBDOC_ATTS_TITLE",$mod_strings['LBL_KBDOC_ATTS_TITLE']);
		$xtpl->assign("KBDOC_ATTS",KBDocument::get_kbdoc_attachments($kbId,'Edit'));
	}
	else{
		$xtpl->assign("KBDOC_ATTS_TITLE","");
		$xtpl->assign("KBDOC_ATTS","");
	}
}

$xtpl->assign("JAVASCRIPT", $javascript);
$xtpl->assign("ID", $focus->id);
$xtpl->assign("KBDOCUMENT_NAME",$focus->kbdocument_name);
$xtpl->assign("DESCRIPTION",$focus->description);
$xtpl->assign("FILENAME_TEXT",$focus->filename);
//$xtpl->assign("REVISION",$focus->latest_revision);

$xtpl->assign("REVISION",$focus->kbdocument_revision_number);
//$xtpl->assign("OLD_ID",$old_id);



if($focus->is_external_article == 1){
	$xtpl->assign("IS_EXTERNAL_ARTICLE", "checked");
}

$xtpl->parse("main.ent_a");
$xtpl->parse("main.ent_b");
$xtpl->parse("main.ext_source");

$xtpl->assign("THEME", $theme);
$xtpl->assign("SITE_URL",$sugar_config['site_url']);
$xtpl->assign("UPLOAD_MAXSIZE",$sugar_config['upload_maxsize']);
$xtpl->assign("ATTACHMENTS",$mod_strings['LBL_ATTACHMENTS']);
$xtpl->assign("EMBEDDED_IMAGES",$mod_strings['LBL_EMBEDED_IMAGES']);


//$xtpl->assign("KBDOC_APPROVAR_NAME", $focus->kbdoc_approvar_name);
//$xtpl->assign("KBDOC_APPROVAR_ID", $focus->kbdoc_approvar_id);

if (isset($focus->id)) {
	$xtpl->assign("FILE_OR_HIDDEN","hidden");

	if (!isset($_REQUEST['isDuplicate']) || empty($_REQUEST['isDuplicate'])) {
		//$xtpl->assign("DISABLED","disabled");
	}
} else {
	$xtpl->assign("FILE_OR_HIDDEN","file");
}
/* not setting the default published date
if (empty($focus->active_date)) {
	global $timedate;
	$xtpl->assign("ACTIVE_DATE",$timedate->to_display_date(gmdate("Y-m-d H:i:s"), true) );

} else {
	$xtpl->assign("ACTIVE_DATE",$focus->active_date);
}
*/
$xtpl->assign("ACTIVE_DATE",$focus->active_date);

$xtpl->assign("EXP_DATE",$focus->exp_date);

if (isset($focus->status_id)){
	$xtpl->assign("STATUS_OPTIONS", get_select_options_with_id($app_list_strings['kbdocument_status_dom'], $focus->status_id));

}
else if (isset($_REQUEST['status_id'])) {
    $xtpl->assign("STATUS_OPTIONS", get_select_options_with_id($app_list_strings['kbdocument_status_dom'], $_REQUEST['status_id']));
}
else{
	$xtpl->assign("STATUS_OPTIONS", get_select_options_with_id($app_list_strings['kbdocument_status_dom'], ''));
}

if (empty($focus->team_id)) {
	$xtpl->assign("TEAM_NAME", $current_user->default_team_name);
	$xtpl->assign("TEAM_ID", $current_user->default_team);
}
else {
	$xtpl->assign("TEAM_NAME", $focus->team_name);
	$xtpl->assign("TEAM_ID", $focus->team_id);
}
//save default team name/id for external check/uncheck
$xtpl->assign("DEFAULT_TEAM_NAME", $current_user->default_team_name);
$xtpl->assign("DEFAULT_TEAM_ID", $current_user->default_team);

if (!empty($focus->kbdoc_approver_id)) {

	$user = BeanFactory::getBean('Users', $focus->kbdoc_approver_id);
	$xtpl->assign("KBDOC_APPROVER_NAME", $user->name);
	$xtpl->assign("KBDOC_APPROVER_ID", $focus->kbdoc_approver_id);
}

if (empty($focus->assigned_user_id) && empty($focus->id))  $focus->assigned_user_id = $current_user->id;
if (empty($focus->assigned_name) && empty($focus->id))  $focus->assigned_user_name = $current_user->user_name;

if (!empty($focus->assigned_user_id)) {
        $user = BeanFactory::getBean('Users', $focus->assigned_user_id);
        $xtpl->assign("KBARTICLE_AUTHOR_NAME", $user->name);
        $xtpl->assign("KBARTICLE_AUTHOR_ID",$focus->assigned_user_id);
    }


//converting email into a document
if(isset($from_email) && !empty($from_email)){
    $xtpl->assign("KBDOCUMENT_NAME",$from_email->name);
    $xtpl->assign("REVISION",1);
	$revision = 1;
}

//converting a case into document
if (empty($focus->id) && !empty($from_case)) {
	$xtpl->assign("KBDOCUMENT_NAME",$from_case->name);
	$xtpl->assign("REVISION",1);
	$revision = 1;
}

$code = $teamSetField->getClassicView();
$xtpl->assign("TEAM_SET_FIELD", $code);
$xtpl->parse("main.pro");
/* comment out the non-pro code
$xtpl->parse("main.open_source");
*/

global $timedate;
$xtpl->assign("CALENDAR_DATEFORMAT", $timedate->get_cal_date_format());
$xtpl->assign("USER_DATE_FORMAT", $timedate->get_user_date_format());

if ($focus->is_template ==1 ) {
	$xtpl->assign("IS_TEMPLATE_CHECKED","checked");
} else {
	$xtpl->assign("TEMPLATE_TYPE_DISABLED","disabled");

}

$xtpl->assign('JSON_CONFIG_JAVASCRIPT', $json_config->get_static_json_server());

echo'<script> var site_url= {"site_url":"'.$sugar_config['site_url'].'"};</script>';


$popup_request_data = array(
	'call_back_function' => 'kbdocument_set_return',
	'form_name' => 'EditView',
	'field_to_name_array' => array(
		'id' => 'related_doc_id',
		'document_name' => 'related_document_name',
		),
	);
$json = getJSONobj();
$xtpl->assign('encoded_kbdocument_popup_request_data', $json->encode($popup_request_data));


//setting email and case ids,modulenames
if(isset($_REQUEST['email_id']) && $_REQUEST['email_id'] != null){
	$xtpl->assign("COMING_FROM_ID",$_REQUEST['email_id']);
	$xtpl->assign("COMING_FROM_MODULE",'Emails');
}
else if(isset($_REQUEST['case_id']) && $_REQUEST['case_id'] != null){
	$xtpl->assign("COMING_FROM_ID",$_REQUEST['case_id']);
	$xtpl->assign("COMING_FROM_MODULE",'Cases');
}


if(!isset($_REQUEST['isDuplicate']) && $focus->id == null){
	$xtpl->assign("REVISION",1);
	$revision = 1;
}

if ($load_signed) {
	$xtpl->assign("RELATED_DOCUMENT_REVISION_DISABLED","disabled");
	$xtpl->assign("RELATED_DOCUMENT_BUTTON_AVAILABILITY","hidden");
	$xtpl->assign("LOAD_SIGNED_ID",$_REQUEST['load_signed_id']);
} else {
	$xtpl->assign("RELATED_DOCUMENT_BUTTON_AVAILABILITY","button");
}


/////////////////////////

require_once('include/SugarTinyMCE.php');
$tiny = new SugarTinyMCE();
$tiny->defaultConfig['cleanup_on_startup']=true;
$ed = $tiny->getInstance('body_html');
$xtpl->assign("tiny", $ed);

$edValue = '';
$kbDocBody = from_html(KBDocument::get_kbdoc_body_without_incrementing_count($kbId));
if (!empty($kbDocBody)) {
    $edValue = $kbDocBody;
} else if (!empty($from_case)) {
    //set the kb fields from case i.e. kb name
    if (!empty($from_case->case_number)) {
        $edValue = '<p>Case Number: ' . $from_case->case_number . '</p>';
    }
    if (!empty($from_case->name)) {
        $edValue .= '<p>Subject: ' . $from_case->name . '</p>';
    }
    if (!empty($from_case->description)) {
        $edValue .= '<p>Description: ' . $from_case->description . '</p>';
    }
    if (!empty($from_case->resolution)) {
        $edValue .= '<p>Resolution: ' . $from_case->resolution . '</p>';
    }
    //if bugs are associated to cases then extract the work_log and notes etc...
    //also extract notes associated to the cases
} else if (!empty($from_email)) {
    //set the kb fields from case i.e. kb name
    if (!empty($from_email->description)) {
        $edValue = $from_email->description . '<br>';
    }
    if (!empty($from_email->description_html)) {
        $edValue = $from_email->description_html . '<br>';
    }
    //if bugs are associated to cases then extract the work_log and notes etc...
    //also extract notes associated to the cases
}
$xtpl->assign("HTMLAREA",$edValue);
$xtpl->parse("main.htmlarea");
/////////////////////////

 echo <<<EOQ
	  <SCRIPT>
	  function insert_variable_html(text) {
	  	var inst = tinyMCE.getInstanceById('body_html');
        inst.execCommand('mceInsertRawHTML', false, text);
	  }
	  function insert_variable_html_link(text) {
	  	var thelink="<a href='" + text + "''" + ">'" + SUGAR.language.get('KBDocuments', 'LBL_DEFAULT_LINK_TEXT') + "'</a>";
	  	insert_variable_html(thelink);
	  }
	  </SCRIPT>
EOQ;


$javascript = new javascript();
$javascript->setFormName('EditView');
$javascript->setSugarBean($focus);
//$javascript->addAllFields('');

//add custom fields to validation
foreach($javascript->sugarbean->field_name_map as $field=>$value){

    if(isset($value['custom_type'])) {
        if ($value['custom_type'] != 'link') {
            //pass in required flag if set to required
            if(isset($value['required']) && $value['required']){
              $javascript->addField($field, true);
            }else{
                //if not required, then just pass in to validate
              $javascript->addField($field,false);
            }
        }
    }
}
$javascript->addFieldGeneric('kbdocument_name', '','LBL_ARTICLE_TITLE','true');
$javascript->addFieldGeneric('assigned_user_name', 'varchar', $mod_strings['LBL_ARTICLE_AUTHOR'] ,'true');
$javascript->addToValidateBinaryDependency('assigned_user_name', 'alpha', $app_strings['ERR_SQS_NO_MATCH_FIELD'] . $mod_strings['LBL_ARTICLE_AUTHOR'], 'false', '', 'assigned_user_id');
$javascript->addToValidateBinaryDependency('kbdoc_approver_name', 'alpha', $app_strings['ERR_SQS_NO_MATCH_FIELD'] . $mod_strings['LBL_ARTICLE_APPROVED_BY'], 'false', '', 'kbdoc_approver_id');
$javascript->addFieldGeneric('kbdocument_revision_number', '', 'LBL_DOC_VERSION' ,'true');
$javascript->addFieldGeneric('team_name', 'varchar', $app_strings['LBL_TEAM'] ,'true');
$javascript->addToValidateBinaryDependency('team_name', 'alpha', $app_strings['ERR_SQS_NO_MATCH_FIELD'] . $app_strings['LBL_TEAM'], 'false', '', 'team_id');
$javascript->addFieldGeneric('tiny_vals', '', 'LBL_ARTICLE_BODY' ,'true');
echo $javascript->getScript();


//Add Custom Fields
require_once('modules/DynamicFields/templates/Files/EditView.php');

$xtpl->parse("main");
$xtpl->out("main");


$savedSearch = BeanFactory::getBean('SavedSearch');
$json = getJSONobj();
$savedSearchSelects = $json->encode(array($GLOBALS['app_strings']['LBL_SAVED_SEARCH_SHORTCUT'] . '<br>' . $savedSearch->getSelect('KBDocuments')));
$str = "<script>
YAHOO.util.Event.addListener(window, 'load', SUGAR.util.fillShortcuts, $savedSearchSelects);
</script>";
echo $str;

?>
