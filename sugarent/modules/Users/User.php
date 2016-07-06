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
require_once('include/SugarObjects/templates/person/Person.php');

/**
 * User is used to store customer information.
 */
class User extends Person {
	// Stored fields
	var $name = '';
	var $full_name;
	var $id;
	var $user_name;
	var $user_hash;
	var $salutation;
	var $first_name;
	var $last_name;
	var $date_entered;
	var $date_modified;
	var $modified_user_id;
	var $created_by;
	var $created_by_name;
	var $modified_by_name;
	var $description;
	var $phone_home;
	var $phone_mobile;
	var $phone_work;
	var $phone_other;
	var $phone_fax;
	var $email1;
	var $email2;
	var $address_street;
	var $address_city;
	var $address_state;
	var $address_postalcode;
	var $address_country;
	var $status;
	var $title;
	var $portal_only;
	var $department;
	var $authenticated = false;
	var $error_string;
	var $is_admin;
	var $employee_status;
	var $messenger_id;
	var $messenger_type;
	var $is_group;
	var $accept_status; // to support Meetings
	//adding a property called team_id so we can populate it for use in the team widget
	var $team_id;

	var $receive_notifications;
	var $default_team;

	var $reports_to_name;
	var $reports_to_id;
	var $team_exists = false;
	var $table_name = "users";
	var $module_dir = 'Users';
	var $object_name = "User";
	var $user_preferences;

	var $importable = true;
    /**
     * @var UserPreference
     */
    var $_userPreferenceFocus;

	var $encodeFields = Array ("first_name", "last_name", "description");

	// This is used to retrieve related fields from form posts.
	var $additional_column_fields = array ('reports_to_name'
	);

	var $emailAddress;

    public $relationship_fields = array('call_id' => 'calls', 'meeting_id' => 'meetings');

	var $new_schema = true;

    /**
     * This is a depreciated method, please start using __construct() as this method will be removed in a future version
     *
     * @see __construct
     * @deprecated
     */
    public function User()
    {
        self::__construct();
    }

	public function __construct() {
		parent::__construct();
		$this->disable_row_level_security = true;

		$this->_loadUserPreferencesFocus();
	}

	protected function _loadUserPreferencesFocus()
	{
	    $this->_userPreferenceFocus = new UserPreference($this);
	}

    /**
     * returns an admin user
     */
    public function getSystemUser()
    {
        if (null === $this->retrieve('1'))
            // handle cases where someone deleted user with id "1"
            $this->retrieve_by_string_fields(array(
                'status' => 'Active',
                'is_admin' => '1',
                ));

        return $this;
    }


	/**
	 * convenience function to get user's default signature
	 */
	function getDefaultSignature() {
		if($defaultId = $this->getPreference('signature_default')) {
			return $this->getSignature($defaultId);
		} else {
			return array();
		}
	}

	/**
	 * retrieves the signatures for a user
	 * @param string id ID of user_signature
	 * @return array ID, signature, and signature_html
	 */
	public function getSignature($id)
	{
	    $signatures = $this->getSignaturesArray();

	    return isset($signatures[$id]) ? $signatures[$id] : false;
	}

	function getSignaturesArray() {
		$q = 'SELECT * FROM users_signatures WHERE user_id = \''.$this->id.'\' AND deleted = 0 ORDER BY name ASC';
		$r = $this->db->query($q);

		// provide "none"
		$sig = array(""=>"");

		while($a = $this->db->fetchByAssoc($r)) {
			$sig[$a['id']] = $a;
		}

		return $sig;
	}

	/**
	 * retrieves any signatures that the User may have created as <select>
	 */
	public function getSignatures(
	    $live = false,
	    $defaultSig = '',
	    $forSettings = false
	    )
	{
		$sig = $this->getSignaturesArray();
		$sigs = array();
		foreach ($sig as $key => $arr)
		{
			$sigs[$key] = !empty($arr['name']) ? $arr['name'] : '';
		}

		$change = '';
		if(!$live) {
			$change = ($forSettings) ? "onChange='displaySignatureEdit();'" : "onChange='setSigEditButtonVisibility();'";
		}

		$id = (!$forSettings) ? 'signature_id' : 'signature_idDisplay';

		$out  = "<select {$change} id='{$id}' name='{$id}'>";
		$out .= get_select_options_with_id($sigs, $defaultSig).'</select>';

		return $out;
	}

	/**
	 * returns buttons and JS for signatures
	 */
	function getSignatureButtons($jscall='', $defaultDisplay=false) {
		global $mod_strings;

		$jscall = empty($jscall) ? 'open_email_signature_form' : $jscall;

		$butts  = "<input class='button' onclick='javascript:{$jscall}(\"\", \"{$this->id}\");' value='{$mod_strings['LBL_BUTTON_CREATE']}' type='button'>&nbsp;";
		if($defaultDisplay) {
			$butts .= '<span name="edit_sig" id="edit_sig" style="visibility:inherit;"><input class="button" onclick="javascript:'.$jscall.'(document.getElementById(\'signature_id\', \'\').value)" value="'.$mod_strings['LBL_BUTTON_EDIT'].'" type="button" tabindex="392">&nbsp;
					</span>';
		} else {
			$butts .= '<span name="edit_sig" id="edit_sig" style="visibility:hidden;"><input class="button" onclick="javascript:'.$jscall.'(document.getElementById(\'signature_id\', \'\').value)" value="'.$mod_strings['LBL_BUTTON_EDIT'].'" type="button" tabindex="392">&nbsp;
					</span>';
		}
		return $butts;
	}

	/**
	 * performs a rudimentary check to verify if a given user has setup personal
	 * InboundEmail
	 *
	 * @return bool
	 */
	public function hasPersonalEmail()
	{
	    $focus = BeanFactory::getBean('InboundEmail');
        $focus->disable_row_level_security = true;
	    $focus->retrieve_by_string_fields(array('group_id' => $this->id));

	    return !empty($focus->id);
	}

	/* Returns the User's private GUID; this is unassociated with the User's
	 * actual GUID.  It is used to secure file names that must be HTTP://
	 * accesible, but obfusicated.
	 */
	function getUserPrivGuid() {
        $userPrivGuid = $this->getPreference('userPrivGuid', 'global', $this);
		if ($userPrivGuid) {
			return $userPrivGuid;
		} else {
			$this->setUserPrivGuid();
			if (!isset ($_SESSION['setPrivGuid'])) {
				$_SESSION['setPrivGuid'] = true;
				$userPrivGuid = $this->getUserPrivGuid();
				return $userPrivGuid;
			} else {
				sugar_die("Breaking Infinite Loop Condition: Could not setUserPrivGuid.");
			}
		}
	}

	function setUserPrivGuid() {
		$privGuid = create_guid();
		//($name, $value, $nosession=0)
		$this->setPreference('userPrivGuid', $privGuid, 0, 'global', $this);
	}

	/**
	 * Interface for the User object to calling the UserPreference::setPreference() method in modules/UserPreferences/UserPreference.php
	 *
	 * @see UserPreference::setPreference()
	 *
	 * @param string $name Name of the preference to set
	 * @param string $value Value to set preference to
	 * @param null $nosession For BC, ignored
	 * @param string $category Name of the category to retrieve
	 */
	public function setPreference(
	    $name,
	    $value,
	    $nosession = 0,
	    $category = 'global'
	    )
	{
	    // for BC
	    if ( func_num_args() > 4 ) {
	        $user = func_get_arg(4);
	        $GLOBALS['log']->deprecated('User::setPreferences() should not be used statically.');
	    }
	    else
	        $user = $this;

        $user->_userPreferenceFocus->setPreference($name, $value, $category);
	}

	/**
	 * Interface for the User object to calling the UserPreference::resetPreferences() method in modules/UserPreferences/UserPreference.php
	 *
	 * @see UserPreference::resetPreferences()
	 *
	 * @param string $category category to reset
	 */
	public function resetPreferences(
	    $category = null
	    )
	{
	    // for BC
	    if ( func_num_args() > 1 ) {
	        $user = func_get_arg(1);
	        $GLOBALS['log']->deprecated('User::resetPreferences() should not be used statically.');
	    }
	    else
	        $user = $this;

        $user->_userPreferenceFocus->resetPreferences($category);
	}

	/**
	 * Interface for the User object to calling the UserPreference::savePreferencesToDB() method in modules/UserPreferences/UserPreference.php
	 *
	 * @see UserPreference::savePreferencesToDB()
	 */
	public function savePreferencesToDB()
	{
        // for BC
	    if ( func_num_args() > 0 ) {
	        $user = func_get_arg(0);
	        $GLOBALS['log']->deprecated('User::savePreferencesToDB() should not be used statically.');
	    }
	    else
	        $user = $this;

        $user->_userPreferenceFocus->savePreferencesToDB();
	}

	/**
	 * Unconditionally reloads user preferences from the DB and updates the session
	 * @param string $category name of the category to retreive, defaults to global scope
	 * @return bool successful?
	 */
	public function reloadPreferences($category = 'global')
	{
	    return $this->_userPreferenceFocus->reloadPreferences($category = 'global');
	}

	/**
	 * Interface for the User object to calling the UserPreference::getUserDateTimePreferences() method in modules/UserPreferences/UserPreference.php
	 *
	 * @see UserPreference::getUserDateTimePreferences()
	 *
	 * @return array 'date' - date format for user ; 'time' - time format for user
	 */
	public function getUserDateTimePreferences()
	{
        // for BC
	    if ( func_num_args() > 0 ) {
	        $user = func_get_arg(0);
	        $GLOBALS['log']->deprecated('User::getUserDateTimePreferences() should not be used statically.');
	    }
	    else
	        $user = $this;

        return $user->_userPreferenceFocus->getUserDateTimePreferences();
	}

