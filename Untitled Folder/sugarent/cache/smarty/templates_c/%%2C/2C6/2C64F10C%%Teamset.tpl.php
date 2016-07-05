<?php /* Smarty version 2.6.11, created on 2016-07-04 13:58:30
         compiled from include/SugarFields/Fields/Teamset/Teamset.tpl */ ?>
{*
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
*}
{sugarvar_teamset parentFieldArray=<?php echo $this->_tpl_vars['parentFieldArray']; ?>
 vardef=$fields.team_name tabindex='<?php echo $this->_tpl_vars['tabindex']; ?>
' display='<?php echo $this->_tpl_vars['displayParams']['display']; ?>
' labelSpan='<?php echo $this->_tpl_vars['displayParams']['labelSpan']; ?>
' fieldSpan='<?php echo $this->_tpl_vars['displayParams']['fieldSpan']; ?>
' formName='<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
' tabindex=1 displayType='<?php echo $this->_tpl_vars['renderView']; ?>
' <?php if (! empty ( $this->_tpl_vars['displayParams']['idName'] )): ?> idName='<?php echo $this->_tpl_vars['displayParams']['idName']; ?>
'<?php endif; ?> 	<?php if (! empty ( $this->_tpl_vars['displayParams']['accesskey'] )): ?> accesskey='<?php echo $this->_tpl_vars['displayParams']['accesskey']; ?>
' <?php endif; ?> }