<?php

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

/**
 * Outbuound email management
 * @api
 */
class OutboundEmail {
	/**
	 * Necessary
	 */
	var $db;
	var $field_defs = array(
		'id',
		'name',
		'type',
		'user_id',
		'mail_sendtype',
		'mail_smtptype',
		'mail_smtpserver',
		'mail_smtpport',
		'mail_smtpuser',
		'mail_smtppass',
		'mail_smtpauth_req',
		'mail_smtpssl',
	);

	/**
	 * Columns
	 */
	var $id;
	var $name;
	var $type; // user or system
	var $user_id; // owner
	var $mail_sendtype; // smtp
	var $mail_smtptype;
	var $mail_smtpserver;
	var $mail_smtpport = 25;
	var $mail_smtpuser;
	var $mail_smtppass;
	var $mail_smtpauth_req; // bool
	var $mail_smtpssl; // bool
	var $mail_smtpdisplay; // calculated value, not in DB
	var $new_with_id = FALSE;

    /**
     * @var null|OutboundEmail
     */
    protected static $sysMailerCache = null;

	/**
	 * Sole constructor
	 */
	function OutboundEmail() {
		$this->db = DBManagerFactory::getInstance();
	}

	/**
	 * Retrieves the mailer for a user if they have overriden the username
	 * and password for the default system account.
	 *
	 * @param String $user_id
	 */
	function getUsersMailerForSystemOverride($user_id)
	{
	    $query = "SELECT id FROM outbound_email WHERE user_id = '{$user_id}' AND type = 'system-override' ORDER BY name";
		$rs = $this->db->query($query);
		$row = $this->db->fetchByAssoc($rs);
		if(!empty($row['id']))
		{
		  $oe = new OutboundEmail();
		  $oe->retrieve($row['id']);
		  return $oe;
		}
		else
		  return null;
	}

	/**
	 * Duplicate the system account for a user, setting new parameters specific to the user.
	 *
	 * @param string $user_id
	 * @param string $user_name
	 * @param string $user_pass
	 */
	function createUserSystemOverrideAccount($user_id,$user_name = "",$user_pass = "")
	{
	    $ob = $this->getSystemMailerSettings();
	    $ob->id = create_guid();
	    $ob->new_with_id = TRUE;
	    $ob->user_id = $user_id;
	    $ob->type = 'system-override';
	    $ob->mail_smtpuser = $user_name;
	    $ob->mail_smtppass = $user_pass;
	    $ob->save();

	    return $ob;
	}

	/**
	 * Determines if a user needs to set their user name/password for their system
	 * override account.
	 *
	 * @param unknown_type $user_id
	 * @return unknown
	 */
	function doesUserOverrideAccountRequireCredentials($user_id)
	{
	    $userCredentialsReq = FALSE;
	    $sys = new OutboundEmail();
	    $ob = $sys->getSystemMailerSettings(); //Dirties '$this'

	    //If auth for system account is disabled or user can use system outbound account return false.
	    if($ob->mail_smtpauth_req == 0 || $this->isAllowUserAccessToSystemDefaultOutbound() || $this->mail_sendtype == 'sendmail')
	       return $userCredentialsReq;

	    $userOverideAccount = $this->getUsersMailerForSystemOverride($user_id);
	    if( $userOverideAccount == null || empty($userOverideAccount->mail_smtpuser) || empty($userOverideAccount->mail_smtppass) )
	       $userCredentialsReq = TRUE;

        return $userCredentialsReq;

	}

