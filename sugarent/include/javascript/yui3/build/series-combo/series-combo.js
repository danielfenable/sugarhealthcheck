/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('series-combo',function(Y,NAME){Y.ComboSeries=Y.Base.create("comboSeries",Y.CartesianSeries,[Y.Fills,Y.Lines,Y.Plots],{drawSeries:function()
{if(this.get("showAreaFill"))
{this.drawFill.apply(this,this._getClosingPoints());}
if(this.get("showLines"))
{this.drawLines();}
if(this.get("showMarkers"))
{this.drawPlots();}},_toggleVisible:function(visible)
{var markers,marker,len,i;if(this.get("showAreaFill")&&this._path)
{this._path.set("visible",visible);}
if(this.get("showLines")&&this._lineGraphic)
{this._lineGraphic.set("visible",visible);}
if(this.get("showMarkers"))
{markers=this.get("markers");if(markers)
{i=0;len=markers.length;for(;i<len;++i)
{marker=markers[i];if(marker)
{marker.set("visible",visible);}}}}},_getDefaultStyles:function()
{var styles=Y.ComboSeries.superclass._getDefaultStyles();styles.line=this._getLineDefaults();styles.marker=this._getPlotDefaults();styles.area=this._getAreaDefaults();return styles;}},{ATTRS:{type:{value:"combo"},showAreaFill:{value:false},showLines:{value:true},showMarkers:{value:true},marker:{lazyAdd:false,getter:function()
{return this.get("styles").marker;},setter:function(val)
{this.set("styles",{marker:val});}},line:{lazyAdd:false,getter:function()
{return this.get("styles").line;},setter:function(val)
{this.set("styles",{line:val});}},area:{lazyAdd:false,getter:function()
{return this.get("styles").area;},setter:function(val)
{this.set("styles",{area:val});}}}});},'3.15.0',{"requires":["series-cartesian","series-line-util","series-plot-util","series-fill-util"]});