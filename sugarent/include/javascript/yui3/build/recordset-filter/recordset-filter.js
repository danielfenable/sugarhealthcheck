/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('recordset-filter',function(Y,NAME){var YArray=Y.Array,Lang=Y.Lang;function RecordsetFilter(config){RecordsetFilter.superclass.constructor.apply(this,arguments);}
Y.mix(RecordsetFilter,{NS:"filter",NAME:"recordsetFilter",ATTRS:{}});Y.extend(RecordsetFilter,Y.Plugin.Base,{filter:function(filter,value){var recs=this.get('host').get('records'),key;if(value&&Lang.isString(filter)){key=filter;filter=function(item){return(item.getValue(key)===value);};}
return new Y.Recordset({records:YArray.filter(recs,filter)});},reject:function(filter){return new Y.Recordset({records:YArray.reject(this.get('host').get('records'),filter)});},grep:function(pattern){return new Y.Recordset({records:YArray.grep(this.get('host').get('records'),pattern)});}});Y.namespace("Plugin").RecordsetFilter=RecordsetFilter;},'3.15.0',{"requires":["recordset-base","array-extras","plugin"]});