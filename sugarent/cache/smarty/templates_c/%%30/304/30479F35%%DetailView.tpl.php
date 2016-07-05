<?php /* Smarty version 2.6.11, created on 2016-07-04 13:56:31
         compiled from include/SugarFields/Fields/Text/DetailView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugarvar', 'include/SugarFields/Fields/Text/DetailView.tpl', 13, false),array('function', 'sugarvar_connector', 'include/SugarFields/Fields/Text/DetailView.tpl', 17, false),)), $this); ?>
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
<span class="sugar_field" id="<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
"><?php if (empty ( $this->_tpl_vars['displayParams']['textonly'] )):  echo smarty_function_sugarvar(array('key' => 'value','htmlentitydecode' => 'true'), $this); else:  echo smarty_function_sugarvar(array('key' => 'value'), $this); endif; ?></span>
<?php if (! empty ( $this->_tpl_vars['displayParams']['enableConnectors'] )): ?>
{assign var="value" value=<?php echo smarty_function_sugarvar(array('key' => 'value','string' => 'true'), $this);?>
 }
{if !empty($value)}
<?php echo smarty_function_sugarvar_connector(array('view' => 'DetailView'), $this);?>

{/if}
<?php endif; ?>