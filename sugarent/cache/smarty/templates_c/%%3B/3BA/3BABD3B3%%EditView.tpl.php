<?php /* Smarty version 2.6.11, created on 2016-07-04 13:58:30
         compiled from include/SugarFields/Fields/Relate/EditView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugarvar', 'include/SugarFields/Fields/Relate/EditView.tpl', 13, false),)), $this); ?>
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
<?php ob_start();  echo smarty_function_sugarvar(array('key' => 'name'), $this); $this->_smarty_vars['capture']['idname'] = ob_get_contents();  $this->assign('idname', ob_get_contents());ob_end_clean();  if (! empty ( $this->_tpl_vars['displayParams']['idName'] )): ?>
    <?php $this->assign('idname', $this->_tpl_vars['displayParams']['idName']);  endif; ?>
<input type="text" name="<?php echo $this->_tpl_vars['idname']; ?>
" class=<?php if (empty ( $this->_tpl_vars['displayParams']['class'] )): ?>"sqsEnabled"<?php else: ?> "<?php echo $this->_tpl_vars['displayParams']['class']; ?>
" <?php endif; ?> tabindex="<?php echo $this->_tpl_vars['tabindex']; ?>
" id="<?php echo $this->_tpl_vars['idname']; ?>
" size="<?php echo $this->_tpl_vars['displayParams']['size']; ?>
" value="<?php echo smarty_function_sugarvar(array('key' => 'value'), $this);?>
" title='<?php echo $this->_tpl_vars['vardef']['help']; ?>
' autocomplete="off" <?php echo $this->_tpl_vars['displayParams']['readOnly']; ?>
 <?php echo $this->_tpl_vars['displayParams']['field']; ?>
	<?php if (! empty ( $this->_tpl_vars['displayParams']['accesskey'] )): ?> accesskey='<?php echo $this->_tpl_vars['displayParams']['accesskey']; ?>
' <?php endif; ?> >
<input type="hidden" name="<?php if (! empty ( $this->_tpl_vars['displayParams']['idNameHidden'] )):  echo $this->_tpl_vars['displayParams']['idNameHidden'];  endif;  echo smarty_function_sugarvar(array('key' => 'id_name'), $this);?>
" 
	id="<?php if (! empty ( $this->_tpl_vars['displayParams']['idNameHidden'] )):  echo $this->_tpl_vars['displayParams']['idNameHidden'];  endif;  echo smarty_function_sugarvar(array('key' => 'id_name'), $this);?>
" 
	<?php if (! empty ( $this->_tpl_vars['vardef']['id_name'] )): ?>value="<?php echo smarty_function_sugarvar(array('memberName' => 'vardef.id_name','key' => 'value'), $this);?>
"<?php endif; ?>>
<?php if (empty ( $this->_tpl_vars['displayParams']['hideButtons'] )): ?>
<span class="id-ff multiple">
<button type="button" name="btn_<?php echo $this->_tpl_vars['idname']; ?>
" id="btn_<?php echo $this->_tpl_vars['idname']; ?>
" tabindex="<?php echo $this->_tpl_vars['tabindex']; ?>
" title="{sugar_translate label="<?php echo $this->_tpl_vars['displayParams']['accessKeySelectTitle']; ?>
"}" class="button firstChild" value="{sugar_translate label="<?php echo $this->_tpl_vars['displayParams']['accessKeySelectLabel']; ?>
"}"
onclick='open_popup(
    "<?php echo smarty_function_sugarvar(array('key' => 'module'), $this);?>
", 
	600, 
	400, 
	"<?php echo $this->_tpl_vars['displayParams']['initial_filter']; ?>
", 
	true, 
	false, 
	<?php echo $this->_tpl_vars['displayParams']['popupData']; ?>
, 
	"single", 
	true
);' <?php if (isset ( $this->_tpl_vars['displayParams']['javascript']['btn'] )):  echo $this->_tpl_vars['displayParams']['javascript']['btn'];  endif; ?>><img src="{sugar_getimagepath file="id-ff-select.png"}"></button><?php if (empty ( $this->_tpl_vars['displayParams']['selectOnly'] )): ?><button type="button" name="btn_clr_<?php echo $this->_tpl_vars['idname']; ?>
" id="btn_clr_<?php echo $this->_tpl_vars['idname']; ?>
" tabindex="<?php echo $this->_tpl_vars['tabindex']; ?>
" title="{sugar_translate label="<?php echo $this->_tpl_vars['displayParams']['accessKeyClearTitle']; ?>
"}"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '<?php echo $this->_tpl_vars['idname']; ?>
', '<?php if (! empty ( $this->_tpl_vars['displayParams']['idName'] )):  echo $this->_tpl_vars['displayParams']['idName']; ?>
_<?php endif;  echo smarty_function_sugarvar(array('key' => 'id_name'), $this);?>
');"  value="{sugar_translate label="<?php echo $this->_tpl_vars['displayParams']['accessKeyClearLabel']; ?>
"}" <?php if (isset ( $this->_tpl_vars['displayParams']['javascript']['btn_clear'] )):  echo $this->_tpl_vars['displayParams']['javascript']['btn_clear'];  endif; ?>><img src="{sugar_getimagepath file="id-ff-clear.png"}"></button>
<?php endif; ?>
</span>
<?php endif;  if (! empty ( $this->_tpl_vars['displayParams']['allowNewValue'] )): ?>
<input type="hidden" name="<?php echo $this->_tpl_vars['idname']; ?>
_allow_new_value" id="<?php echo $this->_tpl_vars['idname']; ?>
_allow_new_value" value="true">
<?php endif; ?>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['{$form_name}_<?php echo $this->_tpl_vars['idname']; ?>
']) != 'undefined'",
		enableQS
);
</script>