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

    initialize: function (options) {
        app.view.invokeParent(this, {type: 'view', name: 'record', method: 'initialize', args:[options]});
        this.context.on('button:open_designer:click', this.openDesigner, this);
        this.context.on('button:export_process:click', this.showExportingWarning, this);
    },

    openDesigner: function(model) {
        app.navigate(this.context, model, 'layout/designer');
    },

    showExportingWarning: function (model) {
        var that = this;
        if (app.cache.get("show_project_export_warning")) {
            app.alert.show('project-export-confirmation',  {
                level: 'confirmation',
                messages: App.lang.get('LBL_PMSE_IMPORT_EXPORT_WARNING') + "<br/><br/>"
                + app.lang.get('LBL_PMSE_EXPORT_CONFIRMATION'),
                onConfirm: function () {
                    app.cache.set("show_project_export_warning", false);
                    that.exportProcess(model);
                },
                onCancel: $.noop
            });
        } else {
            that.exportProcess(model);
        }
    },

    exportProcess: function(model) {
        var url = app.api.buildURL(model.module, 'dproject', {id: model.id}, {platform: app.config.platform});

        if (_.isEmpty(url)) {
            app.logger.error('Unable to get the Project download uri.');
            return;
        }

        app.api.fileDownload(url, {
            error: function(data) {
                // refresh token if it has expired
                app.error.handleHttpError(data, {});
            }
        }, {iframe: this.$el});
    },

    warnDelete: function() {
        var verifyURL = app.api.buildURL(
            this.module,
            'verify',
            {
                id : this.model.get('id')
            }
        ),
            self = this;
        app.api.call('read', verifyURL, null, {
            success: function(data) {
                if (!data) {
                    self._super('warnDelete', []);
                } else {
                    app.alert.show('message-id', {
                        level: 'warning',
                        title: app.lang.get('LBL_WARNING'),
                        messages: app.lang.get('LBL_PA_PRODEF_HAS_PENDING_PROCESSES'),
                        autoClose: false
                    });
                }
            }
        });
    }
})
