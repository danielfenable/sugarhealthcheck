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
({extendsFrom:'RowactionField',initialize:function(options){this._super("initialize",[options]);this.type='rowaction';},_render:function(){if(this.isDisabled()){if(_.isUndefined(this.def.css_class)||this.def.css_class.indexOf('disabled')===-1){this.def.css_class=(this.def.css_class)?this.def.css_class+" disabled":"disabled";}
this.undelegateEvents();}
this._super("_render");},isDisabled:function(){return!this._super("hasAccess");},hasAccess:function(){return true;}})