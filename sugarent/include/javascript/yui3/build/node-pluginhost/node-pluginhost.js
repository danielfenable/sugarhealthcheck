/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('node-pluginhost',function(Y,NAME){Y.Node.plug=function(){var args=Y.Array(arguments);args.unshift(Y.Node);Y.Plugin.Host.plug.apply(Y.Base,args);return Y.Node;};Y.Node.unplug=function(){var args=Y.Array(arguments);args.unshift(Y.Node);Y.Plugin.Host.unplug.apply(Y.Base,args);return Y.Node;};Y.mix(Y.Node,Y.Plugin.Host,false,null,1);Y.Object.each(Y.Node._instances,function(node){Y.Plugin.Host.apply(node);});Y.NodeList.prototype.plug=function(){var args=arguments;Y.NodeList.each(this,function(node){Y.Node.prototype.plug.apply(Y.one(node),args);});return this;};Y.NodeList.prototype.unplug=function(){var args=arguments;Y.NodeList.each(this,function(node){Y.Node.prototype.unplug.apply(Y.one(node),args);});return this;};},'3.15.0',{"requires":["node-base","pluginhost"]});