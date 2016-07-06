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

 // $Id: EmailAuthenticate.php 16292 2006-08-22 20:57:23Z awu $

/**
 * This file is used to control the authentication process. 
 * It will call on the user authenticate and controll redirection 
 * based on the users validation
 *
 */
require_once('modules/Users/authentication/SugarAuthenticate/SugarAuthenticate.php');
class EmailAuthenticate extends SugarAuthenticate {
	var $userAuthenticateClass = 'EmailAuthenticateUser';
	var $authenticationDir = 'EmailAuthenticate';
	/**
	 * Constructs EmailAuthenticate
	 * This will load the user authentication class
	 *
	 * @return EmailAuthenticate
	 */
	function EmailAuthenticate(){
	    
		parent::SugarAuthenticate();
	}

}
