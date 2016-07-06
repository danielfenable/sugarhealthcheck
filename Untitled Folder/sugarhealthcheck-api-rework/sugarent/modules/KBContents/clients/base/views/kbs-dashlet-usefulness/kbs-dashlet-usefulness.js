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
({plugins:['Dashlet'],chartData:undefined,refresh:null,initialize:function(options){this.chartData=new Backbone.Model();this._super('initialize',[options]);this.refresh=_.bind(this.loadData,this);this.listenTo(app.controller.context.get('model'),'change:useful',this.refresh);this.listenTo(app.controller.context.get('model'),'change:notuseful',this.refresh);},loadData:function(options){var currModel=app.controller.context.get('model'),model=currModel.clone(),opts=options||{},self=this;model.fetch({success:function(model){var dt=self.layout.getComponent('dashlet-toolbar'),useful=model.get('useful')||'0',notuseful=model.get('notuseful')||'0';if(dt){self.$('[data-action=loading]').removeClass(dt.cssIconDefault).addClass(dt.cssIconRefresh);}
useful=parseInt(useful,10);notuseful=parseInt(notuseful,10);if(0===useful&&0===notuseful){self.chartData.set({rawChartData:{values:[]}});return;}
var chartData={properties:[{labels:'value',print:'',subtitle:'',thousands:'',title:'',type:'pie chart'}],values:[{label:[app.lang.get('LBL_USEFUL','KBContents')],values:[useful],classes:'nv-fill-green'},{label:[app.lang.get('LBL_NOT_USEFUL','KBContents')],values:[notuseful],classes:'nv-fill-red'}]},chartParams={donut:true,donutRatio:0.45,hole:parseInt(useful*100 /(notuseful+useful))+' %',donutLabelsOutside:true,colorData:'data',chart_type:'pie chart',show_legend:false};_.defer(_.bind(function(){self.chartData.set({rawChartData:chartData,rawChartParams:chartParams});},this));},complete:function(){if(opts&&_.isFunction(opts.complete)){opts.complete();}}});},dispose:function(){this.stopListening(app.controller.context.get('model'),'change:useful',this.refresh);this.stopListening(app.controller.context.get('model'),'change:notuseful',this.refresh);this._super('dispose');}})