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

 * Description:  TODO: To be written.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

class ViewConfigureshortcutbar extends SugarView
{
    /**
     * List of modules that should not be available for selection.
     *
     * @var array
     */
    private $blacklistedModules = array(
        'EAPM',
        'Users',
        'Employees',
        'PdfManager',
        'pmse_Project',
        'pmse_Inbox',
        'pmse_Business_Rules',
        'pmse_Emails_Templates',
    );

    /**
	 * @see SugarView::_getModuleTitleParams()
	 */
	protected function _getModuleTitleParams($browserTitle = false)
	{
	    global $mod_strings;

    	return array("<a href='index.php?module=Administration&action=index'>".$mod_strings['LBL_MODULE_NAME']."</a>", $mod_strings['LBL_CONFIGURE_SHORTCUT_BAR']);
    }

    /**
	 * @see SugarView::preDisplay()
	 */
	public function preDisplay()
	{
	    global $current_user;

	    if (!is_admin($current_user))
        {
	        sugar_die("Unauthorized access to administration.");
        }
	}

    /**
	 * @see SugarView::display()
	 */
    public function display()
    {
        require_once("include/JSON.php");
        $json = new JSON();

        global $mod_strings;

        $title = getClassicModuleTitle(
            "Administration",
            array(
                "<a href='index.php?module=Administration&action=index'>{$mod_strings['LBL_MODULE_NAME']}</a>",
                translate('LBL_CONFIGURE_SHORTCUT_BAR')
            ),
            false
        );
        $msg = "";
        $GLOBALS['log']->info("Administration ConfigureShortcutBar view");

        $quickCreateModules = $this->getQuickCreateModules();

        //If save is set, save then let the user know if the save worked.
        if (!empty($_REQUEST['enabled_modules'])) {
            $toDecode = html_entity_decode($_REQUEST['enabled_modules'], ENT_QUOTES);
            // get the enabled
            $enabledModules = array_flip(json_decode($toDecode));

            $successful = $this->saveChangesToQuickCreateMetadata(
                $quickCreateModules['enabled'],
                $quickCreateModules['disabled'],
                $enabledModules
            );

            if ($successful) {
                MetaDataManager::refreshSectionCache(array(MetaDataManager::MM_MODULES));
                echo "true";
            } else {
                echo translate("LBL_SAVE_FAILED");
            }
        } else {
            $enabled = $this->sortEnabledModules($quickCreateModules['enabled']);
            $enabled = $this->filterAndFormatModuleList($enabled);

            ksort($quickCreateModules['disabled']);
            $disabled = $this->filterAndFormatModuleList($quickCreateModules['disabled']);

            $this->ss->assign('APP', $GLOBALS['app_strings']);
            $this->ss->assign('MOD', $GLOBALS['mod_strings']);
            $this->ss->assign('title', $title);

            $this->ss->assign('enabled_modules', $json->encode($enabled));
            $this->ss->assign('disabled_modules', $json->encode($disabled));
            $this->ss->assign('description', translate("LBL_CONFIGURE_SHORTCUT_BAR"));
            $this->ss->assign('msg', $msg);

            $returnModule = !empty($_REQUEST['return_module']) ? $_REQUEST['return_module'] : 'Administration';
            $returnAction = !empty($_REQUEST['return_action']) ? $_REQUEST['return_action'] : 'index';
            $this->ss->assign('RETURN_MODULE', $returnModule);
            $this->ss->assign('RETURN_ACTION', $returnAction);

            echo $this->ss->fetch('modules/Administration/templates/ShortcutBar.tpl');
        }
    }

    /**
     * Get a list of all enabled and disabled quickcreate modules.
     *
     * @return array
     */
    public function getQuickCreateModules()
    {
        global $moduleList;
        $enabledModules = array();
        $disabledModules = array();

        foreach ($moduleList as $module) {
            $quickCreateMetadata = $this->getQuickCreateMetadata($module);

            if (!empty($quickCreateMetadata)) {
                $isVisible = !empty($quickCreateMetadata['visible']) ? $quickCreateMetadata['visible'] : false;
                if ($isVisible) {
                    if (!array_key_exists('order', $quickCreateMetadata)) {
                        $quickCreateMetadata['order'] = -1;
                    }
                    $enabledModules[$module] = $quickCreateMetadata;
                } else {
                    $disabledModules[$module] = $quickCreateMetadata;
                }
            }
        }

        return array(
            'enabled' => $enabledModules,
            'disabled' => $disabledModules,
        );
    }

