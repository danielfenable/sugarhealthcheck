/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('anim-curve',function(Y,NAME){Y.Anim.behaviors.curve={set:function(anim,att,from,to,elapsed,duration,fn){from=from.slice.call(from);to=to.slice.call(to);var t=fn(elapsed,0,100,duration)/ 100;to.unshift(from);anim._node.setXY(Y.Anim.getBezier(to,t));},get:function(anim){return anim._node.getXY();}};Y.Anim.getBezier=function(points,t){var n=points.length,tmp=[],i,j;for(i=0;i<n;++i){tmp[i]=[points[i][0],points[i][1]];}
for(j=1;j<n;++j){for(i=0;i<n-j;++i){tmp[i][0]=(1-t)*tmp[i][0]+t*tmp[parseInt(i+1,10)][0];tmp[i][1]=(1-t)*tmp[i][1]+t*tmp[parseInt(i+1,10)][1];}}
return[tmp[0][0],tmp[0][1]];};},'3.15.0',{"requires":["anim-xy"]});