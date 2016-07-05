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
({extendsFrom:'HeaderpaneView',events:{'click a[name=close_button]':'close'},initialize:function(options){this._super('initialize',[options]);app.shortcuts.register('AuditHeaderPanel:Close',['esc','ctrl+alt+l'],function(){var $closeButton=this.$('a[name=close_button]');if($closeButton.is(':visible')&&!$closeButton.hasClass('disabled')){$closeButton.click();}},this,true);},close:function(){app.drawer.close();}})