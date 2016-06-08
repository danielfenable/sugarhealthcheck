/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('loader-rollup',function(Y,NAME){Y.Loader.prototype._rollup=function(){var i,j,m,s,r=this.required,roll,info=this.moduleInfo,rolled,c,smod;if(this.dirty||!this.rollups){this.rollups={};for(i in info){if(info.hasOwnProperty(i)){m=this.getModule(i);if(m&&m.rollup){this.rollups[i]=m;}}}}
for(;;){rolled=false;for(i in this.rollups){if(this.rollups.hasOwnProperty(i)){if(!r[i]&&((!this.loaded[i])||this.forceMap[i])){m=this.getModule(i);s=m.supersedes||[];roll=false;if(!m.rollup){continue;}
c=0;for(j=0;j<s.length;j++){smod=info[s[j]];if(this.loaded[s[j]]&&!this.forceMap[s[j]]){roll=false;break;}else if(r[s[j]]&&m.type===smod.type){c++;roll=(c>=m.rollup);if(roll){break;}}}
if(roll){r[i]=true;rolled=true;this.getRequires(m);}}}}
if(!rolled){break;}}};},'@VERSION@',{"requires":["loader-base"]});