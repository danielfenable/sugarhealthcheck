/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('dataschema-base',function(Y,NAME){var LANG=Y.Lang,SchemaBase={apply:function(schema,data){return data;},parse:function(value,field){if(field.parser){var parser=(LANG.isFunction(field.parser))?field.parser:Y.Parsers[field.parser+''];if(parser){value=parser.call(this,value);}
else{}}
return value;}};Y.namespace("DataSchema").Base=SchemaBase;Y.namespace("Parsers");},'3.15.0',{"requires":["base"]});