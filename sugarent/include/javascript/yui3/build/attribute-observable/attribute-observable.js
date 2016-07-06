/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('attribute-observable',function(Y,NAME){var EventTarget=Y.EventTarget,CHANGE="Change",BROADCAST="broadcast";function AttributeObservable(){this._ATTR_E_FACADE={};EventTarget.call(this,{emitFacade:true});}
AttributeObservable._ATTR_CFG=[BROADCAST];AttributeObservable.prototype={set:function(name,val,opts){return this._setAttr(name,val,opts);},_set:function(name,val,opts){return this._setAttr(name,val,opts,true);},setAttrs:function(attrs,opts){return this._setAttrs(attrs,opts);},_setAttrs:function(attrs,opts){var attr;for(attr in attrs){if(attrs.hasOwnProperty(attr)){this.set(attr,attrs[attr],opts);}}
return this;},_fireAttrChange:function(attrName,subAttrName,currVal,newVal,opts,cfg){var host=this,eventName=this._getFullType(attrName+CHANGE),state=host._state,facade,broadcast,e;if(!cfg){cfg=state.data[attrName]||{};}
if(!cfg.published){e=host._publish(eventName);e.emitFacade=true;e.defaultTargetOnly=true;e.defaultFn=host._defAttrChangeFn;broadcast=cfg.broadcast;if(broadcast!==undefined){e.broadcast=broadcast;}
cfg.published=true;}
if(opts){facade=Y.merge(opts);facade._attrOpts=opts;}else{facade=host._ATTR_E_FACADE;}
facade.attrName=attrName;facade.subAttrName=subAttrName;facade.prevVal=currVal;facade.newVal=newVal;if(host._hasPotentialSubscribers(eventName)){host.fire(eventName,facade);}else{this._setAttrVal(attrName,subAttrName,currVal,newVal,opts,cfg);}},_defAttrChangeFn:function(e,eventFastPath){var opts=e._attrOpts;if(opts){delete e._attrOpts;}
if(!this._setAttrVal(e.attrName,e.subAttrName,e.prevVal,e.newVal,opts)){if(!eventFastPath){e.stopImmediatePropagation();}}else{if(!eventFastPath){e.newVal=this.get(e.attrName);}}}};Y.mix(AttributeObservable,EventTarget,false,null,1);Y.AttributeObservable=AttributeObservable;Y.AttributeEvents=AttributeObservable;},'3.15.0',{"requires":["event-custom"]});