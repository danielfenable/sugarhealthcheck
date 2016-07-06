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
({extendsFrom:"RowactionField",initialize:function(options){this.plugins=_.clone(this.plugins)||[];if(!options.context.get('isCreateSubpanel')){this.plugins.push('DisableDelete');}
this._super("initialize",[options]);this.context.on("record:deleted",function(){this.deleteCommitWarning();},this);},deleteCommitWarning:function(){var message=null
if(this.model.get("commit_stage")=="include"){var forecastModuleSingular=app.lang.getModuleName('Forecasts');message=app.lang.get("WARNING_DELETED_RECORD_RECOMMIT_1","RevenueLineItems")
+'<a href="#Forecasts">'+forecastModuleSingular+'</a>.  '
+app.lang.get("WARNING_DELETED_RECORD_RECOMMIT_2","RevenueLineItems")
+'<a href="#Forecasts">'+forecastModuleSingular+'</a>.';app.alert.show("included_delete_warning",{level:"warning",messages:message,onLinkClick:function(){app.alert.dismissAll();}});}
return message;}})