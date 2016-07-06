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

// aCase is used to store case information.
class aCase extends Basic {
        var $field_name_map = array();
	// Stored fields
	var $id;
	var $date_entered;
	var $date_modified;
	var $modified_user_id;
	var $assigned_user_id;
	var $team_id;
	var $case_number;
	var $resolution;
	var $description;
	var $name;
	var $status;
	var $priority;


	var $created_by;
	var $created_by_name;
	var $modified_by_name;

	// These are related
	var $bug_id;
	var $account_name;
	var $account_id;
	var $contact_id;
	var $task_id;
	var $note_id;
	var $meeting_id;
	var $call_id;
	var $email_id;
	var $assigned_user_name;
	var $team_name;
	var $system_id;

	var $table_name = "cases";
	var $rel_account_table = "accounts_cases";
	var $rel_contact_table = "contacts_cases";
	var $module_dir = 'Cases';
	var $object_name = "Case";
	var $importable = true;
	/** "%1" is the case_number, for emails
	 * leave the %1 in if you customize this
	 * YOU MUST LEAVE THE BRACKETS AS WELL*/
	var $emailSubjectMacro = '[CASE:%1]';

	// This is used to retrieve related fields from form posts.
	var $additional_column_fields = Array('bug_id', 'assigned_user_name', 'assigned_user_id', 'contact_id', 'task_id', 'note_id', 'meeting_id', 'call_id', 'email_id');

	var $relationship_fields = Array('account_id'=>'accounts', 'bug_id' => 'bugs',
									'task_id'=>'tasks', 'note_id'=>'notes',
									'meeting_id'=>'meetings', 'call_id'=>'calls', 'email_id'=>'emails',
									);

    /**
     * This is a depreciated method, please start using __construct() as this method will be removed in a future version
     *
     * @see __construct
     * @deprecated
     */
    public function aCase()
    {
        self::__construct();
    }

	public function __construct() {
		parent::__construct();
		global $sugar_config;
		if(empty($sugar_config['require_accounts'])){
			unset($this->required_fields['account_name']);
		}

		$this->setupCustomFields('Cases');
        foreach ($this->field_defs as $name => $field) {
            $this->field_name_map[$name] = $field;
        }
	}

	var $new_schema = true;





	function get_summary_text()
	{
		return "$this->name";
	}

	function listviewACLHelper(){
		$array_assign = parent::listviewACLHelper();
		$is_owner = false;
		if(!empty($this->account_id)){

			if(!empty($this->account_id_owner)){
				global $current_user;
				$is_owner = $current_user->id == $this->account_id_owner;
			}
		}
			if(!ACLController::moduleSupportsACL('Accounts') || ACLController::checkAccess('Accounts', 'view', $is_owner)){
				$array_assign['ACCOUNT'] = 'a';
			}else{
				$array_assign['ACCOUNT'] = 'span';
			}

		return $array_assign;
	}

	function save_relationship_changes($is_update)
	{
		parent::save_relationship_changes($is_update);

		if (!empty($this->contact_id)) {
			$this->set_case_contact_relationship($this->contact_id);
		}
	}

	function set_case_contact_relationship($contact_id)
	{
		global $app_list_strings;
		$default = $app_list_strings['case_relationship_type_default_key'];
		$this->load_relationship('contacts');
		$this->contacts->add($contact_id,array('contact_role'=>$default));
	}

	function fill_in_additional_detail_fields()
	{
		parent::fill_in_additional_detail_fields();

        if(!empty($this->id)) {
		    $account_info = $this->getAccount($this->id);
            if(!empty($account_info)) {
                $this->account_name = $account_info['account_name'];
                $this->account_id = $account_info['account_id'];
            }
        }
	}


	/** Returns a list of the associated contacts
	 */
	function get_contacts()
	{
		$this->load_relationship('contacts');
		$query_array=$this->contacts->getQuery(true);

		//update the select clause in the retruned query.
		$query_array['select']="SELECT contacts.id, contacts.first_name, contacts.last_name, contacts.title, contacts.email1, contacts.phone_work, contacts_cases.contact_role as case_role, contacts_cases.id as case_rel_id ";

		$query='';
		foreach ($query_array as $qstring) {
			$query.=' '.$qstring;
		}
	    $temp = Array('id', 'first_name', 'last_name', 'title', 'email1', 'phone_work', 'case_role', 'case_rel_id');
		return $this->build_related_list2($query, BeanFactory::getBean('Contacts'), $temp);
	}

