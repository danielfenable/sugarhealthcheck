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
({select2fieldTag:'select',_render:function(){this._super('_render');this.$(this.select2fieldTag).select2({'minimumResultsForSearch':-1});},_getFallbackTemplate:function(viewName){if(viewName==='massupdate'){return'dropdown';}
return this._super('_getFallbackTemplate',[viewName]);},bindDomChange:function(){var $el=this.$(this.select2fieldTag);if(!$el.length){$el=this.$(this.fieldTag);}
$el.on('change',_.bind(function(){var value=$el.is(this.select2fieldTag)?$el.val():$el.prop('checked');this.model.set(this.name,this.unformat(value));},this));},bindDataChange:function(){if(!this.model){return;}
this.model.on('change:'+this.name,function(model,value){if(this.action==='massupdate'){this.$(this.select2fieldTag).val(this.format(value)?'1':'0');}else if(this.action==='edit'){this.$(this.fieldTag).prop('checked',this.format(value));}else{this.render();}},this);},unbindDom:function(){this.$(this.select2fieldTag).off();this._super('unbindDom');},unformat:function(value){if(_.isString(value)){value=value=='1';}
return value;},format:function(value){if(_.isString(value)){value=value=='1';}
return value;}})