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
({inlineEditMode:false,createMode:false,plugins:['SugarLogic','ErrorDecoration','GridBuilder','Editable','Audit','FindDuplicates','ToggleMoreLess','Tooltip'],enableHeaderButtons:true,enableHeaderPane:true,events:{'click .record-edit-link-wrapper':'handleEdit','click a[name=cancel_button]':'_deprecatedCancelClicked','click [data-action=scroll]':'paginateRecord','click .record-panel-header':'togglePanel','click #recordTab > .tab > a:not(.dropdown-toggle)':'setActiveTab','click .tab .dropdown-menu a':'triggerNavTab'},buttons:null,STATE:{EDIT:'edit',VIEW:'view'},currentState:null,noEditFields:null,_containerWidth:0,initialize:function(options){_.bindAll(this);options.meta=_.extend({},app.metadata.getView(null,'record'),options.meta);options.meta.hashSync=_.isUndefined(options.meta.hashSync)?true:options.meta.hashSync;app.view.View.prototype.initialize.call(this,options);this.buttons={};this._viewAlerts=[];this.alerts={showInvalidModel:function(){if(!this instanceof app.view.View){app.logger.error('This method should be invoked by Function.prototype.call(), passing in as argument'+'an instance of this view.');return;}
var name='invalid-data';this._viewAlerts.push(name);app.alert.show(name,{level:'error',messages:'ERR_RESOLVE_ERRORS'});},showNoAccessError:function(){if(!this instanceof app.view.View){app.logger.error('This method should be invoked by Function.prototype.call(), passing in as argument'+'an instance of this view.');return;}
app.alert.dismiss('data:sync:error');app.alert.show('server-error',{level:'error',messages:'ERR_HTTP_404_TEXT_LINE1'});this.handleCancel();var route=app.router.buildRoute(this.module);app.router.navigate(route,{trigger:true});}};this.createMode=this.context.get('create')?true:false;this.action='detail';this.context.on('change:record_label',this.setLabel,this);this.context.set('viewed',true);this.context.set('dataView','record');this.model.on('duplicate:before',this.setupDuplicateFields,this);this.model.on('error:validation',this.alerts.showInvalidModel,this);this.on('editable:keydown',this.handleKeyDown,this);this.on('editable:mousedown',this.handleMouseDown,this);this.on('field:error',this.handleFieldError,this);this.model.on('acl:change',this.handleAclChange,this);app.routing.before('route',this.beforeRouteDelete,this);$(window).on('beforeunload.delete'+this.cid,_.bind(this.warnDeleteOnRefresh,this));this.delegateButtonEvents();if(this.createMode){this.model.isNotEmpty=true;}
this.noEditFields=[];this.MORE_LESS_KEY=app.user.lastState.key(this.MORE_LESS_KEY,this);this.adjustHeaderpane=_.bind(_.debounce(this.adjustHeaderpane,50),this);$(window).on('resize.'+this.cid,this.adjustHeaderpane);$(window).on('resize.'+this.cid,this.overflowTabs);this.on('append',function(){this.overflowTabs();this.handleActiveTab();});this.on('render',this.registerShortcuts,this);},handleAclChange:function(diff){var fields=_.keys(diff);this._setNoEditFields();this.setEditableFields();var noEditFieldsMap=_.object(this.noEditFields,_.values(this.noEditFields));var $pencils=this.$('[data-wrapper=edit]');_.each($pencils,function(pencilEl){var $pencilEl=$(pencilEl);var field=$pencilEl.data('name');if(!diff[field]){return;}
var hidePencil=!_.isUndefined(noEditFieldsMap[field]);$pencilEl.toggleClass('hide',hidePencil);},this);},hasUnsavedChanges:function(){var changedAttributes,editableFieldNames=[],unsavedFields,self=this,setAsEditable=function(fieldName){if(fieldName&&_.indexOf(self.noEditFields,fieldName)===-1){editableFieldNames.push(fieldName);}};if(this.resavingAfterMetadataSync)
return false;changedAttributes=this.model.changedAttributes(this.model.getSynced());if(_.isEmpty(changedAttributes)){return false;}
_.each(this.meta.panels,function(panel){_.each(panel.fields,function(field){if(!field.readonly){setAsEditable(field.name);if(field.fields&&_.isArray(field.fields)){_.each(field.fields,function(field){setAsEditable(field.name);});}}});});unsavedFields=_.intersection(_.keys(changedAttributes),editableFieldNames);return!_.isEmpty(unsavedFields);},setupDuplicateFields:function(prefill){},setLabel:function(context,value){this.$('.record-label[data-name="'+value.field+'"]').text(value.label);},validationComplete:function(isValid){this.toggleButtons(true);if(isValid){this.handleSave();}},delegateButtonEvents:function(){this.context.on('button:edit_button:click',this.editClicked,this);this.context.on('button:save_button:click',this.saveClicked,this);this.context.on('button:delete_button:click',this.deleteClicked,this);this.context.on('button:duplicate_button:click',this.duplicateClicked,this);this.context.on('button:cancel_button:click',this.cancelClicked,this);},_render:function(){this._buildGridsFromPanelsMetadata(this.meta.panels);if(this.meta&&this.meta.panels){this._initTabsAndPanels();}
app.view.View.prototype._render.call(this);if(this.context.get('record_label')){this.setLabel(this.context,this.context.get('record_label'));}
_.each(this.fields,function(field){if(field.def.readonly&&field.name&&-1==_.indexOf(this.noEditFields,field.name)){this.$('.record-edit-link-wrapper[data-name='+field.name+']').remove();}},this);this.initButtons();this.setEditableFields();if(this.context.get('action')==='edit'){this.setButtonStates(this.STATE.EDIT);this.toggleEdit(true);}else{this.setButtonStates(this.STATE.VIEW);if(this.createMode){this.toggleEdit(true);}}
if($.contains(document.documentElement,this.$el[0])){this.handleActiveTab();this.overflowTabs();}},_initTabsAndPanels:function(){this.meta.firstPanelIsTab=this.checkFirstPanel();this.meta.lastPanelIndex=this.meta.panels.length-1;_.each(this.meta.panels,function(panel,i){if(panel.header){this.meta.firstNonHeaderPanelIndex=(i+1);}},this);var headerExists=0;if(_.first(this.meta.panels).header){headerExists=1;}
this.meta.useTabsAndPanels=false;for(i=headerExists;i<this.meta.panels.length;i++){if(this.meta.panels[i].newTab){this.meta.useTabsAndPanels=true;}}
if(this.meta.panels.length>(2+headerExists)){this.meta.useTabsAndPanels=true;}
_.each(this.meta.panels,function(panel){var panelKey=app.user.lastState.key(panel.name+':tabState',this);var panelState=app.user.lastState.get(panelKey);panel.panelState=panelState||panel.panelDefault;},this);},handleActiveTab:function(){var activeTabHref=this.getActiveTab(),activeTab=this.$('#recordTab > .tab > a[href="'+activeTabHref+'"]');if(this.createMode){this.$('#recordTab a:first').tab('show');return;}
if(activeTabHref&&activeTab){activeTab.tab('show');}else if(this.meta.useTabsAndPanels&&this.checkFirstPanel()){this.$('#recordTab a:first').tab('show');}},getActiveTab:function(){var activeTabHref=app.user.lastState.get(app.user.lastState.key('activeTab',this));if(!activeTabHref){activeTabHref=this.$('#recordTab > .tab:first-child > a').attr('href')||'';app.user.lastState.set(app.user.lastState.key('activeTab',this),activeTabHref.substring(0,activeTabHref.indexOf(this.cid)));}
else{activeTabHref+=this.cid;}
return activeTabHref;},setActiveTab:function(event){if(this.createMode){return;}
var tabTarget=this.$(event.currentTarget).attr('href'),tabKey=app.user.lastState.key('activeTab',this),cidIndex=tabTarget.indexOf(this.cid);tabTarget=tabTarget.substring(0,cidIndex);app.user.lastState.set(tabKey,tabTarget);},savePanelState:function(panelID,state){if(this.createMode){return;}
var panelKey=app.user.lastState.key(panelID+':tabState',this);app.user.lastState.set(panelKey,state);},_setNoEditFields:function(panels){panels=panels||this.meta.panels;delete this.noEditFields;this.noEditFields=[];_.each(panels,function(panel){_.each(panel.fields,function(field,index){var keys=_.keys(field);if(keys.length===1&&keys[0]==='span'){field.readonly=true;}
if(field.type==='fieldset'){if(field.readonly||_.every(field.fields,function(f){return!app.acl.hasAccessToModel('edit',this.model,f.name);},this)){this.noEditFields.push(field.name);}}else if(field.readonly||!app.acl.hasAccessToModel('edit',this.model,field.name)){this.noEditFields.push(field.name);}},this);},this);},setEditableFields:function(){delete this.editableFields;this.editableFields=[];var previousField,firstField;_.each(this.fields,function(field){var readonlyField=field.def.readonly||_.indexOf(this.noEditFields,field.def.name)>=0||field.parent||(field.name&&this.buttons[field.name]);if(readonlyField){return;}
if(previousField){previousField.nextField=field;field.prevField=previousField;}else{firstField=field;}
previousField=field;this.editableFields.push(field);},this);if(previousField){previousField.nextField=firstField;firstField.prevField=previousField;}},initButtons:function(){if(this.options.meta&&this.options.meta.buttons){_.each(this.options.meta.buttons,function(button){this.registerFieldAsButton(button.name);},this);}},showPreviousNextBtnGroup:function(){var listCollection=this.context.get('listCollection')||new app.data.createBeanCollection(this.module);var recordIndex=listCollection.indexOf(listCollection.get(this.model.id));if(listCollection&&listCollection.models&&listCollection.models.length<=1){this.showPrevNextBtnGroup=false;}else{this.showPrevNextBtnGroup=true;}
if(this.collection&&listCollection.length!==0){this.showPrevious=listCollection.hasPreviousModel(this.model);this.showNext=listCollection.hasNextModel(this.model);}},registerFieldAsButton:function(buttonName){var button=this.getField(buttonName);if(button){this.buttons[buttonName]=button;}},_renderHtml:function(){this.showPreviousNextBtnGroup();app.view.View.prototype._renderHtml.call(this);this.adjustHeaderpane();},bindDataChange:function(){this.model.on('change',function(fieldType){if(this.inlineEditMode){this.setButtonStates(this.STATE.EDIT);}
if(this.model.isNotEmpty!==true&&fieldType!=='image'){this.model.isNotEmpty=true;if(!this.disposed){this.render();}}},this);},toggleButtons:function(enable){var state=!_.isUndefined(enable)?!enable:false;_.each(this.buttons,function(button){var showOn=button.def.showOn;if(_.isUndefined(showOn)||this.currentState===showOn){button.setDisabled(state);}},this);},duplicateClicked:function(){var self=this,prefill=app.data.createBean(this.model.module);prefill.copy(this.model);this._copyNestedCollections(this.model,prefill);self.model.trigger('duplicate:before',prefill);prefill.unset('id');app.drawer.open({layout:'create',context:{create:true,model:prefill,copiedFromModelId:this.model.get('id')}},function(context,newModel){if(newModel&&newModel.id){app.router.navigate(self.model.module+'/'+newModel.id,{trigger:true});}});prefill.trigger('duplicate:field',self.model);},_copyNestedCollections:function(source,target){var collections,view;if(!_.isFunction(source.getCollectionFieldNames)){return;}
view=this;function cloneModel(model){var attributes=_.chain(model.attributes).clone().omit('_action').value();return app.data.createBean(model.module,attributes);}
function copyCollection(collection){var field,relatedFields,options;function done(sourceCollection,options){var targetCollection=target.get(collection.fieldName);if(!targetCollection){return;}
targetCollection.add(sourceCollection.map(cloneModel));}
field=view.getField(collection.fieldName,source);relatedFields=[];if(field.def.fields){relatedFields=_.map(field.def.fields,function(def){return _.isObject(def)?def.name:def;});}
options={success:done};if(relatedFields.length>0){options.fields=relatedFields;}
collection.fetchAll(options);}
collections=_.intersection(source.getCollectionFieldNames(),_.keys(source.attributes));_.each(collections,function(name){copyCollection(source.get(name));});},editClicked:function(){this.setButtonStates(this.STATE.EDIT);this.toggleEdit(true);this.setRoute('edit');},saveClicked:function(){this.toggleButtons(false);var allFields=this.getFields(this.module,this.model);var fieldsToValidate={};for(var fieldKey in allFields){if(app.acl.hasAccessToModel('edit',this.model,fieldKey)){_.extend(fieldsToValidate,_.pick(allFields,fieldKey));}}
this.model.doValidate(fieldsToValidate,_.bind(this.validationComplete,this));},_deprecatedCancelClicked:function(){var cancelBtn=this.getField('cancel_button');if(!cancelBtn||!cancelBtn.def||!cancelBtn.def.events){app.logger.warn(this.module+': Invoking the cancel_button from `this.events` has been deprecated'+' since 7.7. This handler will be removed in 7.9. Please use the `MetadataEventDriven` plugin'+' events from the \'record.php\' button metadata instead.');this.cancelClicked.apply(this,arguments);}},cancelClicked:function(){this.handleCancel();this.setButtonStates(this.STATE.VIEW);this.clearValidationErrors(this.editableFields);this.setRoute();this.unsetContextAction();},deleteClicked:function(model){this.warnDelete(model);},toggleEdit:function(isEdit){var self=this;this.toggleFields(this.editableFields,isEdit,function(){self.toggleViewButtons(isEdit);self.adjustHeaderpaneFields();});},handleEdit:function(e,cell){var target,cellData,field;if(e){target=this.$(e.target);cell=target.parents('.record-cell');}
cellData=cell.data();field=this.getField(cellData.name);this.inlineEditMode=true;this.setButtonStates(this.STATE.EDIT);this.toggleField(field);if(cell.closest('.headerpane').length>0){this.toggleViewButtons(true);this.adjustHeaderpaneFields();}},toggleViewButtons:function(isEdit){this.$('.headerpane .btn-group-previous-next').toggleClass('hide',isEdit);},handleSave:function(){if(this.disposed){return;}
this._saveModel();this.$('.record-save-prompt').hide();if(!this.disposed){this.setButtonStates(this.STATE.VIEW);this.setRoute();this.unsetContextAction();this.toggleEdit(false);this.inlineEditMode=false;}},_saveModel:function(){var options,successCallback=_.bind(function(){_.each(this.context.children,function(child){if(child.get('isSubpanel')&&!child.get('hidden')){child.get('collapsed')?child.resetLoadFlag(false):child.reloadData({recursive:false});}});if(this.createMode){app.navigate(this.context,this.model);}else if(!this.disposed&&!app.acl.hasAccessToModel('edit',this.model)){this.render();}},this);this.turnOffEvents(this.fields);options={showAlerts:true,success:successCallback,error:_.bind(function(error){if(error.status===412&&!error.request.metadataRetry){this.handleMetadataSyncError(error);}else if(error.status===409){app.utils.resolve409Conflict(error,this.model,_.bind(function(model,isDatabaseData){if(model){if(isDatabaseData){successCallback();}else{this._saveModel();}}},this));}else if(error.status===403||error.status===404){this.alerts.showNoAccessError.call(this);}else{this.editClicked();}},this),lastModified:this.model.get('date_modified'),viewed:true};options=_.extend({},options,this.getCustomSaveOptions(options));this.model.save({},options);},handleMetadataSyncError:function(error){var self=this;self.resavingAfterMetadataSync=true;app.once('app:sync:complete',function(){error.request.metadataRetry=true;self.model.once('sync',function(){self.resavingAfterMetadataSync=false;app.router.refresh();});error.request.execute(null,app.api.getMetadataHash());});},getCustomSaveOptions:function(options){return{};},handleCancel:function(){this.model.revertAttributes();this.toggleEdit(false);this.inlineEditMode=false;this._dismissAllAlerts();},beforeRouteDelete:function(){if(this._modelToDelete){this.warnDelete(this._modelToDelete);return false;}
return true;},getDeleteMessages:function(){var messages={};var model=this.model;var name=Handlebars.Utils.escapeExpression(app.utils.getRecordName(model)).trim();var context=app.lang.getModuleName(model.module).toLowerCase()+' '+name;messages.confirmation=app.utils.formatString(app.lang.get('NTC_DELETE_CONFIRMATION_FORMATTED'),[context]);messages.success=app.utils.formatString(app.lang.get('NTC_DELETE_SUCCESS'),[context]);return messages;},warnDelete:function(model){var self=this;this._modelToDelete=model;self._targetUrl=Backbone.history.getFragment();if(self._targetUrl!==self._currentUrl){app.router.navigate(self._currentUrl,{trigger:false,replace:true});}
app.alert.show('delete_confirmation',{level:'confirmation',messages:self.getDeleteMessages().confirmation,onConfirm:_.bind(self.deleteModel,self),onCancel:function(){self._modelToDelete=false;}});},warnDeleteOnRefresh:function(){if(this._modelToDelete){return this.getDeleteMessages().confirmation;}},deleteModel:function(){var self=this;self.model.destroy({showAlerts:{'process':true,'success':{messages:self.getDeleteMessages().success}},success:function(){var redirect=self._targetUrl!==self._currentUrl;self.context.trigger('record:deleted',self._modelToDelete);self._modelToDelete=false;if(redirect){self.unbindBeforeRouteDelete();app.router.navigate(self._targetUrl,{trigger:true});return;}
app.router.navigate(self.module,{trigger:true});}});},handleKeyDown:function(e,field){var whichField=e.shiftKey?'prevField':'nextField';if(e.which===9){e.preventDefault();this.nextField(field,whichField);if(field.$el.closest('.headerpane').length>0){this.toggleViewButtons(false);this.adjustHeaderpaneFields();}
if(field[whichField]&&field[whichField].$el.closest('.headerpane').length>0){this.toggleViewButtons(true);this.adjustHeaderpaneFields();}}},handleMouseDown:function(){this.toggleViewButtons(false);this.adjustHeaderpaneFields();},handleFieldError:function(field,hasError){if(!hasError){return;}
var tabLink,fieldTab=field.$el.closest('.tab-pane'),fieldPanel=field.$el.closest('.record-panel-content');if(field.view.meta&&field.view.meta.useTabsAndPanels){if(fieldTab.length>0){tabLink=this.$('[href="#'+fieldTab.attr('id')+'"].[data-toggle="tab"]');tabLink.tab('show');if(tabLink.find('.fa-exclamation-circle').length===0){tabLink.append(' <i class="fa fa-exclamation-circle tab-warning"></i>');}}
if(fieldPanel&&fieldPanel.is(':hidden')){fieldPanel.toggle();var fieldPanelArrow=fieldPanel.prev().find('i');fieldPanelArrow.toggleClass('fa-chevron-up fa-chevron-down');}}else if(field.$el.is(':hidden')){this.$('.more[data-moreless]').trigger('click');app.user.lastState.set(this.SHOW_MORE_KEY,this.$('.less[data-moreless]'));}
else if(field.$el.closest('.panel_hidden.hide').length>0){this.toggleMoreLess(this.MORE_LESS_STATUS.MORE,true);}},setButtonStates:function(state){this.currentState=state;_.each(this.buttons,function(field){var showOn=field.def.showOn;if(_.isUndefined(showOn)||(showOn===state)){field.show();}else{field.hide();}},this);this.toggleButtons(true);},getCurrentButtonState:function(){return this.currentState;},setTitle:function(title){var $title=this.$('.headerpane .module-title');if($title.length>0){$title.text(title);}else{this.$('.headerpane h1').prepend('<div class="record-cell"><span class="module-title">'+title+'</span></div>');}},unbindBeforeRouteDelete:function(){app.routing.offBefore('route',this.beforeRouteDelete,this);$(window).off('beforeunload.delete'+this.cid);},_dispose:function(){this.unbindBeforeRouteDelete();_.each(this.editableFields,function(field){field.nextField=null;field.prevField=null;});this.buttons=null;this.editableFields=null;this.off('editable:keydown',this.handleKeyDown,this);$(window).off('resize.'+this.cid);app.view.View.prototype._dispose.call(this);},_buildGridsFromPanelsMetadata:function(panels){var lastTabIndex=0;this.noEditFields=[];_.each(panels,function(panel){_.each(panel.fields,function(field,index){if(_.isString(field)){panel.fields[index]=field={name:field};}
var keys=_.keys(field);if(keys.length===1&&keys[0]==='span'){field.readonly=true;}
if(field.type==='fieldset'){if(field.readonly||_.every(field.fields,function(field){return!app.acl.hasAccessToModel('edit',this.model,field.name);},this)){this.noEditFields.push(field.name);}}else if(field.readonly||!app.acl.hasAccessToModel('edit',this.model,field.name)){this.noEditFields.push(field.name);}},this);if(panel.hide){this.hiddenPanelExists=true;}
if(_.isUndefined(panel.labels)){panel.labels=true;}
if(_.isFunction(this.getGridBuilder)){var options={fields:panel.fields,columns:panel.columns,labels:panel.labels,labelsOnTop:panel.labelsOnTop,tabIndex:lastTabIndex},gridResults=this.getGridBuilder(options).build();panel.grid=gridResults.grid;lastTabIndex=gridResults.lastTabIndex;}},this);},paginateRecord:function(evt){var el=$(evt.currentTarget),data=el.data();if(data.id){var list=this.context.get('listCollection'),model=list.get(data.id);this._doPaginate(model,data.actionType);}},_doPaginate:function(model,actionType){var list=this.context.get('listCollection');switch(actionType){case'next':list.getNext(model,this.navigateModel);break;case'prev':list.getPrev(model,this.navigateModel);break;default:this._disablePagination(el);}},navigateModel:function(model,actionType){if(model&&model.id){if(app.acl.hasAccessToModel('view',model)){app.router.navigate(app.router.buildRoute(this.module,model.id),{trigger:true});}else{this._doPaginate(model,actionType);}}else{var el=this.$el.find('[data-action=scroll][data-action-type='+actionType+']');this._disablePagination(el);}},setRoute:function(action){if(!this.meta.hashSync){return;}
app.router.navigate(app.router.buildRoute(this.module,this.model.id,action),{trigger:false});},unsetContextAction:function(){this.context.unset('action');},_disablePagination:function(el){app.logger.error('Wrong data for record pagination. Pagination is disabled.');el.addClass('disabled');el.data('id','');},adjustHeaderpane:function(){this.setContainerWidth();this.adjustHeaderpaneFields();},getContainerWidth:function(){return this._containerWidth;},setContainerWidth:function(){this._containerWidth=this._getParentLayoutWidth(this.layout);},_getParentLayoutWidth:function(layout){if(!layout){return 0;}else if(_.isFunction(layout.getPaneWidth)){return layout.getPaneWidth(this);}
return this._getParentLayoutWidth(layout.layout);},adjustHeaderpaneFields:function(){var $ellipsisCell,ellipsisCellWidth,$recordCells;if(this.disposed){return;}
$recordCells=this.$('.headerpane h1').children('.record-cell, .btn-toolbar');if(($recordCells.length>0)&&(this.getContainerWidth()>0)){$ellipsisCell=$(this._getCellToEllipsify($recordCells));if($ellipsisCell.length>0){if($ellipsisCell.hasClass('edit')){$ellipsisCell.css({'width':'100%'});}else{ellipsisCellWidth=this._calculateEllipsifiedCellWidth($recordCells,$ellipsisCell);this._setMaxWidthForEllipsifiedCell($ellipsisCell,ellipsisCellWidth);}}}
if(this.layout){this.layout.trigger('headerpane:adjust_fields');}},_getCellToEllipsify:function($cells){var fieldTypesToEllipsify=['fullname','name','text','base','enum','url','dashboardtitle'];return _.find($cells,function(cell){return(_.indexOf(fieldTypesToEllipsify,$(cell).data('type'))!==-1);});},_calculateEllipsifiedCellWidth:function($cells,$ellipsisCell){var width=this.getContainerWidth();_.each($cells,function(cell){var $cell=$(cell);if($cell.is($ellipsisCell)){width-=(parseInt($ellipsisCell.css('padding-left'),10)+
parseInt($ellipsisCell.css('padding-right'),10));}else if($cell.is(':visible')){$cell.css({'width':'auto'});width-=$cell.outerWidth();}
$cell.css({'width':''});});return width;},_setMaxWidthForEllipsifiedCell:function($ellipsisCell,width){var ellipsifiedCell,fieldType=$ellipsisCell.data('type');if(fieldType==='fullname'||fieldType==='dashboardtitle'){ellipsifiedCell=this.getField($ellipsisCell.data('name'));width-=ellipsifiedCell.getCellPadding();ellipsifiedCell.setMaxWidth(width);}else{$ellipsisCell.children().css({'max-width':width});}},getFieldNames:function(module,onlyDataFields){var fields=onlyDataFields?[]:this._super('getFieldNames',arguments),favorite=_.find(this.meta.panels,function(panel){return _.find(panel.fields,function(field){return field.type==='favorite';});}),follow=_.find(this.meta.panels,function(panel){return _.find(panel.fields,function(field){return field.type==='follow';});});if(favorite){fields=_.union(fields,['my_favorite']);}
if(follow){fields=_.union(fields,['following']);}
return fields;},togglePanel:function(e){var $panelHeader=this.$(e.currentTarget);if($panelHeader&&$panelHeader.next()){$panelHeader.next().toggle();$panelHeader.toggleClass('panel-inactive panel-active');}
if($panelHeader&&$panelHeader.find('i')){$panelHeader.find('i').toggleClass('fa-chevron-up fa-chevron-down');}
var panelName=this.$(e.currentTarget).parent().data('panelname');var state='collapsed';if(this.$(e.currentTarget).next().is(":visible")){state='expanded';}
this.savePanelState(panelName,state);},checkFirstPanel:function(){if(this.meta&&this.meta.panels){if(this.meta.panels[0]&&this.meta.panels[0].newTab&&!this.meta.panels[0].header){return true;}
if(this.meta.panels[1]&&this.meta.panels[1].newTab){return true;}}
return false;},overflowTabs:function(){var $tabs=this.$('#recordTab > .tab:not(.dropdown)'),$dropdownList=this.$('#recordTab .dropdown'),$dropdownTabs=this.$('#recordTab .dropdown-menu li'),navWidth=this.$('#recordTab').width(),activeTabHref=this.getActiveTab(),$activeTab=this.$('#recordTab > .tab > a[href="'+activeTabHref+'"]').parent(),width=$activeTab.outerWidth()+$dropdownList.outerWidth();$tabs.each(_.bind(function(index,elem){var $tab=$(elem),overflow;if($tab.hasClass('active')){overflow=false;}
else{width+=$tab.outerWidth();overflow=width>=navWidth;}
$tab.toggleClass('hidden',overflow);this.$($dropdownTabs[index]).toggleClass('hidden',!overflow);},this));$dropdownList.toggleClass('hidden',!$tabs.is(':hidden'));},triggerNavTab:function(e){var tabTarget=e.currentTarget.hash,activeTab=this.$('#recordTab > .tab > a[href="'+tabTarget+'"]');e.preventDefault();activeTab.trigger('click');this.overflowTabs();},registerShortcuts:function(){app.shortcuts.register('Record:Edit',['e','ctrl+alt+i'],function(){var $editButton=this.$('.headerpane [name=edit_button]');if($editButton.is(':visible')&&!$editButton.hasClass('disabled')){$editButton.click();}},this);app.shortcuts.register('Record:Delete',['d','ctrl+alt+d'],function(){this.$('.headerpane [data-toggle=dropdown]:visible').click().blur();this.$('.headerpane [name=delete_button]:visible').click();},this);app.shortcuts.register('Record:Save',['ctrl+s','ctrl+alt+a'],function(){var $saveButton=this.$('a[name=save_button]');if($saveButton.is(':visible')&&!$saveButton.hasClass('disabled')){$saveButton.click();}},this,true);app.shortcuts.register('Record:Cancel',['esc','ctrl+alt+l'],function(){var $cancelButton=this.$('a[name=cancel_button]');if($cancelButton.is(':visible')&&!$cancelButton.hasClass('disabled')){$cancelButton.click();}},this,true);app.shortcuts.register('Record:Previous','h',function(){var $previous=this.$('.btn.previous-row');if($previous.is(':visible')&&!$previous.hasClass('disabled')){$previous.click();}},this);app.shortcuts.register('Record:Next','l',function(){var $next=this.$('.btn.next-row');if($next.is(':visible')&&!$next.hasClass('disabled')){$next.click();}},this);app.shortcuts.register('Record:Favorite','f a',function(){this.$('.headerpane .fa-favorite:visible').click();},this);app.shortcuts.register('Record:Follow','f o',function(){this.$('.headerpane [name=follow]:visible').click();},this);app.shortcuts.register('Record:Copy',['shift+c','ctrl+alt+u'],function(){this.$('.headerpane [data-toggle=dropdown]:visible').click().blur();this.$('.headerpane [name=duplicate_button]:visible').click();},this);app.shortcuts.register('Record:Action:More','m',function(){var $primaryDropdown=this.$('.headerpane .btn-primary[data-toggle=dropdown]:visible');if(($primaryDropdown.length>0)&&!$primaryDropdown.hasClass('disabled')){$primaryDropdown.click();}},this);},_dismissAllAlerts:function(){if(_.isEmpty(this._viewAlerts)){return;}
_.each(_.uniq(this._viewAlerts),function(alert){app.alert.dismiss(alert);});this._viewAlerts=[];}})