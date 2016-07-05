<?php /* Smarty version 2.6.11, created on 2016-07-04 13:56:31
         compiled from include/SugarFields/Fields/Relate/DetailView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugarvar', 'include/SugarFields/Fields/Relate/DetailView.tpl', 14, false),array('function', 'sugarvar_connector', 'include/SugarFields/Fields/Relate/DetailView.tpl', 24, false),)), $this); ?>
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
<?php if (! $this->_tpl_vars['nolink'] && ! empty ( $this->_tpl_vars['vardef']['id_name'] )): ?> 
{if !empty(<?php echo smarty_function_sugarvar(array('memberName' => 'vardef.id_name','key' => 'value','string' => 'true'), $this);?>
)}
{capture assign="detail_url"}index.php?module=<?php echo $this->_tpl_vars['vardef']['module']; ?>
&action=DetailView&record=<?php echo smarty_function_sugarvar(array('memberName' => 'vardef.id_name','key' => 'value'), $this);?>
{/capture}
<a href="{sugar_ajax_url url=$detail_url}">{/if}
<?php endif; ?>
<span id="<?php echo $this->_tpl_vars['vardef']['id_name']; ?>
" class="sugar_field" data-id-value="<?php echo smarty_function_sugarvar(array('memberName' => 'vardef.id_name','key' => 'value'), $this);?>
"><?php echo smarty_function_sugarvar(array('key' => 'value'), $this);?>
</span>
<?php if (! $this->_tpl_vars['nolink'] && ! empty ( $this->_tpl_vars['vardef']['id_name'] )): ?>
{if !empty(<?php echo smarty_function_sugarvar(array('memberName' => 'vardef.id_name','key' => 'value','string' => 'true'), $this);?>
)}</a>{/if}
<?php endif;  if (! empty ( $this->_tpl_vars['displayParams']['enableConnectors'] ) && ! empty ( $this->_tpl_vars['vardef']['id_name'] )): ?>
{if !empty(<?php echo smarty_function_sugarvar(array('memberName' => 'vardef.id_name','key' => 'value','string' => 'true'), $this);?>
)}
<?php echo smarty_function_sugarvar_connector(array('view' => 'DetailView'), $this);?>
 
{/if}
<?php endif; ?>