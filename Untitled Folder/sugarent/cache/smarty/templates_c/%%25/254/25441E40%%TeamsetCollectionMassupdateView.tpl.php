<?php /* Smarty version 2.6.11, created on 2016-07-04 13:58:28
         compiled from include/SugarFields/Fields/Teamset/TeamsetCollectionMassupdateView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_translate', 'include/SugarFields/Fields/Teamset/TeamsetCollectionMassupdateView.tpl', 14, false),array('function', 'sugar_getjspath', 'include/SugarFields/Fields/Teamset/TeamsetCollectionMassupdateView.tpl', 17, false),array('function', 'sugar_getimage', 'include/SugarFields/Fields/Teamset/TeamsetCollectionMassupdateView.tpl', 35, false),)), $this); ?>

<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_SELECT_TEAMS_LABEL'), $this); $this->_smarty_vars['capture']['alt1'] = ob_get_contents();  $this->assign('alt_selectButton', ob_get_contents());ob_end_clean();  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_ALT_REMOVE_TEAM_ROW'), $this); $this->_smarty_vars['capture']['alt2'] = ob_get_contents();  $this->assign('alt_removeButton', ob_get_contents());ob_end_clean();  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_ALT_ADD_TEAM_ROW'), $this); $this->_smarty_vars['capture']['alt3'] = ob_get_contents();  $this->assign('alt_addButton', ob_get_contents());ob_end_clean(); ?>
<script type="text/javascript" src='<?php echo smarty_function_sugar_getjspath(array('file' => "include/SugarFields/Fields/Collection/SugarFieldCollection.js"), $this);?>
'></script>
<script type="text/javascript" src='<?php echo smarty_function_sugar_getjspath(array('file' => "include/SugarFields/Fields/Teamset/Teamset.js"), $this);?>
'></script>
<script type="text/javascript">
    var collection = (typeof collection == 'undefined') ? new Array() : collection;
    collection["<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['vardef']['name']; ?>
"] = new SUGAR.collection('<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
', '<?php echo $this->_tpl_vars['vardef']['name']; ?>
', '<?php echo $this->_tpl_vars['module']; ?>
', '<?php echo $this->_tpl_vars['displayParams']['popupData']; ?>
');
	collection["<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['vardef']['name']; ?>
"].show_more_image = false;
</script>
<input type="hidden" id="update_fields_<?php echo $this->_tpl_vars['vardef']['name']; ?>
_collection" name="update_fields_<?php echo $this->_tpl_vars['vardef']['name']; ?>
_collection" value="">
<input type="hidden" id="<?php echo $this->_tpl_vars['vardef']['name']; ?>
_new_on_update" name="<?php echo $this->_tpl_vars['vardef']['name']; ?>
_new_on_update" value="<?php echo $this->_tpl_vars['displayParams']['new_on_update']; ?>
">
<input type="hidden" id="<?php echo $this->_tpl_vars['vardef']['name']; ?>
_allow_update" name="<?php echo $this->_tpl_vars['vardef']['name']; ?>
_allow_update" value="<?php echo $this->_tpl_vars['displayParams']['allow_update']; ?>
">
<input type="hidden" id="<?php echo $this->_tpl_vars['vardef']['name']; ?>
_allow_new" name="<?php echo $this->_tpl_vars['vardef']['name']; ?>
_allow_new" value="<?php echo $this->_tpl_vars['displayParams']['allow_new']; ?>
">
<input type="hidden" id="<?php echo $this->_tpl_vars['vardef']['name']; ?>
_allowed_to_check" name="<?php echo $this->_tpl_vars['vardef']['name']; ?>
_allowed_to_check" value="false">
<input type="hidden" id="<?php echo $this->_tpl_vars['vardef']['name']; ?>
_mass" name="<?php echo $this->_tpl_vars['vardef']['name']; ?>
_mass" value="<?php echo $this->_tpl_vars['vardef']['name']; ?>
_table">
<table name='<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['vardef']['name']; ?>
_table' id='<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['vardef']['name']; ?>
_table' style="border-spacing: 0pt;">
	 <tr>
	    <td colspan='2' nowrap>
			<span class="id-ff multiple ownline">
            <button title="<?php echo $this->_tpl_vars['app_strings']['LBL_ID_FF_SELECT']; ?>
" type="button" class="button firstChild" value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SELECT_BUTTON_LABEL'), $this);?>
" onclick='javascript:open_popup("Teams", 600, 400, "", true, false, <?php echo '{"call_back_function":"set_return_teams_for_editview","form_name": '; ?>
 "<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
","field_name":"<?php echo $this->_tpl_vars['vardef']['name']; ?>
",<?php echo '"field_to_name_array":{"id":"team_id","name":"team_name"}}'; ?>
, "MULTISELECT", true); if(collection["<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['vardef']['name']; ?>
"].more_status)collection["<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['vardef']['name']; ?>
"].js_more();' name="teamSelect">
            <?php echo smarty_function_sugar_getimage(array('name' => "id-ff-select.png",'alt' => ($this->_tpl_vars['alt_selectButton'])), $this);?>

            </button><button title="<?php echo $this->_tpl_vars['app_strings']['LBL_ID_FF_ADD']; ?>
" type="button" class="button lastChild" value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ADD_BUTTON'), $this);?>
" onclick="javascript:collection['<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['vardef']['name']; ?>
'].add(); if(collection['<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['vardef']['name']; ?>
'].more_status)collection['<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['vardef']['name']; ?>
'].js_more();"  name="teamAdd">
            <?php echo smarty_function_sugar_getimage(array('name' => "id-ff-add.png",'alt' => ($this->_tpl_vars['alt_addButton'])), $this);?>
</button>
			</span>			
		</td>
        <th scope='col' id="lineLabel_<?php echo $this->_tpl_vars['vardef']['name']; ?>
_primary" <?php if (empty ( $this->_tpl_vars['values']['role_field'] )): ?>style="display:none"<?php endif; ?>>
            <?php echo smarty_function_sugar_translate(array('label' => 'LBL_COLLECTION_PRIMARY'), $this);?>

        </th>
		<td>
        <a class="utilsLink" href="javascript:collection['<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['vardef']['name']; ?>
'].js_more();" id='more_<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['vardef']['name']; ?>
' <?php if (empty ( $this->_tpl_vars['values']['secondaries'] )): ?>style="display:none"<?php endif; ?>></a>
        </td>
        <td>&nbsp;</td>
    </tr>
    <tr id="lineFields_<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['vardef']['name']; ?>
_0" class="lineFields_<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['vardef']['name']; ?>
">
        <td scope='row' valign="top">
            <span id='<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['vardef']['name']; ?>
_input_div_0' name='teamset_div'>   
            <input type="text" name="<?php echo $this->_tpl_vars['vardef']['name']; ?>
_collection_0" class="sqsEnabled" tabindex="<?php echo $this->_tpl_vars['tabindex']; ?>
" id="<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['vardef']['name']; ?>
_collection_0" size="<?php echo $this->_tpl_vars['displayParams']['size']; ?>
" value=""  title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_TEAM_SELECTED_TITLE'), $this);?>
"  autocomplete="off" <?php echo $this->_tpl_vars['displayParams']['readOnly']; ?>
 <?php echo $this->_tpl_vars['displayParams']['field']; ?>
>
            <input type="hidden" name="id_<?php echo $this->_tpl_vars['vardef']['name']; ?>
_collection_0" id="id_<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['vardef']['name']; ?>
_collection_0" value="">
            </span>
        </td>
<!-- BEGIN Remove and Radio -->
        <td valign="top" nowrap class="teamset-row">
            &nbsp;
			<?php ob_start(); ?>id="remove_<?php echo $this->_tpl_vars['vardef']['name']; ?>
_collection_0" name="remove_<?php echo $this->_tpl_vars['vardef']['name']; ?>
_collection_0" onclick="collection['<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['vardef']['name']; ?>
'].remove(0);"<?php $this->_smarty_vars['capture']['tmp'] = ob_get_contents();  $this->assign('attr', ob_get_contents());ob_end_clean(); ?>

            <button type="button" class="id-ff-remove" <?php echo $this->_tpl_vars['attr']; ?>
>
                <?php echo smarty_function_sugar_getimage(array('name' => "id-ff-remove-nobg",'ext' => ".png",'attr' => "",'alt' => $this->_tpl_vars['alt_removeButton']), $this);?>

                <?php if (! empty ( $this->_tpl_vars['displayParams']['allowNewValue'] )): ?><input type="hidden" name="allow_new_value_<?php echo $this->_tpl_vars['idname']; ?>
_collection_0" id="allow_new_value_<?php echo $this->_tpl_vars['idname']; ?>
_collection_0" value="true"><?php endif; ?>
            </button>
        </td>
        <td valign="top" align="center" class="teamset-row">
            <span id='<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['vardef']['name']; ?>
_radio_div_0'>
            <input id="primary_<?php echo $this->_tpl_vars['vardef']['name']; ?>
_collection_0" name="primary_<?php echo $this->_tpl_vars['vardef']['name']; ?>
_collection" type="radio" class="radio" value="0" style="visibility:visible<?php if (empty ( $this->_tpl_vars['values']['role_field'] )): ?>;display:none;<?php endif; ?>" onclick="collection['<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['vardef']['name']; ?>
'].changePrimary(true);" title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_TEAM_SELECT_AS_PRIM_TITLE'), $this);?>
" />
            </span>
        </td>
        <td>&nbsp;</td>
<!-- END Remove and Radio -->
    </tr>
</table>
<table style="border-spacing: 0pt;">
    <tr>
		<td nowrap>
            <div id='<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['vardef']['name']; ?>
_mass_operation_div'>
        	<input type="radio" class="radio" name="<?php echo $this->_tpl_vars['vardef']['name']; ?>
_type" value="replace" checked> <?php echo smarty_function_sugar_translate(array('label' => 'LBL_REPLACE_BUTTON'), $this);?>

			<input type="radio" class="radio" name="<?php echo $this->_tpl_vars['vardef']['name']; ?>
_type" value="add"> <?php echo smarty_function_sugar_translate(array('label' => 'LBL_ADD_BUTTON'), $this);?>

            </div>	
		</td>
	</tr>    
</table>
<?php if (! empty ( $this->_tpl_vars['values']['secondaries'] )): ?>
            <?php $_from = $this->_tpl_vars['values']['secondaries']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['secondary_field']):
?>
                <script type="text/javascript">
                    var temp_array = new Array();
                    temp_array['name'] = '<?php echo $this->_tpl_vars['secondary_field']['name']; ?>
';
                    temp_array['id'] = '<?php echo $this->_tpl_vars['secondary_field']['id']; ?>
';
                    //collection["<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['vardef']['name']; ?>
"].secondaries_values.push(temp_array);
                </script>
            <?php endforeach; endif; unset($_from);  endif; ?>
<!--
Put this button in here since we have moved the Add and Select buttons above the text fields, the accesskey will skip these. So create this button
and push it outside the screen.
-->
 <input style='position:absolute; left:-9999px; width: 0px; height: 0px;' halign='left' type="button" class="button" value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SELECT_BUTTON_LABEL'), $this);?>
" onclick='javascript:open_popup("Teams", 600, 400, "", true, false, <?php echo '{"call_back_function":"set_return_teams_for_editview","form_name": '; ?>
 "<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
" <?php echo ',"field_name":"team_name","field_to_name_array":{"id":"team_id","name":"team_name"}}'; ?>
, "MULTISELECT", true);'>

<script type="text/javascript"> 
(function() {
    SUGAR_callsInProgress++;
    var field_id = '<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['vardef']['name']; ?>
';
    YAHOO.util.Event.onContentReady(field_id + "_table", function(){
        SUGAR_callsInProgress--;
		if(collection[field_id] && collection[field_id].secondaries_values.length == 0) {
            <?php if (! empty ( $this->_tpl_vars['values']['secondaries'] )): ?>
                <?php $_from = $this->_tpl_vars['values']['secondaries']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['secondary_field']):
?>
                var temp_array = new Array();
                temp_array['name'] = '<?php echo $this->_tpl_vars['secondary_field']['name']; ?>
';
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
//	collection["<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['vardef']['name']; ?>
"].add_secondaries(collection["<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['vardef']['name']; ?>
"].secondaries_values);
</script>
<?php echo $this->_tpl_vars['quickSearchCode']; ?>


<script type="text/javascript">
addToValidate('MassUpdate', 'team_name_mass', 'teamset_mass', true, 'Team');
</script>