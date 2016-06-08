<?php
$clientCache['Forecasts']['base']['layout'] = array (
  'config-drawer' => 
  array (
    'meta' => 
    array (
      'type' => 'config-drawer',
      'components' => 
      array (
        0 => 
        array (
          'layout' => 
          array (
            'components' => 
            array (
              0 => 
              array (
                'layout' => 
                array (
                  'components' => 
                  array (
                    0 => 
                    array (
                      'view' => 'config-header-buttons',
                    ),
                    1 => 
                    array (
                      'layout' => 'config-drawer-content',
                    ),
                  ),
                  'type' => 'simple',
                  'name' => 'main-pane',
                  'span' => 8,
                ),
              ),
              1 => 
              array (
                'layout' => 
                array (
                  'components' => 
                  array (
                    0 => 
                    array (
                      'view' => 'config-drawer-howto',
                    ),
                  ),
                  'type' => 'simple',
                  'name' => 'side-pane',
                  'span' => 4,
                ),
              ),
              2 => 
              array (
                'layout' => 
                array (
                  'components' => 
                  array (
                  ),
                  'type' => 'simple',
                  'name' => 'dashboard-pane',
                  'span' => 4,
                ),
              ),
              3 => 
              array (
                'layout' => 
                array (
                  'components' => 
                  array (
                  ),
                  'type' => 'simple',
                  'name' => 'preview-pane',
                  'span' => 8,
                ),
              ),
            ),
            'type' => 'default',
            'name' => 'sidebar',
            'span' => 12,
          ),
        ),
      ),
      'name' => 'base',
      'span' => 12,
    ),
    'controller' => 
    array (
      'base' => '/*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({extendsFrom:\'ConfigDrawerLayout\',_checkModuleAccess:function(){var acls=app.user.getAcls().Forecasts,isSysAdmin=(app.user.get(\'type\')==\'admin\'),isDev=(!_.has(acls,\'developer\'));return(isSysAdmin||isDev);},_checkModuleConfig:function(){return app.utils.checkForecastConfig();}})',
    ),
  ),
  'list-dashboard' => 
  array (
    'meta' => 
    array (
      'metadata' => 
      array (
        'components' => 
        array (
          0 => 
          array (
            'rows' => 
            array (
              0 => 
              array (
                0 => 
                array (
                  'view' => 
                  array (
                    'type' => 'forecastdetails',
                    'label' => 'LBL_DASHLET_FORECAST_NAME',
                  ),
                  'context' => 
                  array (
                    'module' => 'Forecasts',
                  ),
                  'width' => 12,
                ),
              ),
              1 => 
              array (
                0 => 
                array (
                  'view' => 
                  array (
                    'type' => 'forecasts-chart',
                    'label' => 'LBL_DASHLET_FORECASTS_CHART_NAME',
                  ),
                  'context' => 
                  array (
                    'module' => 'Forecasts',
                  ),
                  'width' => 12,
                ),
              ),
            ),
            'width' => 12,
          ),
        ),
      ),
      'name' => 'LBL_DEFAULT_DASHBOARD_TITLE',
    ),
  ),
  'records' => 
  array (
    'meta' => 
    array (
      'components' => 
      array (
        0 => 
        array (
          'layout' => 
          array (
            'components' => 
            array (
              0 => 
              array (
                'layout' => 
                array (
                  'components' => 
                  array (
                    0 => 
                    array (
                      'view' => 'list-headerpane',
                    ),
                    1 => 
                    array (
                      'view' => 'info',
                    ),
                    2 => 
                    array (
                      'layout' => 'list',
                      'context' => 
                      array (
                        'module' => 'ForecastManagerWorksheets',
                      ),
                    ),
                    3 => 
                    array (
                      'layout' => 'list',
                      'context' => 
                      array (
                        'module' => 'ForecastWorksheets',
                      ),
                    ),
                  ),
                  'type' => 'simple',
                  'name' => 'main-pane',
                  'span' => 8,
                ),
              ),
              1 => 
              array (
                'layout' => 
                array (
                  'components' => 
                  array (
                    0 => 
                    array (
                      'layout' => 
                      array (
                        'type' => 'dashboard',
                        'last_state' => 
                        array (
                          'id' => 'last-visit',
                        ),
                      ),
                      'context' => 
                      array (
                        'forceNew' => true,
                        'module' => 'Home',
                      ),
                    ),
                  ),
                  'type' => 'simple',
                  'name' => 'dashboard-pane',
                  'span' => 4,
                ),
              ),
              2 => 
              array (
                'layout' => 
                array (
                  'components' => 
                  array (
                    0 => 
                    array (
                      'layout' => 'preview',
                    ),
                  ),
                  'type' => 'simple',
                  'name' => 'preview-pane',
                  'span' => 8,
                ),
              ),
            ),
            'type' => 'default',
            'name' => 'sidebar',
            'span' => 12,
          ),
        ),
      ),
      'type' => 'records',
      'name' => 'base',
      'span' => 12,
    ),
    'controller' => 
    array (
      'base' => '/*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({isDirty:false,worksheetType:\'\',navigationMessage:"",initOptions:undefined,initialize:function(options){this.initOptions=options;var acls=app.user.getAcls().Forecasts,hasAccess=(!_.has(acls,\'access\')||acls.access==\'yes\');if(hasAccess){var forecastByAcl=app.user.getAcls()[app.metadata.getModule(\'Forecasts\',\'config\').forecast_by]||{};if(_.has(forecastByAcl,\'access\')&&forecastByAcl.access===\'no\'){this.codeBlockForecasts(\'LBL_FORECASTS_ACLS_NO_ACCESS_TITLE\',\'LBL_FORECASTS_RECORDS_ACLS_NO_ACCESS_MSG\');}else{if(app.utils.checkForecastConfig()){this.syncInitData();}else{this.codeBlockForecasts(\'LBL_FORECASTS_MISSING_STAGE_TITLE\',\'LBL_FORECASTS_MISSING_SALES_STAGE_VALUES\');}}}else{this.codeBlockForecasts(\'LBL_FORECASTS_ACLS_NO_ACCESS_TITLE\',\'LBL_FORECASTS_ACLS_NO_ACCESS_MSG\');}},initComponents:function(){},codeBlockForecasts:function(title,msg){var alert=app.alert.show(\'no_access_to_forecasts\',{level:\'error\',title:app.lang.get(title,\'Forecasts\')+\':\',messages:[app.lang.get(msg,\'Forecasts\')]});var $close=alert.getCloseSelector();$close.on(\'click\',function(){$close.off();app.router.navigate(\'#Home\',{trigger:true});});app.accessibility.run($close,\'click\');},loadData:function(){},bindDataChange:function(){if(!_.isUndefined(this.model)){this.collection.on(\'reset\',function(){var lastCommit=_.first(this.collection.models);var commitDate=undefined;if(lastCommit instanceof Backbone.Model&&lastCommit.has(\'date_modified\')){commitDate=lastCommit.get(\'date_modified\');}
this.context.set({\'currentForecastCommitDate\':commitDate});},this);this.context.on(\'change:selectedUser\',function(model,changed){var update={\'selectedUserId\':changed.id,\'forecastType\':app.utils.getForecastType(changed.is_manager,changed.showOpps)}
this.model.set(update);},this);this.model.on(\'change\',function(){this.context.set({\'currentForecastCommitDate\':null},{silent:true});this.collection.fetch();},this);this.context.on(\'change:selectedTimePeriod\',function(){this.context.set({\'currentForecastCommitDate\':null},{silent:true});this.collection.fetch();},this);this.context.on(\'forecasts:worksheet:commit\',function(user,worksheet_type,forecast_totals){this.commitForecast(user,worksheet_type,forecast_totals);},this);this.context.on("forecasts:worksheet:dirty",function(type,isDirty){this.isDirty=isDirty;this.worksheetType=type;},this);this.context.on("forecasts:worksheet:navigationMessage",function(message){this.navigationMessage=message;},this);this.context.on("forecasts:user:changed",function(selectedUser,context){if(this.isDirty){app.alert.show(\'leave_confirmation\',{level:\'confirmation\',messages:app.lang.get(this.navigationMessage,\'Forecasts\').split(\'<br>\'),onConfirm:_.bind(function(){app.utils.getSelectedUsersReportees(selectedUser,context);},this),onCancel:_.bind(function(){this.context.trigger(\'forecasts:user:canceled\');},this)});}else{app.utils.getSelectedUsersReportees(selectedUser,context);}},this);this.context.on(\'forecasts:timeperiod:changed\',function(model,startEndDates){var onSuccess=_.bind(function(){this.context.set(\'selectedTimePeriod\',model.get(\'selectedTimePeriod\'));this._saveTimePeriodStatEndDates(startEndDates[\'start\'],startEndDates[\'end\']);},this);if(this.isDirty){app.alert.show(\'leave_confirmation\',{level:\'confirmation\',messages:app.lang.get(this.navigationMessage,\'Forecasts\').split(\'<br>\'),onConfirm:onSuccess,onCancel:_.bind(function(){this.context.trigger(\'forecasts:timeperiod:canceled\');},this)});}else{onSuccess();}},this);}},_saveTimePeriodStatEndDates:function(startDate,endDate,doSilent)
{if(_.isUndefined(doSilent)||!_.isBoolean(doSilent)){doSilent=false;}
var userPref=app.date.convertFormat(app.user.getPreference(\'datepref\')),systemPref=\'YYYY-MM-DD\',dateObj={start:app.date(startDate,[userPref,systemPref]).format(systemPref),end:app.date(endDate,[userPref,systemPref]).format(systemPref)};if(!_.isUndefined(this.context)){this.context.set(\'selectedTimePeriodStartEnd\',dateObj,{silent:doSilent});}
return dateObj;},openConfigDrawer:function(){if(app.drawer._components.length==0){app.router.navigate(\'Forecasts/config\',{replace:true,trigger:true});}},syncInitData:function(options){var callbacks,url;options=options||{};options.success=_.bind(function(model,data,options){app.user.set(data.initData.userData);if(data.initData.forecasts_setup===0){this.openConfigDrawer();}else{this.initForecastsModule(data,options);}},this);var model=this.initOptions.context.get(\'model\');callbacks=app.data.getSyncCallbacks(\'read\',model,options);this.trigger("data:sync:start",\'read\',model,options);url=app.api.buildURL("Forecasts/init",null,null,options.params);var params={},cfg=app.metadata.getModule(\'Forecasts\',\'config\');if(cfg&&cfg.is_setup===0){params={headers:{\'Cache-Control\':\'no-cache\'}};}
app.api.call("read",url,null,callbacks,params);},initForecastsModule:function(data,options){var ctx=this.initOptions.context;ctx.once(\'change:selectedUser\',this._onceInitSelectedUser,this);var ranges_key=app.user.lastState.buildKey(\'worksheet-filter\',\'filter\',\'ForecastWorksheets\'),default_selection=app.user.lastState.get(ranges_key)||data.defaultSelections.ranges;ctx.set({currentForecastCommitDate:null,selectedTimePeriod:data.defaultSelections.timeperiod_id.id,selectedRanges:default_selection,selectedTimePeriodStartEnd:this._saveTimePeriodStatEndDates(data.defaultSelections.timeperiod_id.start,data.defaultSelections.timeperiod_id.end,true)},{silent:true});ctx.get(\'model\').set({\'selectedTimePeriod\':data.defaultSelections.timeperiod_id.id},{silent:true});app.utils.getSelectedUsersReportees(app.user.toJSON(),ctx);},_onceInitSelectedUser:function(model,change){app.view.Layout.prototype.initialize.call(this,this.initOptions);app.view.Layout.prototype.initComponents.call(this);this.model.set(\'selectedUserId\',change.id,{silent:true});this.model.set(\'forecastType\',app.utils.getForecastType(change.is_manager,change.showOpps));this.collection.sync=_.bind(this.sync,this);app.view.Layout.prototype.loadData.call(this);this.bindDataChange();if(!this.disposed)this.render();},sync:function(method,model,options){var callbacks,url;options=options||{};options.params=options.params||{};var args_filter=[],filter=null;if(this.context.has(\'selectedTimePeriod\')){args_filter.push({"timeperiod_id":this.context.get(\'selectedTimePeriod\')});}
if(this.model.has(\'selectedUserId\')){args_filter.push({"user_id":this.model.get(\'selectedUserId\')});args_filter.push({"forecast_type":this.model.get(\'forecastType\')});}
if(!_.isEmpty(args_filter)){filter={"filter":args_filter};}
options.params.order_by=\'date_entered:DESC\'
options=app.data.parseOptionsForSync(method,model,options);options.success=_.bind(function(model,data,options){if(!this.disposed){this.collection.reset(data);}},this);callbacks=app.data.getSyncCallbacks(method,model,options);this.collection.once(\'data:sync:error\',function(){app.alert.dismiss(\'worksheet_loading\');},this);this.collection.trigger("data:sync:start",method,model,options);url=app.api.buildURL("Forecasts/filter",null,null,options.params);app.api.call("create",url,filter,callbacks);},commitForecast:function(user,worksheet_type,forecast_totals){var forecast=new this.collection.model(),forecastType=app.utils.getForecastType(user.is_manager,user.showOpps),forecastData={};forecastData.commit_type=worksheet_type;forecastData.timeperiod_id=forecast_totals.timeperiod_id||this.context.get(\'selectedTimePeriod\');forecastData.forecast_type=forecastType;forecast.save(forecastData,{success:_.bind(function(model,response){if(!this.disposed){this.collection.fetch();this.context.trigger("forecasts:worksheet:committed",worksheet_type,response);var msg,managerName;if(worksheet_type===\'sales_rep\'){if(user.is_manager){managerName=user.full_name;}else{managerName=user.reports_to_name;}}else{if(user.reports_to_id){managerName=user.reports_to_name;}}
if(managerName){msg=Handlebars.compile(app.lang.get(\'LBL_FORECASTS_WORKSHEET_COMMIT_SUCCESS_TO\',\'Forecasts\'))({manager:managerName});}else{msg=Handlebars.compile(app.lang.get(\'LBL_FORECASTS_WORKSHEET_COMMIT_SUCCESS\',\'Forecasts\'))();}
app.alert.show(\'success\',{level:\'success\',autoClose:true,autoCloseDelay:10000,title:app.lang.get(\'LBL_FORECASTS_WIZARD_SUCCESS_TITLE\',\'Forecasts\')+\':\',messages:[msg]});}},this),error:_.bind(function(error){if(error.status===412){this.context.trigger(\'forecasts:worksheet:is_dirty\',worksheet_type,false);}},this),silent:true,alerts:{\'success\':false}});}})',
    ),
  ),
  'config-drawer-content' => 
  array (
    'meta' => 
    array (
      'type' => 'config-drawer-content',
      'name' => 'config-drawer-content',
      'components' => 
      array (
        0 => 
        array (
          'view' => 'config-timeperiods',
        ),
        1 => 
        array (
          'view' => 'config-ranges',
        ),
        2 => 
        array (
          'view' => 'config-scenarios',
        ),
        3 => 
        array (
          'view' => 'config-worksheet-columns',
        ),
      ),
    ),
    'controller' => 
    array (
      'base' => '/*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({extendsFrom:\'ConfigDrawerContentLayout\',timeperiodsTitle:undefined,timeperiodsText:undefined,scenariosTitle:undefined,scenariosText:undefined,rangesTitle:undefined,rangesText:undefined,forecastByTitle:undefined,forecastByText:undefined,wkstColumnsTitle:undefined,wkstColumnsText:undefined,_initHowTo:function(){var appLang=app.lang,forecastBy=app.metadata.getModule(\'Forecasts\',\'config\').forecast_by,forecastByLabels={forecastByModule:appLang.getAppListStrings(\'moduleList\')[forecastBy],forecastByModuleSingular:appLang.getAppListStrings(\'moduleListSingular\')[forecastBy]};this.timeperiodsTitle=appLang.get(\'LBL_FORECASTS_CONFIG_TITLE_TIMEPERIODS\',\'Forecasts\');this.timeperiodsText=appLang.get(\'LBL_FORECASTS_CONFIG_HELP_TIMEPERIODS\',\'Forecasts\');this.scenariosTitle=appLang.get(\'LBL_FORECASTS_CONFIG_TITLE_SCENARIOS\',\'Forecasts\');this.scenariosText=appLang.get(\'LBL_FORECASTS_CONFIG_HELP_SCENARIOS\',\'Forecasts\',forecastByLabels);this.rangesTitle=appLang.get(\'LBL_FORECASTS_CONFIG_TITLE_RANGES\',\'Forecasts\');this.rangesText=appLang.get(\'LBL_FORECASTS_CONFIG_HELP_RANGES\',\'Forecasts\',forecastByLabels);this.forecastByTitle=appLang.get(\'LBL_FORECASTS_CONFIG_HOWTO_TITLE_FORECAST_BY\',\'Forecasts\');this.forecastByText=appLang.get(\'LBL_FORECASTS_CONFIG_HELP_FORECAST_BY\',\'Forecasts\');this.wkstColumnsTitle=appLang.get(\'LBL_FORECASTS_CONFIG_TITLE_WORKSHEET_COLUMNS\',\'Forecasts\');this.wkstColumnsText=appLang.get(\'LBL_FORECASTS_CONFIG_HELP_WORKSHEET_COLUMNS\',\'Forecasts\');},_switchHowToData:function(helpId){switch(helpId){case\'config-timeperiods\':this.currentHowToData.title=this.timeperiodsTitle;this.currentHowToData.text=this.timeperiodsText;break;case\'config-ranges\':this.currentHowToData.title=this.rangesTitle;this.currentHowToData.text=this.rangesText;break;case\'config-scenarios\':this.currentHowToData.title=this.scenariosTitle;this.currentHowToData.text=this.scenariosText;break;case\'config-forecast-by\':this.currentHowToData.title=this.forecastByTitle;this.currentHowToData.text=this.forecastByText;break;case\'config-worksheet-columns\':this.currentHowToData.title=this.wkstColumnsTitle;this.currentHowToData.text=this.wkstColumnsText;break;}}})',
    ),
  ),
  '_hash' => '96a6f809a77f322008c46a4730b0182e',
);

