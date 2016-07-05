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
({extendsFrom:'RowactionField',initialize:function(options){options.def.event=options.def.event||'list:unlinkrow:fire';this._super('initialize',[options]);this.type='rowaction';},hasAccess:function(){var parentModule=this.context.get('parentModule');if(parentModule==='Home'){return false;}
var link=this.context.get('link');if(link&&app.utils.isRequiredLink(parentModule,link)){return false;}
return this._super('hasAccess');}})