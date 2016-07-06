/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('cache-base',function(Y,NAME){var LANG=Y.Lang,isDate=Y.Lang.isDate,Cache=function(){Cache.superclass.constructor.apply(this,arguments);};Y.mix(Cache,{NAME:"cache",ATTRS:{max:{value:0,setter:"_setMax"},size:{readOnly:true,getter:"_getSize"},uniqueKeys:{value:false},expires:{value:0,validator:function(v){return Y.Lang.isDate(v)||(Y.Lang.isNumber(v)&&v>=0);}},entries:{readOnly:true,getter:"_getEntries"}}});Y.extend(Cache,Y.Base,{_entries:null,initializer:function(config){this.publish("add",{defaultFn:this._defAddFn});this.publish("flush",{defaultFn:this._defFlushFn});this._entries=[];},destructor:function(){this._entries=[];},_setMax:function(value){var entries=this._entries;if(value>0){if(entries){while(entries.length>value){entries.shift();}}}
else{value=0;this._entries=[];}
return value;},_getSize:function(){return this._entries.length;},_getEntries:function(){return this._entries;},_defAddFn:function(e){var entries=this._entries,entry=e.entry,max=this.get("max"),pos;if(this.get("uniqueKeys")){pos=this._position(e.entry.request);if(LANG.isValue(pos)){entries.splice(pos,1);}}
while(max&&entries.length>=max){entries.shift();}
entries[entries.length]=entry;},_defFlushFn:function(e){var entries=this._entries,details=e.details[0],pos;if(details&&LANG.isValue(details.request)){pos=this._position(details.request);if(LANG.isValue(pos)){entries.splice(pos,1);}}
else{this._entries=[];}},_isMatch:function(request,entry){if(!entry.expires||new Date()<entry.expires){return(request===entry.request);}
return false;},_position:function(request){var entries=this._entries,length=entries.length,i=length-1;if((this.get("max")===null)||this.get("max")>0){for(;i>=0;i--){if(this._isMatch(request,entries[i])){return i;}}}
return null;},add:function(request,response){var expires=this.get("expires");if(this.get("initialized")&&((this.get("max")===null)||this.get("max")>0)&&(LANG.isValue(request)||LANG.isNull(request)||LANG.isUndefined(request))){this.fire("add",{entry:{request:request,response:response,cached:new Date(),expires:isDate(expires)?expires:(expires?new Date(new Date().getTime()+this.get("expires")):null)}});}
else{}},flush:function(request){this.fire("flush",{request:(LANG.isValue(request)?request:null)});},retrieve:function(request){var entries=this._entries,length=entries.length,entry=null,pos;if((length>0)&&((this.get("max")===null)||(this.get("max")>0))){this.fire("request",{request:request});pos=this._position(request);if(LANG.isValue(pos)){entry=entries[pos];this.fire("retrieve",{entry:entry});if(pos<length-1){entries.splice(pos,1);entries[entries.length]=entry;}
return entry;}}
return null;}});Y.Cache=Cache;},'3.15.0',{"requires":["base"]});