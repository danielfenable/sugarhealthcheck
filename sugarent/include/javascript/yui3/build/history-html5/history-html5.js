/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('history-html5',function(Y,NAME){var HistoryBase=Y.HistoryBase,Lang=Y.Lang,win=Y.config.win,useHistoryHTML5=Y.config.useHistoryHTML5,SRC_POPSTATE='popstate',SRC_REPLACE=HistoryBase.SRC_REPLACE;function HistoryHTML5(){HistoryHTML5.superclass.constructor.apply(this,arguments);}
Y.extend(HistoryHTML5,HistoryBase,{_init:function(config){var bookmarkedState;try{bookmarkedState=win.history.state;}catch(e){bookmarkedState=null;}
if(Y.Object.isEmpty(bookmarkedState)){bookmarkedState=null;}
config||(config={});if(config.initialState&&Lang.type(config.initialState)==='object'&&Lang.type(bookmarkedState)==='object'){this._initialState=Y.merge(config.initialState,bookmarkedState);}else{this._initialState=bookmarkedState;}
Y.on('popstate',this._onPopState,win,this);HistoryHTML5.superclass._init.apply(this,arguments);},_storeState:function(src,newState,options){if(src!==SRC_POPSTATE){win.history[src===SRC_REPLACE?'replaceState':'pushState'](newState,options.title||Y.config.doc.title||'',options.url||Y.config.doc.URL);}
HistoryHTML5.superclass._storeState.apply(this,arguments);},_onPopState:function(e){this._resolveChanges(SRC_POPSTATE,e._event.state||null);}},{NAME:'historyhtml5',SRC_POPSTATE:SRC_POPSTATE});if(!Y.Node.DOM_EVENTS.popstate){Y.Node.DOM_EVENTS.popstate=1;}
Y.HistoryHTML5=HistoryHTML5;if(useHistoryHTML5===true||(useHistoryHTML5!==false&&HistoryBase.html5)){Y.History=HistoryHTML5;}},'3.15.0',{"optional":["json"],"requires":["event-base","history-base","node-base"]});