	/**
	 * Interface for the User object to calling the UserPreference::loadPreferences() method in modules/UserPreferences/UserPreference.php
	 *
	 * @see UserPreference::loadPreferences()
	 *
	 * @param string $category name of the category to retreive, defaults to global scope
	 * @return bool successful?
	 */
	public function loadPreferences(
	    $category = 'global'
	    )
	{
	    // for BC
	    if ( func_num_args() > 1 ) {
	        $user = func_get_arg(1);
	        $GLOBALS['log']->deprecated('User::loadPreferences() should not be used statically.');
	    }
	    else
	        $user = $this;

        return $user->_userPreferenceFocus->loadPreferences($category);
	}

	/**
	 * Interface for the User object to calling the UserPreference::setPreference() method in modules/UserPreferences/UserPreference.php
	 *
	 * @see UserPreference::getPreference()
	 *
	 * @param string $name name of the preference to retreive
	 * @param string $category name of the category to retreive, defaults to global scope
	 * @return mixed the value of the preference (string, array, int etc)
	 */
	public function getPreference(
	    $name,
	    $category = 'global'
	    )
	{
	    // for BC
	    if ( func_num_args() > 2 ) {
	        $user = func_get_arg(2);
	        $GLOBALS['log']->deprecated('User::getPreference() should not be used statically.');
	    }
	    else
	        $user = $this;

        return $user->_userPreferenceFocus->getPreference($name, $category);
	}

	/**
     * incrementETag
     *
     * This function increments any ETag seed needed for a particular user's
     * UI. For example, if the user changes their theme, the ETag seed for the
     * main menu needs to be updated, so you call this function with the seed name
     * to do so:
     *
     * UserPreference::incrementETag("mainMenuETag");
     *
     * @param string $tag ETag seed name.
     * @return nothing
     */
    public function incrementETag($tag){
    	$val = $this->getETagSeed($tag);
    	if($val == 2147483648){
    		$val = 0;
    	}
    	$val++;
    	$this->setPreference($tag, $val, 0, "ETag");
    }

    /**
     * getETagSeed
     *
     * This function is a wrapper to encapsulate getting the ETag seed and
     * making sure it's sanitized for use in the app.
     *
     * @param string $tag ETag seed name.
     * @return integer numeric value of the seed
     */
    public function getETagSeed($tag){
    	$val = $this->getPreference($tag, "ETag");
    	if($val == null){
    		$val = 0;
    	}
    	return $val;
    }


   /**
    * Get WHERE clause that fetches all users counted for licensing purposes
    * @return string
    */
	public static function getLicensedUsersWhere()
	{
        $db = DBManagerFactory::getInstance();
        $where = sprintf(
            " deleted != 1 AND user_name IS NOT NULL AND is_group != 1 AND portal_only != 1 AND status = %s AND %s > 0 AND %s",
            $db->quoted('Active'),
            $db->convert('user_name', 'length'),
            self::getSystemUsersWhere()
        );
        return $where;
	    return "1<>1";
	}

    /**
     * Get WHERE clause for system users
     * @param string $comp SQL comparison operator
     * @param string $logic SQL logical operator
     * @return string
     */
    public static function getSystemUsersWhere($comp = '!=', $logic = 'AND')
    {
        $db = DBManagerFactory::getInstance();
        $users = array('SugarCRMSupport', 'SugarCRMUpgradeUser');
        $where = ' 1=1 ';
        foreach ($users as $user) {
            $where .= sprintf(
                " %s user_name %s %s ",
                $logic,
                $comp,
                $db->quoted($user)
            );
        }
        return $where;
    }

    /**
     * Gets the BWC theme for this user.
     *
     * There are only 2 supported themes at this time: `RTL` and `RacerX`.
     * `RTL` is returned if the current language is an RTL language, `RacerX` is
     * returned otherwise.
     *
     * @return string The theme currently set to this user.
     */
    public function getBWCTheme()
    {
        //FIXME: SC-3358 Should be getting the RTL languages from metadata.
        static $rtlLanguages = array('he_IL', 'ar_SA');
        $language = !empty($this->preferred_language) ? $this->preferred_language : $GLOBALS['current_language'];
        $theme = in_array($language, $rtlLanguages) ? 'RTL' : 'RacerX';

        return $theme;
    }

	function save($check_notify = false) {
		$isUpdate = !empty($this->id) && !$this->new_with_id;

		// this will cause the logged in admin to have the licensed user count refreshed
		if (isset($_SESSION)) unset($_SESSION['license_seats_needed']);

		$query = "SELECT count(id) as total from users WHERE ".self::getLicensedUsersWhere();


		global $sugar_flavor;
        $admin = Administration::getSettings();
		if((isset($sugar_flavor) && $sugar_flavor != null) &&
			($sugar_flavor=='CE' || isset($admin->settings['license_enforce_user_limit']) && $admin->settings['license_enforce_user_limit'] == 1)){

	        // Begin Express License Enforcement Check
			// this will cause the logged in admin to have the licensed user count refreshed
				if( isset($_SESSION['license_seats_needed']))
			        unset($_SESSION['license_seats_needed']);
		     	if ($this->portal_only != 1 && $this->is_group != 1 && (empty($this->fetched_row) || $this->fetched_row['status'] == 'Inactive' || $this->fetched_row['status'] == '') && $this->status == 'Active'){
			        global $sugar_flavor;
					//if((isset($sugar_flavor) && $sugar_flavor != null) && ($sugar_flavor=='CE')){
			            $license_users = $admin->settings['license_users'];
			            if ($license_users != '') {
	            			global $db;
	            			//$query = "SELECT count(id) as total from users WHERE status='Active' AND deleted=0 AND is_group=0 AND portal_only=0";
							$result = $db->query($query, true, "Error filling in user array: ");
							$row = $db->fetchByAssoc($result);
				            $license_seats_needed = $row['total'] - $license_users;
			            }
				        else
				        	$license_seats_needed = -1;
				        if( $license_seats_needed >= 0 ){
				           // displayAdminError( translate('WARN_LICENSE_SEATS_MAXED', 'Administration'). ($license_seats_needed + 1) . translate('WARN_LICENSE_SEATS2', 'Administration')  );
						    if (isset($_REQUEST['action']) && $_REQUEST['action'] != 'MassUpdate' && $_REQUEST['action'] != 'Save') {
					            die(translate('WARN_LICENSE_SEATS_EDIT_USER', 'Administration'). ' ' . translate('WARN_LICENSE_SEATS2', 'Administration'));
						    }
							else if (isset($_REQUEST['action'])){ // When this is not set, we're coming from the installer.
								$sv = new SugarView();
							    $sv->init('Users');
							    $sv->renderJavascript();
							    $sv->displayHeader();
		        				$sv->errors[] = translate('WARN_LICENSE_SEATS_EDIT_USER', 'Administration'). ' ' . translate('WARN_LICENSE_SEATS2', 'Administration');
                                $sv->displayErrors();
                                $sv->displayFooter();
							    die();
						  	}
				        }
			        //}
		     	}
			}
            // End Express License Enforcement Check


		// wp: do not save user_preferences in this table, see user_preferences module
		$this->user_preferences = '';

		// if this is an admin user, do not allow is_group or portal_only flag to be set.
		if ($this->is_admin) {
			$this->is_group = 0;
			$this->portal_only = 0;
		}


		// set some default preferences when creating a new user
		$setNewUserPreferences = empty($this->id) || !empty($this->new_with_id);


		// If the 'Primary' team changed then the team widget has set 'team_id' to a new value and we should
		// assign the same value to default_team because User module uses it for setting the 'Primary' team
		if (!empty($this->team_id))
		{
            $this->default_team = $this->team_id;
        }


        // track the current reports to id to be able to use it if it has changed
        $old_reports_to_id = isset($this->fetched_row['reports_to_id']) ? $this->fetched_row['reports_to_id'] : '';

		parent::save($check_notify);

		$GLOBALS['sugar_config']['disable_team_access_check'] = true;
        if($this->status != 'Reserved' && !$this->portal_only) {
		   // If this is not an update, then make sure the new user logic is executed.
            if (!$isUpdate) {
                // If this is a new user, make sure to add them to the appriate default teams
                if (!$this->team_exists) {
                    $team = BeanFactory::getBean('Teams');
                    $team->new_user_created($this);
                }
            } else if (empty($GLOBALS['sugar_config']['noPrivateTeamUpdate'])) {
                //if this is an update, then we need to ensure we keep the user's
                //private team name and name_2 in sync with their name.
                $team_id = $this->getPrivateTeamID();
                if(!empty($team_id)){

                    $team = BeanFactory::getBean('Teams', $team_id);
                    Team::set_team_name_from_user($team, $this);
                    $team->save();
                }
            }
		}

        // If reports to has changed, call update team memberships to correct the membership tree
        if ($old_reports_to_id != $this->reports_to_id) {
            $this->update_team_memberships($old_reports_to_id);
        }

		// set some default preferences when creating a new user
		if ( $setNewUserPreferences ) {
            $this->setPreference('reminder_time', 1800);
	        if(!$this->getPreference('calendar_publish_key')) {
		        $this->setPreference('calendar_publish_key', create_guid());
	        }
		}

        $this->savePreferencesToDB();
        //CurrentUserApi needs a consistent timestamp/format of the data modified for hash purposes.
        $this->hashTS = $this->date_modified;

        // In case this new/updated user changes the system status, reload it here
        apiLoadSystemStatus(true);

        return $this->id;
	}

