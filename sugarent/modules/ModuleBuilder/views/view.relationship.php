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
require_once ('modules/ModuleBuilder/MB/AjaxCompose.php') ;
require_once ('modules/ModuleBuilder/MB/ModuleBuilder.php') ;
require_once ('modules/ModuleBuilder/Module/StudioModuleFactory.php') ;
require_once ('modules/ModuleBuilder/Module/StudioBrowser.php') ;
require_once ('modules/ModuleBuilder/parsers/constants.php') ;
require_once 'modules/ModuleBuilder/parsers/relationships/RelationshipFactory.php' ;

class ViewRelationship extends SugarView
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

    public function overrideDefinitionFromPOST($definition)
    {
        require_once 'modules/ModuleBuilder/parsers/relationships/AbstractRelationship.php';
        foreach ( AbstractRelationship::$definitionKeys as $key ) {
            if (!empty($_REQUEST['ajaxLoad']) && in_array($key, array('label', 'rhs_label', 'lhs_label'))) {
                continue;
            }
            if (!empty($_REQUEST[$key])) {
                $definition[$key] = $_REQUEST[$key];
            }
        }
        return $definition ;
    }

    public function display()
    {

        global $locale;

        if (!empty($_REQUEST['relationship_lang'])) {
            $selected_lang = $_REQUEST['relationship_lang'];
        } else {
            $selected_lang = $locale->getAuthenticatedUserLanguage();
        }

        $this->smarty = new Sugar_Smarty();
        $ac = new AjaxCompose();
        $this->fromModuleBuilder = isset($_REQUEST['MB']) || (!empty($_REQUEST['view_package']) && $_REQUEST['view_package'] != 'studio');
        $this->smarty->assign ( 'fromModuleBuilder', $this->fromModuleBuilder );

        if (!$this->fromModuleBuilder) {
            $module = StudioModuleFactory::getStudioModule($_REQUEST['view_module']);
            $moduleName = $_REQUEST['view_module'];
            $fields = $module->fields;
            require_once 'modules/ModuleBuilder/parsers/relationships/DeployedRelationships.php';
            $relatableModules = DeployedRelationships::findRelatableModules();
            $appStrings = return_app_list_strings_language( $selected_lang);
            $modStrings = return_module_language($selected_lang, $_REQUEST['view_module'], true );
            $appStrings = $appStrings['moduleList'];
        } else {
            $mb = new ModuleBuilder();
            $mb->getPackages();
            //display the latest module name rather than what is in or not in the loaded app_list_strings.
            $mb->getPackage($_REQUEST['view_package'])->loadModuleTitles();
            $module = $mb->getPackageModule($_REQUEST['view_package'], $_REQUEST['view_module']);
            $moduleName = empty($module->key_name) ? $module->getModuleName() : $module->key_name;
            $this->smarty->assign('view_package', $_REQUEST['view_package']);
            $mbvardefs = $module->getVardefs();
            $fields = $mbvardefs['fields'];
            require_once 'modules/ModuleBuilder/parsers/relationships/UndeployedRelationships.php';
            $relatableModules = UndeployedRelationships::findRelatableModules();
            $appStrings = $module->getModStrings($selected_lang);
        }

        ksort($relatableModules);
        $lhs_subpanels = $module->getProvidedSubpanels();
        // Fix to re-add sorting of the subpanel names so that the 'default' 
        // subpanel always appears first in the list.
        // This assumes that subpanels are usually named ForXYZ which is the 
        // case currently, and hence 'default' will be sorted first.
        // If this assumption is incorrect, then a better solution would be to 
        // remove 'default' from the subpanel list, then sort, and finally 
        // array_unshift it back on.
        natcasesort($lhs_subpanels);

        $cardinality = array(
            MB_ONETOONE => translate('LBL_ONETOONE'), 
            MB_ONETOMANY => translate('LBL_ONETOMANY'), 
            MB_MANYTOONE=> translate('LBL_MANYTOONE'), 
            MB_MANYTOMANY => translate('LBL_MANYTOMANY'),
        );

        if (!$this->fromModuleBuilder) {
            unset($cardinality[MB_MANYTOONE]);
        }

        $relationships = $module->getRelationships();

        // if a description for this relationship already exists, then load it so it can be modified
        if (!empty($_REQUEST['relationship_name'])) {
            $relationship = $relationships->get($_REQUEST['relationship_name']);
            $relationship->setName($_REQUEST['relationship_name']);
            $definition = $relationship->getDefinition();
            if (!$this->fromModuleBuilder) {
                $modStrings = return_module_language($selected_lang, $relationship->rhs_module, true);
                if (!empty($definition['lhs_vname'])) {
                    $definition['lhs_label'] = translate($definition['lhs_vname']);
                } else {
                    $definition['lhs_label'] = isset($modStrings[$relationship->getTitleKey()])?$modStrings[$relationship->getTitleKey()] : $relationship->lhs_module;
                }

                $modStrings = return_module_language( $selected_lang, $relationship->lhs_module, true );
                if (!empty($definition['rhs_vname'])) {
                    $definition['rhs_label'] = translate($definition['rhs_vname']);
                } else {
                    $definition['rhs_label'] = isset($modStrings[$relationship->getTitleKey(true)])?$modStrings[$relationship->getTitleKey(true)] : $relationship->rhs_module;
                }
            } else {
                #30624
                if (!empty($_REQUEST['rhs_module'])) {
                    $definition['rhs_label'] = $_REQUEST['rhs_module'];
                }
            }
        } else {
            $definition = array();
            $firstModuleDefinition = each($relatableModules);
            $definition['rhs_module'] = $firstModuleDefinition['key'];
            $definition['lhs_module'] = $moduleName;
            $definition['lhs_label'] = translate($moduleName);
            $definition['relationship_type'] = MB_MANYTOMANY;
        }
        // load the relationship from post - required as we can call view.relationship.php from Ajax when changing the rhs_module for example
        $definition = $this->overrideDefinitionFromPOST($definition);

        if (empty($definition ['rhs_label'])) {
            $definition['rhs_label'] = translate($definition['rhs_module']);
        }
        if (empty($definition['lhs_label'])) {
            $definition['lhs_label'] = translate($definition['lhs_module']);
        }
        $relationship = RelationshipFactory::newRelationship($definition);

        $rhs_subpanels = $relatableModules[$relationship->rhs_module];
        // Fix to re-add sorting of the subpanel names so that the 'default' 
        // subpanel always appears first in the list. This assumes that subpanels 
        // are usually named ForXYZ which is the case currently, and hence 
        // 'default' will be sorted first. If this assumption is incorrect, 
        // then a better solution would be to remove 'default' from the subpanel 
        // list, then sort, and finally array_unshift it back on.
        natcasesort($rhs_subpanels);

        if (empty($_REQUEST['relationship_name'])) {
            // tidy up the options for the view based on the modules participating 
            // in the relationship and the cardinality some modules 
            // (e.g., Knowledge Base/KBDocuments) lack subpanels. That means they 
            // can't be the lhs of a 1-many or many-many, or the rhs of a 
            // many-many for example

            // fix up the available cardinality options
            $relationship_type = $relationship->getType();
            if (count($lhs_subpanels) == 0 || count($rhs_subpanels) == 0) {
                unset($cardinality[MB_MANYTOMANY]);
            }
            if (count($rhs_subpanels) == 0) {
                unset($cardinality[MB_ONETOMANY]);
            }

            if (isset($definition['rhs_module']) && $definition['rhs_module'] == 'Activities') {
                $cardinality = array(MB_ONETOMANY => translate('LBL_ONETOMANY'));
            }
            //Bug 23139, Campaigns module current cannot display custom subpanels, so we need to ban it from any
            //relationships that would require a new subpanel to be shown in Campaigns.
            if (isset($definition['lhs_module']) && $definition['lhs_module'] == 'Campaigns') {
                unset($cardinality[MB_MANYTOMANY]);
                unset($cardinality[MB_ONETOMANY]);
            }
            if (isset($definition['rhs_module']) && $definition['rhs_module'] == 'Campaigns' && isset($cardinality[MB_MANYTOMANY])) {
                unset($cardinality[MB_MANYTOMANY]);
                unset($cardinality[MB_MANYTOONE]);
            }
            if (!isset($cardinality[$relationship->getType()])) {
                end($cardinality);
                $definition['relationship_type' ] = key($cardinality);
                $relationship = RelationshipFactory::newRelationship($definition);
            }

            $this->smarty->assign('is_new', true);
        } else {
            $this->smarty->assign('is_new', false);
        }

        //Remove Activities if one-to-many is not availible
        if (!isset($cardinality[MB_ONETOMANY]) && isset($relatableModules['Activities'])) {
            unset($relatableModules['Activities']);
        }


        // now enforce the relationship_only requirement - that is, only construct the underlying relationship and link fields, and not the UI, if the subpanel code will have troubles displaying the UI
        $relationships->enforceRelationshipOnly($relationship);
        $this->smarty->assign('view_module', $_REQUEST['view_module']);
        $this->smarty->assign('rel', $relationship->getDefinition());
        $this->smarty->assign('mod_strings', $GLOBALS['mod_strings']);
        $this->smarty->assign('module_key', $relationship->lhs_module);
        $this->smarty->assign('cardinality', array_keys($cardinality));
        $this->smarty->assign('translated_cardinality', $cardinality);
        $this->smarty->assign('selected_cardinality', translate($relationship->getType()));

        $relatable = array();
        foreach ($relatableModules as $name => $dummy) {
            // Clean up the relatable module name
            $relatable[$name] = $this->getModuleName($name);
        }
        unset($relatable['KBDocuments']);
        natcasesort($relatable);
        $this->smarty->assign('relatable', array_keys($relatable));
        $this->smarty->assign('translated_relatable', $relatable);
        $this->smarty->assign('rhspanels', $rhs_subpanels);
        $this->smarty->assign('lhspanels', $lhs_subpanels);
        $this->smarty->assign('selected_lang', $selected_lang);
        $this->smarty->assign('available_languages',get_languages());

        switch ( $relationship->relationship_type) {
            case MB_ONETOONE :
                break;

            case MB_ONETOMANY :
                if (empty($relationship->relationship_column_name)) {
                    $validRoleColumnFields = array();
                    foreach ($fields as $field) {
                        $validRoleColumnFields[] = $field;
                    }
                    $this->smarty->assign('relationship_role_column_enum', $validRoleColumnFields);
                }
                if (!empty($relationship->relationship_role_column_value)) {
                    $this->smarty->assign('relationship_role_column_value', $relationship->relationship_role_column_value);
                }
                break;
            case MB_MANYTOMANY :
                if (!empty($relationship->relationship_role_column_value)) {
                    $this->smarty->assign('relationship_role_column_value', $relationship->relationship_role_column_value);
                }
                break;
        }

        //see if we use the new system
        if (isset($_REQUEST['json']) && $_REQUEST[ 'json'] == 'false') {
            echo $this->smarty->fetch('modules/ModuleBuilder/tpls/studioRelationship.tpl');
        } else {
            $ac->addSection('east', $module->name . ' ' . $GLOBALS['mod_strings']['LBL_RELATIONSHIPS'], $this->smarty->fetch('modules/ModuleBuilder/tpls/studioRelationship.tpl'));
            echo $ac->getJavascript();
        }
    }

    /**
     * Gets a translated module name for both deployed and undeployed modules
     * 
     * @param string $module The module to get a translated name for
     * @return string
     */
    protected function getModuleName($module)
    {
        // If there is an object name for this (or bean name) assume this is a 
        // deployed module and return the translated string
        if (BeanFactory::getObjectName($module)) {
            return translate($module);
        }

        // If we get here, then see if there is an undeployed module based on 
        // all installed packages
        $mb = new ModuleBuilder();
        $packages = $mb->getPackageList();
        foreach ($packages as $package) {
            $mod = $mb->getPackage($package)->getModuleByFullName($module);
            if ($mod && !empty($mod->config['label'])) {
                // Since this is undeployed, there is no module "name" so rely on 
                // the label in the module config
                return $mod->config['label'];
            }
        }

        // Hmmm, what really is this? Don't know, send it back as is
        return $module;
    }
}
