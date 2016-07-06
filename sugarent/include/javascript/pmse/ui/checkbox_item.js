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
var CheckboxItem=function(options,parent){Item.call(this,options,parent);this.checked=null;this.itemAnchor=null;CheckboxItem.prototype.initObject.call(this,options);};CheckboxItem.prototype=new Item();CheckboxItem.prototype.type="CheckboxItem";CheckboxItem.prototype.initObject=function(options){var defaults={checked:false};$.extend(true,defaults,options);this.setChecked(defaults.checked);};CheckboxItem.prototype.setChecked=function(value){if(_.isBoolean(value)){this.checked=value;}
return this;};CheckboxItem.prototype.createHTML=function(){var labelSpan,iconSpan;Item.prototype.createHTML.call(this);this.itemAnchor=this.createHTMLElement('a');this.itemAnchor.href="#";labelSpan=this.createHTMLElement('span');labelSpan.innerHTML=this.label;labelSpan.className="adam-label";iconSpan=this.createHTMLElement('span');iconSpan.className=(this.checked)?'adam-check-checked':'adam-check-unchecked';this.itemAnchor.appendChild(iconSpan);this.itemAnchor.appendChild(labelSpan);this.html.appendChild(this.itemAnchor);return this.html;};CheckboxItem.prototype.attachListeners=function(){var self=this;if(this.html){$(this.itemAnchor).click(function(e){e.stopPropagation();if(!self.disabled){self.closeMenu();self.action.handler(!self.checked);}}).mouseover(function(){self.setActiveItem(true);}).mouseout(function(){self.setActiveItem(false);}).mouseup(function(e){e.stopPropagation();}).mousedown(function(e){e.stopPropagation();});}};CheckboxItem.prototype.setActiveItem=function(value){if(!this.disabled){if(value){this.style.addClasses(['adam-item-active']);this.style.applyStyle();this.parentMenu.setCurrentItem(this);}else{this.style.removeClasses(['adam-item-active']);this.style.applyStyle();}}};