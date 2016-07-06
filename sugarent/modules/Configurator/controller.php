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

require_once('include/MVC/Controller/SugarController.php');
class ConfiguratorController extends SugarController
{
    /**
     * Go to the font manager view
     */
    function action_FontManager(){
        global $current_user;
        if(!is_admin($current_user)){
            sugar_die($GLOBALS['app_strings']['ERR_NOT_ADMIN']);
        }
        $this->view = 'fontmanager';
    }

    /**
     * Delete a font and go back to the font manager
     */
    function action_deleteFont(){
        global $current_user;
        if(!is_admin($current_user)){
            sugar_die($GLOBALS['app_strings']['ERR_NOT_ADMIN']);
        }
        $urlSTR = 'index.php?module=Configurator&action=FontManager';
        if(!empty($_REQUEST['filename'])){
            require_once('include/Sugarpdf/FontManager.php');
            $fontManager = new FontManager();
            $fontManager->filename = $_REQUEST['filename'];
            if(!$fontManager->deleteFont()){
                $urlSTR .='&error='.urlencode(implode("<br>",$fontManager->errors));
            }
        }
        header("Location: $urlSTR");
    }

    function action_listview(){
        global $current_user;
        if(!is_admin($current_user)){
            sugar_die($GLOBALS['app_strings']['ERR_NOT_ADMIN']);
        }
        $this->view = 'edit';
    }
    /**
     * Show the addFont view
     */
    function action_addFontView(){
        global $current_user;
        if(!is_admin($current_user)){
            sugar_die($GLOBALS['app_strings']['ERR_NOT_ADMIN']);
        }
        $this->view = 'addFontView';
    }
    /**
     * Add a new font and show the addFontResult view
     */
    function action_addFont(){
        global $current_user, $mod_strings;
        if(!is_admin($current_user)){
            sugar_die($GLOBALS['app_strings']['ERR_NOT_ADMIN']);
        }
        if(empty($_FILES['pdf_metric_file']['name'])){
            $this->errors[]=translate("ERR_MISSING_REQUIRED_FIELDS")." ".translate("LBL_PDF_METRIC_FILE", "Configurator");
            $this->view = 'addFontView';
            return;
        }
        if(empty($_FILES['pdf_font_file']['name'])){
            $this->errors[]=translate("ERR_MISSING_REQUIRED_FIELDS")." ".translate("LBL_PDF_FONT_FILE", "Configurator");
            $this->view = 'addFontView';
            return;
        }
        $path_info = pathinfo($_FILES['pdf_font_file']['name']);
        $path_info_metric = pathinfo($_FILES['pdf_metric_file']['name']);
        if(($path_info_metric['extension']!="afm" && $path_info_metric['extension']!="ufm") ||
        ($path_info['extension']!="ttf" && $path_info['extension']!="otf" && $path_info['extension']!="pfb")){
            $this->errors[]=translate("JS_ALERT_PDF_WRONG_EXTENSION", "Configurator");
            $this->view = 'addFontView';
            return;
        }

        if($_REQUEST['pdf_embedded'] == "false"){
            if(empty($_REQUEST['pdf_cidinfo'])){
                $this->errors[]=translate("ERR_MISSING_CIDINFO", "Configurator");
                $this->view = 'addFontView';
                return;
            }
            $_REQUEST['pdf_embedded']=false;
        }else{
            $_REQUEST['pdf_embedded']=true;
            $_REQUEST['pdf_cidinfo']="";
        }
        $this->view = 'addFontResult';
    }
    function action_saveadminwizard()
    {
        global $current_user;
        if(!is_admin($current_user)){
            sugar_die($GLOBALS['app_strings']['ERR_NOT_ADMIN']);
        }
        $focus = Administration::getSettings();
        $focus->saveConfig();

        $configurator = new Configurator();
        $configurator->populateFromPost();
        $configurator->handleOverride();
        $configurator->parseLoggerSettings();
        $configurator->saveConfig();

        // Bug 37310 - Delete any existing currency that matches the one we've just set the default to during the admin wizard
        $currency = BeanFactory::getBean('Currencies');
        $currency->retrieve_id_by_name($_REQUEST['default_currency_name']);
        if ( !empty($currency->id)
                && $currency->symbol == $_REQUEST['default_currency_symbol']
                && $currency->iso4217 == $_REQUEST['default_currency_iso4217'] ) {
            $currency->deleted = 1;
            $currency->save();
        }

        SugarApplication::redirect('index.php?module=Users&action=Wizard&skipwelcome=1');
    }

    function action_saveconfig()
    {
        global $current_user;
        if(!is_admin($current_user)){
            sugar_die($GLOBALS['app_strings']['ERR_NOT_ADMIN']);
        }
        $configurator = new Configurator();

        $focus = BeanFactory::getBean('Administration');
        $focus->saveConfig();

        $configurator->saveConfig();

        // Clear the Contacts file b/c portal flag affects rendering
        if (file_exists($cachedfile = sugar_cached('modules/Contacts/EditView.tpl')))
           unlink($cachedfile);

        echo '<script type="text/javascript">';
        echo 'parent && parent.SUGAR && parent.SUGAR.App && parent.SUGAR.App.sync();';
        echo 'window.location.href = "index.php?module=Administration&action=index";';
        echo '</script>';
        exit();
    }

    function action_detail()
    {
        global $current_user;
        if(!is_admin($current_user)){
            sugar_die($GLOBALS['app_strings']['ERR_NOT_ADMIN']);
        }
        $this->view = 'edit';
    }

    /**
     * Define correct view for action
     */
    function action_historyContactsEmails()
    {
        $this->view = 'historyContactsEmails';
    }

    /**
     * Generates custom field_defs for selected fields
     */
    function action_historyContactsEmailsSave()
    {
        if (!empty($_POST['modules']) && is_array($_POST['modules'])) {

            $modules = array();
            foreach ($_POST['modules'] as $moduleName => $enabled) {
                $bean = BeanFactory::getBean($moduleName);

                if (!($bean instanceof SugarBean)) {
                    continue;
                }
                if (empty($bean->field_defs)) {
                    continue;
                }

                // these are the specific modules we care about
                if (!in_array($moduleName, array('Opportunities','Accounts','Cases'))) {
                    continue;
                }

                $bean->load_relationships();
                foreach ($bean->get_linked_fields() as $fieldName => $fieldDef) {
                    if ($bean->$fieldName->getRelatedModuleName() == 'Contacts') {
                        $modules[$moduleName] = !$enabled;
                        break;
                    }
                }
            }

            $configurator = new Configurator();
            $configurator->config['hide_history_contacts_emails'] = $modules;
            $configurator->handleOverride();
        }

        SugarApplication::redirect('index.php?module=Administration&action=index');
    }
}
