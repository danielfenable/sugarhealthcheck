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
(function(app) {
    app.events.on('app:init', function() {

        /**
         * This plugin disallows mass-deleting for closed won/lost items (for use in Opps and Products)
         */
        app.plugins.register('DisableMassDelete', ['view'], {
            /**
             * Attach code for when the plugin is registered on a view
             *
             * @param {Object} component
             * @param {Mixed} plugin
             */
            onAttach: function(component, plugin) {
                this.once('init', function() {
                    // we need to stop listening to the original warnDelete message
                    this.layout.off('list:massdelete:fire', this.warnDelete, this);
                    // but instead listen to our custom one
                    this.layout.on('list:massdelete:fire', this._warnDelete, this);
                }, this);
            },

            /**
             * override of parent deleteModels. Removes closed lost/won items from the list to be deleted, and
             * throws a warning if it removes anything
             *
             * @return {String} message
             */
            _warnDelete: function() {
                var config = app.metadata.getModule('Forecasts', 'config') || {},
                    sales_stage_won = config.sales_stage_won || ['Closed Won'],
                    sales_stage_lost = config.sales_stage_lost || ['Closed Lost'],
                    closed_RLI_count = 0,
                    label_key = '_STAGE',
                    message = null,
                    status = null,
                    massUpdateModel = this.getMassUpdateModel(this.module),
                    progressView = this.getProgressView(),
                    opp_view_by = app.metadata.getModule('Opportunities', 'config').opps_view_by,
                    closedModels = _.filter(massUpdateModel.models, function(model) {
                        status = null;
                        if (opp_view_by === 'RevenueLineItems') {
                            //ENT allows sales_status, so we need to check to see if this module has it and use it
                            status = model.get('sales_status');

                            //grab the closed RLI count (when on opps)
                            closed_RLI_count = model.get('closed_revenue_line_items');
                            if (_.isNull(closed_RLI_count)) {
                                closed_RLI_count = 0;
                            }
                            label_key = '_STATUS';
                        }
                        if (_.isEmpty(status)) {
                            status = model.get('sales_stage');
                        }

                        if (_.contains(sales_stage_won, status) || _.contains(sales_stage_lost, status)) {
                            message = app.lang.get('WARNING_NO_DELETE_SELECTED' + label_key);
                            return true;
                        }

                        if (closed_RLI_count > 0) {
                            message = app.lang.get('WARNING_NO_DELETE_CLOSED_SELECTED' + label_key, 'Opportunities');
                            return true;
                        }

                        return false;
                    });

                if (closedModels.length > 0) {
                    // get the mass_collection from actionmenu.js
                    var massCollection = this.context.get('mass_collection');
                    // remove the closed models from the massCollection
                    massCollection.remove(closedModels);

                    // uncheck items
                    _.each(closedModels, function(item) {
                        var id = item.module + '_' + item.id;
                        $("[name='" + id + "'] input").attr('checked', false);
                    });
                    app.alert.show('delete_warning', {
                        level: 'warning',
                        messages: message
                    });

                    //remove progressView since there is no progress
                    progressView.dispose();
                    this.layout.removeComponent(progressView);
                } else if (massUpdateModel.models.length > 0) {
                    this.warnDelete();
                }
                return message;
            }
        });
    });
})(SUGAR.App);
