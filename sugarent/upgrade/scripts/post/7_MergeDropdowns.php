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

require_once 'modules/UpgradeWizard/SugarMerge/DropdownMerger.php';

/**
 * Merges all customized dropdown lists with their respective core dropdown lists. Uses data from the
 * {@link SugarUpgradeLoadDropdowns} pre-upgrade script.
 */
class SugarUpgradeMergeDropdowns extends UpgradeScript
{
    public $order = 7999;
    public $type = self::UPGRADE_CUSTOM;
    public $version = '7.6.0';

    protected $dropdownHelper = null;
    protected $dropdownParser = null;

    /**
     * Returns instance of ParserDropDown
     * @return ParserDropDown
     */
    public function getDropdownParser()
    {
        if (is_null($this->dropdownParser)) {
            if (!class_exists('ParserDropDown')) {
                require_once 'modules/ModuleBuilder/parsers/parser.dropdown.php';
            }
            $this->dropdownParser = new ParserDropDown();
        }
        return $this->dropdownParser;
    }

    /**
     * Returns instance of UpgradeDropdownsHelper
     * @return UpgradeDropdownsHelper
     */
    public function getDropdownHelper()
    {
        if (is_null($this->dropdownHelper)) {
            if (!class_exists('UpgradeDropdownsHelper')) {
                // use the version in the new source directory
                $importFile = "{$this->context['new_source_dir']}/upgrade/UpgradeDropdownsHelper.php";
                require_once $importFile;
            }
            $this->dropdownHelper = new UpgradeDropdownsHelper();
        }
        return $this->dropdownHelper;
    }

    /**
     * {@inheritdoc}
     *
     * This upgrader should always be run since changes to the core dropdown lists can occur in any version.
     *
     * Merges all customized dropdown lists with their respective core dropdown lists and saves the result to the
     * appropriate i18n translation file in the custom directory.
     *
     * @see SugarUpgradeLoadDropdowns::run
     * @see ParserDropDown::saveDropDown
     */
    public function run()
    {
        if (empty($this->context['new_source_dir'])) {
            $this->log('**** Skipped Dropdown Lists Merge **** The new source directory was not found.');
            return;
        }

        if (empty($this->upgrader->state['dropdowns_to_merge'])) {
            $this->log('**** Skipped Dropdown Lists Merge **** There are no dropdown lists to merge.');
            return;
        }


        $merger = new DropdownMerger();
        $helper = $this->getDropdownHelper();
        $parser = $this->getDropdownParser();

        foreach ($this->upgrader->state['dropdowns_to_merge'] as $language => $dropdowns) {
            $new = $helper->getDropdowns("include/language/{$language}.lang.php");

            foreach ($dropdowns['custom'] as $name => $customOptions) {
                if (!isset($new[$name])) {
                    continue;
                }

                $oldOptions = array();
                $newOptions = $new[$name];

                if (isset($dropdowns['old']) && isset($dropdowns['old'][$name])) {
                    $oldOptions = $dropdowns['old'][$name];
                }

                $listValue = $this->prepareForSave($merger->merge($oldOptions, $newOptions, $customOptions));

                $_REQUEST['dropdown_lang'] = $language;
                $_REQUEST['view_package'] = 'studio';
                $params = array(
                    'dropdown_lang' => $language,
                    'dropdown_name' => $name,
                    'list_value' => $listValue,
                    'skip_sync' => true,
                    'view_package' => 'studio',
                    'use_push' => in_array($name, $helper->getDropdownsToPush()),
                    'skipSaveExemptDropdowns' => true,
                );

                $parser->saveDropDown($params);
                $this->log("{$name} has been merged for {$language}");
            }
        }
    }

    /**
     * {@link ParserDropDown::saveDropDown} expects the dropdown options to be in JSON format, like the following:
     * <code>
     * <?php
     * $options = '[["foo","Foo"],["bar","Bar"]]';
     * </code>
     *
     * This method takes the dropdown options as a standard hash and converts it to the expected JSON.
     *
     * @param array $dropdown
     * @return string
     */
    protected function prepareForSave($dropdown = array())
    {
        $json = getJSONobj();
        $pairs = array();

        foreach ($dropdown as $key => $value) {
            $pairs[] = array($key, $value);
        }

        return $json->encode($pairs);
    }
}
