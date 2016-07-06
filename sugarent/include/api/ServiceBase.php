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

require_once('include/api/SugarApiException.php');
require_once('include/api/SugarApi.php');

abstract class ServiceBase {
    public $user;
    public $platform = 'base';
    public $action = 'view';

    abstract public function execute();
    abstract protected function handleException(Exception $exception);

    protected function loadServiceDictionary($dictionaryName) {
        require_once("include/api/{$dictionaryName}.php");

        $dict = new $dictionaryName();

        // Load the dictionary, because if the dictionary isn't there it will generate it.
        $dict->loadDictionary();
        return $dict;
    }

    protected function loadApiClass($route) {
        if (!SugarAutoLoader::requireWithCustom($route['file']) ) {
            throw new SugarApiException('Missing API file.');
        }

        if ( ! class_exists($route['className']) ) {
            throw new SugarApiException('Missing API class.');
        }

        $apiClassName = $route['className'];
        $apiClass = new $apiClassName();

        return $apiClass;
    }

    /**
     * This function loads various items needed to setup the user's environment (such as app_strings and app_list_strings)
     */
    protected function loadUserEnvironment()
    {
        global $current_user, $current_language;
        $current_language = $GLOBALS['sugar_config']['default_language'];

        // If the session has a language set, use that
        if(!empty($_SESSION['authenticated_user_language'])) {
            $current_language = $_SESSION['authenticated_user_language'];
        }

        // get the currrent person object of interest
        $apiPerson = $GLOBALS['current_user'];
        if (isset($_SESSION['type']) && $_SESSION['type'] == 'support_portal') {
            $apiPerson = BeanFactory::getBean('Contacts', $_SESSION['contact_id']);
        }
        // If they have their own language set, use that instead
        if (isset($apiPerson->preferred_language) && !empty($apiPerson->preferred_language)) {
            $current_language = $apiPerson->preferred_language;
        }

        $GLOBALS['app_strings'] = return_application_language($current_language);
        $GLOBALS['app_list_strings'] = return_app_list_strings_language($current_language);
    }

    /**
     * This function loads various items when the user is not logged in
     */
    protected function loadGuestEnvironment()
    {
        global $current_language;
        $current_language = $GLOBALS['sugar_config']['default_language'];
        if (!empty($GLOBALS['HTTP_RAW_POST_DATA'])) {
            $postContents = json_decode($GLOBALS['HTTP_RAW_POST_DATA'], true);
            if (!empty($postContents['current_language'])) {
                $current_language = $postContents['current_language'];
            }
        }

        $GLOBALS['app_strings'] = return_application_language($current_language);
        $GLOBALS['app_list_strings'] = return_app_list_strings_language($current_language);
    }

   /**
     * Set a response header
     * @param string $header
     * @param string $info
     * @return bool
     */
    public function setHeader($header, $info)
    {
        // do nothing in base class
        return $this;
    }

    /**
     * Generate suitable ETag for content
     *
     * This function generates the necessary cache headers for using ETags with dynamic content. You
     * simply have to generate the ETag, pass it in, and the function handles the rest.
     *
     * @param string $etag ETag to use for this content.
     * @return bool Did we have a match?
     */
    public function generateETagHeader()
    {
        // do nothing in base class
        return false;
    }

    /**
     * Set response to be read from file
     */
    public function fileResponse($filename)
    {
        return false;
    }

	/**
     * Release session data
     * Keeps $_SESSION but it's no longer preserved after the end of the request
	 */
    protected function releaseSession()
    {
        if(!session_id()) return;
        if(function_exists('session_status') && session_status() != PHP_SESSION_ACTIVE) return;

        $session_data = $_SESSION; // keep session values
        session_write_close();
        $_SESSION = $session_data;
    }

    /**
     * Handle the situation where the API needs login
     * @param Exception $e Exception that caused the login problem, if any
     * @throws SugarApiExceptionNeedLogin
     */
    public function needLogin(Exception $e = null)
    {
       if($e) {
           $message = $e->getMessage();
       } else {
           // @TODO Localize exception strings
           $message = "No valid authentication for user.";
       }
       $login_exc = new SugarApiExceptionNeedLogin($message);
       $auth = AuthenticationController::getInstance();
       if($auth->isExternal()) {
            $login_exc->setExtraData("url", $auth->getLoginUrl(array(
                'platform' => $this->platform,
            )))->setExtraData('platform', $this->platform);
       }
       throw $login_exc;
    }

    /**
     * Capture PHP error output and handle it
     *
     * @param string $errorType The error type to hand down through the exception (default: 'php_error')
     * @throw SugarApiExceptionError
     */
    public function handleErrorOutput($errorType = 'php_error')
    {
        if (ob_get_level() > 0 && ob_get_length() > 0) {
            // Looks like something errored out first
            $errorOutput = ob_get_clean();
            if(trim($errorOutput) == '') {
                // whitespace only, we may let it slide on account of 6.x having broken templates with whitespace
                // See BR-1038
                return;
            }
            $GLOBALS['log']->error("A PHP error occurred:\n".$errorOutput);
            $e = new SugarApiExceptionError();
            $e->errorLabel = $errorType;
            if (inDeveloperMode()) {
                $e->setExtraData('error_output',$errorOutput);
            }
            throw $e;
        }
    }
}
