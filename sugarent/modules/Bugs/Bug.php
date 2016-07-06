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

// Bug report bean
class Bug extends SugarBean {
        var $field_name_map = array();
	// Stored fields
	var $id;
	var $date_entered;
	var $date_modified;
	var $modified_user_id;
	var $assigned_user_id;
	var $team_id;
	var $bug_number;
	var $description;
	var $name;
	var $status;
	var $priority;

	// These are related
	var $resolution;
	var $found_in_release;
	var $release_name;
	var $fixed_in_release_name;
	var $created_by;
	var $created_by_name;
	var $modified_by_name;
	var $account_id;
	var $contact_id;
	var $case_id;
	var $task_id;
	var $note_id;
	var $meeting_id;
	var $call_id;
	var $email_id;
	var $assigned_user_name;
	var $type;
	var $team_name;
	var $system_id;

	//BEGIN Additional fields being added to Bug Tracker

	var $fixed_in_release;
	var $work_log;
	var $source;
	var $product_category;
	//END Additional fields being added to Bug Tracker

	var $module_dir = 'Bugs';
	var $table_name = "bugs";
	var $rel_account_table = "accounts_bugs";
	var $rel_contact_table = "contacts_bugs";
	var $rel_case_table = "cases_bugs";
    var $importable = true;
	var $object_name = "Bug";

	// This is used to retrieve related fields from form posts.
	var $additional_column_fields = Array('assigned_user_name', 'assigned_user_id', 'case_id', 'account_id', 'contact_id', 'task_id', 'note_id', 'meeting_id', 'call_id', 'email_id');

	var $relationship_fields = Array('case_id'=>'cases', 'account_id' => 'accounts', 'contact_id'=>'contacts',
									'task_id'=>'tasks', 'note_id'=>'notes', 'meeting_id'=>'meetings',
									'call_id'=>'calls', 'email_id'=>'emails');

    /**
     * This is a depreciated method, please start using __construct() as this method will be removed in a future version
     *
     * @see __construct
     * @deprecated
     */
    public function Bug()
    {
        self::__construct();
    }

    public function __construct()
    {
        parent::__construct();


        $this->setupCustomFields('Bugs');

        foreach ($this->field_defs as $field) {
            if (!isset($field['name'])) {
                continue;
            }
            $this->field_name_map[$field['name']] = $field;
        }
    }

	var $new_schema = true;





	function get_summary_text()
	{
		return "$this->name";
	}

	function create_list_query($order_by, $where, $show_deleted = 0)
	{
		$custom_join = $this->custom_fields->getJOIN();

        $custom_join = $this->getCustomJoin();
		
                $query = "SELECT ";

		$query .= "
                               bugs.*

                                ,users.user_name as assigned_user_name, releases.id release_id, releases.name release_name";
                                $query .= ", teams.name AS team_name";
        $query .= $custom_join['select'];
                                $query .= " FROM bugs ";


		// We need to confirm that the user is a member of the team of the item.
		$this->add_team_security_where_clause($query);
		$query .= "				LEFT JOIN releases ON bugs.found_in_release=releases.id
								LEFT JOIN users
                                ON bugs.assigned_user_id=users.id";
                                $query .= " LEFT JOIN teams ON bugs.team_id=teams.id";
                                $query .= "  ";
        $query .= $custom_join['join'];
            $where_auto = '1=1';
			if($show_deleted == 0){
            	$where_auto = " $this->table_name.deleted=0 ";
			}else if($show_deleted == 1){
				$where_auto = " $this->table_name.deleted=1 ";
			}


		if($where != "")
			$query .= "where $where AND ".$where_auto;
		else
			$query .= "where ".$where_auto;
		if(substr_count($order_by, '.') > 0){
			$query .= " ORDER BY $order_by";
		}
		else if($order_by != "")
			$query .= " ORDER BY $order_by";
		else
			$query .= " ORDER BY bugs.name";
		return $query;
	}

	function fill_in_additional_detail_fields()
	{
        parent::fill_in_additional_detail_fields();
		$this->set_release();
		$this->set_fixed_in_release();
	}


	public function set_release()
	{
	    static $releases;

	    if ( empty($this->found_in_release) ) {
	        return;
	    }
	    if ( isset($releases[$this->found_in_release]) ) {
	        $this->release_name = $releases[$this->found_in_release];
	        return;
	    }

		$query = "SELECT r1.name from releases r1, $this->table_name i1 where r1.id = i1.found_in_release and i1.id = '$this->id' and i1.deleted=0 and r1.deleted=0";
        $result = $this->db->query($query,true," Error filling in additional detail fields: ");

        // Get the id and the name.
        $row = $this->db->fetchByAssoc($result);

        if($row != null)
        {
            $this->release_name = $row['name'];
        }
        else
        {
            $this->release_name = '';
        }

        $releases[$this->found_in_release] = $this->release_name;
	}


