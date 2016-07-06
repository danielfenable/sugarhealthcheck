/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('dom-screen',function(Y,NAME){(function(Y){var DOCUMENT_ELEMENT='documentElement',COMPAT_MODE='compatMode',POSITION='position',FIXED='fixed',RELATIVE='relative',LEFT='left',TOP='top',_BACK_COMPAT='BackCompat',MEDIUM='medium',BORDER_LEFT_WIDTH='borderLeftWidth',BORDER_TOP_WIDTH='borderTopWidth',GET_BOUNDING_CLIENT_RECT='getBoundingClientRect',GET_COMPUTED_STYLE='getComputedStyle',Y_DOM=Y.DOM,RE_TABLE=/^t(?:able|d|h)$/i,SCROLL_NODE;if(Y.UA.ie){if(Y.config.doc[COMPAT_MODE]!=='BackCompat'){SCROLL_NODE=DOCUMENT_ELEMENT;}else{SCROLL_NODE='body';}}
Y.mix(Y_DOM,{winHeight:function(node){var h=Y_DOM._getWinSize(node).height;return h;},winWidth:function(node){var w=Y_DOM._getWinSize(node).width;return w;},docHeight:function(node){var h=Y_DOM._getDocSize(node).height;return Math.max(h,Y_DOM._getWinSize(node).height);},docWidth:function(node){var w=Y_DOM._getDocSize(node).width;return Math.max(w,Y_DOM._getWinSize(node).width);},docScrollX:function(node,doc){doc=doc||(node)?Y_DOM._getDoc(node):Y.config.doc;var dv=doc.defaultView,pageOffset=(dv)?dv.pageXOffset:0;return Math.max(doc[DOCUMENT_ELEMENT].scrollLeft,doc.body.scrollLeft,pageOffset);},docScrollY:function(node,doc){doc=doc||(node)?Y_DOM._getDoc(node):Y.config.doc;var dv=doc.defaultView,pageOffset=(dv)?dv.pageYOffset:0;return Math.max(doc[DOCUMENT_ELEMENT].scrollTop,doc.body.scrollTop,pageOffset);},getXY:function(){if(Y.config.doc[DOCUMENT_ELEMENT][GET_BOUNDING_CLIENT_RECT]){return function(node){var xy=null,scrollLeft,scrollTop,mode,box,offX,offY,doc,win,inDoc,rootNode;if(node&&node.tagName){doc=node.ownerDocument;mode=doc[COMPAT_MODE];if(mode!==_BACK_COMPAT){rootNode=doc[DOCUMENT_ELEMENT];}else{rootNode=doc.body;}
if(rootNode.contains){inDoc=rootNode.contains(node);}else{inDoc=Y.DOM.contains(rootNode,node);}
if(inDoc){win=doc.defaultView;if(win&&'pageXOffset'in win){scrollLeft=win.pageXOffset;scrollTop=win.pageYOffset;}else{scrollLeft=(SCROLL_NODE)?doc[SCROLL_NODE].scrollLeft:Y_DOM.docScrollX(node,doc);scrollTop=(SCROLL_NODE)?doc[SCROLL_NODE].scrollTop:Y_DOM.docScrollY(node,doc);}
if(Y.UA.ie){if(!doc.documentMode||doc.documentMode<8||mode===_BACK_COMPAT){offX=rootNode.clientLeft;offY=rootNode.clientTop;}}
box=node[GET_BOUNDING_CLIENT_RECT]();xy=[box.left,box.top];if(offX||offY){xy[0]-=offX;xy[1]-=offY;}
if((scrollTop||scrollLeft)){if(!Y.UA.ios||(Y.UA.ios>=4.2)){xy[0]+=scrollLeft;xy[1]+=scrollTop;}}}else{xy=Y_DOM._getOffset(node);}}
return xy;};}else{return function(node){var xy=null,doc,parentNode,bCheck,scrollTop,scrollLeft;if(node){if(Y_DOM.inDoc(node)){xy=[node.offsetLeft,node.offsetTop];doc=node.ownerDocument;parentNode=node;bCheck=((Y.UA.gecko||Y.UA.webkit>519)?true:false);while((parentNode=parentNode.offsetParent)){xy[0]+=parentNode.offsetLeft;xy[1]+=parentNode.offsetTop;if(bCheck){xy=Y_DOM._calcBorders(parentNode,xy);}}
if(Y_DOM.getStyle(node,POSITION)!=FIXED){parentNode=node;while((parentNode=parentNode.parentNode)){scrollTop=parentNode.scrollTop;scrollLeft=parentNode.scrollLeft;if(Y.UA.gecko&&(Y_DOM.getStyle(parentNode,'overflow')!=='visible')){xy=Y_DOM._calcBorders(parentNode,xy);}
if(scrollTop||scrollLeft){xy[0]-=scrollLeft;xy[1]-=scrollTop;}}
xy[0]+=Y_DOM.docScrollX(node,doc);xy[1]+=Y_DOM.docScrollY(node,doc);}else{xy[0]+=Y_DOM.docScrollX(node,doc);xy[1]+=Y_DOM.docScrollY(node,doc);}}else{xy=Y_DOM._getOffset(node);}}
return xy;};}}(),getScrollbarWidth:Y.cached(function(){var doc=Y.config.doc,testNode=doc.createElement('div'),body=doc.getElementsByTagName('body')[0],width=0.1;if(body){testNode.style.cssText="position:absolute;visibility:hidden;overflow:scroll;width:20px;";testNode.appendChild(doc.createElement('p')).style.height='1px';body.insertBefore(testNode,body.firstChild);width=testNode.offsetWidth-testNode.clientWidth;body.removeChild(testNode);}
return width;},null,0.1),getX:function(node){return Y_DOM.getXY(node)[0];},getY:function(node){return Y_DOM.getXY(node)[1];},setXY:function(node,xy,noRetry){var setStyle=Y_DOM.setStyle,pos,delta,newXY,currentXY;if(node&&xy){pos=Y_DOM.getStyle(node,POSITION);delta=Y_DOM._getOffset(node);if(pos=='static'){pos=RELATIVE;setStyle(node,POSITION,pos);}
currentXY=Y_DOM.getXY(node);if(xy[0]!==null){setStyle(node,LEFT,xy[0]-currentXY[0]+delta[0]+'px');}
if(xy[1]!==null){setStyle(node,TOP,xy[1]-currentXY[1]+delta[1]+'px');}
if(!noRetry){newXY=Y_DOM.getXY(node);if(newXY[0]!==xy[0]||newXY[1]!==xy[1]){Y_DOM.setXY(node,xy,true);}}}else{}},setX:function(node,x){return Y_DOM.setXY(node,[x,null]);},setY:function(node,y){return Y_DOM.setXY(node,[null,y]);},swapXY:function(node,otherNode){var xy=Y_DOM.getXY(node);Y_DOM.setXY(node,Y_DOM.getXY(otherNode));Y_DOM.setXY(otherNode,xy);},_calcBorders:function(node,xy2){var t=parseInt(Y_DOM[GET_COMPUTED_STYLE](node,BORDER_TOP_WIDTH),10)||0,l=parseInt(Y_DOM[GET_COMPUTED_STYLE](node,BORDER_LEFT_WIDTH),10)||0;if(Y.UA.gecko){if(RE_TABLE.test(node.tagName)){t=0;l=0;}}
xy2[0]+=l;xy2[1]+=t;return xy2;},_getWinSize:function(node,doc){doc=doc||(node)?Y_DOM._getDoc(node):Y.config.doc;var win=doc.defaultView||doc.parentWindow,mode=doc[COMPAT_MODE],h=win.innerHeight,w=win.innerWidth,root=doc[DOCUMENT_ELEMENT];if(mode&&!Y.UA.opera){if(mode!='CSS1Compat'){root=doc.body;}
h=root.clientHeight;w=root.clientWidth;}
return{height:h,width:w};},_getDocSize:function(node){var doc=(node)?Y_DOM._getDoc(node):Y.config.doc,root=doc[DOCUMENT_ELEMENT];if(doc[COMPAT_MODE]!='CSS1Compat'){root=doc.body;}
return{height:root.scrollHeight,width:root.scrollWidth};}});})(Y);(function(Y){var TOP='top',RIGHT='right',BOTTOM='bottom',LEFT='left',getOffsets=function(r1,r2){var t=Math.max(r1[TOP],r2[TOP]),r=Math.min(r1[RIGHT],r2[RIGHT]),b=Math.min(r1[BOTTOM],r2[BOTTOM]),l=Math.max(r1[LEFT],r2[LEFT]),ret={};ret[TOP]=t;ret[RIGHT]=r;ret[BOTTOM]=b;ret[LEFT]=l;return ret;},DOM=Y.DOM;Y.mix(DOM,{region:function(node){var xy=DOM.getXY(node),ret=false;if(node&&xy){ret=DOM._getRegion(xy[1],xy[0]+node.offsetWidth,xy[1]+node.offsetHeight,xy[0]);}
return ret;},intersect:function(node,node2,altRegion){var r=altRegion||DOM.region(node),region={},n=node2,off;if(n.tagName){region=DOM.region(n);}else if(Y.Lang.isObject(node2)){region=node2;}else{return false;}
off=getOffsets(region,r);return{top:off[TOP],right:off[RIGHT],bottom:off[BOTTOM],left:off[LEFT],area:((off[BOTTOM]-off[TOP])*(off[RIGHT]-off[LEFT])),yoff:((off[BOTTOM]-off[TOP])),xoff:(off[RIGHT]-off[LEFT]),inRegion:DOM.inRegion(node,node2,false,altRegion)};},inRegion:function(node,node2,all,altRegion){var region={},r=altRegion||DOM.region(node),n=node2,off;if(n.tagName){region=DOM.region(n);}else if(Y.Lang.isObject(node2)){region=node2;}else{return false;}
if(all){return(r[LEFT]>=region[LEFT]&&r[RIGHT]<=region[RIGHT]&&r[TOP]>=region[TOP]&&r[BOTTOM]<=region[BOTTOM]);}else{off=getOffsets(region,r);if(off[BOTTOM]>=off[TOP]&&off[RIGHT]>=off[LEFT]){return true;}else{return false;}}},inViewportRegion:function(node,all,altRegion){return DOM.inRegion(node,DOM.viewportRegion(node),all,altRegion);},_getRegion:function(t,r,b,l){var region={};region[TOP]=region[1]=t;region[LEFT]=region[0]=l;region[BOTTOM]=b;region[RIGHT]=r;region.width=region[RIGHT]-region[LEFT];region.height=region[BOTTOM]-region[TOP];return region;},viewportRegion:function(node){node=node||Y.config.doc.documentElement;var ret=false,scrollX,scrollY;if(node){scrollX=DOM.docScrollX(node);scrollY=DOM.docScrollY(node);ret=DOM._getRegion(scrollY,DOM.winWidth(node)+scrollX,scrollY+DOM.winHeight(node),scrollX);}
return ret;}});})(Y);},'3.15.0',{"requires":["dom-base","dom-style"]});