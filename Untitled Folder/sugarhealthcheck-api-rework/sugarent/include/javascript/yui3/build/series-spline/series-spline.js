/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('series-spline',function(Y,NAME){Y.SplineSeries=Y.Base.create("splineSeries",Y.LineSeries,[Y.CurveUtil,Y.Lines],{drawSeries:function()
{this.drawSpline();}},{ATTRS:{type:{value:"spline"}}});},'3.15.0',{"requires":["series-line","series-curve-util"]});