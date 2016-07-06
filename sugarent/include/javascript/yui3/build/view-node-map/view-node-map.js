/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('view-node-map',function(Y,NAME){var buildCfg=Y.namespace('View._buildCfg'),instances={};function NodeMap(){}
buildCfg.aggregates||(buildCfg.aggregates=[]);buildCfg.aggregates.push('getByNode');NodeMap.getByNode=function(node){var view;Y.one(node).ancestor(function(ancestor){return(view=instances[Y.stamp(ancestor,true)])||false;},true);return view||null;};NodeMap._instances=instances;NodeMap.prototype={initializer:function(){instances[Y.stamp(this.get('container'))]=this;},destructor:function(){var stamp=Y.stamp(this.get('container'),true);if(stamp in instances){delete instances[stamp];}}};Y.View.NodeMap=NodeMap;},'3.15.0',{"requires":["view"]});