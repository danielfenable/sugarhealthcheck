/*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
var AdamActivityContainerBehavior=function(){};AdamActivityContainerBehavior.prototype=new jCore.RegularContainerBehavior();AdamActivityContainerBehavior.prototype.type="AdamActivityContainerBehavior";AdamActivityContainerBehavior.prototype.addToContainer=function(container,shape,x,y,topLeftCorner){var shapeLeft=0,shapeTop=0,shapeWidth,shapeHeight,canvas,topLeftFactor=(topLeftCorner===true)?0:1;if(container.family==="Canvas"){canvas=container;}else{canvas=container.canvas;}
shapeWidth=shape.getZoomWidth();shapeHeight=shape.getZoomHeight();shapeLeft+=x-(shapeWidth / 2)*topLeftFactor;shapeTop+=y-(shapeHeight / 2)*topLeftFactor;shapeLeft /=container.zoomFactor;shapeTop /=container.zoomFactor;shape.setParent(container);container.getChildren().insert(shape);this.addShape(container,shape,shapeLeft,shapeTop);shape.fixZIndex(shape,0);canvas.addToList(shape);if(shape.getType()==='AdamEvent'&&shape.evn_type==='BOUNDARY'){shape.setAttachedTo(container.act_uid);container.boundaryArray.insert(shape);if(container.boundaryPlaces.isEmpty()){container.makeBoundaryPlaces(shape);}
shape.attachToActivity();}};