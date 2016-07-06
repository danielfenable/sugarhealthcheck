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
 * Custom RecordlistView used within Subpanel layouts.
 *
 * @class View.Views.Base.SubpanelListView
 * @alias SUGAR.App.view.views.BaseSubpanelListView
 * @extends View.Views.Base.RecordlistView
 */
({
    extendsFrom: 'RecordlistView',
    fallbackFieldTemplate: 'list',
    plugins: ['ErrorDecoration', 'Editable', 'SugarLogic', 'Pagination', 'LinkedModel', 'ResizableColumns'],

    contextEvents: {
        "list:editall:fire": "toggleEdit",
        "list:editrow:fire": "editClicked",
        "list:unlinkrow:fire": "warnUnlink"
    },

    /**
     * @override
     * @param {Object} options
     */
    initialize: function(options) {
        // `dataViewName` corresponds to the list of fields the API should retrieve.
        this.dataViewName = options.name || 'subpanel-list';

        this._super("initialize", [options]);

        var limit = this.context.get('limit') || app.config.maxSubpanelResult;
        // Setup max limit on collection's fetch options for this subpanel's context

        if (limit) {
            this.context.set('limit', limit);
            //supanel-list extends indirectly ListView, and `limit` determines # records displayed
            this.limit = limit;
            // FIXME SC-3670 needs to remove this `collectionOptions` mess.
            var collectionOptions = this.context.has('collectionOptions') ? this.context.get('collectionOptions') : {};
            this.context.set('collectionOptions', _.extend(collectionOptions, {limit: limit}));
        }

        //Override the recordlist row template
        this.rowTemplate = app.template.getView('recordlist.row');

        // Listens to parent of subpanel layout (subpanels)
        this.listenTo(this.layout, 'filter:record:linked', this.renderOnFilterChanged);

        //event register for preventing actions
        //when user escapes the page without confirming deletion
        app.routing.before("route", this.beforeRouteUnlink, this, true);
        $(window).on("beforeunload.unlink" + this.cid, _.bind(this.warnUnlinkOnRefresh, this));
    },
    // SP-1383: Subpanel filters hide some panels when related filters are changed
    // So when 'Related' filter changed, this ensures recordlist gets reloaded
    renderOnFilterChanged: function() {
        this.collection.trigger('reset');
        this.render();
    },

    /**
     * When parent recordlist's initialize is invoked (above), this will get called
     * and populate our the list's meta with the proper view subpanel metadata.
     * @return {Object} The view metadata for this module's subpanel.
     */
    _initializeMetadata: function() {
        return  _.extend({},
            app.metadata.getView(null, 'subpanel-list', true),
            app.metadata.getView(this.options.module, 'record-list', true),
            app.metadata.getView(this.options.module, 'subpanel-list', true)
        );
    },

    /**
     * Unlink (removes) the selected model from the list view's collection
     */
    unlinkModel: function() {
        var self = this,
            model = this._modelToUnlink;

        model.destroy({
            //Show alerts for this request
            showAlerts: {
                'process': true,
                'success': {
                    messages: self.getUnlinkMessages(self._modelToUnlink).success
                }
            },
            relate: true,
            success: function() {
                var redirect = self._targetUrl !== self._currentUrl;
                self._modelToUnlink = null;
                self.collection.remove(model, { silent: redirect });

                if (redirect) {
                    self.unbindBeforeRouteUnlink();
                    //Replace the url hash back to the current staying page
                    app.router.navigate(self._targetUrl, {trigger: true});
                    return;
                }

                // We trigger reset after removing the model so that
                // panel-top will re-render and update the count.
                self.collection.trigger('reset');
                self.render();
            }
        });
    },

    /**
     * Pre-event handler before current router is changed
     *
     * @return {Boolean} true to continue routing, false otherwise
     */
    beforeRouteUnlink: function () {
        if (this._modelToUnlink) {
            this.warnUnlink(this._modelToUnlink);
            return false;
        }
        return true;
    },

    /**
     * Formats the messages to display in the alerts when unlinking a record.
     *
     * @param {Data.Bean} model The model concerned.
     * @return {Object} The list of messages.
     * @return {string} return.confirmation Confirmation message.
     * @return {string} return.success Success message.
     */
    getUnlinkMessages: function(model) {
        var messages = {};
        var name = Handlebars.Utils.escapeExpression(app.utils.getRecordName(model)).trim();
        var context = app.lang.getModuleName(model.module).toLowerCase() + ' ' + name;

        messages.confirmation = app.utils.formatString(app.lang.get('NTC_UNLINK_CONFIRMATION_FORMATTED'), [context]);
        messages.success = app.utils.formatString(app.lang.get('NTC_UNLINK_SUCCESS'), [context]);
        return messages;
    },

    /**
     * Popup dialog message to confirm unlink action
     *
     * @param {Backbone.Model} model the bean to unlink
     */
    warnUnlink: function(model) {
        var self = this;
        this._modelToUnlink = model;

        self._targetUrl = Backbone.history.getFragment();
        //Replace the url hash back to the current staying page
        if (self._targetUrl !== self._currentUrl) {
            app.router.navigate(this._currentUrl, {trigger: false, replace: true});
        }

        app.alert.show('unlink_confirmation', {
            level: 'confirmation',
            messages: self.getUnlinkMessages(model).confirmation,
            onConfirm: _.bind(self.unlinkModel, self),
            onCancel: function() {
                self._modelToUnlink = null;
            }
        });
    },

    /**
     * Popup browser dialog message to confirm unlink action
     *
     * @return {String} the message to be displayed in the browser alert
     */
    warnUnlinkOnRefresh: function() {
        if (this._modelToUnlink) {
            return this.getUnlinkMessages(this._modelToUnlink).confirmation;
        }
    },

    /**
     * Detach the event handlers for warning unlink
     */
    unbindBeforeRouteUnlink: function() {
        app.routing.offBefore("route", this.beforeRouteUnlink, this);
        $(window).off("beforeunload.unlink" + this.cid);
    },

    /**
     * @override
     * @private
     */
    _dispose: function() {
        this.unbindBeforeRouteUnlink();
        this._super('_dispose');
    }
})
