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
({events:{'click .addPost':'addPost','keyup .sayit':'_handleContentChange','change .sayit':'_handleContentChange','paste .sayit':'_handleContentPaste'},className:"omnibar",plugins:['DragdropAttachments','QuickSearchFilter','Taggable','Tooltip'],initialize:function(options){this.nbspRegExp=new RegExp(String.fromCharCode(160),'g');app.view.View.prototype.initialize.call(this,options);this.user_id=app.user.get('id');this.full_name=app.user.get('full_name');this.picture_url=app.user.get('picture')?app.api.buildFileURL({module:'Users',id:this.user_id,field:'picture'}):'';this.toggleSubmitButton=_.debounce(this.toggleSubmitButton,200);this.on('attachments:add attachments:remove attachments:end',this.toggleSubmitButton,this);this.on('attachments:start',this.disableSubmitButton,this);},bindDataChange:function(){if(this.context.parent){this.context.parent.on('change',function(context){var moduleName=context.get('module'),modelId=context.get('model').get('id');this.setTaggableRecord(moduleName,modelId);},this);}
app.view.View.prototype.bindDataChange.call(this);},unbindData:function(){if(this.context.parent){this.context.parent.off(null,null,this);}
app.view.View.prototype.unbindData.call(this);},addPost:function(){var self=this,parentId=this.context.parent.get("model").id,parentType=this.context.parent.get("model").module,attachments=this.$('.activitystream-pending-attachment'),$submitButton=this.$('button.addPost'),bean;if(parentType=='Home'||parentType=='Activities'){parentType=null;parentId=null;}
var payload={activity_type:"post",parent_id:parentId||null,parent_type:parentType,data:{}};if(!$submitButton.hasClass('disabled')){payload.data=this.getPost();if(payload.data.value&&(payload.data.value.length>0)){$submitButton.addClass('disabled');bean=app.data.createBean('Activities');bean.save(payload,{success:function(model){self.$('div.sayit').empty().trigger('change').focus();model.set('picture',app.user.get('picture'));self.collection.add(model);self.context.trigger('activitystream:post:prepend',model);},complete:function(){$submitButton.removeClass('disabled');},showAlerts:true});}
this.trigger("attachments:process");}},getPost:function(){var post=this.unformatTags(this.$('div.sayit'));post.value=post.value.replace(this.nbspRegExp,' ');return post;},toggleSubmitButton:function(){var post=this.getPost(),attachments=this.getAttachments();if((post.value.length===0)&&(_.size(attachments)===0)){this.disableSubmitButton();}else{this.enableSubmitButton();}},enableSubmitButton:function(){this.$('.addPost').removeClass('disabled');},disableSubmitButton:function(){this.$('.addPost').addClass('disabled');},_handleContentChange:function(e){var el=e.currentTarget;if(el.textContent){el.setAttribute('data-hide-placeholder','true');}else{el.removeAttribute('data-hide-placeholder');}
this.toggleSubmitButton();},_handleContentPaste:function(e){_.defer(_.bind(this._handleContentChange,this),e);}})