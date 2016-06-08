/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('uploader',function(Y,NAME){var Win=Y.config.win;if(Win&&Win.File&&Win.FormData&&Win.XMLHttpRequest){Y.Uploader=Y.UploaderHTML5;}
else if(Y.SWFDetect.isFlashVersionAtLeast(10,0,45)){Y.Uploader=Y.UploaderFlash;}
else{Y.namespace("Uploader");Y.Uploader.TYPE="none";}},'3.15.0',{"requires":["uploader-html5","uploader-flash"]});