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

 // $Id: MyContactsDashlet.php 45763 2009-04-01 19:16:18Z majed $


require_once('include/Dashlets/DashletGeneric.php');


class MyContactsDashlet extends DashletGeneric { 
    function MyContactsDashlet($id, $def = null) {
        global $current_user, $app_strings;
		require('modules/Contacts/Dashlets/MyContactsDashlet/MyContactsDashlet.data.php');
        
        parent::DashletGeneric($id, $def);

        if(empty($def['title'])) $this->title = translate('LBL_HOMEPAGE_TITLE', 'Contacts');
        
        $this->searchFields = $dashletData['MyContactsDashlet']['searchFields'];
        $this->columns = $dashletData['MyContactsDashlet']['columns'];
                                                             
        $this->seedBean = BeanFactory::getBean('Contacts');        
    }
}

?>
