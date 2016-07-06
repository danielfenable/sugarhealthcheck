/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('createlink-base',function(Y,NAME){var CreateLinkBase={};CreateLinkBase.STRINGS={PROMPT:'Please enter the URL for the link to point to:',DEFAULT:'http://'};Y.namespace('Plugin');Y.Plugin.CreateLinkBase=CreateLinkBase;Y.mix(Y.Plugin.ExecCommand.COMMANDS,{createlink:function(cmd){var inst=this.get('host').getInstance(),out,a,sel,holder,url=prompt(CreateLinkBase.STRINGS.PROMPT,CreateLinkBase.STRINGS.DEFAULT);if(url){holder=inst.config.doc.createElement('div');url=url.replace(/"/g,'').replace(/'/g,'');url=inst.config.doc.createTextNode(url);holder.appendChild(url);url=holder.innerHTML;this.get('host')._execCommand(cmd,url);sel=new inst.EditorSelection();out=sel.getSelected();if(!sel.isCollapsed&&out.size()){a=out.item(0).one('a');if(a){out.item(0).replace(a);}
if(Y.UA.gecko){if(a.get('parentNode').test('span')){if(a.get('parentNode').one('br.yui-cursor')){a.get('parentNode').insert(a,'before');}}}}else{this.get('host').execCommand('inserthtml','<a href="'+url+'">'+url+'</a>');}}
return a;}});},'3.15.0',{"requires":["editor-base"]});