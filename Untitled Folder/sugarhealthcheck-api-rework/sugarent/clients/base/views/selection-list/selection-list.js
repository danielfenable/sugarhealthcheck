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
({extendsFrom:'FlexListView',dataViewName:'selection-list',initialize:function(options){var viewMeta=app.metadata.getView(options.module,options.name)||app.metadata.getView(options.module,this.dataViewName)||{};this.plugins=_.union(this.plugins,['ListColumnEllipsis','ListRemoveLinks']);options.context.set('skipFetch',true);options.meta=_.extend(viewMeta,options.meta||{});this.setSelectionMeta(options);this._super('initialize',[options]);this.events=_.extend({},this.events,{'click .search-and-select .single':'triggerCheck'});this.initializeEvents();},setSelectionMeta:function(options){options.meta.selection={type:'single',label:'LBL_LINK_SELECT',isSearchAndSelectAction:true};},triggerCheck:function(event){if(!($(event.target).is('a,i,input'))){var checkbox=$(event.currentTarget).find('[data-check=one]');checkbox[0].click();}},initializeEvents:function(){this.context.on('change:selection_model selection-list:select',this._selectAndClose,this);},_selectAndClose:function(context,selectedModel){if(selectedModel){this.context.unset('selection_model',{silent:true});app.drawer.close(this._getModelAttributes(selectedModel));}},_getModelAttributes:function(model){var attributes={id:model.id,value:model.get('name')};_.each(model.attributes,function(value,field){if(app.acl.hasAccessToModel('view',model,field)){attributes[field]=attributes[field]||model.get(field);}},this);return attributes;},addActions:function(){this._super('addActions');if(this.meta.showPreview!==false){this.rightColumns.push({type:'preview-button',css_class:'btn',tooltip:'LBL_PREVIEW',event:'list:preview:fire',icon:'fa-eye'});}else{this.rightColumns.push({});}}})