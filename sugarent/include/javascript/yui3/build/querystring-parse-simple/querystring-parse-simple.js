/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('querystring-parse-simple',function(Y,NAME){var QueryString=Y.namespace("QueryString");QueryString.parse=function(qs,sep,eq){sep=sep||"&";eq=eq||"=";for(var obj={},i=0,pieces=qs.split(sep),l=pieces.length,tuple;i<l;i++){tuple=pieces[i].split(eq);if(tuple.length>0){obj[QueryString.unescape(tuple.shift())]=QueryString.unescape(tuple.join(eq));}}
return obj;};QueryString.unescape=function(s){return decodeURIComponent(s.replace(/\+/g,' '));};},'3.15.0',{"requires":["yui-base"]});