/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('autocomplete-filters-accentfold',function(Y,NAME){var AccentFold=Y.Text.AccentFold,WordBreak=Y.Text.WordBreak,YArray=Y.Array,YObject=Y.Object;Y.mix(Y.namespace('AutoCompleteFilters'),{charMatchFold:function(query,results){if(!query){return results;}
var queryChars=YArray.unique(AccentFold.fold(query).split(''));return YArray.filter(results,function(result){var text=AccentFold.fold(result.text);return YArray.every(queryChars,function(chr){return text.indexOf(chr)!==-1;});});},phraseMatchFold:function(query,results){if(!query){return results;}
query=AccentFold.fold(query);return YArray.filter(results,function(result){return AccentFold.fold(result.text).indexOf(query)!==-1;});},startsWithFold:function(query,results){if(!query){return results;}
query=AccentFold.fold(query);return YArray.filter(results,function(result){return AccentFold.fold(result.text).indexOf(query)===0;});},subWordMatchFold:function(query,results){if(!query){return results;}
var queryWords=WordBreak.getUniqueWords(AccentFold.fold(query));return YArray.filter(results,function(result){var resultText=AccentFold.fold(result.text);return YArray.every(queryWords,function(queryWord){return resultText.indexOf(queryWord)!==-1;});});},wordMatchFold:function(query,results){if(!query){return results;}
var queryWords=WordBreak.getUniqueWords(AccentFold.fold(query));return YArray.filter(results,function(result){var resultWords=YArray.hash(WordBreak.getUniqueWords(AccentFold.fold(result.text)));return YArray.every(queryWords,function(word){return YObject.owns(resultWords,word);});});}});},'3.15.0',{"requires":["array-extras","text-accentfold","text-wordbreak"]});