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
/**
 * @class View.Fields.Base.Opportunities.QuickcreateField
 * @alias SUGAR.App.view.fields.BaseOpportunitiesQuickcreateField
 * @extends View.Fields.Base.QuickcreateField
 */
({
    extendsFrom: 'QuickcreateField',

    /**
     * @inheritdoc
     *
     * Had to extend QuickcreateField for Opps since we need the create-actions layout not the create layout
     */
    openCreateDrawer: function(module) {
        this.actionLayout = 'create-actions';
        this._super('openCreateDrawer', [module]);
    }
})
