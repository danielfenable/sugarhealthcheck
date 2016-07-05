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

// $Id: MyCasesDashlet.php 51865 2009-10-27 00:40:13Z clee $

require_once('include/Dashlets/DashletGeneric.php');


class MyQuotesDashlet extends DashletGeneric { 
    function MyQuotesDashlet($id, $def = null) {
        global $current_user, $app_strings;
		require('modules/Quotes/Dashlets/MyQuotesDashlet/MyQuotesDashlet.data.php');
		
        parent::DashletGeneric($id, $def);
        
        if(empty($def['title'])) $this->title = translate('LBL_LIST_MY_QUOTES', 'Quotes');
        $this->searchFields = $dashletData['MyQuotesDashlet']['searchFields'];
        $this->columns = $dashletData['MyQuotesDashlet']['columns'];
        $this->seedBean = BeanFactory::getBean('Quotes');        
    }
}

?>
