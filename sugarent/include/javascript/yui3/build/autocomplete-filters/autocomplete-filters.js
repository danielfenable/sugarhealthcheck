/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('autocomplete-filters',function(Y,NAME){var YArray=Y.Array,YObject=Y.Object,WordBreak=Y.Text.WordBreak,Filters=Y.mix(Y.namespace('AutoCompleteFilters'),{charMatch:function(query,results,caseSensitive){if(!query){return results;}
var queryChars=YArray.unique((caseSensitive?query:query.toLowerCase()).split(''));return YArray.filter(results,function(result){result=result.text;if(!caseSensitive){result=result.toLowerCase();}
return YArray.every(queryChars,function(chr){return result.indexOf(chr)!==-1;});});},charMatchCase:function(query,results){return Filters.charMatch(query,results,true);},phraseMatch:function(query,results,caseSensitive){if(!query){return results;}
if(!caseSensitive){query=query.toLowerCase();}
return YArray.filter(results,function(result){return(caseSensitive?result.text:result.text.toLowerCase()).indexOf(query)!==-1;});},phraseMatchCase:function(query,results){return Filters.phraseMatch(query,results,true);},startsWith:function(query,results,caseSensitive){if(!query){return results;}
if(!caseSensitive){query=query.toLowerCase();}
return YArray.filter(results,function(result){return(caseSensitive?result.text:result.text.toLowerCase()).indexOf(query)===0;});},startsWithCase:function(query,results){return Filters.startsWith(query,results,true);},subWordMatch:function(query,results,caseSensitive){if(!query){return results;}
var queryWords=WordBreak.getUniqueWords(query,{ignoreCase:!caseSensitive});return YArray.filter(results,function(result){var resultText=caseSensitive?result.text:result.text.toLowerCase();return YArray.every(queryWords,function(queryWord){return resultText.indexOf(queryWord)!==-1;});});},subWordMatchCase:function(query,results){return Filters.subWordMatch(query,results,true);},wordMatch:function(query,results,caseSensitive){if(!query){return results;}
var options={ignoreCase:!caseSensitive},queryWords=WordBreak.getUniqueWords(query,options);return YArray.filter(results,function(result){var resultWords=YArray.hash(WordBreak.getUniqueWords(result.text,options));return YArray.every(queryWords,function(word){return YObject.owns(resultWords,word);});});},wordMatchCase:function(query,results){return Filters.wordMatch(query,results,true);}});},'3.15.0',{"requires":["array-extras","text-wordbreak"]});