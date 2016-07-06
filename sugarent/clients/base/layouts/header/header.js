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
({initialize:function(options){app.view.Layout.prototype.initialize.call(this,options);this.on("header:update:route",this.resize,this);app.events.on("app:sync:complete",this.resize,this);app.events.on("app:view:change",this.resize,this);app.events.on("router:reauth:load",this.hideMenu,this);app.events.on("router:reauth:success",this.showMenu,this);var resize=_.bind(this.resize,this);$(window).off("resize",resize).on("resize",resize);},_placeComponent:function(component){this.$el.find('.nav-collapse').append(component.$el);},resize:function(){var totalWidth=0,modulelist,maxMenuWidth,componentElement,container=this.$('.navbar-inner');_.each(this._components,function(component){componentElement=component.$el.children().first();if(component.name!=='module-list'){if(componentElement.is(':visible')){totalWidth+=component.$el.outerWidth(true);}}else{modulelist=component.$el;}});maxMenuWidth=container.parent('.navbar-fixed-top').width();this.trigger('view:resize',maxMenuWidth-totalWidth);},_render:function(){this._super('_render');if(app.api.isAuthenticated()){this.showMenu();}else{this.hideMenu();}},showMenu:function(){this.$el.show();this.resize();},hideMenu:function(){this.$el.hide();}})