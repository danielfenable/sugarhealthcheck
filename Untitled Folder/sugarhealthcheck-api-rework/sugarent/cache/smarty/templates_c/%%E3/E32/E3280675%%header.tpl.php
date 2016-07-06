<?php /* Smarty version 2.6.11, created on 2016-07-04 13:58:41
         compiled from include/DetailView/header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_button', 'include/DetailView/header.tpl', 32, false),array('function', 'counter', 'include/DetailView/header.tpl', 36, false),array('function', 'sugar_action_menu', 'include/DetailView/header.tpl', 76, false),)), $this); ?>
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
<?php if ($this->_tpl_vars['preForm']): ?>
	<?php echo $this->_tpl_vars['preForm']; ?>

<?php endif; ?>
<script type="text/javascript" src="{sugar_getjspath file='include/EditView/Panels.js'}"></script>
<script language="javascript">
{literal}
SUGAR.util.doWhen(function(){
    return $("#contentTable").length == 0 && YAHOO.util.Event.DOMReady;
}, SUGAR.themes.actionMenu);
{/literal}
</script>


<table cellpadding="0" cellspacing="0" border="0" width="100%" id="">
<tr>
<td class="buttons" align="left" NOWRAP width="80%">
<div class="actionsContainer">
<?php if (! isset ( $this->_tpl_vars['form']['buttons'] )): ?>
    <?php echo smarty_function_sugar_button(array('module' => ($this->_tpl_vars['module']),'id' => 'EDIT','view' => ($this->_tpl_vars['view']),'form_id' => 'formDetailView','appendTo' => 'detail_header_buttons'), $this);?>

    <?php echo smarty_function_sugar_button(array('module' => ($this->_tpl_vars['module']),'id' => 'DUPLICATE','view' => 'EditView','form_id' => 'formDetailView','appendTo' => 'detail_header_buttons'), $this);?>

    <?php echo smarty_function_sugar_button(array('module' => ($this->_tpl_vars['module']),'id' => 'DELETE','view' => ($this->_tpl_vars['view']),'form_id' => 'formDetailView','appendTo' => 'detail_header_buttons'), $this);?>

<?php else: ?>
    <?php echo smarty_function_counter(array('assign' => 'num_buttons','start' => 0,'print' => false), $this);?>

    <?php $_from = $this->_tpl_vars['form']['buttons']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val'] => $this->_tpl_vars['button']):
?>
        <?php if (! is_array ( $this->_tpl_vars['button'] ) && in_array ( $this->_tpl_vars['button'] , $this->_tpl_vars['built_in_buttons'] )): ?>
        <?php echo smarty_function_counter(array('print' => false), $this);?>

        <?php echo smarty_function_sugar_button(array('module' => ($this->_tpl_vars['module']),'id' => ($this->_tpl_vars['button']),'fields' => ($this->_tpl_vars['fields']),'view' => 'EditView','form_id' => 'formDetailView','appendTo' => 'detail_header_buttons'), $this);?>

        <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?>
    <?php if (count ( $this->_tpl_vars['form']['buttons'] ) > $this->_tpl_vars['num_buttons']): ?>
        <?php $_from = $this->_tpl_vars['form']['buttons']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val'] => $this->_tpl_vars['button']):
?>
            <?php if (is_array ( $this->_tpl_vars['button'] ) && $this->_tpl_vars['button']['customCode']): ?>
                <?php echo smarty_function_sugar_button(array('module' => ($this->_tpl_vars['module']),'id' => ($this->_tpl_vars['button']),'view' => 'EditView','form_id' => 'formDetailView','appendTo' => 'detail_header_buttons'), $this);?>

            <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?>
    <?php endif; ?>
    <?php echo smarty_function_sugar_button(array('module' => ($this->_tpl_vars['module']),'id' => 'PDFVIEW','view' => ($this->_tpl_vars['view']),'form_id' => 'formDetailView','appendTo' => 'detail_header_buttons'), $this);?>

    <?php echo smarty_function_sugar_button(array('module' => ($this->_tpl_vars['module']),'id' => 'PDFEMAIL','view' => ($this->_tpl_vars['view']),'form_id' => 'formDetailView','appendTo' => 'detail_header_buttons'), $this);?>

<?php endif; ?>

<?php if (empty ( $this->_tpl_vars['form']['hideAudit'] ) || ! $this->_tpl_vars['form']['hideAudit']): ?>
    <?php echo smarty_function_sugar_button(array('module' => ($this->_tpl_vars['module']),'id' => 'Audit','view' => 'EditView','form_id' => 'formDetailView','appendTo' => 'detail_header_buttons'), $this);?>

<?php endif; ?>

<form action="index.php" method="post" name="DetailView" id="formDetailView">
{sugar_csrf_form_token}
    <input type="hidden" name="module" value="{$module}">
    <input type="hidden" name="record" value="{$fields.id.value}">
    <input type="hidden" name="return_action">
    <input type="hidden" name="return_module">
    <input type="hidden" name="return_id">
    <input type="hidden" name="module_tab">
    <input type="hidden" name="isDuplicate" value="false">
    <input type="hidden" name="offset" value="{$offset}">
    <input type="hidden" name="action" value="EditView">
    <input type="hidden" name="sugar_body_only">
<?php if (isset ( $this->_tpl_vars['form']['hidden'] )):  $_from = $this->_tpl_vars['form']['hidden']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field']):
 echo $this->_tpl_vars['field']; ?>

<?php endforeach; endif; unset($_from);  endif; ?>
</form>
<?php echo smarty_function_sugar_action_menu(array('id' => 'detail_header_action_menu','buttons' => $this->_tpl_vars['detail_header_buttons'],'class' => 'fancymenu'), $this);?>


</div>

</td>


<td align="right" width="20%">{$ADMIN_EDIT}
	<?php if ($this->_tpl_vars['panelCount'] == 0): ?>
	    		<?php if ($this->_tpl_vars['SHOW_VCR_CONTROL']): ?>
			{$PAGINATION}
		<?php endif; ?>
		<?php echo smarty_function_counter(array('name' => 'panelCount','print' => false), $this);?>

	<?php endif; ?>
</td>
<?php if (! empty ( $this->_tpl_vars['form'] ) && isset ( $this->_tpl_vars['form']['links'] )): ?>
	<td align="right" width="10%">&nbsp;</td>
	<td align="right" width="100%" NOWRAP class="buttons">
        <div class="actionsContainer">
            <?php $_from = $this->_tpl_vars['form']['links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['link']):
?>
                <?php echo $this->_tpl_vars['link']; ?>
&nbsp;
            <?php endforeach; endif; unset($_from); ?>
        </div>
	</td>
<?php endif; ?>
</tr>
</table>