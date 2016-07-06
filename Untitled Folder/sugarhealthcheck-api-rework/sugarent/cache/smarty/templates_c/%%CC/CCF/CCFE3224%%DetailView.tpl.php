<?php /* Smarty version 2.6.11, created on 2016-07-04 13:56:32
         compiled from cache/modules/Users/DetailView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_getjspath', 'cache/modules/Users/DetailView.tpl', 3, false),array('function', 'sugar_image', 'cache/modules/Users/DetailView.tpl', 24, false),array('function', 'sugar_csrf_form_token', 'cache/modules/Users/DetailView.tpl', 43, false),array('function', 'sugar_action_menu', 'cache/modules/Users/DetailView.tpl', 58, false),array('function', 'sugar_include', 'cache/modules/Users/DetailView.tpl', 79, false),array('function', 'counter', 'cache/modules/Users/DetailView.tpl', 84, false),array('function', 'sugar_getimagepath', 'cache/modules/Users/DetailView.tpl', 87, false),array('function', 'sugar_translate', 'cache/modules/Users/DetailView.tpl', 90, false),array('function', 'sugar_getimage', 'cache/modules/Users/DetailView.tpl', 122, false),array('function', 'sugar_phone', 'cache/modules/Users/DetailView.tpl', 416, false),array('function', 'sugar_help', 'cache/modules/Users/DetailView.tpl', 1057, false),array('modifier', 'strip_semicolon', 'cache/modules/Users/DetailView.tpl', 105, false),array('modifier', 'escape', 'cache/modules/Users/DetailView.tpl', 692, false),array('modifier', 'url2html', 'cache/modules/Users/DetailView.tpl', 692, false),array('modifier', 'nl2br', 'cache/modules/Users/DetailView.tpl', 692, false),)), $this); ?>


<script type='text/javascript' src='<?php echo smarty_function_sugar_getjspath(array('file' => 'modules/Users/DetailView.js'), $this);?>
'></script>
<script type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file' => 'cache/include/javascript/sugar_grp_yui_widgets.js'), $this);?>
"></script>
<script type='text/javascript'>
var LBL_NEW_USER_PASSWORD = '<?php echo $this->_tpl_vars['MOD']['LBL_NEW_USER_PASSWORD_2']; ?>
';
<?php if (! empty ( $this->_tpl_vars['ERRORS'] )):  echo '
YAHOO.SUGAR.MessageBox.show({title: \'';  echo $this->_tpl_vars['ERROR_MESSAGE'];  echo '\', msg: \'';  echo $this->_tpl_vars['ERRORS'];  echo '\'} );
'; ?>

<?php endif; ?>
</script>
<script type="text/javascript">
var user_detailview_tabs = new YAHOO.widget.TabView("user_detailview_tabs");

<?php echo '
user_detailview_tabs.on(\'contentReady\', function(e){
'; ?>

<?php if ($this->_tpl_vars['EDIT_SELF'] && $this->_tpl_vars['SHOW_DOWNLOADS_TAB']):  echo '
    user_detailview_tabs.addTab( new YAHOO.widget.Tab({
        label: \'';  echo $this->_tpl_vars['MOD']['LBL_DOWNLOADS'];  echo '\',
        dataSrc: \'index.php?to_pdf=1&module=Home&action=pluginList\',
        content: \'<div style="text-align:center; width: 100%">';  echo smarty_function_sugar_image(array('name' => 'loading'), $this); echo '</div>\',
        cacheData: true
    }));
    user_detailview_tabs.getTab(3).getElementsByTagName(\'a\')[0].id = \'tab4\';
'; ?>

<?php endif; ?>
});
<?php echo '
$(document).ready(function(){
        $("ul.clickMenu").each(function(index, node){
            $(node).sugarActionMenu();
        });
    });
'; ?>

</script>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="actionsContainer">
<tr>
<td width="20%">
<form action="index.php" method="post" name="DetailView" id="form">
<?php echo smarty_function_sugar_csrf_form_token(array(), $this);?>

<input type="hidden" name="module" value="Users">
<input type="hidden" name="record" value="<?php echo $this->_tpl_vars['ID']; ?>
">
<input type="hidden" name="isDuplicate" value=false>
<input type="hidden" name="action">
<input type="hidden" name="user_name" value="<?php echo $this->_tpl_vars['USER_NAME']; ?>
">
<input type="hidden" id="user_type" name="user_type" value="<?php echo $this->_tpl_vars['UserType']; ?>
">
<input type="hidden" name="password_generate">
<input type="hidden" name="old_password">
<input type="hidden" name="new_password">
<input type="hidden" name="return_module">
<input type="hidden" name="return_action">
<input type="hidden" name="return_id">
<table width="100%" cellpadding="0" cellspacing="0" border="0">
<tr><td colspan='2' width="100%" nowrap>
<?php echo smarty_function_sugar_action_menu(array('id' => 'detail_header_action_menu','class' => 'clickMenu fancymenu','buttons' => $this->_tpl_vars['EDITBUTTONS']), $this);?>

</td></tr>
</table>
</form>
</td>
<td width="100%">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<?php echo $this->_tpl_vars['PAGINATION']; ?>

</table>
</td>
</tr>
</table>
<div id="user_detailview_tabs" class="yui-navset detailview_tabs">
<ul class="yui-nav">
<li class="selected"><a id="tab1" href="#tab1"><em><?php echo $this->_tpl_vars['MOD']['LBL_USER_INFORMATION']; ?>
</em></a></li>
<li <?php if ($this->_tpl_vars['IS_GROUP_OR_PORTAL']): ?>style="display: none;"<?php endif; ?>><a id="tab2" href="#tab2"><em><?php echo $this->_tpl_vars['MOD']['LBL_ADVANCED']; ?>
</em></a></li>
<?php if ($this->_tpl_vars['SHOW_ROLES']): ?>
<li><a id="tab3" href="#tab3"><em><?php echo $this->_tpl_vars['MOD']['LBL_USER_ACCESS']; ?>
</em></a></li>
<?php endif; ?>
</ul>
<div class="yui-content">
<div><?php echo smarty_function_sugar_include(array('include' => $this->_tpl_vars['includes']), $this);?>

<div id="Users_detailview_tabs"
>
<div >
<div id='detailpanel_1' class='detail view  detail508 expanded'>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','start' => 0,'print' => false,'assign' => 'panelFieldCount'), $this);?>

<h4>
<a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(1);">
<img border="0" id="detailpanel_1_img_hide" src="<?php echo smarty_function_sugar_getimagepath(array('file' => "basic_search.gif"), $this);?>
"></a>
<a href="javascript:void(0)" class="expandLink" onclick="expandPanel(1);">
<img border="0" id="detailpanel_1_img_show" src="<?php echo smarty_function_sugar_getimagepath(array('file' => "advanced_search.gif"), $this);?>
"></a>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_USER_INFORMATION','module' => 'Users'), $this);?>

<script>
document.getElementById('detailpanel_1').className += ' expanded';
</script>
</h4>
<table id='LBL_USER_INFORMATION' class="panelContainer" cellspacing='<?php echo $this->_tpl_vars['gridline']; ?>
'>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php if ($this->_tpl_vars['fields']['full_name']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['full_name']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_NAME','module' => 'Users'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['full_name']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['full_name']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['full_name']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['full_name']['value']); ?>
<?php endif; ?>
<span id='<?php echo $this->_tpl_vars['fields']['full_name']['name']; ?>
'><?php echo $this->_tpl_vars['fields']['full_name']['value']; ?>
</span>
&nbsp;&nbsp;
<span class="id-ff">
<a id="btn_vCardButton" title="<?php echo $this->_tpl_vars['APP']['LBL_VCARD']; ?>
" href="#"><?php echo smarty_function_sugar_getimage(array('alt' => $this->_tpl_vars['app_strings']['LBL_ID_FF_VCARD'],'name' => "id-ff-vcard",'ext' => ".png"), $this);?>
</a>
</span>
<?php echo '
<script type="text/javascript">
    $("#btn_vCardButton").click(function(e){
        '; ?>

        window.location.assign('index.php?module=<?php echo $this->_tpl_vars['module']; ?>
&action=vCard&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
&to_pdf=true');
        <?php echo '

        if (e.preventDefault) {
            e.preventDefault();
        }
    });
</script>
'; ?>

<?php endif; ?>
</td>
<?php else: ?>
<td>&nbsp;</td><td>&nbsp;</td>
<?php endif;  if ($this->_tpl_vars['fields']['user_name']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['user_name']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_USER_NAME','module' => 'Users'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['user_name']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['user_name']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['user_name']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['user_name']['value']);  endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['user_name']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['user_name']['value']; ?>
</span>
<?php endif; ?>
</td>
<?php else: ?>
<td>&nbsp;</td><td>&nbsp;</td>
<?php endif; ?>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php if ($this->_tpl_vars['fields']['status']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['status']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_STATUS','module' => 'Users'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['status']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>



<?php if (is_string ( $this->_tpl_vars['fields']['status']['options'] )): ?>
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['status']['options']; ?>
">
<?php echo $this->_tpl_vars['fields']['status']['options']; ?>

<?php else: ?>
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['status']['value']; ?>
">
<?php echo $this->_tpl_vars['fields']['status']['options'][$this->_tpl_vars['fields']['status']['value']]; ?>

<?php endif;  endif; ?>
</td>
<?php else: ?>
<td>&nbsp;</td><td>&nbsp;</td>
<?php endif;  if ($this->_tpl_vars['fields']['UserType']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['UserType']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_USER_TYPE','module' => 'Users'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['UserType']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>

<span id="UserType" class="sugar_field"><?php echo $this->_tpl_vars['USER_TYPE_READONLY']; ?>
</span>
<?php endif; ?>
</td>
<?php else: ?>
<td>&nbsp;</td><td>&nbsp;</td>
<?php endif; ?>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php if ($this->_tpl_vars['fields']['picture']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['picture']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_PICTURE_FILE','module' => 'Users'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%' colspan='3' >
<?php if (! $this->_tpl_vars['fields']['picture']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['picture']['name']; ?>
" value="$fields.picture.value">
<?php if (isset ( $this->_tpl_vars['displayParams']['link'] )): ?>
<a href=''>
<?php else: ?>
<a href="javascript:SUGAR.image.lightbox(YAHOO.util.Dom.get('img_<?php echo $this->_tpl_vars['fields']['picture']['name']; ?>
').src)">
<?php endif; ?>
<img
id="img_<?php echo $this->_tpl_vars['fields']['picture']['name']; ?>
" 
name="img_<?php echo $this->_tpl_vars['fields']['picture']['name']; ?>
" 
<?php if (empty ( $this->_tpl_vars['fields']['picture']['value'] )): ?>
src='' 	
<?php else: ?>
src='index.php?entryPoint=download&id=<?php echo $this->_tpl_vars['fields']['picture']['value']; ?>
&type=SugarFieldImage&isTempFile=1'
<?php endif; ?>
style='
<?php if (empty ( $this->_tpl_vars['fields']['picture']['value'] )): ?>
display:	none;
<?php endif;  if ("" == ""): ?>
border: 0; 
<?php else: ?>
border: 1px solid black; 
<?php endif;  if ('42' == ""): ?>
width: auto;
<?php else: ?>
width: 42px;
<?php endif;  if ('42' == ""): ?>
height: auto;
<?php else: ?>
height: 42px;
<?php endif; ?>
'		
>
</a>
<?php endif; ?>
</td>
<?php else: ?>
<td>&nbsp;</td><td>&nbsp;</td>
<?php endif; ?>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif; ?>
</table>
<script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() { initPanel(1, 'expanded'); }); </script>
</div>
<?php if ($this->_tpl_vars['panelFieldCount'] == 0): ?>
<script>document.getElementById("LBL_USER_INFORMATION").style.display='none';</script>
<?php endif; ?>
<div id='detailpanel_2' class='detail view  detail508 expanded'>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','start' => 0,'print' => false,'assign' => 'panelFieldCount'), $this);?>

<h4>
<a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(2);">
<img border="0" id="detailpanel_2_img_hide" src="<?php echo smarty_function_sugar_getimagepath(array('file' => "basic_search.gif"), $this);?>
"></a>
<a href="javascript:void(0)" class="expandLink" onclick="expandPanel(2);">
<img border="0" id="detailpanel_2_img_show" src="<?php echo smarty_function_sugar_getimagepath(array('file' => "advanced_search.gif"), $this);?>
"></a>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_EMPLOYEE_INFORMATION','module' => 'Users'), $this);?>

<script>
document.getElementById('detailpanel_2').className += ' expanded';
</script>
</h4>
<table id='LBL_EMPLOYEE_INFORMATION' class="panelContainer" cellspacing='<?php echo $this->_tpl_vars['gridline']; ?>
'>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php if ($this->_tpl_vars['fields']['employee_status']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['employee_status']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_EMPLOYEE_STATUS','module' => 'Users'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['employee_status']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>



<?php if (is_string ( $this->_tpl_vars['fields']['employee_status']['options'] )): ?>
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['employee_status']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['employee_status']['options']; ?>
">
<?php echo $this->_tpl_vars['fields']['employee_status']['options']; ?>

<?php else: ?>
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['employee_status']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['employee_status']['value']; ?>
">
<?php echo $this->_tpl_vars['fields']['employee_status']['options'][$this->_tpl_vars['fields']['employee_status']['value']]; ?>

<?php endif;  endif; ?>
</td>
<?php else: ?>
<td>&nbsp;</td><td>&nbsp;</td>
<?php endif;  if ($this->_tpl_vars['fields']['show_on_employees']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['show_on_employees']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_SHOW_ON_EMPLOYEES','module' => 'Users'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['show_on_employees']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strval ( $this->_tpl_vars['fields']['show_on_employees']['value'] ) == '1' || strval ( $this->_tpl_vars['fields']['show_on_employees']['value'] ) == 'yes' || strval ( $this->_tpl_vars['fields']['show_on_employees']['value'] ) == 'on'): ?> 
<?php $this->assign('checked', 'CHECKED'); ?>
<?php else: ?>
<?php $this->assign('checked', ""); ?>
<?php endif; ?>
<input type="checkbox" class="checkbox" name="<?php echo $this->_tpl_vars['fields']['show_on_employees']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['show_on_employees']['name']; ?>
" value="$fields.show_on_employees.value" disabled="true" <?php echo $this->_tpl_vars['checked']; ?>
>
<?php endif; ?>
</td>
<?php else: ?>
<td>&nbsp;</td><td>&nbsp;</td>
<?php endif; ?>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php if ($this->_tpl_vars['fields']['title']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['title']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_TITLE','module' => 'Users'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['title']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['title']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['title']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['title']['value']);  endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['title']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['title']['value']; ?>
</span>
<?php endif; ?>
</td>
<?php else: ?>
<td>&nbsp;</td><td>&nbsp;</td>
<?php endif;  if ($this->_tpl_vars['fields']['phone_work']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['phone_work']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_WORK_PHONE','module' => 'Users'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  class="phone">
<?php if (! $this->_tpl_vars['fields']['phone_work']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (! empty ( $this->_tpl_vars['fields']['phone_work']['value'] )):  $this->assign('phone_value', $this->_tpl_vars['fields']['phone_work']['value']);  echo smarty_function_sugar_phone(array('value' => $this->_tpl_vars['phone_value'],'usa_format' => '0'), $this);?>

<?php endif;  endif; ?>
</td>
<?php else: ?>
<td>&nbsp;</td><td>&nbsp;</td>
<?php endif; ?>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php if ($this->_tpl_vars['fields']['department']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['department']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_DEPARTMENT','module' => 'Users'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['department']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['department']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['department']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['department']['value']);  endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['department']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['department']['value']; ?>
</span>
<?php endif; ?>
</td>
<?php else: ?>
<td>&nbsp;</td><td>&nbsp;</td>
<?php endif;  if ($this->_tpl_vars['fields']['phone_mobile']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['phone_mobile']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_MOBILE_PHONE','module' => 'Users'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  class="phone">
<?php if (! $this->_tpl_vars['fields']['phone_mobile']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (! empty ( $this->_tpl_vars['fields']['phone_mobile']['value'] )):  $this->assign('phone_value', $this->_tpl_vars['fields']['phone_mobile']['value']);  echo smarty_function_sugar_phone(array('value' => $this->_tpl_vars['phone_value'],'usa_format' => '0'), $this);?>

<?php endif;  endif; ?>
</td>
<?php else: ?>
<td>&nbsp;</td><td>&nbsp;</td>
<?php endif; ?>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php if ($this->_tpl_vars['fields']['reports_to_name']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['reports_to_name']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_REPORTS_TO_NAME','module' => 'Users'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['reports_to_name']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<span id="reports_to_id" class="sugar_field" data-id-value="<?php echo $this->_tpl_vars['fields']['reports_to_id']['value']; ?>
"><?php echo $this->_tpl_vars['fields']['reports_to_name']['value']; ?>
</span>
<?php endif; ?>
</td>
<?php else: ?>
<td>&nbsp;</td><td>&nbsp;</td>
<?php endif;  if ($this->_tpl_vars['fields']['phone_other']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['phone_other']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_OTHER_PHONE','module' => 'Users'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  class="phone">
<?php if (! $this->_tpl_vars['fields']['phone_other']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (! empty ( $this->_tpl_vars['fields']['phone_other']['value'] )):  $this->assign('phone_value', $this->_tpl_vars['fields']['phone_other']['value']);  echo smarty_function_sugar_phone(array('value' => $this->_tpl_vars['phone_value'],'usa_format' => '0'), $this);?>

<?php endif;  endif; ?>
</td>
<?php else: ?>
<td>&nbsp;</td><td>&nbsp;</td>
<?php endif; ?>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
&nbsp;
</td>
<td width='37.5%'  >
</td>
<?php if ($this->_tpl_vars['fields']['phone_fax']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['phone_fax']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_FAX_PHONE','module' => 'Users'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  class="phone">
<?php if (! $this->_tpl_vars['fields']['phone_fax']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (! empty ( $this->_tpl_vars['fields']['phone_fax']['value'] )):  $this->assign('phone_value', $this->_tpl_vars['fields']['phone_fax']['value']);  echo smarty_function_sugar_phone(array('value' => $this->_tpl_vars['phone_value'],'usa_format' => '0'), $this);?>

<?php endif;  endif; ?>
</td>
<?php else: ?>
<td>&nbsp;</td><td>&nbsp;</td>
<?php endif; ?>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
&nbsp;
</td>
<td width='37.5%'  >
</td>
<?php if ($this->_tpl_vars['fields']['phone_home']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['phone_home']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_HOME_PHONE','module' => 'Users'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  class="phone">
<?php if (! $this->_tpl_vars['fields']['phone_home']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (! empty ( $this->_tpl_vars['fields']['phone_home']['value'] )):  $this->assign('phone_value', $this->_tpl_vars['fields']['phone_home']['value']);  echo smarty_function_sugar_phone(array('value' => $this->_tpl_vars['phone_value'],'usa_format' => '0'), $this);?>

<?php endif;  endif; ?>
</td>
<?php else: ?>
<td>&nbsp;</td><td>&nbsp;</td>
<?php endif; ?>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php if ($this->_tpl_vars['fields']['messenger_type']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['messenger_type']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_MESSENGER_TYPE','module' => 'Users'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['messenger_type']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>



<?php if (is_string ( $this->_tpl_vars['fields']['messenger_type']['options'] )): ?>
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['messenger_type']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['messenger_type']['options']; ?>
">
<?php echo $this->_tpl_vars['fields']['messenger_type']['options']; ?>

<?php else: ?>
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['messenger_type']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['messenger_type']['value']; ?>
">
<?php echo $this->_tpl_vars['fields']['messenger_type']['options'][$this->_tpl_vars['fields']['messenger_type']['value']]; ?>

<?php endif;  endif; ?>
</td>
<?php else: ?>
<td>&nbsp;</td><td>&nbsp;</td>
<?php endif;  if ($this->_tpl_vars['fields']['messenger_id']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['messenger_id']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_MESSENGER_ID','module' => 'Users'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['messenger_id']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['messenger_id']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['messenger_id']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['messenger_id']['value']);  endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['messenger_id']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['messenger_id']['value']; ?>
</span>
<?php endif; ?>
</td>
<?php else: ?>
<td>&nbsp;</td><td>&nbsp;</td>
<?php endif; ?>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php if ($this->_tpl_vars['fields']['address_street']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['address_street']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_ADDRESS_STREET','module' => 'Users'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['address_street']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<span class="sugar_field" id="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['address_street']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['address_street']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlentitydecode') : smarty_modifier_escape($_tmp, 'htmlentitydecode')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</span>
<?php endif; ?>
</td>
<?php else: ?>
<td>&nbsp;</td><td>&nbsp;</td>
<?php endif;  if ($this->_tpl_vars['fields']['address_city']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['address_city']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_ADDRESS_CITY','module' => 'Users'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['address_city']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['address_city']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['address_city']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['address_city']['value']);  endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['address_city']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['address_city']['value']; ?>
</span>
<?php endif; ?>
</td>
<?php else: ?>
<td>&nbsp;</td><td>&nbsp;</td>
<?php endif; ?>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php if ($this->_tpl_vars['fields']['address_state']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['address_state']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_ADDRESS_STATE','module' => 'Users'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['address_state']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['address_state']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['address_state']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['address_state']['value']);  endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['address_state']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['address_state']['value']; ?>
</span>
<?php endif; ?>
</td>
<?php else: ?>
<td>&nbsp;</td><td>&nbsp;</td>
<?php endif;  if ($this->_tpl_vars['fields']['address_postalcode']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['address_postalcode']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_ADDRESS_POSTALCODE','module' => 'Users'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['address_postalcode']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['address_postalcode']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['address_postalcode']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['address_postalcode']['value']);  endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['address_postalcode']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['address_postalcode']['value']; ?>
</span>
<?php endif; ?>
</td>
<?php else: ?>
<td>&nbsp;</td><td>&nbsp;</td>
<?php endif; ?>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php if ($this->_tpl_vars['fields']['address_country']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['address_country']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_ADDRESS_COUNTRY','module' => 'Users'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%' colspan='3' >
<?php if (! $this->_tpl_vars['fields']['address_country']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['address_country']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['address_country']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['address_country']['value']);  endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['address_country']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['address_country']['value']; ?>
</span>
<?php endif; ?>
</td>
<?php else: ?>
<td>&nbsp;</td><td>&nbsp;</td>
<?php endif; ?>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php if ($this->_tpl_vars['fields']['description']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['description']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_DESCRIPTION','module' => 'Users'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%' colspan='3' >
<?php if (! $this->_tpl_vars['fields']['description']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<span class="sugar_field" id="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['description']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['description']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlentitydecode') : smarty_modifier_escape($_tmp, 'htmlentitydecode')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</span>
<?php endif; ?>
</td>
<?php else: ?>
<td>&nbsp;</td><td>&nbsp;</td>
<?php endif; ?>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif; ?>
</table>
<script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() { initPanel(2, 'expanded'); }); </script>
</div>
<?php if ($this->_tpl_vars['panelFieldCount'] == 0): ?>
<script>document.getElementById("LBL_EMPLOYEE_INFORMATION").style.display='none';</script>
<?php endif; ?>
</div>
</div>

<!-- END METADATA SECTION -->
<div id='email_options'>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="detail view">
<tr>
<th align="left" scope="row" colspan="4">
<h4><?php echo $this->_tpl_vars['MOD']['LBL_MAIL_OPTIONS_TITLE']; ?>
</h4>
</th>
</tr>
<tr>
<td align="top" scope="row" width="15%">
<?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_EMAIL'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td align="top" width="85%">
<?php echo $this->_tpl_vars['NEW_EMAIL']; ?>

</td>
</tr>
<tr id="email_options_link_type">
<td align="top"  scope="row">
<?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_EMAIL_LINK_TYPE'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td >
<?php echo $this->_tpl_vars['EMAIL_LINK_TYPE']; ?>

</td>
</tr>
<?php if (! $this->_tpl_vars['HIDE_IF_CAN_USE_DEFAULT_OUTBOUND']): ?>
<tr>
<td scope="row" width="15%">
<?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_EMAIL_PROVIDER'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td width="35%">
<?php echo $this->_tpl_vars['mail_smtpdisplay']; ?>

</td>
</tr>
<?php if (! empty ( $this->_tpl_vars['mail_smtpauth_req'] )): ?>
<tr>
<td align="top"  scope="row">
<?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_MAIL_SMTPUSER'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td width="35%">
<?php echo $this->_tpl_vars['mail_smtpuser']; ?>

</td>
</tr>
<?php endif;  endif; ?>
</table>
</div>
</div>
<div>
<div id="settings">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="detail view">
<tr>
<th colspan='4' align="left" width="100%" valign="top"><h4><slot><?php echo $this->_tpl_vars['MOD']['LBL_USER_SETTINGS']; ?>
</slot></h4></th>
</tr>
<tr>
<td scope="row"><slot><?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_RECEIVE_NOTIFICATIONS'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:</slot></td>
<td><slot><input class="checkbox" type="checkbox" disabled <?php echo $this->_tpl_vars['RECEIVE_NOTIFICATIONS']; ?>
></slot></td>
<td><slot><?php echo $this->_tpl_vars['MOD']['LBL_RECEIVE_NOTIFICATIONS_TEXT']; ?>
&nbsp;</slot></td>
</tr>
<tr>
<td width="15%" scope="row"><slot><?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_DEFAULT_TEAM'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:</slot></td>
<td><slot><?php echo $this->_tpl_vars['DEFAULT_TEAM_LIST']; ?>
&nbsp;</slot></td>
<td><slot><?php echo $this->_tpl_vars['MOD']['LBL_DEFAULT_TEAM_TEXT']; ?>
&nbsp;</slot></td>
</tr>
<tr>
<td scope="row" valign="top"><slot><?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_REMINDER'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:</td>
<td valign="top" nowrap><slot><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/Meetings/tpls/reminders.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></slot></td>
<td ><slot><?php echo $this->_tpl_vars['MOD']['LBL_REMINDER_TEXT']; ?>
&nbsp;</slot></td>
</tr>
<tr>
<td valign="top" scope="row"><slot><?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_SETTINGS_URL'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:</slot></td>
<td valign="top" nowrap><slot><?php echo $this->_tpl_vars['SETTINGS_URL']; ?>
</slot></td>
<td><slot><?php echo $this->_tpl_vars['MOD']['LBL_SETTINGS_URL_DESC']; ?>
&nbsp;</slot></td>
</tr>
<tr>
<td scope="row" valign="top"><slot><?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_EXPORT_DELIMITER'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:</slot></td>
<td><slot><?php echo $this->_tpl_vars['EXPORT_DELIMITER']; ?>
</slot></td>
<td><slot><?php echo $this->_tpl_vars['MOD']['LBL_EXPORT_DELIMITER_DESC']; ?>
</slot></td>
</tr>
<tr>
<td scope="row" valign="top"><slot><?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_EXPORT_CHARSET'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:</slot></td>
<td><slot><?php echo $this->_tpl_vars['EXPORT_CHARSET_DISPLAY']; ?>
</slot></td>
<td><slot><?php echo $this->_tpl_vars['MOD']['LBL_EXPORT_CHARSET_DESC']; ?>
</slot></td>
</tr>
<tr>
<td scope="row" valign="top"><slot><?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_USE_REAL_NAMES'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:</slot></td>
<td><slot><input tabindex='3' name='use_real_names' disabled class="checkbox" type="checkbox" <?php echo $this->_tpl_vars['USE_REAL_NAMES']; ?>
></slot></td>
<td><slot><?php echo $this->_tpl_vars['MOD']['LBL_USE_REAL_NAMES_DESC']; ?>
</slot></td>
</tr>
<?php if ($this->_tpl_vars['DISPLAY_EXTERNAL_AUTH']): ?>
<tr>
<td scope="row" valign="top"><slot><?php echo ((is_array($_tmp=$this->_tpl_vars['EXTERNAL_AUTH_CLASS'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:</slot></td>
<td valign="top" nowrap><slot><input id="external_auth_only" name="external_auth_only" type="checkbox" class="checkbox" <?php echo $this->_tpl_vars['EXTERNAL_AUTH_ONLY_CHECKED']; ?>
></slot></td>
<td><slot><?php echo $this->_tpl_vars['MOD']['LBL_EXTERNAL_AUTH_ONLY']; ?>
 <?php echo $this->_tpl_vars['EXTERNAL_AUTH_CLASS']; ?>
</slot></td>
</tr>
<?php endif; ?>
</table>
</div>
<div id='locale'>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="detail view">
<tr>
<th colspan='4' align="left" width="100%" valign="top">
<h4><slot><?php echo $this->_tpl_vars['MOD']['LBL_USER_LOCALE']; ?>
</slot></h4></th>
</tr>
<tr>
<td width="15%" scope="row"><slot><?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_DATE_FORMAT'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:</slot></td>
<td><slot><?php echo $this->_tpl_vars['DATEFORMAT']; ?>
&nbsp;</slot></td>
<td><slot><?php echo $this->_tpl_vars['MOD']['LBL_DATE_FORMAT_TEXT']; ?>
&nbsp;</slot></td>
</tr>
<tr>
<td width="15%" scope="row"><slot><?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_TIME_FORMAT'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:</slot></td>
<td><slot><?php echo $this->_tpl_vars['TIMEFORMAT']; ?>
&nbsp;</slot></td>
<td><slot><?php echo $this->_tpl_vars['MOD']['LBL_TIME_FORMAT_TEXT']; ?>
&nbsp;</slot></td>
</tr>
<tr>
<td width="15%" scope="row"><slot><?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_TIMEZONE'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:</slot></td>
<td nowrap><slot><?php echo $this->_tpl_vars['TIMEZONE']; ?>
&nbsp;</slot></td>
<td><slot><?php echo $this->_tpl_vars['MOD']['LBL_ZONE_TEXT']; ?>
&nbsp;</slot></td>
</tr>
<tr>
<td width="15%" scope="row"><slot><?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_CURRENCY'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:</slot></td>
<td><slot><?php echo $this->_tpl_vars['CURRENCY_DISPLAY']; ?>
&nbsp;</slot></td>
<td><slot><?php echo $this->_tpl_vars['MOD']['LBL_CURRENCY_TEXT']; ?>
&nbsp;</slot></td>
</tr>
<tr>
<td width="15%" scope="row"><slot><?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_CURRENCY_SHOW_PREFERRED'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:</slot></td>
<td><slot><?php if ($this->_tpl_vars['currency_show_preferred']): ?>Yes<?php else: ?>No<?php endif; ?>&nbsp;</slot></td>
<td><slot><?php echo $this->_tpl_vars['MOD']['LBL_CURRENCY_SHOW_PREFERRED_TEXT']; ?>
&nbsp;</slot></td>
</tr>
<tr>
<td width="15%" scope="row"><slot><?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_SYSTEM_SIG_DIGITS'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:</slot></td>
<td><slot><?php echo $this->_tpl_vars['CURRENCY_SIG_DIGITS']; ?>
&nbsp;</slot></td>
<td><slot><?php echo $this->_tpl_vars['MOD']['LBL_SYSTEM_SIG_DIGITS_DESC']; ?>
&nbsp;</slot></td>
</tr>
<tr>
<td width="15%" scope="row"><slot><?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_NUMBER_GROUPING_SEP'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:</slot></td>
<td><slot><?php echo $this->_tpl_vars['NUM_GRP_SEP']; ?>
&nbsp;</slot></td>
<td><slot><?php echo $this->_tpl_vars['MOD']['LBL_NUMBER_GROUPING_SEP_TEXT']; ?>
&nbsp;</slot></td>
</tr><tr>
<td width="15%" scope="row"><slot><?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_DECIMAL_SEP'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:</slot></td>
<td><slot><?php echo $this->_tpl_vars['DEC_SEP']; ?>
&nbsp;</slot></td>
<td><slot></slot><?php echo $this->_tpl_vars['MOD']['LBL_DECIMAL_SEP_TEXT']; ?>
&nbsp;</td>
</tr>
</tr><tr>
<td width="15%" scope="row"><slot><?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_LOCALE_DEFAULT_NAME_FORMAT'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:</slot></td>
<td><slot><?php echo $this->_tpl_vars['NAME_FORMAT']; ?>
&nbsp;</slot></td>
<td><slot></slot><?php echo $this->_tpl_vars['MOD']['LBL_LOCALE_NAME_FORMAT_DESC']; ?>
&nbsp;</td>
</tr>
</table>
</div>
<?php if ($this->_tpl_vars['SHOW_PDF_OPTIONS']): ?>
<div id='pdf'>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="detail view">
<tr>
<th colspan='4' align="left"  width="100%" valign="top">
<h4><slot><?php echo $this->_tpl_vars['MOD']['LBL_PDF_SETTINGS']; ?>
</slot></h4></th>
</tr>
<tr>
<td width="15%" scope="row"><slot><?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_PDF_FONT_NAME_MAIN'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:</slot></td>
<td width="35%"><slot><?php echo $this->_tpl_vars['PDF_FONT_NAME_MAIN_DISPLAY']; ?>
&nbsp;</slot></td>
<td colspan="2"><slot><?php echo $this->_tpl_vars['MOD']['LBL_PDF_FONT_NAME_MAIN_TEXT']; ?>
&nbsp;</slot></td>
</tr>
<tr>
<td width="15%" scope="row"><slot><?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_PDF_FONT_SIZE_MAIN'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:</slot></td>
<td width="35%"><slot><?php echo $this->_tpl_vars['PDF_FONT_SIZE_MAIN']; ?>
&nbsp;</slot></td>
<td colspan="2"><slot><?php echo $this->_tpl_vars['MOD']['LBL_PDF_FONT_SIZE_MAIN_TEXT']; ?>
&nbsp;</slot></td>
</tr>
<tr>
<td width="15%" scope="row"><slot><?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_PDF_FONT_NAME_DATA'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:</slot></td>
<td width="35%"><slot><?php echo $this->_tpl_vars['PDF_FONT_NAME_DATA_DISPLAY']; ?>
&nbsp;</slot></td>
<td colspan="2" class="tabDetailViewDF"><slot><?php echo $this->_tpl_vars['MOD']['LBL_PDF_FONT_NAME_DATA_TEXT']; ?>
&nbsp;</slot></td>
</tr>
<tr>
<td width="15%"  scope="row"><slot><?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_PDF_FONT_SIZE_DATA'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:</slot></td>
<td width="35%" class="tabDetailViewDF"><slot><?php echo $this->_tpl_vars['PDF_FONT_SIZE_DATA']; ?>
&nbsp;</slot></td>
<td colspan="2" class="tabDetailViewDF"><slot><?php echo $this->_tpl_vars['MOD']['LBL_PDF_FONT_SIZE_DATA_TEXT']; ?>
&nbsp;</slot></td>
</tr>
</table>
</div>
<?php endif; ?>
<div id='calendar_options'>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="detail view">
<tr>
<th colspan='4' align="left" width="100%" valign="top"><h4><slot><?php echo $this->_tpl_vars['MOD']['LBL_CALENDAR_OPTIONS']; ?>
</slot></h4></th>
</tr>
<tr>
<td width="15%" scope="row"><slot><?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_PUBLISH_KEY'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:</slot></td>
<td width="20%"><slot><?php echo $this->_tpl_vars['CALENDAR_PUBLISH_KEY']; ?>
&nbsp;</slot></td>
<td width="65%"><slot><?php echo $this->_tpl_vars['MOD']['LBL_CHOOSE_A_KEY']; ?>
&nbsp;</slot></td>
</tr>
<tr>
<td width="15%" scope="row"><slot><nobr><?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_YOUR_PUBLISH_URL'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:</nobr></slot></td>
<td colspan=2><?php if ($this->_tpl_vars['CALENDAR_PUBLISH_KEY']):  echo $this->_tpl_vars['CALENDAR_PUBLISH_URL'];  else:  echo $this->_tpl_vars['MOD']['LBL_NO_KEY'];  endif; ?></td>
</tr>
<tr>
<td width="15%" scope="row"><slot><?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_SEARCH_URL'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:</slot></td>
<td colspan=2><slot><?php if ($this->_tpl_vars['CALENDAR_PUBLISH_KEY']):  echo $this->_tpl_vars['CALENDAR_SEARCH_URL'];  else:  echo $this->_tpl_vars['MOD']['LBL_NO_KEY'];  endif; ?></slot></td>
</tr>
<tr>
<td width="15%" scope="row"><slot><?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_ICAL_PUB_URL'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
: <?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_ICAL_PUB_URL_HELP']), $this);?>
</slot></td>
<td colspan=2><slot><?php if ($this->_tpl_vars['CALENDAR_PUBLISH_KEY']):  echo $this->_tpl_vars['CALENDAR_ICAL_URL'];  else:  echo $this->_tpl_vars['MOD']['LBL_NO_KEY'];  endif; ?></slot></td>
</tr>
<tr>
<td width="15%" scope="row"><slot><?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_FDOW'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:</slot></td>
<td><slot><?php echo $this->_tpl_vars['FDOWDISPLAY']; ?>
&nbsp;</slot></td>
<td><slot></slot><?php echo $this->_tpl_vars['MOD']['LBL_FDOW_TEXT']; ?>
&nbsp;</td>
</tr>
</table>
</div>
</div>
<?php if ($this->_tpl_vars['SHOW_ROLES']):  echo $this->_tpl_vars['ROLE_HTML']; ?>

<?php else: ?>
</div>
<?php endif;  if ($this->_tpl_vars['refreshMetadata']): ?>
<script type="text/javascript">
// Make an API request to check for possible http 412 codes so metadata and user
// prefs can be updates in the client
var api = parent.SUGAR.App.api;
api.call('read', api.buildURL('ping'));
</script>
<?php endif; ?><script type="text/javascript">
SUGAR.util.doWhen("typeof collapsePanel == 'function'",
        function(){
            var sugar_panel_collase = Get_Cookie("sugar_panel_collase");
            if(sugar_panel_collase != null) {
                sugar_panel_collase = YAHOO.lang.JSON.parse(sugar_panel_collase);
                for(panel in sugar_panel_collase['Users_d'])
                    if(sugar_panel_collase['Users_d'][panel])
                        collapsePanel(panel);
                    else
                        expandPanel(panel);
            }
        });
</script><?php echo '
<script type=text/javascript>
SUGAR.util.doWhen(\'!SUGAR.util.ajaxCallInProgress()\', function(){
SUGAR.forms.AssignmentHandler.registerView(\'DetailView\');
SUGAR.forms.AssignmentHandler.LINKS[\'DetailView\'] = {"created_by_link":{"relationship":"users_created_by","module":"Users","id_name":"created_by"},"users_signatures":{"relationship":"users_users_signatures"},"calls":{"relationship":"calls_users"},"kbusefulness":{"relationship":"usefulness"},"meetings":{"relationship":"meetings_users"},"contacts_sync":{"relationship":"contacts_users"},"reports_to_link":{"relationship":"user_direct_reports","id_name":"reports_to_id","module":"Users"},"reportees":{"relationship":"user_direct_reports"},"email_addresses":{"relationship":"users_email_addresses","module":"EmailAddress"},"email_addresses_primary":{"relationship":"users_email_addresses_primary"},"aclroles":{"relationship":"acl_roles_users"},"prospect_lists":{"relationship":"prospect_list_users","module":"ProspectLists"},"holidays":{"relationship":"users_holidays"},"eapm":{"relationship":"eapm_assigned_user"},"oauth_tokens":{"relationship":"oauthtokens_assigned_user","module":"OAuthTokens"},"project_resource":{"relationship":"projects_users_resources"},"quotas":{"relationship":"users_quotas"},"forecasts":{"relationship":"users_forecasts"},"activities":{"relationship":"activities_users","module":"Activities"},"acl_role_sets":{"relationship":"users_acl_role_sets"}}

YAHOO.util.Event.onContentReady(\'Users_detailview_tabs\', SUGAR.forms.AssignmentHandler.loadComplete);});</script>'; ?>
