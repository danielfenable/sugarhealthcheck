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
({extendsFrom:'StickyRowactionField',events:{'click a[name=select_button]':'openSelectDrawer'},openSelectDrawer:function(){if(this.isDisabled()){return;}
var parentModel=this.context.get('parentModel'),linkModule=this.context.get('module'),link=this.context.get('link'),self=this;app.drawer.open({layout:'selection-list',context:{module:linkModule,recParentModel:parentModel,recLink:link,recContext:this.context,recView:this.view}},function(model){if(!model){return;}
var relatedModel=app.data.createRelatedBean(parentModel,model.id,link),options={showAlerts:true,relate:true,success:function(model){self.context.get('collection').resetPagination();self.context.resetLoadFlag();self.context.set('skipFetch',false);var collectionOptions=self.context.get('collectionOptions')||{};if(collectionOptions.limit)self.context.set('limit',collectionOptions.limit);self.context.loadData({success:function(){self.view.layout.trigger('filter:record:linked');},error:function(error){app.alert.show('server-error',{level:'error',messages:'ERR_GENERIC_SERVER_ERROR'});}});},error:function(error){app.alert.show('server-error',{level:'error',messages:'ERR_GENERIC_SERVER_ERROR'});}};relatedModel.save(null,options);});},isDisabled:function(){if(this._super('isDisabled')){return true;}
var link=this.context.get('link'),parentModule=this.context.get('parentModule'),required=app.utils.isRequiredLink(parentModule,link);return required;}})