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
({extendsFrom:'ListView',sidebarClosed:false,initialize:function(options){this._super("initialize",[options]);app.controller.context.on("sidebarRendered",this.closeSidebar,this);},closeSidebar:function(){if(!this.sidebarClosed){app.controller.context.trigger('toggleSidebar');this.sidebarClosed=true;}}})