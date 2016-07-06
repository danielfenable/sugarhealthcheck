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
({extendsFrom:'TabbedDashletView',_defaultSettings:{filter:7,limit:10,visibility:'user'},initialize:function(options){options.meta=options.meta||{};options.meta.template='tabbed-dashlet';this._super('initialize',[options]);this.tbodyTag='ul[data-action="pagination-body"]';},_getFilters:function(index){var filterStr=app.date().subtract('days',this.settings.get('filter')).format('YYYY-MM-DD');var tab=this.tabs[index],filter={},filters=[];filter[tab.filter_applied_to]={$gte:filterStr};filters.push(filter);return filters;},bindCollectionAdd:function(model){var pictureUrl=app.api.buildFileURL({module:'Users',id:model.get('assigned_user_id'),field:'picture'});model.set('picture_url',pictureUrl);this._super('bindCollectionAdd',[model]);},_dispose:function(){this.$('.select2').select2('destroy');this._super("_dispose");},archiveEmail:function(event,params){var self=this;app.drawer.open({layout:'archive-email',context:{create:true,module:'Emails',prepopulate:{related:this.model,to_addresses:[{bean:this.model}]}}},function(model){if(model){self.layout.reloadDashlet();self.context.parent.trigger('panel-top:refresh','emails');self.context.parent.trigger('panel-top:refresh','archived_emails');}});}})