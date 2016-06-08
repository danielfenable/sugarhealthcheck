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
({initialize:function(options){this._super('initialize',[options]);this.on('render',function(){this.loadData();},this);},loadData:function(){var ctx=this.context.parent||this.context,su=ctx.get('selectedUser')||app.user.toJSON(),isManager=this.model.get('is_manager'),showOpps=(su.id==this.model.get('user_id'))?1:0,forecastType=app.utils.getForecastType(isManager,showOpps),args_filter=[],options={},url;args_filter.push({"user_id":this.model.get('user_id')},{"forecast_type":forecastType},{"timeperiod_id":this.view.selectedTimeperiod});url={"url":app.api.buildURL('Forecasts','filter'),"filters":{"filter":args_filter}};options.success=_.bind(function(data){this.buildLog(data);},this);app.api.call('create',url.url,url.filters,options,{context:this});},buildLog:function(data){data=data.records;var ctx=this.context.parent||this.context,forecastCommitDate=ctx.get('currentForecastCommitDate'),commitDate=app.date(forecastCommitDate),newestModel=new Backbone.Model(_.first(data)),otherModels=_.last(data,data.length-1),oldestModel={},displayCommitDate=newestModel.get('date_modified');for(var i=0;i<otherModels.length;i++){if(app.date(otherModels[i].date_modified)<=commitDate){oldestModel=new Backbone.Model(otherModels[i]);break;}}
var tpl=app.template.getField(this.type,'log',this.module);this.$el.html(tpl({commit:app.utils.createHistoryLog(oldestModel,newestModel).text,commit_date:displayCommitDate}));},_render:function(){this.$el=this.view.$('span[sfuuid="'+this.sfId+'"]');this._super('_render');}})