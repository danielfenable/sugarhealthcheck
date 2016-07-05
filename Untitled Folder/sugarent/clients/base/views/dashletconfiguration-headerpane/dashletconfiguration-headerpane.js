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
({plugins:['Editable','ErrorDecoration'],events:{"click a[name=cancel_button]":"close","click a[name=save_button]":"save"},_translatedLabel:null,initialize:function(options){this._super('initialize',[options]);this.before('save',function(model){return this.layout.triggerBefore('dashletconfig:save',model);},this);app.shortcuts.register('Dashlet:Config:Cancel',['esc','ctrl+alt+l'],function(){var $cancelButton=this.$('a[name=cancel_button]');if($cancelButton.is(':visible')&&!$cancelButton.hasClass('disabled')){$cancelButton.click();}},this,true);app.shortcuts.register('Dashlet:Config:Save',['ctrl+s','ctrl+alt+a'],function(){var $saveButton=this.$('a[name=save_button]');if($saveButton.is(':visible')&&!$saveButton.hasClass('disabled')){$saveButton.click();}},this,true);},hasUnsavedChanges:function(){var previousAttributes=_.extend(this.model.previousAttributes(),{label:this._translatedLabel});return!_.isEmpty(this.model.changedAttributes(previousAttributes));},save:function(){if(this.triggerBefore('save',this.model)===false){return false;}
var fields={};_.each(this.meta.panels[0].fields,function(field){fields[field.name]=field;});this.model.doValidate(fields,_.bind(function(isValid){if(isValid){app.drawer.close(this.model);}},this));},close:function(){app.drawer.close();},_renderHtml:function(){var label;this.model=this.context.get('model');label=app.lang.get(this.model.get('label'),this.model.get('module')||this.module,this.model.attributes);this._translatedLabel=label;this.model.set('label',label,{silent:true});app.view.View.prototype._renderHtml.call(this);}})