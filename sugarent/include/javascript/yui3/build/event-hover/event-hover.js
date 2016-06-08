/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('event-hover',function(Y,NAME){var isFunction=Y.Lang.isFunction,noop=function(){},conf={processArgs:function(args){var i=isFunction(args[2])?2:3;return(isFunction(args[i]))?args.splice(i,1)[0]:noop;},on:function(node,sub,notifier,filter){var args=(sub.args)?sub.args.slice():[];args.unshift(null);sub._detach=node[(filter)?"delegate":"on"]({mouseenter:function(e){e.phase='over';notifier.fire(e);},mouseleave:function(e){var thisObj=sub.context||this;args[0]=e;e.type='hover';e.phase='out';sub._extra.apply(thisObj,args);}},filter);},detach:function(node,sub,notifier){sub._detach.detach();}};conf.delegate=conf.on;conf.detachDelegate=conf.detach;Y.Event.define("hover",conf);},'3.15.0',{"requires":["event-mouseenter"]});