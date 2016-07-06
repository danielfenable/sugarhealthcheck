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
(function(app){app.events.on("app:init",function(){app.plugins.register('DisableDelete',["field"],{onAttach:function(component,plugin){this.on("render",this.removeDelete,this);},removeDelete:function(){var config=app.metadata.getModule('Forecasts','config')||{},sales_stage_won=null,sales_stage_lost=null,label_key='_STAGE',closed_RLI_count=0,message=null,status=null,button=null;if(_.contains(["list:deleterow:fire","button:delete_button:click"],this.def.event)){sales_stage_won=config.sales_stage_won||['Closed Won'];sales_stage_lost=config.sales_stage_lost||['Closed Lost'];if(app.metadata.getModule('Opportunities','config').opps_view_by==='RevenueLineItems'){status=this.model.get('sales_status');closed_RLI_count=this.model.get('closed_revenue_line_items');if(_.isNull(closed_RLI_count)){closed_RLI_count=0;}
label_key='_STATUS';}
if(_.isEmpty(status)){status=this.model.get('sales_stage');}
if(closed_RLI_count>0){message=app.lang.get('NOTICE_NO_DELETE_CLOSED_RLIS','Opportunities');}
if(_.contains(sales_stage_won,status)||_.contains(sales_stage_lost,status)){message=app.lang.get('NOTICE_NO_DELETE_CLOSED'+label_key);}
if(!_.isEmpty(message)){this.setDisabled(true);button=this.getFieldElement();button.addClass('disabled');button.attr('data-event','');button.tooltip({title:message});}}
return message;}});});})(SUGAR.App);