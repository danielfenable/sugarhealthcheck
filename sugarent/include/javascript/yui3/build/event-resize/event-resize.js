/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('event-resize',function(Y,NAME){Y.Event.define('windowresize',{on:(Y.UA.gecko&&Y.UA.gecko<1.91)?function(node,sub,notifier){sub._handle=Y.Event.attach('resize',function(e){notifier.fire(e);});}:function(node,sub,notifier){var delay=Y.config.windowResizeDelay||100;sub._handle=Y.Event.attach('resize',function(e){if(sub._timer){sub._timer.cancel();}
sub._timer=Y.later(delay,Y,function(){notifier.fire(e);});});},detach:function(node,sub){if(sub._timer){sub._timer.cancel();}
sub._handle.detach();}});},'3.15.0',{"requires":["node-base","event-synthetic"]});