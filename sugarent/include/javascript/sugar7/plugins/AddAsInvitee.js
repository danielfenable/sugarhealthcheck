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
(function(app){app.events.on('app:init',function(){app.plugins.register('AddAsInvitee',['view'],{onAttach:function(){this.once('render',function(){this.turnOffAutoInviteParent();if(this.isFieldPrepopulatedOnCreate('parent_name')){this.handleParentChange(this.model);}
if(this.isFieldPrepopulatedOnCreate('assigned_user_name')){this.handleAssignedUserChange(this.model);}
if(this.isFieldPrepopulatedOnCreate('contact_id')){this.addContactFromContactIdField(this.model);}
if(this.model.isNew()){this.addChangeListener('parent_name',this.handleParentChange);this.addChangeListener('assigned_user_name',this.handleAssignedUserChange);}else{this.model.once('sync',function(){this.addChangeListener('parent_name',this.handleParentChange);this.addChangeListener('assigned_user_name',this.handleAssignedUserChange);},this);}},this);},isFieldPrepopulatedOnCreate:function(fieldName){return this.model.isNew()&&!_.isUndefined(this.model.get(fieldName));},addChangeListener:function(fieldName,callback){this.model.on('change:'+fieldName,callback,this);},handleParentChange:function(model){var parent=app.data.createBean(model.get('parent_type'),{id:model.get('parent_id'),name:model.get('parent_name')});if(this.isPossibleInvitee(parent)){if(this._isCreateAndLinkAction(parent,model)){parent.deletable=false;}
this.addAsInvitee(parent);}},handleAssignedUserChange:function(model){var user;user=app.data.createBean('Users',{id:model.get('assigned_user_id'),name:model.get('assigned_user_name')});if(this.isPossibleInvitee(user)){this.addAsInvitee(user);}},addContactFromContactIdField:function(model){var contact=app.data.createBean('Contacts',{id:model.get('contact_id'),name:model.get('contact_name')});if(this.isPossibleInvitee(contact)){if(this._isCreateAndLinkAction(contact,model)){contact.deletable=false;}
this.addAsInvitee(contact);}},_isCreateAndLinkAction:function(invitee,model){return(!_.isUndefined(model.link)&&!_.isUndefined(model.link.bean)&&model.link.bean.module===invitee.module&&model.link.bean.id===invitee.id);},isPossibleInvitee:function(person){var inviteeModuleList=['Leads','Contacts','Users'],invitees=this.model.get('invitees');return(!_.isEmpty(person.id)&&_.contains(inviteeModuleList,person.module)&&!_.isUndefined(invitees));},turnOffAutoInviteParent:function(){this.model.setDefault('auto_invite_parent',false);},addAsInvitee:function(person){this.model.get('invitees').add(person,{merge:true});}});});})(SUGAR.App);