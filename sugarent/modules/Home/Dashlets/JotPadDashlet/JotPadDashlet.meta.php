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

 // $Id: JotPadDashlet.meta.php 54045 2010-01-26 20:25:05Z roger $

global $app_strings, $current_language;

$dashletMeta['JotPadDashlet'] = array('title'       => 'LBL_TITLE', // array index in language pack 
                                      'description' => 'LBL_DESCRIPTION', // array index in language pack 
                                      'icon'        => getJSPath('icon_JotPad_32.gif'), 
                                      'category'    => 'Tools');
?>
