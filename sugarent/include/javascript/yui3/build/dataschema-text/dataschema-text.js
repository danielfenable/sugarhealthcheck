/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('dataschema-text',function(Y,NAME){var Lang=Y.Lang,isString=Lang.isString,isUndef=Lang.isUndefined,SchemaText={apply:function(schema,data){var data_in=data,data_out={results:[],meta:{}};if(isString(data)&&schema&&isString(schema.resultDelimiter)){data_out=SchemaText._parseResults.call(this,schema,data_in,data_out);}else{data_out.error=new Error("Text schema parse failure");}
return data_out;},_parseResults:function(schema,text_in,data_out){var resultDelim=schema.resultDelimiter,fieldDelim=isString(schema.fieldDelimiter)&&schema.fieldDelimiter,fields=schema.resultFields||[],results=[],parse=Y.DataSchema.Base.parse,results_in,fields_in,result,item,field,key,value,i,j;if(text_in.slice(-resultDelim.length)===resultDelim){text_in=text_in.slice(0,-resultDelim.length);}
results_in=text_in.split(schema.resultDelimiter);if(fieldDelim){for(i=results_in.length-1;i>=0;--i){result={};item=results_in[i];fields_in=item.split(schema.fieldDelimiter);for(j=fields.length-1;j>=0;--j){field=fields[j];key=(!isUndef(field.key))?field.key:field;value=(!isUndef(fields_in[key]))?fields_in[key]:fields_in[j];result[key]=parse.call(this,value,field);}
results[i]=result;}}else{results=results_in;}
data_out.results=results;return data_out;}};Y.DataSchema.Text=Y.mix(SchemaText,Y.DataSchema.Base);},'3.15.0',{"requires":["dataschema-base"]});