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
({initialize:function(options){this._super('initialize',[options]);this.meta=_.extend({},app.metadata.getView(null,'headerpane'),this.meta);this._title=this.meta.title;this.context.on('headerpane:title',function(title){this._title=title;if(!this.disposed)this.render();},this);app.shortcuts.register('Headerpane:Cancel',['esc','ctrl+alt+l'],function(){var $cancelButton=this.$('a[name=cancel_button]'),$closeButton=this.$('a[name=close]');if($cancelButton.is(':visible')&&!$cancelButton.hasClass('disabled')){$cancelButton.click();}else if($closeButton.is(':visible')&&!$closeButton.hasClass('disabled')){$closeButton.click();}},this,true);app.shortcuts.register('Headerpane:Save',['ctrl+s','ctrl+alt+a'],function(){var $saveButton=this.$('a[name=save_button]');if($saveButton.is(':visible')&&!$saveButton.hasClass('disabled')){$saveButton.click();}},this,true);},_renderHtml:function(){this.title=!_.isUndefined(this._title)?this._formatTitle(this._title):this.title;this.meta.fields=_.map(this.meta.fields,function(field){if(field.name==='title'){field['formatted_value']=this.title||this._formatTitle(field['default_value']);}
return field;},this);this._super('_renderHtml');},_formatTitle:function(title){if(!title){return'';}
return app.lang.get(title,this.module);}})