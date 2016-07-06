/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('yql-nodejs',function(Y,NAME){var request=require('request');Y.YQLRequest.prototype._send=function(url,o){request(url,{method:'GET',timeout:o.timeout||(30*1000)},function(err,res){if(err){o.on.success({error:err});}else{o.on.success(JSON.parse(res.body));}});};},'3.15.0');