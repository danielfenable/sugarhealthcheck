

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
<input type="hidden" name="old_id" value="{$fields.document_revision_id.value}">
</form>
<ul id="detail_header_action_menu" class="clickMenu fancymenu" name ><li class="sugar_action_button" >{if $bean->aclAccess("edit")}<input title="{$APP.LBL_EDIT_BUTTON_TITLE}" accessKey="{$APP.LBL_EDIT_BUTTON_KEY}" class="button primary" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='Documents'; _form.return_action.value='DetailView'; _form.return_id.value='{$id}'; _form.action.value='EditView';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Edit" id="edit_button" value="{$APP.LBL_EDIT_BUTTON_LABEL}">{/if} <ul id class="subnav" ><li>{if $bean->aclAccess("edit")}<input title="{$APP.LBL_DUPLICATE_BUTTON_TITLE}" accessKey="{$APP.LBL_DUPLICATE_BUTTON_KEY}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='Documents'; _form.return_action.value='DetailView'; _form.isDuplicate.value=true; _form.action.value='EditView'; _form.return_id.value='{$id}';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Duplicate" value="{$APP.LBL_DUPLICATE_BUTTON_LABEL}" id="duplicate_button">{/if} </li><li>{if $bean->aclAccess("delete")}<input title="{$APP.LBL_DELETE_BUTTON_TITLE}" accessKey="{$APP.LBL_DELETE_BUTTON_KEY}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='Documents'; _form.return_action.value='ListView'; _form.action.value='Delete'; if(confirm('{$APP.NTC_DELETE_CONFIRMATION}')) SUGAR.ajaxUI.submitForm(_form);" type="submit" name="Delete" value="{$APP.LBL_DELETE_BUTTON_LABEL}" id="delete_button">{/if} </li><li>{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Documents", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}</li></ul></li></ul>
</div>
</td>
<td align="right" width="20%">{$ADMIN_EDIT}
{$PAGINATION}
</td>
</tr>
</table>{sugar_include include=$includes}
<div id="Documents_detailview_tabs"
>
<div >
<div id='detailpanel_1' class='detail view  detail508 expanded'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<h4>
<a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(1);">
<img border="0" id="detailpanel_1_img_hide" src="{sugar_getimagepath file="basic_search.gif"}"></a>
<a href="javascript:void(0)" class="expandLink" onclick="expandPanel(1);">
<img border="0" id="detailpanel_1_img_show" src="{sugar_getimagepath file="advanced_search.gif"}"></a>
{sugar_translate label='LBL_DOCUMENT_INFORMATION' module='Documents'}
<script>
document.getElementById('detailpanel_1').className += ' expanded';
</script>
</h4>
<table id='LBL_DOCUMENT_INFORMATION' class="panelContainer" cellspacing='{$gridline}'>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.filename.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.filename.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_FILENAME' module='Documents'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.filename.hidden}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.filename.name}">
<a href="index.php?entryPoint=download&id={$fields.document_revision_id.value}&type={$module}" class="tabDetailViewDFLink" target='_blank'>{$fields.filename.value}</a>
</span>
{if isset($fields.doc_type) && !empty($fields.doc_type.value) && $fields.doc_type.value != 'SugarCRM' && !empty($fields.doc_url.value) }
{capture name=imageNameCapture assign=imageName}
{$fields.doc_type.value}_image_inline.png
{/capture}
<a href="{$fields.doc_url.value}" class="tabDetailViewDFLink" target="_blank">{sugar_getimage name=$imageName alt=$imageName other_attributes='border="0" '}</a>
{/if}
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
{if $fields.status_id.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.status_id.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_DOC_STATUS' module='Documents'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.status_id.hidden}
{counter name="panelFieldCount"}


{if is_string($fields.status_id.options)}
<input type="hidden" class="sugar_field" id="{$fields.status_id.name}" value="{ $fields.status_id.options }">
{ $fields.status_id.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.status_id.name}" value="{ $fields.status_id.value }">
{ $fields.status_id.options[$fields.status_id.value]}
{/if}
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.document_name.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.document_name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_DOC_NAME' module='Documents'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.document_name.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.document_name.value) <= 0}
{assign var="value" value=$fields.document_name.default_value }
{else}
{assign var="value" value=$fields.document_name.value }
{/if} 
<span class="sugar_field" id="{$fields.document_name.name}">{$fields.document_name.value}</span>
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
{if $fields.revision.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.revision.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_DOC_VERSION' module='Documents'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.revision.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.revision.value) <= 0}
{assign var="value" value=$fields.revision.default_value }
{else}
{assign var="value" value=$fields.revision.value }
{/if} 
<span class="sugar_field" id="{$fields.revision.name}">{$fields.revision.value}</span>
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.template_type.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.template_type.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_DET_TEMPLATE_TYPE' module='Documents'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.template_type.hidden}
{counter name="panelFieldCount"}


{if is_string($fields.template_type.options)}
<input type="hidden" class="sugar_field" id="{$fields.template_type.name}" value="{ $fields.template_type.options }">
{ $fields.template_type.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.template_type.name}" value="{ $fields.template_type.value }">
{ $fields.template_type.options[$fields.template_type.value]}
{/if}
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
{if $fields.is_template.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.is_template.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_DET_IS_TEMPLATE' module='Documents'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.is_template.hidden}
{counter name="panelFieldCount"}

{if strval($fields.is_template.value) == "1" || strval($fields.is_template.value) == "yes" || strval($fields.is_template.value) == "on"} 
{assign var="checked" value="CHECKED"}
{else}
{assign var="checked" value=""}
{/if}
<input type="checkbox" class="checkbox" name="{$fields.is_template.name}" id="{$fields.is_template.name}" value="$fields.is_template.value" disabled="true" {$checked}>
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.active_date.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.active_date.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_DOC_ACTIVE_DATE' module='Documents'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.active_date.hidden}
{counter name="panelFieldCount"}


{if strlen($fields.active_date.value) <= 0}
{assign var="value" value=$fields.active_date.default_value }
{else}
{assign var="value" value=$fields.active_date.value }
{/if}
<span class="sugar_field" id="{$fields.active_date.name}">{$value}</span>
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
{if $fields.category_id.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.category_id.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_SF_CATEGORY' module='Documents'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.category_id.hidden}
{counter name="panelFieldCount"}


{if is_string($fields.category_id.options)}
<input type="hidden" class="sugar_field" id="{$fields.category_id.name}" value="{ $fields.category_id.options }">
{ $fields.category_id.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.category_id.name}" value="{ $fields.category_id.value }">
{ $fields.category_id.options[$fields.category_id.value]}
{/if}
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.exp_date.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.exp_date.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_DOC_EXP_DATE' module='Documents'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.exp_date.hidden}
{counter name="panelFieldCount"}


{if strlen($fields.exp_date.value) <= 0}
{assign var="value" value=$fields.exp_date.default_value }
{else}
{assign var="value" value=$fields.exp_date.value }
{/if}
<span class="sugar_field" id="{$fields.exp_date.name}">{$value}</span>
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
{if $fields.subcategory_id.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.subcategory_id.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_SF_SUBCATEGORY' module='Documents'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.subcategory_id.hidden}
{counter name="panelFieldCount"}


{if is_string($fields.subcategory_id.options)}
<input type="hidden" class="sugar_field" id="{$fields.subcategory_id.name}" value="{ $fields.subcategory_id.options }">
{ $fields.subcategory_id.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.subcategory_id.name}" value="{ $fields.subcategory_id.value }">
{ $fields.subcategory_id.options[$fields.subcategory_id.value]}
{/if}
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.description.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.description.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_DOC_DESCRIPTION' module='Documents'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%' colspan='3' >
{if !$fields.description.hidden}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.description.name|escape:'html'|url2html|nl2br}">{$fields.description.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}</span>
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.related_doc_name.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.related_doc_name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_DET_RELATED_DOCUMENT' module='Documents'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.related_doc_name.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.related_doc_id.value)}
{capture assign="detail_url"}index.php?module=Documents&action=DetailView&record={$fields.related_doc_id.value}{/capture}
<a href="{sugar_ajax_url url=$detail_url}">{/if}
<span id="related_doc_id" class="sugar_field" data-id-value="{$fields.related_doc_id.value}">{$fields.related_doc_name.value}</span>
{if !empty($fields.related_doc_id.value)}</a>{/if}
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
{if $fields.related_doc_rev_number.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.related_doc_rev_number.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_DET_RELATED_DOCUMENT_VERSION' module='Documents'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.related_doc_rev_number.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.related_doc_rev_id.value)}
{capture assign="detail_url"}index.php?module=DocumentRevisions&action=DetailView&record={$fields.related_doc_rev_id.value}{/capture}
<a href="{sugar_ajax_url url=$detail_url}">{/if}
<span id="related_doc_rev_id" class="sugar_field" data-id-value="{$fields.related_doc_rev_id.value}">{$fields.related_doc_rev_number.value}</span>
{if !empty($fields.related_doc_rev_id.value)}</a>{/if}
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.assigned_user_name.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.assigned_user_name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_ASSIGNED_TO_NAME' module='Documents'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.assigned_user_name.hidden}
{counter name="panelFieldCount"}

<span id="assigned_user_id" class="sugar_field" data-id-value="{$fields.assigned_user_id.value}">{$fields.assigned_user_name.value}</span>
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
{if $fields.team_name.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.team_name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_TEAM' module='Documents'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.team_name.hidden}
{counter name="panelFieldCount"}

{sugarvar_teamset parentFieldArray=fields vardef=$fields.team_name tabindex='' display='' labelSpan='' fieldSpan='' formName='' tabindex=1 displayType='renderDetailView'  	 }
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
</table>
<script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() {ldelim} initPanel(1, 'expanded'); {rdelim}); </script>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("LBL_DOCUMENT_INFORMATION").style.display='none';</script>
{/if}
<div id='detailpanel_2' class='detail view  detail508 expanded'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<h4>
<a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(2);">
<img border="0" id="detailpanel_2_img_hide" src="{sugar_getimagepath file="basic_search.gif"}"></a>
<a href="javascript:void(0)" class="expandLink" onclick="expandPanel(2);">
<img border="0" id="detailpanel_2_img_show" src="{sugar_getimagepath file="advanced_search.gif"}"></a>
{sugar_translate label='LBL_REVISIONS_PANEL' module='Documents'}
<script>
document.getElementById('detailpanel_2').className += ' expanded';
</script>
</h4>
<table id='LBL_REVISIONS_PANEL' class="panelContainer" cellspacing='{$gridline}'>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.last_rev_created_name.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.last_rev_created_name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_LAST_REV_CREATOR' module='Documents'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.last_rev_created_name.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.last_rev_created_name.value) <= 0}
{assign var="value" value=$fields.last_rev_created_name.default_value }
{else}
{assign var="value" value=$fields.last_rev_created_name.value }
{/if} 
<span class="sugar_field" id="{$fields.last_rev_created_name.name}">{$fields.last_rev_created_name.value}</span>
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
{if $fields.last_rev_create_date.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.last_rev_create_date.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_LAST_REV_CREATE_DATE' module='Documents'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.last_rev_create_date.hidden}
{counter name="panelFieldCount"}


{if strlen($fields.last_rev_create_date.value) <= 0}
{assign var="value" value=$fields.last_rev_create_date.default_value }
{else}
{assign var="value" value=$fields.last_rev_create_date.value }
{/if}
<span class="sugar_field" id="{$fields.last_rev_create_date.name}">{$value}</span>
{/if}
</td>
{else}
<td>&nbsp;</td><td>&nbsp;</td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
</table>
<script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() {ldelim} initPanel(2, 'expanded'); {rdelim}); </script>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("LBL_REVISIONS_PANEL").style.display='none';</script>
{/if}
</div>
</div>

</form>
<script>SUGAR.util.doWhen("document.getElementById('form') != null",
function(){ldelim}SUGAR.util.buildAccessKeyLabels();{rdelim});
</script><script type="text/javascript">
SUGAR.util.doWhen("typeof collapsePanel == 'function'",
        function(){ldelim}
            var sugar_panel_collase = Get_Cookie("sugar_panel_collase");
            if(sugar_panel_collase != null) {ldelim}
                sugar_panel_collase = YAHOO.lang.JSON.parse(sugar_panel_collase);
                for(panel in sugar_panel_collase['Documents_d'])
                    if(sugar_panel_collase['Documents_d'][panel])
                        collapsePanel(panel);
                    else
                        expandPanel(panel);
            {rdelim}
        {rdelim});
</script>{literal}
<script type=text/javascript>
SUGAR.util.doWhen('!SUGAR.util.ajaxCallInProgress()', function(){
SUGAR.forms.AssignmentHandler.registerView('DetailView');
SUGAR.forms.AssignmentHandler.LINKS['DetailView'] = {"created_by_link":{"relationship":"documents_created_by","module":"Users","id_name":"created_by"},"modified_user_link":{"relationship":"documents_modified_user","module":"Users","id_name":"modified_user_id"},"activities":{"relationship":"document_activities","module":"Activities"},"revisions":{"relationship":"document_revisions","id_name":"related_doc_rev_id","module":"DocumentRevisions"},"latest_document_revision_link":{"relationship":"latest_document_revision","id_name":"document_revision_id"},"contracts":{"relationship":"contracts_documents"},"contracttypes":{"relationship":"contracttype_documents"},"accounts":{"relationship":"documents_accounts"},"contacts":{"relationship":"documents_contacts"},"opportunities":{"relationship":"documents_opportunities"},"cases":{"relationship":"documents_cases"},"bugs":{"relationship":"documents_bugs"},"quotes":{"relationship":"documents_quotes"},"products":{"relationship":"documents_products"},"revenuelineitems":{"relationship":"documents_revenuelineitems"},"related_docs":{"relationship":"related_documents","id_name":"related_doc_id","module":"Documents"},"following_link":{"relationship":"documents_following"},"favorite_link":{"relationship":"documents_favorite"},"assigned_user_link":{"relationship":"documents_assigned_user","module":"Users","id_name":"assigned_user_id"}}

YAHOO.util.Event.onContentReady('Documents_detailview_tabs', SUGAR.forms.AssignmentHandler.loadComplete);});</script>{/literal}
