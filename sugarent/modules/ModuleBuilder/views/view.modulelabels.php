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
/*
 * Created on Aug 6, 2007
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

require_once 'modules/ModuleBuilder/MB/AjaxCompose.php';

class ViewModulelabels extends SugarView
{
    /**
     * @see SugarView::_getModuleTitleParams()
     */
    protected function _getModuleTitleParams($browserTitle = false)
    {
        global $mod_strings;

        return array(
            translate('LBL_MODULE_NAME','Administration'),
            ModuleBuilderController::getModuleTitle(),
        );
    }

    public function display()
    {
        global $mod_strings, $locale;
        $bak_mod_strings=$mod_strings;
        $smarty = new Sugar_Smarty();
        $smarty->assign('mod_strings', $mod_strings);
        $package_name = $_REQUEST['view_package'];
        $module_name = $_REQUEST['view_module'];

        require_once 'modules/ModuleBuilder/MB/ModuleBuilder.php';
        $mb = new ModuleBuilder();
        $mb->getPackage($_REQUEST['view_package']);
        $package = $mb->packages[$_REQUEST['view_package']];
        $package->getModule($module_name);
        $mbModule = $package->modules[$module_name];

        if (!empty($_REQUEST['selected_lang'])) {
            $selected_lang = $_REQUEST['selected_lang'];
        } else {
            $selected_lang = $locale->getAuthenticatedUserLanguage();
        }

            //need to change the following to interface with MBlanguage.

        $smarty->assign('MOD', $mbModule->getModStrings($selected_lang));
        $smarty->assign('APP', $GLOBALS['app_strings']);
        $smarty->assign('selected_lang', $selected_lang);
        $smarty->assign('view_package', $package_name);
        $smarty->assign('view_module', $module_name);
        $smarty->assign('mb','1');
        $smarty->assign('available_languages', get_languages());
        ///////////////////////////////////////////////////////////////////
         ////ASSISTANT
         $smarty->assign('assistant',array('group'=>'module', 'key'=>'labels'));
        /////////////////////////////////////////////////////////////////
         ////ASSISTANT

        $ajax = new AjaxCompose();
        $ajax->addCrumb($bak_mod_strings['LBL_MODULEBUILDER'], 'ModuleBuilder.main("mb")');
        $ajax->addCrumb($package_name, 'ModuleBuilder.getContent("module=ModuleBuilder&action=package&package='.$package->name. '")');
        $ajax->addCrumb($module_name, 'ModuleBuilder.getContent("module=ModuleBuilder&action=module&view_package='.$package->name.'&view_module='. $module_name . '")');
        $ajax->addCrumb($bak_mod_strings['LBL_LABELS'], '');
        $ajax->addSection('center', $bak_mod_strings['LBL_LABELS'],$smarty->fetch('modules/ModuleBuilder/tpls/labels.tpl'));
        echo $ajax->getJavascript();
    }
}
