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
        this.context.on('button:design_emailtemplates:click', this.designEmailTemplates, this);
        this.context.on('button:export_emailtemplates:click', this.warnExportEmailTemplates, this);
    },

    _render: function() {
        this._super('_render');
        this.$('.record-cell[data-name=subject]').remove();
        this.$('.record-cell[data-name=body_html]').remove();
    },

    designEmailTemplates: function(model) {
        app.navigate(this.context, model, 'layout/emailtemplates');
    },

    warnExportEmailTemplates: function (model) {
        var that = this;
        if (app.cache.get("show_emailtpl_export_warning")) {
            app.alert.show('emailtpl-export-confirmation', {
                level: 'confirmation',
                messages: app.lang.get('LBL_PMSE_IMPORT_EXPORT_WARNING') + "<br/><br/>"
                + app.lang.get("LBL_PMSE_EXPORT_CONFIRMATION"),
                onConfirm: function () {
                    app.cache.set('show_emailtpl_export_warning', false);
                    that.exportEmailTemplates(model);
                },
                onCancel: $.noop
            });
        } else {
            that.exportEmailTemplates(model);
        }
    },

    exportEmailTemplates: function(model) {
        var url = app.api.buildURL(model.module, 'etemplate', {id: model.id}, {platform: app.config.platform});

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
    }
})
