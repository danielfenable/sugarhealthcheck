/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('axis-category',function(Y,NAME){var Y_Lang=Y.Lang;Y.CategoryAxis=Y.Base.create("categoryAxis",Y.Axis,[Y.CategoryImpl],{getMinimumValue:function()
{var data=this.get("data"),label=data[0];return label;},getMaximumValue:function()
{var data=this.get("data"),len=data.length-1,label=data[len];return label;},_getLabelByIndex:function(i)
{var label,data=this.get("data");label=data[i];return label;},_getLabelData:function(constantVal,staticCoord,dynamicCoord,min,max,edgeOffset,layoutLength,count,dataValues)
{var labelValue,i,points=[],values=[],point,labelIndex,data=this.get("data"),offset=edgeOffset;dataValues=dataValues||data;for(i=0;i<count;i=i+1)
{labelValue=dataValues[i];labelIndex=Y.Array.indexOf(data,labelValue);if(Y_Lang.isNumber(labelIndex)&&labelIndex>-1)
{point={};point[staticCoord]=constantVal;point[dynamicCoord]=this._getCoordFromValue(min,max,layoutLength,labelIndex,offset);points.push(point);values.push(labelValue);}}
return{points:points,values:values};}});},'3.15.0',{"requires":["axis","axis-category-base"]});