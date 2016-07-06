/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('color-base',function(Y,NAME){var REGEX_HEX=/^#?([\da-fA-F]{2})([\da-fA-F]{2})([\da-fA-F]{2})(\ufffe)?/,REGEX_HEX3=/^#?([\da-fA-F]{1})([\da-fA-F]{1})([\da-fA-F]{1})(\ufffe)?/,REGEX_RGB=/rgba?\(([\d]{1,3}), ?([\d]{1,3}), ?([\d]{1,3}),? ?([.\d]*)?\)/,TYPES={'HEX':'hex','RGB':'rgb','RGBA':'rgba'},CONVERTS={'hex':'toHex','rgb':'toRGB','rgba':'toRGBA'};Y.Color={KEYWORDS:{'black':'000','silver':'c0c0c0','gray':'808080','white':'fff','maroon':'800000','red':'f00','purple':'800080','fuchsia':'f0f','green':'008000','lime':'0f0','olive':'808000','yellow':'ff0','navy':'000080','blue':'00f','teal':'008080','aqua':'0ff'},REGEX_HEX:REGEX_HEX,REGEX_HEX3:REGEX_HEX3,REGEX_RGB:REGEX_RGB,re_RGB:REGEX_RGB,re_hex:REGEX_HEX,re_hex3:REGEX_HEX3,STR_HEX:'#{*}{*}{*}',STR_RGB:'rgb({*}, {*}, {*})',STR_RGBA:'rgba({*}, {*}, {*}, {*})',TYPES:TYPES,CONVERTS:CONVERTS,convert:function(str,to){var convert=Y.Color.CONVERTS[to.toLowerCase()],clr=str;if(convert&&Y.Color[convert]){clr=Y.Color[convert](str);}
return clr;},toHex:function(str){var clr=Y.Color._convertTo(str,'hex'),isTransparent=clr.toLowerCase()==='transparent';if(clr.charAt(0)!=='#'&&!isTransparent){clr='#'+clr;}
return isTransparent?clr.toLowerCase():clr.toUpperCase();},toRGB:function(str){var clr=Y.Color._convertTo(str,'rgb');return clr.toLowerCase();},toRGBA:function(str){var clr=Y.Color._convertTo(str,'rgba');return clr.toLowerCase();},toArray:function(str){var type=Y.Color.findType(str).toUpperCase(),regex,arr,length,lastItem;if(type==='HEX'&&str.length<5){type='HEX3';}
if(type.charAt(type.length-1)==='A'){type=type.slice(0,-1);}
regex=Y.Color['REGEX_'+type];if(regex){arr=regex.exec(str)||[];length=arr.length;if(length){arr.shift();length--;if(type==='HEX3'){arr[0]+=arr[0];arr[1]+=arr[1];arr[2]+=arr[2];}
lastItem=arr[length-1];if(!lastItem){arr[length-1]=1;}}}
return arr;},fromArray:function(arr,template){arr=arr.concat();if(typeof template==='undefined'){return arr.join(', ');}
var replace='{*}';template=Y.Color['STR_'+template.toUpperCase()];if(arr.length===3&&template.match(/\{\*\}/g).length===4){arr.push(1);}
while(template.indexOf(replace)>=0&&arr.length>0){template=template.replace(replace,arr.shift());}
return template;},findType:function(str){if(Y.Color.KEYWORDS[str]){return'keyword';}
var index=str.indexOf('('),key;if(index>0){key=str.substr(0,index);}
if(key&&Y.Color.TYPES[key.toUpperCase()]){return Y.Color.TYPES[key.toUpperCase()];}
return'hex';},_getAlpha:function(clr){var alpha,arr=Y.Color.toArray(clr);if(arr.length>3){alpha=arr.pop();}
return+alpha||1;},_keywordToHex:function(clr){var keyword=Y.Color.KEYWORDS[clr];if(keyword){return keyword;}},_convertTo:function(clr,to){if(clr==='transparent'){return clr;}
var from=Y.Color.findType(clr),originalTo=to,needsAlpha,alpha,method,ucTo;if(from==='keyword'){clr=Y.Color._keywordToHex(clr);from='hex';}
if(from==='hex'&&clr.length<5){if(clr.charAt(0)==='#'){clr=clr.substr(1);}
clr='#'+clr.charAt(0)+clr.charAt(0)+
clr.charAt(1)+clr.charAt(1)+
clr.charAt(2)+clr.charAt(2);}
if(from===to){return clr;}
if(from.charAt(from.length-1)==='a'){from=from.slice(0,-1);}
needsAlpha=(to.charAt(to.length-1)==='a');if(needsAlpha){to=to.slice(0,-1);alpha=Y.Color._getAlpha(clr);}
ucTo=to.charAt(0).toUpperCase()+to.substr(1).toLowerCase();method=Y.Color['_'+from+'To'+ucTo];if(!method){if(from!=='rgb'&&to!=='rgb'){clr=Y.Color['_'+from+'ToRgb'](clr);from='rgb';method=Y.Color['_'+from+'To'+ucTo];}}
if(method){clr=((method)(clr,needsAlpha));}
if(needsAlpha){if(!Y.Lang.isArray(clr)){clr=Y.Color.toArray(clr);}
clr.push(alpha);clr=Y.Color.fromArray(clr,originalTo.toUpperCase());}
return clr;},_hexToRgb:function(str,toArray){var r,g,b;if(str.charAt(0)==='#'){str=str.substr(1);}
str=parseInt(str,16);r=str>>16;g=str>>8&0xFF;b=str&0xFF;if(toArray){return[r,g,b];}
return'rgb('+r+', '+g+', '+b+')';},_rgbToHex:function(str){var rgb=Y.Color.toArray(str),hex=rgb[2]|(rgb[1]<<8)|(rgb[0]<<16);hex=(+hex).toString(16);while(hex.length<6){hex='0'+hex;}
return'#'+hex;}};},'3.15.0',{"requires":["yui-base"]});