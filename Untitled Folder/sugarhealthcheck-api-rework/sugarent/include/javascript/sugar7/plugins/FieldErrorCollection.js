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
(function(app){app.events.on('app:init',function(){app.plugins.register('FieldErrorCollection',['view'],{_errorCollection:undefined,onAttach:function(component,plugin){this._errorCollection=new Backbone.Collection();this.once('init',function(){this.context.on('field:error',this.handleErrorEvent,this);},this);},onDetach:function(component,plugin){this.context.off('field:error',null,this);},handleErrorEvent:function(field,addError){addError=_.isUndefined(addError)?true:addError;if(addError){this._errorCollection.add(field.model);}else{this._errorCollection.remove(field.model);}
this.context.trigger('plugin:fieldErrorCollection:hasFieldErrors',this._errorCollection,this.hasFieldErrors());},hasFieldErrors:function(){return(this._errorCollection.length>0);}});});})(SUGAR.App);