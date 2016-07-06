/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('datasource-xmlschema',function(Y,NAME){var DataSourceXMLSchema=function(){DataSourceXMLSchema.superclass.constructor.apply(this,arguments);};Y.mix(DataSourceXMLSchema,{NS:"schema",NAME:"dataSourceXMLSchema",ATTRS:{schema:{}}});Y.extend(DataSourceXMLSchema,Y.Plugin.Base,{initializer:function(config){this.doBefore("_defDataFn",this._beforeDefDataFn);},_beforeDefDataFn:function(e){var schema=this.get('schema'),payload=e.details[0],data=Y.XML.parse(e.data.responseText)||e.data;payload.response=Y.DataSchema.XML.apply.call(this,schema,data)||{meta:{},results:data};this.get("host").fire("response",payload);return new Y.Do.Halt("DataSourceXMLSchema plugin halted _defDataFn");}});Y.namespace('Plugin').DataSourceXMLSchema=DataSourceXMLSchema;},'3.15.0',{"requires":["datasource-local","plugin","datatype-xml","dataschema-xml"]});