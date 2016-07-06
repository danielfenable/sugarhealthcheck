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

 * Description: view handler for step 4 of the import process
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 ********************************************************************************/

require_once('include/MVC/View/SugarView.php');
require_once('modules/Import/Importer.php');

class ImportViewStep4 extends SugarView
{
    private $currentStep;

    public function __construct($bean = null, $view_object_map = array())
    {
        parent::__construct($bean, $view_object_map);
        $this->currentStep = isset($_REQUEST['current_step']) ? ($_REQUEST['current_step'] + 1) : 1;
    }

    /**
     * @see SugarView::display()
     */
 	public function display()
    {
        global $mod_strings, $sugar_config;

        // Check to be sure we are getting an import file that is in the right place
        $uploadFile = "upload://".basename($_REQUEST['tmp_file']);
        if(!file_exists($uploadFile)) {
            trigger_error($mod_strings['LBL_CANNOT_OPEN'],E_USER_ERROR);
        }

        $currentPart = end(explode("-", $uploadFile));

        // Open the import file
        $importSource = new ImportFile(
            $uploadFile,
            $_REQUEST['custom_delimiter'],
            html_entity_decode($_REQUEST['custom_enclosure'], ENT_QUOTES),
            true,
            true,
            $sugar_config['import_max_records_per_file'] * $currentPart
        );

        //Ensure we have a valid file.
        if ( !$importSource->fileExists() )
            trigger_error($mod_strings['LBL_CANNOT_OPEN'],E_USER_ERROR);

        if (!ImportCacheFiles::ensureWritable())
        {
            trigger_error($mod_strings['LBL_ERROR_IMPORT_CACHE_NOT_WRITABLE'], E_USER_ERROR);
        }

        $importer = new Importer($importSource, $this->bean);
        $importer->import();
    }
}
