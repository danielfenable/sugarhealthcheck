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
({extendsFrom:'ConvertResultsView',populateResults:function(){var model;if(!this.model.get('converted')){return;}
this.associatedModels.reset();model=this.buildAssociatedModel('Contacts','contact_id','contact_name');if(model){this.associatedModels.push(model);}
model=this.buildAssociatedModel('Accounts','account_id','account_name');if(model){this.associatedModels.push(model);}
model=this.buildAssociatedModel('Opportunities','opportunity_id','opportunity_name');if(model){this.associatedModels.push(model);}
app.view.View.prototype.render.call(this);},buildAssociatedModel:function(moduleName,idField,nameField){var moduleSingular=app.lang.getAppListStrings('moduleListSingular'),model;if(_.isEmpty(this.model.get(idField))){return false;}
model=app.data.createBean(moduleName,{id:this.model.get(idField),name:this.model.get(nameField),row_title:moduleSingular[moduleName],_module:moduleName,target_module:moduleName});model.module=moduleName;return model;}})