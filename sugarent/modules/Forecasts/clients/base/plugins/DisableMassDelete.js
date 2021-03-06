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
(function(app){app.events.on('app:init',function(){app.plugins.register('DisableMassDelete',['view'],{onAttach:function(component,plugin){this.once('init',function(){this.layout.off('list:massdelete:fire',this.warnDelete,this);this.layout.on('list:massdelete:fire',this._warnDelete,this);},this);},_warnDelete:function(){var massCollection=this.context.get('mass_collection');if(!massCollection){return;}
var massUpdateModel=this.getMassUpdateModel(this.module),closedModelObj=this._getClosedModels(massUpdateModel,true),closedModels=closedModelObj.closedModels,message=closedModelObj.message;if(closedModels.length){this._uncheckClosedModels(massCollection,closedModels,'delete_warning',message);}else if(massUpdateModel.models.length>0){this.warnDelete();}
return message;},checkMassUpdateClosedModels:function(){var massCollection=this.context.get('mass_collection');if(!massCollection){return;}
var massUpdateModel=this.getMassUpdateModel(this.module),closedModelObj=this._getClosedModels(massUpdateModel,false),closedModels=closedModelObj.closedModels,message=closedModelObj.message;if(closedModels.length){this._uncheckClosedModels(massCollection,closedModels,'massupdate_closed_models_warning',message);}
return!!closedModels.length;},_uncheckClosedModels:function(massCollection,closedModels,alertId,message){var progressView=this.getProgressView();massCollection.remove(closedModels);_.each(closedModels,function(item){var id=item.module+'_'+item.id;$("[name='"+id+"'] input").attr('checked',false);});app.alert.show(alertId,{level:'warning',messages:message});progressView.dispose();this.layout.removeComponent(progressView);},_getClosedModels:function(massUpdateModel,isDelete){var config=app.metadata.getModule('Forecasts','config')||{},sales_stage_won=config.sales_stage_won||['Closed Won'],sales_stage_lost=config.sales_stage_lost||['Closed Lost'],closed_RLI_count=0,lang_key=isDelete?'WARNING_NO_DELETE_':'WARNING_NO_MASSUPDATE_',label_key='_STAGE',message=null,status=null,opp_view_by=app.metadata.getModule('Opportunities','config').opps_view_by,closedModels=_.filter(massUpdateModel.models,function(model){status=null;if(opp_view_by==='RevenueLineItems'){status=model.get('sales_status');closed_RLI_count=model.get('closed_revenue_line_items');if(_.isNull(closed_RLI_count)){closed_RLI_count=0;}
label_key='_STATUS';}
if(_.isEmpty(status)){status=model.get('sales_stage');}
if(_.contains(sales_stage_won,status)||_.contains(sales_stage_lost,status)){message=app.lang.get(lang_key+'SELECTED'+label_key);return true;}
if(closed_RLI_count>0){message=app.lang.get(lang_key+'CLOSED_SELECTED'+label_key,'Opportunities');return true;}
return false;});return{closedModels:closedModels,message:message};}});});})(SUGAR.App);