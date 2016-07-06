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
({
    events: {
        'click [name="reset_button"]': 'triggerClearParams'
    },

    /**
     * @override
     * @param {Object} options
     */
    initialize: function(options) {
        this._super('initialize', [options]);
        this.title = this.meta.title;
    },

    /**
     * Triggers event to clear all parameters
     */
    triggerClearParams: function() {
        this.layout.trigger('dnbbal:param:clear');
    }
})
