/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('yql-winjs',function(Y,NAME){Y.YQLRequest.prototype._send=function(url,o){var req=new XMLHttpRequest(),timer;req.open('GET',url,true);req.onreadystatechange=function(){if(req.readyState===4){clearTimeout(timer);o.on.success(JSON.parse(req.responseText));}};req.send();timer=setTimeout(function(){req.abort();o.on.timeout('script timeout');},o.timeout||30000);};},'3.15.0');