/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('widget-autohide',function(Y,NAME){var WIDGET_AUTOHIDE='widgetAutohide',AUTOHIDE='autohide',CLICK_OUTSIDE='clickoutside',FOCUS_OUTSIDE='focusoutside',DOCUMENT='document',KEY='key',PRESS_ESCAPE='esc',BIND_UI='bindUI',SYNC_UI="syncUI",RENDERED="rendered",BOUNDING_BOX="boundingBox",VISIBLE="visible",CHANGE='Change',getCN=Y.ClassNameManager.getClassName;function WidgetAutohide(config){Y.after(this._bindUIAutohide,this,BIND_UI);Y.after(this._syncUIAutohide,this,SYNC_UI);if(this.get(RENDERED)){this._bindUIAutohide();this._syncUIAutohide();}}
WidgetAutohide.ATTRS={hideOn:{validator:Y.Lang.isArray,valueFn:function(){return[{node:Y.one(DOCUMENT),eventName:KEY,keyCode:PRESS_ESCAPE}];}}};WidgetAutohide.prototype={_uiHandlesAutohide:null,destructor:function(){this._detachUIHandlesAutohide();},_bindUIAutohide:function(){this.after(VISIBLE+CHANGE,this._afterHostVisibleChangeAutohide);this.after("hideOnChange",this._afterHideOnChange);},_syncUIAutohide:function(){this._uiSetHostVisibleAutohide(this.get(VISIBLE));},_uiSetHostVisibleAutohide:function(visible){if(visible){Y.later(1,this,'_attachUIHandlesAutohide');}else{this._detachUIHandlesAutohide();}},_attachUIHandlesAutohide:function(){if(this._uiHandlesAutohide){return;}
var bb=this.get(BOUNDING_BOX),hide=Y.bind(this.hide,this),uiHandles=[],self=this,hideOn=this.get('hideOn'),i=0,o={node:undefined,ev:undefined,keyCode:undefined};for(;i<hideOn.length;i++){o.node=hideOn[i].node;o.ev=hideOn[i].eventName;o.keyCode=hideOn[i].keyCode;if(!o.node&&!o.keyCode&&o.ev){uiHandles.push(bb.on(o.ev,hide));}
else if(o.node&&!o.keyCode&&o.ev){uiHandles.push(o.node.on(o.ev,hide));}
else if(o.node&&o.keyCode&&o.ev){uiHandles.push(o.node.on(o.ev,hide,o.keyCode));}
else{}}
this._uiHandlesAutohide=uiHandles;},_detachUIHandlesAutohide:function(){Y.each(this._uiHandlesAutohide,function(h){h.detach();});this._uiHandlesAutohide=null;},_afterHostVisibleChangeAutohide:function(e){this._uiSetHostVisibleAutohide(e.newVal);},_afterHideOnChange:function(e){this._detachUIHandlesAutohide();if(this.get(VISIBLE)){this._attachUIHandlesAutohide();}}};Y.WidgetAutohide=WidgetAutohide;},'3.15.0',{"requires":["base-build","event-key","event-outside","widget"]});