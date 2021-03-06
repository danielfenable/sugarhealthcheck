<?php
$clientCache['ProductTemplates']['base']['field'] = array (
  'pricing-formula' => 
  array (
    'templates' => 
    array (
      'edit' => '
{{#unless showFactorField}}
<input type="hidden" class="select2" name="{{name}}"{{#if def.tabindex}} tabindex="{{def.tabindex}}"{{/if}}>
{{#unless hideHelp}}{{#if def.help}}<p class="help-block">{{str def.help module}}</p>{{/if}}{{/unless}}
{{/unless}}

{{#if showFactorField}}
    <div class="span8">
        <input type="hidden" class="select2" name="{{name}}"{{#if def.tabindex}} tabindex="{{def.tabindex}}"{{/if}}>
        {{#unless hideHelp}}{{#if def.help}}<p class="help-block">{{str def.help module}}</p>{{/if}}{{/unless}}
    </div>
    <div class="span4">
        <label class="record-label">
            {{str factorFieldLabel module}}
            <input type="text" name="pricing_factor" id="pricing_factor" class="pricing-factor" value="{{factorValue}}" maxlength="4">
        </label>
    </div>
{{/if}}
',
      'disabled' => '
{{#unless showFactorField}}
<input type="hidden" class="select2" disabled="disabled" name="{{name}}">
{{#unless hideHelp}}{{#if def.help}}<p class="help-block">{{str def.help module}}</p>{{/if}}{{/unless}}
{{/unless}}

{{#if showFactorField}}
    <div class="span8">
        <input type="hidden" class="select2" name="{{name}}" disabled="disabled">
        {{#unless hideHelp}}{{#if def.help}}<p class="help-block">{{str def.help module}}</p>{{/if}}{{/unless}}
    </div>
    <div class="span4">
        <label>
            {{str factorFieldLabel module}}:
            <input type="text" disabled="disabled" name="pricing_factor" id="pricing_factor" class="pricing-factor" value="{{factorValue}}" maxlength="4">
        </label>
    </div>
{{/if}}
',
      'list' => '
{{#if value}}
    {{#eachOptions items}}
        {{#eq this.key ../value}}
            <div class="ellipsis_inline" data-placement="bottom" title="{{value}}{{#if ../../showFactorField}} ({{str ../../../factorFieldLabel ../../../module}} = {{../../../factorValue}}){{/if}}">
                {{value}}
                {{#if ../../showFactorField}}
                    &nbsp;({{str ../../../factorFieldLabel ../../../module}} = {{../../../factorValue}})
                {{/if}}
            </div>
        {{/eq}}
    {{/eachOptions}}
{{/if}}

',
      'detail' => '

{{#if value}}
    {{#eachOptions items}}
        {{#eq this.key ../value}}
            <div class="ellipsis_inline" data-placement="bottom" title="{{value}}{{#if ../../showFactorField}} ({{str ../../../factorFieldLabel ../../../module}} = {{../../../factorValue}}){{/if}}">
                {{value}}
                {{#if ../../showFactorField}}
                    &nbsp;({{str ../../../factorFieldLabel ../../../module}} = {{../../../factorValue}})
                {{/if}}
            </div>
        {{/eq}}
    {{/eachOptions}}
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
({extendsFrom:\'EnumField\',showFactorField:false,validFactorFieldFormulas:[\'ProfitMargin\',\'PercentageMarkup\',\'PercentageDiscount\'],factorFieldLabel:\'\',factorValue:0,initialize:function(options){this._super(\'initialize\',[options]);this.before(\'render\',function(){this.showFactorField=this.checkShouldShowFactorField();this.factorFieldLabel=this.getFactorFieldLabel();this.disableDiscountField();this.factorValue=this.model.get(\'pricing_factor\');},this);this.listenTo(this,\'render\',function(){if(this.action==\'edit\'){if(this.showFactorField){this.$el.find(\'.pricing-factor\').focus();}
this.setupPricingFormula();}});},bindDataChange:function(){this.listenTo(this.model,\'change:\'+this.name,function(){if(!this.disposed){this.render();}});},bindDomChange:function(){if(this.showFactorField){var $el=this.$(\'.pricing-factor\');$el.on(\'change\',_.bind(function(){this.model.set(\'pricing_factor\',$el.val());},this));}
this._super(\'bindDomChange\');},unbindDom:function(){if(this.showFactorField){this.$(\'.pricing-factor\').off();}
this._super(\'unbindDom\');},checkShouldShowFactorField:function(){return(this.model.has(this.name)&&_.contains(this.validFactorFieldFormulas,this.model.get(this.name)));},getFactorFieldLabel:function(){if(this.model.has(this.name)){switch(this.model.get(this.name)){case\'ProfitMargin\':return(this.action===\'edit\'&&this.view.action===\'list\')?\'LBL_POINTS_ABBR\':\'LBL_POINTS\';case\'PercentageMarkup\':case\'PercentageDiscount\':return(this.action===\'edit\'&&this.view.action===\'list\')?\'%\':\'LBL_PERCENTAGE\';}}
return\'\';},setupPricingFormula:function(){if(this.model.has(this.name)){switch(this.model.get(this.name)){case\'ProfitMargin\':this._setupProfitMarginFormula();break;case\'PercentageMarkup\':this._setupPercentageMarkupFormula();break;case\'PercentageDiscount\':this._setupPercentageDiscountFormula();break;case\'IsList\':this._setupIsListFormula();break;default:var oldPrice=this.model.get(\'discount_price\');if(_.isUndefined(oldPrice)||_.isNaN(oldPrice)){this.model.set(\'discount_price\',\'\');}
break;}}},_setupProfitMarginFormula:function(){var formula=function(cost_price,points){return app.math.div(app.math.mul(cost_price,100),app.math.sub(100,points));};this._costPriceFormula(formula);},_setupPercentageMarkupFormula:function(){var formula=function(cost_price,percentage){return app.math.mul(cost_price,app.math.add(1,app.math.div(percentage,100)));};this._costPriceFormula(formula);},_setupPercentageDiscountFormula:function(){var formula=function(list_price,percentage){return app.math.sub(list_price,app.math.mul(list_price,app.math.div(percentage,100)));};this._costPriceFormula(formula,\'list_price\');},_costPriceFormula:function(formula,field){field=field||\'cost_price\'
this.listenTo(this.model,\'change:\'+field,function(model,price){model.set(\'discount_price\',formula(price,model.get(\'pricing_factor\')));});this.listenTo(this.model,\'change:pricing_factor\',function(model,pricing_factor){model.set(\'discount_price\',formula(model.get(field),pricing_factor));});this.model.set(\'discount_price\',formula(this.model.get(field),this.model.get(\'pricing_factor\')));},_setupIsListFormula:function(){this.listenTo(this.model,\'change:list_price\',function(model,value){model.set(\'discount_price\',value);});this.model.set(\'discount_price\',this.model.get(\'list_price\'));},disableDiscountField:function(){if(this.model.has(this.name)){var field=this.view.getField(\'discount_price\');if(field){switch(this.model.get(this.name)){case\'ProfitMargin\':case\'PercentageMarkup\':case\'PercentageDiscount\':case\'IsList\':field.setDisabled(true);break;default:field.setDisabled(false);break;}}}}})',
    ),
  ),
  '_hash' => '96b3acfe3d416c9187e9576e7d6865ab',
);

