/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('series-combospline',function(Y,NAME){Y.ComboSplineSeries=Y.Base.create("comboSplineSeries",Y.ComboSeries,[Y.CurveUtil],{drawSeries:function()
{if(this.get("showAreaFill"))
{this.drawAreaSpline();}
if(this.get("showLines"))
{this.drawSpline();}
if(this.get("showMarkers"))
{this.drawPlots();}}},{ATTRS:{type:{value:"comboSpline"}}});},'3.15.0',{"requires":["series-combo","series-curve-util"]});