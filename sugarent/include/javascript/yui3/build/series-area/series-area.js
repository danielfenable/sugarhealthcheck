/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('series-area',function(Y,NAME){Y.AreaSeries=Y.Base.create("areaSeries",Y.CartesianSeries,[Y.Fills],{drawSeries:function()
{this.drawFill.apply(this,this._getClosingPoints());},_setStyles:function(val)
{if(!val.area)
{val={area:val};}
return Y.AreaSeries.superclass._setStyles.apply(this,[val]);},_getDefaultStyles:function()
{var styles=this._mergeStyles({area:this._getAreaDefaults()},Y.AreaSeries.superclass._getDefaultStyles());return styles;}},{ATTRS:{type:{value:"area"}}});},'3.15.0',{"requires":["series-cartesian","series-fill-util"]});