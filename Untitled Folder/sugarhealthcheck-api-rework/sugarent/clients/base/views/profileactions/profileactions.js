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
({plugins:['Dropdown','Tooltip'],events:{'click [data-action=link]':'linkClicked','click #userTab':'hideSubmenuItems','click #userActions':'closeSubmenu'},displaySubmenu:false,initialize:function(options){app.view.View.prototype.initialize.call(this,options);app.events.on("app:sync:complete",this.render,this);app.events.on("bwc:avatar:removed",this.bwcAvatarRemoved,this);app.user.on("change:picture",this.setCurrentUserData,this);},_renderHtml:function(){if(!app.router||!app.api.isAuthenticated()||app.config.appStatus==='offline'){return;}
if(!_.isEmpty(this.meta)){this.menulist=this.filterAvailableMenu(app.utils.deepCopy(this.meta));}
this._super('_renderHtml');},linkClicked:function(evt){evt.preventDefault();evt.stopPropagation();var $menuItem=this.$(evt.currentTarget),$submenu=$menuItem.closest('li').find('.dropdown-inset');$submenu.toggle();$menuItem.toggleClass("open");var maxHeight=330,currentHeight=this.$("#fullmenu").outerHeight();this.$('.dropdown-submenu').toggleClass('with-scroll',currentHeight>=maxHeight);},closeSubmenu:function(){this.$('.dropdown-submenu').removeClass("open");},hideSubmenuItems:function(){this.$('.dropdown-inset').hide();},filterAvailableMenu:function(menuMeta){var result=[];_.each(menuMeta,function(item){item=this.filterMenuProperties(item);if(!_.isEmpty(item['acl_module'])){if(app.acl.hasAccess(item.acl_action,item.acl_module)){result.push(item);}}else if(item['acl_action']==='admin'&&item['label']==='LBL_ADMIN'){if(app.acl.hasAccessToAny('developer')){result.push(item);}}else{if(app.acl.hasAccess('admin','Administration')||app.acl.hasAccessToAny('developer')||item['acl_action']!=='admin'){result.push(item);}}},this);return result;},filterMenuProperties:function(singleItem){if(singleItem['label']==='LBL_PROFILE'){singleItem['img_url']=this.pictureUrl;}
return singleItem;},bwcProfileEntered:function(){var self=this;app.user.load(function(){self.setCurrentUserData();});},bwcAvatarRemoved:function(){app.user.set("picture",'');this.setCurrentUserData();},setCurrentUserData:function(){this.fullName=app.user.get("full_name");this.userName=app.user.get("user_name");this.userId=app.user.get('id');var picture=app.user.get("picture");this.pictureUrl=picture?app.api.buildFileURL({module:"Users",id:this.userId,field:"picture"},{cleanCache:true}):'';this.render();},_dispose:function(){if(app.user)app.user.off(null,null,this);app.view.View.prototype._dispose.call(this);}})