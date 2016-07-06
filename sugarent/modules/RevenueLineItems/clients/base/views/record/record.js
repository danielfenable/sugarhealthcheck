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
({extendsFrom:'RecordView',initialize:function(options){this.plugins=_.union(this.plugins||[],['HistoricalSummary']);this._super('initialize',[options]);this._parsePanelFields(this.meta.panels);},cancelClicked:function(){var changedAttributes=this.model.changedAttributes(this.model.getSyncedAttributes());this.model.set(changedAttributes);this._super('cancelClicked');this.context.trigger('button:cancel_button:click');},getCustomSaveOptions:function(options){var origSuccess=options.success;return{success:_.bind(function(){if(_.isFunction(origSuccess)){origSuccess();}
if(!_.isEmpty(this.model.get('quote_id'))){app.alert.show('save_rli_quote_notice',{level:'info',messages:app.lang.get('SAVE_RLI_QUOTE_NOTICE','RevenueLineItems'),autoClose:true});}},this)};},bindDataChange:function(){this.model.on('duplicate:before',this._handleDuplicateBefore,this);this.model.on('change:likely_case',this._handleLikelyChange,this);this._super('bindDataChange');},_handleLikelyChange:function(new_model,val,options){if(_.isEmpty(options)&&_.isEmpty(new_model.get('product_template_id'))&&!_.isFinite(new_model.get('discount_price'))){var quantity=new_model.get('quantity'),new_value='';if(!_.isFinite(quantity)||parseFloat(quantity)===0){quantity=1;}
if(!_.isEmpty(val)){new_value=app.math.div(val,quantity);}
new_model.set({discount_price:new_value});}},_handleDuplicateBefore:function(new_model){new_model.unset('quote_id');new_model.unset('quote_name');},_parsePanelFields:function(panels){_.each(panels,function(panel){if(!app.metadata.getModule('Forecasts','config').is_setup){_.every(panel.fields,function(field,index){if(field.name=='commit_stage'){panel.fields[index]={'name':'spacer','label':field.label,'span':6,'readonly':true};return false;}
return true;},this);}},this);}})