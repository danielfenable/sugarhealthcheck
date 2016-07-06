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
({extendsFrom:'HistoryView',_defaultSettings:{date:'true',limit:10,visibility:'user'},initialize:function(options){options.meta=options.meta||{};options.meta.template='tabbed-dashlet';this.plugins=_.union(this.plugins,['LinkedModel']);this._super('initialize',[options]);},_initEvents:function(){this.events=_.extend(this.events,{'click [data-action=date-switcher]':'dateSwitcher','click [data-action=participate-switcher]':'participateSwitcher'});this._super('_initEvents');return this;},participateSwitcher:function(){alert('participate');},dateSwitcher:function(event){var date=this.$(event.currentTarget).val();if(date===this.getDate()){return;}
this.settings.set('date',date);this.loadData();},getDate:function(){var date=app.user.lastState.get(app.user.lastState.key('date',this),this);return date||this.settings.get('date')||this._defaultSettings.date;},loadData:function(options){if(this.disposed||this.meta.config){return;}
var tab=this.tabs[this.settings.get('activeTab')];if(tab.invitations){tab.invitations.dataFetched=false;}
this._super('loadData',[options]);},_initTabs:function(){app.view.invokeParent(this,{type:'view',name:'tabbed-dashlet',method:'_initTabs',platform:'base'});},_getFilters:function(index){var tab=this.tabs[index],filter={},filters=[],defaultFilters={'true':{$equal:'true'},'false':{$equal:'false'}};filter[tab.filter_applied_to]=defaultFilters[this.getDate()];filters.push(filter);return filters;},_getRemoveRecord:function(){return _.bind(function(model){if(this.disposed){return;}
this.collection.remove(model);this.render();this.context.trigger("tabbed-dashlet:refresh",model.module);},this);},_refresh:function(model,status){app.alert.show(model.id+':refresh',{level:"process",title:status,autoclose:false});return _.bind(function(model){var options={};this.layout.reloadDashlet(options);app.alert.dismiss(model.id+':refresh');},this);},_renderHtml:function(){var self=this;if(this.meta.config){this._super('_renderHtml');return;}
var tab=this.tabs[this.settings.get('activeTab')];if(tab.overdue_badge){this.overdueBadge=tab.overdue_badge;}
_.each(this.collection.models,function(model){var pictureUrl=App.api.buildFileURL({module:'Users',id:model.get('assigned_user_id'),field:'picture'});var ShowCaseUrl='pmse_Inbox/'+model.get('id2')+'/layout/show-case/'+model.get('flow_id');var ShowCaseUrlBwc=App.bwc.buildRoute('pmse_Inbox','','showCase',{id:model.get('flow_id')});var SugarModule=model.get('cas_sugar_module');if(app.metadata.getModule(SugarModule).isBwcEnabled){model.set('show_case_url',ShowCaseUrlBwc);}else{model.set('show_case_url',ShowCaseUrl);}
model.set('picture_url',pictureUrl);model.set('is_assigned',this.isAssigned(model));},this);this._super('_renderHtml');},isAssigned:function(model){if(model.get('cas_status')=='static'||model.get('cas_status')=='balanced'||model.get('cas_user_id')==app.user.id){return true;}else{return(model.get('cas_started')>0);}}})