/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('anim-node-plugin',function(Y,NAME){var NodeFX=function(config){config=(config)?Y.merge(config):{};config.node=config.host;NodeFX.superclass.constructor.apply(this,arguments);};NodeFX.NAME="nodefx";NodeFX.NS="fx";Y.extend(NodeFX,Y.Anim);Y.namespace('Plugin');Y.Plugin.NodeFX=NodeFX;},'3.15.0',{"requires":["node-pluginhost","anim-base"]});