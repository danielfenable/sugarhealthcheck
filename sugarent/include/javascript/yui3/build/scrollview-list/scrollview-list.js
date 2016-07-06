/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('scrollview-list',function(Y,NAME){var getCN=Y.ClassNameManager.getClassName,SCROLLVIEW='scrollview',LIST_CLASS=getCN(SCROLLVIEW,'list'),ITEM_CLASS=getCN(SCROLLVIEW,'item'),CONTENT_BOX="contentBox",HOST="host";function ListPlugin(){ListPlugin.superclass.constructor.apply(this,arguments);}
ListPlugin.NAME='pluginList';ListPlugin.NS='list';ListPlugin.ATTRS={isAttached:{value:false,validator:Y.Lang.isBoolean}};Y.namespace("Plugin").ScrollViewList=Y.extend(ListPlugin,Y.Plugin.Base,{initializer:function(){this._host=this.get(HOST);this.afterHostEvent("render",this._addClassesToList);},_addClassesToList:function(){if(!this.get('isAttached')){var cb=this._host.get(CONTENT_BOX),ulList,liList;if(cb.hasChildNodes()){ulList=cb.all('> ul');liList=cb.all('> ul > li');ulList.each(function(list){list.addClass(LIST_CLASS);});liList.each(function(item){item.addClass(ITEM_CLASS);});this.set('isAttached',true);this._host.syncUI();}}}});},'3.15.0',{"requires":["plugin","classnamemanager"],"skinnable":true});