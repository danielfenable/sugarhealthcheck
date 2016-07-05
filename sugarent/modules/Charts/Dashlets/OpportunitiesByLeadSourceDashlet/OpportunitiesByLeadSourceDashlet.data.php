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

 // $Id: OpportunitiesByLeadSourceDashlet.data.php 16280 2006-08-22 19:47:48Z awu $

$dashletData['OpportunitiesByLeadSourceDashlet']['searchFields'] = array(
        'pbls_lead_sources' => array(
                'name'  => 'pbls_lead_sources',
                'vname' => 'LBL_LEAD_SOURCES',
                'type'  => 'enum',
            ),
        'pbls_ids' => array(
                'name'  => 'pbls_ids',
                'vname' => 'LBL_USERS',
                'type'  => 'user_name',
            ),
        );
?>
