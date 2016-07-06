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

 // $Id: MyPipelineBySalesStageDashlet.meta.php 28882 2007-10-26 00:51:46 +0000 (Fri, 26 Oct 2007) awu $

global $app_strings, $current_language;

$dashletMeta['PipelineBySalesStageDashlet'] = array('title'       => 'LBL_TITLE',  
                                                      'description' => 'LBL_TITLE', 
                                                      'module'        => 'Opportunities', 
	                                                  'icon'		  => getJSPath('icon_Charts_Funnel_32.gif'),
                                                      'category'    => 'Charts');
?>
