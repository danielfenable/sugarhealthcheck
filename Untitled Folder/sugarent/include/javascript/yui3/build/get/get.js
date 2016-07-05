/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('get',function(Y,NAME){var Lang=Y.Lang,CUSTOM_ATTRS,Get,Transaction;Y.Get=Get={cssOptions:{attributes:{rel:'stylesheet'},doc:Y.config.linkDoc||Y.config.doc,pollInterval:50},jsOptions:{autopurge:true,doc:Y.config.scriptDoc||Y.config.doc},options:{attributes:{charset:'utf-8'},purgethreshold:20},REGEX_CSS:/\.css(?:[?;].*)?$/i,REGEX_JS:/\.js(?:[?;].*)?$/i,_insertCache:{},_pending:null,_purgeNodes:[],_queue:[],abort:function(transaction){var i,id,item,len,pending;if(!transaction.abort){id=transaction;pending=this._pending;transaction=null;if(pending&&pending.transaction.id===id){transaction=pending.transaction;this._pending=null;}else{for(i=0,len=this._queue.length;i<len;++i){item=this._queue[i].transaction;if(item.id===id){transaction=item;this._queue.splice(i,1);break;}}}}
transaction&&transaction.abort();},css:function(urls,options,callback){return this._load('css',urls,options,callback);},js:function(urls,options,callback){return this._load('js',urls,options,callback);},load:function(urls,options,callback){return this._load(null,urls,options,callback);},_autoPurge:function(threshold){if(threshold&&this._purgeNodes.length>=threshold){this._purge(this._purgeNodes);}},_getEnv:function(){var doc=Y.config.doc,ua=Y.UA;return(this._env={async:(doc&&doc.createElement('script').async===true)||(ua.ie>=10),cssFail:ua.gecko>=9||ua.compareVersions(ua.webkit,535.24)>=0,cssLoad:((!ua.gecko&&!ua.webkit)||ua.gecko>=9||ua.compareVersions(ua.webkit,535.24)>=0)&&!(ua.chrome&&ua.chrome<=18),preservesScriptOrder:!!(ua.gecko||ua.opera||(ua.ie&&ua.ie>=10))});},_getTransaction:function(urls,options){var requests=[],i,len,req,url;if(!Lang.isArray(urls)){urls=[urls];}
options=Y.merge(this.options,options);options.attributes=Y.merge(this.options.attributes,options.attributes);for(i=0,len=urls.length;i<len;++i){url=urls[i];req={attributes:{}};if(typeof url==='string'){req.url=url;}else if(url.url){Y.mix(req,url,false,null,0,true);url=url.url;}else{continue;}
Y.mix(req,options,false,null,0,true);if(!req.type){if(this.REGEX_CSS.test(url)){req.type='css';}else{if(!this.REGEX_JS.test(url)){}
req.type='js';}}
Y.mix(req,req.type==='js'?this.jsOptions:this.cssOptions,false,null,0,true);req.attributes.id||(req.attributes.id=Y.guid());if(req.win){req.doc=req.win.document;}else{req.win=req.doc.defaultView||req.doc.parentWindow;}
if(req.charset){req.attributes.charset=req.charset;}
requests.push(req);}
return new Transaction(requests,options);},_load:function(type,urls,options,callback){var transaction;if(typeof options==='function'){callback=options;options={};}
options||(options={});options.type=type;options._onFinish=Get._onTransactionFinish;if(!this._env){this._getEnv();}
transaction=this._getTransaction(urls,options);this._queue.push({callback:callback,transaction:transaction});this._next();return transaction;},_onTransactionFinish:function(){Get._pending=null;Get._next();},_next:function(){var item;if(this._pending){return;}
item=this._queue.shift();if(item){this._pending=item;item.transaction.execute(item.callback);}},_purge:function(nodes){var purgeNodes=this._purgeNodes,isTransaction=nodes!==purgeNodes,index,node;while(node=nodes.pop()){if(!node._yuiget_finished){continue;}
node.parentNode&&node.parentNode.removeChild(node);if(isTransaction){index=Y.Array.indexOf(purgeNodes,node);if(index>-1){purgeNodes.splice(index,1);}}}}};Get.script=Get.js;Get.Transaction=Transaction=function(requests,options){var self=this;self.id=Transaction._lastId+=1;self.data=options.data;self.errors=[];self.nodes=[];self.options=options;self.requests=requests;self._callbacks=[];self._queue=[];self._reqsWaiting=0;self.tId=self.id;self.win=options.win||Y.config.win;};Transaction._lastId=0;Transaction.prototype={_state:'new',abort:function(msg){this._pending=null;this._pendingCSS=null;this._pollTimer=clearTimeout(this._pollTimer);this._queue=[];this._reqsWaiting=0;this.errors.push({error:msg||'Aborted'});this._finish();},execute:function(callback){var self=this,requests=self.requests,state=self._state,i,len,queue,req;if(state==='done'){callback&&callback(self.errors.length?self.errors:null,self);return;}else{callback&&self._callbacks.push(callback);if(state==='executing'){return;}}
self._state='executing';self._queue=queue=[];if(self.options.timeout){self._timeout=setTimeout(function(){self.abort('Timeout');},self.options.timeout);}
self._reqsWaiting=requests.length;for(i=0,len=requests.length;i<len;++i){req=requests[i];if(req.async||req.type==='css'){self._insert(req);}else{queue.push(req);}}
self._next();},purge:function(){Get._purge(this.nodes);},_createNode:function(name,attrs,doc){var node=doc.createElement(name),attr,testEl;if(!CUSTOM_ATTRS){testEl=doc.createElement('div');testEl.setAttribute('class','a');CUSTOM_ATTRS=testEl.className==='a'?{}:{'for':'htmlFor','class':'className'};}
for(attr in attrs){if(attrs.hasOwnProperty(attr)){node.setAttribute(CUSTOM_ATTRS[attr]||attr,attrs[attr]);}}
return node;},_finish:function(){var errors=this.errors.length?this.errors:null,options=this.options,thisObj=options.context||this,data,i,len;if(this._state==='done'){return;}
this._state='done';for(i=0,len=this._callbacks.length;i<len;++i){this._callbacks[i].call(thisObj,errors,this);}
data=this._getEventData();if(errors){if(options.onTimeout&&errors[errors.length-1].error==='Timeout'){options.onTimeout.call(thisObj,data);}
if(options.onFailure){options.onFailure.call(thisObj,data);}}else if(options.onSuccess){options.onSuccess.call(thisObj,data);}
if(options.onEnd){options.onEnd.call(thisObj,data);}
if(options._onFinish){options._onFinish();}},_getEventData:function(req){if(req){return Y.merge(this,{abort:this.abort,purge:this.purge,request:req,url:req.url,win:req.win});}else{return this;}},_getInsertBefore:function(req){var doc=req.doc,el=req.insertBefore,cache,docStamp;if(el){return typeof el==='string'?doc.getElementById(el):el;}
cache=Get._insertCache;docStamp=Y.stamp(doc);if((el=cache[docStamp])){return el;}
if((el=doc.getElementsByTagName('base')[0])){return(cache[docStamp]=el);}
el=doc.head||doc.getElementsByTagName('head')[0];if(el){el.appendChild(doc.createTextNode(''));return(cache[docStamp]=el.lastChild);}
return(cache[docStamp]=doc.getElementsByTagName('script')[0]);},_insert:function(req){var env=Get._env,insertBefore=this._getInsertBefore(req),isScript=req.type==='js',node=req.node,self=this,ua=Y.UA,cssTimeout,nodeType;if(!node){if(isScript){nodeType='script';}else if(!env.cssLoad&&ua.gecko){nodeType='style';}else{nodeType='link';}
node=req.node=this._createNode(nodeType,req.attributes,req.doc);}
function onError(){self._progress('Failed to load '+req.url,req);}
function onLoad(){if(cssTimeout){clearTimeout(cssTimeout);}
self._progress(null,req);}
if(isScript){node.setAttribute('src',req.url);if(req.async){node.async=true;}else{if(env.async){node.async=false;}
if(!env.preservesScriptOrder){this._pending=req;}}}else{if(!env.cssLoad&&ua.gecko){node.innerHTML=(req.attributes.charset?'@charset "'+req.attributes.charset+'";':'')+'@import "'+req.url+'";';}else{node.setAttribute('href',req.url);}}
if(isScript&&ua.ie&&(ua.ie<9||(document.documentMode&&document.documentMode<9))){node.onreadystatechange=function(){if(/loaded|complete/.test(node.readyState)){node.onreadystatechange=null;onLoad();}};}else if(!isScript&&!env.cssLoad){this._poll(req);}else{if(ua.ie>=10){node.onerror=function(){setTimeout(onError,0);};node.onload=function(){setTimeout(onLoad,0);};}else{node.onerror=onError;node.onload=onLoad;}
if(!env.cssFail&&!isScript){cssTimeout=setTimeout(onError,req.timeout||3000);}}
this.nodes.push(node);insertBefore.parentNode.insertBefore(node,insertBefore);},_next:function(){if(this._pending){return;}
if(this._queue.length){this._insert(this._queue.shift());}else if(!this._reqsWaiting){this._finish();}},_poll:function(newReq){var self=this,pendingCSS=self._pendingCSS,isWebKit=Y.UA.webkit,i,hasRules,j,nodeHref,req,sheets;if(newReq){pendingCSS||(pendingCSS=self._pendingCSS=[]);pendingCSS.push(newReq);if(self._pollTimer){return;}}
self._pollTimer=null;for(i=0;i<pendingCSS.length;++i){req=pendingCSS[i];if(isWebKit){sheets=req.doc.styleSheets;j=sheets.length;nodeHref=req.node.href;while(--j>=0){if(sheets[j].href===nodeHref){pendingCSS.splice(i,1);i-=1;self._progress(null,req);break;}}}else{try{hasRules=!!req.node.sheet.cssRules;pendingCSS.splice(i,1);i-=1;self._progress(null,req);}catch(ex){}}}
if(pendingCSS.length){self._pollTimer=setTimeout(function(){self._poll.call(self);},self.options.pollInterval);}},_progress:function(err,req){var options=this.options;if(err){req.error=err;this.errors.push({error:err,request:req});}
req.node._yuiget_finished=req.finished=true;if(options.onProgress){options.onProgress.call(options.context||this,this._getEventData(req));}
if(req.autopurge){Get._autoPurge(this.options.purgethreshold);Get._purgeNodes.push(req.node);}
if(this._pending===req){this._pending=null;}
this._reqsWaiting-=1;this._next();}};},'@VERSION@',{"requires":["yui-base"]});