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

require_once('modules/ExpressionEngine/formulaHelper.php');

class ViewEditFormula extends SugarView
{
	function ViewEditFormula(){
		$this->options['show_footer'] = false;
		if (isset ($_REQUEST['embed']) && $_REQUEST['embed'])
		{
			$this->options['show_header'] = false;
		}
		parent::SugarView();

 	}

 	function display(){
 		global $app_strings, $current_user, $mod_strings, $theme, $beanList, $beanFiles;
		$smarty = new Sugar_Smarty();
 		$json = new JSON();
		require_once('include/JSON.php');
		//Load the field list from the target module
        if(!empty($_REQUEST['targetModule']) && $_REQUEST['targetModule'] != 'undefined')
 		{
			$module = $_REQUEST['targetModule'];
 			if (isset($_REQUEST['package']) && $_REQUEST['package'] != 'studio' && $_REQUEST['package'] != '') {
				//Get the MB Parsers
 				require_once('modules/ModuleBuilder/MB/MBPackage.php');
 				$pak = new MBPackage($_REQUEST['package']);
 				$defs = $pak->modules[$module]->getVardefs();
                $fields = FormulaHelper::cleanFields(array_merge($pak->modules[$module]->getLinkFields(), $defs['fields']));
 			} else {
 			    $seed = BeanFactory::getBean($module);
	        	$fields = FormulaHelper::cleanFields($seed->field_defs);
 			}
        	$smarty->assign('Field_Array', $json->encode($fields));
		}
		else
		{
			$fields = array(array('income', 'number'), array('employed', 'boolean'), array('first_name', 'string'), array('last_name', 'string'));
			$smarty->assign('Field_Array', $json->encode($fields));
		}
		if (!empty($_REQUEST['targetField']))
		{
			$smarty->assign("target", $_REQUEST['targetField']);
		}
        if (isset($_REQUEST['returnType']))
		{
			$smarty->assign("returnType", $_REQUEST['returnType']);
		}
		//Assign any requested Javascript event actions
		foreach(array('onSave', 'onLoad', 'onClose') as $e) {
			if (!empty($_REQUEST[$e]))
			{
				$smarty->assign($e, html_entity_decode($_REQUEST[$e], ENT_QUOTES));
			} else
			{
				$smarty->assign($e, 'function(){}');
			}
		}
		//Check if we need to load Ext ourselves
 		if (!isset($_REQUEST['loadExt']) || ($_REQUEST['loadExt'] && $_REQUEST['loadExt'] != "false"))
		{
			$smarty->assign('loadExt', true);
		} else
		{
			$smarty->assign('loadExt', false);
		}
		if (!empty($_REQUEST['formula'])) {
			$smarty->assign('formula', $json->decode(htmlspecialchars_decode($_REQUEST['formula'])));
		}
		if (isset($_REQUEST['returnType'])) {
			$smarty->assign('returnType', $_REQUEST['returnType']);
		}
 		$smarty->assign('app_strings', $app_strings);
 		$smarty->assign('mod', $mod_strings);
 		$smarty->display('modules/ExpressionEngine/tpls/formulaBuilder.tpl');
 	}


}
?>