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
({extendsFrom:'RecordView',initialize:function(options){this.plugins=_.union(this.plugins||[],['HistoricalSummary']);this._super('initialize',[options]);},delegateButtonEvents:function(){this.context.on('button:convert_button:click',this.convertProspectClicked,this);this._super('delegateButtonEvents');},convertProspectClicked:function(){var prefill=app.data.createBean('Leads');prefill.copy(this.model);app.drawer.open({layout:'create',context:{create:true,model:prefill,module:'Leads',prospect_id:this.model.get('id')}},_.bind(function(context,model){if(model&&model.id&&!this.disposed){this.model.fetch();_.each(this.context.children,function(child){if(!_.isUndefined(child.attributes)&&!_.isUndefined(child.attributes.isSubpanel)){if(child.attributes.isSubpanel&&!child.attributes.hidden){child.attributes.collection.fetch();}}});}},this));prefill.trigger('duplicate:field',this.model);}})