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

 // $Id: MyLeadsDashlet.php 45763 2009-04-01 19:16:18Z majed $


require_once('include/Dashlets/DashletGeneric.php');


class MyLeadsDashlet extends DashletGeneric { 
    function MyLeadsDashlet($id, $def = null) {
        global $current_user, $app_strings;
		require('modules/Leads/Dashlets/MyLeadsDashlet/MyLeadsDashlet.data.php');
		
        parent::DashletGeneric($id, $def);
         
        if(empty($def['title'])) $this->title = translate('LBL_LIST_MY_LEADS', 'Leads');
        
        $this->searchFields = $dashletData['MyLeadsDashlet']['searchFields'];
        $this->columns = $dashletData['MyLeadsDashlet']['columns'];
        $this->seedBean = BeanFactory::getBean('Leads');        
    }
}

?>
