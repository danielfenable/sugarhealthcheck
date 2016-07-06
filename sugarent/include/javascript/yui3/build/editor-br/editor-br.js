/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('editor-br',function(Y,NAME){var EditorBR=function(){EditorBR.superclass.constructor.apply(this,arguments);},HOST='host',LI='li';Y.extend(EditorBR,Y.Base,{_onKeyDown:function(e){if(e.stopped){e.halt();return;}
if(e.keyCode===13){var host=this.get(HOST),inst=host.getInstance(),sel=new inst.EditorSelection();if(sel){if(Y.UA.ie){if(!sel.anchorNode||(!sel.anchorNode.test(LI)&&!sel.anchorNode.ancestor(LI))){host.execCommand('inserthtml',inst.EditorSelection.CURSOR);e.halt();}}
if(Y.UA.webkit){if(!sel.anchorNode||(!sel.anchorNode.test(LI)&&!sel.anchorNode.ancestor(LI))){host.frame._execCommand('insertlinebreak',null);e.halt();}}}}},_afterEditorReady:function(){var inst=this.get(HOST).getInstance(),container;try{inst.config.doc.execCommand('insertbronreturn',null,true);}catch(bre){}
if(Y.UA.ie||Y.UA.webkit){container=inst.EditorSelection.ROOT;if(container.test('body')){container=inst.config.doc;}
inst.on('keydown',Y.bind(this._onKeyDown,this),container);}},_onNodeChange:function(e){switch(e.changedType){case'backspace-up':case'backspace-down':case'delete-up':var inst=this.get(HOST).getInstance(),d=e.changedNode,t=inst.config.doc.createTextNode(' ');d.appendChild(t);d.removeChild(t);break;}},initializer:function(){var host=this.get(HOST);if(host.editorPara){Y.error('Can not plug EditorBR and EditorPara at the same time.');return;}
host.after('ready',Y.bind(this._afterEditorReady,this));if(Y.UA.gecko){host.on('nodeChange',Y.bind(this._onNodeChange,this));}}},{NAME:'editorBR',NS:'editorBR',ATTRS:{host:{value:false}}});Y.namespace('Plugin');Y.Plugin.EditorBR=EditorBR;},'3.15.0',{"requires":["editor-base"]});