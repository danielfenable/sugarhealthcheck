/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('dataschema-json',function(Y,NAME){var LANG=Y.Lang,isFunction=LANG.isFunction,isObject=LANG.isObject,isArray=LANG.isArray,Base=Y.DataSchema.Base,SchemaJSON;SchemaJSON={getPath:function(locator){var path=null,keys=[],i=0;if(locator){locator=locator.replace(/\[\s*(['"])(.*?)\1\s*\]/g,function(x,$1,$2){keys[i]=$2;return'.@'+(i++);}).replace(/\[(\d+)\]/g,function(x,$1){keys[i]=parseInt($1,10)|0;return'.@'+(i++);}).replace(/^\./,'');path=locator.split('.');for(i=path.length-1;i>=0;--i){if(path[i].charAt(0)==='@'){path[i]=keys[parseInt(path[i].substr(1),10)];}}}
return path;},getLocationValue:function(path,data){var i=0,len=path.length;for(;i<len;i++){if(isObject(data)&&(path[i]in data)){data=data[path[i]];}else{data=undefined;break;}}
return data;},apply:function(schema,data){var data_in=data,data_out={results:[],meta:{}};if(!isObject(data)){try{data_in=Y.JSON.parse(data);}
catch(e){data_out.error=e;return data_out;}}
if(isObject(data_in)&&schema){data_out=SchemaJSON._parseResults.call(this,schema,data_in,data_out);if(schema.metaFields!==undefined){data_out=SchemaJSON._parseMeta(schema.metaFields,data_in,data_out);}}
else{data_out.error=new Error("JSON schema parse failure");}
return data_out;},_parseResults:function(schema,json_in,data_out){var getPath=SchemaJSON.getPath,getValue=SchemaJSON.getLocationValue,path=getPath(schema.resultListLocator),results=path?(getValue(path,json_in)||json_in[schema.resultListLocator]):json_in;if(isArray(results)){if(isArray(schema.resultFields)){data_out=SchemaJSON._getFieldValues.call(this,schema.resultFields,results,data_out);}else{data_out.results=results;}}else if(schema.resultListLocator){data_out.results=[];data_out.error=new Error("JSON results retrieval failure");}
return data_out;},_getFieldValues:function(fields,array_in,data_out){var results=[],len=fields.length,i,j,field,key,locator,path,parser,val,simplePaths=[],complexPaths=[],fieldParsers=[],result,record;for(i=0;i<len;i++){field=fields[i];key=field.key||field;locator=field.locator||key;path=SchemaJSON.getPath(locator);if(path){if(path.length===1){simplePaths.push({key:key,path:path[0]});}else{complexPaths.push({key:key,path:path,locator:locator});}}else{}
parser=(isFunction(field.parser))?field.parser:Y.Parsers[field.parser+''];if(parser){fieldParsers.push({key:key,parser:parser});}}
for(i=array_in.length-1;i>=0;--i){record={};result=array_in[i];if(result){for(j=complexPaths.length-1;j>=0;--j){path=complexPaths[j];val=SchemaJSON.getLocationValue(path.path,result);if(val===undefined){val=SchemaJSON.getLocationValue([path.locator],result);if(val!==undefined){simplePaths.push({key:path.key,path:path.locator});complexPaths.splice(i,1);continue;}}
record[path.key]=Base.parse.call(this,(SchemaJSON.getLocationValue(path.path,result)),path);}
for(j=simplePaths.length-1;j>=0;--j){path=simplePaths[j];record[path.key]=Base.parse.call(this,((result[path.path]===undefined)?result[j]:result[path.path]),path);}
for(j=fieldParsers.length-1;j>=0;--j){key=fieldParsers[j].key;record[key]=fieldParsers[j].parser.call(this,record[key]);if(record[key]===undefined){record[key]=null;}}
results[i]=record;}}
data_out.results=results;return data_out;},_parseMeta:function(metaFields,json_in,data_out){if(isObject(metaFields)){var key,path;for(key in metaFields){if(metaFields.hasOwnProperty(key)){path=SchemaJSON.getPath(metaFields[key]);if(path&&json_in){data_out.meta[key]=SchemaJSON.getLocationValue(path,json_in);}}}}
else{data_out.error=new Error("JSON meta data retrieval failure");}
return data_out;}};Y.DataSchema.JSON=Y.mix(SchemaJSON,Base);},'3.15.0',{"requires":["dataschema-base","json"]});