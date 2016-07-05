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
(function(app){app.events.on('app:init',function(){app.plugins.register('EditAllRecurrences',['view'],{onAttach:function(){this.on('init',function(){this.context.on('all_recurrences:edit',this.editAllRecurrences,this);if(this.context.get('all_recurrences')===true){this.toggleAllRecurrencesMode(true);this.context.unset('all_recurrences');}else{this.toggleAllRecurrencesMode(false);}
this.model.on('sync',function(model,data,options){if(options&&options.refetch_list_collection){this._refetchListCollection();}
if(!this._isRecurringEvent(this.model)){this.toggleAllRecurrencesMode(true);if(this.context.get('action')==='edit'){this.toggleEdit(true);}}},this);});this.cancelClicked=_.wrap(this.cancelClicked,function(_super,event){_super.call(this,event);this.toggleAllRecurrencesMode(false);});this.setEditableFields=_.wrap(this.setEditableFields,function(_super){this.toggleEditRecurrenceFields(this.allRecurrencesMode);_super.call(this);});this.setRoute=_.wrap(this.setRoute,function(_super,action){if(this.allRecurrencesMode&&this._isRecurringEvent(this.model)&&action==='edit'){action='edit/all_recurrences';}
_super.call(this,action);});this.handleSave=_.wrap(this.handleSave,function(_super){_super.call(this);this._doAfterSave();});this.getCustomSaveOptions=_.wrap(this.getCustomSaveOptions,_.bind(function(_super,options){return _.extend(_super.call(this,options),this.addRecurrenceOptionsForSave(options));},this));},editAllRecurrences:function(){var parentId=this.model.get('repeat_parent_id');if(!_.isEmpty(parentId)&&parentId!==this.model.id){this.editAllRecurrencesFromParent(parentId);}else{this.toggleAllRecurrencesMode(true);this.context.trigger('button:edit_button:click');}},toggleAllRecurrencesMode:function(enabled){if(!this._isRecurringEvent(this.model)){enabled=true;}
this.allRecurrencesMode=enabled;this.setEditableFields();},toggleEditRecurrenceFields:function(editable){_.each(['repeat_type','recurrence','repeat_interval','repeat_dow','repeat_until','repeat_count'],function(field){var $editWrapper=this.$('span.record-edit-link-wrapper[data-name="'+field+'"]');if(editable){this.noEditFields=_.without(this.noEditFields,field);$editWrapper.removeClass('hide');}else if(!_.contains(this.noEditFields,field)){this.noEditFields.push(field);$editWrapper.addClass('hide');}},this);},editAllRecurrencesFromParent:function(parentId){var route=app.router.buildRoute(this.module,parentId,'edit/all-recurrences');app.router.navigate('#'+route,{trigger:true});},addRecurrenceOptionsForSave:function(options){options=options||{};if(this.allRecurrencesMode){options.params=options.params||{};options.params.all_recurrences=true;options.refetch_list_collection=true;}
return options;},_isRecurringEvent:function(model){return(model.get('repeat_type')!=='');},_doAfterSave:function(){if(this.allRecurrencesMode){this._disableNextPrevButtons();}
this.toggleAllRecurrencesMode(false);},_disableNextPrevButtons:function(){var $nextPrevButtons=this.$('.btn-group-previous-next');$nextPrevButtons.find('.next-row').addClass('disabled');$nextPrevButtons.find('.previous-row').addClass('disabled');},_enableNextPrevButtons:function(listCollection){var $nextPrevButtons=this.$('.btn-group-previous-next');if(listCollection.hasNextModel(this.model)){$nextPrevButtons.find('.next-row').removeClass('disabled');}
if(listCollection.hasPreviousModel(this.model)){$nextPrevButtons.find('.previous-row').removeClass('disabled');}},_refetchListCollection:function(){var self=this,listCollection=this.context.get('listCollection');if(listCollection&&listCollection.models&&listCollection.models.length>1){listCollection.fetch({success:function(){self._enableNextPrevButtons(listCollection);}});}}});});})(SUGAR.App);