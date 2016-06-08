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

require_once 'modules/Users/authentication/SAMLAuthenticate/SAMLAuthenticate.php';
require_once 'modules/Users/authentication/SAMLAuthenticate/saml.php';

$authrequest = new OneLogin_Saml_AuthRequest(SAMLAuthenticate::loadSettings());
$url = $authrequest->getRedirectUrl();

header("Location: $url");
