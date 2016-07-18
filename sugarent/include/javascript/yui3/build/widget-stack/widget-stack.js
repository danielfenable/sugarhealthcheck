/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('widget-stack',function(Y,NAME){var L=Y.Lang,UA=Y.UA,Node=Y.Node,Widget=Y.Widget,ZINDEX="zIndex",SHIM="shim",VISIBLE="visible",BOUNDING_BOX="boundingBox",RENDER_UI="renderUI",BIND_UI="bindUI",SYNC_UI="syncUI",OFFSET_WIDTH="offsetWidth",OFFSET_HEIGHT="offsetHeight",PARENT_NODE="parentNode",FIRST_CHILD="firstChild",OWNER_DOCUMENT="ownerDocument",WIDTH="width",HEIGHT="height",PX="px",SHIM_DEFERRED="shimdeferred",SHIM_RESIZE="shimresize",VisibleChange="visibleChange",WidthChange="widthChange",HeightChange="heightChange",ShimChange="shimChange",ZIndexChange="zIndexChange",ContentUpdate="contentUpdate",STACKED="stacked";function Stack(config){}
Stack.ATTRS={shim:{value:(UA.ie==6)},zIndex:{value:0,setter:'_setZIndex'}};Stack.HTML_PARSER={zIndex:function(srcNode){return this._parseZIndex(srcNode);}};Stack.SHIM_CLASS_NAME=Widget.getClassName(SHIM);Stack.STACKED_CLASS_NAME=Widget.getClassName(STACKED);Stack.SHIM_TEMPLATE='<iframe class="'+Stack.SHIM_CLASS_NAME+'" frameborder="0" title="Widget Stacking Shim" src="javascript:false" tabindex="-1" role="presentation"></iframe>';Stack.prototype={initializer:function(){this._stackNode=this.get(BOUNDING_BOX);this._stackHandles={};Y.after(this._renderUIStack,this,RENDER_UI);Y.after(this._syncUIStack,this,SYNC_UI);Y.after(this._bindUIStack,this,BIND_UI);},_syncUIStack:function(){this._uiSetShim(this.get(SHIM));this._uiSetZIndex(this.get(ZINDEX));},_bindUIStack:function(){this.after(ShimChange,this._afterShimChange);this.after(ZIndexChange,this._afterZIndexChange);},_renderUIStack:function(){this._stackNode.addClass(Stack.STACKED_CLASS_NAME);},_parseZIndex:function(srcNode){var zIndex;if(!srcNode.inDoc()||srcNode.getStyle('position')==='static'){zIndex='auto';}else{zIndex=srcNode.getComputedStyle('zIndex');}
return zIndex==='auto'?null:zIndex;},_setZIndex:function(zIndex){if(L.isString(zIndex)){zIndex=parseInt(zIndex,10);}
if(!L.isNumber(zIndex)){zIndex=0;}
return zIndex;},_afterShimChange:function(e){this._uiSetShim(e.newVal);},_afterZIndexChange:function(e){this._uiSetZIndex(e.newVal);},_uiSetZIndex:function(zIndex){this._stackNode.setStyle(ZINDEX,zIndex);},_uiSetShim:function(enable){if(enable){if(this.get(VISIBLE)){this._renderShim();}else{this._renderShimDeferred();}
if(UA.ie==6){this._addShimResizeHandlers();}}else{this._destroyShim();}},_renderShimDeferred:function(){this._stackHandles[SHIM_DEFERRED]=this._stackHandles[SHIM_DEFERRED]||[];var handles=this._stackHandles[SHIM_DEFERRED],createBeforeVisible=function(e){if(e.newVal){this._renderShim();}};handles.push(this.on(VisibleChange,createBeforeVisible));},_addShimResizeHandlers:function(){this._stackHandles[SHIM_RESIZE]=this._stackHandles[SHIM_RESIZE]||[];var sizeShim=this.sizeShim,handles=this._stackHandles[SHIM_RESIZE];handles.push(this.after(VisibleChange,sizeShim));handles.push(this.after(WidthChange,sizeShim));handles.push(this.after(HeightChange,sizeShim));handles.push(this.after(ContentUpdate,sizeShim));},_detachStackHandles:function(handleKey){var handles=this._stackHandles[handleKey],handle;if(handles&&handles.length>0){while((handle=handles.pop())){handle.detach();}}},_renderShim:function(){var shimEl=this._shimNode,stackEl=this._stackNode;if(!shimEl){shimEl=this._shimNode=this._getShimTemplate();stackEl.insertBefore(shimEl,stackEl.get(FIRST_CHILD));this._detachStackHandles(SHIM_DEFERRED);this.sizeShim();}},_destroyShim:function(){if(this._shimNode){this._shimNode.get(PARENT_NODE).removeChild(this._shimNode);this._shimNode=null;this._detachStackHandles(SHIM_DEFERRED);this._detachStackHandles(SHIM_RESIZE);}},sizeShim:function(){var shim=this._shimNode,node=this._stackNode;if(shim&&UA.ie===6&&this.get(VISIBLE)){shim.setStyle(WIDTH,node.get(OFFSET_WIDTH)+PX);shim.setStyle(HEIGHT,node.get(OFFSET_HEIGHT)+PX);}},_getShimTemplate:function(){return Node.create(Stack.SHIM_TEMPLATE,this._stackNode.get(OWNER_DOCUMENT));}};Y.WidgetStack=Stack;},'3.15.0',{"requires":["base-build","widget"],"skinnable":true});