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
({events:{'click [name=close_button]':'close','click [name=ok_button]':'ok'},initialize:function(options){this.message=options.layout.confirmMessage;app.view.View.prototype.initialize.call(this,options);},close:function(evt){this.layout.context.trigger("modal:close");},ok:function(evt){this.layout.context.trigger("modal:callback");}})