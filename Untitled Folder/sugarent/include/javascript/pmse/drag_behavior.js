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
var AdamConnectionDragBehavior=function(){jCore.ConnectionDragBehavior.call(this);};AdamConnectionDragBehavior.prototype=new jCore.ConnectionDragBehavior();AdamConnectionDragBehavior.prototype.type="AdamConnectionDragBehavior";var AdamShapeDragBehavior=function(){jCore.CustomShapeDragBehavior.call(this);};AdamShapeDragBehavior.prototype=new jCore.CustomShapeDragBehavior();AdamShapeDragBehavior.prototype.type="AdamShapeDragBehavior";AdamShapeDragBehavior.prototype.attachDragBehavior=function(customShape){var dragOptions,$customShape=$(customShape.getHTML());dragOptions={revert:false,helper:"none",cursorAt:false,revertDuration:0,disable:false,grid:[1,1],start:this.onDragStart(customShape),drag:this.onDrag(customShape,true),stop:this.onDragEnd(customShape,true),containment:"parent",scroll:false};$customShape.draggable(dragOptions);};