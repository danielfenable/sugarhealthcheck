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
({showNoData:false,events:{'click [data-action=convert]':'convertLead'},initialize:function(options){options.def.readonly=true;app.view.Field.prototype.initialize.call(this,options);},convertLead:function(){var model=app.data.createBean(this.model.module);model.set(app.utils.deepCopy(this.model.attributes));app.drawer.open({layout:'convert',context:{forceNew:true,skipFetch:true,module:this.model.module,leadsModel:model}});}})