<?php /* Smarty version 2.6.11, created on 2016-07-04 13:58:30
         compiled from include/EditView/footer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_button', 'include/EditView/footer.tpl', 27, false),array('function', 'sugar_action_menu', 'include/EditView/footer.tpl', 36, false),)), $this); ?>
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
<script language="javascript">
    var _form_id = '{$form_id}';
    {literal}
    SUGAR.util.doWhen(function(){
        _form_id = (_form_id == '') ? 'EditView' : _form_id;
        return document.getElementById(_form_id) != null;
    }, SUGAR.themes.actionMenu);
    {/literal}
</script>
{assign var='place' value="_FOOTER"} <!-- to be used for id for buttons with custom code in def files-->
<?php if (empty ( $this->_tpl_vars['form']['button_location'] ) || $this->_tpl_vars['form']['button_location'] == 'bottom'): ?>
<div class="buttons">
<?php if (! empty ( $this->_tpl_vars['form'] ) && ! empty ( $this->_tpl_vars['form']['buttons'] )): ?>
   <?php $_from = $this->_tpl_vars['form']['buttons']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val'] => $this->_tpl_vars['button']):
?>
      <?php echo smarty_function_sugar_button(array('module' => ($this->_tpl_vars['module']),'id' => ($this->_tpl_vars['button']),'form_id' => ($this->_tpl_vars['form_id']),'view' => ($this->_tpl_vars['view']),'appendTo' => 'footer_buttons','location' => 'FOOTER'), $this);?>

   <?php endforeach; endif; unset($_from); ?>
<?php else: ?>
<?php echo smarty_function_sugar_button(array('module' => ($this->_tpl_vars['module']),'id' => 'SAVE','view' => ($this->_tpl_vars['view']),'form_id' => ($this->_tpl_vars['form_id']),'location' => 'FOOTER','appendTo' => 'footer_buttons'), $this);?>

<?php echo smarty_function_sugar_button(array('module' => ($this->_tpl_vars['module']),'id' => 'CANCEL','view' => ($this->_tpl_vars['view']),'form_id' => ($this->_tpl_vars['form_id']),'location' => 'FOOTER','appendTo' => 'footer_buttons'), $this);?>

<?php endif; ?>
<?php if (empty ( $this->_tpl_vars['form']['hideAudit'] ) || ! $this->_tpl_vars['form']['hideAudit']): ?>
<?php echo smarty_function_sugar_button(array('module' => ($this->_tpl_vars['module']),'id' => 'Audit','view' => ($this->_tpl_vars['view']),'form_id' => ($this->_tpl_vars['form_id']),'appendTo' => 'footer_buttons'), $this);?>

<?php endif; ?>
<?php echo smarty_function_sugar_action_menu(array('buttons' => $this->_tpl_vars['footer_buttons'],'class' => 'fancymenu','flat' => true), $this);?>

</div>
<?php endif; ?>
</form>
<?php if ($this->_tpl_vars['externalJSFile']): ?>
{sugar_include include=$externalJSFile}
<?php endif; ?>

{$set_focus_block}

<?php if (isset ( $this->_tpl_vars['scriptBlocks'] )): ?>
<!-- Begin Meta-Data Javascript -->
<?php echo $this->_tpl_vars['scriptBlocks']; ?>

<!-- End Meta-Data Javascript -->
<?php endif; ?>
<script>SUGAR.util.doWhen("document.getElementById('EditView') != null",
        function(){ldelim}SUGAR.util.buildAccessKeyLabels();{rdelim});
</script>