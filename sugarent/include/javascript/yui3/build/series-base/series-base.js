/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('series-base',function(Y,NAME){Y.SeriesBase=Y.Base.create("seriesBase",Y.Base,[Y.Renderer],{render:function()
{this._setCanvas();this.addListeners();this.validate();},_setCanvas:function()
{var graph=this.get("graph"),graphic=graph.get("graphic");this.set("graphic",graphic);},_getChart:function(){var chart,graph=this.get("graph");if(graph)
{chart=graph.get("chart");}
if(!chart)
{chart=this.get("graphic");}
return chart;},getTotalValues:function()
{var valueCoord=this.get("direction")==="vertical"?"x":"y",total=this.get(valueCoord+"Axis").getTotalByKey(this.get(valueCoord+"Key"));return total;},_getDefaultStyles:function()
{return{padding:{top:0,left:0,right:0,bottom:0}};},_handleVisibleChange:function()
{this._toggleVisible(this.get("visible"));},destructor:function()
{var marker,markers=this.get("markers");if(this.get("rendered"))
{if(this._stylesChangeHandle)
{this._stylesChangeHandle.detach();}
if(this._widthChangeHandle)
{this._widthChangeHandle.detach();}
if(this._heightChangeHandle)
{this._heightChangeHandle.detach();}
if(this._visibleChangeHandle)
{this._visibleChangeHandle.detach();}}
while(markers&&markers.length>0)
{marker=markers.shift();if(marker&&marker instanceof Y.Shape)
{marker.destroy();}}
if(this._path)
{this._path.destroy();this._path=null;}
if(this._lineGraphic)
{this._lineGraphic.destroy();this._lineGraphic=null;}
if(this._groupMarker)
{this._groupMarker.destroy();this._groupMarker=null;}},_defaultLineColors:["#426ab3","#d09b2c","#000000","#b82837","#b384b5","#ff7200","#779de3","#cbc8ba","#7ed7a6","#007a6c"],_defaultFillColors:["#6084d0","#eeb647","#6c6b5f","#d6484f","#ce9ed1","#ff9f3b","#93b7ff","#e0ddd0","#94ecba","#309687"],_defaultBorderColors:["#205096","#b38206","#000000","#94001e","#9d6fa0","#e55b00","#5e85c9","#adab9e","#6ac291","#006457"],_defaultSliceColors:["#66007f","#a86f41","#295454","#996ab2","#e8cdb7","#90bdbd","#000000","#c3b8ca","#968373","#678585"],_getDefaultColor:function(index,type)
{var colors={line:this._defaultLineColors,fill:this._defaultFillColors,border:this._defaultBorderColors,slice:this._defaultSliceColors},col=colors[type]||colors.fill,l=col.length;index=index||0;if(index>=l)
{index=index%l;}
type=type||"fill";return colors[type][index];}},{ATTRS:{width:{readOnly:true,getter:function()
{return this.get("graphic").get("width");}},height:{readOnly:true,getter:function()
{return this.get("graphic").get("height");}},graphic:{lazyAdd:false,setter:function(val){if(!this.get("rendered")){this.set("rendered",true);}
return val;}},chart:{getter:function()
{var chart,graph=this.get("graph");if(graph)
{chart=graph.get("chart");}
return chart;}},graph:{},rendered:{value:false},visible:{value:true},groupMarkers:{getter:function()
{var graph,groupMarkers=this._groupMarkers;if(!groupMarkers){graph=this.get("graph");if(graph)
{groupMarkers=graph.get("groupMarkers");}}
return groupMarkers;},setter:function(val)
{this._groupMarkers=val;return val;}}}});},'3.15.0',{"requires":["graphics","axis-base"]});