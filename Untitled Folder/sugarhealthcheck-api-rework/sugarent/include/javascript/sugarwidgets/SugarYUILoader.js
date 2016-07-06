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
SUGAR.yui={loader:new YAHOO.util.YUILoader({skin:{base:'blank',defaultSkin:''}})}
SUGAR.yui.loader.addModule({name:'sugarwidgets',type:'js',path:'SugarYUIWidgets.js',requires:['yahoo','layout','dragdrop','treeview','json','datatable','container','button','tabview'],varname:YAHOO.SUGAR});