	/**
	* @return boolean true if the user is a member of the role_name, false otherwise
	* @param string $role_name - Must be the exact name of the acl_role
	* @param string $user_id - The user id to check for the role membership, empty string if current user
	* @desc Determine whether or not a user is a member of an ACL Role. This function caches the
	*       results in the session or to prevent running queries after the first time executed.
	* Portions created by SugarCRM are Copyright (C) SugarCRM, Inc..
	* All Rights Reserved..
	* Contributor(s): ______________________________________..
	*/
	function check_role_membership($role_name, $user_id = ''){

		global $current_user;

		if(empty($user_id))
			$user_id = $current_user->id;

		// Check the Sugar External Cache to see if this users memberships were cached
		$role_array = sugar_cache_retrieve("RoleMemberships_".$user_id);

		// If we are pulling the roles for the current user
		if($user_id == $current_user->id){
			// If the Session doesn't contain the values
			if(!isset($_SESSION['role_memberships'])){
				// This means the external cache already had it loaded
				if(!empty($role_array))
					$_SESSION['role_memberships'] = $role_array;
				else{
					$_SESSION['role_memberships'] = ACLRole::getUserRoleNames($user_id);
					$role_array = $_SESSION['role_memberships'];
				}
			}
			// else the session had the values, so we assign to the role array
			else{
				$role_array = $_SESSION['role_memberships'];
			}
		}
		else{
			// If the external cache didn't contain the values, we get them and put them in cache
			if(!$role_array){
				$role_array = ACLRole::getUserRoleNames($user_id);
				sugar_cache_put("RoleMemberships_".$user_id, $role_array);
			}
		}

		// If the role doesn't exist in the list of the user's roles
		if(!empty($role_array) && in_array($role_name, $role_array))
			return true;
		else
			return false;
	}

    function get_summary_text() {
        //$this->_create_proper_name_field();
        return $this->name;
	}

	/**
	 * @deprecated
	* @param string $user_name - Must be non null and at least 2 characters
	* @param string $user_password - Must be non null and at least 1 character.
	* @desc Take an unencrypted username and password and return the encrypted password
	* @return string encrypted password for storage in DB and comparison against DB password.
	*/
	function encrypt_password($user_password)
	{
		// encrypt the password.
		$salt = substr($this->user_name, 0, 2);
		$encrypted_password = crypt($user_password, $salt);

		return $encrypted_password;
	}

	/**
	 * Authenicates the user; returns true if successful
	 *
	 * @param string $password MD5-encoded password
	 * @return bool
	 */
	public function authenticate_user($password)
	{
	    $row = self::findUserPassword($this->user_name, $password);
	    if(empty($row)) {
	        return false;
		} else {
			$this->id = $row['id'];
			return true;
		}
	}

    /**
     * Retrieves an User bean
     * pre-format name & full_name attribute with first/last
     * loads User's preferences
     * If the picture doesn't exist on the file system, it empties out the picture field
     *
     * @param string $id         ID of the User
     * @param bool $encode       Encode the result
     * @param bool $deleted      Include deleted users
     * @return User|null         Returns the user object unless once is not found, then it returns null
     */
    public function retrieve($id, $encode = true, $deleted = true) {
        $ret = parent::retrieve($id, $encode, $deleted);
        //CurrentUserApi needs a consistent timestamp/format of the data modified for hash purposes.
        $this->hashTS = $this->fetched_row['date_modified'];
		if ($ret) {
			if (isset($_SESSION)) {
				$this->loadPreferences();
			}

            // make sure that the picture actually exists
            SugarAutoLoader::requireWithCustom('include/download_file.php');
            $download_file = new DownloadFile();
            if (!empty($ret->picture) && !file_exists($download_file->getFilePathFromId($ret->picture))) {
                $ret->picture = '';
            }
		}

		return $ret;
	}

	function retrieve_by_email_address($email) {

		$email1= strtoupper($email);
		$q=<<<EOQ

		select id from users where id in ( SELECT  er.bean_id AS id FROM email_addr_bean_rel er,
			email_addresses ea WHERE ea.id = er.email_address_id
		    AND ea.deleted = 0 AND er.deleted = 0 AND er.bean_module = 'Users' AND email_address_caps IN ('{$email1}') )
EOQ;


		$res=$this->db->query($q);
		$row=$this->db->fetchByAssoc($res);

		if (!empty($row['id'])) {
			return $this->retrieve($row['id']);
		}
		return '';
	}

   function bean_implements($interface) {
        switch($interface){
            case 'ACL':return true;
        }
        return false;
    }


	/**
	 * Load a user based on the user_name in $this
	 * @param string $user_password Password
	 * @param bool $password_encoded Is password md5-encoded or plain text?
	 * @return -- this if load was successul and null if load failed.
	 */
	function load_user($user_password, $password_encoded = false)
	{
		global $login_error;
		unset($GLOBALS['login_error']);
		if(isset ($_SESSION['loginattempts'])) {
			$_SESSION['loginattempts'] += 1;
		} else {
			$_SESSION['loginattempts'] = 1;
		}
		if($_SESSION['loginattempts'] > 5) {
			$GLOBALS['log']->fatal('SECURITY: '.$this->user_name.' has attempted to login '.$_SESSION['loginattempts'].' times from IP address: '.$_SERVER['REMOTE_ADDR'].'.');
			return null;
		}

		$GLOBALS['log']->debug("Starting user load for $this->user_name");

		if (!isset ($this->user_name) || $this->user_name == "" || !isset ($user_password) || $user_password == "")
			return null;

	    if(!$password_encoded) {
	        $user_password = md5($user_password);
	    }
        $row = self::findUserPassword($this->user_name, $user_password);
		if(empty($row) || !empty ($GLOBALS['login_error'])) {
			$GLOBALS['log']->fatal('SECURITY: User authentication for '.$this->user_name.' failed - could not Load User from Database');
			return null;
		}

		// now fill in the fields.
		$this->loadFromRow($row);
		$this->loadPreferences();

		require_once ('modules/Versions/CheckVersions.php');
		$invalid_versions = get_invalid_versions();

		if (!empty ($invalid_versions)) {
			if (isset ($invalid_versions['Rebuild Relationships'])) {
				unset ($invalid_versions['Rebuild Relationships']);

				// flag for pickup in DisplayWarnings.php
				$_SESSION['rebuild_relationships'] = true;
			}

			if (isset ($invalid_versions['Rebuild Extensions'])) {
				unset ($invalid_versions['Rebuild Extensions']);

				// flag for pickup in DisplayWarnings.php
				$_SESSION['rebuild_extensions'] = true;
			}

			$_SESSION['invalid_versions'] = $invalid_versions;
		}
		if ($this->status != "Inactive")
			$this->authenticated = true;

		unset ($_SESSION['loginattempts']);
		return $this;
	}

	/**
	 * Generate a new hash from plaintext password
	 * @param string $password
	 */
	public static function getPasswordHash($password)
	{
	    if(!defined('CRYPT_MD5') || !constant('CRYPT_MD5')) {
	        // does not support MD5 crypt - leave as is
	        if(defined('CRYPT_EXT_DES') && constant('CRYPT_EXT_DES')) {
	            return crypt(strtolower(md5($password)),
	            	"_.012".substr(str_shuffle('./ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789'), -4));
	        }
	        // plain crypt cuts password to 8 chars, which is not enough
	        // fall back to old md5
	        return strtolower(md5($password));
	    }
	    return crypt(strtolower(md5($password)));
	}

	/**
	 * Check that password matches existing hash
	 * @param string $password Plaintext password
	 * @param string $user_hash DB hash
	 */
	public static function checkPassword($password, $user_hash)
	{
	    return self::checkPasswordMD5(md5($password), $user_hash);
	}

	/**
	 * Check that md5-encoded password matches existing hash
	 * @param string $password MD5-encoded password
	 * @param string $user_hash DB hash
	 * @return bool Match or not?
	 */
	public static function checkPasswordMD5($password_md5, $user_hash)
	{
	    if(empty($user_hash)) return false;
	    if($user_hash[0] != '$' && strlen($user_hash) == 32) {
	        // Old way - just md5 password
	        return strtolower($password_md5) === $user_hash;
	    }
	    return crypt(strtolower($password_md5), $user_hash) === $user_hash;
	}

	/**
	 * Find user with matching password
	 * @param string $name Username
	 * @param string $password MD5-encoded password
	 * @param string $where Limiting query
	 * @return the matching User of false if not found
	 */
	public static function findUserPassword($name, $password, $where = '')
	{
	    global $db;
		$name = $db->quote($name);
		$query = "SELECT * from users where user_name='$name'";
		if(!empty($where)) {
		    $query .= " AND $where";
		}
		$result = $db->limitQuery($query,0,1,false);
		if(!empty($result)) {
		    $row = $db->fetchByAssoc($result);
		    if(self::checkPasswordMD5($password, $row['user_hash'])) {
		        return $row;
		    }
		}
		return false;
	}

	/**
	 * Sets new password and resets password expiration timers
	 * @param string $new_password
	 */
	public function setNewPassword($new_password, $system_generated = '0')
	{
        $user_hash = self::getPasswordHash($new_password);
        $this->setPreference('loginexpiration','0');
	    $this->setPreference('lockout','');
		$this->setPreference('loginfailed','0');
		$this->savePreferencesToDB();
        //set new password
        $now = TimeDate::getInstance()->nowDb();
        $query =
            "UPDATE $this->table_name " .
            "SET user_hash={$this->db->quoted($user_hash)}, " .
                " system_generated_password={$this->db->quoted($system_generated)}, " .
                " pwd_last_changed={$this->db->quoted($now)}, date_modified={$this->db->quoted($now)} " .
            "WHERE id={$this->db->quoted($this->id)}";
		$this->db->query($query, true, "Error setting new password for $this->user_name: ");
        $_SESSION['hasExpiredPassword'] = '0';
	}

