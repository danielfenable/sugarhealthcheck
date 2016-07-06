/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('yui-throttle',function(Y,NAME)
/*! Based on work by Simon Willison: http://gist.github.com/292562 */
{Y.throttle=function(fn,ms){ms=(ms)?ms:(Y.config.throttleTime||150);if(ms===-1){return function(){fn.apply(this,arguments);};}
var last=Y.Lang.now();return function(){var now=Y.Lang.now();if(now-last>ms){last=now;fn.apply(this,arguments);}};};},'3.15.0',{"requires":["yui-base"]});