	/**
	 * Retrieves name value pairs for opts lists
	 */
	function getUserMailers($user) {
		global $app_strings;

		$q = "SELECT * FROM outbound_email WHERE user_id = '{$user->id}' AND type = 'user' ORDER BY name";
		$r = $this->db->query($q);

		$ret = array();

		$system = $this->getSystemMailerSettings();

		//Now add the system default or user override default to the response.
		if(!empty($system->id) )
		{
			if ($system->mail_sendtype == 'SMTP')
			{
			    $systemErrors = "";
                $userSystemOverride = $this->getUsersMailerForSystemOverride($user->id);

                //If the user is required to to provide a username and password but they have not done so yet,
        	    //create the account for them.
        	     $autoCreateUserSystemOverride = FALSE;
        		 if( $this->doesUserOverrideAccountRequireCredentials($user->id) )
        		 {
        		      $systemErrors = $app_strings['LBL_EMAIL_WARNING_MISSING_USER_CREDS'];
        		      $autoCreateUserSystemOverride = TRUE;
        		 }

                //Substitute in the users system override if its available.
                if($userSystemOverride != null)
        		   $system = $userSystemOverride;
        		else if ($autoCreateUserSystemOverride)
        	       $system = $this->createUserSystemOverrideAccount($user->id,"","");

			    $isEditable = ($system->type == 'system') ? FALSE : TRUE; //User overrides can be edited.

                if( !empty($system->mail_smtpserver) )
				    $ret[] = array('id' =>$system->id, 'name' => "$system->name", 'mail_smtpserver' => $system->mail_smtpdisplay,
								   'is_editable' => $isEditable, 'type' => $system->type, 'errors' => $systemErrors);
			}
			else //Sendmail
			{
				$ret[] = array('id' =>$system->id, 'name' => "{$system->name} - sendmail", 'mail_smtpserver' => 'sendmail',
								'is_editable' => false, 'type' => $system->type, 'errors' => '');
			}
		}

		while($a = $this->db->fetchByAssoc($r))
		{
			$oe = array();
			if($a['mail_sendtype'] != 'SMTP')
				continue;

			$oe['id'] =$a['id'];
			$oe['name'] = $a['name'];
			$oe['type'] = $a['type'];
			$oe['is_editable'] = true;
			$oe['errors'] = '';
			if ( !empty($a['mail_smtptype']) )
			    $oe['mail_smtpserver'] = $this->_getOutboundServerDisplay($a['mail_smtptype'],$a['mail_smtpserver']);
			else
			    $oe['mail_smtpserver'] = $a['mail_smtpserver'];

			$ret[] = $oe;
		}

		return $ret;
	}

	/**
	 * Retrieves a cascading mailer set
	 * @param object user
	 * @param string mailer_id
	 * @return object
	 */
	function getUserMailerSettings(&$user, $mailer_id='', $ieId='') {
		$mailer = '';

		if(!empty($mailer_id)) {
			$mailer = "AND id = '{$mailer_id}'";
		} elseif(!empty($ieId)) {
			$q = "SELECT stored_options FROM inbound_email WHERE id = '{$ieId}'";
			$r = $this->db->query($q);
			$a = $this->db->fetchByAssoc($r);

			if(!empty($a)) {
				$opts = unserialize(base64_decode($a['stored_options']));

				if(isset($opts['outbound_email'])) {
					$mailer = "AND id = '{$opts['outbound_email']}'";
				}
			}
		}

		$q = "SELECT id FROM outbound_email WHERE user_id = '{$user->id}' {$mailer}";
		$r = $this->db->query($q);
		$a = $this->db->fetchByAssoc($r);

		if(empty($a)) {
			$ret = $this->getSystemMailerSettings();
		} else {
			$ret = $this->retrieve($a['id']);
		}
		return $ret;
	}

