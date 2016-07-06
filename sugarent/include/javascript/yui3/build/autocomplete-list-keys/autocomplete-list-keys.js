/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('autocomplete-list-keys',function(Y,NAME){var KEY_DOWN=40,KEY_ENTER=13,KEY_ESC=27,KEY_TAB=9,KEY_UP=38;function ListKeys(){Y.before(this._bindKeys,this,'bindUI');this._initKeys();}
ListKeys.prototype={_initKeys:function(){var keys={},keysVisible={};keys[KEY_DOWN]=this._keyDown;keysVisible[KEY_ENTER]=this._keyEnter;keysVisible[KEY_ESC]=this._keyEsc;keysVisible[KEY_TAB]=this._keyTab;keysVisible[KEY_UP]=this._keyUp;this._keys=keys;this._keysVisible=keysVisible;},destructor:function(){this._unbindKeys();},_bindKeys:function(){this._keyEvents=this._inputNode.on('keydown',this._onInputKey,this);},_unbindKeys:function(){this._keyEvents&&this._keyEvents.detach();this._keyEvents=null;},_keyDown:function(){if(this.get('visible')){this._activateNextItem();}else{this.show();}},_keyEnter:function(e){var item=this.get('activeItem');if(item){this.selectItem(item,e);}else{return false;}},_keyEsc:function(){this.hide();},_keyTab:function(e){var item;if(this.get('tabSelect')){item=this.get('activeItem');if(item){this.selectItem(item,e);return true;}}
return false;},_keyUp:function(){this._activatePrevItem();},_onInputKey:function(e){var handler,keyCode=e.keyCode;this._lastInputKey=keyCode;if(this.get('results').length){handler=this._keys[keyCode];if(!handler&&this.get('visible')){handler=this._keysVisible[keyCode];}
if(handler){if(handler.call(this,e)!==false){e.preventDefault();}}}}};Y.Base.mix(Y.AutoCompleteList,[ListKeys]);},'3.15.0',{"requires":["autocomplete-list","base-build"]});