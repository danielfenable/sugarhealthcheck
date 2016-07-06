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

    events: {
        'click .record-edit-link-wrapper': 'handleEdit',
        'click a[name=cancel_button]': 'cancelClicked',
        'click [data-action=scroll]': 'paginateRecord',
        'click .record-panel-header': 'togglePanel',
        'click .tab a': 'setActiveTab'
    },

    initialize: function(options) {
        _.bindAll(this);
        options.meta = _.extend({}, app.metadata.getView(null, 'record'), options.meta);
        options.meta.hashSync = _.isUndefined(options.meta.hashSync) ? true : options.meta.hashSync;
//        app.view.View.prototype.initialize.call(this, options);
        this._super('initialize', [options]);

        this.context.on('approve:case', this.approveCase, this);
        this.context.on('reject:case', this.rejectCase, this);
        this.context.on('cancel:case', this.cancelCase, this);
    },

    approveCase: function(options){
        var self = this;
        var statusApprove = 'approve';
        url = App.api.buildURL('pmse_approve', null, {id: statusApprove});
        App.api.call('update', url, options.attributes, {
            success: function () {
            },
            error: function (err) {
            }
        });
        var redirect = options.module;
        app.router.navigate(redirect , {trigger: true, replace: true });
    },

    rejectCase: function(options){
        var self = this;
        var statusApprove = 'reject';
        url = App.api.buildURL('pmse_approve', null, {id: statusApprove});
        App.api.call('update', url, options.attributes, {
            success: function () {
            },
            error: function (err) {
            }
        });
        var redirect = options.module;
        app.router.navigate(redirect , {trigger: true, replace: true });
    },

    cancelCase: function(options){
        var redirect = options.module;
        app.router.navigate(redirect , {trigger: true, replace: true });
    },

    validationComplete: function(isValid) {
        if (isValid) {
            this.setButtonStates(this.STATE.VIEW);
            this.handleSave();
        }
    },


    initButtons: function() {

        if (this.options.meta && this.options.meta.buttons) {
            _.each(this.options.meta.buttons, function(button) {
                this.registerFieldAsButton(button.name);
                if (button.buttons) {
                    var dropdownButton = this.getField(button.name);
                    if (!dropdownButton) {
                        return;
                    }
                    _.each(dropdownButton.fields, function(ddButton) {
                        this.buttons[ddButton.name] = ddButton;
                    }, this);
                }
            }, this);
        }
    },
    toggleViewButtons: function(isEdit) {
        this.$('.headerpane span[data-type="badge"]').toggleClass('hide', isEdit);
        this.$('.headerpane span[data-type="favorite"]').toggleClass('hide', isEdit);
        this.$('.headerpane span[data-type="follow"]').toggleClass('hide', isEdit);
        this.$('.headerpane .btn-group-previous-next').toggleClass('hide', isEdit);
    }

})
