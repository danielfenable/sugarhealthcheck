<?php /* Smarty version 2.6.11, created on 2016-07-04 13:56:31
         compiled from include/SugarFields/Fields/Teamset/TeamsetCollectionEmailView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_translate', 'include/SugarFields/Fields/Teamset/TeamsetCollectionEmailView.tpl', 13, false),array('function', 'sugar_getjspath', 'include/SugarFields/Fields/Teamset/TeamsetCollectionEmailView.tpl', 17, false),array('function', 'sugar_getimage', 'include/SugarFields/Fields/Teamset/TeamsetCollectionEmailView.tpl', 41, false),)), $this); ?>
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
	<?php if ($this->_tpl_vars['hideShowHideButton']): ?>
		collection["<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['vardef']['name']; ?>
"].show_more_image = false;
	<?php endif; ?>
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
" name="<?php echo $this->_tpl_vars['vardef']['name']; ?>
" value="<?php echo $this->_tpl_vars['vardef']['name']; ?>
">

<?php if (! empty ( $this->_tpl_vars['vardef']['required'] )): ?>
<input type="hidden" id="<?php echo $this->_tpl_vars['vardef']['name']; ?>
_field" name="<?php echo $this->_tpl_vars['vardef']['name']; ?>
_field" value="<?php echo $this->_tpl_vars['vardef']['name']; ?>
_table">
<?php endif; ?>
<table name='<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['vardef']['name']; ?>
_table' id='<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['vardef']['name']; ?>
_table' style="border-spacing: 0pt;">
    <!-- BEGIN Labels Line -->
    <tr id="lineLabel_<?php echo $this->_tpl_vars['vardef']['name']; ?>
" name="lineLabel_<?php echo $this->_tpl_vars['vardef']['name']; ?>
">
        <td colspan='2' nowrap>
			<span class="id-ff multiple ownline">
            <button type="button" class="button firstChild" value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SELECT_BUTTON_LABEL'), $this);?>
" onclick='javascript:open_popup_for_email_teams("Teams", 600, 400, "", true, false, <?php echo '{"call_back_function":"set_return_teams_for_editview","form_name": '; ?>
 "<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
","field_name":"<?php echo $this->_tpl_vars['vardef']['name']; ?>
",<?php echo '"field_to_name_array":{"id":"team_id","name":"team_name"}}'; ?>
, "<?php echo $this->_tpl_vars['CUSTOM_METHOD']; ?>
", "<?php echo $this->_tpl_vars['USER_ID']; ?>
", "MULTISELECT", true); if(collection["<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['vardef']['name']; ?>
"].more_status)collection["<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['vardef']['name']; ?>
"].js_more();' title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ID_FF_SELECT'), $this);?>
">
            <?php echo smarty_function_sugar_getimage(array('name' => "id-ff-select.png",'alt' => ($this->_tpl_vars['alt_selectButton'])), $this);?>

            </button><button type="button" class="button lastChild" value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ADD_BUTTON'), $this);?>
" onclick="javascript:collection['<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['vardef']['name']; ?>
'].add(); if(collection['<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['vardef']['name']; ?>
'].more_status)collection['<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['vardef']['name']; ?>
'].js_more();" title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ID_FF_ADD'), $this);?>
">
            <?php echo smarty_function_sugar_getimage(array('name' => "id-ff-add.png",'alt' => ($this->_tpl_vars['alt_addButton'])), $this);?>
</button>
			</span>
        </td>
        <th scope='col' align='center' id="lineLabel_<?php echo $this->_tpl_vars['vardef']['name']; ?>
_primary" rowspan='1' scope='row' style='white-space: nowrap; word-wrap: normal;'>
            <?php echo smarty_function_sugar_translate(array('label' => 'LBL_COLLECTION_PRIMARY'), $this);?>

        </th>
<!-- BEGIN Add and collapse -->
        <td rowspan='1' scope='row' style='white-space:nowrap; word-wrap:normal;'>
            &nbsp;
            <?php if (! $this->_tpl_vars['hideShowHideButton']): ?>
            <span onclick="javascript:collection['<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['vardef']['name']; ?>
'].js_more();" id='more_<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['vardef']['name']; ?>
' <?php if (empty ( $this->_tpl_vars['values']['secondaries'] )): ?>style="display:none; text-decoration:none;"<?php else: ?>style="text-decoration:none;"<?php endif; ?> title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_HIDE_SHOW'), $this);?>
">
            <input id="arrow_<?php echo $this->_tpl_vars['vardef']['name']; ?>
" name="arrow_<?php echo $this->_tpl_vars['vardef']['name']; ?>
" type="hidden" value="show">
			<?php ob_start(); ?>border="0" id="more_img_<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['vardef']['name']; ?>
"<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('attr', ob_get_contents());ob_end_clean(); ?>
            <?php echo smarty_function_sugar_getimage(array('name' => "advanced_search.gif",'attr' => $this->_tpl_vars['attr']), $this);?>

            <span id="more_div_<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['vardef']['name']; ?>
" <?php if (empty ( $this->_tpl_vars['values']['secondaries'] )): ?>style="display:none"<?php endif; ?>><?php echo smarty_function_sugar_translate(array('label' => 'LBL_SHOW'), $this);?>
</span>
        	</span>
        	<?php endif; ?>
        </td>
<!-- END Add and collapse -->
        <td width='100%'>
        &nbsp;
        </td>
    </tr>
<!-- END Labels Line -->
    <tr id="lineFields_<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['vardef']['name']; ?>
_0">
        <td scop='row' valign='top'>
            <span id='<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['vardef']['name']; ?>
_input_div_0' name='teamset_div'>          
            <input type="text" name="<?php echo $this->_tpl_vars['vardef']['name']; ?>
_collection_0" id="<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['vardef']['name']; ?>
_collection_0" class="sqsEnabled" tabindex="<?php echo $this->_tpl_vars['tabindex']; ?>
" size="<?php echo $this->_tpl_vars['displayParams']['size']; ?>
" value=""  title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_TEAM_SELECTED_TITLE'), $this);?>
"  autocomplete="off" <?php echo $this->_tpl_vars['displayParams']['readOnly']; ?>
 <?php echo $this->_tpl_vars['displayParams']['field']; ?>
>
            <input type="hidden" name="id_<?php echo $this->_tpl_vars['vardef']['name']; ?>
_collection_0" id="id_<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['vardef']['name']; ?>
_collection_0"" value="">
            </span>
        </td>
<!-- BEGIN Remove and Radio -->
        <td valign='top' align='left' nowrap class="teamset-row">
            &nbsp;
			<?php ob_start(); ?>id="remove_<?php echo $this->_tpl_vars['vardef']['name']; ?>
_collection_0" name="remove_<?php echo $this->_tpl_vars['vardef']['name']; ?>
_collection_0" onclick="collection['<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['vardef']['name']; ?>
'].remove(0);"<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('attr', ob_get_contents());ob_end_clean(); ?>
			<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_ID_FF_REMOVE'), $this); $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('alt', ob_get_contents());ob_end_clean(); ?>

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
_<?php echo $this->_tpl_vars['vardef']['name']; ?>
_radio_div_0'>
            &nbsp;
            <input id="primary_<?php echo $this->_tpl_vars['vardef']['name']; ?>
_collection_0" name="primary_<?php echo $this->_tpl_vars['vardef']['name']; ?>
_collection" type="radio" class="radio" <?php if ($this->_tpl_vars['displayParams']['primaryChecked']): ?>checked="checked" <?php endif; ?> title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_TEAM_SELECT_AS_PRIM_TITLE'), $this);?>
"value="0" onclick="collection['<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['vardef']['name']; ?>
'].changePrimary(true);"/>
            </span>
        </td>
        <td>
        &nbsp;
        </td>
<!-- END Remove and Radio -->
    </tr>
</table>
<?php if ($this->_tpl_vars['includeMassUpdateField']): ?>
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
<?php endif; ?>

<script type="text/javascript">
	if(collection["<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['vardef']['name']; ?>
"] && collection["<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['vardef']['name']; ?>
"].secondaries_values.length == 0) {
		<?php if (! empty ( $this->_tpl_vars['values']['secondaries'] )): ?>
			<?php $_from = $this->_tpl_vars['values']['secondaries']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['secondary_field']):
?>   
			var temp_array = new Array();  
			temp_array['name'] = '<?php echo $this->_tpl_vars['secondary_field']['name']; ?>
';
			temp_array['id'] = '<?php echo $this->_tpl_vars['secondary_field']['id']; ?>
';
			collection["<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['vardef']['name']; ?>
"].secondaries_values.push(temp_array);
			<?php endforeach; endif; unset($_from); ?>
		<?php endif; ?>
	    collection_field = collection["<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['vardef']['name']; ?>
"];
		collection_field.add_secondaries(collection_field.secondaries_values);	
	}

 	document.forms["<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
"].elements["id_<?php echo $this->_tpl_vars['vardef']['name']; ?>
_collection_0"].value = "<?php echo $this->_tpl_vars['values']['primary']['id']; ?>
";
 	document.forms["<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
"].elements["<?php echo $this->_tpl_vars['vardef']['name']; ?>
_collection_0"].value = "<?php echo $this->_tpl_vars['values']['primary']['name']; ?>
";
  
    <?php if (isset ( $this->_tpl_vars['displayParams']['arrow'] ) && $this->_tpl_vars['displayParams']['arrow'] == 'show'): ?>
        setTimeout('call_js_more(collection_field)',1000);
    <?php endif; ?>
    
    <?php echo '
	function call_js_more(c) {
	    c.js_more();
	}    
	
	function open_popup_for_email_teams(module_name, width, height, initial_filter, close_popup, hide_clear_button, popup_request_data, custom_method, user_id, popup_mode, create, metadata) {
		// set the variables that the popup will pull from
		window.document.popup_request_data = popup_request_data;
		window.document.close_popup = close_popup;
		//globally changing width and height of standard pop up window from 600 x 400 to 800 x 800 
		width = (width == 600) ? 800 : width;
		height = (height == 400) ? 800 : height;
		// launch the popup
		URL = \'index.php?\'
			+ \'module=\' + module_name
			+ \'&action=Popup\';
		
		if(initial_filter != \'\')
		{
			URL += \'&query=true\' + initial_filter;
		}
		
		if(hide_clear_button)
		{
			URL += \'&hide_clear_button=true\';
		}
		
		windowName = \'popup_window\';
		
		windowFeatures = \'width=\' + width
			+ \',height=\' + height
			+ \',resizable=1,scrollbars=1\';
	
		if (popup_mode == \'\' && popup_mode == \'undefined\') {
			popup_mode=\'single\';		
		}
		URL+=\'&mode=\'+popup_mode;
		if (create == \'\' && create == \'undefined\') {
			create = \'false\';
		}
		URL+=\'&create=\'+create;
	
		if (metadata != \'\' && metadata != \'undefined\') {
			URL+=\'&metadata=\'+metadata;	
		}
	
	    if(custom_method != \'\') {
	    	URL+=\'&custom_method=\' + custom_method;
		}
		
		if(user_id != \'\') {
		    URL+=\'&user_id=\' + user_id;
		}
		
		win = window.open(URL, windowName, windowFeatures);
	
		if(window.focus)
		{
			// put the focus on the popup if the browser supports the focus() method
			win.focus();
		}
	
		return win;	
	}
	'; ?>

</script>
<?php echo $this->_tpl_vars['quickSearchCode']; ?>
