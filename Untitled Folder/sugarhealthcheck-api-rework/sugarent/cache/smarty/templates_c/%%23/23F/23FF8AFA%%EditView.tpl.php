<?php /* Smarty version 2.6.11, created on 2016-07-04 13:58:30
         compiled from include/SugarFields/Fields/Text/EditView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugarvar', 'include/SugarFields/Fields/Text/EditView.tpl', 13, false),)), $this); ?>
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
{if empty(<?php echo smarty_function_sugarvar(array('key' => 'value','string' => true), $this);?>
)}
{assign var="value" value=<?php echo smarty_function_sugarvar(array('key' => 'default_value','string' => true), $this);?>
 }
{else}
{assign var="value" value=<?php echo smarty_function_sugarvar(array('key' => 'value','string' => true), $this);?>
 }
{/if}  


<?php ob_start();  echo smarty_function_sugarvar(array('key' => 'name'), $this); $this->_smarty_vars['capture']['idname'] = ob_get_contents();  $this->assign('idname', ob_get_contents());ob_end_clean();  if (! empty ( $this->_tpl_vars['displayParams']['idName'] )): ?>
    <?php $this->assign('idname', $this->_tpl_vars['displayParams']['idName']);  endif; ?>


<textarea  id='<?php echo $this->_tpl_vars['idname']; ?>
' name='<?php echo $this->_tpl_vars['idname']; ?>
'
rows="<?php if (! empty ( $this->_tpl_vars['displayParams']['rows'] )):  echo $this->_tpl_vars['displayParams']['rows'];  elseif (! empty ( $this->_tpl_vars['vardef']['rows'] )):  echo $this->_tpl_vars['vardef']['rows'];  else:  echo 4;  endif; ?>" 
cols="<?php if (! empty ( $this->_tpl_vars['displayParams']['cols'] )):  echo $this->_tpl_vars['displayParams']['cols'];  elseif (! empty ( $this->_tpl_vars['vardef']['cols'] )):  echo $this->_tpl_vars['vardef']['cols'];  else:  echo 60;  endif; ?>" 
title='<?php echo $this->_tpl_vars['vardef']['help']; ?>
' tabindex="<?php echo $this->_tpl_vars['tabindex']; ?>
" <?php echo $this->_tpl_vars['displayParams']['field']; ?>

<?php if (! empty ( $this->_tpl_vars['displayParams']['accesskey'] )): ?> accesskey='<?php echo $this->_tpl_vars['displayParams']['accesskey']; ?>
' <?php endif; ?> >{$value}</textarea>


