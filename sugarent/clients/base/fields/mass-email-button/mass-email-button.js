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
({extendsFrom:'ButtonField',initialize:function(options){this.plugins=_.union(this.plugins,['EmailClientLaunch']);this._super('initialize',[options]);},bindDataChange:function(){var massCollection=this.context.get('mass_collection');massCollection.on('add remove reset',this.render,this);this._super('bindDataChange');},unbindData:function(){var massCollection=this.context.get('mass_collection');if(massCollection){massCollection.off(null,null,this);}
this._super('unbindData');},_retrieveEmailOptionsFromLink:function(){var massCollection=this.context.get('mass_collection'),toAddresses=_.map(massCollection.models,function(model){return{bean:model};},this);return{to_addresses:toAddresses};}})