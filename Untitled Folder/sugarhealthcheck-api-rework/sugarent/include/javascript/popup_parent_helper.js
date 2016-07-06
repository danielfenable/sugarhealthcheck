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
var popup_request_data;var close_popup;function get_popup_request_data()
{return YAHOO.lang.JSON.stringify(window.document.popup_request_data);}
function get_close_popup()
{return window.document.close_popup;}
function open_popup(module_name,width,height,initial_filter,close_popup,hide_clear_button,popup_request_data,popup_mode,create,metadata)
{if(typeof(popupCount)=="undefined"||popupCount==0)
popupCount=1;window.document.popup_request_data=popup_request_data;window.document.close_popup=close_popup;width=(width==600)?800:width;height=(height==400)?800:height;URL='index.php?'
+'module='+module_name
+'&action=Popup';if(initial_filter!='')
{URL+='&query=true'+initial_filter;}
if(hide_clear_button)
{URL+='&hide_clear_button=true';}
windowName=module_name+'_popup_window'+popupCount;popupCount++;windowFeatures='width='+width
+',height='+height
+',resizable=1,scrollbars=1';if(popup_mode==''&&popup_mode=='undefined'){popup_mode='single';}
URL+='&mode='+popup_mode;if(create==''&&create=='undefined'){create='false';}
URL+='&create='+create;if(metadata!=''&&metadata!='undefined'){URL+='&metadata='+metadata;}
if(popup_request_data.jsonObject){var request_data=popup_request_data.jsonObject;}else{var request_data=popup_request_data;}
var field_to_name_array_url='';if(request_data&&request_data.field_to_name_array!='undefined'){for(var key in request_data.field_to_name_array){if(key.toLowerCase()!='id'){field_to_name_array_url+='&field_to_name[]='+encodeURIComponent(key.toLowerCase());}}}
if(field_to_name_array_url){URL+=field_to_name_array_url;}
win=window.open(URL,windowName,windowFeatures);if(window.focus)
{win.focus();}
win.popupCount=popupCount;return win;}
var from_popup_return=false;function set_return(popup_reply_data)
{from_popup_return=true;var form_name=popup_reply_data.form_name;var name_to_value_array=popup_reply_data.name_to_value_array;for(var the_key in name_to_value_array)
{if(the_key=='toJSON')
{}
else
{var displayValue=name_to_value_array[the_key].replace(/&amp;/gi,'&').replace(/&lt;/gi,'<').replace(/&gt;/gi,'>').replace(/&#039;/gi,'\'').replace(/&quot;/gi,'"');;if(window.document.forms[form_name]&&window.document.forms[form_name].elements[the_key])
{window.document.forms[form_name].elements[the_key].value=displayValue;SUGAR.util.callOnChangeListers(window.document.forms[form_name].elements[the_key]);}}}}
function set_return_and_save(popup_reply_data)
{var form_name=popup_reply_data.form_name;var name_to_value_array=popup_reply_data.name_to_value_array;for(var the_key in name_to_value_array)
{if(the_key=='toJSON')
{}
else
{window.document.forms[form_name].elements[the_key].value=name_to_value_array[the_key];SUGAR.util.callOnChangeListers(window.document.forms[form_name].elements[the_key]);}}
window.document.forms[form_name].return_module.value=window.document.forms[form_name].module.value;window.document.forms[form_name].return_action.value='DetailView';window.document.forms[form_name].return_id.value=window.document.forms[form_name].record.value;window.document.forms[form_name].action.value='Save';window.document.forms[form_name].submit();}
function set_return_and_save_targetlist(popup_reply_data)
{var form_name=popup_reply_data.form_name;var name_to_value_array=popup_reply_data.name_to_value_array;var form_index=document.forms.length-1;sugarListView.get_checks();var uids=document.MassUpdate.uid.value;if(uids==''){return false;}
for(var the_key in name_to_value_array)
{if(the_key=='toJSON')
{}
else
{for(i=form_index;i>=0;i--)
{if(form_name==window.document.forms[form_index])
{form_index=i;break;}}
window.document.forms[form_index].elements[get_element_index(form_index,the_key)].value=name_to_value_array[the_key];SUGAR.util.callOnChangeListers(window.document.forms[form_index].elements[get_element_index(form_index,the_key)]);}}
window.document.forms[form_index].elements[get_element_index(form_index,"return_module")].value=window.document.forms[form_index].elements[get_element_index(form_index,"module")].value;window.document.forms[form_index].elements[get_element_index(form_index,"return_action")].value='ListView';window.document.forms[form_index].elements[get_element_index(form_index,"uids")].value=uids;window.document.forms[form_index].submit();}
function get_element_index(form_index,element_name){var j=0;while(j<window.document.forms[form_index].elements.length){if(window.document.forms[form_index].elements[j].name==element_name){index=j;break;}
j++;}
return index;}
function get_initial_filter_by_account(form_name)
{var account_id=window.document.forms[form_name].account_id.value;var account_name=escape(window.document.forms[form_name].account_name.value);var initial_filter="&account_id="+account_id+"&account_name="+account_name;return initial_filter;}