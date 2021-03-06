/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('shim-plugin',function(Y,NAME){function Shim(config){this.init(config);}
Shim.CLASS_NAME='yui-node-shim';Shim.TEMPLATE='<iframe class="'+Shim.CLASS_NAME+'" frameborder="0" title="Node Stacking Shim"'+'src="javascript:false" tabindex="-1" role="presentation"'+'style="position:absolute; z-index:-1;"></iframe>';Shim.prototype={init:function(config){this._host=config.host;this.initEvents();this.insert();this.sync();},initEvents:function(){this._resizeHandle=this._host.on('resize',this.sync,this);},getShim:function(){return this._shim||(this._shim=Y.Node.create(Shim.TEMPLATE,this._host.get('ownerDocument')));},insert:function(){var node=this._host;this._shim=node.insertBefore(this.getShim(),node.get('firstChild'));},sync:function(){var shim=this._shim,node=this._host;if(shim){shim.setAttrs({width:node.getStyle('width'),height:node.getStyle('height')});}},destroy:function(){var shim=this._shim;if(shim){shim.remove(true);}
this._resizeHandle.detach();}};Shim.NAME='Shim';Shim.NS='shim';Y.namespace('Plugin');Y.Plugin.Shim=Shim;},'3.15.0',{"requires":["node-style","node-pluginhost"]});