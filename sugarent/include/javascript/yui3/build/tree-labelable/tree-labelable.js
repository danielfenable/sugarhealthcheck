/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('tree-labelable',function(Y,NAME){function Labelable(){}
Labelable.prototype={initializer:function(){this.nodeExtensions=this.nodeExtensions.concat(Y.Tree.Node.Labelable);}};Y.Tree.Labelable=Labelable;function NodeLabelable(tree,config){this._serializable=this._serializable.concat('label');if('label'in config){this.label=config.label;}}
NodeLabelable.prototype={label:''};Y.Tree.Node.Labelable=NodeLabelable;},'3.15.0',{"requires":["tree"]});