	public function set_fixed_in_release()
	{
	    static $releases;

	    if ( empty($this->fixed_in_release) ) {
	        return;
	    }
	    if ( isset($releases[$this->fixed_in_release]) ) {
	        $this->fixed_in_release_name = $releases[$this->fixed_in_release];
	        return;
	    }

        $query = "SELECT r1.name from releases r1, $this->table_name i1 where r1.id = i1.fixed_in_release and i1.id = '$this->id' and i1.deleted=0 and r1.deleted=0";
        $result = $this->db->query($query,true," Error filling in additional detail fields: ");

        // Get the id and the name.
        $row = $this->db->fetchByAssoc($result);



        if($row != null)
        {
            $this->fixed_in_release_name = $row['name'];
        }
        else
        {
            $this->fixed_in_release_name = '';
        }

        $releases[$this->fixed_in_release] = $this->fixed_in_release_name;

	}


	function get_list_view_data(){
		global $current_language;
		$the_array = parent::get_list_view_data();
		$app_list_strings = return_app_list_strings_language($current_language);
		$mod_strings = return_module_language($current_language, 'Bugs');

		$this->set_release();

        // The new listview code only fetches columns that we're displaying and not all
        // the columns so we need these checks.
	   $the_array['NAME'] = (($this->name == "") ? "<em>blank</em>" : $this->name);
        $the_array['PRIORITY'] = empty($this->priority)? "" : (!isset($app_list_strings[$this->field_name_map['priority']['options']][$this->priority]) ? $this->priority : $app_list_strings[$this->field_name_map['priority']['options']][$this->priority]);
        $the_array['STATUS'] = empty($this->status)? "" : (!isset($app_list_strings[$this->field_name_map['status']['options']][$this->status]) ? $this->status : $app_list_strings[$this->field_name_map['status']['options']][$this->status]);
        $the_array['TYPE'] = empty($this->type)? "" : (!isset($app_list_strings[$this->field_name_map['type']['options']][$this->type]) ? $this->type : $app_list_strings[$this->field_name_map['type']['options']][$this->type]);
	   $the_array['RELEASE']= $this->release_name;
	   $the_array['BUG_NUMBER'] = $this->bug_number;
	   $the_array['ENCODED_NAME']=$this->name;
    	$the_array['BUG_NUMBER'] = format_number_display($this->bug_number,$this->system_id);

    	return  $the_array;
	}

	/**
		builds a generic search based on the query string using or
		do not include any $this-> because this is called on without having the class instantiated
	*/
	function build_generic_where_clause ($the_query_string) {
	$where_clauses = Array();
	$the_query_string = $this->db->quote($the_query_string);
	array_push($where_clauses, "bugs.name like '$the_query_string%'");
	if (is_numeric($the_query_string)) array_push($where_clauses, "bugs.bug_number like '$the_query_string%'");

	$the_where = "";
	foreach($where_clauses as $clause)
	{
		if($the_where != "") $the_where .= " or ";
		$the_where .= $clause;
	}

	return $the_where;
	}

	function set_notification_body($xtpl, $bug)
	{
		global $mod_strings, $app_list_strings;

		$bug->set_release();

		$xtpl->assign("BUG_SUBJECT", $bug->name);
		$xtpl->assign("BUG_TYPE", $app_list_strings['bug_type_dom'][$bug->type]);
		$xtpl->assign("BUG_PRIORITY", $app_list_strings['bug_priority_dom'][$bug->priority]);
		$xtpl->assign("BUG_STATUS", $app_list_strings['bug_status_dom'][$bug->status]);
		$xtpl->assign("BUG_RESOLUTION", $app_list_strings['bug_resolution_dom'][$bug->resolution]);
		$xtpl->assign("BUG_RELEASE", $bug->release_name);
		$xtpl->assign("BUG_DESCRIPTION", $bug->description);
		$xtpl->assign("BUG_WORK_LOG", $bug->work_log);
		$xtpl->assign("BUG_BUG_NUMBER", $bug->bug_number);
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
}

function getReleaseDropDown(){
	static $releases = null;
	if(!$releases){
		$seedRelease = BeanFactory::getBean('Releases');
		$releases = $seedRelease->get_releases(TRUE, "Active");
	}
	return $releases;
}

