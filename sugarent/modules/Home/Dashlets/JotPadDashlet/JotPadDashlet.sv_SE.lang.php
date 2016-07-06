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
















if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');




















$defaultText = 
<<<EOQ
Welcome to Sugar 5.0<br /><br />

New features include:<br />
* Multiple homepages with customizable dashlets<br />
* Improved Dashboards and Charts<br />
* New Email Client for smoother communication<br />
* Module Builder to extend your SugarCRM deployment<br />
* Improved Sugar Studio and Access Control Features<br /><br />

For more information on getting started, please visit Sugar University.
EOQ
;


$dashletStrings['JotPadDashlet'] = array('LBL_TITLE'            => 'JotPad',
                                         'LBL_DESCRIPTION'      => 'En dashlet för dina anteckningar',
                                         'LBL_SAVING'           => 'Sparar JotPad ...',
                                         'LBL_SAVED'            => 'Sparat',
                                         'LBL_CONFIGURE_TITLE'  => 'Titel',
                                         'LBL_CONFIGURE_HEIGHT' => 'Höjd (1 - 300)',
                                         'LBL_DBLCLICK_HELP'    => 'Dubbelklicka nedan för att editera.',
                                         'LBL_DEFAULT_TEXT'     => $defaultText,
);
?>