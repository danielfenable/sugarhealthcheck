/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('dd-plugin',function(Y,NAME){var Drag=function(config){if(Y.Widget&&config.host instanceof Y.Widget){config.node=config.host.get('boundingBox');config.widget=config.host;}else{config.node=config.host;config.widget=false;}
Drag.superclass.constructor.call(this,config);},EV_START='drag:start',EV_DRAG='drag:drag',EV_DRAG_END='drag:end';Drag.NAME="dd-plugin";Drag.NS="dd";Y.extend(Drag,Y.DD.Drag,{_widgetHandles:null,_widget:undefined,_stoppedPosition:undefined,_usesWidgetPosition:function(widget){var r=false;if(widget){r=(widget.hasImpl&&widget.hasImpl(Y.WidgetPosition))?true:false;}
return r;},_checkEvents:function(){if(this._widget){if(this.proxy){if(this._widgetHandles.length>0){this._removeWidgetListeners();}}else{if(this._widgetHandles.length===0){this._attachWidgetListeners();}}}},_removeWidgetListeners:function(){Y.Array.each(this._widgetHandles,function(handle){handle.detach();});this._widgetHandles=[];},_attachWidgetListeners:function(){if(this._usesWidgetPosition(this._widget)){this._widgetHandles.push(this.on(EV_DRAG,this._setWidgetCoords));this._widgetHandles.push(this.on(EV_DRAG_END,this._updateStopPosition));}},initializer:function(config){this._widgetHandles=[];this._widget=config.widget;this.on(EV_START,this._checkEvents);this._attachWidgetListeners();},_setWidgetCoords:function(e){var nodeXY=this._stoppedPosition||e.target.nodeXY,realXY=e.target.realXY,movedXY=[realXY[0]-nodeXY[0],realXY[1]-nodeXY[1]];if(movedXY[0]!==0&&movedXY[1]!==0){this._widget.set('xy',realXY);}
else if(movedXY[0]===0){this._widget.set('y',realXY[1]);}
else if(movedXY[1]===0){this._widget.set('x',realXY[0]);}},_updateStopPosition:function(e){this._stoppedPosition=e.target.realXY;}});Y.namespace('Plugin');Y.Plugin.Drag=Drag;},'3.15.0',{"optional":["dd-constrain","dd-proxy"],"requires":["dd-drag"]});