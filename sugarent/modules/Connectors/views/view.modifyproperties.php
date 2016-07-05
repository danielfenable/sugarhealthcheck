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

require_once('include/MVC/View/SugarView.php');

class ViewModifyProperties extends SugarView 
{   
 	/**
	 * @see SugarView::_getModuleTitleParams()
	 */
	protected function _getModuleTitleParams($browserTitle = false)
	{
	    global $mod_strings;
	    
    	return array(
    	   "<a href='index.php?module=Administration&action=index'>".translate('LBL_MODULE_NAME','Administration')."</a>",
    	   "<a href='index.php?module=Connectors&action=ConnectorSettings'>".$mod_strings['LBL_ADMINISTRATION_MAIN']."</a>",
    	   $mod_strings['LBL_MODIFY_PROPERTIES_TITLE']
    	   );
    }
    
    /**
	 * @see SugarView::_getModuleTab()
	 */
	protected function _getModuleTab()
    {
        return 'Administration';
    }
    
    /**
	 * @see SugarView::display()
	 */
	public function display() 
	{
    	global $mod_strings, $app_strings;
		
		require_once('include/connectors/utils/ConnectorUtils.php');
		require_once('include/connectors/sources/SourceFactory.php');
		
		$this->ss->assign('mod', $mod_strings);
		$this->ss->assign('APP', $app_strings);
		$connectors = ConnectorUtils::getConnectors(true);
		$required_fields = array();
    	//Get required fields for first connector only

        $connectorsToShow = $connectors;
		foreach($connectors as $id=>$entry) {
			$s = SourceFactory::getSource($id);
			$connector_strings = ConnectorUtils::getConnectorStrings($id);
			$fields = $s->getRequiredConfigFields();
            
            if(!$s->isEnabledInAdminProperties() || empty($fields)){
                unset($connectorsToShow[$id]);
            }else{
                if(empty($required_fields)){
                    foreach($fields as $field_id) {
                        $label = isset($connector_strings[$field_id]) ? $connector_strings[$field_id] : $field_id;
                        $required_fields[$id][$field_id]=$label;
                    }
                }
            }
		}
		$this->ss->assign('SOURCES', $connectorsToShow);
		$this->ss->assign('REQUIRED_FIELDS', $required_fields);
        // Handle active tab selection
        $active_tab = isset($_REQUEST['active_tab']) ? $_REQUEST['active_tab'] : null;
        $this->ss->assign('ACTIVE_TAB', $active_tab);
        echo $this->getModuleTitle(false);
        $this->ss->display($this->getCustomFilePathIfExists('modules/Connectors/tpls/modify_properties.tpl'));
    }
}