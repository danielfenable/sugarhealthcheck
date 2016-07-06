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
var Item=function(options,parent){Element.call(this,options);this.label=null;this.action=null;this.parentMenu=null;this.menu=null;this.toolTip=null;this.disabled=null;this.focused=null;this.icon=null;Item.prototype.initObject.call(this,options,parent);};Item.prototype=new Element();Item.prototype.type="Item";Item.prototype.family="Item";Item.prototype.initObject=function(options,parent){var defaults={label:null,menu:null,toolTip:null,parentMenu:parent||null,disabled:false,focused:false,icon:'adam-menu-icon-empty'};if(options&&options.isAction){this.loadAction(options,parent);}else{$.extend(true,defaults,options);this.setLabel(defaults.label).setToolTip(defaults.toolTip).setParentMenu(defaults.parentMenu).setDisabled(defaults.disabled).setIcon(defaults.icon).setFocused(defaults.focused);if(!defaults.action){this.action=new Action({text:defaults.label,cssStyle:defaults.icon,handler:defaults.handler});}
if(defaults.menu){this.setChildMenu(defaults.menu);}}};Item.prototype.loadAction=function(action,parent){this.action=action;this.setLabel(this.action.text);this.setIcon(this.action.cssStyle);this.setDisabled(this.action.disabled);this.setParentMenu(parent);this.setFocused(false);if(action.menu){this.setChildMenu(action.menu);}};Item.prototype.setLabel=function(text){this.label=text;if(this.action){this.action.setText(text);}
return this;};Item.prototype.setIcon=function(icon){this.icon=icon;if(this.action){this.action.setCssClass(icon);}
return this;};Item.prototype.paint=function(){};Item.prototype.setParentMenu=function(parent){this.parentMenu=parent;return this;};Item.prototype.setChildMenu=function(child){if(child instanceof Menu){child.setCanvas(this.parentMenu.canvas);child.setParent(this);this.menu=child;}else{child.canvas=this.parentMenu.canvas;child.parent=this;this.menu=new Menu(child);}
return this;};Item.prototype.setDisabled=function(value){this.disabled=value;return this;};Item.prototype.setFocused=function(value){this.focused=value;return this;};Item.prototype.setToolTip=function(value){this.toolTip=value;return this;};Item.prototype.createHTML=function(){var li;li=this.createHTMLElement('li');li.className='adam-item';if(this.disabled){li.className=li.className+' adam-disabled';}
li.id=UITools.getIndex();this.html=li;return this.html;};Item.prototype.attachListeners=function(){};Item.prototype.closeMenu=function(){if(this.parentMenu&&this.parentMenu.canvas&&this.parentMenu.canvas.currentMenu){this.parentMenu.canvas.currentMenu.hide();}};