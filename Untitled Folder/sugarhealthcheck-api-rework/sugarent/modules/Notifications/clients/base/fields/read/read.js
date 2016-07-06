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
({events:{'click [data-action=toggle]':'toggleIsRead','mouseover [data-action=toggle]':'toggleMouse','mouseout [data-action=toggle]':'toggleMouse'},plugins:['Tooltip'],initialize:function(options){options.def.readonly=true;this._super('initialize',[options]);if(options.def&&options.def.mark_as_read){this.markAs(true);}},toggleMouse:function(event){var $target=this.$(event.currentTarget),isRead=this.model.get('is_read');if(!isRead){return;}
var label=event.type==='mouseover'?'LBL_UNREAD':'LBL_READ';$target.html(app.lang.get(label,this.module));$target.toggleClass('label-inverse',event.type==='mouseover');},toggleIsRead:function(){this.markAs(!this.model.get('is_read'));},markAs:function(read){if(read===this.model.get('is_read')){return;}
this.model.save({is_read:!!read},{success:_.bind(function(){if(!this.disposed){this.render();}},this)});}})