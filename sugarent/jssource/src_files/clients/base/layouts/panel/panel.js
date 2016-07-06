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
 * @class View.Layouts.Base.PanelLayout
 * @alias SUGAR.App.view.layouts.BasePanelLayout
 * @extends View.Layout
 */
({
    /**
     * @inheritDoc
     */
    className: 'filtered tabbable tabs-left',

    /**
     * @inheritDoc
     */
    attributes: function() {
        return {
            'data-subpanel-link': this.options.context.get('link')
        };
    },

    // "Hide/Show" state per panel
    HIDE_SHOW_KEY: 'hide-show',
    HIDE_SHOW: {
        HIDE: 'hide',
        SHOW: 'show'
    },

    /**
     * @inheritDoc
     */
    initialize: function(options) {
        this._super('initialize', [options]);
        this._initPanelState();
    },

    /**
     * Sets the `collapsed` state of the panel's context, depending on if
     * `app.config.collapseSubpanels` is configured or if the panel was
     * previously shown/hidden.
     *
     * @protected
     */
    _initPanelState: function() {
        var collapse;
        this.hideShowLastStateKey = app.user.lastState.key(this.HIDE_SHOW_KEY, this);

        if (app.config.collapseSubpanels) {
            collapse = true;
        } else {
            var hideShowLastState = app.user.lastState.get(this.hideShowLastStateKey);
            collapse = _.isUndefined(hideShowLastState) || hideShowLastState !== this.HIDE_SHOW.SHOW;
        }
        this.context.set('collapsed', collapse);
    },

    /**
     * @inheritDoc
     */
    bindDataChange: function() {
        // Decorate the subpanel based on if the collection is empty or not
        this.listenTo(this.collection, 'reset add remove', function() {
            this.$('.subpanel').toggleClass('empty', this.collection.length === 0);
        }, this);

        this.listenTo(this.context, 'refresh:count', function(hasAtLeast, properties) {
            this.$('.subpanel').toggleClass('empty', !properties.length);
        }, this);

        // FIXME this needs to be reviewed on 7.7.
        this.listenTo(this.context.parent, 'panel-top:refresh', function(link) {
            if (this.context.get('link') === link) {
                this.context.resetLoadFlag();
                this.toggle(true);
            }
        });
    },

    /**
     * Places layout component in the DOM.
     * @override
     * @param {Component} component
     */
    _placeComponent: function(component) {
        this.$(".subpanel").append(component.el);
    },

    /**
     * Renders the `panel-top` component if the subpanel is in a collapsed
     * state, otherwise renders the subpanel.
     */
    _render: function() {
        var collapsed = this.context.get('collapsed');
        if (collapsed) {
            // FIXME: We're assuming that the first component is always the
            // panel-top. This should be fixed when panel-top-create is removed
            // from core in SC-4535.
            this._components[0].render();
        } else {
            /**
             * Internal flag used to determine if we are rendering the
             * component(s) in the panel layout for the first time.
             *
             * @protected
             * @property {boolean}
             */
            this._canToggle = true;
            this._super('_render');
        }

        this.$('.subpanel').toggleClass('closed', collapsed);
    },

    /**
     * Toggles the panel.
     *
     * @param {boolean} [show] `true` to show, `false` to hide, `undefined` to
     *   toggle.
     */
    toggle: function(show) {
        if (this.context.get('isCreateSubpanel')) {
            // no toggle available on create
            return;
        }

        show = _.isUndefined(show) ? this.context.get('collapsed') : show;

        this.$('.subpanel').toggleClass('closed', !show);
        this.context.set('collapsed', !show);
        this._toggleComponents(show);

        // no longer need to skip
        this.context.set('skipFetch', false);
        this.context.loadData();

        app.user.lastState.set(this.hideShowLastStateKey, show ? this.HIDE_SHOW.SHOW : this.HIDE_SHOW.HIDE);
    },

    /**
     * Show or hide component except `panel-top`(subpanel-header) component.
     *
     * @private
     * @param {boolean} [show] `true` to show, `false` to hide. Defaults to
     *   `false`.
     */
    _toggleComponents: function(show) {
        _.each(this._components, function(component) {
            // FIXME: The layout should not be responsible for this. Will be
            // addressed as part of SC-4533.
            if (this._stopComponentToggle(component)) {
                return;
            }
            if (!this._canToggle) {
                component.render();
            } else if (show) {
                component.show();
            } else {
                component.hide();
            }
        }, this);
        this._canToggle = true;
    },

    /**
     * Extensible check to see if this component should be allowed to be toggled.
     * If this returns true: _toggleComponent will return without further render/show/hide checks
     * If this returns false: _toggleComponent will continue through render/show/hide checks
     *
     * @param component
     * @returns {boolean}
     * @private
     */
    _stopComponentToggle: function(component) {
        return component.$el.hasClass('subpanel-header');
    }
})
