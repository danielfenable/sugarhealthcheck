/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('highlight-accentfold',function(Y,NAME){var AccentFold=Y.Text.AccentFold,Escape=Y.Escape,EMPTY_OBJECT={},Highlight=Y.mix(Y.Highlight,{allFold:function(haystack,needles,options){var template=Highlight._TEMPLATE,results=[],startPos=0,chunk,i,len,match,result;options=Y.merge({escapeHTML:false,replacer:function(match,p1,foldedNeedle,pos){var len;if(p1&&!(/\s/).test(foldedNeedle)){return match;}
len=foldedNeedle.length;results.push([haystack.substring(startPos,pos),haystack.substr(pos,len)]);startPos=pos+len;}},options||EMPTY_OBJECT);Highlight.all(AccentFold.fold(haystack),AccentFold.fold(needles),options);if(startPos<haystack.length){results.push([haystack.substr(startPos)]);}
for(i=0,len=results.length;i<len;++i){chunk=Escape.html(results[i][0]);if((match=results[i][1])){chunk+=template.replace(/\{s\}/g,Escape.html(match));}
results[i]=chunk;}
return results.join('');},startFold:function(haystack,needles){return Highlight.allFold(haystack,needles,{startsWith:true});},wordsFold:function(haystack,needles){var template=Highlight._TEMPLATE;return Highlight.words(haystack,AccentFold.fold(needles),{mapper:function(word,needles){if(needles.hasOwnProperty(AccentFold.fold(word))){return template.replace(/\{s\}/g,Escape.html(word));}
return Escape.html(word);}});}});},'3.15.0',{"requires":["highlight-base","text-accentfold"]});