	/**
	 * Retrieve an array containing inbound emails ids for all inbound email accounts which have
	 * their outbound account set to this object.
	 *
	 * @param SugarBean $user
	 * @param string $outbound_id
	 * @return array
	 */
	function getAssociatedInboundAccounts($user)
	{
	    $query = "SELECT id,stored_options FROM inbound_email WHERE is_personal='1' AND deleted='0' AND created_by = '{$user->id}'";
		$rs = $this->db->query($query);

        $results = array();
        while($row = $this->db->fetchByAssoc($rs) )
        {
            $opts = unserialize(base64_decode($row['stored_options']));
            if( isset($opts['outbound_email']) && $opts['outbound_email'] == $this->id)
            {
                $results[] = $row['id'];
            }
		}

		return $results;
	}
	/**
	 * Retrieves a cascading mailer set
	 * @param object user
	 * @param string mailer_id
	 * @return object
	 */
	function getInboundMailerSettings($user, $mailer_id='', $ieId='') {
		$mailer = '';

		if(!empty($mailer_id)) {
			$mailer = "id = '{$mailer_id}'";
		} elseif(!empty($ieId)) {
			$q = "SELECT stored_options FROM inbound_email WHERE id = '{$ieId}'";
			$r = $this->db->query($q);
			$a = $this->db->fetchByAssoc($r);

			if(!empty($a)) {
				$opts = unserialize(base64_decode($a['stored_options']));

				if(isset($opts['outbound_email'])) {
					$mailer = "id = '{$opts['outbound_email']}'";
				} else {
					$mailer = "id = '{$ieId}'";
				}
			} else {
				// its possible that its an system account
				$mailer = "id = '{$ieId}'";
			}
		}

		if (empty($mailer)) {
			$mailer = "type = 'system'";
		} // if

		$q = "SELECT id FROM outbound_email WHERE {$mailer}";
		$r = $this->db->query($q);
		$a = $this->db->fetchByAssoc($r);

		if(empty($a)) {
			$ret = $this->getSystemMailerSettings();
		} else {
			$ret = $this->retrieve($a['id']);
		}
		return $ret;
	}

	/**
	 *  Determine if the user is allowed to use the current system outbound connection.
	 */
	function isAllowUserAccessToSystemDefaultOutbound()
	{
	    $allowAccess = FALSE;

	    // first check that a system default exists
	    $q = "SELECT id FROM outbound_email WHERE type = 'system'";
		$r = $this->db->query($q);
		$a = $this->db->fetchByAssoc($r);
		if (!empty($a)) {
		    // next see if the admin preference for using the system outbound is set
            $admin = Administration::getSettings('',TRUE);
            if (isset($admin->settings['notify_allow_default_outbound'])
                &&  $admin->settings['notify_allow_default_outbound'] == 2 )
                $allowAccess = TRUE;
        }

        return $allowAccess;
	}

	/**
	 * Retrieves the system's Outbound options
	 */
    function getSystemMailerSettings() {
        if (is_null(static::$sysMailerCache)) {
            // result puts in static cache to avoid per-request repeating calls
            $q = "SELECT id FROM outbound_email WHERE type = 'system'";
            $r = $this->db->query($q);
            $a = $this->db->fetchByAssoc($r);

            if(empty($a)) {
                $this->id = "";
                $this->name = 'system';
                $this->type = 'system';
                $this->user_id = '1';
                $this->mail_sendtype = 'SMTP';
                $this->mail_smtptype = 'other';
                $this->mail_smtpserver = '';
                $this->mail_smtpport = 25;
                $this->mail_smtpuser = '';
                $this->mail_smtppass = '';
                $this->mail_smtpauth_req = 1;
                $this->mail_smtpssl = 0;
                $this->mail_smtpdisplay = $this->_getOutboundServerDisplay($this->mail_smtptype,$this->mail_smtpserver);
                $this->save();
                static::$sysMailerCache = $this;
            } else {
                static::$sysMailerCache = $this->retrieve($a['id']);
            }
        }

        if (is_object(static::$sysMailerCache)) {
            foreach(static::$sysMailerCache as $k => $v) {
                $this->$k = $v;
            }
        }

        return static::$sysMailerCache;
    }

