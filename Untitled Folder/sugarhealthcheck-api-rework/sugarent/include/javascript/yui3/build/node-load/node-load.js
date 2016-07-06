/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('node-load',function(Y,NAME){Y.Node.prototype._ioComplete=function(code,response,args){var selector=args[0],callback=args[1],tmp,content;if(response&&response.responseText){content=response.responseText;if(selector){tmp=Y.DOM.create(content);content=Y.Selector.query(selector,tmp);}
this.setContent(content);}
if(callback){callback.call(this,code,response);}};Y.Node.prototype.load=function(url,selector,callback){if(typeof selector=='function'){callback=selector;selector=null;}
var config={context:this,on:{complete:this._ioComplete},arguments:[selector,callback]};Y.io(url,config);return this;};},'3.15.0',{"requires":["node-base","io-base"]});