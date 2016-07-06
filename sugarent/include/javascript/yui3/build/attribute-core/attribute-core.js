/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('attribute-core',function(Y,NAME){Y.State=function(){this.data={};};Y.State.prototype={add:function(name,key,val){var item=this.data[name];if(!item){item=this.data[name]={};}
item[key]=val;},addAll:function(name,obj){var item=this.data[name],key;if(!item){item=this.data[name]={};}
for(key in obj){if(obj.hasOwnProperty(key)){item[key]=obj[key];}}},remove:function(name,key){var item=this.data[name];if(item){delete item[key];}},removeAll:function(name,obj){var data;if(!obj){data=this.data;if(name in data){delete data[name];}}else{Y.each(obj,function(value,key){this.remove(name,typeof key==='string'?key:value);},this);}},get:function(name,key){var item=this.data[name];if(item){return item[key];}},getAll:function(name,reference){var item=this.data[name],key,obj;if(reference){obj=item;}else if(item){obj={};for(key in item){if(item.hasOwnProperty(key)){obj[key]=item[key];}}}
return obj;}};var O=Y.Object,Lang=Y.Lang,DOT=".",GETTER="getter",SETTER="setter",READ_ONLY="readOnly",WRITE_ONCE="writeOnce",INIT_ONLY="initOnly",VALIDATOR="validator",VALUE="value",VALUE_FN="valueFn",LAZY_ADD="lazyAdd",ADDED="added",BYPASS_PROXY="_bypassProxy",INIT_VALUE="initValue",LAZY="lazy",INVALID_VALUE;function AttributeCore(attrs,values,lazy){this._yuievt=null;this._initAttrHost(attrs,values,lazy);}
AttributeCore.INVALID_VALUE={};INVALID_VALUE=AttributeCore.INVALID_VALUE;AttributeCore._ATTR_CFG=[SETTER,GETTER,VALIDATOR,VALUE,VALUE_FN,WRITE_ONCE,READ_ONLY,LAZY_ADD,BYPASS_PROXY];AttributeCore.protectAttrs=function(attrs){if(attrs){attrs=Y.merge(attrs);for(var attr in attrs){if(attrs.hasOwnProperty(attr)){attrs[attr]=Y.merge(attrs[attr]);}}}
return attrs;};AttributeCore.prototype={_initAttrHost:function(attrs,values,lazy){this._state=new Y.State();this._initAttrs(attrs,values,lazy);},addAttr:function(name,config,lazy){var host=this,state=host._state,data=state.data,value,added,hasValue;config=config||{};if(LAZY_ADD in config){lazy=config[LAZY_ADD];}
added=state.get(name,ADDED);if(lazy&&!added){state.data[name]={lazy:config,added:true};}else{if(!added||config.isLazyAdd){hasValue=(VALUE in config);if(hasValue){value=config.value;config.value=undefined;}
config.added=true;config.initializing=true;data[name]=config;if(hasValue){host.set(name,value);}
config.initializing=false;}}
return host;},attrAdded:function(name){return!!(this._state.get(name,ADDED));},get:function(name){return this._getAttr(name);},_isLazyAttr:function(name){return this._state.get(name,LAZY);},_addLazyAttr:function(name,lazyCfg){var state=this._state;lazyCfg=lazyCfg||state.get(name,LAZY);if(lazyCfg){state.data[name].lazy=undefined;lazyCfg.isLazyAdd=true;this.addAttr(name,lazyCfg);}},set:function(name,val,opts){return this._setAttr(name,val,opts);},_set:function(name,val,opts){return this._setAttr(name,val,opts,true);},_setAttr:function(name,val,opts,force){var allowSet=true,state=this._state,stateProxy=this._stateProxy,tCfgs=this._tCfgs,cfg,initialSet,strPath,path,currVal,writeOnce,initializing;if(name.indexOf(DOT)!==-1){strPath=name;path=name.split(DOT);name=path.shift();}
if(tCfgs&&tCfgs[name]){this._addOutOfOrder(name,tCfgs[name]);}
cfg=state.data[name]||{};if(cfg.lazy){cfg=cfg.lazy;this._addLazyAttr(name,cfg);}
initialSet=(cfg.value===undefined);if(stateProxy&&name in stateProxy&&!cfg._bypassProxy){initialSet=false;}
writeOnce=cfg.writeOnce;initializing=cfg.initializing;if(!initialSet&&!force){if(writeOnce){allowSet=false;}
if(cfg.readOnly){allowSet=false;}}
if(!initializing&&!force&&writeOnce===INIT_ONLY){allowSet=false;}
if(allowSet){if(!initialSet){currVal=this.get(name);}
if(path){val=O.setValue(Y.clone(currVal),path,val);if(val===undefined){allowSet=false;}}
if(allowSet){if(!this._fireAttrChange||initializing){this._setAttrVal(name,strPath,currVal,val,opts,cfg);}else{this._fireAttrChange(name,strPath,currVal,val,opts,cfg);}}}
return this;},_addOutOfOrder:function(name,cfg){var attrs={};attrs[name]=cfg;delete this._tCfgs[name];this._addAttrs(attrs,this._tVals);},_getAttr:function(name){var fullName=name,tCfgs=this._tCfgs,path,getter,val,attrCfg;if(name.indexOf(DOT)!==-1){path=name.split(DOT);name=path.shift();}
if(tCfgs&&tCfgs[name]){this._addOutOfOrder(name,tCfgs[name]);}
attrCfg=this._state.data[name]||{};if(attrCfg.lazy){attrCfg=attrCfg.lazy;this._addLazyAttr(name,attrCfg);}
val=this._getStateVal(name,attrCfg);getter=attrCfg.getter;if(getter&&!getter.call){getter=this[getter];}
val=(getter)?getter.call(this,val,fullName):val;val=(path)?O.getValue(val,path):val;return val;},_getStateVal:function(name,cfg){var stateProxy=this._stateProxy;if(!cfg){cfg=this._state.getAll(name)||{};}
return(stateProxy&&(name in stateProxy)&&!(cfg._bypassProxy))?stateProxy[name]:cfg.value;},_setStateVal:function(name,value){var stateProxy=this._stateProxy;if(stateProxy&&(name in stateProxy)&&!this._state.get(name,BYPASS_PROXY)){stateProxy[name]=value;}else{this._state.add(name,VALUE,value);}},_setAttrVal:function(attrName,subAttrName,prevVal,newVal,opts,attrCfg){var host=this,allowSet=true,cfg=attrCfg||this._state.data[attrName]||{},validator=cfg.validator,setter=cfg.setter,initializing=cfg.initializing,prevRawVal=this._getStateVal(attrName,cfg),name=subAttrName||attrName,retVal,valid;if(validator){if(!validator.call){validator=this[validator];}
if(validator){valid=validator.call(host,newVal,name,opts);if(!valid&&initializing){newVal=cfg.defaultValue;valid=true;}}}
if(!validator||valid){if(setter){if(!setter.call){setter=this[setter];}
if(setter){retVal=setter.call(host,newVal,name,opts);if(retVal===INVALID_VALUE){if(initializing){newVal=cfg.defaultValue;}else{allowSet=false;}}else if(retVal!==undefined){newVal=retVal;}}}
if(allowSet){if(!subAttrName&&(newVal===prevRawVal)&&!Lang.isObject(newVal)){allowSet=false;}else{if(!(INIT_VALUE in cfg)){cfg.initValue=newVal;}
host._setStateVal(attrName,newVal);}}}else{allowSet=false;}
return allowSet;},setAttrs:function(attrs,opts){return this._setAttrs(attrs,opts);},_setAttrs:function(attrs,opts){var attr;for(attr in attrs){if(attrs.hasOwnProperty(attr)){this.set(attr,attrs[attr],opts);}}
return this;},getAttrs:function(attrs){return this._getAttrs(attrs);},_getAttrs:function(attrs){var obj={},attr,i,len,modifiedOnly=(attrs===true);if(!attrs||modifiedOnly){attrs=O.keys(this._state.data);}
for(i=0,len=attrs.length;i<len;i++){attr=attrs[i];if(!modifiedOnly||this._getStateVal(attr)!=this._state.get(attr,INIT_VALUE)){obj[attr]=this.get(attr);}}
return obj;},addAttrs:function(cfgs,values,lazy){if(cfgs){this._tCfgs=cfgs;this._tVals=(values)?this._normAttrVals(values):null;this._addAttrs(cfgs,this._tVals,lazy);this._tCfgs=this._tVals=null;}
return this;},_addAttrs:function(cfgs,values,lazy){var tCfgs=this._tCfgs,tVals=this._tVals,attr,attrCfg,value;for(attr in cfgs){if(cfgs.hasOwnProperty(attr)){attrCfg=cfgs[attr];attrCfg.defaultValue=attrCfg.value;value=this._getAttrInitVal(attr,attrCfg,tVals);if(value!==undefined){attrCfg.value=value;}
if(tCfgs[attr]){tCfgs[attr]=undefined;}
this.addAttr(attr,attrCfg,lazy);}}},_protectAttrs:AttributeCore.protectAttrs,_normAttrVals:function(valueHash){var vals,subvals,path,attr,v,k;if(!valueHash){return null;}
vals={};for(k in valueHash){if(valueHash.hasOwnProperty(k)){if(k.indexOf(DOT)!==-1){path=k.split(DOT);attr=path.shift();subvals=subvals||{};v=subvals[attr]=subvals[attr]||[];v[v.length]={path:path,value:valueHash[k]};}else{vals[k]=valueHash[k];}}}
return{simple:vals,complex:subvals};},_getAttrInitVal:function(attr,cfg,initValues){var val=cfg.value,valFn=cfg.valueFn,tmpVal,initValSet=false,readOnly=cfg.readOnly,simple,complex,i,l,path,subval,subvals;if(!readOnly&&initValues){simple=initValues.simple;if(simple&&simple.hasOwnProperty(attr)){val=simple[attr];initValSet=true;}}
if(valFn&&!initValSet){if(!valFn.call){valFn=this[valFn];}
if(valFn){tmpVal=valFn.call(this,attr);val=tmpVal;}}
if(!readOnly&&initValues){complex=initValues.complex;if(complex&&complex.hasOwnProperty(attr)&&(val!==undefined)&&(val!==null)){subvals=complex[attr];for(i=0,l=subvals.length;i<l;++i){path=subvals[i].path;subval=subvals[i].value;O.setValue(val,path,subval);}}}
return val;},_initAttrs:function(attrs,values,lazy){attrs=attrs||this.constructor.ATTRS;var Base=Y.Base,BaseCore=Y.BaseCore,baseInst=(Base&&Y.instanceOf(this,Base)),baseCoreInst=(!baseInst&&BaseCore&&Y.instanceOf(this,BaseCore));if(attrs&&!baseInst&&!baseCoreInst){this.addAttrs(Y.AttributeCore.protectAttrs(attrs),values,lazy);}}};Y.AttributeCore=AttributeCore;},'3.15.0',{"requires":["oop"]});