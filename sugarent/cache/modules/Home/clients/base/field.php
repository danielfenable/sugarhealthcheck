<?php
$clientCache['Home']['base']['field'] = array (
  'dashboardtitle' => 
  array (
    'templates' => 
    array (
      'detail' => '
<div class="dropdown">
<a class="dropdown-toggle btn btn-invisible btn-link" data-toggle="dropdown" href="javascript:void(0);">{{value}}<i class="fa fa-caret-down"></i></a>
<ul class="dropdown-menu">
    {{#if dashboards}}
        {{#each this.dashboards.models}}
            <li><a href="javascript:void(0);" data-id="{{fieldValue this "id"}}">{{fieldValue this "name"}}</a></li>
        {{/each}}
    {{else}}
        <li>
            <div class="alert-process">
                <strong>{{loading \'LBL_ALERT_TITLE_LOADING\'}}</strong>
            </div>
        </li>
    {{/if}}
</ul>
</div>
',
      'edit' => '
<input type="text" name="{{name}}" value="{{value}}"{{#if def.len}} maxlength="{{def.len}}"{{/if}}{{#if def.placeholder}} placeholder="{{str def.placeholder this.model.module}}"{{/if}} class="inherit-width">
{{#unless hideHelp}}{{#if def.help}}<p class="help-block">{{str def.help module}}</p>{{/if}}{{/unless}}
',
      'options' => '
{{#eq this.length 0}}
    <li><a href="javascript:void(0);" class="disabled"><em>{{str "LBL_DASHBOARD_NO_RECORDS" this.module}}</em></a></li>
{{/eq}}
{{#notEq this.length 0}}
    {{#each this.models}}
        <li><a href="javascript:void(0);" data-id="{{fieldValue this "id"}}" data-type="{{fieldValue this "dashboard_type"}}">{{fieldValue this "name"}}</a></li>
    {{/each}}
{{/notEq}}
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
({events:{\'click .dropdown-toggle\':\'toggleClicked\',\'click a[data-id]\':\'navigateClicked\'},dashboards:null,toggleClicked:function(evt){var self=this;if(!_.isEmpty(this.dashboards)){return;}
var contextBro=this.context.parent.getChildContext({module:\'Home\'});var collection=contextBro.get(\'collection\').clone();var pattern=/^(LBL|TPL|NTC|MSG)_(_|[a-zA-Z0-9])*$/;collection.remove(self.model,{silent:true});_.each(collection.models,function(model){if(pattern.test(model.get(\'name\'))){model.set(\'name\',app.lang.get(model.get(\'name\'),collection.module||null));}});self.dashboards=collection;var optionTemplate=app.template.getField(self.type,\'options\',self.module);self.$(\'.dropdown-menu\').html(optionTemplate(collection));},navigateClicked:function(evt){var id=$(evt.currentTarget).data(\'id\'),type=$(evt.currentTarget).data(\'type\');this.navigate(id,type);},navigate:function(id,type){if(this.view.layout.isSearchContext()){var contextBro=this.context.parent.getChildContext({module:\'Home\'});contextBro.set(\'currentDashboardIndex\',id);}
this.view.layout.navigateLayout(id,type);},format:function(value){var module=this.context.parent&&this.context.parent.get(\'module\')||this.context.get(\'module\');return app.lang.get(value,module)||value;},_loadTemplate:function(){app.view.Field.prototype._loadTemplate.call(this);if(this.context&&this.context.get(\'model\')&&this.context.get(\'model\').dashboardModule===\'Home\'){this.template=app.template.getField(\'base\',this.tplName)||this.template;}},setMaxWidth:function(width){this.$el.css({\'max-width\':width});},getCellPadding:function(){var padding=0,$cell=this.$(\'.dropdown-toggle\');if(!_.isEmpty($cell)){padding=parseInt($cell.css(\'padding-left\'),10)+parseInt($cell.css(\'padding-right\'),10);}
return padding;}})',
    ),
  ),
  'layoutsizer' => 
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
({spanMin:2,spanTotal:12,spanStep:1,format:function(value){var metadata=this.model.get("metadata");return(metadata&&metadata.components)?metadata.components.length-1:0;},_loadTemplate:function(){app.view.Field.prototype._loadTemplate.call(this);if(this.action!==\'edit\'){this.template=app.template.empty;}},_render:function(){app.view.Field.prototype._render.call(this);if(this.action===\'edit\'&&this.value>0){var self=this,metadata=this.model.get("metadata");this.$(\'#layoutwidth\').empty().noUiSlider(\'init\',{knobs:this.value,scale:[0,this.spanTotal],step:this.spanStep,connect:false,end:function(type){if(type!==\'move\'){var values=$(this).noUiSlider(\'value\');self.setValue(values);}}}).append(function(){var html="",segments=(self.spanTotal / self.spanStep)+1,segmentWidth=$(this).width()/(segments-1),acum=0;_.times(segments,function(i){acum=(segmentWidth*i)-2;html+="<div class=\'ticks\' style=\'left:"+acum+"px\'></div>";},this);return html;});this.setSliderPosition(metadata);}else{this.$(\'.noUiSliderEnds\').hide();}},setSliderPosition:function(metadata){var divider=0;_.each(_.pluck(metadata.components,\'width\'),function(span,index){if(index>=this.value)return;divider=divider+parseInt(span,10);this.$(\'#layoutwidth\').noUiSlider(\'move\',{handle:index,to:divider});},this);},setValue:function(value){var metadata=this.model.get("metadata"),divider=0;_.each(metadata.components,function(component,index){if(index==metadata.components.length-1){component.width=this.spanTotal-divider;if(component.width<this.spanMin){var adjustment=this.spanMin-component.width;for(var i=index-1;i>=0;i--){metadata.components[i].width-=adjustment;if(metadata.components[i].width<this.spanMin){adjustment=this.spanMin-metadata.components[i].width;metadata.components[i].width=this.spanMin;}else{adjustment=0;}}
component.width=this.spanMin;}}else{component.width=value[index]-divider;if(component.width<this.spanMin){component.width=this.spanMin;}
divider+=component.width;}},this);this.setSliderPosition(metadata);this.model.set("metadata",metadata,{silent:true});this.model.trigger("change:layout");},bindDataChange:function(){if(this.model){this.model.on("change:metadata",this.render,this);}},bindDomChange:function(){}})',
    ),
    'templates' => 
    array (
      'edit' => '
<div class="noUiSliderEnds" style="margin:12px;">
<div id="layoutwidth" class="noUiSlider"></div>
</div>
',
    ),
  ),
  'layoutbutton' => 
  array (
    'templates' => 
    array (
      'edit' => '
<div class="btn-group" data-toggle="buttons-radio">
    <button class="btn layout{{#eq value 1}} active{{/eq}}" rel="tooltip" title="{{str "LBL_DASHBOARD_1_COLUMN_LAYOUT" module}}" data-placement="bottom" data-value="1" track="click:1columnlayout"><i class="fa fa-list-alt"></i></button>
    <button class="btn layout{{#eq value 2}} active{{/eq}}" rel="tooltip" title="{{str "LBL_DASHBOARD_2_COLUMN_LAYOUT" module}}" data-placement="bottom" data-value="2" track="click:2columnlayout"><i class="fa fa-columns"></i></button>
    <button class="btn layout{{#eq value 3}} active{{/eq}}" rel="tooltip" title="{{str "LBL_DASHBOARD_3_COLUMN_LAYOUT" module}}" data-placement="bottom" data-value="3" track="click:3columnlayout"><i class="fa fa-table"></i></button>
</div>
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
({events:{\'click .btn.layout\':\'layoutClicked\'},plugins:[\'Tooltip\'],extendsFrom:\'ButtonField\',getFieldElement:function(){return this.$el;},_render:function(){if(this.context&&this.context.get(\'model\')&&this.context.get(\'model\').get(\'dashboard_type\')===\'help-dashboard\'){return this;}
var buttonField=app.view._getController({type:\'field\',name:\'button\',platform:app.config.platform});buttonField.prototype._render.call(this);},_loadTemplate:function(){app.view.Field.prototype._loadTemplate.call(this);if(this.action!==\'edit\'||(this.model.maxColumns<=1)){this.template=app.template.empty;}},format:function(value){var metadata=this.model.get("metadata");if(metadata){return(metadata.components)?metadata.components.length:1;}
return value;},layoutClicked:function(evt){var value=$(evt.currentTarget).data(\'value\');this.setLayout(value);},setLayout:function(value){var span=12 / value;if(this.value){if(value===this.value){return;}
var setComponent=function(){var metadata=this.model.get("metadata");_.each(metadata.components,function(component){component.width=span;},this);if(metadata.components.length>value){_.times(metadata.components.length-value,function(index){metadata.components[value-1].rows=metadata.components[value-1].rows.concat(metadata.components[value+index].rows);},this);metadata.components.splice(value);}else{_.times(value-metadata.components.length,function(index){metadata.components.push({rows:[],width:span});},this);}
this.model.set("metadata",app.utils.deepCopy(metadata),{silent:true});this.model.trigger("change:metadata");};if(value!==this.value){app.alert.show(\'resize_confirmation\',{level:\'confirmation\',messages:app.lang.get(\'LBL_DASHBOARD_LAYOUT_CONFIRM\',this.module),onConfirm:_.bind(setComponent,this),onCancel:_.bind(this.render,this)});}else{setComponent.call(this);}}else{var metadata={components:[]};_.times(value,function(index){metadata.components.push({rows:[],width:span});},this);this.model.set("metadata",app.utils.deepCopy(metadata),{silent:true});this.model.trigger("change:metadata");}},bindDomChange:function(){},bindDataChange:function(){if(this.model){this.model.on("change:metadata",this.render,this);if(this.model.isNew()){this.setLayout(1);this.model.changed={};}}}})',
    ),
  ),
  'sugar-dashlet-label' => 
  array (
    'templates' => 
    array (
      'detail' => '
{{str label \'Home\'}} <span dir="ltr">Sugar Dashlet<sup>&reg;</sup></span>
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
({extendsFrom:\'LabelField\'})',
    ),
  ),
  '_hash' => '032a986411f293aa830650ae3340772a',
);

