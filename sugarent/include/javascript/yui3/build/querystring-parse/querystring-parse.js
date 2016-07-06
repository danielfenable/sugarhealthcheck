/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('querystring-parse',function(Y,NAME){var QueryString=Y.namespace("QueryString"),pieceParser=function(eq){return function parsePiece(key,val){var sliced,numVal,head,tail,ret;if(arguments.length!==2){key=key.split(eq);return parsePiece(QueryString.unescape(key.shift()),QueryString.unescape(key.join(eq)));}
key=key.replace(/^\s+|\s+$/g,'');if(Y.Lang.isString(val)){val=val.replace(/^\s+|\s+$/g,'');if(!isNaN(val)){numVal=+val;if(val===numVal.toString(10)){val=numVal;}}}
sliced=/(.*)\[([^\]]*)\]$/.exec(key);if(!sliced){ret={};if(key){ret[key]=val;}
return ret;}
tail=sliced[2];head=sliced[1];if(!tail){return parsePiece(head,[val]);}
ret={};ret[tail]=val;return parsePiece(head,ret);};},mergeParams=function(params,addition){return((!params)?addition:(Y.Lang.isArray(params))?params.concat(addition):(!Y.Lang.isObject(params)||!Y.Lang.isObject(addition))?[params].concat(addition):mergeObjects(params,addition));},mergeObjects=function(params,addition){for(var i in addition){if(i&&addition.hasOwnProperty(i)){params[i]=mergeParams(params[i],addition[i]);}}
return params;};QueryString.parse=function(qs,sep,eq){return Y.Array.reduce(Y.Array.map(qs.split(sep||"&"),pieceParser(eq||"=")),{},mergeParams);};QueryString.unescape=function(s){return decodeURIComponent(s.replace(/\+/g,' '));};},'3.15.0',{"requires":["yui-base","array-extras"]});