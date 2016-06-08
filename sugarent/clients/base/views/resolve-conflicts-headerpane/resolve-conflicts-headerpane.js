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
({extendsFrom:'HeaderpaneView',initialize:function(options){this.events=_.extend({},this.events,{'click [name=select_button]':'selectClicked','click [name=cancel_button]':'cancelClicked'});this._super('initialize',[options]);this.context.on("change:selection_model",this.enableSelectButton,this);},_formatTitle:function(title){var modelToSave=this.context.get('modelToSave'),name=modelToSave.get('name')||modelToSave.get('full_name');return app.lang.get(title,this.module,{name:name});},selectClicked:function(event){var selected=this.context.get('selection_model'),modelToSave=this.context.get('modelToSave'),dataInDb=this.context.get('dataInDb'),origin;if(selected instanceof Backbone.Model){origin=selected.get('_dataOrigin');if(origin==='client'){modelToSave.set('date_modified',dataInDb.date_modified);app.drawer.close(modelToSave,false);}else if(origin==='database'){modelToSave.set(dataInDb);modelToSave.trigger('sync');app.drawer.close(modelToSave,true);}}},enableSelectButton:function(context,selected){if(selected){this.$('[name=select_button]').removeClass('disabled');}},cancelClicked:function(event){app.drawer.close();}})