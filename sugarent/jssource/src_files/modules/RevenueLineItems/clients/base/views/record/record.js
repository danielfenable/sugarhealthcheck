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
    extendsFrom: 'RecordView',

    /**
     * @inheritdoc
     */
    initialize: function(options) {
        this.plugins = _.union(this.plugins || [], ['HistoricalSummary']);
        this._super('initialize', [options]);
        this._parsePanelFields(this.meta.panels);
    },

    /**
     * @inheritdoc
     */
    cancelClicked: function () {
        /**
         * todo: this is a sad way to work around some problems with sugarlogic and revertAttributes
         * but it makes things work now. Probability listens for Sales Stage to change and then by
         * SugarLogic, it updates probability when sales_stage changes. When the user clicks cancel,
         * it goes to revertAttributes() which sets the model back how it was, but when you try to
         * navigate away, it picks up those new changes as unsaved changes to your model, and tries to
         * falsely warn the user. This sets the model back to those changed attributes (causing them to
         * show up in this.model.changed) then calls the parent cancelClicked function which does the
         * exact same thing, but that time, since the model was already set, it doesn't see anything in
         * this.model.changed, so it doesn't warn the user.
         */
        var changedAttributes = this.model.changedAttributes(this.model.getSyncedAttributes());
        this.model.set(changedAttributes);
        this._super('cancelClicked');

        // re-trigger this event for dashlets to listen for
        this.context.trigger('button:cancel_button:click');
    },

    /**
     * extend save options
     * @param {Object} options save options.
     * @return {Object} modified success param.
     */
    getCustomSaveOptions: function(options) {
        // make copy of original function we are extending
        var origSuccess = options.success;
        // return extended success function with added alert
        return {
            success: _.bind(function() {
                if (_.isFunction(origSuccess)) {
                    origSuccess();
                }
                if (!_.isEmpty(this.model.get('quote_id'))) {
                    app.alert.show('save_rli_quote_notice', {
                        level: 'info',
                        messages: app.lang.get(
                            'SAVE_RLI_QUOTE_NOTICE',
                            'RevenueLineItems'
                        ),
                        autoClose: true
                    });
                }
            }, this)
        };
    },

    /**
     * Bind to model to make it so that it will re-render once it has loaded.
     */
    bindDataChange: function() {
        this.model.on('duplicate:before', this._handleDuplicateBefore, this);
        this.model.on('change:likely_case', this._handleLikelyChange, this);
        this._super('bindDataChange');
    },

    /**
     * Handle a change to likely value (requiring copy to unit price when empty).
     */
    _handleLikelyChange: function(new_model, val, options) {
        if (
            _.isEmpty(options) &&
            _.isEmpty(new_model.get('product_template_id')) &&
            !_.isFinite(new_model.get('discount_price'))
        ) {
            var quantity = new_model.get('quantity'),
                new_value = '';

            if (!_.isFinite(quantity) || parseFloat(quantity) === 0) {
                quantity = 1;
            }

            if (!_.isEmpty(val)) {
                new_value = app.math.div(val, quantity);
            }

            new_model.set({discount_price: new_value});
        }
    },

    /**
     * Handle what should happen before a duplicate is created
     *
     * @param {Backbone.Model} new_model
     * @private
     */
    _handleDuplicateBefore: function(new_model) {
        new_model.unset('quote_id');
        new_model.unset('quote_name');
    },

    /**
     * Parse the fields in the panel for the different requirement that we have
     *
     * @param {Array} panels
     * @protected
     */
    _parsePanelFields: function(panels) {
        _.each(panels, function(panel) {
            if (!app.metadata.getModule('Forecasts', 'config').is_setup) {
                // use _.every so we can break out after we found the commit_stage field
                _.every(panel.fields, function(field, index) {
                    if (field.name == 'commit_stage') {
                        panel.fields[index] = {
                            'name': 'spacer',
                            'label': field.label,
                            'span': 6,
                            'readonly': true
                        };
                        return false;
                    }
                    return true;
                }, this);
            }
        }, this);
    }
})
