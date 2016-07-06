/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('datasource-textschema',function(Y,NAME){var DataSourceTextSchema=function(){DataSourceTextSchema.superclass.constructor.apply(this,arguments);};Y.mix(DataSourceTextSchema,{NS:"schema",NAME:"dataSourceTextSchema",ATTRS:{schema:{}}});Y.extend(DataSourceTextSchema,Y.Plugin.Base,{initializer:function(config){this.doBefore("_defDataFn",this._beforeDefDataFn);},_beforeDefDataFn:function(e){var schema=this.get('schema'),payload=e.details[0],data=e.data.responseText||e.data;payload.response=Y.DataSchema.Text.apply.call(this,schema,data)||{meta:{},results:data};this.get("host").fire("response",payload);return new Y.Do.Halt("DataSourceTextSchema plugin halted _defDataFn");}});Y.namespace('Plugin').DataSourceTextSchema=DataSourceTextSchema;},'3.15.0',{"requires":["datasource-local","plugin","dataschema-text"]});