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
({initialize:function(options){this._super('initialize',[options]);if(this.context.parent){var baseModule=this.context.parent.get('module');this.auditedFields=this._getAuditedFields(baseModule);}},_getAuditedFields:function(baseModule){return _.chain(app.metadata.getModule(baseModule,'fields')).filter(function(o){return o.audited;}).map(function(o){return app.lang.get(o.vname,baseModule);}).value();}})