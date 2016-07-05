<?php /* Smarty version 2.6.11, created on 2016-07-04 13:56:31
         compiled from include/SugarFields/Fields/Image/DetailView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugarvar', 'include/SugarFields/Fields/Image/DetailView.tpl', 13, false),)), $this); ?>
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
<input type="hidden" class="sugar_field" id="<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
" value="<?php echo smarty_function_sugarvar(array('key' => 'value','string' => true), $this);?>
">
{if isset($displayParams.link)}
<a href='<?php echo $this->_tpl_vars['displayParams']['link']; ?>
'>
{else}
<a href="javascript:SUGAR.image.lightbox(YAHOO.util.Dom.get('img_<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
').src)">
{/if}
<img
	id="img_<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
" 
	name="img_<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
" 
	<?php if (! empty ( $this->_tpl_vars['vardef']['calculated'] )): ?>
	   src='<?php echo smarty_function_sugarvar(array('key' => 'value'), $this);?>
'
	<?php else: ?>
	{if empty(<?php echo smarty_function_sugarvar(array('key' => 'value','string' => true), $this);?>
)}
	   src='' 	
	{else}
	   src='index.php?entryPoint=download&id=<?php echo smarty_function_sugarvar(array('key' => 'value'), $this);?>
&type=SugarFieldImage&isTempFile=1'
	{/if}
	<?php endif; ?>
	style='
		{if empty(<?php echo smarty_function_sugarvar(array('key' => 'value','string' => true), $this);?>
)}
			display:	none;
		{/if}
		{if "<?php echo $this->_tpl_vars['vardef']['border']; ?>
" eq ""}
			border: 0; 
		{else}
			border: 1px solid black; 
		{/if}
		{if "<?php echo $this->_tpl_vars['vardef']['width']; ?>
" eq ""}
			width: auto;
		{else}
			width: <?php echo $this->_tpl_vars['vardef']['width']; ?>
px;
		{/if}
		{if "<?php echo $this->_tpl_vars['vardef']['height']; ?>
" eq ""}
			height: auto;
		{else}
			height: <?php echo $this->_tpl_vars['vardef']['height']; ?>
px;
		{/if}
		'		
>
</a>