<?php /* Smarty version 2.6.11, created on 2016-07-04 13:58:31
         compiled from include/SugarFields/Fields/Teamset/TeamsetCollectionEditView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_translate', 'include/SugarFields/Fields/Teamset/TeamsetCollectionEditView.tpl', 14, false),array('function', 'sugar_getjspath', 'include/SugarFields/Fields/Teamset/TeamsetCollectionEditView.tpl', 22, false),array('function', 'sugar_getimage', 'include/SugarFields/Fields/Teamset/TeamsetCollectionEditView.tpl', 47, false),)), $this); ?>

<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_SELECT_TEAMS_LABEL'), $this); $this->_smarty_vars['capture']['alt1'] = ob_get_contents();  $this->assign('alt_selectButton', ob_get_contents());ob_end_clean();  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_ALT_REMOVE_TEAM_ROW'), $this); $this->_smarty_vars['capture']['alt2'] = ob_get_contents();  $this->assign('alt_removeButton', ob_get_contents());ob_end_clean();  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_ALT_ADD_TEAM_ROW'), $this); $this->_smarty_vars['capture']['alt3'] = ob_get_contents();  $this->assign('alt_addButton', ob_get_contents());ob_end_clean();  ob_start();  echo $this->_tpl_vars['vardef']['name'];  $this->_smarty_vars['capture']['idname'] = ob_get_contents();  $this->assign('idname', ob_get_contents());ob_end_clean();  if (! empty ( $this->_tpl_vars['displayParams']['idName'] )): ?>
    <?php $this->assign('idname', $this->_tpl_vars['displayParams']['idName']);  endif; ?>

<script type="text/javascript" src='<?php echo smarty_function_sugar_getjspath(array('file' => "include/SugarFields/Fields/Collection/SugarFieldCollection.js"), $this);?>
'></script>
<script type="text/javascript" src='<?php echo smarty_function_sugar_getjspath(array('file' => "include/SugarFields/Fields/Teamset/Teamset.js"), $this);?>
'></script>
<script type="text/javascript">
    var collection = (typeof collection == 'undefined') ? new Array() : collection;
    if(typeof collection["<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['idname']; ?>
"] == 'undefined') {
       collection["<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['idname']; ?>
"] = new SUGAR.collection('<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
', '<?php echo $this->_tpl_vars['idname']; ?>
', '<?php echo $this->_tpl_vars['module']; ?>
', '<?php echo $this->_tpl_vars['displayParams']['popupData']; ?>
');
	   <?php if ($this->_tpl_vars['hideShowHideButton']): ?>
		 collection["<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['idname']; ?>
"].show_more_image = false;
	   <?php endif; ?>
	}
</script>
<input type="hidden" id="update_fields_<?php echo $this->_tpl_vars['idname']; ?>
_collection" name="update_fields_<?php echo $this->_tpl_vars['idname']; ?>
_collection" value="">
<input type="hidden" id="<?php echo $this->_tpl_vars['idname']; ?>
_new_on_update" name="<?php echo $this->_tpl_vars['idname']; ?>
_new_on_update" value="<?php echo $this->_tpl_vars['displayParams']['new_on_update']; ?>
">
<input type="hidden" id="<?php echo $this->_tpl_vars['idname']; ?>
_allow_update" name="<?php echo $this->_tpl_vars['idname']; ?>
_allow_update" value="<?php echo $this->_tpl_vars['displayParams']['allow_update']; ?>
">
<input type="hidden" id="<?php echo $this->_tpl_vars['idname']; ?>
_allow_new" name="<?php echo $this->_tpl_vars['idname']; ?>
_allow_new" value="<?php echo $this->_tpl_vars['displayParams']['allow_new']; ?>
">
<input type="hidden" id="<?php echo $this->_tpl_vars['idname']; ?>
" name="<?php echo $this->_tpl_vars['idname']; ?>
" value="<?php echo $this->_tpl_vars['idname']; ?>
">

<?php if (! empty ( $this->_tpl_vars['vardef']['required'] )): ?>
<input type="hidden" id="<?php echo $this->_tpl_vars['idname']; ?>
_field" name="<?php echo $this->_tpl_vars['idname']; ?>
_field" value="<?php echo $this->_tpl_vars['idname']; ?>
_table">
<?php endif; ?>
<table name='<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['idname']; ?>
_table' id='<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['idname']; ?>
_table' style="border-spacing: 0pt;">
    <!-- BEGIN Labels Line -->
    <tr id="lineLabel_<?php echo $this->_tpl_vars['idname']; ?>
" name="lineLabel_<?php echo $this->_tpl_vars['idname']; ?>
">
        <td nowrap>
			<span class="id-ff multiple ownline">
            <button type="button" class="button firstChild" value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SELECT_BUTTON_LABEL'), $this);?>
" onclick='javascript:open_popup("Teams", 600, 400, "", true, false, <?php echo '{"call_back_function":"set_return_teams_for_editview","form_name": '; ?>
 "<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
","field_name":"<?php echo $this->_tpl_vars['idname']; ?>
",<?php echo '"field_to_name_array":{"id":"team_id","name":"team_name"}}'; ?>
, "MULTISELECT", true); if(collection["<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['idname']; ?>
"].more_status)collection["<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['idname']; ?>
"].js_more();' name="teamSelect" id="teamSelect" title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ID_FF_SELECT'), $this);?>
"><?php echo smarty_function_sugar_getimage(array('name' => "id-ff-select.png",'alt' => ($this->_tpl_vars['alt_selectButton'])), $this);?>
</button><button type="button" class="button lastChild" value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ADD_BUTTON'), $this);?>
" onclick="javascript:collection['<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['idname']; ?>
'].add(); if(collection['<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['idname']; ?>
'].more_status)collection['<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['idname']; ?>
'].js_more();" name="teamAdd" id="teamAdd" title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ID_FF_ADD'), $this);?>
"><?php echo smarty_function_sugar_getimage(array('name' => "id-ff-add.png",'alt' => ($this->_tpl_vars['alt_addButton'])), $this);?>
</button>
			</span>
        </td>
        <td>
        &nbsp;
        </td>
        <th scope='col' align='center' id="lineLabel_<?php echo $this->_tpl_vars['idname']; ?>
_primary" rowspan='1' scope='row' style='white-space: nowrap; word-wrap:normal;'>
            <?php echo smarty_function_sugar_translate(array('label' => 'LBL_COLLECTION_PRIMARY'), $this);?>

        </th>
<!-- BEGIN Add and collapse -->
        <td rowspan='1' scope='row' style='white-space:nowrap; word-wrap:normal;' valign='top'>
            &nbsp;
            <?php if (! $this->_tpl_vars['hideShowHideButton']): ?>
            <span onclick="collection['<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['idname']; ?>
'].js_more();" id='more_<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['idname']; ?>
' <?php if (empty ( $this->_tpl_vars['values']['secondaries'] )): ?>style="display:none; text-decoration:none;"<?php else: ?>style="text-decoration:none;"<?php endif; ?> title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_HIDE_SHOW'), $this);?>
">
            <input id="arrow_<?php echo $this->_tpl_vars['idname']; ?>
" name="arrow_<?php echo $this->_tpl_vars['idname']; ?>
" type="hidden" value="show">
			<?php ob_start(); ?>border="0" id="more_img_<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['idname']; ?>
"<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('attr', ob_get_contents());ob_end_clean(); ?>
            <?php echo smarty_function_sugar_getimage(array('name' => "advanced_search.gif",'width' => '8','height' => '8','attr' => $this->_tpl_vars['attr']), $this);?>

            <span id="more_div_<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['idname']; ?>
" <?php if (empty ( $this->_tpl_vars['values']['secondaries'] )): ?>style="display:none"<?php endif; ?>><?php echo smarty_function_sugar_translate(array('label' => 'LBL_SHOW'), $this);?>
</span>
            </span>
            <?php endif; ?>
        </td>
<!-- END Add and collapse -->
        <td width='100%'>
        &nbsp;
        </th>
    </tr>
<!-- END Labels Line -->
    <tr id="lineFields_<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['idname']; ?>
_0">
        <td scope="row" valign='top'>
            <span id='<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['idname']; ?>
_input_div_0' name='teamset_div'>          
            <input type="text" name="<?php echo $this->_tpl_vars['idname']; ?>
_collection_0" id="<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['idname']; ?>
_collection_0" class="sqsEnabled" tabindex="<?php echo $this->_tpl_vars['tabindex']; ?>
" <?php if (! empty ( $this->_tpl_vars['displayParams']['accesskey'] )): ?> accesskey='<?php echo $this->_tpl_vars['displayParams']['accesskey']; ?>
' <?php endif; ?> size="<?php echo $this->_tpl_vars['displayParams']['size']; ?>
" value="" title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_TEAM_SELECTED_TITLE'), $this);?>
" autocomplete="off" <?php echo $this->_tpl_vars['displayParams']['readOnly']; ?>
 <?php echo $this->_tpl_vars['displayParams']['field']; ?>
>
            <input type="hidden" name="id_<?php echo $this->_tpl_vars['idname']; ?>
_collection_0" id="id_<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['idname']; ?>
_collection_0" value="">
            </span>
        </td>
<!-- BEGIN Remove and Radio -->
        <td valign='top' align='left' nowrap class="teamset-row">
			<?php ob_start(); ?>class="id-ff-remove" name="remove_<?php echo $this->_tpl_vars['idname']; ?>
_collection_0" id="remove_<?php echo $this->_tpl_vars['idname']; ?>
_collection_0" onclick="collection['<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['idname']; ?>
'].remove(0); return false;"<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('attr', ob_get_contents());ob_end_clean(); ?>

            <button type="button" class="id-ff-remove" <?php echo $this->_tpl_vars['attr']; ?>
>
                <?php echo smarty_function_sugar_getimage(array('name' => "id-ff-remove-nobg",'ext' => ".png",'attr' => "",'alt' => $this->_tpl_vars['alt_removeButton']), $this);?>

                <?php if (! empty ( $this->_tpl_vars['displayParams']['allowNewValue'] )): ?><input type="hidden" name="allow_new_value_<?php echo $this->_tpl_vars['idname']; ?>
_collection_0" id="allow_new_value_<?php echo $this->_tpl_vars['idname']; ?>
_collection_0" value="true"><?php endif; ?>
            </button>

        </td>
        <td valign='top' align='center' class="teamset-row">
            <span id='<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['idname']; ?>
_radio_div_0'>
            &nbsp;
            <input id="primary_<?php echo $this->_tpl_vars['idname']; ?>
_collection_0" name="primary_<?php echo $this->_tpl_vars['idname']; ?>
_collection" type="radio" class="radio" <?php if ($this->_tpl_vars['displayParams']['primaryChecked']): ?>checked="checked" title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_TEAM_SELECTED_TITLE'), $this);?>
" <?php else: ?> title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_TEAM_SELECT_AS_PRIM_TITLE'), $this);?>
" <?php endif; ?> value="0" onclick="collection['<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['idname']; ?>
'].changePrimary(true);"/>
            </span>
        </td>
        <td>
        &nbsp;
        </td>
        <td>
        &nbsp;
        </td>
<!-- END Remove and Radio -->
    </tr>
</table>
<!--
Put this button in here since we have moved the Add and Select buttons above the text fields, the accesskey will skip these. So create this button
and push it outside the screen.
-->
 <input style='position:absolute; left:-9999px; width: 0px; height: 0px;' halign='left' type="button" class="button" value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SELECT_BUTTON_LABEL'), $this);?>
" onclick='javascript:open_popup("Teams", 600, 400, "", true, false, <?php echo '{"call_back_function":"set_return_teams_for_editview","form_name": '; ?>
 "<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
","field_name":"<?php echo $this->_tpl_vars['idname']; ?>
",<?php echo '"field_to_name_array":{"id":"team_id","name":"team_name"}}'; ?>
, "MULTISELECT", true); if(collection["<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['idname']; ?>
"].more_status)collection["<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['idname']; ?>
"].js_more();'>
<script type="text/javascript">
(function() {
    SUGAR_callsInProgress++;
    var field_id = '<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['idname']; ?>
';
    YAHOO.util.Event.onContentReady(field_id + "_table", function(){

        //reset the secondary fields array for this form before populating
         collection[field_id].secondaries_values = new Array();

        if(collection[field_id] && collection[field_id].secondaries_values.length == 0) {
            <?php if (! empty ( $this->_tpl_vars['values']['secondaries'] )): ?>
                <?php $_from = $this->_tpl_vars['values']['secondaries']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['secondary_field']):
?>
                var temp_array = new Array();
                temp_array['name'] = '<?php echo $this->_tpl_vars['secondary_field']['name']; ?>
';

   			 	temp_array['name'] = replaceHTMLChars(temp_array['name']);
   			 	
                temp_array['id'] = '<?php echo $this->_tpl_vars['secondary_field']['id']; ?>
';
                collection[field_id].secondaries_values.push(temp_array);
                <?php endforeach; endif; unset($_from); ?>
            <?php endif; ?>
            var collection_field = collection[field_id];
            collection_field.add_secondaries(collection_field.secondaries_values);
        }
    });
})();
 	document.getElementById("id_<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['idname']; ?>
_collection_0").value = "<?php echo $this->_tpl_vars['values']['primary']['id']; ?>
";
 	document.getElementById("<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['idname']; ?>
_collection_0").value = replaceHTMLChars("<?php echo $this->_tpl_vars['values']['primary']['name']; ?>
");
    <?php if (isset ( $this->_tpl_vars['displayParams']['arrow'] ) && $this->_tpl_vars['displayParams']['arrow'] == 'show'): ?>
        setTimeout('call_js_more(collection_field)',1000);
    <?php else: ?>
	   SUGAR_callsInProgress--;
	<?php endif; ?>
	
    
    <?php echo '
	function call_js_more(c) {
	    c.js_more();
		SUGAR_callsInProgress--;
	}    
	'; ?>

</script>
<?php echo $this->_tpl_vars['quickSearchCode']; ?>

<script type="text/javascript">
<!--
if(typeof QSProcessedFieldsArray != 'undefined')
	QSProcessedFieldsArray["<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['idname']; ?>
_collection_0"] = false;
enableQS(false);
-->
</script>