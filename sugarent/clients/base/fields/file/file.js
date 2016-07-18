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
({fieldTag:'input[type=file]',supportedImageExtensions:{'image/jpeg':'jpg','image/png':'png','image/gif':'gif'},events:{'click [data-action=download]':'startDownload','click [data-action=delete]':'deleteFile'},fileUrl:'',plugins:['File','FieldDuplicate','EllipsisInline'],initialize:function(options){this._super('initialize',[options]);app.error.errorName2Keys['tooBig']='ERROR_MAX_FILESIZE_EXCEEDED';app.error.errorName2Keys['uploadFailed']='ERROR_UPLOAD_FAILED';if(this.model){this.model.addValidationTask('file_upload_'+this.cid,_.bind(this._doValidateFile,this));}},_doValidateFile:function(fields,errors,callback){var fieldName=this.name,$field=this.$(this.fieldTag);if($field.length===0){callback(null,fields,errors);return;}
var val=$field.val();if(_.isEmpty(val)){if(this.def.required){errors[fieldName]=errors[fieldName]||{};errors[fieldName].required=true;}
callback(null,fields,errors);return;}
var ajaxParams={temp:true,iframe:true,deleteIfFails:false,htmlJsonFormat:true};app.alert.show('upload',{level:'process',title:app.lang.get('LBL_UPLOADING'),autoclose:false});this.model.uploadFile(fieldName,$field,{success:_.bind(this._doValidateFileSuccess,this,fields,errors,callback),error:_.bind(this._doValidateFileError,this,fields,errors,callback)},ajaxParams);},_doValidateFileSuccess:function(fields,errors,callback,data){app.alert.dismiss('upload');var guid=data.record&&data.record.id;if(!guid){app.logger.error('Temporary file uploaded has no GUID.');this._doValidateFileError(fields,errors,callback,data);return;}
var fieldName=this.name;if(!this.model.fields[fieldName+'_guid']){this.model.fields[fieldName+'_guid']={type:'file_temp',group:fieldName};}
this.model.set(fieldName+'_guid',guid);this.model.set(fieldName,data.record[fieldName]);callback(null,fields,errors);},_doValidateFileError:function(fields,errors,callback,resp){app.alert.dismiss('upload');var errors=errors||{},fieldName=this.name;errors[fieldName]={};switch(resp.error){case'request_too_large':errors[fieldName].tooBig=true;break;default:errors[fieldName].uploadFailed=true;}
this.model.unset(fieldName+'_guid');callback(null,fields,errors);},_dispose:function(){this.model.removeValidationTask('file_upload_'+this.cid);this._super('_dispose');},deleteFile:function(e){var self=this;if(this.model.isNew()){this.model.unset(this.name);if(this.disposed){return;}
this.render();return;}
app.alert.show('delete_file_confirmation',{level:'confirmation',messages:app.lang.get('LBL_FILE_DELETE_CONFIRM',self.module),onConfirm:function(){var data={module:self.module,id:self.model.id,field:self.name},callbacks={success:function(){self.model.set(self.name,'');self.model.save({},{showAlerts:{'process':true,'success':{messages:app.lang.get('LBL_FILE_DELETED',self.module)}},fields:[self.name]});if(self.disposed){return;}
self.render();},error:function(data){app.error.handleHttpError(data,{});}};app.api.file('delete',data,null,callbacks,{htmlJsonFormat:false});}});},setMode:function(name){if(!_.isEmpty(this._errors)){if(this.action==='edit'){this.clearErrorDecoration();this.decorateError(this._errors);return;}}
this._super('setMode',[name]);},_loadTemplate:function(){this._super('_loadTemplate');if(this.view.name==='merge-duplicates'){this.template=app.template.getField(this.type,'merge-duplicates-'+this.tplName,this.module,this.tplName)||app.template.empty;this.tplName='list';}},onFieldDuplicate:function(){if(this.disposed||this.view.name!=='merge-duplicates'||this.options.viewName!=='edit'){return;}
this.render();},_render:function(){this.model=this.model||this.view.model;app.view.Field.prototype._render.call(this);return this;},format:function(value){var attachments=[];if(_.isArray(value)){_.each(value,function(file){var fileObj={name:file.name,url:this.formatUri(file.uri)};attachments.push(fileObj);},this);}else if(value){var urlOpts={module:this.module,id:this.model.id,field:this.name},fileObj=this._createFileObj(value,urlOpts);attachments.push(fileObj);}
return attachments;},_createFileObj:function(value,urlOpts){var isImage=this._isImage(this.model.get('file_mime_type')),forceDownload=!isImage,mimeType=isImage?'image':'',docType=this.model.get('doc_type');return{name:value,mimeType:mimeType,docType:docType,url:app.api.buildFileURL(urlOpts,{htmlJsonFormat:false,passOAuthToken:false,cleanCache:true,forceDownload:forceDownload})};},formatUri:function(uri){return uri;},startDownload:function(e){var uri=this.$(e.currentTarget).data('url');app.api.fileDownload(uri,{error:function(data){app.error.handleHttpError(data,{});}},{iframe:this.$el});},bindDataChange:function(){if(!this.model){return;}
this.model.on('change:'+this.name,function(){this._errors={};this.clearErrorDecoration();if(_.isUndefined(this.options.viewName)||this.options.viewName!=='edit'){this.render();}},this);},unformat:function(value){return value.split('/').pop().split('\\').pop();},_isImage:function(mimeType){return!!this.supportedImageExtensions[mimeType];}})