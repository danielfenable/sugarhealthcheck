/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('datatable-table',function(Y,NAME){var toArray=Y.Array,YLang=Y.Lang,fromTemplate=YLang.sub,isArray=YLang.isArray,isFunction=YLang.isFunction;Y.namespace('DataTable').TableView=Y.Base.create('table',Y.View,[],{CAPTION_TEMPLATE:'<caption class="{className}"/>',TABLE_TEMPLATE:'<table cellspacing="0" class="{className}"/>',getCell:function(){return this.body&&this.body.getCell&&this.body.getCell.apply(this.body,arguments);},getClassName:function(){var host=this.host,NAME=(host&&host.constructor.NAME)||this.constructor.NAME;if(host&&host.getClassName){return host.getClassName.apply(host,arguments);}else{return Y.ClassNameManager.getClassName.apply(Y.ClassNameManager,[NAME].concat(toArray(arguments,0,true)));}},getRecord:function(){return this.body&&this.body.getRecord&&this.body.getRecord.apply(this.body,arguments);},getRow:function(){return this.body&&this.body.getRow&&this.body.getRow.apply(this.body,arguments);},_afterSummaryChange:function(e){this._uiSetSummary(e.newVal);},_afterCaptionChange:function(e){this._uiSetCaption(e.newVal);},_afterWidthChange:function(e){this._uiSetWidth(e.newVal);},_bindUI:function(){var relay;if(!this._eventHandles){relay=Y.bind('_relayAttrChange',this);this._eventHandles=this.after({columnsChange:relay,modelListChange:relay,summaryChange:Y.bind('_afterSummaryChange',this),captionChange:Y.bind('_afterCaptionChange',this),widthChange:Y.bind('_afterWidthChange',this)});}},_createTable:function(){return Y.Node.create(fromTemplate(this.TABLE_TEMPLATE,{className:this.getClassName('table')})).empty();},_defRenderBodyFn:function(e){e.view.render();},_defRenderFooterFn:function(e){e.view.render();},_defRenderHeaderFn:function(e){e.view.render();},_defRenderTableFn:function(e){var container=this.get('container'),attrs=this.getAttrs();if(!this.tableNode){this.tableNode=this._createTable();}
attrs.host=this.get('host')||this;attrs.table=this;attrs.container=this.tableNode;this._uiSetCaption(this.get('caption'));this._uiSetSummary(this.get('summary'));this._uiSetWidth(this.get('width'));if(this.head||e.headerView){if(!this.head){this.head=new e.headerView(Y.merge(attrs,e.headerConfig));}
this.fire('renderHeader',{view:this.head});}
if(this.foot||e.footerView){if(!this.foot){this.foot=new e.footerView(Y.merge(attrs,e.footerConfig));}
this.fire('renderFooter',{view:this.foot});}
attrs.columns=this.displayColumns;if(this.body||e.bodyView){if(!this.body){this.body=new e.bodyView(Y.merge(attrs,e.bodyConfig));}
this.fire('renderBody',{view:this.body});}
if(!container.contains(this.tableNode)){container.append(this.tableNode);}
this._bindUI();},destructor:function(){if(this.head&&this.head.destroy){this.head.destroy();}
delete this.head;if(this.foot&&this.foot.destroy){this.foot.destroy();}
delete this.foot;if(this.body&&this.body.destroy){this.body.destroy();}
delete this.body;if(this._eventHandles){this._eventHandles.detach();delete this._eventHandles;}
if(this.tableNode){this.tableNode.remove().destroy(true);}},_extractDisplayColumns:function(){var columns=this.get('columns'),displayColumns=[];function process(cols){var i,len,col;for(i=0,len=cols.length;i<len;++i){col=cols[i];if(isArray(col.children)){process(col.children);}else{displayColumns.push(col);}}}
if(columns){process(columns);}
this.displayColumns=displayColumns;},_initEvents:function(){this.publish({renderTable:{defaultFn:Y.bind('_defRenderTableFn',this)},renderHeader:{defaultFn:Y.bind('_defRenderHeaderFn',this)},renderBody:{defaultFn:Y.bind('_defRenderBodyFn',this)},renderFooter:{defaultFn:Y.bind('_defRenderFooterFn',this)}});},initializer:function(config){this.host=config.host;this._initEvents();this._extractDisplayColumns();this.after('columnsChange',this._extractDisplayColumns,this);},_relayAttrChange:function(e){var attr=e.attrName,val=e.newVal;if(this.head){this.head.set(attr,val);}
if(this.foot){this.foot.set(attr,val);}
if(this.body){if(attr==='columns'){val=this.displayColumns;}
this.body.set(attr,val);}},render:function(){if(this.get('container')){this.fire('renderTable',{headerView:this.get('headerView'),headerConfig:this.get('headerConfig'),bodyView:this.get('bodyView'),bodyConfig:this.get('bodyConfig'),footerView:this.get('footerView'),footerConfig:this.get('footerConfig')});}
return this;},_uiSetCaption:function(htmlContent){var table=this.tableNode,caption=this.captionNode;if(htmlContent){if(!caption){this.captionNode=caption=Y.Node.create(fromTemplate(this.CAPTION_TEMPLATE,{className:this.getClassName('caption')}));table.prepend(this.captionNode);}
caption.setHTML(htmlContent);}else if(caption){caption.remove(true);delete this.captionNode;}},_uiSetSummary:function(summary){if(summary){this.tableNode.setAttribute('summary',summary);}else{this.tableNode.removeAttribute('summary');}},_uiSetWidth:function(width){var table=this.tableNode;table.setStyle('width',!width?'':(this.get('container').get('offsetWidth')-
(parseInt(table.getComputedStyle('borderLeftWidth'),10)||0)-
(parseInt(table.getComputedStyle('borderLeftWidth'),10)||0))+'px');table.setStyle('width',width);},_validateView:function(val){return isFunction(val)&&val.prototype.render;}},{ATTRS:{columns:{validator:isArray},width:{value:'',validator:YLang.isString},headerView:{value:Y.DataTable.HeaderView,validator:'_validateView'},footerView:{validator:'_validateView'},bodyView:{value:Y.DataTable.BodyView,validator:'_validateView'}}});},'3.15.0',{"requires":["datatable-core","datatable-head","datatable-body","view","classnamemanager"]});