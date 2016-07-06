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
if(typeof(SugarRest)=='undefined'){SugarRest=function(proxy_url,server_url,application_name){this.proxy_url=proxy_url;this.server_url=server_url;this.session_id=false;this.user_id=false;this.application_name=application_name;}
SugarRest.prototype.call=function(method,args,callback,params,response_type){if(!callback)callback=this.log;console.log(callback);query=this.getQuery(method,args,response_type);YAHOO.util.Connect.asyncRequest('POST',this.proxy_url,{success:callback,failure:callback,scope:this,argument:params},query);}
SugarRest.prototype.getQuery=function(method,args,response_type){if(!response_type)response_type='JSON';query='method='+method+'&input_type=JSON&response_type='+response_type;if(args!=null){m=YAHOO.lang.JSON.stringify(args);query+='&rest_data='+m;}
return query;}
SugarRest.prototype.get_server_info=function(callback){this.call('get_server_info','',callback);}
SugarRest.prototype.login=function(user_name,password){encryption='PLAIN';if(typeof(hex_md5)!='undefined'){password=hex_md5(password);encryption='MD5';}
var loginData=[{user_name:user_name,password:password,encryption:encryption,},this.application_name];console.log('Encryption:'+encryption);this.call('login',loginData,this._login);}
SugarRest.prototype._login=function(o){data=YAHOO.lang.JSON.parse(o.responseText);console.log(data);this.session_id=data['id'];this.user_id=data['name_value_list']['user_id'];}
SugarRest.prototype.logout=function(callback){this.call('logout',this.session_id,callback);}
SugarRest.prototype.get_entry=function(module_name,id,select_fields,link_names_to_related_fields,callback){this.call('get_entry',[this.session_id,module_name,id,select_fields,link_names_to_related_fields],callback);}
SugarRest.prototype.get_entries=function(module_name,ids,select_fields,link_names_to_related_fields,callback){this.call('get_entries',[this.session_id,module_name,ids,select_fields,link_names_to_related_fields],callback);}
SugarRest.prototype.seamless_login=function(){this.call('seamless_login',this.session_id,this._seamless_login);}
SugarRest.prototype._seamless_login=function(o){window.open('GET',this.server_url);}
SugarRest.prototype.get_entry_list=function(module_name,query,order_by,select_fields,offset,max_results,link_names_to_related_fields,callback){var data=[this.session_id,module_name,query,order_by,offset,select_fields,link_names_to_related_fields,max_results,0];this.call('get_entry_list',data,callback);}
SugarRest.prototype.rss_get_entry_list=function(module_name,query,order_by,select_fields,offset,max_results,link_names_to_related_fields,callback){var data=[this.session_id,module_name,query,order_by,offset,select_fields,link_names_to_related_fields,max_results,0];this.call('get_entry_list',data,callback,null,'RSS');}
SugarRest.prototype.rss_popup_get_entry_list=function(module_name,query,order_by,select_fields,offset,max_results,link_names_to_related_fields,callback){var data=[this.session_id,module_name,query,order_by,offset,select_fields,link_names_to_related_fields,max_results,0];query=this.getQuery('get_entry_list',data,'RSS');window.open(this.proxy_url+'?'+query);}
SugarRest.prototype.set_relationship=function(module_name,module_id,link_name,related_ids){var data=[this.session_id,module_name,module_id,link_name,related_ids];this.call('set_relationship',data,callback);}
SugarRest.prototype.set_relationships=function(module_name,module_ids,link_names,related_ids){var data=[this.session_id,module_name,module_ids,link_names,related_ids];this.call('set_relationship',data,callback);}
SugarRest.prototype.get_relationships=function(module_name,module_id,link_name,link_query,link_fields,link_related_fields){var data=[this.session_id,module_name,module_id,link_name,link_query,link_fields,link_related_fields];this.call('get_relationships',data,callback);}
SugarRest.prototype.set_note_attachment=function(note_id,filename,base64file,related_module,related_module_id,callback){var data=[this.session_id,[note_id,filename,base64file,related_module,related_module_id]];this.call('set_note_attachment',data,callback);}
SugarRest.prototype.get_note_attachment=function(note_id){this.call('get_note_attachment',[this.session_id,note_id]);}
SugarRest.prototype.set_document_revision=function(document_id,revision,filename,base64file,callback){var data=[this.session_id,[document_id,revision,filename,base64file]];this.call('set_document_revision',data,callback);}
SugarRest.prototype.set_document_revision=function(revision_id){this.call('get_document_revision',[this.session_id,revision_id]);}
SugarRest.prototype.log=function(o){data=YAHOO.lang.JSON.parse(o.responseText);if(typeof(console)!='undefined')console.log(data);return data;}}