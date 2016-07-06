/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('node-event-simulate',function(Y,NAME){Y.Node.prototype.simulate=function(type,options){Y.Event.simulate(Y.Node.getDOMNode(this),type,options);};Y.Node.prototype.simulateGesture=function(name,options,cb){Y.Event.simulateGesture(this,name,options,cb);};},'3.15.0',{"requires":["node-base","event-simulate","gesture-simulate"]});