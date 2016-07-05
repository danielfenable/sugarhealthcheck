<?php /* Smarty version 2.6.11, created on 2016-07-04 13:56:31
         compiled from include/SugarFields/Fields/Fullname/DetailView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugarvar', 'include/SugarFields/Fields/Fullname/DetailView.tpl', 13, false),array('function', 'sugarvar_connector', 'include/SugarFields/Fields/Fullname/DetailView.tpl', 25, false),)), $this); ?>
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
{if strlen(<?php echo smarty_function_sugarvar(array('key' => 'value','string' => true), $this);?>
) <= 0}
{assign var="value" value=<?php echo smarty_function_sugarvar(array('key' => 'default_value','string' => true), $this);?>
 }
{else}
{assign var="value" value=<?php echo smarty_function_sugarvar(array('key' => 'value','string' => true), $this);?>
 }
{/if}
<span id='<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
'><?php echo smarty_function_sugarvar(array('key' => 'value'), $this);?>
</span>
&nbsp;&nbsp;
<span class="id-ff">
    <a id="btn_vCardButton" title="{$APP.LBL_VCARD}" href="#">{sugar_getimage alt=$app_strings.LBL_ID_FF_VCARD name="id-ff-vcard" ext=".png"}</a>
</span>
<?php if (! empty ( $this->_tpl_vars['displayParams']['enableConnectors'] )): ?>
{if !empty($value)}
<?php echo smarty_function_sugarvar_connector(array('view' => 'DetailView'), $this);?>

{/if}
<?php endif; ?>

{literal}
<script type="text/javascript">
    $("#btn_vCardButton").click(function(e){
        {/literal}
        window.location.assign('index.php?module={$module}&action=vCard&record={$fields.id.value}&to_pdf=true');
        {literal}

        if (e.preventDefault) {
            e.preventDefault();
        }
    });
</script>
{/literal}