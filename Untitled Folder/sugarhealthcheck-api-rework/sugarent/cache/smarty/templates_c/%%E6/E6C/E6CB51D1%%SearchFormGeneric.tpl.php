<?php /* Smarty version 2.6.11, created on 2016-07-04 13:58:28
         compiled from include/SearchForm/tpls/SearchFormGeneric.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'math', 'include/SearchForm/tpls/SearchFormGeneric.tpl', 43, false),array('function', 'sugar_field', 'include/SearchForm/tpls/SearchFormGeneric.tpl', 71, false),array('function', 'sugar_button', 'include/SearchForm/tpls/SearchFormGeneric.tpl', 85, false),)), $this); ?>
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
{if !isset($templateMeta.maxColumnsBasic)}
	{assign var="basicMaxColumns" value=$templateMeta.maxColumns}
{else}
    {assign var="basicMaxColumns" value=$templateMeta.maxColumnsBasic}
{/if}
<script>
{literal}
	$(function() {
	var $dialog = $('<div></div>')
		.html(SUGAR.language.get('app_strings', 'LBL_SEARCH_HELP_TEXT'))
		.dialog({
			autoOpen: false,
			title: SUGAR.language.get('app_strings', 'LBL_HELP'),
			width: 700
		});
		
		$('#filterHelp').click(function() {
		$dialog.dialog('open');
		// prevent the default action, e.g., following a link
	});
	
	});
{/literal}
</script>

<table width="100%" cellspacing="0" cellpadding="0" border="0">
<tr>
<?php $this->assign('accesskeycount', 0); ?>  <?php $this->assign('ACCKEY', '');  $_from = $this->_tpl_vars['formData']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['colIteration'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['colIteration']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['col'] => $this->_tpl_vars['colData']):
        $this->_foreach['colIteration']['iteration']++;
?>
    <?php echo smarty_function_math(array('assign' => 'accesskeycount','equation' => ($this->_tpl_vars['accesskeycount'])." + 1"), $this);?>

    <?php if ($this->_tpl_vars['accesskeycount'] == 1): ?> <?php $this->assign('ACCKEY', $this->_tpl_vars['APP']['LBL_FIRST_INPUT_SEARCH_KEY']); ?> <?php else: ?> <?php $this->assign('ACCKEY', ''); ?> <?php endif; ?>

	<?php if (! empty ( $this->_tpl_vars['colData']['field']['name'] )): ?>
	
		{if $fields.<?php echo $this->_tpl_vars['colData']['field']['name']; ?>
.acl > 0}
	<?php endif; ?>
	{counter assign=index}
	{math equation="left % right"
   		  left=$index
          right=$basicMaxColumns
          assign=modVal
    }
	{if ($index % $basicMaxColumns == 1 && $index != 1)}
		</tr><tr>
	{/if}
	
	<td scope="row" nowrap="nowrap" width='1%' >
	<?php if (isset ( $this->_tpl_vars['colData']['field']['label'] )): ?>	
		<label for='<?php echo $this->_tpl_vars['colData']['field']['name']; ?>
' >{sugar_translate label='<?php echo $this->_tpl_vars['colData']['field']['label']; ?>
' module='<?php echo $this->_tpl_vars['module']; ?>
'}</label>
    <?php elseif (isset ( $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']] )): ?>
		<label for='<?php echo $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']]['name']; ?>
'> {sugar_translate label='<?php echo $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']]['vname']; ?>
' module='<?php echo $this->_tpl_vars['module']; ?>
'}
	<?php endif; ?>
	</td>

	
	<td  nowrap="nowrap" width='1%'>
	<?php if ($this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']]): ?>
		<?php echo smarty_function_sugar_field(array('parentFieldArray' => 'fields','vardef' => $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']],'accesskey' => $this->_tpl_vars['ACCKEY'],'displayType' => 'searchView','displayParams' => $this->_tpl_vars['colData']['field']['displayParams'],'typeOverride' => $this->_tpl_vars['colData']['field']['type'],'formName' => $this->_tpl_vars['form_name']), $this);?>

   	<?php endif; ?>
		<?php if (! empty ( $this->_tpl_vars['colData']['field']['name'] )): ?>
			{/if}
		<?php endif; ?>
   	</td>
<?php endforeach; endif; unset($_from); ?>
    {if $formData|@count >= $basicMaxColumns+1}
    </tr>
    <tr>
	<td colspan="{$searchTableColumnCount}">
    {else}
	<td class="sumbitButtons">
    {/if}
        <?php echo smarty_function_sugar_button(array('module' => ($this->_tpl_vars['module']),'id' => 'search','view' => 'searchView'), $this);?>

	    <input tabindex='2' title='{$APP.LBL_CLEAR_BUTTON_TITLE}' onclick='SUGAR.searchForm.clear_form(this.form); return false;' class='button' type='button' name='clear' id='search_form_clear' value='{$APP.LBL_CLEAR_BUTTON_LABEL}'/>
        {if $HAS_ADVANCED_SEARCH}
	    &nbsp;&nbsp;<a id="advanced_search_link" onclick="SUGAR.searchForm.searchFormSelect('{$module}|advanced_search','{$module}|basic_search')" href="javascript:void(0);" accesskey="{$APP.LBL_ADV_SEARCH_LNK_KEY}" >{$APP.LNK_ADVANCED_SEARCH}</a>
	    {/if}
    </td>
	<td class="helpIcon" width="*"><img alt="Help" border='0' id="filterHelp" src='{sugar_getimagepath file="help-dashlet.gif"}'></td>
	</tr>
</table>