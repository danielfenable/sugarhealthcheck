/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('model-sync-rest',function(Y,NAME){var Lang=Y.Lang;function RESTSync(){}
RESTSync.CSRF_TOKEN=YUI.Env.CSRF_TOKEN;RESTSync.EMULATE_HTTP=false;RESTSync.HTTP_HEADERS={'Accept':'application/json','Content-Type':'application/json'};RESTSync.HTTP_METHODS={'create':'POST','read':'GET','update':'PUT','delete':'DELETE'};RESTSync.HTTP_TIMEOUT=30000;RESTSync._NON_ATTRS_CFG=['root','url'];RESTSync.prototype={root:'',url:'',initializer:function(config){config||(config={});if('root'in config){this.root=config.root||'';}
if('url'in config){this.url=config.url||'';}},getURL:function(action,options){var root=this.root,url=this.url;if(this._isYUIModelList){if(!url){return this.model.prototype.root;}
return this._substituteURL(url,Y.merge(this.getAttrs(),options));}
if(root&&(action==='create'||this.isNew())){return root;}
if(!url){return this._joinURL(this.getAsURL('id')||'');}
return this._substituteURL(url,Y.merge(this.getAttrs(),options));},parseIOResponse:function(response){return response.responseText;},serialize:function(action){return Y.JSON.stringify(this);},sync:function(action,options,callback){options||(options={});var url=this.getURL(action,options),method=RESTSync.HTTP_METHODS[action],headers=Y.merge(RESTSync.HTTP_HEADERS,options.headers),timeout=options.timeout||RESTSync.HTTP_TIMEOUT,csrfToken=options.csrfToken||RESTSync.CSRF_TOKEN,entity;if(method==='POST'||method==='PUT'){entity=this.serialize(action);}else{delete headers['Content-Type'];}
if(RESTSync.EMULATE_HTTP&&(method==='PUT'||method==='DELETE')){headers['X-HTTP-Method-Override']=method;method='POST';}
if(csrfToken&&(method==='POST'||method==='PUT'||method==='DELETE')){headers['X-CSRF-Token']=csrfToken;}
this._sendSyncIORequest({action:action,callback:callback,entity:entity,headers:headers,method:method,timeout:timeout,url:url});},_joinURL:function(url){var root=this.root;if(!(root||url)){return'';}
if(url.charAt(0)==='/'){url=url.substring(1);}
return root&&root.charAt(root.length-1)==='/'?root+url+'/':root+'/'+url;},_parse:function(response){if(typeof this.parseIOResponse==='function'){response=this.parseIOResponse(response);}
return this.parse(response);},_sendSyncIORequest:function(config){return Y.io(config.url,{'arguments':{action:config.action,callback:config.callback,url:config.url},context:this,data:config.entity,headers:config.headers,method:config.method,timeout:config.timeout,on:{start:this._onSyncIOStart,failure:this._onSyncIOFailure,success:this._onSyncIOSuccess,end:this._onSyncIOEnd}});},_substituteURL:function(url,data){if(!url){return'';}
var values={};Y.Object.each(data,function(v,k){if(Lang.isString(v)||Lang.isNumber(v)){values[k]=encodeURIComponent(v);}});return Lang.sub(url,values);},_onSyncIOEnd:function(txId,details){},_onSyncIOFailure:function(txId,res,details){var callback=details.callback;if(callback){callback({code:res.status,msg:res.statusText},res);}},_onSyncIOSuccess:function(txId,res,details){var callback=details.callback;if(callback){callback(null,res);}},_onSyncIOStart:function(txId,details){}};Y.namespace('ModelSync').REST=RESTSync;},'3.15.0',{"requires":["model","io-base","json-stringify"]});