	/**
	 * Verify that the current password is correct and write the new password to the DB.
	 *
	 * @param string $user_password - Must be non null and at least 1 character.
	 * @param string $new_password - Must be non null and at least 1 character.
     * @param string $system_generated
	 * @return boolean - If passwords pass verification and query succeeds, return true, else return false.
	 */
	function change_password($user_password, $new_password, $system_generated = '0')
	{
		global $current_language;
		global $current_user;
		$mod_strings = return_module_language($current_language, 'Users');
		$GLOBALS['log']->debug("Starting password change for $this->user_name");

		if (!isset ($new_password) || $new_password == "") {
			$this->error_string = $mod_strings['ERR_PASSWORD_CHANGE_FAILED_1'].$current_user->user_name.$mod_strings['ERR_PASSWORD_CHANGE_FAILED_2'];
			return false;
		}

		// Check new password against rules set by admin
		if (!$this->check_password_rules($new_password)) {
		    $this->error_string = $mod_strings['ERR_PASSWORD_CHANGE_FAILED_1'].$current_user->user_name.$mod_strings['ERR_PASSWORD_CHANGE_FAILED_3'];
		    return false;
		}

		if (!$current_user->isAdminForModule('Users')) {
			//check old password first
			$row = self::findUserPassword($this->user_name, md5($user_password));
            if (empty($row)) {
				$GLOBALS['log']->warn("Incorrect old password for ".$this->user_name."");
				$this->error_string = $mod_strings['ERR_PASSWORD_INCORRECT_OLD_1'].$this->user_name.$mod_strings['ERR_PASSWORD_INCORRECT_OLD_2'];
				return false;
			}
		}

		$this->setNewPassword($new_password, $system_generated);
		return true;
	}

	/**
	 * Check new password against rules set by admin
	 * @param string $password
	 * @return boolean
	 */
	function check_password_rules($password) {
	    $length = mb_strlen($password);

	    // Min length
	    if(!empty($GLOBALS["sugar_config"]["passwordsetting"]["minpwdlength"]) && $GLOBALS["sugar_config"]["passwordsetting"]["minpwdlength"] > 0 && $length < $GLOBALS["sugar_config"]["passwordsetting"]["minpwdlength"]) {
	        return false;
	    }

	    // Max length
	    if(!empty($GLOBALS['sugar_config']['passwordsetting']['maxpwdlength']) && $GLOBALS['sugar_config']['passwordsetting']['maxpwdlength'] > 0 && $length > $GLOBALS['sugar_config']['passwordsetting']['maxpwdlength']) {
	        return false;
	    }

	    // One lower case
	    if(!empty($GLOBALS["sugar_config"]["passwordsetting"]["onelower"]) && !preg_match('/[a-z]+/', $password)){
	        return false;
	    }

	    // One upper case
	    if(!empty($GLOBALS["sugar_config"]["passwordsetting"]["oneupper"]) && !preg_match('/[A-Z]+/', $password)){
	        return false;
	    }

	    // One number
	    if(!empty($GLOBALS["sugar_config"]["passwordsetting"]["onenumber"]) && !preg_match('/[0-9]+/', $password)){
	        return false;
	    }

	    // One special character
	    if(!empty($GLOBALS["sugar_config"]["passwordsetting"]["onespecial"]) && !preg_match('/[|}{~!@#$%^&*()_+=-]+/', $password)){
	        return false;
	    }

	    // Custom regex
	    if(!empty($GLOBALS["sugar_config"]["passwordsetting"]["customregex"]) && !preg_match($GLOBALS["sugar_config"]["passwordsetting"]["customregex"], $password)){
	        return false;
	    }

	    return true;
	}

	function is_authenticated() {
		return $this->authenticated;
	}

	function fill_in_additional_list_fields() {
		$this->fill_in_additional_detail_fields();
	}

	function fill_in_additional_detail_fields() {
        // jmorais@dri Bug #56269
        parent::fill_in_additional_detail_fields();
        // ~jmorais@dri
		global $locale;

		$query = "SELECT u1.first_name, u1.last_name from users  u1, users  u2 where u1.id = u2.reports_to_id AND u2.id = '$this->id' and u1.deleted=0";
		$result = $this->db->query($query, true, "Error filling in additional detail fields");

		$row = $this->db->fetchByAssoc($result);

		if ($row != null) {
            global $locale;
            $this->reports_to_name = $locale->formatName('Users', $row);
		} else {
			$this->reports_to_name = '';
		}


        // Must set team_id for team widget purposes (default_team is primary team id)
        if (empty($this->team_id))
        {
            $this->team_id = $this->default_team;
        }

        //set the team info if the team id has already been set.
        //running only if team class exists will prevent breakage during upgrade/flavor conversions
        if (class_exists('Team') ) {
            // Set default_team_name for Campaigns WebToLeadCreation
            $this->default_team_name = Team::getTeamName($this->team_id);
        } else {
            //if no team id exists, set the team info to blank
            $this->default_team = '';
            $this->default_team_name = '';
            $this->team_set_id = '';
        }


		$this->_create_proper_name_field();
	}

	public function retrieve_user_id($user_name)
	{
	    $userFocus = BeanFactory::getBean('Users');
	    $userFocus->retrieve_by_string_fields(array('user_name'=>$user_name));
	    if ( empty($userFocus->id) )
	        return false;

        return $userFocus->id;
	}

	/**
	 * @return -- returns a list of all users in the system.
	 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc..
	 * All Rights Reserved..
	 * Contributor(s): ______________________________________..
	 */
	function verify_data($ieVerified=true) {
		global $mod_strings, $current_user;
		$verified = true;

		if (!empty ($this->id)) {
			// Make sure the user doesn't report to themselves.
			$reports_to_self = 0;
			$check_user = $this->reports_to_id;
			$already_seen_list = array ();
			while (!empty ($check_user)) {
				if (isset ($already_seen_list[$check_user])) {
					// This user doesn't actually report to themselves
					// But someone above them does.
					$reports_to_self = 1;
					break;
				}
				if ($check_user == $this->id) {
					$reports_to_self = 1;
					break;
				}
				$already_seen_list[$check_user] = 1;
				$query = "SELECT reports_to_id FROM users WHERE id='".$this->db->quote($check_user)."'";
				$result = $this->db->query($query, true, "Error checking for reporting-loop");
				$row = $this->db->fetchByAssoc($result);
				echo ("fetched: ".$row['reports_to_id']." from ".$check_user."<br>");
				$check_user = $row['reports_to_id'];
			}

			if ($reports_to_self == 1) {
				$this->error_string .= $mod_strings['ERR_REPORT_LOOP'];
				$verified = false;
			}
		}

		$query = "SELECT user_name from users where user_name='$this->user_name' AND deleted=0";
		if(!empty($this->id))$query .=  " AND id<>'$this->id'";
		$result = $this->db->query($query, true, "Error selecting possible duplicate users: ");
		$dup_users = $this->db->fetchByAssoc($result);

		if (!empty($dup_users)) {
			$this->error_string .= $mod_strings['ERR_USER_NAME_EXISTS_1'].$this->user_name.$mod_strings['ERR_USER_NAME_EXISTS_2'];
			$verified = false;
		}

		if (is_admin($current_user)) {
		    $remaining_admins = $this->db->getOne("SELECT COUNT(*) as c from users where is_admin = 1 AND deleted=0");

			if (($remaining_admins <= 1) && ($this->is_admin != '1') && ($this->id == $current_user->id)) {
				$GLOBALS['log']->debug("Number of remaining administrator accounts: {$remaining_admins}");
				$this->error_string .= $mod_strings['ERR_LAST_ADMIN_1'].$this->user_name.$mod_strings['ERR_LAST_ADMIN_2'];
				$verified = false;
			}
		}
		///////////////////////////////////////////////////////////////////////
		////	InboundEmail verification failure
		if(!$ieVerified) {
			$verified = false;
			$this->error_string .= '<br />'.$mod_strings['ERR_EMAIL_NO_OPTS'];
		}

		return $verified;
	}

	function get_list_view_data() {
		$user_fields = parent::get_list_view_data();

		if ($this->is_admin)
			$user_fields['IS_ADMIN_IMAGE'] = SugarThemeRegistry::current()->getImage('check_inline', '',null,null,'.gif', translate('LBL_CHECKMARK', 'Users'));
		elseif (!$this->is_admin) $user_fields['IS_ADMIN'] = '';
		if ($this->is_group)
			$user_fields['IS_GROUP_IMAGE'] = SugarThemeRegistry::current()->getImage('check_inline', '',null,null,'.gif', translate('LBL_CHECKMARK', 'Users'));
		else
			$user_fields['IS_GROUP_IMAGE'] = '';


        if ($this->is_admin) {
      			$user_fields['IS_ADMIN_IMAGE'] = SugarThemeRegistry::current()->getImage('check_inline', '',null,null,'.gif',translate('LBL_CHECKMARK', 'Users'));
        } elseif (!$this->is_admin) {
              $user_fields['IS_ADMIN'] = '';
        }

      	if ($this->is_group) {
      		$user_fields['IS_GROUP_IMAGE'] = SugarThemeRegistry::current()->getImage('check_inline', '',null,null,'.gif',translate('LBL_CHECKMARK', 'Users'));
        } else {
            $user_fields['NAME'] = empty ($this->name) ? '' : $this->name;
        }

		$user_fields['REPORTS_TO_NAME'] = $this->reports_to_name;

		if(isset($_REQUEST['module']) && $_REQUEST['module'] == 'Teams' &&
			(isset($_REQUEST['record']) && !empty($_REQUEST['record'])) ) {
			$q = "SELECT count(*) c FROM team_memberships WHERE deleted=0 AND user_id = '{$this->id}' AND team_id = '{$_REQUEST['record']}' AND explicit_assign = 1";
			$r = $this->db->query($q);
			$a = $this->db->fetchByAssoc($r);

			$user_fields['UPLINE'] = translate('LBL_TEAM_UPLINE','Users');

			if($a['c'] > 0) {
				$user_fields['UPLINE'] = translate('LBL_TEAM_UPLINE_EXPLICIT','Users');
			}
		}

		return $user_fields;
	}

	function list_view_parse_additional_sections(& $list_form, $xTemplateSection) {
		return $list_form;
	}


	/**
	 * returns the private team_id of the user, or if an ID is passed, of the
	 * target user
	 * @param id guid
	 * @return string
	 */
	function getPrivateTeam($id='') {
		if(!empty($id)) {
			$user = BeanFactory::getBean('Users', $id);
			return $user->getPrivateTeamID();
		}
		return $this->getPrivateTeamID();
	}


