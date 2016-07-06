<?php /* Smarty version 2.6.11, created on 2016-07-04 13:58:30
         compiled from include/SugarFields/Fields/File/EditView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_getjspath', 'include/SugarFields/Fields/File/EditView.tpl', 14, false),array('function', 'sugarvar', 'include/SugarFields/Fields/File/EditView.tpl', 17, false),array('modifier', 'default', 'include/SugarFields/Fields/File/EditView.tpl', 69, false),)), $this); ?>
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
<?php if (isset ( $this->_tpl_vars['vardef']['allowEapm'] ) && $this->_tpl_vars['vardef']['allowEapm']): ?>
<script type="text/javascript" src='<?php echo smarty_function_sugar_getjspath(array('file' => "cache/include/externalAPI.cache.js"), $this);?>
'></script>
<?php endif; ?>
<script type="text/javascript" src='<?php echo smarty_function_sugar_getjspath(array('file' => "include/SugarFields/Fields/File/SugarFieldFile.js"), $this);?>
'></script>
<?php ob_start();  echo smarty_function_sugarvar(array('key' => 'name'), $this); $this->_smarty_vars['capture']['idName'] = ob_get_contents();  $this->assign('idName', ob_get_contents());ob_end_clean();  if (! empty ( $this->_tpl_vars['displayParams']['idName'] )): ?>
    <?php $this->assign('idName', $this->_tpl_vars['displayParams']['idName']);  endif; ?>

<?php if (! isset ( $this->_tpl_vars['vardef']['noRemove'] ) || ! $this->_tpl_vars['vardef']['noRemove']): ?>
{if !empty(<?php echo smarty_function_sugarvar(array('key' => 'value','stringFormat' => true), $this);?>
) }
    {assign var=showRemove value=true}
{else}
    {assign var=showRemove value=false}
{/if}
<?php else: ?>
    {assign var=showRemove value=false}
<?php endif; ?>

<?php if (isset ( $this->_tpl_vars['vardef']['noChange'] ) && $this->_tpl_vars['vardef']['noChange']): ?>
{if !empty(<?php echo smarty_function_sugarvar(array('key' => 'value','stringFormat' => true), $this);?>
) }
    {assign var=showRemove value=true}
    {assign var=noChange value=true}
{else}
    {assign var=noChange value=false}
{/if}
<?php else: ?>
    {assign var=noChange value=false}
<?php endif; ?>

<input type="hidden" name="deleteAttachment" value="0">
<input type="hidden" name="<?php echo $this->_tpl_vars['idName']; ?>
" id="<?php echo $this->_tpl_vars['idName']; ?>
" value="<?php echo smarty_function_sugarvar(array('key' => 'value'), $this);?>
">
<?php if (isset ( $this->_tpl_vars['vardef']['allowEapm'] ) && $this->_tpl_vars['vardef']['allowEapm']): ?>
<input type="hidden" name="<?php echo $this->_tpl_vars['vardef']['docId']; ?>
" id="<?php echo $this->_tpl_vars['vardef']['docId']; ?>
" value="{$fields.<?php echo $this->_tpl_vars['vardef']['docId']; ?>
.value}">
<input type="hidden" name="<?php echo $this->_tpl_vars['vardef']['docUrl']; ?>
" id="<?php echo $this->_tpl_vars['vardef']['docUrl']; ?>
" value="{$fields.<?php echo $this->_tpl_vars['vardef']['docUrl']; ?>
.value}">
<input type="hidden" name="<?php echo $this->_tpl_vars['idName']; ?>
_old_doctype" id="<?php echo $this->_tpl_vars['idName']; ?>
_old_doctype" value="{$fields.<?php echo $this->_tpl_vars['vardef']['docType']; ?>
.value}">
<?php endif; ?>
<span id="<?php echo $this->_tpl_vars['idName']; ?>
_old" style="display:{if !$showRemove}none;{/if}">
  <a href="index.php?entryPoint=download&id={$fields.<?php echo $this->_tpl_vars['vardef']['fileId']; ?>
.value}&type=<?php echo $this->_tpl_vars['vardef']['linkModule']; ?>
" class="tabDetailViewDFLink" target="_blank"><?php echo smarty_function_sugarvar(array('key' => 'value'), $this);?>
</a>

<?php if (isset ( $this->_tpl_vars['vardef']['allowEapm'] ) && $this->_tpl_vars['vardef']['allowEapm']): ?>
{if isset($fields.<?php echo $this->_tpl_vars['vardef']['docType']; ?>
) && !empty($fields.<?php echo $this->_tpl_vars['vardef']['docType']; ?>
.value) && $fields.<?php echo $this->_tpl_vars['vardef']['docType']; ?>
.value != 'Sugar' && !empty($fields.<?php echo $this->_tpl_vars['vardef']['docUrl']; ?>
.value) }
{capture name=imageNameCapture assign=imageName}
{$fields.<?php echo $this->_tpl_vars['vardef']['docType']; ?>
.value}_image_inline.png
{/capture}
<a href="{$fields.<?php echo $this->_tpl_vars['vardef']['docUrl']; ?>
.value}" class="tabDetailViewDFLink" target="_blank">{sugar_getimage name=$imageName alt=$imageName other_attributes='border="0" '}</a>
{/if}
<?php endif; ?>
{if !$noChange}
<input type='button' class='button' id='remove_button' value='{$APP.LBL_REMOVE}' onclick='SUGAR.field.file.deleteAttachment("<?php echo $this->_tpl_vars['idName']; ?>
","<?php echo $this->_tpl_vars['vardef']['docType']; ?>
",this);'>
{/if}
</span>
{if !$noChange}
<span id="<?php echo $this->_tpl_vars['idName']; ?>
_new" style="display:{if $showRemove}none;{/if}">
<input type="hidden" name="<?php echo $this->_tpl_vars['idName']; ?>
_escaped">
<input id="<?php echo $this->_tpl_vars['idName']; ?>
_file" name="<?php echo $this->_tpl_vars['idName']; ?>
_file" 
type="file" title='<?php echo $this->_tpl_vars['vardef']['help']; ?>
' size="<?php echo ((is_array($_tmp=@$this->_tpl_vars['displayParams']['size'])) ? $this->_run_mod_handler('default', true, $_tmp, 30) : smarty_modifier_default($_tmp, 30)); ?>
"
<?php if (! empty ( $this->_tpl_vars['displayParams']['accesskey'] )): ?> accesskey='<?php echo $this->_tpl_vars['displayParams']['accesskey']; ?>
' <?php endif; ?> 
<?php if (! empty ( $this->_tpl_vars['vardef']['len'] )): ?>
    maxlength='<?php echo $this->_tpl_vars['vardef']['len']; ?>
'
<?php elseif (! empty ( $this->_tpl_vars['displayParams']['maxlength'] )): ?>
    maxlength="<?php echo $this->_tpl_vars['displayParams']['maxlength']; ?>
"
<?php else: ?>
    maxlength="255"
<?php endif;  echo $this->_tpl_vars['displayParams']['field']; ?>
>

<?php if (isset ( $this->_tpl_vars['vardef']['allowEapm'] ) && $this->_tpl_vars['vardef']['allowEapm']): ?>
<span id="<?php echo $this->_tpl_vars['idName']; ?>
_externalApiSelector" style="display:none;">
<br><h4 id="<?php echo $this->_tpl_vars['idName']; ?>
_externalApiLabel">
<span id="<?php echo $this->_tpl_vars['idName']; ?>
_more">{sugar_image name="advanced_search" width="8px" height="8px"}</span>
<span id="<?php echo $this->_tpl_vars['idName']; ?>
_less" style="display: none;">{sugar_image name="basic_search" width="8px" height="8px"}</span>
{$APP.LBL_SEARCH_EXTERNAL_API}</h4>
<span id="<?php echo $this->_tpl_vars['idName']; ?>
_remoteNameSpan" style="display: none;">
<input type="text" class="sqsEnabled" name="<?php echo $this->_tpl_vars['idName']; ?>
_remoteName" id="<?php echo $this->_tpl_vars['idName']; ?>
_remoteName" size="<?php echo ((is_array($_tmp=@$this->_tpl_vars['displayParams']['size'])) ? $this->_run_mod_handler('default', true, $_tmp, 30) : smarty_modifier_default($_tmp, 30)); ?>
" 
<?php if (! empty ( $this->_tpl_vars['displayParams']['accesskey'] )): ?> accesskey='<?php echo $this->_tpl_vars['displayParams']['accesskey']; ?>
' <?php endif; ?> 
<?php if (! empty ( $this->_tpl_vars['vardef']['len'] )): ?>
    maxlength='<?php echo $this->_tpl_vars['vardef']['len']; ?>
'
<?php elseif (! empty ( $this->_tpl_vars['displayParams']['maxlength'] )): ?>
    maxlength="<?php echo $this->_tpl_vars['displayParams']['maxlength']; ?>
"
<?php else: ?>
    maxlength="255"
<?php endif; ?> autocomplete="off" value="{if !empty($fields[<?php echo $this->_tpl_vars['vardef']['docId']; ?>
].value)}<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
{/if}">

<?php if (empty ( $this->_tpl_vars['displayParams']['hideButtons'] )): ?>
<span class="id-ff multiple">
<button type="button" name="<?php echo $this->_tpl_vars['idName']; ?>
_remoteSelectBtn" id="<?php echo $this->_tpl_vars['idName']; ?>
_remoteSelectBtn" tabindex="<?php echo $this->_tpl_vars['tabindex']; ?>
" title="{sugar_translate label="<?php echo $this->_tpl_vars['displayParams']['accessKeySelectTitle']; ?>
"}" class="button firstChild" value="{sugar_translate label="<?php echo $this->_tpl_vars['displayParams']['accessKeySelectLabel']; ?>
"}"
onclick="SUGAR.field.file.openPopup('<?php echo $this->_tpl_vars['idName']; ?>
'); return false;">
{sugar_getimage alt=$app_strings.LBL_ID_FF_SELECT name="id-ff-select" ext=".png" other_attributes=''}</button>
<button type="button" name="<?php echo $this->_tpl_vars['idName']; ?>
_remoteClearBtn" id="<?php echo $this->_tpl_vars['idName']; ?>
_remoteClearBtn" tabindex="<?php echo $this->_tpl_vars['tabindex']; ?>
" title="{$APP.LBL_CLEAR_BUTTON_TITLE}" class="button lastChild" value="{$APP.LBL_CLEAR_BUTTON_LABEL}" onclick="SUGAR.field.file.clearRemote('<?php echo $this->_tpl_vars['idName']; ?>
'); return false;">
{sugar_getimage name="id-ff-clear" alt=$app_strings.LBL_ID_FF_CLEAR ext=".png" other_attributes=''}
</button>
</span>
<?php endif; ?>
</span>

<div style="display: none;" id="<?php echo $this->_tpl_vars['idName']; ?>
_securityLevelBox">
  <b>{$APP.LBL_EXTERNAL_SECURITY_LEVEL}: </b>
  <select name="<?php echo $this->_tpl_vars['idName']; ?>
_securityLevel" id="<?php echo $this->_tpl_vars['idName']; ?>
_securityLevel">
  </select>
</div>
<script type="text/javascript">
YAHOO.util.Event.onDOMReady(function() {ldelim}
SUGAR.field.file.setupEapiShowHide("<?php echo $this->_tpl_vars['idName']; ?>
","<?php echo $this->_tpl_vars['vardef']['docType']; ?>
","{$form_name}");
{rdelim});

if ( typeof(sqs_objects) == 'undefined' ) {ldelim}
    sqs_objects = new Array;
{rdelim}

sqs_objects["{$form_name}_<?php echo $this->_tpl_vars['idName']; ?>
_remoteName"] = {ldelim}
"form":"{$form_name}",
"method":"externalApi",
"api":"",
"modules":["EAPM"],
"field_list":["name", "id", "url", "id"],
"populate_list":["<?php echo $this->_tpl_vars['idName']; ?>
_remoteName", "<?php echo $this->_tpl_vars['vardef']['docId']; ?>
", "<?php echo $this->_tpl_vars['vardef']['docUrl']; ?>
", "<?php echo $this->_tpl_vars['idName']; ?>
"],
"required_list":["name"],
"conditions":[],
"no_match_text":"No Match"
{rdelim};

if(typeof QSProcessedFieldsArray != 'undefined') {ldelim}
	QSProcessedFieldsArray["{$form_name}_<?php echo $this->_tpl_vars['idName']; ?>
_remoteName"] = false;
{rdelim}
{if $showRemove && strlen("<?php echo $this->_tpl_vars['vardef']['docType']; ?>
") > 0 }
document.getElementById("<?php echo $this->_tpl_vars['vardef']['docType']; ?>
").disabled = true;
{/if}
enableQS(false);
</script>
<?php endif; ?>
{else}
{* No change possible *}

<?php if (isset ( $this->_tpl_vars['vardef']['allowEapm'] ) && $this->_tpl_vars['vardef']['allowEapm']): ?>
<script type="text/javascript">
YAHOO.util.Event.onDOMReady(function() 
{ldelim}
document.getElementById("<?php echo $this->_tpl_vars['vardef']['docType']; ?>
").disabled = true;
{rdelim});
</script>
<?php endif; ?>

{/if}

<?php if (! empty ( $this->_tpl_vars['displayParams']['onchangeSetFileNameTo'] )): ?>
<script type="text/javascript">

var <?php echo $this->_tpl_vars['idName']; ?>
_setFileName = function()
{literal}
{
    var dom = YAHOO.util.Dom;
{/literal}    
    sourceElement = "<?php echo $this->_tpl_vars['idName']; ?>
_file";
    targetElement = "<?php echo $this->_tpl_vars['displayParams']['onchangeSetFileNameTo']; ?>
";
	src = new String(dom.get(sourceElement).value);
	target = new String(dom.get(targetElement).value);
{literal}
	if (target.length == 0) 
	{
		lastindex=src.lastIndexOf("/");
		if (lastindex == -1) {
			lastindex=src.lastIndexOf("\\");
		} 
		if (lastindex == -1) {
			dom.get(targetElement).value=src;
		} else {
			dom.get(targetElement).value=src.substr(++lastindex, src.length);
		}	
	}	
}
{/literal}

YAHOO.util.Event.onDOMReady(function() 
{ldelim}
if(document.getElementById("<?php echo $this->_tpl_vars['displayParams']['onchangeSetFileNameTo']; ?>
"))
{ldelim}
YAHOO.util.Event.addListener('<?php echo $this->_tpl_vars['idName']; ?>
_file', 'change', <?php echo $this->_tpl_vars['idName']; ?>
_setFileName);
YAHOO.util.Event.addListener(['<?php echo $this->_tpl_vars['idName']; ?>
_file', '<?php echo $this->_tpl_vars['vardef']['docType']; ?>
'], 'change', SUGAR.field.file.checkFileExtension,{ldelim} fileEl: '<?php echo $this->_tpl_vars['idName']; ?>
_file', targEl: '<?php echo $this->_tpl_vars['displayParams']['onchangeSetFileNameTo']; ?>
'{rdelim});
{rdelim}
{rdelim});
</script>
<?php endif; ?>

</span>