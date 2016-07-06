/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('pjax-content',function(Y,NAME){function PjaxContent(){}
PjaxContent.prototype={getContent:function(responseText){var content={},contentSelector=this.get('contentSelector'),frag=Y.Node.create(responseText||''),titleSelector=this.get('titleSelector'),titleNode;if(contentSelector&&frag){content.node=frag.all(contentSelector).toFrag();}else{content.node=frag;}
if(titleSelector&&frag){titleNode=frag.one(titleSelector);if(titleNode){content.title=titleNode.get('text');}}
return content;},loadContent:function(req,res,next){var url=req.url;if(this._request){this._request.abort();}
if(this.get('addPjaxParam')){url=url.replace(/([^#]*)(#.*)?$/,function(match,path,hash){path+=(path.indexOf('?')>-1?'&':'?')+'pjax=1';return path+(hash||'');});}
this._request=Y.io(url,{'arguments':{route:{req:req,res:res,next:next},url:url},context:this,headers:{'X-PJAX':'true'},timeout:this.get('timeout'),on:{complete:this._onPjaxIOComplete,end:this._onPjaxIOEnd}});},_onPjaxIOComplete:function(id,ioResponse,details){var content=this.getContent(ioResponse.responseText),route=details.route,req=route.req,res=route.res;req.ioURL=details.url;res.content=content;res.ioResponse=ioResponse;route.next();},_onPjaxIOEnd:function(){this._request=null;}};PjaxContent.ATTRS={addPjaxParam:{value:true},contentSelector:{value:null},titleSelector:{value:'title'},timeout:{value:30000}};Y.PjaxContent=PjaxContent;},'3.15.0',{"requires":["io-base","node-base","router"]});