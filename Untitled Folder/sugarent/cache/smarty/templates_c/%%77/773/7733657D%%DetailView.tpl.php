<?php /* Smarty version 2.6.11, created on 2016-07-04 13:58:30
         compiled from include/SugarFields/Fields/Datetime/DetailView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugarvar', 'include/SugarFields/Fields/Datetime/DetailView.tpl', 17, false),array('function', 'sugarvar_connector', 'include/SugarFields/Fields/Datetime/DetailView.tpl', 34, false),)), $this); ?>
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
{*
    check to see if 'date_formatted_value' has been added to the vardefs, and use it if it has, otherwise use the normal sugarvar function
*}

{if strlen(<?php echo smarty_function_sugarvar(array('key' => 'value','string' => true), $this);?>
) <= 0}
    {assign var="value" value=<?php echo smarty_function_sugarvar(array('key' => 'default_value','string' => true), $this);?>
 }
{else}
    {assign var="value" value=<?php echo smarty_function_sugarvar(array('key' => 'value','string' => true), $this);?>
 }
{/if}



<span class="sugar_field" id="<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
">{$value}</span>
<?php if (! empty ( $this->_tpl_vars['vardef']['group'] ) && $this->_tpl_vars['vardef']['group'] == 'created_by_name'): ?>
    {$APP.LBL_BY} {$fields.created_by_name.value}
<?php elseif (! empty ( $this->_tpl_vars['vardef']['group'] ) && $this->_tpl_vars['vardef']['group'] == 'modified_by_name'): ?>
    {$APP.LBL_BY} {$fields.modified_by_name.value}
<?php endif; ?>

<?php if (! empty ( $this->_tpl_vars['displayParams']['enableConnectors'] )): ?>
{if !empty($value)}
<?php echo smarty_function_sugarvar_connector(array('view' => 'DetailView'), $this);?>

{/if}
<?php endif; ?>