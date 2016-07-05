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
 * @class View.Fields.Base.NameField
 * @alias SUGAR.App.view.fields.BaseNameField
 * @extends View.Fields.Base.BaseField
 */
({
    plugins: ['EllipsisInline', 'MetadataEventDriven'],

    /**
     * @inheritdoc
     */
    initialize: function(options) {
        this._super('initialize', [options]);
        /**
         * Property to add or not the `ellipsis_inline` class when rendering the
         * field in the `list` template. `true` to add the class, `false`
         * otherwise.
         *
         * Defaults to `true`.
         *
         * @property {boolean}
         */
        this.ellipsis = _.isUndefined(this.def.ellipsis) || this.def.ellipsis;
    },

    _render: function() {
        // FIXME: This will be cleaned up by SC-3478.
        if (this.view.name === 'audit') {
            this.def.link = false;
        } else if (this.view.name === 'preview') {
            this.def.link = _.isUndefined(this.def.link) ? true : this.def.link;
            this.def.events = false;
        }
        this._super('_render');
    }
})
