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
({className:'filtered tabbable tabs-left',attributes:function(){return{'data-subpanel-link':this.options.context.get('link')};},HIDE_SHOW_KEY:'hide-show',HIDE_SHOW:{HIDE:'hide',SHOW:'show'},initialize:function(options){this._super('initialize',[options]);this._initPanelState();},_initPanelState:function(){var collapse;this.hideShowLastStateKey=app.user.lastState.key(this.HIDE_SHOW_KEY,this);if(app.config.collapseSubpanels){collapse=true;}else{var hideShowLastState=app.user.lastState.get(this.hideShowLastStateKey);collapse=_.isUndefined(hideShowLastState)||hideShowLastState!==this.HIDE_SHOW.SHOW;}
this.context.set('collapsed',collapse);},bindDataChange:function(){this.listenTo(this.collection,'reset add remove',function(){this.$('.subpanel').toggleClass('empty',this.collection.length===0);},this);this.listenTo(this.context,'refresh:count',function(hasAtLeast,properties){this.$('.subpanel').toggleClass('empty',!properties.length);},this);this.listenTo(this.context.parent,'panel-top:refresh',function(link){if(this.context.get('link')===link){this.context.resetLoadFlag();this.toggle(true);}});},_placeComponent:function(component){this.$(".subpanel").append(component.el);},_render:function(){var collapsed=this.context.get('collapsed');if(collapsed){this._components[0].render();}else{this._canToggle=true;this._super('_render');}
this.$('.subpanel').toggleClass('closed',collapsed);},toggle:function(show){if(this.context.get('isCreateSubpanel')){return;}
show=_.isUndefined(show)?this.context.get('collapsed'):show;this.$('.subpanel').toggleClass('closed',!show);this.context.set('collapsed',!show);this._toggleComponents(show);this.context.set('skipFetch',false);this.context.loadData();app.user.lastState.set(this.hideShowLastStateKey,show?this.HIDE_SHOW.SHOW:this.HIDE_SHOW.HIDE);},_toggleComponents:function(show){_.each(this._components,function(component){if(this._stopComponentToggle(component)){return;}
if(!this._canToggle){component.render();}else if(show){component.show();}else{component.hide();}},this);this._canToggle=true;},_stopComponentToggle:function(component){return component.$el.hasClass('subpanel-header');}})