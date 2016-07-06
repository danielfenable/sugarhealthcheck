/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('event-key',function(Y,NAME){var ALT="+alt",CTRL="+ctrl",META="+meta",SHIFT="+shift",trim=Y.Lang.trim,eventDef={KEY_MAP:{enter:13,esc:27,backspace:8,tab:9,pageup:33,pagedown:34},_typeRE:/^(up|down|press):/,_keysRE:/^(?:up|down|press):|\+(alt|ctrl|meta|shift)/g,processArgs:function(args){var spec=args.splice(3,1)[0],mods=Y.Array.hash(spec.match(/\+(?:alt|ctrl|meta|shift)\b/g)||[]),config={type:this._typeRE.test(spec)?RegExp.$1:null,mods:mods,keys:null},bits=spec.replace(this._keysRE,''),chr,uc,lc,i;if(bits){bits=bits.split(',');config.keys={};for(i=bits.length-1;i>=0;--i){chr=trim(bits[i]);if(!chr){continue;}
if(+chr==chr){config.keys[chr]=mods;}else{lc=chr.toLowerCase();if(this.KEY_MAP[lc]){config.keys[this.KEY_MAP[lc]]=mods;if(!config.type){config.type="down";}}else{chr=chr.charAt(0);uc=chr.toUpperCase();if(mods["+shift"]){chr=uc;}
config.keys[chr.charCodeAt(0)]=(chr===uc)?Y.merge(mods,{"+shift":true}):mods;}}}}
if(!config.type){config.type="press";}
return config;},on:function(node,sub,notifier,filter){var spec=sub._extra,type="key"+spec.type,keys=spec.keys,method=(filter)?"delegate":"on";sub._detach=node[method](type,function(e){var key=keys?keys[e.which]:spec.mods;if(key&&(!key[ALT]||(key[ALT]&&e.altKey))&&(!key[CTRL]||(key[CTRL]&&e.ctrlKey))&&(!key[META]||(key[META]&&e.metaKey))&&(!key[SHIFT]||(key[SHIFT]&&e.shiftKey)))
{notifier.fire(e);}},filter);},detach:function(node,sub,notifier){sub._detach.detach();}};eventDef.delegate=eventDef.on;eventDef.detachDelegate=eventDef.detach;Y.Event.define('key',eventDef,true);},'3.15.0',{"requires":["event-synthetic"]});