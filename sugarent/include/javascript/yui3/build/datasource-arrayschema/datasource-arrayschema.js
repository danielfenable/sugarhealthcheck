/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('datasource-arrayschema',function(Y,NAME){var DataSourceArraySchema=function(){DataSourceArraySchema.superclass.constructor.apply(this,arguments);};Y.mix(DataSourceArraySchema,{NS:"schema",NAME:"dataSourceArraySchema",ATTRS:{schema:{}}});Y.extend(DataSourceArraySchema,Y.Plugin.Base,{initializer:function(config){this.doBefore("_defDataFn",this._beforeDefDataFn);},_beforeDefDataFn:function(e){var data=(Y.DataSource.IO&&(this.get("host")instanceof Y.DataSource.IO)&&Y.Lang.isString(e.data.responseText))?e.data.responseText:e.data,response=Y.DataSchema.Array.apply.call(this,this.get("schema"),data),payload=e.details[0];if(!response){response={meta:{},results:data};}
payload.response=response;this.get("host").fire("response",payload);return new Y.Do.Halt("DataSourceArraySchema plugin halted _defDataFn");}});Y.namespace('Plugin').DataSourceArraySchema=DataSourceArraySchema;},'3.15.0',{"requires":["datasource-local","plugin","dataschema-array"]});