	/**
	 * Populates this instance
	 * @param string $id
	 * @return object $this
	 */
	function retrieve($id) {
		require_once('include/utils/encryption_utils.php');
		$q = "SELECT * FROM outbound_email WHERE id = '{$id}'";
		$r = $this->db->query($q);
		$a = $this->db->fetchByAssoc($r);

		if(!empty($a)) {
			foreach($a as $k => $v) {
				if ($k == 'mail_smtppass' && !empty($v)) {
					$this->$k = blowfishDecode(blowfishGetKey('OutBoundEmail'), $v);
				} else {
					$this->$k = $v;
				} // else
			}
			if ( !empty($a['mail_smtptype']) )
			    $this->mail_smtpdisplay = $this->_getOutboundServerDisplay($a['mail_smtptype'],$a['mail_smtpserver']);
			else
			    $this->mail_smtpdisplay = $a['mail_smtpserver'];
		}

		return $this;
	}

	function populateFromPost() {
		foreach($this->field_defs as $def) {
			if(isset($_POST[$def])) {
				$this->$def = $_POST[$def];
			} else if ($def != 'mail_smtppass') {
				$this->$def = "";
			}
		}
	}

	/**
	 * Generate values for saving into outbound_emails table
	 * @param array $keys
	 * @return array
	 */
	protected function getValues(&$keys)
	{
	    $values = array();
            $validKeys = array();

	    foreach($keys as $def) {
	    	if ($def == 'mail_smtppass' && !empty($this->$def)) {
	    		$this->$def = blowfishEncode(blowfishGetKey('OutBoundEmail'), $this->$def);
	    	} // if
	    	if($def == 'mail_smtpauth_req' || $def == 'mail_smtpssl' || $def == 'mail_smtpport'){
	    		if(empty($this->$def)){
	    			$this->$def = 0;
	    		}
	    		$values[] = intval($this->$def);
                        $validKeys[] = $def;
	    	} else if (isset($this->$def)) {
	    		$values[] = $this->db->quoted($this->$def);
                        $validKeys[] = $def;
	    	}
	    }
            $keys = $validKeys;
	    return $values;
	}

	/**
	 * saves an instance
	 */
	function save() {
		require_once('include/utils/encryption_utils.php');
	    if( empty($this->id) ) {
	        $this->id = create_guid();
			$this->new_with_id = true;
		}

		$cols = $this->field_defs;
		$values = $this->getValues($cols);

		if($this->new_with_id) {
			$q  = sprintf("INSERT INTO outbound_email (%s) VALUES (%s)", implode($cols, ","), implode($values, ","));
		} else {
		    $updvalues = array();
		    foreach($values as $k => $val) {
		        $updvalues[] = "{$cols[$k]} = $val";
		    }
			$q = "UPDATE outbound_email SET ".implode(', ', $updvalues)." WHERE id = ".$this->db->quoted($this->id);
		}

		$this->db->query($q, true);
        $this->resetSystemMailerCache();
		return $this;
	}

	/**
	 * Saves system mailer.  Presumes all values are filled.
	 */
	function saveSystem() {
		$q = "SELECT id FROM outbound_email WHERE type = 'system'";
		$r = $this->db->query($q);
		$a = $this->db->fetchByAssoc($r);

		if(empty($a)) {
			$a['id'] = ''; // trigger insert
		}

		$this->id = $a['id'];
		$this->name = 'system';
		$this->type = 'system';
		$this->user_id = '1';
		$this->save();

        // If there is no system-override record for the System User - Create One using the System Mailer Configuration
        // If there already is one, update the smtpuser and smtppass
        //      If User Access To System Default Outbound is enabled
        //   Or If SMTP Auth is required And Either the smtpuser or smtppass is empty
        $oe_system = $this->getSystemMailerSettings();
        $oe_override = $this->getUsersMailerForSystemOverride($this->user_id);
        if ($oe_override == null) {
            $this->createUserSystemOverrideAccount($this->user_id, $oe_system->mail_smtpuser, $oe_system->mail_smtppass);
        }
        else if ($this->doesUserOverrideAccountRequireCredentials($this->user_id) ||
                 $this->isAllowUserAccessToSystemDefaultOutbound() ||
                   ( $oe_override->mail_smtpauth_req &&
                     $oe_override->mail_smtpserver == $oe_system->mail_smtpserver &&
                     ( empty($oe_override->mail_smtpuser) || ($oe_system->mail_smtpuser==$oe_override->mail_smtpuser) || empty($oe_override->mail_smtppass))) ) {
            $this->updateAdminSystemOverrideAccount();
        }

        $this->updateUserSystemOverrideAccounts();
        $this->resetSystemMailerCache();
	}

