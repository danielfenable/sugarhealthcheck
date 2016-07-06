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
    extendsFrom: 'TabbedDashletView',

    /**
     * {@inheritDoc}
     *
     * @property {Number} _defaultSettings.limit Maximum number of records to
     *   load per request, defaults to '10'.
     * @property {String} _defaultSettings.visibility Records visibility
     *   regarding current user, supported values are 'user' and 'group',
     *   defaults to 'user'.
     */
    _defaultSettings: {
        limit: 10,
        visibility: 'user'
    },

    /**
     * {@inheritDoc}
     */
    initialize: function(options) {
        options.meta = options.meta || {};
        options.meta.template = 'tabbed-dashlet';

        this.plugins = _.union(this.plugins, [
            'LinkedModel'
        ]);

        this._super('initialize', [options]);
    },

    /**
     * {@inheritDoc}
     */
    _initEvents: function() {
        this._super('_initEvents');
//        this.on('dashlet-processes:designer:fire', this.designer, this);
        this.on('dashlet-businessrules:businessRulesLayout:fire', this.businessRulesLayout, this);
        this.on('dashlet-businessrules:delete-record:fire', this.deleteRecord, this);
//        this.on('dashlet-businessrules:disable-record:fire', this.disableRecord, this);
//        this.on('dashlet-businessrules:enable-record:fire', this.enableRecord, this);
        this.on('dashlet-businessrules:download:fire', this.warnExportBusinessRules, this);
        this.on('dashlet-businessrules:description-record:fire', this.descriptionRecord, this);
        return this;
    },

    /**
     * Fire dessigner
//     */
//    designer: function(model){
//        var redirect = model.module+"/"+model.id+"/layout/designer";
//        app.router.navigate(redirect , {trigger: true, replace: true });
//    },
    businessRulesLayout: function (model) {
        var redirect = model.module+"/"+model.id+"/layout/businessrules";
        app.router.navigate(redirect , {trigger: true, replace: true });
    },

    /**
     * {@inheritDoc}
     *
     * FIXME: This should be removed when metadata supports date operators to
     * allow one to define relative dates for date filters.
     */
    _initTabs: function() {
        // FIXME: this should be replaced with this._super('_initTabs'); which
        // is currently throwing an error with the following message: "Attempt
        // to call different parent method from child method"
        app.view.invokeParent(this, {
            type: 'view',
            name: 'tabbed-dashlet',
            method: '_initTabs',
            platform: 'base'
        });

        // FIXME: since there's no way to do this metadata driven (at the
        // moment) and for the sake of simplicity only filters with 'date_due'
        // value 'today' are replaced by today's date
        var today = new Date();
        today.setHours(23, 59, 59);
        today.toISOString();

        _.each(_.pluck(_.pluck(this.tabs, 'filters'), 'date_due'), function(filter) {
            _.each(filter, function(value, operator) {
                if (value === 'today') {
                    filter[operator] = today;
                }
            });
        });
    },

    /**
     * Create new record.
     *
     * @param {Event} event Click event.
     * @param {String} params.layout Layout name.
     * @param {String} params.module Module name.
     */
    createRecord: function(event, params) {
        if (this.module !== 'pmse_Business_Rules') {
            this.createRelatedRecord(params.module, params.link);
        } else {
            var self = this;
            app.drawer.open({
                layout: 'create-actions',
                context: {
                    create: true,
                    module: params.module
                }
            }, function(context, model) {
                if (!model) {
                    return;
                }
                self.context.resetLoadFlag();
                self.context.set('skipFetch', false);
                if (_.isFunction(self.loadData)) {
                    self.loadData();
                } else {
                    self.context.loadData();
                }
            });
        }

    },
    importRecord: function(event, params) {
        App.router.navigate(params.link , {trigger: true, replace: true });
    },

    /**
     * Delete record.
     *
     * @param {Event} event Click event.
     * @param {String} params.layout Layout name.
     * @param {String} params.module Module name.
     */
    deleteRecord: function(model) {
        var self = this;
        this._modelToDelete = true;
        var name = model.get('name') || '',
            context = app.lang.get('LBL_MODULE_NAME_SINGULAR', model.module).toLowerCase() + ' - ' + name.trim();
        app.alert.show(model.get('id') + ':deleted', {
            level: 'confirmation',
            messages: app.utils.formatString(app.lang.get('LBL_PRO_DELETE_CONFIRMATION', model.module)),
            onConfirm: function() {
                model.destroy({
                    showAlerts: true,
//                    relate: true
                    success: self._getRemoveRecord()
                });
            }
        });
    },

    /**
     * Updating in fields delete removed
     * @return {Function} complete callback
     * @private
     */
    _getRemoveRecord: function() {
        return _.bind(function(model){
            if (this.disposed) {
                return;
            }
            this.collection.remove(model);
            this.render();
            this.context.trigger("tabbed-dashlet:refresh", model.module);
        }, this);
    },

    /**
     * Method view alert in process with text modify
     * show and hide alert
     */
    _refresh: function(model, status) {
        app.alert.show(model.id + ':refresh', {
            level:"process",
            title: status,
            autoclose: false
        });
        return _.bind(function(model){
            var options = {};
            this.layout.reloadDashlet(options);
            app.alert.dismiss(model.id + ':refresh');
        }, this);
    },

    /**
     * Disable record.
     *
     * @param {Event} event Click event.
     * @param {String} params.layout Layout name.
     * @param {String} params.module Module name.
     */
    disableRecord: function(model) {
        var self = this;
        this._modelToDelete = true;
        var name = model.get('name') || '';
        app.alert.show(model.get('id') + ':deleted', {
            level: 'confirmation',
            messages: app.utils.formatString(app.lang.get('LBL_PRO_DISABLE_CONFIRMATION', model.module),[name.trim()]),
            onConfirm: function() {
                self._updateProStatusDisabled(model);
            }
        });
    },

    /**
     * Update record in table pmse_Project in fields prj_status by INACTIVE
     */
    _updateProStatusDisabled: function(model) {
        var self = this;
        url = App.api.buildURL(model.module, null, {id: model.id});
        attributes = {prj_status: 'INACTIVE'};
        App.api.call('update', url, attributes, {
            success: self._refresh(model, app.lang.get('LBL_PRO_DISABLE', model.module)),
            error: function (err) {
//                app.error.handleHttpError(err); if (callback) callback(err);
//                self.isWaitingResponse = false;
//                self.mergeDirtyElements();
//                self.isDirty = false;
            }
        });
    },

    /**
     * Enable record.
     *
     * @param {Event} event Click event.
     * @param {String} params.layout Layout name.
     * @param {String} params.module Module name.
     */
    enableRecord: function(model) {
        var self = this;
        this._modelToDelete = true;
        var name = model.get('name') || '';
        app.alert.show(model.get('id') + ':deleted', {
            level: 'confirmation',
            messages: app.utils.formatString(app.lang.get('LBL_PRO_ENABLE_CONFIRMATION', model.module),[name.trim()]),
            onConfirm: function() {
                self._updateProStatusEnabled(model);
            }
        });
    },

    /**
     * Update record in table pmse_Project in fields prj_status by ACTIVE
     */
    _updateProStatusEnabled: function(model) {
        var self = this;
        url = App.api.buildURL(model.module, null, {id: model.id});
        attributes = {prj_status: 'ACTIVE'};
        App.api.call('update', url, attributes, {
            success: self._refresh(model,app.lang.get('LBL_PRO_ENABLE', model.module)),
            error: function (err) {
//                app.error.handleHttpError(err); if (callback) callback(err);
//                self.isWaitingResponse = false;
//                self.mergeDirtyElements();
//                self.isDirty = false;
            }
        });
    },

    /**
     * Show warning of pmse_bussiness_rules
     */
    warnExportBusinessRules: function (model) {
        var that = this;
        if (app.cache.get("show_br_export_warning")) {
            app.alert.show('show-br-export-confirmation', {
                level: 'confirmation',
                messages: app.lang.get('LBL_PMSE_IMPORT_EXPORT_WARNING') + "<br/><br/>"
                + app.lang.get('LBL_PMSE_EXPORT_CONFIRMATION'),
                onConfirm: function() {
                    app.cache.set("show_br_export_warning", false);
                    that.exportBusinessRules(model);
                },
                onCancel: $.noop
            });
        } else {
            that.exportBusinessRules(model);
        }
    },

    /**
     * Download record of table pmse_business_rules
     */
    exportBusinessRules: function (model) {
        var url = app.api.buildURL(model.module, 'brules', {id: model.id}, {platform: app.config.platform});

        if (_.isEmpty(url)) {
            app.logger.error('Unable to get the Business Rule download uri.');
            return;
        }

        app.api.fileDownload(url, {
            error: function(data) {
                // refresh token if it has expired
                app.error.handleHttpError(data, {});
            }
        }, {iframe: this.$el});
    },
    /**
     * descriptionRecord: View description in table pmse_Business Rules in fields
     */
    descriptionRecord: function(model) {
        app.alert.dismiss('message-id');
        app.alert.show('message-id', {
            level: 'info',
            title: app.lang.get('LBL_DESCRIPTION'),
            messages: '<br/>' + model.get('description'),
            autoClose: false
        });
    },

    /**
     * {@inheritDoc}
     *
     * New model related properties are injected into each model:
     *
     * - {Boolean} overdue True if record is prior to now.
     * - {String} picture_url Picture url for model's assigned user.
     */
    _renderHtml: function() {
        if (this.meta.config) {
            this._super('_renderHtml');
            return;
        }

        var tab = this.tabs[this.settings.get('activeTab')];

        if (tab.overdue_badge) {
            this.overdueBadge = tab.overdue_badge;
        }

        _.each(this.collection.models, function(model) {
            var pictureUrl = app.api.buildFileURL({
                module: 'Users',
                id: model.get('assigned_user_id'),
                field: 'picture'
            });
            model.set('picture_url', pictureUrl);
        }, this);

        this._super('_renderHtml');
    }
});
