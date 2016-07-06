/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('dd-gestures',function(Y,NAME){Y.DD.Drag.START_EVENT='gesturemovestart';Y.DD.Drag.prototype._prep=function(){this._dragThreshMet=false;var node=this.get('node'),DDM=Y.DD.DDM;node.addClass(DDM.CSS_PREFIX+'-draggable');node.on(Y.DD.Drag.START_EVENT,Y.bind(this._handleMouseDownEvent,this),{minDistance:this.get('clickPixelThresh'),minTime:this.get('clickTimeThresh')});node.on('gesturemoveend',Y.bind(this._handleMouseUp,this),{standAlone:true});node.on('dragstart',Y.bind(this._fixDragStart,this));};var _unprep=Y.DD.Drag.prototype._unprep;Y.DD.Drag.prototype._unprep=function(){var node=this.get('node');_unprep.call(this);node.detachAll('gesturemoveend');};Y.DD.DDM._setupListeners=function(){var DDM=Y.DD.DDM;this._createPG();this._active=true;Y.one(Y.config.doc).on('gesturemove',Y.throttle(Y.bind(DDM._move,DDM),DDM.get('throttleTime')),{standAlone:true,preventDefault:true});};},'3.15.0',{"requires":["dd-drag","event-synthetic","event-gestures"]});