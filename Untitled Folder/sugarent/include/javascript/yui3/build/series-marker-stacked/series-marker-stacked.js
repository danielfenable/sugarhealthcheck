/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('series-marker-stacked',function(Y,NAME){Y.StackedMarkerSeries=Y.Base.create("stackedMarkerSeries",Y.MarkerSeries,[Y.StackingUtil],{setAreaData:function()
{Y.StackedMarkerSeries.superclass.setAreaData.apply(this);this._stackCoordinates.apply(this);}},{ATTRS:{type:{value:"stackedMarker"}}});},'3.15.0',{"requires":["series-stacked","series-marker"]});