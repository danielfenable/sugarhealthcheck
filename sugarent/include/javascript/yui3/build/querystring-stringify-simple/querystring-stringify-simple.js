/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('querystring-stringify-simple',function(Y,NAME){var QueryString=Y.namespace("QueryString"),EUC=encodeURIComponent;QueryString.stringify=function(obj,c){var qs=[],s=c&&c.arrayKey?true:false,key,i,l;for(key in obj){if(obj.hasOwnProperty(key)){if(Y.Lang.isArray(obj[key])){for(i=0,l=obj[key].length;i<l;i++){qs.push(EUC(s?key+'[]':key)+'='+EUC(obj[key][i]));}}
else{qs.push(EUC(key)+'='+EUC(obj[key]));}}}
return qs.join('&');};},'3.15.0',{"requires":["yui-base"]});