	function get_my_teams($return_obj = false) {
		$query = "SELECT DISTINCT rel.team_id, teams.name, teams.name_2, rel.implicit_assign FROM team_memberships rel RIGHT JOIN teams ON (rel.team_id = teams.id) WHERE rel.user_id = '{$this->id}' AND rel.deleted = 0 ORDER BY teams.name ASC";
		$result = $this->db->query($query, false, "Error retrieving user ID: ");
		$out = Array ();

		if ($return_obj) {

			$x = 0;
		}

		while ($row = $this->db->fetchByAssoc($result)) {
			if ($return_obj) {
				$out[$x] = BeanFactory::getBean('Teams');
				$out[$x]->retrieve($row['team_id']);
				$out[$x++]->implicit_assign = $row['implicit_assign'];
			} else {
				$out[$row['team_id']] = Team::getDisplayName($row['name'], $row['name_2']);
			}
		}

		return $out;
	}

	function getAllTeams() {
		$q = "SELECT id, name FROM teams WHERE private = 0 AND deleted = 0";
		$r = $this->db->query($q);

		$ret = array();
		while($a = $this->db->fetchByAssoc($r)) {
			$ret[$a['id']] = $a['name'];
		}

		return $ret;
	}

	/**
	 * When the user's reports to id is changed, this method is called.  This method needs to remove all
	 * of the implicit assignements that were created based on this user, then recreated all of the implicit
	 * assignments in the new location
	 */
	function update_team_memberships($old_reports_to_id) {

		$team = BeanFactory::getBean('Teams');
		$team->user_manager_changed($this->id, $old_reports_to_id, $this->reports_to_id);
	}


    /**
     * getAllUsers
     *
     * Returns all active and inactive users
     * @return Array of all users in the system
     */

    public static function getAllUsers()
    {
        $active_users = get_user_array(false);
        $inactive_users = get_user_array(false, "Inactive");
        $result = $active_users + $inactive_users;
        asort($result);
        return $result;
    }

	/** Returns a list of the associated users
	 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc..
	 * All Rights Reserved..
	 * Contributor(s): ______________________________________..
	*/
	function get_meetings() {
		// First, get the list of IDs.
		$query = "SELECT meeting_id as id from meetings_users where user_id='$this->id' AND deleted=0";
		return $this->build_related_list($query, BeanFactory::getBean('Meetings'));
	}
	function get_calls() {
		// First, get the list of IDs.
		$query = "SELECT call_id as id from calls_users where user_id='$this->id' AND deleted=0";
		return $this->build_related_list($query, BeanFactory::getBean('Calls'));
	}

	/**
	 * generates Javascript to display I-E mail counts, both personal and group
	 */
	function displayEmailCounts() {
		global $theme;
		$new = translate('LBL_NEW', 'Emails');
		$default = 'index.php?module=Emails&action=ListView&assigned_user_id='.$this->id;
		$count = '';
		$verts = array('Love', 'Links', 'Pipeline', 'RipCurl', 'SugarLite');

		if($this->hasPersonalEmail()) {
			$r = $this->db->query('SELECT count(*) AS c FROM emails WHERE deleted=0 AND assigned_user_id = \''.$this->id.'\' AND type = \'inbound\' AND status = \'unread\'');
			$a = $this->db->fetchByAssoc($r);
			if(in_array($theme, $verts)) {
				$count .= '<br />';
			} else {
				$count .= '&nbsp;&nbsp;&nbsp;&nbsp;';
			}
			$count .= '<a href='.$default.'&type=inbound>'.translate('LBL_LIST_TITLE_MY_INBOX', 'Emails').': ('.$a['c'].' '.$new.')</a>';

			if(!in_array($theme, $verts)) {
				$count .= ' - ';
			}
		}

		$r = $this->db->query('SELECT id FROM users WHERE users.is_group = 1 AND deleted = 0');
		$groupIds = '';
		$groupNew = '';
		while($a = $this->db->fetchByAssoc($r)) {
			if($groupIds != '') {$groupIds .= ', ';}
			$groupIds .= "'".$a['id']."'";
		}

		$total = 0;
		if(strlen($groupIds) > 0) {
			$groupQuery = 'SELECT count(*) AS c FROM emails ';
			$this->add_team_security_where_clause($groupQuery);
			$groupQuery .= ' WHERE emails.deleted=0 AND emails.assigned_user_id IN ('.$groupIds.') AND emails.type = \'inbound\' AND emails.status = \'unread\'';
			$r = $this->db->query($groupQuery);
			if(is_resource($r)) {
				$a = $this->db->fetchByAssoc($r);
				if($a['c'] > 0) {
					$total = $a['c'];
				}
			}
		}
		if(in_array($theme, $verts)) $count .= '<br />';
		if(empty($count)) $count .= '&nbsp;&nbsp;&nbsp;&nbsp;';
		$count .= '<a href=index.php?module=Emails&action=ListViewGroup>'.translate('LBL_LIST_TITLE_GROUP_INBOX', 'Emails').': ('.$total.' '.$new.')</a>';

		$out  = '<script type="text/javascript" language="Javascript">';
		$out .= 'var welcome = document.getElementById("welcome");';
		$out .= 'var welcomeContent = welcome.innerHTML;';
		$out .= 'welcome.innerHTML = welcomeContent + "'.$count.'";';
		$out .= '</script>';

		echo $out;
	}

	function getPreferredEmail() {
		$ret = array ();
		$nameEmail = $this->getUsersNameAndEmail();
		$prefAddr = $nameEmail['email'];
		$fullName = $nameEmail['name'];
		if (empty ($prefAddr)) {
			$nameEmail = $this->getSystemDefaultNameAndEmail();
			$prefAddr = $nameEmail['email'];
			$fullName = $nameEmail['name'];
		} // if
		$fullName = from_html($fullName);
		$ret['name'] = $fullName;
		$ret['email'] = $prefAddr;
		return $ret;
	}

	function getUsersNameAndEmail()
	{
	    // Bug #48555 Not User Name Format of User's locale.
	    $this->_create_proper_name_field();

		$prefAddr = $this->emailAddress->getPrimaryAddress($this);

		if (empty ($prefAddr)) {
			$prefAddr = $this->emailAddress->getReplyToAddress($this);
		}
		return array('email' => $prefAddr , 'name' => $this->name);

	} // fn

	function getSystemDefaultNameAndEmail() {

		$email = BeanFactory::getBean('Emails');
		$return = $email->getSystemDefaultEmail();
		$prefAddr = $return['email'];
		$fullName = $return['name'];
		return array('email' => $prefAddr , 'name' => $fullName);
	} // fn

	/**
	 * sets User email default in config.php if not already set by install - i.
	 * e., upgrades
	 */
	function setDefaultsInConfig() {
		global $sugar_config;
		$sugar_config['email_default_client'] = 'sugar';
		$sugar_config['email_default_editor'] = 'html';
		ksort($sugar_config);
		write_array_to_file('sugar_config', $sugar_config, 'config.php');
		return $sugar_config;
	}

    /**
     * returns User's email address based on descending order of preferences
     *
     * @param string id GUID of target user if needed
     * @return array Assoc array for an email and name
     */
    function getEmailInfo($id='') {
        $user = $this;
        if(!empty($id)) {
            $user = BeanFactory::getBean('Users', $id);
        }

        // from name
        $fromName = $user->getPreference('mail_fromname');
        if(empty($fromName)) {
        	// cn: bug 8586 - localized name format
            $fromName = $user->full_name;
        }

        // from address
        $fromaddr = $user->getPreference('mail_fromaddress');
        if(empty($fromaddr)) {
            if(!empty($user->email1) && isset($user->email1)) {
                $fromaddr = $user->email1;
            } elseif(!empty($user->email2) && isset($user->email2)) {
                $fromaddr = $user->email2;
            } else {
                $r = $user->db->query("SELECT value FROM config WHERE name = 'fromaddress'");
                $a = $user->db->fetchByAssoc($r);
                $fromddr = $a['value'];
            }
        }

        $ret['name'] = $fromName;
        $ret['email'] = $fromaddr;

        return $ret;
    }

    /**
     * Get the string representing the user's preferred email client.
     *
     * @return string
     */
    public function getEmailClientPreference()
    {
        if (!isset($GLOBALS['sugar_config']['email_default_client'])) {
            $this->setDefaultsInConfig();
        }

        $clientPref = $this->getPreference('email_link_type');
        $client     = (!empty($clientPref)) ? $clientPref : $GLOBALS['sugar_config']['email_default_client'];

        // check for presence of a mobile device, if so use its email client
        if (isset($_SESSION['isMobile'])){
            $client = 'other';
        }

        return $client;
    }

