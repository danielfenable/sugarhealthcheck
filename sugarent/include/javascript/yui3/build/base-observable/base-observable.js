/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('base-observable',function(Y,NAME){var L=Y.Lang,DESTROY="destroy",INIT="init",BUBBLETARGETS="bubbleTargets",_BUBBLETARGETS="_bubbleTargets",AttributeObservable=Y.AttributeObservable,BaseCore=Y.BaseCore;function BaseObservable(){}
BaseObservable._ATTR_CFG=AttributeObservable._ATTR_CFG.concat();BaseObservable._NON_ATTRS_CFG=["on","after","bubbleTargets"];BaseObservable.prototype={_initAttribute:function(){BaseCore.prototype._initAttribute.apply(this,arguments);AttributeObservable.call(this);this._eventPrefix=this.constructor.EVENT_PREFIX||this.constructor.NAME;this._yuievt.config.prefix=this._eventPrefix;},init:function(config){var type=this._getFullType(INIT),e=this._publish(type);e.emitFacade=true;e.fireOnce=true;e.defaultTargetOnly=true;e.defaultFn=this._defInitFn;this._preInitEventCfg(config);if(e._hasPotentialSubscribers()){this.fire(type,{cfg:config});}else{this._baseInit(config);e.fired=true;e.firedWith=[{cfg:config}];}
return this;},_preInitEventCfg:function(config){if(config){if(config.on){this.on(config.on);}
if(config.after){this.after(config.after);}}
var i,l,target,userTargets=(config&&BUBBLETARGETS in config);if(userTargets||_BUBBLETARGETS in this){target=userTargets?(config&&config.bubbleTargets):this._bubbleTargets;if(L.isArray(target)){for(i=0,l=target.length;i<l;i++){this.addTarget(target[i]);}}else if(target){this.addTarget(target);}}},destroy:function(){this.publish(DESTROY,{fireOnce:true,defaultTargetOnly:true,defaultFn:this._defDestroyFn});this.fire(DESTROY);this.detachAll();return this;},_defInitFn:function(e){this._baseInit(e.cfg);},_defDestroyFn:function(e){this._baseDestroy(e.cfg);}};Y.mix(BaseObservable,AttributeObservable,false,null,1);Y.BaseObservable=BaseObservable;},'3.15.0',{"requires":["attribute-observable","base-core"]});