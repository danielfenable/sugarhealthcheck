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
/**
 * Removes files that are no longer valid for the Leads module.
 */
class SugarUpgradeProspectListRemoveFiles extends UpgradeScript
{
    public $order = 8501;
    public $type = self::UPGRADE_CORE;

    public function run()
    {
        // we only need to remove these files if the from_version is less than 7.1.5
        if (version_compare($this->from_version, '7.1.5', '<')) {
            // files to delete
            $files = array(
                'modules/ProspectLists/clients/base/api/ProspectListsApi.php',
                'include/api/help/module_addtolist_post_help.html',
            );

            $this->fileToDelete($files);
        }
    }
}