    /**
     * Get quickcreate menu metadata for a given module.
     *
     * @param $module string
     * @return array
     */
    protected function getQuickCreateMetadata($module)
    {
        $quickCreateFile = "modules/$module/clients/base/menus/quickcreate/quickcreate.php";

        if (!file_exists("custom/{$quickCreateFile}") && !file_exists($quickCreateFile)) {
            return;
        }

        if (file_exists("custom/{$quickCreateFile}")) {
            include "custom/{$quickCreateFile}";
        } else {
            include "{$quickCreateFile}";
        }

        return $viewdefs[$module]['base']['menu']['quickcreate'];
    }

    /**
     * Save changes to the quickcreate menu metadata.
     *
     * @param $enabled array
     * @param $disabled array
     * @param $modulesToEnable array
     * @return bool
     */
    public function saveChangesToQuickCreateMetadata($enabled, $disabled, $modulesToEnable)
    {
        $success = true;

        // Change the metadata if the enabled module has been disabled or if the order has changed.
        foreach ($enabled as $module => $quickCreateMetadata) {
            $shouldBeEnabled = array_key_exists($module, $modulesToEnable);
            if (!$shouldBeEnabled) {
                $quickCreateMetadata['visible'] = false;
                unset($quickCreateMetadata['order']);
                $success = $this->setQuickCreateMetadata($quickCreateMetadata, $module);
            } elseif ($quickCreateMetadata['order'] !== $modulesToEnable[$module]) {
                $quickCreateMetadata['order'] = $modulesToEnable[$module];
                $success = $this->setQuickCreateMetadata($quickCreateMetadata, $module);
            }
        }

        // Change the metadata if the disabled module has been enabled.
        foreach ($disabled as $module => $quickCreateMetadata) {
            $shouldBeEnabled = array_key_exists($module, $modulesToEnable);
            if ($shouldBeEnabled) {
                $quickCreateMetadata['visible'] = true;
                $quickCreateMetadata['order'] = $modulesToEnable[$module];
                $success = $this->setQuickCreateMetadata($quickCreateMetadata, $module);
            }
        }

        return $success;
    }

    /**
     * Write the given quickcreate menu metadata to the server.
     *
     * @param $metadata array
     * @param $module string
     * @return bool
     */
    protected function setQuickCreateMetadata($metadata, $module)
    {
        $quickCreateFile = "modules/$module/clients/base/menus/quickcreate/quickcreate.php";
        $arrayName = "viewdefs['{$module}']['base']['menu']['quickcreate']";

        if (file_exists("custom/{$quickCreateFile}")) {
            include "custom/{$quickCreateFile}";
        } else {
            include "{$quickCreateFile}";
        }

        sugar_mkdir(dirname("custom/{$quickCreateFile}"), null, true);
        return (write_array_to_file($arrayName, $metadata, "custom/{$quickCreateFile}"));
    }

    /**
     * Sort enabled modules array according to its order value.
     *
     * @param $modules array
     * @return array
     */
    protected function sortEnabledModules($modules)
    {
        $sortComparison = function ($a, $b) {
            $order = $a['order'] - $b['order'];
            return ($order == 0) ? ($a['label'] > $b['label']) : $order;
        };
        uasort($modules, $sortComparison);

        return $modules;
    }

    /**
     * Filter out modules that are blacklisted and format the module list so that it is an array of objects.
     *
     * @param $moduleList array
     * @return array
     */
    protected function filterAndFormatModuleList($moduleList)
    {
        $results = array();

        foreach ($moduleList as $module => $data) {
            if (!in_array($module, $this->blacklistedModules)) {
                $results[] = array(
                    'module' => $module,
                    'label' => translate($module),
                );
            }
        }

        return $results;
    }
}
