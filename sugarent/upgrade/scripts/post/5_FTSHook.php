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

/**
 * Install FTS logic hook
 */
require_once 'include/utils/file_utils.php';

class SugarUpgradeFTSHook extends UpgradeScript
{
    public $order = 5000;
    public $type = self::UPGRADE_CUSTOM;
    const HOOK_GROUP = 'fts';
    const HOOK_METHOD = 'populateIndexQueue';
    const HOOK_CLASS = 'SugarSearchEngineQueueManager';
    protected $possibleHookDefs = array(
        'Ext/LogicHooks/fts.php',
        'application/Ext/LogicHooks/logichooks.ext.php',
        'Extension/application/Ext/LogicHooks/SugarFTSHooks.php',
    );

    public function run()
    {
        $hooks = $this->getHooks();
        $hooks = array_filter($hooks, array($this, 'isFTSHook'));

        switch (count($hooks)) {
            case 1:
                return;
                break;
            case 0:
                $this->create();
                break;
            default:
                $this->removeDublicates();
                break;
        }
    }

    /**
     * Is needed logic hook
     *
     * @param array $hook
     * @return bool
     */
    protected function isFTSHook($hook)
    {
        return
            self::HOOK_GROUP == $hook[1]
            && self::HOOK_METHOD == $hook[4]
            && $this->getHookClass() == $hook[3];
    }

    /**
     * Get custom class name if that exists or original one if not for logic hook
     *
     * @return string
     */
    protected function getHookClass()
    {
        return SugarAutoLoader::customClass(self::HOOK_CLASS);
    }

    /**
     * Creating FTS logic hook
     */
    protected function create()
    {
        createFTSLogicHook();
    }

    /**
     * Removing dublicates fts logic hook
     */
    protected function removeDublicates()
    {
        foreach ($this->possibleHookDefs AS $defPath) {
            if ($defPath != $this->getMainDefFile()) {
                $this->unlink($defPath);
            }
        }
    }

    /**
     * Unlink file
     *
     * @param $file
     */
    protected function unlink($file)
    {
        if ($this->fileExists($file)){
            SugarAutoLoader::unlink($file);
        }
    }

    /**
     * Return main logic hook definition file
     *
     * @return string
     */
    protected function getMainDefFile()
    {
        foreach ($this->possibleHookDefs AS $defPath) {
            if ($this->fileExists($defPath)) {
                return $defPath;
            }
        }
    }

    /**
     * Returning all after_save logic hook
     *
     * @return array
     */
    protected function getHooks()
    {
        $hooks = LogicHook::initialize()->getHooks('application');

        return $hooks['after_save'];
    }

    /**
     * @param $defPath
     * @return bool
     */
    protected function fileExists($defPath)
    {
        return SugarAutoLoader::fileExists($defPath);
    }
}
