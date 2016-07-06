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
({extendsFrom:'ProfileactionsView',plugins:['Dropdown','Tooltip'],_profileActionsTag:'[data-menu="user-actions"]',initialize:function(options){var self=this;this._super('initialize',[options]);app.events.on('app:view:change',function(layout,params){if(params.module==='Contacts'){self.$(self._profileActionsTag).addClass('active');}else{self.$(self._profileActionsTag).removeClass('active');}});},_renderHtml:function(){this._super('_renderHtml');if(app.controller.context.get('module')==='Contacts'){this.$(this._profileActionsTag).addClass('active');}},setCurrentUserData:function(){this.fullName=app.user.get("full_name");this.userName=app.user.get("portal_name");var picture=app.user.get("picture");this.pictureUrl=picture?app.api.buildFileURL({module:"Contacts",id:app.user.get("id"),field:"picture"}):'';this.render();},filterMenuProperties:function(singleItem){if(singleItem['label']==='LBL_PROFILE'){singleItem['img_url']=this.pictureUrl;}
return singleItem;}})