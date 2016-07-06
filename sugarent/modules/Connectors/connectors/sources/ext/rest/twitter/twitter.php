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
* Description:
* Portions created by SugarCRM are Copyright (C) SugarCRM, Inc. All Rights
* Reserved. Contributor(s): contact@synolia.com - www.synolia.com
* *******************************************************************************/

require_once('include/connectors/sources/ext/rest/rest.php');

class ext_rest_twitter extends ext_rest {

    protected $_has_testing_enabled = true;

    public function __construct(){
        parent::__construct();
        $this->_enable_in_wizard = false;
        $this->_enable_in_hover = true;
    }

    /**
     * test
     * This method is called from the administration interface to run a test of the service
     * It is up to subclasses to implement a test and set _has_testing_enabled to true so that
     * a test button is rendered in the administration interface
     *
     * @return result boolean result of the test function
     */
    public function test() {
        require_once 'vendor/Zend/Oauth/Consumer.php';

        $api = ExternalAPIFactory::loadAPI('Twitter', true);

        if ($api) {
            $properties = $this->getProperties();
            $config = array(
                'callbackUrl' => 'http://www.sugarcrm.com',
                'siteUrl' => $api->getOauthRequestURL(),
                'consumerKey' => $properties['oauth_consumer_key'],
                'consumerSecret' => $properties['oauth_consumer_secret']
            );
            try {
                $consumer = new Zend_Oauth_Consumer($config);
                $consumer->getRequestToken();
                return true;
            } catch (Exception $e) {
                $GLOBALS['log']->error("Error getting request token for twitter:".$e->getMessage());
                return false;
            }
        }
        
        return false;
    }

    /*
     * getItem
     *
     * As the twitter connector does not have a true API call, we simply
     * override this abstract
     */
    public function getItem($args=array(), $module=null){}


    /*
     * getList
     *
     * As the twitter connector does not have a true API call, we simply
     * override this abstract method
     */
    public function getList($args=array(), $module=null){}
}

?>
