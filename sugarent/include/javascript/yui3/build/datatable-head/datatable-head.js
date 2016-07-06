/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('datatable-head',function(Y,NAME){var Lang=Y.Lang,fromTemplate=Lang.sub,isArray=Lang.isArray,toArray=Y.Array;Y.namespace('DataTable').HeaderView=Y.Base.create('tableHeader',Y.View,[],{CELL_TEMPLATE:'<th id="{id}" colspan="{_colspan}" rowspan="{_rowspan}" class="{className}" scope="col" {_id}{abbr}{title}>{content}</th>',ROW_TEMPLATE:'<tr>{content}</tr>',THEAD_TEMPLATE:'<thead class="{className}"></thead>',getClassName:function(){var host=this.host,NAME=(host&&host.constructor.NAME)||this.constructor.NAME;if(host&&host.getClassName){return host.getClassName.apply(host,arguments);}else{return Y.ClassNameManager.getClassName.apply(Y.ClassNameManager,[NAME].concat(toArray(arguments,0,true)));}},render:function(){var table=this.get('container'),thead=this.theadNode||(this.theadNode=this._createTHeadNode()),columns=this.columns,defaults={_colspan:1,_rowspan:1,abbr:'',title:''},i,len,j,jlen,col,html,content,values;if(thead&&columns){html='';if(columns.length){for(i=0,len=columns.length;i<len;++i){content='';for(j=0,jlen=columns[i].length;j<jlen;++j){col=columns[i][j];values=Y.merge(defaults,col,{className:this.getClassName('header'),content:col.label||col.key||("Column "+(j+1))});values._id=col._id?' data-yui3-col-id="'+col._id+'"':'';if(col.abbr){values.abbr=' abbr="'+col.abbr+'"';}
if(col.title){values.title=' title="'+col.title+'"';}
if(col.className){values.className+=' '+col.className;}
if(col._first){values.className+=' '+this.getClassName('first','header');}
if(col._id){values.className+=' '+this.getClassName('col',col._id);}
content+=fromTemplate(col.headerTemplate||this.CELL_TEMPLATE,values);}
html+=fromTemplate(this.ROW_TEMPLATE,{content:content});}}
thead.setHTML(html);if(thead.get('parentNode')!==table){table.insertBefore(thead,table.one('tfoot, tbody'));}}
this.bindUI();return this;},_afterColumnsChange:function(e){this.columns=this._parseColumns(e.newVal);this.render();},bindUI:function(){if(!this._eventHandles.columnsChange){this._eventHandles.columnsChange=this.after('columnsChange',Y.bind('_afterColumnsChange',this));}},_createTHeadNode:function(){return Y.Node.create(fromTemplate(this.THEAD_TEMPLATE,{className:this.getClassName('columns')}));},destructor:function(){(new Y.EventHandle(Y.Object.values(this._eventHandles))).detach();},initializer:function(config){this.host=config.host;this.columns=this._parseColumns(config.columns);this._eventHandles=[];},_parseColumns:function(data){var columns=[],stack=[],rowSpan=1,entry,row,col,children,parent,i,len,j;if(isArray(data)&&data.length){data=data.slice();stack.push([data,-1]);while(stack.length){entry=stack[stack.length-1];row=entry[0];i=entry[1]+1;for(len=row.length;i<len;++i){row[i]=col=Y.merge(row[i]);children=col.children;Y.stamp(col);if(!col.id){col.id=Y.guid();}
if(isArray(children)&&children.length){stack.push([children,-1]);entry[1]=i;rowSpan=Math.max(rowSpan,stack.length);break;}else{col._colspan=1;}}
if(i>=len){if(stack.length>1){entry=stack[stack.length-2];parent=entry[0][entry[1]];parent._colspan=0;for(i=0,len=row.length;i<len;++i){row[i]._parent=parent;parent._colspan+=row[i]._colspan;}}
stack.pop();}}
for(i=0;i<rowSpan;++i){columns.push([]);}
stack.push([data,-1]);while(stack.length){entry=stack[stack.length-1];row=entry[0];i=entry[1]+1;for(len=row.length;i<len;++i){col=row[i];children=col.children;columns[stack.length-1].push(col);entry[1]=i;col._headers=[col.id];for(j=stack.length-2;j>=0;--j){parent=stack[j][0][stack[j][1]];col._headers.unshift(parent.id);}
if(children&&children.length){stack.push([children,-1]);break;}else{col._rowspan=rowSpan-stack.length+1;}}
if(i>=len){stack.pop();}}}
for(i=0,len=columns.length;i<len;i+=col._rowspan){col=columns[i][0];col._first=true;}
return columns;}});},'3.15.0',{"requires":["datatable-core","view","classnamemanager"]});