	function get_list_view_data(){
		global $current_language;
		$app_list_strings = return_app_list_strings_language($current_language);

		$temp_array = $this->get_list_view_array();
		$temp_array['NAME'] = (($this->name == "") ? "<em>blank</em>" : $this->name);
        $temp_array['PRIORITY'] = empty($this->priority)? "" : (!isset($app_list_strings[$this->field_name_map['priority']['options']][$this->priority]) ? $this->priority : $app_list_strings[$this->field_name_map['priority']['options']][$this->priority]);
        $temp_array['STATUS'] = empty($this->status)? "" : (!isset($app_list_strings[$this->field_name_map['status']['options']][$this->status]) ? $this->status : $app_list_strings[$this->field_name_map['status']['options']][$this->status]);
		$temp_array['ENCODED_NAME'] = $this->name;
		$temp_array['CASE_NUMBER'] = $this->case_number;
		$temp_array['SET_COMPLETE'] =  "<a href='index.php?return_module=Home&return_action=index&action=EditView&module=Cases&record=$this->id&status=Closed'>".SugarThemeRegistry::current()->getImage("close_inline","title=".translate('LBL_LIST_CLOSE','Cases')." border='0'",null,null,'.gif',translate('LBL_LIST_CLOSE','Cases'))."</a>";
		//$temp_array['ACCOUNT_NAME'] = $this->account_name; //overwrites the account_name value returned from the cases table.
		$temp_array['CASE_NUMBER'] = format_number_display($this->case_number,$this->system_id);
		return $temp_array;
	}

	/**
		builds a generic search based on the query string using or
		do not include any $this-> because this is called on without having the class instantiated
	*/
	function build_generic_where_clause ($the_query_string) {
	$where_clauses = Array();
	$the_query_string = $this->db->quote($the_query_string);
	array_push($where_clauses, "cases.name like '$the_query_string%'");
	array_push($where_clauses, "accounts.name like '$the_query_string%'");

	if (is_numeric($the_query_string)) array_push($where_clauses, "cases.case_number like '$the_query_string%'");

	$the_where = "";

	foreach($where_clauses as $clause)
	{
		if($the_where != "") $the_where .= " or ";
		$the_where .= $clause;
	}

	if($the_where != ""){
		$the_where = "(".$the_where.")";
	}

	return $the_where;
	}

	function set_notification_body($xtpl, $case)
	{
		global $app_list_strings;

		$xtpl->assign("CASE_SUBJECT", $case->name);
		$xtpl->assign("CASE_PRIORITY", (isset($case->priority) ? $app_list_strings['case_priority_dom'][$case->priority]:""));
		$xtpl->assign("CASE_STATUS", (isset($case->status) ? $app_list_strings['case_status_dom'][$case->status]:""));
		$xtpl->assign("CASE_DESCRIPTION", $case->description);

		return $xtpl;
	}

		function bean_implements($interface){
		switch($interface){
			case 'ACL':return true;
		}
		return false;
	}

	function save($check_notify = FALSE){
		if(!isset($this->system_id) || empty($this->system_id))
		{

			$admin = Administration::getSettings();
			$system_id = $admin->settings['system_system_id'];
			if(!isset($system_id)){
				$system_id = 1;
			}
			$this->system_id = $system_id;
		}
		return parent::save($check_notify);
	}

	/**
	 * retrieves the Subject line macro for InboundEmail parsing
	 * @return string
	 */
	function getEmailSubjectMacro() {
		global $sugar_config;
		return (isset($sugar_config['inbound_email_case_subject_macro']) && !empty($sugar_config['inbound_email_case_subject_macro'])) ?
			$sugar_config['inbound_email_case_subject_macro'] : $this->emailSubjectMacro;
	}

	function getAccount($case_id){
		if(empty($case_id)) return array();
	    $ret_array = array();
		$query = "SELECT acc.id, acc.name from accounts  acc, cases  where acc.id = cases.account_id and cases.id = '" . $case_id . "' and cases.deleted=0 and acc.deleted=0";
		$result = $this->db->query($query,true," Error filling in additional detail fields: ");

		// Get the id and the name.
		$row = $this->db->fetchByAssoc($result);

		if($row != null){
			$ret_array['account_name'] = stripslashes($row['name']);
			$ret_array['account_id'] 	= $row['id'];
		}
		else{
			$ret_array['account_name'] = '';
			$ret_array['account_id'] 	= '';
		}
		return $ret_array;
	}
}
?>