	/**
	 * returns opening <a href=xxxx for a contact, account, etc
	 * cascades from User set preference to System-wide default
	 * @return string	link
	 * @param attribute the email addy
	 * @param focus the parent bean
	 * @param contact_id
	 * @param return_module
	 * @param return_action
	 * @param return_id
	 * @param class
	 */
	function getEmailLink2($emailAddress, &$focus, $contact_id='', $ret_module='', $ret_action='DetailView', $ret_id='', $class='') {
		$emailLink = '';
        $client    = $this->getEmailClientPreference();

		if($client == 'sugar') {
			$email = '';
			$to_addrs_ids = '';
			$to_addrs_names = '';
			$to_addrs_emails = '';

			$fullName = !empty($focus->name) ? $focus->name : '';

			if(empty($ret_module)) $ret_module = $focus->module_dir;
			if(empty($ret_id)) $ret_id = $focus->id;
			if($focus->object_name == 'Contact') {
				$contact_id = $focus->id;
				$to_addrs_ids = $focus->id;
				// Bug #48555 Not User Name Format of User's locale.
				$focus->_create_proper_name_field();
			    $fullName = $focus->name;
			    $to_addrs_names = $fullName;
				$to_addrs_emails = $focus->email1;
			}

			$emailLinkUrl = 'contact_id='.$contact_id.
				'&parent_type='.$focus->module_dir.
				'&parent_id='.$focus->id.
				'&parent_name='.urlencode($fullName).
				'&to_addrs_ids='.$to_addrs_ids.
				'&to_addrs_names='.urlencode($to_addrs_names).
				'&to_addrs_emails='.urlencode($to_addrs_emails).
				'&to_email_addrs='.urlencode($fullName . '&nbsp;&lt;' . $emailAddress . '&gt;').
				'&return_module='.$ret_module.
				'&return_action='.$ret_action.
				'&return_id='.$ret_id;

    		//Generate the compose package for the quick create options.
    		//$json = getJSONobj();
    		//$composeOptionsLink = $json->encode( array('composeOptionsLink' => $emailLinkUrl,'id' => $focus->id) );
			require_once('modules/Emails/EmailUI.php');
            $eUi = new EmailUI();
            $j_quickComposeOptions = $eUi->generateComposePackageForQuickCreateFromComposeUrl($emailLinkUrl, true);

    		$emailLink = "<a href='javascript:void(0);' onclick='SUGAR.quickCompose.init($j_quickComposeOptions);' class='$class'>";

		} else {
			// straight mailto:
			$emailLink = '<a href="mailto:'.$emailAddress.'" class="'.$class.'">';
		}

		return $emailLink;
	}

	/**
	 * returns opening <a href=xxxx for a contact, account, etc
	 * cascades from User set preference to System-wide default
	 * @return string	link
	 * @param attribute the email addy
	 * @param focus the parent bean
	 * @param contact_id
	 * @param return_module
	 * @param return_action
	 * @param return_id
	 * @param class
	 */
	function getEmailLink($attribute, &$focus, $contact_id='', $ret_module='', $ret_action='DetailView', $ret_id='', $class='') {
	    $emailLink = '';
        $client    = $this->getEmailClientPreference();

		if($client == 'sugar') {
			$email = '';
			$to_addrs_ids = '';
			$to_addrs_names = '';
			$to_addrs_emails = '';

            $fullName = !empty($focus->name) ? $focus->name : '';

			if(!empty($focus->$attribute)) {
				$email = $focus->$attribute;
			}


			if(empty($ret_module)) $ret_module = $focus->module_dir;
			if(empty($ret_id)) $ret_id = $focus->id;
			if($focus->object_name == 'Contact') {
				// Bug #48555 Not User Name Format of User's locale.
				$focus->_create_proper_name_field();
			    $fullName = $focus->name;
			    $contact_id = $focus->id;
				$to_addrs_ids = $focus->id;
				$to_addrs_names = $fullName;
				$to_addrs_emails = $focus->email1;
			}

			$emailLinkUrl = 'contact_id='.$contact_id.
				'&parent_type='.$focus->module_dir.
				'&parent_id='.$focus->id.
				'&parent_name='.urlencode($fullName).
				'&to_addrs_ids='.$to_addrs_ids.
				'&to_addrs_names='.urlencode($to_addrs_names).
				'&to_addrs_emails='.urlencode($to_addrs_emails).
				'&to_email_addrs='.urlencode($fullName . '&nbsp;&lt;' . $email . '&gt;').
				'&return_module='.$ret_module.
				'&return_action='.$ret_action.
				'&return_id='.$ret_id;

			//Generate the compose package for the quick create options.
    		require_once('modules/Emails/EmailUI.php');
            $eUi = new EmailUI();
            $j_quickComposeOptions = $eUi->generateComposePackageForQuickCreateFromComposeUrl($emailLinkUrl, true);
    		$emailLink = "<a href='javascript:void(0);' onclick='SUGAR.quickCompose.init($j_quickComposeOptions);' class='$class'>";

		} else {
			// straight mailto:
			$emailLink = '<a href="mailto:'.$focus->$attribute.'" class="'.$class.'">';
		}

		return $emailLink;
	}


	/**
	 * gets a human-readable explanation of the format macro
	 * @return string Human readable name format
	 */
	function getLocaleFormatDesc() {
		global $locale;
		global $mod_strings;
		global $app_strings;

		$format['f'] = $mod_strings['LBL_LOCALE_DESC_FIRST'];
		$format['l'] = $mod_strings['LBL_LOCALE_DESC_LAST'];
		$format['s'] = $mod_strings['LBL_LOCALE_DESC_SALUTATION'];
		$format['t'] = $mod_strings['LBL_LOCALE_DESC_TITLE'];

		$name['f'] = $app_strings['LBL_LOCALE_NAME_EXAMPLE_FIRST'];
		$name['l'] = $app_strings['LBL_LOCALE_NAME_EXAMPLE_LAST'];
		$name['s'] = $app_strings['LBL_LOCALE_NAME_EXAMPLE_SALUTATION'];
		$name['t'] = $app_strings['LBL_LOCALE_NAME_EXAMPLE_TITLE'];

		$macro = $locale->getLocaleFormatMacro();

		$ret1 = '';
		$ret2 = '';
		for($i=0; $i<strlen($macro); $i++) {
			if(array_key_exists($macro{$i}, $format)) {
				$ret1 .= "<i>".$format[$macro{$i}]."</i>";
				$ret2 .= "<i>".$name[$macro{$i}]."</i>";
			} else {
				$ret1 .= $macro{$i};
				$ret2 .= $macro{$i};
			}
		}
		return $ret1."<br />".$ret2;
	}


	public function getPrivateTeamID()
	{
	    return self::staticGetPrivateTeamID($this->id);
	}

    public static function staticGetPrivateTeamID($user_id)
	{
	    $teamFocus = BeanFactory::getBean('Teams');
	    $teamFocus->retrieve_by_string_fields(array('associated_user_id'=>$user_id));
	    if ( empty($teamFocus->id) )
	        return '';

	    return $teamFocus->id;
	}
    /*
     *
     * Here are the multi level admin access check functions.
     *
     */
    /**
     * Helper function to remap some modules around ACL wise
     *
     * @return string
     */
    protected function _fixupModuleForACL($module) {
        if($module=='ContractTypes') {
            $module = 'Contracts';
        }
        if(preg_match('/Product[a-zA-Z]*/',$module)) {
            $module = 'Products';
        }

        return $module;
    }
    /**
     * Helper function that enumerates the list of modules and checks if they are an admin/dev.
     * The code was just too similar to copy and paste.
     *
     * @return array
     */
    protected function _getModulesForACL($type='dev'){
        $isDev = $type=='dev';
        $isAdmin = $type=='admin';

        global $beanList;
        $myModules = array();

        if (!is_array($beanList) ) {
            return $myModules;
        }

        // These modules don't take kindly to the studio trying to play about with them.
        static $ignoredModuleList = array('iFrames','Feeds','Home','Dashboard','Calendar','Activities','Reports', 'UpgradeHistory');


        $actions = ACLAction::getUserActions($this->id);

        foreach ($beanList as $module=>$val) {
            // Remap the module name
            $module = $this->_fixupModuleForACL($module);
            if (in_array($module,$myModules)) {
                // Already have the module in the list
                continue;
            }
            if (in_array($module,$ignoredModuleList)) {
                // You can't develop on these modules.
                continue;
            }

            $key = 'module';
            // The tracker modules have special case ACL mappings
            // in $GLOBALS['ACLActions'] that we need to account for.
            // TODO: In the future these should be migrated to a custom ACL strategy for those modules.
            if (in_array($module, array('Tracker', 'TrackerPerfs', 'TrackerQueries', 'TrackerSessions'))) {
                $focus = BeanFactory::getBean($module);
                if ($focus instanceOf SugarBean) {
                    $key = $focus->acltype;
                }
            }

            if (($this->isAdmin() && isset($actions[$module][$key]))
                || (isset($actions[$module][$key]['admin']['aclaccess']) &&
                    (($isDev&&$actions[$module][$key]['admin']['aclaccess'] == ACL_ALLOW_DEV) ||
                     ($isAdmin&&$actions[$module][$key]['admin']['aclaccess'] == ACL_ALLOW_ADMIN) ||
                     $actions[$module][$key]['admin']['aclaccess'] == ACL_ALLOW_ADMIN_DEV) )
                ) {
                $myModules[] = $module;
            }
        }

        return $myModules;
    }
    /**
     * Is this user a system wide admin
     *
     * @return bool
     */
    public function isAdmin() {
        if(isset($this->is_admin)
           &&($this->is_admin == '1' || $this->is_admin === 'on')){
            return true;
        }
        return false;
    }
    /**
     * Is this user a developer for any module
     *
     * @return bool
     */
    public function isDeveloperForAnyModule() {
        if(empty($this->id)) {
            // empty user is no developer
            return false;
        }
        if ($this->isAdmin()) {
            return true;
        }
        if (count($this->getDeveloperModules())>0) {
            return true;
        }
        return false;
    }
    /**
     * List the modules a user has developer access to
     *
     * @return array
     */
    public function getDeveloperModules() {
        static $developerModules;
        if (!isset($_SESSION[$this->user_name.'_get_developer_modules_for_user']) ) {
            $_SESSION[$this->user_name.'_get_developer_modules_for_user'] = $this->_getModulesForACL('dev');
        }

        return $_SESSION[$this->user_name.'_get_developer_modules_for_user'];
    }
    /**
     * Is this user a developer for the specified module
     *
     * @return bool
     */
    public function isDeveloperForModule($module) {
        if(empty($this->id)) {
            // empty user is no developer
            return false;
        }
        if ($this->isAdmin()) {
            return true;
        }

        $devModules = $this->getDeveloperModules();

        $module = $this->_fixupModuleForACL($module);
        if ($this->isWorkFlowModule($module) && count($devModules) > 0) {
            return true;
        }

        if (in_array($module,$devModules) ) {
            return true;
        }

        return false;
    }
    /**
     * List the modules a user has admin access to
     *
     * @return array
     */
    public function getAdminModules() {
        if (!isset($_SESSION[$this->user_name.'_get_admin_modules_for_user']) ) {
            $_SESSION[$this->user_name.'_get_admin_modules_for_user'] = $this->_getModulesForACL('admin');
        }

        return $_SESSION[$this->user_name.'_get_admin_modules_for_user'];
    }
    /**
     * Is this user an admin for the specified module
     *
     * @return bool
     */
    public function isAdminForModule($module) {
        if(empty($this->id)) {
            // empty user is no admin
            return false;
        }
        if ($this->isAdmin()) {
            return true;
        }

        $adminModules = $this->getAdminModules();

        $module = $this->_fixupModuleForACL($module);
        if ($this->isWorkFlowModule($module) && count($adminModules) > 0) {
            return true;
        }

        if (in_array($module,$adminModules) ) {
            return true;
        }

        return false;
    }

