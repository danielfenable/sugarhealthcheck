/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('series-pie',function(Y,NAME){var CONFIG=Y.config,DOCUMENT=CONFIG.doc,_getClassName=Y.ClassNameManager.getClassName,SERIES_MARKER=_getClassName("seriesmarker");Y.PieSeries=Y.Base.create("pieSeries",Y.SeriesBase,[Y.Plots],{_map:null,_image:null,_setMap:function()
{var id="pieHotSpotMapi_"+Math.round(100000*Math.random()),graph=this.get("graph"),graphic,cb,areaNode;if(graph)
{cb=graph.get("contentBox");}
else
{graphic=this.get("graphic");cb=graphic.get("node");}
if(this._image)
{cb.removeChild(this._image);while(this._areaNodes&&this._areaNodes.length>0)
{areaNode=this._areaNodes.shift();this._map.removeChild(areaNode);}
cb.removeChild(this._map);}
this._image=DOCUMENT.createElement("img");this._image.src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAYAAAABCAYAAAD9yd/wAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSB"+"JbWFnZVJlYWR5ccllPAAAABJJREFUeNpiZGBgSGPAAgACDAAIkABoFyloZQAAAABJRU5ErkJggg==";cb.appendChild(this._image);this._image.style.position="absolute";this._image.style.left="0px";this._image.style.top="0px";this._image.setAttribute("usemap","#"+id);this._image.style.zIndex=3;this._image.style.opacity=0;this._image.setAttribute("alt","imagemap");this._map=DOCUMENT.createElement("map");cb.appendChild(this._map);this._map.setAttribute("name",id);this._map.setAttribute("id",id);this._areaNodes=[];},_categoryDisplayName:null,_valueDisplayName:null,addListeners:function()
{var categoryAxis=this.get("categoryAxis"),valueAxis=this.get("valueAxis");if(categoryAxis)
{categoryAxis.after("dataReady",Y.bind(this._categoryDataChangeHandler,this));categoryAxis.after("dataUpdate",Y.bind(this._categoryDataChangeHandler,this));}
if(valueAxis)
{valueAxis.after("dataReady",Y.bind(this._valueDataChangeHandler,this));valueAxis.after("dataUpdate",Y.bind(this._valueDataChangeHandler,this));}
this.after("categoryAxisChange",this.categoryAxisChangeHandler);this.after("valueAxisChange",this.valueAxisChangeHandler);this._stylesChangeHandle=this.after("stylesChange",this._updateHandler);this._visibleChangeHandle=this.after("visibleChange",this._handleVisibleChange);},validate:function()
{this.draw();this._renderered=true;},_categoryAxisChangeHandler:function()
{var categoryAxis=this.get("categoryAxis");categoryAxis.after("dataReady",Y.bind(this._categoryDataChangeHandler,this));categoryAxis.after("dataUpdate",Y.bind(this._categoryDataChangeHandler,this));},_valueAxisChangeHandler:function()
{var valueAxis=this.get("valueAxis");valueAxis.after("dataReady",Y.bind(this._valueDataChangeHandler,this));valueAxis.after("dataUpdate",Y.bind(this._valueDataChangeHandler,this));},GUID:"pieseries",_categoryDataChangeHandler:function()
{if(this._rendered&&this.get("categoryKey")&&this.get("valueKey"))
{this.draw();}},_valueDataChangeHandler:function()
{if(this._rendered&&this.get("categoryKey")&&this.get("valueKey"))
{this.draw();}},getTotalValues:function()
{var total=this.get("valueAxis").getTotalByKey(this.get("valueKey"));return total;},draw:function()
{var w=this.get("width"),h=this.get("height");if(isFinite(w)&&isFinite(h)&&w>0&&h>0)
{this._rendered=true;if(this._drawing)
{this._callLater=true;return;}
this._drawing=true;this._callLater=false;this.drawSeries();this._drawing=false;if(this._callLater)
{this.draw();}
else
{this.fire("drawingComplete");}}},drawPlots:function()
{var values=this.get("valueAxis").getDataByKey(this.get("valueKey")).concat(),totalValue=0,itemCount=values.length,styles=this.get("styles").marker,fillColors=styles.fill.colors,fillAlphas=styles.fill.alphas||["1"],borderColors=styles.border.colors,borderWeights=[styles.border.weight],borderAlphas=[styles.border.alpha],tbw=borderWeights.concat(),tbc=borderColors.concat(),tba=borderAlphas.concat(),tfc,tfa,padding=styles.padding,graphic=this.get("graphic"),minDimension=Math.min(graphic.get("width"),graphic.get("height")),w=minDimension-(padding.left+padding.right),h=minDimension-(padding.top+padding.bottom),startAngle=-90,halfWidth=w / 2,halfHeight=h / 2,radius=Math.min(halfWidth,halfHeight),i=0,value,angle=0,lc,la,lw,wedgeStyle,marker,graphOrder=this.get("graphOrder")||0,isCanvas=Y.Graphic.NAME==="canvasGraphic";for(;i<itemCount;++i)
{value=parseFloat(values[i]);values.push(value);if(!isNaN(value))
{totalValue+=value;}}
tfc=fillColors?fillColors.concat():null;tfa=fillAlphas?fillAlphas.concat():null;this._createMarkerCache();if(isCanvas)
{this._setMap();this._image.width=w;this._image.height=h;}
for(i=0;i<itemCount;i++)
{value=values[i];if(totalValue===0)
{angle=360 / values.length;}
else
{angle=360*(value / totalValue);}
if(tfc&&tfc.length<1)
{tfc=fillColors.concat();}
if(tfa&&tfa.length<1)
{tfa=fillAlphas.concat();}
if(tbw&&tbw.length<1)
{tbw=borderWeights.concat();}
if(tbw&&tbc.length<1)
{tbc=borderColors.concat();}
if(tba&&tba.length<1)
{tba=borderAlphas.concat();}
lw=tbw?tbw.shift():null;lc=tbc?tbc.shift():null;la=tba?tba.shift():null;startAngle+=angle;wedgeStyle={border:{color:lc,weight:lw,alpha:la},fill:{color:tfc?tfc.shift():this._getDefaultColor(i,"slice"),alpha:tfa?tfa.shift():null},type:"pieslice",arc:angle,radius:radius,startAngle:startAngle,cx:halfWidth,cy:halfHeight,width:w,height:h};marker=this.getMarker(wedgeStyle,graphOrder,i);if(isCanvas)
{this._addHotspot(wedgeStyle,graphOrder,i);}}
this._clearMarkerCache();},_setStyles:function(val)
{if(!val.marker)
{val={marker:val};}
val=this._parseMarkerStyles(val);return Y.PieSeries.superclass._mergeStyles.apply(this,[val,this._getDefaultStyles()]);},_addHotspot:function(cfg,seriesIndex,index)
{var areaNode=DOCUMENT.createElement("area"),i=1,x=cfg.cx,y=cfg.cy,arc=cfg.arc,startAngle=cfg.startAngle-arc,endAngle=cfg.startAngle,radius=cfg.radius,ax=x+Math.cos(startAngle / 180*Math.PI)*radius,ay=y+Math.sin(startAngle / 180*Math.PI)*radius,bx=x+Math.cos(endAngle / 180*Math.PI)*radius,by=y+Math.sin(endAngle / 180*Math.PI)*radius,numPoints=Math.floor(arc/10)-1,divAngle=(arc/(Math.floor(arc/10))/ 180)*Math.PI,angleCoord=Math.atan((ay-y)/(ax-x)),pts=x+", "+y+", "+ax+", "+ay,cosAng,sinAng,multDivAng;for(i=1;i<=numPoints;++i)
{multDivAng=divAngle*i;cosAng=Math.cos(angleCoord+multDivAng);sinAng=Math.sin(angleCoord+multDivAng);if(startAngle<=90)
{pts+=", "+(x+(radius*Math.cos(angleCoord+(divAngle*i))));pts+=", "+(y+(radius*Math.sin(angleCoord+(divAngle*i))));}
else
{pts+=", "+(x-(radius*Math.cos(angleCoord+(divAngle*i))));pts+=", "+(y-(radius*Math.sin(angleCoord+(divAngle*i))));}}
pts+=", "+bx+", "+by;pts+=", "+x+", "+y;this._map.appendChild(areaNode);areaNode.setAttribute("class",SERIES_MARKER);areaNode.setAttribute("id","hotSpot_"+seriesIndex+"_"+index);areaNode.setAttribute("shape","polygon");areaNode.setAttribute("coords",pts);this._areaNodes.push(areaNode);},updateMarkerState:function(type,i)
{if(this._markers[i])
{var state=this._getState(type),markerStyles,indexStyles,marker=this._markers[i],styles=this.get("styles").marker;markerStyles=state==="off"||!styles[state]?styles:styles[state];indexStyles=this._mergeStyles(markerStyles,{});indexStyles.fill.color=indexStyles.fill.colors[i%indexStyles.fill.colors.length];indexStyles.fill.alpha=indexStyles.fill.alphas[i%indexStyles.fill.alphas.length];marker.set(indexStyles);}},_createMarker:function(styles)
{var graphic=this.get("graphic"),marker,cfg=this._copyObject(styles);marker=graphic.addShape(cfg);marker.addClass(SERIES_MARKER);return marker;},_clearMarkerCache:function()
{var len=this._markerCache.length,i=0,marker;for(;i<len;++i)
{marker=this._markerCache[i];if(marker)
{marker.destroy();}}
this._markerCache=[];},_getPlotDefaults:function()
{var defs={padding:{top:0,left:0,right:0,bottom:0},fill:{alphas:["1"]},border:{weight:0,alpha:1}};defs.fill.colors=this._defaultSliceColors;defs.border.colors=this._defaultBorderColors;return defs;}},{ATTRS:{type:{value:"pie"},order:{},graph:{},categoryAxis:{value:null,validator:function(value)
{return value!==this.get("categoryAxis");}},valueAxis:{value:null,validator:function(value)
{return value!==this.get("valueAxis");}},categoryKey:{value:null,validator:function(value)
{return value!==this.get("categoryKey");}},valueKey:{value:null,validator:function(value)
{return value!==this.get("valueKey");}},categoryDisplayName:{setter:function(val)
{this._categoryDisplayName=val;return val;},getter:function()
{return this._categoryDisplayName||this.get("categoryKey");}},valueDisplayName:{setter:function(val)
{this._valueDisplayName=val;return val;},getter:function()
{return this._valueDisplayName||this.get("valueKey");}},slices:null}});},'3.15.0',{"requires":["series-base","series-plot-util"]});