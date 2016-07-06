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
 * Header section for Subpanel layouts.
 *
 * @class View.Views.Base.PanelTopView
 * @alias SUGAR.App.view.views.BasePanelTopView
 * @extends View.View
 */
({
    /**
     * @inheritDoc
     */
    className: 'subpanel-header',

    /**
     * @inheritDoc
     */
    attributes: {
        'data-sortable-subpanel': 'true'
    },

    /**
     * @inheritDoc
     */
    events: {
        'click': 'togglePanel',
        'click a[name=create_button]:not(".disabled")': 'createRelatedClicked',
    },

    plugins: ['LinkedModel', 'Tooltip'],

    /**
     * @inheritDoc
     */
    initialize: function(options) {
        // FIXME: SC-3594 will address having child views extending metadata
        // from its parent.
        options.meta = _.extend(
            {},
            app.metadata.getView(null, 'panel-top'),
            app.metadata.getView(options.module, 'panel-top'),
            options.meta
        );

        this._super('initialize', [options]);

        // This is in place to get the lang strings from the right module. See
        // if there is a better way to do this later.
        this.parentModule = this.context.parent.get('module');
    },

    /**
     * Event handler for the create button.
     *
     * @param {Event} event The click event.
     */
    createRelatedClicked: function(event) {
        this.createRelatedRecord(this.module)
    },

    /**
    * Event handler that toggles the subpanel layout when the SubpanelHeader is
    * clicked.
    *
    * Triggers the `panel:toggle` event to toggle the subpanel.
    *
    * @param evt The `click` event.
    */
    togglePanel: function(evt) {
        if (_.isNull(this.$el)) {
            return;
        }

        var $target = this.$(evt.target),
            isLink = $target.closest('a, button').length;

        if (isLink) {
            return;
        }

        if (!this.layout.disposed) {
            this.layout.toggle();
        }
    }
})