    /**
     * Update the Admin's user system override account with the system information if anything has changed.
     */
    function updateAdminSystemOverrideAccount()
    {
        $updateFields = array('mail_smtptype','mail_sendtype','mail_smtpserver', 'mail_smtpport','mail_smtpauth_req','mail_smtpssl','mail_smtpuser','mail_smtppass');

        $values = $this->getValues($updateFields);
        $updvalues = array();
        foreach($values as $k => $val) {
            $updvalues[] = "{$updateFields[$k]} = $val";
        }
        $query = "UPDATE outbound_email set ".implode(', ', $updvalues)." WHERE user_id='1' AND type='system-override'";
        $this->db->query($query);
    }

    /**
	 * Update the user system override accounts with the system information if anything has changed.
	 */
	function updateUserSystemOverrideAccounts()
	{
		require_once('include/utils/encryption_utils.php');
	    $updateFields = array('mail_smtptype','mail_sendtype','mail_smtpserver', 'mail_smtpport','mail_smtpauth_req','mail_smtpssl');

        $values = $this->getValues($updateFields);
        $updvalues = array();
		foreach($values as $k => $val) {
		        $updvalues[] = "{$updateFields[$k]} = $val";
		}
        $query = "UPDATE outbound_email set ".implode(', ', $updvalues)." WHERE type='system-override' ";

	    $this->db->query($query);
	}

	/**
	 * Deletes an instance
	 */
	function delete() {
		if(empty($this->id)) {
			return false;
		}

		$q = "DELETE FROM outbound_email WHERE id = ".$this->db->quoted($this->id);
		return $this->db->query($q);
	}

	private function _getOutboundServerDisplay(
	    $smtptype,
	    $smtpserver
	    )
	{
	    global $app_strings;

	    switch ($smtptype) {
        case "yahoomail":
            return $app_strings['LBL_SMTPTYPE_YAHOO']; break;
        case "gmail":
            return $app_strings['LBL_SMTPTYPE_GMAIL']; break;
        case "exchange":
            return $smtpserver . ' - ' . $app_strings['LBL_SMTPTYPE_EXCHANGE']; break;
        default:
            return $smtpserver; break;
        }
	}

	/**
	 * Get mailer for current user by name
	 * @param User $user
	 * @param string $name
	 * @return OutboundEmail|false
	 */
	public function getMailerByName($user, $name)
	{
	    if($name == "system" && !$this->isAllowUserAccessToSystemDefaultOutbound()) {
	        $oe = $this->getUsersMailerForSystemOverride($user->id);
	        if(!empty($oe) && !empty($oe->id)) {
	            return $oe;
	        }
            else  {
                return $this->getSystemMailerSettings();
            }
	    }
	    $res = $this->db->query("SELECT id FROM outbound_email WHERE user_id = '{$user->id}' AND name='".$this->db->quote($name)."'");
		$a = $this->db->fetchByAssoc($res);
        if(!isset($a['id'])) {
            return false;
        }
	    return $this->retrieve($a['id']);
	}

    /**
     * Reset system mailer settings cache
     */
    public function resetSystemMailerCache()
    {
        static::$sysMailerCache = null;
    }
}
