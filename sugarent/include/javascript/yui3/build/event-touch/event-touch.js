/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('event-touch',function(Y,NAME){var SCALE="scale",ROTATION="rotation",IDENTIFIER="identifier",win=Y.config.win,GESTURE_MAP={};Y.DOMEventFacade.prototype._touch=function(e,currentTarget,wrapper){var i,l,etCached,et,touchCache;if(e.touches){this.touches=[];touchCache={};for(i=0,l=e.touches.length;i<l;++i){et=e.touches[i];touchCache[Y.stamp(et)]=this.touches[i]=new Y.DOMEventFacade(et,currentTarget,wrapper);}}
if(e.targetTouches){this.targetTouches=[];for(i=0,l=e.targetTouches.length;i<l;++i){et=e.targetTouches[i];etCached=touchCache&&touchCache[Y.stamp(et,true)];this.targetTouches[i]=etCached||new Y.DOMEventFacade(et,currentTarget,wrapper);}}
if(e.changedTouches){this.changedTouches=[];for(i=0,l=e.changedTouches.length;i<l;++i){et=e.changedTouches[i];etCached=touchCache&&touchCache[Y.stamp(et,true)];this.changedTouches[i]=etCached||new Y.DOMEventFacade(et,currentTarget,wrapper);}}
if(SCALE in e){this[SCALE]=e[SCALE];}
if(ROTATION in e){this[ROTATION]=e[ROTATION];}
if(IDENTIFIER in e){this[IDENTIFIER]=e[IDENTIFIER];}};if(Y.Node.DOM_EVENTS){Y.mix(Y.Node.DOM_EVENTS,{touchstart:1,touchmove:1,touchend:1,touchcancel:1,gesturestart:1,gesturechange:1,gestureend:1,MSPointerDown:1,MSPointerUp:1,MSPointerMove:1,MSPointerCancel:1,pointerdown:1,pointerup:1,pointermove:1,pointercancel:1});}
if((win&&("ontouchstart"in win))&&!(Y.UA.chrome&&Y.UA.chrome<6)){GESTURE_MAP.start=["touchstart","mousedown"];GESTURE_MAP.end=["touchend","mouseup"];GESTURE_MAP.move=["touchmove","mousemove"];GESTURE_MAP.cancel=["touchcancel","mousecancel"];}
else if(win&&win.PointerEvent){GESTURE_MAP.start="pointerdown";GESTURE_MAP.end="pointerup";GESTURE_MAP.move="pointermove";GESTURE_MAP.cancel="pointercancel";}
else if(win&&("msPointerEnabled"in win.navigator)){GESTURE_MAP.start="MSPointerDown";GESTURE_MAP.end="MSPointerUp";GESTURE_MAP.move="MSPointerMove";GESTURE_MAP.cancel="MSPointerCancel";}
else{GESTURE_MAP.start="mousedown";GESTURE_MAP.end="mouseup";GESTURE_MAP.move="mousemove";GESTURE_MAP.cancel="mousecancel";}
Y.Event._GESTURE_MAP=GESTURE_MAP;},'3.15.0',{"requires":["node-base"]});