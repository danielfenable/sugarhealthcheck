/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('resize-plugin',function(Y,NAME){var ResizePlugin=function(config){config.node=((Y.Widget&&config.host instanceof Y.Widget)?config.host.get('boundingBox'):config.host);if(config.host instanceof Y.Widget){config.widget=config.host;}
else{config.widget=false;}
ResizePlugin.superclass.constructor.call(this,config);};ResizePlugin.NAME="resize-plugin";ResizePlugin.NS="resize";ResizePlugin.ATTRS={node:{value:undefined},widget:{value:undefined}};Y.extend(ResizePlugin,Y.Resize,{initializer:function(config){this.set('node',config.node);this.set('widget',config.widget);this.on('resize:resize',function(e){this._correctDimensions(e);});},_correctDimensions:function(e){var node=this.get('node'),x={old:node.getX(),cur:e.currentTarget.info.left},y={old:node.getY(),cur:e.currentTarget.info.top};if(this.get('widget')){this._setWidgetProperties(e,x,y);}
if(this._isDifferent(x.old,x.cur)){node.set('x',x.cur);}
if(this._isDifferent(y.old,y.cur)){node.set('y',y.cur);}},_setWidgetProperties:function(e,x,y){var widget=this.get('widget'),oldHeight=widget.get('height'),oldWidth=widget.get('width'),currentWidth=e.currentTarget.info.offsetWidth-e.currentTarget.totalHSurrounding,currentHeight=e.currentTarget.info.offsetHeight-e.currentTarget.totalVSurrounding;if(this._isDifferent(oldHeight,currentHeight)){widget.set('height',currentHeight);}
if(this._isDifferent(oldWidth,currentWidth)){widget.set('width',currentWidth);}
if(widget.hasImpl&&widget.hasImpl(Y.WidgetPosition)){if(this._isDifferent(widget.get('x'),x.cur)){widget.set('x',x.cur);}
if(this._isDifferent(widget.get('y'),y.cur)){widget.set('y',y.cur);}}},_isDifferent:function(oldVal,newVal){var retValue=false;if(oldVal!==newVal){retValue=newVal;}
return retValue;}});Y.namespace('Plugin');Y.Plugin.Resize=ResizePlugin;},'3.15.0',{"requires":["resize-base","plugin"],"optional":["resize-constrain"]});