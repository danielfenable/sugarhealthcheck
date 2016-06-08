<?php
$clientCache['Forecasts']['base']['field'] = array (
  'fiscal-year' => 
  array (
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
({extendsFrom:\'EnumField\',loadEnumOptions:function(fetch,callback){this._super(\'loadEnumOptions\',[fetch,callback]);var startYear=this.options.def.startYear;_.each(this.items,function(value,key,list){list[key]=list[key].replace("{{year}}",startYear++);},this);}})',
    ),
    'templates' => 
    array (
      'edit' => '
<div>
    <i>{{label}}</i>
    <p>{{str \'LBL_FISCAL_YEAR\' \'Forecasts\'}}:
    <input type="hidden" class="select2" name="{{name}}"{{#if def.tabindex}} tabindex="{{def.tabindex}}"{{/if}}>
    {{#unless hideHelp}}{{#if def.help}}<p class="help-block">{{str def.help module}}</p>{{/if}}{{/unless}}
    </p>
</div>

',
    ),
  ),
  'datapoint' => 
  array (
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
({previous_type:\'\',arrow:\'\',initial_total:\'\',total:0,hasAccess:true,hasDataAccess:true,noDataAccessTemplate:undefined,total_field:\'\',initialize:function(options){this._super(\'initialize\',[options]);this.total_field=this.total_field||this.name;this.hasAccess=app.utils.getColumnVisFromKeyMap(this.name,\'forecastsWorksheet\');this.hasDataAccess=app.acl.hasAccess(\'read\',\'ForecastWorksheets\',app.user.get(\'id\'),this.name);if(this.hasDataAccess===false){this.noDataAccessTemplate=app.template.getField(\'base\',\'noaccess\')(this);}
this.before(\'render\',function(){if(!this.hasAccess){return false;}
this.arrow=this._getArrowIconColorClass(this.total,this.initial_total);this.checkIfNeedsCommit();return true;},this);$(window).on(\'resize.datapoints\',_.bind(this.resize,this));this.on(\'render\',function(){if(!this.hasAccess){return false;}
this.resize();return true;},this);},checkIfNeedsCommit:function(){if(!_.isEqual(this.initial_total,\'\')&&app.math.isDifferentWithPrecision(this.total,this.initial_total)){this.context.trigger(\'forecasts:worksheet:needs_commit\',null);}},_dispose:function(){$(window).off(\'resize.datapoints\');clearInterval(this.resizeDetectTimer);this._super(\'_dispose\');},getPlaceholder:function(){if(this.hasAccess){return this._super(\'getPlaceholder\');}
return\'\';},adjustDatapointLayout:function(){if(this.hasAccess){var parentMarginLeft=this.view.$(\'.topline .datapoints\').css(\'margin-left\'),parentMarginRight=this.view.$(\'.topline .datapoints\').css(\'margin-right\'),timePeriodWidth=this.view.$(\'.topline .span4\').outerWidth(true),toplineWidth=this.view.$(\'.topline \').width(),collection=this.view.$(\'.topline div.pull-right\').children(\'span\'),collectionWidth=parseInt(parentMarginLeft)+parseInt(parentMarginRight);collection.each(function(index){collectionWidth+=$(this).children(\'div.datapoint\').outerWidth(true);});if((collectionWidth+timePeriodWidth)>toplineWidth){this.view.$(\'.topline div.hr\').show();this.view.$(\'.info .last-commit\').find(\'div.hr\').show();this.view.$(\'.topline .datapoints\').removeClass(\'span8\').addClass(\'span12\');this.view.$(\'.info .last-commit .datapoints\').removeClass(\'span8\').addClass(\'span12\');this.view.$(\'.info .last-commit .commit-date\').removeClass(\'span4\').addClass(\'span12\');}else{this.view.$(\'.topline div.hr\').hide();this.view.$(\'.info .last-commit\').find(\'div.hr\').hide();this.view.$(\'.topline .datapoints\').removeClass(\'span12\').addClass(\'span8\');this.view.$(\'.info .last-commit .datapoints\').removeClass(\'span12\').addClass(\'span8\');this.view.$(\'.info .last-commit .commit-date\').removeClass(\'span12\').addClass(\'span4\');var lastCommitHeight=this.view.$(\'.info .last-commit .commit-date\').height();this.view.$(\'.info .last-commit .datapoints div.datapoint\').height(lastCommitHeight);}
var index=this.$el.index(),width=this.$(\'div.datapoint\').outerWidth(),datapointLength=this.view.$(\'.info .last-commit .datapoints div.datapoint\').length,sel=this.view.$(\'.last-commit .datapoints div.datapoint:nth-child(\'+index+\')\');if(datapointLength>2&&index<=2||datapointLength==2&&index==1){var widthMod=(app.lang.direction===\'rtl\')?7:8;$(sel).width(width-widthMod);}else{$(sel).width(width);}}},resize:function(){if(this.resizeDetectTimer){clearTimeout(this.resizeDetectTimer);}
this.resizeDetectTimer=setTimeout(_.bind(function(){this.adjustDatapointLayout();},this),250);},bindDataChange:function(){if(!this.hasAccess){return;}
this.context.on(\'change:selectedUser change:selectedTimePeriod\',function(){this.initial_total=\'\';this.total=0;this.arrow=\'\';},this);this.collection.on(\'reset\',this._onCommitCollectionReset,this);this.context.on(\'forecasts:worksheet:totals\',this._onWorksheetTotals,this);this.context.on(\'forecasts:worksheet:committed\',this._onWorksheetCommit,this);},_onCommitCollectionReset:function(collection){var model=_.first(collection.models);if(!_.isUndefined(model)){this.initial_total=model.get(this.total_field);if(!this.disposed){this.render();}}},_onWorksheetTotals:function(totals,type){var field=this.total_field;if(type==\'manager\'){field=field.split(\'_\')[0]+\'_adjusted\';}
this.total=totals[field];this.previous_type=type;if(!this.disposed){this.render();}},_onWorksheetCommit:function(type,forecast){var field=this.total_field;if(type==\'manager\'){field=field.split(\'_\')[0]+\'_adjusted\';}
this.total=forecast[field];this.initial_total=forecast[field];this.arrow=\'\';if(!this.disposed){this.render();}},_getArrowIconColorClass:function(newValue,oldValue){var cls=\'\';if(app.math.isDifferentWithPrecision(newValue,oldValue)){cls=(newValue>oldValue)?\' fa-arrow-up font-green\':\' fa-arrow-down font-red\';}
return cls;}})',
    ),
    'templates' => 
    array (
      'detail' => '
<div class="datapoint pull-left">
    {{this.label}}<br>
    {{#if this.hasDataAccess}}
        <h2 id="{{this.name}}">{{formatCurrency this.total}}{{#if this.arrow}}<span class="fa fa-sm committed_arrow{{this.arrow}}"></span>{{/if}}</h2>
    {{else}}
        {{{this.noDataAccessTemplate}}}
    {{/if}}
</div>
',
    ),
  ),
  'date' => 
  array (
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
({extendsFrom:\'DateField\',_initPlugins:function(){this._super(\'_initPlugins\');if(this.options.def.click_to_edit){this.plugins=_.union(this.plugins,[\'ClickToEdit\']);}
return this;}})',
    ),
    'templates' => 
    array (
      'edit' => '
<span class="edit">
    <div class="input-append date">
        <input type="text" data-type="date" class="input-small focused" value="{{value}}">
        <span class="add-on"><i class="fa fa-calendar"></i></span>
        <span class="error-tooltip hide" rel="tooltip" data-container="body">
            <i class="fa fa-exclamation-circle"></i>
        </span>
    </div>
</span>
',
    ),
  ),
  'range' => 
  array (
    'templates' => 
    array (
      'forecastsCustomRange' => '
{{#eq customType \'custom_default\'}}
    <div id="{{name}}" class="clearfix">
        <div class="control-group pull-left checkbox">
            <input type="checkbox" {{#if isExclude}}
                disabled="disabled"
            {{else}}
               value="1" {{#if in_included_total}}checked="true"{{/if}} name="in_included_total_{{def.name}}" data-key="{{def.name}}" data-category="{{category}}"
            {{/if}}>
            <input type="text" placeholder="{{str "LBL_FORECASTS_CONFIG_RANGES_ENTER_RANGE" module}}" class="span12" value="{{label}}" data-key="{{def.name}}" data-category="{{category}}">
        </div>
        <div class="noUiSliderEnds pull-right">
            <div class="rangeSlider noUiSlider"></div>
        </div>
    </div>
{{/eq}}

{{#notEq customType \'custom_default\'}}
    <div id="{{name}}" class="clearfix">
        <div class="control-group checkbox pull-left">
            <input type="checkbox"
                {{#eq customType \'custom_without_probability\'}}
                disabled="disabled"
               {{/eq}}
                {{#eq customType \'custom\'}}
                    value="1" {{#if in_included_total}}checked="true"{{/if}} name="in_included_total_{{def.name}}" data-key="{{def.name}}" data-category="{{category}}"
                {{/eq}}
            >
            <input type="text" placeholder="{{str "LBL_FORECASTS_CONFIG_RANGES_ENTER_RANGE" module}}" class="span12" value="{{label}}" data-key="{{def.name}}" data-category="{{category}}">
        </div>
        <div class="btn-group">
            <a class="btn removeCustomRange" href="javascript:void(0)" data-key="{{def.name}}" data-category="{{category}}">
                <i class="fa fa-minus"></i>
            </a>
        </div>
        <div class="btn-group">
            <a class="btn addCustomRange" href="javascript:void(0)" data-type="{{customType}}" data-category="{{category}}">
                <i class="fa fa-plus"></i>
            </a>
        </div>
        {{#eq customType \'custom\'}}
        <div class="noUiSliderEnds pull-right">
            <div class="rangeSlider noUiSlider"></div>
        </div>
        {{/eq}}
    </div>
{{/notEq}}
',
    ),
  ),
  'quotapoint' => 
  array (
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
({quotaAmount:undefined,selectedUser:undefined,selectedTimePeriod:undefined,userCurrencyID:undefined,resizeDetectTimer:undefined,initialize:function(options){app.view.Field.prototype.initialize.call(this,options);this.quotaAmount=0.00;this.selectedUser=this.context.get(\'selectedUser\');this.selectedTimePeriod=this.context.get(\'selectedTimePeriod\');this.userCurrencyID=app.user.getPreference(\'currency_id\');$(window).on(\'resize.datapoints\',_.bind(this.resize,this));this.on(\'render\',function(){this.resize();return true;},this);},bindDataChange:function(){this.context.on(\'change:selectedUser\',function(ctx,user){this.selectedUser=user;this.loadData({});},this);this.context.on(\'change:selectedTimePeriod\',function(ctx,timePeriod){this.selectedTimePeriod=timePeriod;this.loadData({});},this);this.loadData();},toggleTotalsListeners:function(isTopLevelManager){if(isTopLevelManager){this.hasListenerAdded=true;this.context.on(\'forecasts:worksheet:totals\',function(totals){var quota=0.00;if(_.has(totals,\'quota\')){quota=totals.quota;}else{quota=this.quotaAmount;}
this.quotaAmount=quota;if(!this.disposed){this.render();}},this);if(!this.selectedUser.showOpps){var collection=app.utils.getSubpanelCollection(this.context,\'ForecastManagerWorksheets\'),quota=0.00;_.each(collection.models,function(model){quota=app.math.add(quota,model.get(\'quota\'));},this);this.quotaAmount=quota;this.render();}}else if(this.hasListenerAdded){this.hasListenerAdded=false;this.context.off(\'forecasts:worksheet:totals\',null,this);}},getQuotasURL:function(){var method=(this.selectedUser.is_manager&&this.selectedUser.showOpps)?\'direct\':\'rollup\',url=\'Forecasts/\'+this.selectedTimePeriod+\'/quotas/\'+method+\'/\'+this.selectedUser.id;return app.api.buildURL(url,\'read\');},loadData:function(options){var url=this.getQuotasURL(),cb={context:this,success:this.handleQuotaData,complete:options?options.complete:null};app.api.call(\'read\',url,null,null,cb);},handleQuotaData:function(quotaData){this.quotaAmount=quotaData.amount;this.toggleTotalsListeners(quotaData.is_top_level_manager);if(!this.disposed){this.render();}},adjustDatapointLayout:function(){if(this.view.$el){var thisView$El=this.view.$el,parentMarginLeft=thisView$El.find(".topline .datapoints").css("margin-left"),parentMarginRight=thisView$El.find(".topline .datapoints").css("margin-right"),timePeriodWidth=thisView$El.find(".topline .span4").outerWidth(true),toplineWidth=thisView$El.find(".topline ").width(),collection=thisView$El.find(".topline div.pull-right").children("span"),collectionWidth=parseInt(parentMarginLeft)+parseInt(parentMarginRight);collection.each(function(index){collectionWidth+=$(this).children("div.datapoint").outerWidth(true);});if((collectionWidth+timePeriodWidth)>toplineWidth){thisView$El.find(".topline div.hr").show();thisView$El.find(".info .last-commit").find("div.hr").show();thisView$El.find(".topline .datapoints").removeClass("span8").addClass("span12");thisView$El.find(".info .last-commit .datapoints").removeClass("span8").addClass("span12");thisView$El.find(".info .last-commit .commit-date").removeClass("span4").addClass("span12");}else{thisView$El.find(".topline div.hr").hide();thisView$El.find(".info .last-commit").find("div.hr").hide();thisView$El.find(".topline .datapoints").removeClass("span12").addClass("span8");thisView$El.find(".info .last-commit .datapoints").removeClass("span12").addClass("span8");thisView$El.find(".info .last-commit .commit-date").removeClass("span12").addClass("span4");var lastCommitHeight=thisView$El.find(".info .last-commit .commit-date").height();thisView$El.find(".info .last-commit .datapoints div.datapoint").height(lastCommitHeight);}
var index=this.$el.index()+1,width=this.$el.find("div.datapoint").outerWidth(),datapointLength=thisView$El.find(".info .last-commit .datapoints div.datapoint").length,sel=thisView$El.find(\'.last-commit .datapoints div.datapoint:nth-child(\'+index+\')\');if(datapointLength>2&&index<=2||datapointLength==2&&index==1){$(sel).width(width-18);}else{$(sel).width(width);}}},resize:function(){if(this.resizeDetectTimer){clearTimeout(this.resizeDetectTimer);}
this.resizeDetectTimer=setTimeout(_.bind(function(){this.adjustDatapointLayout();},this),250);}})',
    ),
    'templates' => 
    array (
      'detail' => '
<div class="datapoint pull-left">
    {{label}}
    <br>
    <h2 id="{{name}}">{{formatCurrency quotaAmount}}</h2>
</div>
',
    ),
  ),
  'button' => 
  array (
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
({extendsFrom:\'ButtonField\',hasAccess:function(){if(this.def.acl_action==\'current_user\'){var su=this.context.get(\'selectedUser\')||app.user.toJSON();return su.id===app.user.get(\'id\');}else{return this._super(\'hasAccess\');}}})',
    ),
  ),
  'reportingUsers' => 
  array (
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
({jsTree:{},reporteesEndpoint:\'\',currentTreeUrl:\'\',currentRootId:\'\',selectedUser:{},initHasSelected:false,previousUserName:undefined,initialize:function(options){app.view.Field.prototype.initialize.call(this,options);this.reporteesEndpoint=app.api.buildURL("Forecasts/reportees")+\'/\';this.selectedUser=this.context.get(\'selectedUser\')||app.user.toJSON();this.currentTreeUrl=this.reporteesEndpoint+this.selectedUser.id;this.currentRootId=this.selectedUser.id;},_dispose:function(){if(app.user.get(\'is_manager\')&&!_.isEmpty(this.jsTree)){this.jsTree.off();}
app.view.Field.prototype._dispose.call(this);},render:function(){if(app.user.get(\'is_manager\')){app.view.Field.prototype.render.call(this);}},unbindData:function(){app.view.Field.prototype.unbindData.call(this);},bindDataChange:function(){this.context.on("forecasts:user:canceled",function(){this.initHasSelected=false;this.selectJSTreeNode(this.previousUserName);this.initHasSelected=true;},this);},checkRender:function(context,selectedUser){this.selectedUser=selectedUser;if(selectedUser.showOpps){var nodeId=(selectedUser.is_manager?\'jstree_node_myopps_\':\'jstree_node_\')+selectedUser.user_name;this.selectJSTreeNode(nodeId)}else if(this.currentRootId!=selectedUser.id){if(selectedUser.is_manager){this.currentRootId=selectedUser.id;this.currentTreeUrl=this.reporteesEndpoint+selectedUser.id;this.rendered=false;if(!this.disposed){this.render();}}else{var nodeId=\'jstree_node_\'+selectedUser.user_name;if(this.jsTree.jstree(\'get_selected\').attr(\'id\')!=nodeId){this.selectJSTreeNode(nodeId)}}}},selectJSTreeNode:function(nodeId){this.jsTree.jstree(\'deselect_all\');this.jsTree.jstree(\'select_node\',\'#\'+nodeId);},_recursiveReplaceHTMLChars:function(data,ctx){_.each(data,function(entry,index){if(entry.data){data[index].data=(function(value){return value.replace(/&amp;/gi,\'&\').replace(/&lt;/gi,\'<\').replace(/&gt;/gi,\'>\').replace(/&#039;/gi,\'\\\'\').replace(/&quot;/gi,\'"\');})(entry.data);if(entry.children){_.each(entry.children,function(childEntry,index2){entry.children[index2]=ctx._recursiveReplaceHTMLChars([childEntry]);if(childEntry.attr.rel==\'my_opportunities\'&&childEntry.metadata.id==app.user.get(\'id\')){childEntry.data=app.utils.formatString(app.lang.get(\'LBL_MY_MANAGER_LINE\',\'Forecasts\'),[childEntry.data]);}},this);}}},this);return data;},_render:function(ctx,options){app.view.Field.prototype._render.call(this,ctx,options);var options={};options.success=_.bind(function(data){this.createTree(data);},this);app.api.call(\'read\',this.currentTreeUrl,null,options);},createTree:function(data){if(!_.isArray(data)){data=[data];}
var treeData=this._recursiveReplaceHTMLChars(data,this),selectedUser=this.context.get(\'selectedUser\'),nodeId=(selectedUser.is_manager&&selectedUser.showOpps?\'jstree_node_myopps_\':\'jstree_node_\')+selectedUser.user_name;treeData.ctx=this.context;this.jsTree=$(".jstree-sugar").jstree({"plugins":["json_data","ui","crrm","types","themes"],"json_data":{"data":treeData},"ui":{"initially_select":[nodeId]},"types":{"types":{"types":{"parent_link":{},"manager":{},"my_opportunities":{},"rep":{},"root":{}}}}}).on("reselect.jstree",_.bind(function(){this.initHasSelected=true;},this)).on("select_node.jstree",_.bind(function(event,data){if(this.initHasSelected){this.previousUserName=(this.selectedUser.is_manager&&this.selectedUser.showOpps?\'jstree_node_myopps_\':\'jstree_node_\')+this.selectedUser.user_name;var jsData=data.inst.get_json(),nodeType=jsData[0].attr.rel,userData=jsData[0].metadata,showOpps=false;if(nodeType=="my_opportunities"||nodeType=="rep"){showOpps=true}
var selectedUser={\'id\':userData.id,\'user_name\':userData.user_name,\'full_name\':userData.full_name,\'first_name\':userData.first_name,\'last_name\':userData.last_name,\'reports_to_id\':userData.reports_to_id,\'reports_to_name\':userData.reports_to_name,\'is_manager\':(nodeType!=\'rep\'),\'is_top_level_manager\':(nodeType!=\'rep\'&&_.isEmpty(userData.reports_to_id)),\'showOpps\':showOpps,\'reportees\':[]};this.context.trigger(\'forecasts:user:changed\',selectedUser,this.context);}},this));if(treeData){var rootId=-1;if(treeData.length==1){rootId=treeData[0].metadata.id;}else if(treeData.length==2){rootId=treeData[1].metadata.id;}
this.currentRootId=rootId;}
this.$el.find(\'#people\').addClass("jstree-sugar");}})',
    ),
    'templates' => 
    array (
      'detail' => '
<div class="btn-toolbar pull-left" id="forecastsTree">
    <div class="btn-group">
        <a class="dropdown-toggle btn btn-invisible" data-toggle="dropdown" href="#">
            <i class="fa fa-caret-down"></i>
        </a>
        <ul class="dropdown-menu carettop">
            <li>
                <div id="people" class="jstree-sugar" id="forecasts-jstree"></div>
            </li>
        </ul>
    </div>
</div>
',
    ),
  ),
  'commitlog' => 
  array (
    'templates' => 
    array (
      'detail' => '
{{#if commitLog.length}}
    <div class="row-fluid">
        <div class="span12">
            <div class="extend results" id="history_log_results">
                {{#each commitLog}}
                    <article>
                        <date>{{this.text2}}</date> {{this.text}}
                    </article>
                {{/each}}
            </div>
        </div>
    </div>
{{/if}}
',
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
({commitLog:[],previousDateEntered:\'\',initialize:function(options){app.view.Field.prototype.initialize.call(this,options);this.on(\'show\',function(){if(!this.disposed){this.render();}},this);},bindDataChange:function(){this.collection.on(\'reset\',function(){this.hide();this.buildCommitLog();},this);this.context.on(\'forecast:commit_log:trigger\',function(){if(!this.isVisible()){this.show();}else{this.hide();}},this);},buildCommitLog:function(){this.commitLog=[];if(_.isEmpty(this.collection.models)){return;}
var previousModel=_.first(this.collection.models);var dateEntered=new Date(Date.parse(previousModel.get(\'date_modified\')));if(dateEntered==\'Invalid Date\'){dateEntered=previousModel.get(\'date_modified\');}
this.previousDateEntered=app.date.format(dateEntered,app.user.getPreference(\'datepref\')+\' \'+app.user.getPreference(\'timepref\'));var loopPreviousModel=\'\',models=_.clone(this.collection.models).reverse(),selectedUser=this.view.context.get(\'selectedUser\'),forecastType=app.utils.getForecastType(selectedUser.is_manager,selectedUser.showOpps);_.each(models,function(model){this.commitLog.push(app.utils.createHistoryLog(loopPreviousModel,model,forecastType===\'Direct\'));loopPreviousModel=model;},this);this.commitLog.reverse();}})',
    ),
  ),
  'lastcommit' => 
  array (
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
({commit_date:undefined,data_points:[],points:[],events:{\'click\':\'triggerHistoryLog\'},initialize:function(options){this._super(\'initialize\',[options]);this.points=[];this.data_points=[];_.each(options.def.datapoints,function(point){if(app.utils.getColumnVisFromKeyMap(point,\'forecastsWorksheet\')){this.points.push(point);}},this);},triggerHistoryLog:function(){this.$(\'i\').toggleClass(\'fa-caret-down fa-caret-up\');this.context.trigger(\'forecast:commit_log:trigger\');},bindDataChange:function(){this.collection.on(\'reset\',function(){this.data_points=[];var model=_.first(this.collection.models)
if(!_.isUndefined(model)){this.commit_date=model.get(\'date_modified\');this.data_points=this.processDataPoints(model);}else{this.commit_date=undefined;}
if(!this.disposed){this.render();}},this);},processDataPoints:function(model){var points=[],noAccessTemplate=app.template.getField(\'base\',\'noaccess\')(this);_.each(this.points,function(point){var point_data={};if(app.acl.hasAccess(\'read\',\'ForecastWorksheets\',app.user.get(\'id\'),point)){point_data.value=model.get(point)}else{point_data.error=noAccessTemplate;}
points.push(point_data);},this);return points;}})',
    ),
    'templates' => 
    array (
      'detail' => '
<div class=\'row-fluid last-commit\'>
    <div class="span8 datapoints">
        <div class="pull-right">
            {{#each this.data_points}}
                <div class="datapoint pull-left">
                    {{#if this.value}}
                        {{formatCurrency this.value}}
                    {{else}}
                        {{{this.error}}}
                    {{/if}}
                </div>
            {{/each}}
        </div>
    </div>
    <div class="hr hide"></div>
    <div class="span4 commit-date">
        {{#if this.commit_date}}
            <span class="relativetime">
                {{str \'LBL_LAST_COMMIT\'}}{{relativeTime commit_date class=\'date\'}}
                &nbsp;<i id="show_hide_history_log" class="fa fa-caret-down fa-sm"></i>
            </span>
        {{/if}}
    </div>
</div>
',
    ),
  ),
  'assignquota' => 
  array (
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
({extendsFrom:\'RowactionField\',disableButton:true,initialize:function(options){this._super(\'initialize\',[options]);this.type=\'rowaction\';},bindDataChange:function(){this.context.on(\'forecasts:worksheet:quota_changed\',function(){this.disableButton=false;if(!this.disposed){this.render();}},this);this.context.on(\'forecasts:worksheet:committed\',function(){this.disableButton=true;if(!this.disposed){this.render();}},this);this.context.on(\'forecasts:assign_quota\',this.assignQuota,this);},_render:function(){this._super(\'_render\');if(this.getFieldElement().length>0){this.setDisabled(this.disableButton);}},hasAccess:function(){var su=(this.context.get(\'selectedUser\'))||app.user.toJSON(),isManager=su.is_manager||false,showOpps=su.showOpps||false;return(su.id===app.user.get(\'id\')&&isManager&&showOpps===false);},assignQuota:function(worksheetType,selectedUser,selectedTimeperiod){app.api.call(\'create\',app.api.buildURL(\'ForecastManagerWorksheets/assignQuota\'),{\'user_id\':selectedUser.id,\'timeperiod_id\':selectedTimeperiod},{success:_.bind(function(o){app.alert.dismiss(\'saving_quota\');app.alert.show(\'success\',{level:\'success\',autoClose:true,autoCloseDelay:10000,title:app.lang.get("LBL_FORECASTS_WIZARD_SUCCESS_TITLE","Forecasts")+":",messages:[app.lang.get(\'LBL_QUOTA_ASSIGNED\',\'Forecasts\')]});this.disableButton=true;this.context.trigger(\'forecasts:quota_assigned\');if(!this.disposed){this.render();}},this)});}})',
    ),
  ),
  '_hash' => '5ba69b6126ef140396f8fe87c540d329',
);

