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
 * EventStatusField is a field for Meetings/Calls that show the status field of the model as a badge field.
 *
 * FIXME: This component will be moved out of clients/base folder as part of MAR-2274 and SC-3593
 *
 * @class View.Fields.Base.EventStatusField
 * @alias SUGAR.App.view.fields.BaseEventStatusField
 * @extends View.Fields.Base.BadgeSelectField
 */
({
    extendsFrom: 'BadgeSelectField',

    /**
     * @inheritdoc
     */
    initialize: function(options) {
        this._super('initialize', [options]);
        this.type = 'badge-select';
    },

    /**
     * @inheritdoc
     *
     * Styles the badge.
     *
     * @private
     */
    _render: function() {
        this._super('_render');
        this.styleLabel(this.model.get(this.name));
    },

    /**
     * Sets the appropriate CSS class on the label based on the value of the
     * status.
     *
     * It is a noop when the field is in edit mode.
     *
     * @param {String} status
     */
    styleLabel: function(status) {
        var $label;

        if (this.action !== 'edit') {
            $label = this.$('.label');

            switch (status) {
                case 'Held':
                    $label.addClass('label-success');
                    break;
                case 'Not Held':
                    $label.addClass('label-important');
                    break;
                case 'Planned':
                    $label.addClass('label-pending');
                    break;
                default:
                    break;
            }
        }
    }
})
