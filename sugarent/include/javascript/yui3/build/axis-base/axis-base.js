/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('axis-base',function(Y,NAME){var Y_Lang=Y.Lang;function Renderer(){}
Renderer.ATTRS={styles:{getter:function()
{this._styles=this._styles||this._getDefaultStyles();return this._styles;},setter:function(val)
{this._styles=this._setStyles(val);}},graphic:{}};Renderer.NAME="renderer";Renderer.prototype={_styles:null,_setStyles:function(newstyles)
{var styles=this.get("styles");return this._mergeStyles(newstyles,styles);},_mergeStyles:function(a,b)
{if(!b)
{b={};}
var newstyles=Y.merge(b,{});Y.Object.each(a,function(value,key)
{if(b.hasOwnProperty(key)&&Y_Lang.isObject(value)&&!Y_Lang.isFunction(value)&&!Y_Lang.isArray(value))
{newstyles[key]=this._mergeStyles(value,b[key]);}
else
{newstyles[key]=value;}},this);return newstyles;},_copyObject:function(obj){var newObj={},key,val;for(key in obj)
{if(obj.hasOwnProperty(key))
{val=obj[key];if(typeof val==="object"&&!Y_Lang.isArray(val))
{newObj[key]=this._copyObject(val);}
else
{newObj[key]=val;}}}
return newObj;},_getDefaultStyles:function()
{return{padding:{top:0,right:0,bottom:0,left:0}};}};Y.augment(Renderer,Y.Attribute);Y.Renderer=Renderer;Y.AxisBase=Y.Base.create("axisBase",Y.Base,[Y.Renderer],{initializer:function()
{this.after("minimumChange",Y.bind(this._keyChangeHandler,this));this.after("maximumChange",Y.bind(this._keyChangeHandler,this));this.after("keysChange",this._keyChangeHandler);this.after("dataProviderChange",this._dataProviderChangeHandler);},getOrigin:function(){return this.get("minimum");},_dataProviderChangeHandler:function()
{var keyCollection=this.get("keyCollection").concat(),keys=this.get("keys"),i;if(keys)
{for(i in keys)
{if(keys.hasOwnProperty(i))
{delete keys[i];}}}
if(keyCollection&&keyCollection.length)
{this.set("keys",keyCollection);}},_updateMinAndMax:function(){},GUID:"yuibaseaxis",_type:null,_setMaximum:null,_setMinimum:null,_data:null,_updateTotalDataFlag:true,_dataReady:false,addKey:function(value)
{this.set("keys",value);},_getKeyArray:function(key,data)
{var i=0,obj,keyArray=[],len=data.length;for(;i<len;++i)
{obj=data[i];keyArray[i]=obj[key];}
return keyArray;},_updateTotalData:function()
{var keys=this.get("keys"),i;this._data=[];for(i in keys)
{if(keys.hasOwnProperty(i))
{this._data=this._data.concat(keys[i]);}}
this._updateTotalDataFlag=false;},removeKey:function(value)
{var keys=this.get("keys");if(keys.hasOwnProperty(value))
{delete keys[value];this._keyChangeHandler();}},getKeyValueAt:function(key,index)
{var value=NaN,keys=this.get("keys");if(keys[key]&&Y_Lang.isNumber(parseFloat(keys[key][index])))
{value=keys[key][index];}
return parseFloat(value);},getDataByKey:function(value)
{var obj,i,len,key,keys=this.get("keys");if(Y_Lang.isArray(value))
{obj={};len=value.length;for(i=0;i<len;i=i+1)
{key=value[i];if(keys[key])
{obj[key]=this.getDataByKey(key);}}}
else if(keys[value])
{obj=keys[value];}
else
{obj=null;}
return obj;},getTotalMajorUnits:function()
{var units,majorUnit=this.get("styles").majorUnit;units=majorUnit.count;return units;},getEdgeOffset:function(ct,l)
{var edgeOffset;if(this.get("calculateEdgeOffset")){edgeOffset=(l/ct)/2;}else{edgeOffset=0;}
return edgeOffset;},_keyChangeHandler:function()
{this._updateMinAndMax();this._updateTotalDataFlag=true;this.fire("dataUpdate");},_getDefaultStyles:function()
{var axisstyles={majorUnit:{determinant:"count",count:11,distance:75}};return axisstyles;},_maximumGetter:function()
{var max=this.get("dataMaximum"),min=this.get("minimum");if(min===0&&max===0)
{max=10;}
if(Y_Lang.isNumber(this._setMaximum))
{max=this._setMaximum;}
return parseFloat(max);},_maximumSetter:function(value)
{this._setMaximum=parseFloat(value);return value;},_minimumGetter:function()
{var min=this.get("dataMinimum");if(Y_Lang.isNumber(this._setMinimum))
{min=this._setMinimum;}
return parseFloat(min);},_minimumSetter:function(val)
{this._setMinimum=parseFloat(val);return val;},_getSetMax:function()
{return Y_Lang.isNumber(this._setMaximum);},_getCoordsFromValues:function(min,max,length,dataValues,offset,reverse)
{var i,valuecoords=[],len=dataValues.length;for(i=0;i<len;i=i+1)
{valuecoords.push(this._getCoordFromValue.apply(this,[min,max,length,dataValues[i],offset,reverse]));}
return valuecoords;},_getDataValuesByCount:function(count,min,max)
{var dataValues=[],dataValue=min,len=count-1,range=max-min,increm=range/len,i;for(i=0;i<len;i=i+1)
{dataValues.push(dataValue);dataValue=dataValue+increm;}
dataValues.push(max);return dataValues;},_getSetMin:function()
{return Y_Lang.isNumber(this._setMinimum);}},{ATTRS:{calculateEdgeOffset:{value:false},labelFunction:{valueFn:function(){return this.formatLabel;}},keys:{value:{},setter:function(val)
{var keys={},i,len,data=this.get("dataProvider");if(Y_Lang.isArray(val))
{len=val.length;for(i=0;i<len;++i)
{keys[val[i]]=this._getKeyArray(val[i],data);}}
else if(Y_Lang.isString(val))
{keys=this.get("keys");keys[val]=this._getKeyArray(val,data);}
else
{for(i in val)
{if(val.hasOwnProperty(i))
{keys[i]=this._getKeyArray(i,data);}}}
this._updateTotalDataFlag=true;return keys;}},type:{readOnly:true,getter:function()
{return this._type;}},dataProvider:{setter:function(value)
{return value;}},dataMaximum:{getter:function()
{if(!Y_Lang.isNumber(this._dataMaximum))
{this._updateMinAndMax();}
return this._dataMaximum;}},maximum:{lazyAdd:false,getter:"_maximumGetter",setter:"_maximumSetter"},dataMinimum:{getter:function()
{if(!Y_Lang.isNumber(this._dataMinimum))
{this._updateMinAndMax();}
return this._dataMinimum;}},minimum:{lazyAdd:false,getter:"_minimumGetter",setter:"_minimumSetter"},setMax:{readOnly:true,getter:"_getSetMax"},setMin:{readOnly:true,getter:"_getSetMin"},data:{getter:function()
{if(!this._data||this._updateTotalDataFlag)
{this._updateTotalData();}
return this._data;}},keyCollection:{getter:function()
{var keys=this.get("keys"),i,col=[];for(i in keys)
{if(keys.hasOwnProperty(i))
{col.push(i);}}
return col;},readOnly:true},labelFunctionScope:{}}});},'3.15.0',{"requires":["classnamemanager","datatype-number","datatype-date","base","event-custom"]});