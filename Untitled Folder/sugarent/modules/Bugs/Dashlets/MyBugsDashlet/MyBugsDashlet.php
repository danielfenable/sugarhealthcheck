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

// $Id: MyBugsDashlet.php 56115 2010-04-26 17:08:09Z kjing $

require_once('include/Dashlets/DashletGeneric.php');


class MyBugsDashlet extends DashletGeneric { 
    function MyBugsDashlet($id, $def = null) {
        global $current_user, $app_strings;
		require('modules/Bugs/Dashlets/MyBugsDashlet/MyBugsDashlet.data.php');
		
        parent::DashletGeneric($id, $def);
        
        $this->searchFields = $dashletData['MyBugsDashlet']['searchFields'];
        $this->columns = $dashletData['MyBugsDashlet']['columns'];
        
        if(empty($def['title'])) $this->title = translate('LBL_LIST_MY_BUGS', 'Bugs');
        $this->seedBean = BeanFactory::getBean('Bugs');        
    }
    
    function displayOptions() {
        
        $this->processDisplayOptions();
        
        $seedRelease = BeanFactory::getBean('Releases');
        
        if(!empty($this->searchFields['fixed_in_release'])) {
	        $this->currentSearchFields['fixed_in_release']['input'] = '<select multiple="true" size="3" name="fixed_in_release[]">' 
	                                                                  . get_select_options_with_id($seedRelease->get_releases(false, "Active"), (empty($this->filters['fixed_in_release']) ? '' : $this->filters['fixed_in_release'])) 
	                                                                  . '</select>';
        }
        
        if(!empty($this->searchFields['found_in_release'])) {
	        $this->currentSearchFields['found_in_release']['input'] = '<select multiple="true" size="3" name="found_in_release[]">' 
	                                                                  . get_select_options_with_id($seedRelease->get_releases(false, "Active"), (empty($this->filters['found_in_release']) ? '' : $this->filters['found_in_release']))
	                                                                  . '</select>'; 
        }
        $this->configureSS->assign('searchFields', $this->currentSearchFields);
        return $this->configureSS->fetch($this->configureTpl);
    }
}

?>
