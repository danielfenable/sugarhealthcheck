/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('graphics',function(Y,NAME){var SETTER="setter",PluginHost=Y.Plugin.Host,VALUE="value",VALUEFN="valueFn",READONLY="readOnly",Y_LANG=Y.Lang,STR="string",WRITE_ONCE="writeOnce",GraphicBase,AttributeLite;AttributeLite=function()
{var host=this;host._ATTR_E_FACADE={};Y.EventTarget.call(this,{emitFacade:true});host._state={};host.prototype=Y.mix(AttributeLite.prototype,host.prototype);};AttributeLite.prototype={addAttrs:function(cfg)
{var host=this,attrConfig=this.constructor.ATTRS,attr,i,fn,state=host._state;for(i in attrConfig)
{if(attrConfig.hasOwnProperty(i))
{attr=attrConfig[i];if(attr.hasOwnProperty(VALUE))
{state[i]=attr.value;}
else if(attr.hasOwnProperty(VALUEFN))
{fn=attr.valueFn;if(Y_LANG.isString(fn))
{state[i]=host[fn].apply(host);}
else
{state[i]=fn.apply(host);}}}}
host._state=state;for(i in attrConfig)
{if(attrConfig.hasOwnProperty(i))
{attr=attrConfig[i];if(attr.hasOwnProperty(READONLY)&&attr.readOnly)
{continue;}
if(attr.hasOwnProperty(WRITE_ONCE)&&attr.writeOnce)
{attr.readOnly=true;}
if(cfg&&cfg.hasOwnProperty(i))
{if(attr.hasOwnProperty(SETTER))
{host._state[i]=attr.setter.apply(host,[cfg[i]]);}
else
{host._state[i]=cfg[i];}}}}},get:function(attr)
{var host=this,getter,attrConfig=host.constructor.ATTRS;if(attrConfig&&attrConfig[attr])
{getter=attrConfig[attr].getter;if(getter)
{if(typeof getter===STR)
{return host[getter].apply(host);}
return attrConfig[attr].getter.apply(host);}
return host._state[attr];}
return null;},set:function()
{var attr=arguments[0],i;if(Y_LANG.isObject(attr))
{for(i in attr)
{if(attr.hasOwnProperty(i))
{this._set(i,attr[i]);}}}
else
{this._set.apply(this,arguments);}},_set:function(attr,val)
{var host=this,setter,args,attrConfig=host.constructor.ATTRS;if(attrConfig&&attrConfig.hasOwnProperty(attr))
{setter=attrConfig[attr].setter;if(setter)
{args=[val];if(typeof setter===STR)
{val=host[setter].apply(host,args);}
else
{val=attrConfig[attr].setter.apply(host,args);}}
host._state[attr]=val;}}};Y.mix(AttributeLite,Y.EventTarget,false,null,1);Y.AttributeLite=AttributeLite;GraphicBase=function(cfg)
{var host=this,PluginHost=Y.Plugin&&Y.Plugin.Host;if(host._initPlugins&&PluginHost){PluginHost.call(host);}
host.name=host.constructor.NAME;host._eventPrefix=host.constructor.EVENT_PREFIX||host.constructor.NAME;AttributeLite.call(host);host.addAttrs(cfg);host.init.apply(this,arguments);if(host._initPlugins){host._initPlugins(cfg);}
host.initialized=true;};GraphicBase.NAME="baseGraphic";GraphicBase.prototype={init:function()
{this.publish("init",{fireOnce:true});this.initializer.apply(this,arguments);this.fire("init",{cfg:arguments[0]});},_camelCaseConcat:function(prefix,name)
{return prefix+name.charAt(0).toUpperCase()+name.slice(1);}};Y.mix(GraphicBase,Y.AttributeLite,false,null,1);Y.mix(GraphicBase,PluginHost,false,null,1);GraphicBase.prototype.constructor=GraphicBase;GraphicBase.plug=PluginHost.plug;GraphicBase.unplug=PluginHost.unplug;Y.GraphicBase=GraphicBase;},'3.15.0',{"requires":["node","event-custom","pluginhost","matrix","classnamemanager"]});