    /**
     * Check if module is workflow-related
     *
     * @param string $module Module name
     * @return bool
     */
    protected function isWorkFlowModule($module)
    {
        switch ($module) {
            case 'Expressions':
            case 'WorkFlow':
            case 'WorkFlowActions':
            case 'WorkFlowActionShells':
            case 'WorkFlowAlerts':
            case 'WorkFlowAlertShells':
            case 'WorkFlowTriggerShells':
            case 'pmse_Project':
            case 'pmse_Inbox':
            case 'pmse_Emails_Templates':
            case 'pmse_Business_Rules':
                return true;
        }

        return false;
    }

	/**
	 * Whether or not based on the user's locale if we should show the last name first.
	 *
	 * @return bool
	 */
	public function showLastNameFirst(){
		global $locale;
    	$localeFormat = $locale->getLocaleFormatMacro($this);
		if ( strpos($localeFormat,'l') > strpos($localeFormat,'f') ) {
                    return false;
        }else {
        	return true;
        }
	}

    public function create_new_list_query(
        $order_by,
        $where,
        $filter = array(),
        $params = array(),
        $show_deleted = 0,
        $join_type = '',
        $return_array = false,
        $parentbean = null,
        $singleSelect = false,
        $ifListForExport = false
    ) {	//call parent method, specifying for array to be returned
        $ret_array = parent::create_new_list_query(
            $order_by,
            $where,
            $filter,
            $params,
            $show_deleted,
            $join_type,
            true,
            $parentbean,
            $singleSelect,
            $ifListForExport
        );

   	//if this is being called from webservices, then run additional code
   	if(!empty($GLOBALS['soap_server_object'])){

		//if this is a single select, then secondary queries are being run that may result in duplicate rows being returned through the
		//left joins with meetings/tasks/call.  We need to change the left joins to include a null check (bug 40250)
	   	if($singleSelect)
	    	{
			//retrieve the 'from' string and make lowercase for easier manipulation
		        $left_str = strtolower($ret_array['from']);
		        $lefts = explode('left join', $left_str);
		        $new_left_str = '';

        		//explode on the left joins and process each one
		        foreach($lefts as $ljVal){
		        	//grab the join alias
	        	        $onPos = strpos( $ljVal, ' on');
	                	if($onPos === false){
		                	$new_left_str .=' '.$ljVal.' ';
		                        continue;
		                }
		                $spacePos = strrpos(substr($ljVal, 0, $onPos),' ');
		                $alias = substr($ljVal,$spacePos,$onPos-$spacePos);

		                //add null check to end of the Join statement
                        // Bug #46390 to use id_c field instead of id field for custom tables
                        if(substr($alias, -5) != '_cstm')
                        {
                            $ljVal ='  LEFT JOIN '.$ljVal.' and '.$alias.'.id is null ';
                        }
                        else
                        {
                            $ljVal ='  LEFT JOIN '.$ljVal.' and '.$alias.'.id_c is null ';
                        }

		                //add statement into new string
		                $new_left_str .= $ljVal;
		         }
	        	 //replace the old string with the new one
        		 $ret_array['from'] = $new_left_str;
	    	}
   	}

   		//return array or query string
   		if($return_array)
    	{
    		return $ret_array;
    	}

    	return  $ret_array['select'] . $ret_array['from'] . $ret_array['where']. $ret_array['order_by'];



   }

    /**
     * Get user first day of week.
     *
     * @param [User] $user user object, current user if not specified
     * @return int : 0 = Sunday, 1 = Monday, etc...
     */
    public function get_first_day_of_week()
    {
        $fdow = $this->getPreference('fdow');
        if (empty($fdow))
        {
            $fdow = 0;
        }

        return $fdow;
    }

    /**
     * Method for password generation
     *
     * @static
     * @return string password
     */
    public static function generatePassword()
    {
        $res = $GLOBALS['sugar_config']['passwordsetting'];
        $charBKT = '';
        //chars to select from
        $LOWERCASE = "abcdefghijklmnpqrstuvwxyz";
        $NUMBER = "0123456789";
        $UPPERCASE = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $SPECIAL = '~!@#$%^&*()_+=-{}|';
        $condition = 0;
        $charBKT .= $UPPERCASE . $LOWERCASE . $NUMBER;
        $password = "";

        // Count the number of requirements
        if ($res['onenumber'] == '1')
        {
            $condition += 1;
        }
        if ($res['onelower'] == '1')
        {
            $condition += 1;
        }
        if ($res['oneupper'] == '1')
        {
            $condition += 1;
        }
        if ($res['onespecial']=='1')
        {
            $condition+=1;
        }

        // if there is more requirements than the minimum length, minimum length= number of requirements
        $length = $res['minpwdlength'] <= $condition ? $condition : $res['minpwdlength'];
        if ($length < 6)
        {
            $length = '6';
        }

        // Create random characters for the ones that doesnt have requirements
        for ($i=0; $i < $length - $condition; $i ++)  // loop and create password
        {
            $password = $password . substr ($charBKT, rand() % strlen($charBKT), 1);
        }
        if ($res['onelower'] == '1') // If a lower caracter is required, i add one in the password
        {
            if (strlen($password) != '0') // If there is other characters in the password, I insert one in a random position
            {
                $password = substr_replace($password, substr($LOWERCASE, rand() % strlen($LOWERCASE), 1), rand() % strlen($password), 0);
            }
            else // otherwise i put one in first position
            {
                $password = $password . substr($LOWERCASE, rand() % strlen($LOWERCASE), 1);
            }
        }
        if ($res['onenumber'] == '1')
        {
            if (strlen($password) != '0')
            {
                $password = substr_replace($password, substr($NUMBER, rand() % strlen($NUMBER), 1), rand() % strlen($password), 0);
            }
            else
            {
                $password = $password . substr ($NUMBER, rand() % strlen($NUMBER), 1);
            }
        }
        if ($res['oneupper'] == '1')
        {
            if (strlen($password) != '0')
            {
                $password = substr_replace($password, substr($UPPERCASE, rand() % strlen($UPPERCASE), 1), rand() % strlen($password), 0);
            }
            else
            {
                $password = $password . substr($UPPERCASE, rand() % strlen($UPPERCASE), 1);
            }
        }
        if ($res['onespecial'] == '1')
        {
            if (strlen($password) != '0')
            {
                $password = substr_replace($password, substr($SPECIAL, rand() % strlen($SPECIAL), 1), rand() % strlen($password), 0);
            }
            else
            {
                $password = $password . substr ($SPECIAL, rand() % strlen($SPECIAL), 1);
            }
        }

        return $password;
    }

    /**
     * Send new password or link to user
     *
     * @param string $templateId     Id of email template
     * @param array  $additionalData additional params: link, url, password
     * @return array status: true|false, message: error message, if status = false and message = '' it means that send method has returned false
     */
    public function sendEmailForPassword($templateId, array $additionalData = array()) {
        global $current_user,
               $app_strings;

        $mod_strings = return_module_language('', 'Users');

        $result = array(
            'status'  => false,
            'message' => ''
        );

        $emailTemplate                             = BeanFactory::getBean('EmailTemplates');
        $emailTemplate->disable_row_level_security = true;

        if ($emailTemplate->retrieve($templateId) == '') {
            $result['message'] = $mod_strings['LBL_EMAIL_TEMPLATE_MISSING'];
            return $result;
        }

        $emailTemplate->body = $this->replaceInstanceVariablesInEmailTemplates($emailTemplate->body, $additionalData);

        // in case the email is text-only and $emailTemplate->body_html is not empty, use a local variable for the HTML
        // part to ignore the body_html property and prevent changing it on the EmailTemplate object
        $htmlBody = null;

        if ($emailTemplate->text_only != 1) {
            $emailTemplate->body_html = $this->replaceInstanceVariablesInEmailTemplates(
                $emailTemplate->body_html,
                $additionalData
            );
            $htmlBody                 = $emailTemplate->body_html;
        }

        try {
            $mailer = MailerFactory::getSystemDefaultMailer();

            // set the subject
            $mailer->setSubject($emailTemplate->subject);

            // set the plain-text body
            $mailer->setTextBody($emailTemplate->body);

            // set the HTML body... it will be null in the text-only case, but that's okay
            $mailer->setHtmlBody($htmlBody);

            // make sure there is at least one message part (but only if the current user is an admin)...

            // even though $htmlBody is already set, resetting it verifies that $mailer actually got it
            $textBody = $mailer->getTextBody();
            $htmlBody = $mailer->getHtmlBody();

            if ($current_user->is_admin && !$mailer->hasMessagePart($textBody) && !$mailer->hasMessagePart($htmlBody)) {
                throw new MailerException("No email body was provided", MailerException::InvalidMessageBody);
            }

            // get the recipient's email address
            $itemail = $this->emailAddress->getPrimaryAddress($this);

            if (!empty($itemail)) {
                // add the recipient
                $mailer->addRecipientsTo(new EmailIdentity($itemail));

                // if send doesn't raise an exception then set the result status to true
                $mailer->send();
                $result["status"] = true;

                // save the email record
                $email                   = new Email();
                $email->team_id          = 1;
                $email->to_addrs         = '';
                $email->type             = 'archived';
                $email->deleted          = '0';
                $email->name             = $emailTemplate->subject;
                $email->description      = $textBody;
                $email->description_html = $htmlBody;
                $email->from_addr        = $mailer->getHeader(EmailHeaders::From)->getEmail();
                $email->parent_type      = 'User';
                $email->date_sent        = TimeDate::getInstance()->nowDb();
                $email->modified_user_id = '1';
                $email->created_by       = '1';
                $email->status           = 'sent';
                $email->save();

                if (!isset($additionalData['link']) || $additionalData['link'] == false) {
                    $this->setNewPassword($additionalData['password'], '1');
                }
            } else {
                // this exception is ignored as part of the default case in the switch statement in the catch block
                // but it adds documentation as to what is happening
                throw new MailerException("There are no recipients", MailerException::FailedToSend);
            }
        } catch (MailerException $me) {
            switch ($me->getCode()) {
                case MailerException::FailedToConnectToRemoteServer:
                    if ($current_user->is_admin) {
                        // the smtp host may not be empty, but this is the best error message for now
                        $result['message'] = $mod_strings['ERR_SERVER_SMTP_EMPTY'];
                    } else {
                        // status=failed to send, but no message is returned to non-admin users
                    }

                    break;
                case MailerException::InvalidMessageBody:
                    // this exception will only be raised if the current user is an admin, so there is no need to
                    // worry about catching it in a non-admin case and handling the error message accordingly

                    // both the plain-text and HTML parts are empty, but this is the best error message for now
                    $result['message'] = $app_strings['LBL_EMAIL_TEMPLATE_EDIT_PLAIN_TEXT'];

                    break;
                default:
                    // status=failed to send, but no message is returned
                    break;
            }
        }

        return $result;
    }

