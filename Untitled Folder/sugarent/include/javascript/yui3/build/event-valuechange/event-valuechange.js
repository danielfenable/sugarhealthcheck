/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('event-valuechange',function(Y,NAME){var DATA_KEY='_valuechange',VALUE='value',NODE_NAME='nodeName',config,VC={POLL_INTERVAL:50,TIMEOUT:10000,_poll:function(node,options){var domNode=node._node,event=options.e,vcData=node._data&&node._data[DATA_KEY],stopped=0,facade,prevVal,newVal,nodeName,selectedOption,stopElement;if(!(domNode&&vcData)){VC._stopPolling(node);return;}
prevVal=vcData.prevVal;nodeName=vcData.nodeName;if(vcData.isEditable){newVal=domNode.innerHTML;}else if(nodeName==='input'||nodeName==='textarea'){newVal=domNode.value;}else if(nodeName==='select'){selectedOption=domNode.options[domNode.selectedIndex];newVal=selectedOption.value||selectedOption.text;}
if(newVal!==prevVal){vcData.prevVal=newVal;facade={_event:event,currentTarget:(event&&event.currentTarget)||node,newVal:newVal,prevVal:prevVal,target:(event&&event.target)||node};Y.Object.some(vcData.notifiers,function(notifier){var evt=notifier.handle.evt,newStopped;if(stopped!==1){notifier.fire(facade);}else if(evt.el===stopElement){notifier.fire(facade);}
newStopped=evt&&evt._facade?evt._facade.stopped:0;if(newStopped>stopped){stopped=newStopped;if(stopped===1){stopElement=evt.el;}}
if(stopped===2){return true;}});VC._refreshTimeout(node);}},_refreshTimeout:function(node,notifier){if(!node._node){return;}
var vcData=node.getData(DATA_KEY);VC._stopTimeout(node);vcData.timeout=setTimeout(function(){VC._stopPolling(node,notifier);},VC.TIMEOUT);},_startPolling:function(node,notifier,options){var vcData,isEditable;if(!node.test('input,textarea,select')&&!(isEditable=VC._isEditable(node))){return;}
vcData=node.getData(DATA_KEY);if(!vcData){vcData={nodeName:node.get(NODE_NAME).toLowerCase(),isEditable:isEditable,prevVal:isEditable?node.getDOMNode().innerHTML:node.get(VALUE)};node.setData(DATA_KEY,vcData);}
vcData.notifiers||(vcData.notifiers={});if(vcData.interval){if(options.force){VC._stopPolling(node,notifier);}else{vcData.notifiers[Y.stamp(notifier)]=notifier;return;}}
vcData.notifiers[Y.stamp(notifier)]=notifier;vcData.interval=setInterval(function(){VC._poll(node,options);},VC.POLL_INTERVAL);VC._refreshTimeout(node,notifier);},_stopPolling:function(node,notifier){if(!node._node){return;}
var vcData=node.getData(DATA_KEY)||{};clearInterval(vcData.interval);delete vcData.interval;VC._stopTimeout(node);if(notifier){vcData.notifiers&&delete vcData.notifiers[Y.stamp(notifier)];}else{vcData.notifiers={};}},_stopTimeout:function(node){var vcData=node.getData(DATA_KEY)||{};clearTimeout(vcData.timeout);delete vcData.timeout;},_isEditable:function(node){var domNode=node._node;return domNode.contentEditable==='true'||domNode.contentEditable==='';},_onBlur:function(e,notifier){VC._stopPolling(e.currentTarget,notifier);},_onFocus:function(e,notifier){var node=e.currentTarget,vcData=node.getData(DATA_KEY);if(!vcData){vcData={isEditable:VC._isEditable(node),nodeName:node.get(NODE_NAME).toLowerCase()};node.setData(DATA_KEY,vcData);}
vcData.prevVal=vcData.isEditable?node.getDOMNode().innerHTML:node.get(VALUE);VC._startPolling(node,notifier,{e:e});},_onKeyDown:function(e,notifier){VC._startPolling(e.currentTarget,notifier,{e:e});},_onKeyUp:function(e,notifier){if(e.charCode===229||e.charCode===197){VC._startPolling(e.currentTarget,notifier,{e:e,force:true});}},_onMouseDown:function(e,notifier){VC._startPolling(e.currentTarget,notifier,{e:e});},_onSubscribe:function(node,sub,notifier,filter){var _valuechange,callbacks,isEditable,inputNodes,editableNodes;callbacks={blur:VC._onBlur,focus:VC._onFocus,keydown:VC._onKeyDown,keyup:VC._onKeyUp,mousedown:VC._onMouseDown};_valuechange=notifier._valuechange={};if(filter){_valuechange.delegated=true;_valuechange.getNodes=function(){inputNodes=node.all('input,textarea,select').filter(filter);editableNodes=node.all('[contenteditable="true"],[contenteditable=""]').filter(filter);return inputNodes.concat(editableNodes);};_valuechange.getNodes().each(function(child){if(!child.getData(DATA_KEY)){child.setData(DATA_KEY,{nodeName:child.get(NODE_NAME).toLowerCase(),isEditable:VC._isEditable(child),prevVal:isEditable?child.getDOMNode().innerHTML:child.get(VALUE)});}});notifier._handles=Y.delegate(callbacks,node,filter,null,notifier);}else{isEditable=VC._isEditable(node);if(!node.test('input,textarea,select')&&!isEditable){return;}
if(!node.getData(DATA_KEY)){node.setData(DATA_KEY,{nodeName:node.get(NODE_NAME).toLowerCase(),isEditable:isEditable,prevVal:isEditable?node.getDOMNode().innerHTML:node.get(VALUE)});}
notifier._handles=node.on(callbacks,null,null,notifier);}},_onUnsubscribe:function(node,subscription,notifier){var _valuechange=notifier._valuechange;notifier._handles&&notifier._handles.detach();if(_valuechange.delegated){_valuechange.getNodes().each(function(child){VC._stopPolling(child,notifier);});}else{VC._stopPolling(node,notifier);}}};config={detach:VC._onUnsubscribe,on:VC._onSubscribe,delegate:VC._onSubscribe,detachDelegate:VC._onUnsubscribe,publishConfig:{emitFacade:true}};Y.Event.define('valuechange',config);Y.Event.define('valueChange',config);Y.ValueChange=VC;},'3.15.0',{"requires":["event-focus","event-synthetic"]});