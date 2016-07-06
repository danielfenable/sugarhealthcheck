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
({extendsFrom:'RecordlistView',plugins:['ListColumnEllipsis','ListRemoveLinks','Pagination'],unbindData:function(){var massCollection=this.context.get('mass_collection');if(massCollection){massCollection.off(null,null,this);}
this._super("unbindData");},getFieldNames:function(module){return['name','email'];},_render:function(){if(app.acl.hasAccessToAny('developer')){this._super('_render');}
else{app.controller.loadView({layout:'access-denied'});}},_renderField:function(field){this._super("_renderField",[field]);},_dispose:function(){jQuery('.adam-modal').remove();this._super("_dispose",arguments);}})