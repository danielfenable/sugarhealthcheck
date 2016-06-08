/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('event-outside',function(Y,NAME){var nativeEvents=['blur','change','click','dblclick','focus','keydown','keypress','keyup','mousedown','mousemove','mouseout','mouseover','mouseup','select','submit'];Y.Event.defineOutside=function(event,name){name=name||(event+'outside');var config={on:function(node,sub,notifier){sub.handle=Y.one('doc').on(event,function(e){if(this.isOutside(node,e.target)){e.currentTarget=node;notifier.fire(e);}},this);},detach:function(node,sub,notifier){sub.handle.detach();},delegate:function(node,sub,notifier,filter){sub.handle=Y.one('doc').delegate(event,function(e){if(this.isOutside(node,e.target)){notifier.fire(e);}},filter,this);},isOutside:function(node,target){return target!==node&&!target.ancestor(function(p){return p===node;});}};config.detachDelegate=config.detach;Y.Event.define(name,config);};Y.Array.each(nativeEvents,function(event){Y.Event.defineOutside(event);});},'3.15.0',{"requires":["event-synthetic"]});