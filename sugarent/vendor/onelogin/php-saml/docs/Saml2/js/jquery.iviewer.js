/*
     * iviewer Widget for jQuery UI
     * https://github.com/can3p/iviewer
     *
     * Copyright (c) 2009 - 2012 Dmitry Petrov
     * Dual licensed under the MIT and GPL licenses.
     *  - http://www.opensource.org/licenses/mit-license.php
     *  - http://www.gnu.org/copyleft/gpl.html
     *
     * Author: Dmitry Petrov
     * Version: 0.7
     */
(function($,undefined){var mouseEvents={touchstart:'mousedown',touchmove:'mousemove',touchend:'mouseup'};function makeMouseEvent(event){var touch=event.originalEvent.changedTouches[0];return $.extend(event,{type:mouseEvents[event.type],which:1,pageX:touch.pageX,pageY:touch.pageY,screenX:touch.screenX,screenY:touch.screenY,clientX:touch.clientX,clientY:touch.clientY,isTouchEvent:true});}
var mouseProto=$.ui.mouse.prototype,_mouseInit=$.ui.mouse.prototype._mouseInit;mouseProto._mouseInit=function(){var self=this;self._touchActive=false;this.element.bind('touchstart.'+this.widgetName,function(event){self._touchActive=true;return self._mouseDown(makeMouseEvent(event));})
var self=this;this._mouseMoveDelegate=function(event){if(self._touchActive){return self._mouseMove(makeMouseEvent(event));}};this._mouseUpDelegate=function(event){if(self._touchActive){self._touchActive=false;return self._mouseUp(makeMouseEvent(event));}};$(document).bind('touchmove.'+this.widgetName,this._mouseMoveDelegate).bind('touchend.'+this.widgetName,this._mouseUpDelegate);_mouseInit.apply(this);}
var setter=function(setter,getter){return function(val){if(arguments.length===0){return getter.apply(this);}else{setter.apply(this,arguments);}}};var ieTransforms={'0':{marginLeft:0,marginTop:0,filter:'progid:DXImageTransform.Microsoft.Matrix(M11=1, M12=0, M21=0, M22=1, SizingMethod="auto expand")'},'90':{marginLeft:-1,marginTop:1,filter:'progid:DXImageTransform.Microsoft.Matrix(M11=0, M12=-1, M21=1, M22=0, SizingMethod="auto expand")'},'180':{marginLeft:0,marginTop:0,filter:'progid:DXImageTransform.Microsoft.Matrix(M11=-1, M12=0, M21=0, M22=-1, SizingMethod="auto expand")'},'270':{marginLeft:-1,marginTop:1,filter:'progid:DXImageTransform.Microsoft.Matrix(M11=0, M12=1, M21=-1, M22=0, SizingMethod="auto expand")'}},useIeTransforms=(jQuery.browser.msie&&parseInt(jQuery.browser.version,10)<=8);$.widget("ui.iviewer",$.ui.mouse,{widgetEventPrefix:"iviewer",options:{zoom:"fit",zoom_base:100,zoom_max:800,zoom_min:25,zoom_delta:1.4,zoom_animation:true,ui_disabled:false,update_on_resize:true,onZoom:jQuery.noop,onAfterZoom:jQuery.noop,onStartDrag:jQuery.noop,onDrag:jQuery.noop,onStopDrag:jQuery.noop,onMouseMove:jQuery.noop,onClick:jQuery.noop,onStartLoad:null,onFinishLoad:null},_create:function(){var me=this;this.dx=0;this.dy=0;this.img_object={};this.zoom_object={};this._angle=0;this.current_zoom=this.options.zoom;if(this.options.src===null){return;}
this.container=this.element;this._updateContainerInfo();this.container.css("overflow","hidden");if(this.options.update_on_resize==true)
{$(window).resize(function()
{me._updateContainerInfo();});}
this.img_object=new $.ui.iviewer.ImageObject(this.options.zoom_animation);this.img_object.object().click(function(e){return me._click(e)}).mousewheel(function(ev,delta)
{var zoom=(delta>0)?1:-1;me.zoom_by(zoom);return false;}).prependTo(this.container);this.container.bind('mousemove',function(ev){me._handleMouseMove(ev);});this.loadImage(this.options.src);if(!this.options.ui_disabled)
{this.createui();}
this._mouseInit();},destroy:function(){this._mouseDestroy();},_updateContainerInfo:function()
{this.options.height=this.container.height();this.options.width=this.container.width();},loadImage:function(src)
{this.current_zoom=this.options.zoom;var me=this;this._trigger('onStartLoad',0,src);this.img_object.load(src,function(){me.container.addClass("iviewer_cursor");if(me.options.zoom=="fit"){me.fit(true);}
else{me.set_zoom(me.options.zoom,true);}
if(me.options.onFinishLoad)
{me._trigger('onFinishLoad',0,src);}});},fit:function(skip_animation)
{var aspect_ratio=this.img_object.orig_width()/ this.img_object.orig_height();var window_ratio=this.options.width / this.options.height;var choose_left=(aspect_ratio>window_ratio);var new_zoom=0;if(choose_left){new_zoom=this.options.width / this.img_object.orig_width()*100;}
else{new_zoom=this.options.height / this.img_object.orig_height()*100;}
this.set_zoom(new_zoom,skip_animation);},center:function()
{this.setCoords(-Math.round((this.img_object.display_width()-this.options.width)/2),-Math.round((this.img_object.display_height()-this.options.height)/2));},moveTo:function(x,y)
{var dx=x-Math.round(this.options.width/2);var dy=y-Math.round(this.options.height/2);var new_x=this.img_object.x()-dx;var new_y=this.img_object.y()-dy;this.setCoords(new_x,new_y);},getContainerOffset:function(){return jQuery.extend({},this.container.offset());},setCoords:function(x,y)
{if(!this.img_object.loaded()){return;}
var coords=this._correctCoords(x,y);this.img_object.x(coords.x);this.img_object.y(coords.y);},_correctCoords:function(x,y)
{x=parseInt(x,10);y=parseInt(y,10);if(y>0){y=0;}
if(x>0){x=0;}
if(y+this.img_object.display_height()<this.options.height){y=this.options.height-this.img_object.display_height();}
if(x+this.img_object.display_width()<this.options.width){x=this.options.width-this.img_object.display_width();}
if(this.img_object.display_width()<=this.options.width){x=-(this.img_object.display_width()-this.options.width)/2;}
if(this.img_object.display_height()<=this.options.height){y=-(this.img_object.display_height()-this.options.height)/2;}
return{x:x,y:y};},containerToImage:function(x,y)
{var coords={x:x-this.img_object.x(),y:y-this.img_object.y()};coords=this.img_object.toOriginalCoords(coords);return{x:util.descaleValue(coords.x,this.current_zoom),y:util.descaleValue(coords.y,this.current_zoom)};},imageToContainer:function(x,y)
{var coords={x:util.scaleValue(x,this.current_zoom),y:util.scaleValue(y,this.current_zoom)};return this.img_object.toRealCoords(coords);},_getMouseCoords:function(e)
{var containerOffset=this.container.offset();coords=this.containerToImage(e.pageX-containerOffset.left,e.pageY-containerOffset.top);return coords;},set_zoom:function(new_zoom,skip_animation)
{if(this._trigger('onZoom',0,new_zoom)==false){return;}
if(!this.img_object.loaded()){return;}
if(new_zoom<this.options.zoom_min)
{new_zoom=this.options.zoom_min;}
else if(new_zoom>this.options.zoom_max)
{new_zoom=this.options.zoom_max;}
if(this.current_zoom=="fit")
{var old_x=Math.round(this.options.width/2+this.img_object.orig_width()/2);var old_y=Math.round(this.options.height/2+this.img_object.orig_height()/2);this.current_zoom=100;}
else{var old_x=-this.img_object.x()+Math.round(this.options.width/2);var old_y=-this.img_object.y()+Math.round(this.options.height/2);}
var new_width=util.scaleValue(this.img_object.orig_width(),new_zoom);var new_height=util.scaleValue(this.img_object.orig_height(),new_zoom);var new_x=util.scaleValue(util.descaleValue(old_x,this.current_zoom),new_zoom);var new_y=util.scaleValue(util.descaleValue(old_y,this.current_zoom),new_zoom);new_x=this.options.width/2-new_x;new_y=this.options.height/2-new_y;this.img_object.display_width(new_width);this.img_object.display_height(new_height);var coords=this._correctCoords(new_x,new_y),self=this;this.img_object.setImageProps(new_width,new_height,coords.x,coords.y,skip_animation,function(){self._trigger('onAfterZoom',0,new_zoom);});this.current_zoom=new_zoom;this.update_status();},zoom_by:function(delta)
{var closest_rate=this.find_closest_zoom_rate(this.current_zoom);var next_rate=closest_rate+delta;var next_zoom=this.options.zoom_base*Math.pow(this.options.zoom_delta,next_rate)
if(delta>0&&next_zoom<this.current_zoom)
{next_zoom*=this.options.zoom_delta;}
if(delta<0&&next_zoom>this.current_zoom)
{next_zoom /=this.options.zoom_delta;}
this.set_zoom(next_zoom);},angle:function(deg,abs){if(arguments.length===0){return this.img_object.angle();}
if(deg<-270||deg>270||deg%90!==0){return;}
if(!abs){deg+=this.img_object.angle();}
if(deg<0){deg+=360;}
if(deg>=360){deg-=360;}
if(deg===this.img_object.angle()){return;}
this.img_object.angle(deg);this.center();this._trigger('angle',0,{angle:this.img_object.angle()});},find_closest_zoom_rate:function(value)
{if(value==this.options.zoom_base)
{return 0;}
function div(val1,val2){return val1 / val2};function mul(val1,val2){return val1*val2};var func=(value>this.options.zoom_base)?mul:div;var sgn=(value>this.options.zoom_base)?1:-1;var mltplr=this.options.zoom_delta;var rate=1;while(Math.abs(func(this.options.zoom_base,Math.pow(mltplr,rate))-value)>Math.abs(func(this.options.zoom_base,Math.pow(mltplr,rate+1))-value))
{rate++;}
return sgn*rate;},update_status:function()
{if(!this.options.ui_disabled)
{var percent=Math.round(100*this.img_object.display_height()/this.img_object.orig_height());if(percent)
{this.zoom_object.html(percent+"%");}}},info:function(param,withoutRotation){if(!param){return;}
switch(param){case'orig_width':case'orig_height':if(withoutRotation){return(this.img_object.angle()%180===0?this.img_object[param]():param==='orig_width'?this.img_object.orig_height():this.img_object.orig_width());}else{return this.img_object[param]();}
case'display_width':case'display_height':case'angle':return this.img_object[param]();case'zoom':return this.current_zoom;case'src':return this.img_object.object().attr('src');}},_mouseStart:function(e)
{$.ui.mouse.prototype._mouseStart.call(this,e);if(this._trigger('onStartDrag',0,this._getMouseCoords(e))===false){return false;}
this.container.addClass("iviewer_drag_cursor");this.dx=e.pageX-this.img_object.x();this.dy=e.pageY-this.img_object.y();return true;},_mouseCapture:function(e){return true;},_handleMouseMove:function(e){this._trigger('onMouseMove',e,this._getMouseCoords(e));},_mouseDrag:function(e)
{$.ui.mouse.prototype._mouseDrag.call(this,e);var ltop=e.pageY-this.dy;var lleft=e.pageX-this.dx;this.setCoords(lleft,ltop);this._trigger('onDrag',e,this._getMouseCoords(e));return false;},_mouseStop:function(e)
{$.ui.mouse.prototype._mouseStop.call(this,e);this.container.removeClass("iviewer_drag_cursor");this._trigger('onStopDrag',0,this._getMouseCoords(e));},_click:function(e)
{this._trigger('onClick',0,this._getMouseCoords(e));},createui:function()
{var me=this;$("<div>",{'class':"iviewer_zoom_in iviewer_common iviewer_button"}).bind('mousedown touchstart',function(){me.zoom_by(1);return false;}).appendTo(this.container);$("<div>",{'class':"iviewer_zoom_out iviewer_common iviewer_button"}).bind('mousedown touchstart',function(){me.zoom_by(-1);return false;}).appendTo(this.container);$("<div>",{'class':"iviewer_zoom_zero iviewer_common iviewer_button"}).bind('mousedown touchstart',function(){me.set_zoom(100);return false;}).appendTo(this.container);$("<div>",{'class':"iviewer_zoom_fit iviewer_common iviewer_button"}).bind('mousedown touchstart',function(){me.fit(this);return false;}).appendTo(this.container);this.zoom_object=$("<div>").addClass("iviewer_zoom_status iviewer_common").appendTo(this.container);$("<div>",{'class':"iviewer_rotate_left iviewer_common iviewer_button"}).bind('mousedown touchstart',function(){me.angle(-90);return false;}).appendTo(this.container);$("<div>",{'class':"iviewer_rotate_right iviewer_common iviewer_button"}).bind('mousedown touchstart',function(){me.angle(90);return false;}).appendTo(this.container);this.update_status();}});$.ui.iviewer.ImageObject=function(do_anim){this._img=$("<img>").css({position:"absolute",top:"0px",left:"0px"});this._loaded=false;this._swapDimensions=false;this._do_anim=do_anim||false;this.x(0,true);this.y(0,true);this.angle(0);};(function(){this._reset=function(w,h){this._angle=0;this._swapDimensions=false;this.x(0);this.y(0);this.orig_width(w);this.orig_height(h);this.display_width(w);this.display_height(h);};this.loaded=function(){return this._loaded;};this.load=function(src,loaded){var self=this;loaded=loaded||jQuery.noop;this._loaded=false;var img=new Image();img.onload=function(){self._loaded=true;self._reset(this.width,this.height);self._img[0].src=src;loaded();};img.src=src;this._img.removeAttr("src").removeAttr("width").removeAttr("height").removeAttr("style").css({position:"absolute",top:"0px",left:"0px"})
this.angle(0);};this._dimension=function(prefix,name){var horiz='_'+prefix+'_'+name,vert='_'+prefix+'_'+(name==='height'?'width':'height');return setter(function(val){this[this._swapDimensions?horiz:vert]=val;},function(){return this[this._swapDimensions?horiz:vert];});};this.display_width=this._dimension('display','width'),this.display_height=this._dimension('display','height'),this.display_diff=function(){return Math.floor(this.display_width()-this.display_height())};this.orig_width=this._dimension('orig','width'),this.orig_height=this._dimension('orig','height'),this.x=setter(function(val,skipCss){this._x=val;if(!skipCss){this._img.css("left",this._x+(this._swapDimensions?this.display_diff()/ 2:0)+"px");}},function(){return this._x;});this.y=setter(function(val,skipCss){this._y=val;if(!skipCss){this._img.css("top",this._y-(this._swapDimensions?this.display_diff()/ 2:0)+"px");}},function(){return this._y;});this.angle=setter(function(deg){var prevSwap=this._swapDimensions;this._angle=deg;this._swapDimensions=deg%180!==0;if(prevSwap!==this._swapDimensions){var verticalMod=this._swapDimensions?-1:1;this.x(this.x()-verticalMod*this.display_diff()/ 2,true);this.y(this.y()+verticalMod*this.display_diff()/ 2,true);};var cssVal='rotate('+deg+'deg)',img=this._img;jQuery.each(['','-webkit-','-moz-','-o-','-ms-'],function(i,prefix){img.css(prefix+'transform',cssVal);});if(useIeTransforms){jQuery.each(['-ms-',''],function(i,prefix){img.css(prefix+'filter',ieTransforms[deg].filter);});img.css({marginLeft:ieTransforms[deg].marginLeft*this.display_diff()/ 2,marginTop:ieTransforms[deg].marginTop*this.display_diff()/ 2});}},function(){return this._angle;});this.toOriginalCoords=function(point){switch(this.angle()){case 0:return{x:point.x,y:point.y}
case 90:return{x:point.y,y:this.display_width()-point.x}
case 180:return{x:this.display_width()-point.x,y:this.display_height()-point.y}
case 270:return{x:this.display_height()-point.y,y:point.x}}};this.toRealCoords=function(point){switch(this.angle()){case 0:return{x:this.x()+point.x,y:this.y()+point.y}
case 90:return{x:this.x()+this.display_width()-point.y,y:this.y()+point.x}
case 180:return{x:this.x()+this.display_width()-point.x,y:this.y()+this.display_height()-point.y}
case 270:return{x:this.x()+point.y,y:this.y()+this.display_height()-point.x}}};this.object=setter(jQuery.noop,function(){return this._img;});this.setImageProps=function(disp_w,disp_h,x,y,skip_animation,complete){complete=complete||jQuery.noop;this.display_width(disp_w);this.display_height(disp_h);this.x(x,true);this.y(y,true);var w=this._swapDimensions?disp_h:disp_w;var h=this._swapDimensions?disp_w:disp_h;var params={width:w,height:h,top:y-(this._swapDimensions?this.display_diff()/ 2:0)+"px",left:x+(this._swapDimensions?this.display_diff()/ 2:0)+"px"};if(useIeTransforms){jQuery.extend(params,{marginLeft:ieTransforms[this.angle()].marginLeft*this.display_diff()/ 2,marginTop:ieTransforms[this.angle()].marginTop*this.display_diff()/ 2});}
var swapDims=this._swapDimensions,img=this._img;if(useIeTransforms&&swapDims){var ieh=this._img.width(),iew=this._img.height(),iedh=params.height-ieh;iedw=params.width-iew;delete params.width;delete params.height;}
if(this._do_anim&&!skip_animation){this._img.animate(params,{duration:200,complete:complete,step:function(now,fx){if(useIeTransforms&&swapDims&&(fx.prop==='top')){var percent=(now-fx.start)/(fx.end-fx.start);img.height(ieh+iedh*percent);img.width(iew+iedw*percent);img.css('top',now);}}});}else{this._img.css(params);setTimeout(complete,0);}};}).apply($.ui.iviewer.ImageObject.prototype);var util={scaleValue:function(value,toZoom)
{return value*toZoom / 100;},descaleValue:function(value,fromZoom)
{return value*100 / fromZoom;}};})(jQuery,undefined);