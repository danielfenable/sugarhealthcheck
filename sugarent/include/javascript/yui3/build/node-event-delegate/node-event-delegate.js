/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('node-event-delegate',function(Y,NAME){Y.Node.prototype.delegate=function(type){var args=Y.Array(arguments,0,true),index=(Y.Lang.isObject(type)&&!Y.Lang.isArray(type))?1:2;args.splice(index,0,this._node);return Y.delegate.apply(Y,args);};},'3.15.0',{"requires":["node-base","event-delegate"]});