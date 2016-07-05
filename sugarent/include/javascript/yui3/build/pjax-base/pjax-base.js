/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('pjax-base',function(Y,NAME){var win=Y.config.win,CLASS_PJAX=Y.ClassNameManager.getClassName('pjax'),EVT_NAVIGATE='navigate';function PjaxBase(){}
PjaxBase.prototype={initializer:function(){this.publish(EVT_NAVIGATE,{defaultFn:this._defNavigateFn});if(this.get('html5')){this._pjaxBindUI();}},destructor:function(){if(this._pjaxEvents){this._pjaxEvents.detach();}},navigate:function(url,options){url=this._resolveURL(url);if(this._navigate(url,options)){return true;}
if(!this._hasSameOrigin(url)){Y.error('Security error: The new URL must be of the same origin as the current URL.');}
return false;},_isLinkSameOrigin:function(link){var location=Y.getLocation(),protocol=location.protocol,hostname=location.hostname,port=parseInt(location.port,10)||null,linkPort;if(link.get('protocol')!==protocol||link.get('hostname')!==hostname){return false;}
linkPort=parseInt(link.get('port'),10)||null;if(protocol==='http:'){port||(port=80);linkPort||(linkPort=80);}else if(protocol==='https:'){port||(port=443);linkPort||(linkPort=443);}
return linkPort===port;},_navigate:function(url,options){url=this._upgradeURL(url);if(!this.hasRoute(url)){return false;}
options=Y.merge(options,{url:url});var currentURL=this._getURL(),hash,hashlessURL;hashlessURL=url.replace(/(#.*)$/,function(u,h,i){hash=h;return u.substring(i);});if(hash&&hashlessURL===currentURL.replace(/#.*$/,'')){if(!this.get('navigateOnHash')){return false;}
options.hash=hash;}'replace'in options||(options.replace=url===currentURL);if(this.get('html5')||options.force){this.fire(EVT_NAVIGATE,options);}else if(win){if(options.replace){win.location.replace(url);}else{win.location=url;}}
return true;},_pjaxBindUI:function(){if(!this._pjaxEvents){this._pjaxEvents=Y.one('body').delegate('click',this._onLinkClick,this.get('linkSelector'),this);}},_defNavigateFn:function(e){this[e.replace?'replace':'save'](e.url);if(win&&this.get('scrollToTop')){setTimeout(function(){win.scroll(0,0);},1);}},_onLinkClick:function(e){var link,url,navigated;if(e.button!==1||e.ctrlKey||e.metaKey){return;}
link=e.currentTarget;if(link.get('tagName').toUpperCase()!=='A'){return;}
if(!this._isLinkSameOrigin(link)){return;}
url=link.get('href');if(url){navigated=this._navigate(url,{originEvent:e});if(navigated){e.preventDefault();}}}};PjaxBase.ATTRS={linkSelector:{value:'a.'+CLASS_PJAX,writeOnce:'initOnly'},navigateOnHash:{value:false},scrollToTop:{value:true}};Y.PjaxBase=PjaxBase;},'3.15.0',{"requires":["classnamemanager","node-event-delegate","router"]});