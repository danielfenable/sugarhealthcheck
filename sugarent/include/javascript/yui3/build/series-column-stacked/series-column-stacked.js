/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('series-column-stacked',function(Y,NAME){var Y_Lang=Y.Lang;Y.StackedColumnSeries=Y.Base.create("stackedColumnSeries",Y.ColumnSeries,[Y.StackingUtil],{drawSeries:function()
{if(this.get("xcoords").length<1)
{return;}
var isNumber=Y_Lang.isNumber,style=this._copyObject(this.get("styles").marker),w=style.width,h=style.height,xcoords=this.get("xcoords"),ycoords=this.get("ycoords"),i=0,len=xcoords.length,top=ycoords[0],seriesCollection=this.get("seriesTypeCollection"),ratio,order=this.get("order"),graphOrder=this.get("graphOrder"),left,marker,fillColors,borderColors,lastCollection,negativeBaseValues,positiveBaseValues,useOrigin=order===0,totalWidth=len*w,dimensions={width:[],height:[]},xvalues=[],yvalues=[],groupMarkers=this.get("groupMarkers");if(Y_Lang.isArray(style.fill.color))
{fillColors=style.fill.color.concat();}
if(Y_Lang.isArray(style.border.color))
{borderColors=style.border.color.concat();}
this._createMarkerCache();if(totalWidth>this.get("width"))
{ratio=this.get("width")/totalWidth;w*=ratio;w=Math.max(w,1);}
if(!useOrigin)
{lastCollection=seriesCollection[order-1];negativeBaseValues=lastCollection.get("negativeBaseValues");positiveBaseValues=lastCollection.get("positiveBaseValues");if(!negativeBaseValues||!positiveBaseValues)
{useOrigin=true;positiveBaseValues=[];negativeBaseValues=[];}}
else
{negativeBaseValues=[];positiveBaseValues=[];}
this.set("negativeBaseValues",negativeBaseValues);this.set("positiveBaseValues",positiveBaseValues);for(i=0;i<len;++i)
{left=xcoords[i];top=ycoords[i];if(!isNumber(top)||!isNumber(left))
{if(useOrigin)
{negativeBaseValues[i]=this._bottomOrigin;positiveBaseValues[i]=this._bottomOrigin;}
this._markers.push(null);continue;}
if(useOrigin)
{h=Math.abs(this._bottomOrigin-top);if(top<this._bottomOrigin)
{positiveBaseValues[i]=top;negativeBaseValues[i]=this._bottomOrigin;}
else if(top>this._bottomOrigin)
{positiveBaseValues[i]=this._bottomOrigin;negativeBaseValues[i]=top;top-=h;}
else
{positiveBaseValues[i]=top;negativeBaseValues[i]=top;}}
else
{if(top>this._bottomOrigin)
{top+=(negativeBaseValues[i]-this._bottomOrigin);h=top-negativeBaseValues[i];negativeBaseValues[i]=top;top-=h;}
else if(top<=this._bottomOrigin)
{top=positiveBaseValues[i]-(this._bottomOrigin-top);h=positiveBaseValues[i]-top;positiveBaseValues[i]=top;}}
if(!isNaN(h)&&h>0)
{left-=w/2;if(groupMarkers)
{dimensions.width[i]=w;dimensions.height[i]=h;xvalues.push(left);yvalues.push(top);}
else
{style.width=w;style.height=h;style.x=left;style.y=top;if(fillColors)
{style.fill.color=fillColors[i%fillColors.length];}
if(borderColors)
{style.border.color=borderColors[i%borderColors.length];}
marker=this.getMarker(style,graphOrder,i);}}
else if(!groupMarkers)
{this._markers.push(null);}}
if(groupMarkers)
{this._createGroupMarker({fill:style.fill,border:style.border,dimensions:dimensions,xvalues:xvalues,yvalues:yvalues,shape:style.shape});}
else
{this._clearMarkerCache();}},updateMarkerState:function(type,i)
{if(this._markers&&this._markers[i])
{var styles,markerStyles,state=this._getState(type),xcoords=this.get("xcoords"),marker=this._markers[i],offset=0,fillColor,borderColor;styles=this.get("styles").marker;offset=styles.width*0.5;markerStyles=state==="off"||!styles[state]?this._copyObject(styles):this._copyObject(styles[state]);markerStyles.height=marker.get("height");markerStyles.x=(xcoords[i]-offset);markerStyles.y=marker.get("y");markerStyles.id=marker.get("id");fillColor=markerStyles.fill.color;borderColor=markerStyles.border.color;if(Y_Lang.isArray(fillColor))
{markerStyles.fill.color=fillColor[i%fillColor.length];}
else
{markerStyles.fill.color=this._getItemColor(markerStyles.fill.color,i);}
if(Y_Lang.isArray(borderColor))
{markerStyles.border.color=borderColor[i%borderColor.length];}
else
{markerStyles.border.color=this._getItemColor(markerStyles.border.color,i);}
marker.set(markerStyles);}},_getPlotDefaults:function()
{var defs={fill:{type:"solid",alpha:1,colors:null,alphas:null,ratios:null},border:{weight:0,alpha:1},width:24,height:24,shape:"rect",padding:{top:0,left:0,right:0,bottom:0}};defs.fill.color=this._getDefaultColor(this.get("graphOrder"),"fill");defs.border.color=this._getDefaultColor(this.get("graphOrder"),"border");return defs;}},{ATTRS:{type:{value:"stackedColumn"},negativeBaseValues:{value:null},positiveBaseValues:{value:null}}});},'3.15.0',{"requires":["series-stacked","series-column"]});