    // Bug #48014 Must to send password to imported user if this action is required
    function afterImportSave()
    {
        if(
            $this->user_hash == false
            && !$this->is_group
            && !$this->portal_only
            && isset($GLOBALS['sugar_config']['passwordsetting']['SystemGeneratedPasswordON'])
            && $GLOBALS['sugar_config']['passwordsetting']['SystemGeneratedPasswordON']
        )
        {
            $backUpPost = $_POST;
            $_POST = array(
                'userId' => $this->id
            );
            ob_start();
            require('modules/Users/GeneratePassword.php');
            $result = ob_get_clean();
            $_POST = $backUpPost;
            return $result == true;
        }
    }

    /**
     * @static
     * This function to determine if a given user id is a manager.  A manager is defined as someone who has direct reports
     *
     * @param String user_id The id of the user to check
     * @param boolean include_deleted Boolean value indicating whether or not to include deleted records (defaults to FALSE)
     * @return boolean TRUE if user id is a manager; FALSE otherwise
     */
    public static function isManager($user_id, $include_deleted=false)
    {
        $db = DBManagerFactory::getInstance();
        $query = 'SELECT count(id) as total FROM users
                WHERE reports_to_id = ' .  $db->quoted(clean_string($user_id)) . ' AND status = ' . $db->quoted(clean_string('Active'));
        if (!$include_deleted) {
            $query .= " AND deleted=0";
        }
        $count = $db->getOne($query);
        return $count > 0;
    }

    /**
     * @static
     * This function returns an array of reportees and their corresponding reportee count, if additional_fields are
     * passed in, the return will contain the whole row vs just the key => total value pair that is returned when no
     * additional_fields are defined
     *
     * @param String $user_id The id of the user to check
     * @param boolean $include_deleted Boolean Value indicating whether or not to include deleted records (defaults to false)
     * @param array $additional_fields      Additional Fields you want returned
     * @return array Array of reportee IDs and their leaf count
     */
    public static function getReporteesWithLeafCount($user_id, $include_deleted = false, $additional_fields = array())
    {
        $db = DBManagerFactory::getInstance();
        $deleted = ($include_deleted ? 1 : 0);
        $returnArray = array();

        $_fields = join(',u.', $additional_fields);
        if (!empty($_fields)) {
            $_fields = ", u." . $_fields;
        }

        $query = "SELECT u.id, sum(CASE WHEN u2.id IS NULL THEN 0 ELSE 1 END) as total{$_fields} FROM users u " .
            "LEFT JOIN users u2 " .
            "ON u.id = u2.reports_to_id AND u2.status = 'Active' ";
        if (!$include_deleted) {
            $query .= "AND u2.deleted = 0 ";
        }
        $query .= "WHERE u.reports_to_id = {$db->quoted(clean_string($user_id))} ";
        if (!$include_deleted) {
            $query .= "AND u.deleted = {$deleted} AND u.status = 'Active' ";
        }
        $query .= "GROUP BY u.id". $_fields;

        $result = $db->query($query);
        while ($row = $db->fetchByAssoc($result)) {
            if (!empty($additional_fields)) {
                $returnArray[$row["id"]] = $row;
            } else {
                $returnArray[$row["id"]] = $row["total"];
            }
        }

        return $returnArray;
    }

     /**
      * @static
      * This function returns an array of reportee IDs that are managers
      *
      * @param String user_id The id of the user to check
      * @param boolean included_deleted Boolean Value indicating whether or not to include deleted records (defaults to false)
      * @return array Array of manager reportee IDs
      */
     public static function getReporteeManagers($user_id, $include_deleted = false)
     {
        $returnArray = array();
        $reportees = User::getReporteesWithLeafCount($user_id, $include_deleted);
        foreach($reportees as $key=>$value){
            if($value > 0){
               $returnArray[] = $key;
            }
        }
        return $returnArray;
     }

     /**
      * @static
      * This function returns an array of reportee IDs that are sales reps
      *
      * @param String user_id The id of the user to check
      * @param boolean included_deleted Boolean Value indicating whether or not to include deleted records (defaults to false)
      * @return array Array of rep reportee IDs
      */
     public static function getReporteeReps($user_id, $include_deleted = false)
     {
        $returnArray = array();
        $reportees = User::getReporteesWithLeafCount($user_id, $include_deleted);
        foreach($reportees as $key=>$value){
            if($value == 0){
               $returnArray[] = $key;
            }
        }
        return $returnArray;
     }

    /**
     * @static
     * This function is used to determine if a given user id is a top level manager.  A top level manager is defined as someone
     * who has direct reports, but does not have to report to anyone (reports_to_id is null).
     *
     * This is functionally equivalent to User::isManager($user->id) && empty($user->reports_to_id)
     *
     * @param String user_id The id of the user to check
     * @param boolean include_deleted Boolean value indicating whether or not to include deleted records of reportees (defaults to FALSE)
     * @return boolean TRUE if user id is a top level manager; FALSE otherwise
     */
    public static function isTopLevelManager($user_id, $include_deleted=false)
    {
        if(User::isManager($user_id, $include_deleted))
        {
            $query = 'SELECT reports_to_id FROM users WHERE id = ' . $GLOBALS['db']->quoted(clean_string($user_id));
            $reports_to_id = $GLOBALS['db']->getOne($query);
            return empty($reports_to_id);
        }
        return false;
    }

    /**
     * Sets value from fetched row into the bean.  Special case override for Users module otherwise we incur the
     * unnecessary check for user_preferences field for all SugarBean instances.
     *
     * @param array $row Fetched row
     * @todo loop through vardefs instead
     * @internal runs into an issue when populating from field_defs for users - corrupts user prefs
     *
     */
    function populateFromRow($row, $convert = false)
    {
        unset($row['user_preferences']);
        return parent::populateFromRow($row, $convert);
    }


    /**
     * Replace instance variables in email templates for a particular message part.
     *
     * @param string $body                    required The plain-text or HTML part.
     * @param array  $additionalData          Additional parameters: link, url, password.
     * @return string
     */
    private function replaceInstanceVariablesInEmailTemplates($body, $additionalData = array()) {
        global $sugar_config;

        if (isset($additionalData['link']) && $additionalData['link'] == true) {
            $body = str_replace('$contact_user_link_guid', $additionalData['url'], $body);
        } else {
            $body = str_replace('$contact_user_user_hash', $additionalData['password'], $body);
        }

        // Bug 36833 - Add replacing of special value $instance_url
        $body = str_replace('$config_site_url', $sugar_config['site_url'], $body);

        $body = str_replace('$contact_user_user_name', $this->user_name, $body);
        $body = str_replace('$contact_user_pwd_last_changed', TimeDate::getInstance()->nowDb(), $body);

        return $body;
    }

    public function getUserMDHash() {
        //Add the tab hash to include the change of tabs (e.g. module order) as a part of the user hash
        $tabs = new TabController();
        $tabHash = $tabs->getMySettingsTabHash();

        return md5($this->hashTS . $tabHash);
    }

    public function setupSession() {
        if (!isset($_SESSION[$this->user_name.'_get_developer_modules_for_user'])) {
            $this->getDeveloperModules();
        }
        if (!isset($_SESSION[$this->user_name.'_get_admin_modules_for_user'])) {
            $this->getAdminModules();
        }
    }
    /**
     * Checks if the passed email is primary.
     *
     * @param string $email
     * @return bool Returns TRUE if the passed email is primary.
     */
    public function isPrimaryEmail($email)
    {
        if (!empty($this->email1) && !empty($email) && strcasecmp($this->email1, $email) == 0) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Updates last_login field with current timestamp.
     * Executes User::save internally.
     *
     * @return void
     */
    public function updateLastLogin()
    {
		// need to call a direct db query
		// if we do not the email address is removed
		$db = DBManagerFactory::getInstance();
		$this->last_login = TimeDate::getInstance()->nowDb();
		$db->query("UPDATE users SET last_login = '{$this->last_login}' WHERE id = '{$this->id}'");
		return $this->last_login;
    }
}
