<?php

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

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

require_once 'modules/ModuleBuilder/parsers/MetaDataFileInterface.php';

/**
 * Generic metadata file
 */
class MetaDataFile implements MetaDataFileInterface
{
    /**
     * @var string
     */
    protected $view;

    /**
     * @var string
     */
    protected $module;

    /**
     * Constructor
     *
     * @param string $view
     * @param string $module
     */
    public function __construct($view, $module)
    {
        $this->view = $view;
        $this->module = $module;
    }

    /** {@inheritDoc} */
    public function getPath()
    {
        $names = MetaDataFiles::getNames();

        //In a deployed module, we can check for a studio module with file name overrides.
        $sm = StudioModuleFactory::getStudioModule($this->module);
        foreach ($sm->sources as $file => $def) {
            if (!empty($def['view'])) {
                $names[$def['view']] = substr($file, 0, strlen($file) - 4);
            }
        }

        if (!isset($names[$this->view])) {
            sugar_die("View $this->view is not recognized");
        }

        return array('modules', $this->module, $names[$this->view]);
    }
}
