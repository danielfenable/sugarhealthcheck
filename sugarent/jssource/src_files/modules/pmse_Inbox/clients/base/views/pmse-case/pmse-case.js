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
        'click a[name=cancel_button]': 'cancelClicked'
    },

    initialize: function(options) {

        this.case = this.options.context.get('case');
        _.bindAll(this);
        options.meta = _.extend({}, app.metadata.getView(this.options.module, 'record'), options.meta);
        options.meta.hashSync = _.isUndefined(options.meta.hashSync) ? true : options.meta.hashSync;
        options.meta.buttons = this.case.buttons;
        this._super('initialize', [options]);
        this.buttons = {};
        this.createMode = this.context.get('create') ? true : false;
        this.action = 'detail';
        this.context.on('change:record_label', this.setLabel, this);
        this.context.set('viewed', true);
        this.context.set('dataView', 'record');
        this.model.on('duplicate:before', this.setupDuplicateFields, this);
        this.on('editable:keydown', this.handleKeyDown, this);
        this.on('editable:mousedown', this.handleMouseDown, this);
        this.on('field:error', this.handleFieldError, this);

        //event register for preventing actions
        // when user escapes the page without confirming deleting
        app.routing.before('route', this.beforeRouteDelete, this, true);
        $(window).on('beforeunload.delete' + this.cid, _.bind(this.warnDeleteOnRefresh, this));

        if (this.createMode) {
            this.model.isNotEmpty = true;
        }

        this.noEditFields = [];
        // properly namespace SHOW_MORE_KEY key
        this.MORE_LESS_KEY = app.user.lastState.key(this.MORE_LESS_KEY, this);
        this.adjustHeaderpane = _.bind(_.debounce(this.adjustHeaderpane, 50), this);
        $(window).on('resize.' + this.cid, this.adjustHeaderpane);

        $(window).on('resize.' + this.cid, this.overflowTabs);

        // initialize tab view after the component is attached to DOM
        this.on('append', function() {
            this.overflowTabs();
            this.handleActiveTab();
        });

    },

    validationComplete: function(isValid) {
        if (isValid) {
            this.setButtonStates(this.STATE.VIEW);
            this.handleSave();
        }
    },

    delegateButtonEvents: function() {
        this.context.on('button:edit_button:click', this.editClicked, this);

        this.context.on('case:cancel', this.cancelCase, this);
        this.context.on('case:claim', this.caseClaim, this);
        this.context.on('case:approve', this.caseApprove, this);
        this.context.on('case:reject', this.caseReject, this);
        this.context.on('case:route', this.caseRoute, this);

        this.context.on('case:history', this.caseHistory, this);
        this.context.on('case:status', this.caseStatus, this);
        this.context.on('case:add:notes', this.caseAddNotes, this);
        this.context.on('case:change:owner', this.caseChangeOwner, this);
        this.context.on('case:reassign', this.caseReassign, this);
    },

    cancelCase: function () {
        this.redirectCase();
    },

    caseClaim: function () {
        app.alert.show('upload', {level: 'process', title: 'LBL_LOADING', autoclose: false});
        var frm_action = 'Claim';
        var value = this.model.attributes;
        value.moduleName = this.case.flow.cas_sugar_module;
        value.beanId = this.case.flow.cas_sugar_object_id;
        value.cas_id = this.case.flow.cas_id;
        value.cas_index = this.case.flow.cas_index;
        value.taskName = this.case.title.activity;
        var self = this;
        var pmseInboxUrl = app.api.buildURL('pmse_Inbox/engine_claim','',{},{});
        app.api.call('update', pmseInboxUrl, value,{
            success: function (){
                app.alert.dismiss('upload');
                self.redirectCase(frm_action);
            }
        });
    },
    caseApprove: function () {
        this.model.doValidate(this.getFields(this.module), _.bind(this.validationCompleteApprove, this));
    },

    validationCompleteApprove: function(isValid) {
        if (isValid) {
            app.alert.show('upload', {level: 'process', title: 'LBL_LOADING', autoclose: false});
            var value = this.model.attributes;
            value.frm_action = 'Approve';
            value.idFlow = this.case.flowId;
            value.idInbox = this.case.inboxId;
            value.cas_id = this.case.flow.cas_id;
            value.cas_index = this.case.flow.cas_index;
            value.moduleName = this.case.flow.cas_sugar_module;
            value.beanId = this.case.flow.cas_sugar_object_id;
            value.taskName = this.case.title.activity;
            var self = this;
            var pmseInboxUrl = app.api.buildURL('pmse_Inbox/engine_route','',{},{});
            app.api.call('update', pmseInboxUrl, value,{
                success: function (){
                    self.redirectCase();
                }
            });
        }
    },

    caseReject: function () {
        app.alert.show('upload', {level: 'process', title: 'LBL_LOADING', autoclose: false});
        this.model.doValidate(this.getFields(this.module), _.bind(this.validationCompleteReject, this));
    },

    validationCompleteReject: function(isValid) {
        if (isValid) {
            var value = this.model.attributes;
            value.frm_action = 'Reject';
            value.idFlow = this.case.flowId;
            value.idInbox = this.case.inboxId;
            value.cas_id = this.case.flow.cas_id;
            value.cas_index = this.case.flow.cas_index;
            value.moduleName = this.case.flow.cas_sugar_module;
            value.beanId = this.case.flow.cas_sugar_object_id;
            value.taskName = this.case.title.activity;
            var self = this;
            var pmseInboxUrl = app.api.buildURL('pmse_Inbox/engine_route','',{},{});
            app.api.call('update', pmseInboxUrl, value,{
                success: function (){
                    self.redirectCase();
                }
            });
        }
    },

    caseRoute: function () {
        this.model.doValidate(this.getFields(this.module), _.bind(this.validationCompleteRoute, this));
    },

    validationCompleteRoute: function(isValid) {
        if (isValid) {
            var value = this.model.attributes;
            value.frm_action = 'Route';
            value.idFlow = this.case.flowId;
            value.idInbox = this.case.inboxId;
            value.cas_id = this.case.flow.cas_id;
            value.cas_index = this.case.flow.cas_index;
            value.moduleName = this.case.flow.cas_sugar_module;
            value.beanId = this.case.flow.cas_sugar_object_id;
            value.taskName = this.case.title.activity;
            var self = this;
            var pmseInboxUrl = app.api.buildURL('pmse_Inbox/engine_route','',{},{});
            app.api.call('update', pmseInboxUrl, value,{
                success: function (){
                    self.redirectCase();
                }
            });
        }
    },

    redirectCase: function(isRoute){
        app.alert.dismiss('upload');
        switch(isRoute){
            case 'Claim':
                window.location.reload();
                break;
            default:
                app.router.list("Home");
                break;
        };
    },

    caseHistory: function(){
        showHistory(this.case.flow.cas_id, this.case.flow.cas_index);
    },

    caseStatus: function(){
        showImage(this.case.flow.cas_id);
    },

    caseAddNotes: function(){
        showNotes(this.case.flow.cas_id, this.case.flow.cas_index);
    },

    caseChangeOwner: function () {
        var value = this.model.attributes;
        value.moduleName = this.case.flow.cas_sugar_module;
        value.beanId = this.case.flow.cas_sugar_object_id;
        adhocForm(this.case.flow.cas_id, this.case.flow.cas_index, this.case.flowId, this.case.inboxId,this.case.title.activity,value);
    },

    caseReassign: function () {
        var value = this.model.attributes;
        value.moduleName = this.case.flow.cas_sugar_module;
        value.beanId = this.case.flow.cas_sugar_object_id;
        reassignForm(this.case.flow.cas_id, this.case.flow.cas_index, this.case.flowId, this.case.inboxId,this.case.title.activity,value);
    },


    setEditableFields: function() {
        delete this.editableFields;
        this.editableFields = [];
        var previousField, firstField;
        _.each(this.fields, function(field) {
            if(this.checkReadonly(field)){
                field.def.readonly = true;
            }

            var readonlyField = field.def.readonly ||
                _.indexOf(this.noEditFields, field.def.name) >= 0 ||
                field.parent || (field.name && this.buttons[field.name]);

            if (readonlyField) {
                // exclude read only fields
                return;
            }
            if(this.checkRequired(field)){
                field.def.required = true;
            }
            if (previousField) {
                previousField.nextField = field;
                field.prevField = previousField;
            } else {
                firstField = field;
            }
            previousField = field;
            this.editableFields.push(field);

        }, this);

        if (previousField) {
            previousField.nextField = firstField;
            firstField.prevField = previousField;
        }

    },

    handleSave: function() {
        var self = this;
        self.inlineEditMode = false;

        app.file.checkFileFieldsAndProcessUpload(self, {
                success: function(response) {
                    if (response.record && response.record.date_modified) {
                        self.model.set('date_modified', response.record.date_modified);
                    }
                    self._saveModel();
                }
            }, {
                deleteIfFails: false
            }
        );

        self.$('.record-save-prompt').hide();
        if (!self.disposed) {
            self.render();
        }
    },
    toggleViewButtons: function(isEdit) {
        this.$('.headerpane span[data-type="badge"]').toggleClass('hide', isEdit);
        this.$('.headerpane span[data-type="favorite"]').toggleClass('hide', isEdit);
        this.$('.headerpane span[data-type="follow"]').toggleClass('hide', isEdit);
        this.$('.headerpane .btn-group-previous-next').toggleClass('hide', isEdit);
    },

    _saveModel: function() {
        var options,
            successCallback = _.bind(function() {
                // Loop through the visible subpanels and have them sync. This is to update any related
                // fields to the record that may have been changed on the server on save.
                _.each(this.context.children, function(child) {
                    if (!_.isUndefined(child.attributes) && !_.isUndefined(child.attributes.isSubpanel)) {
                        if (child.attributes.isSubpanel && !child.attributes.hidden) {
                            child.attributes.collection.fetch();
                        }
                    }
                });
                if (this.createMode) {
                    app.navigate(this.context, this.model);
                } else if (!this.disposed) {
                    this.render();
                }
            }, this);

        //Call editable to turn off key and mouse events before fields are disposed (SP-1873)
        this.turnOffEvents(this.fields);

        options = {
            showAlerts: true,
            success: successCallback,
            error: _.bind(function(error) {
                if (error.status === 412 && !error.request.metadataRetry) {
                    this.handleMetadataSyncError(error);
                } else if (error.status === 409) {
                    app.utils.resolve409Conflict(error, this.model, _.bind(function(model, isDatabaseData) {
                        if (model) {
                            if (isDatabaseData) {
                                successCallback();
                            } else {
                                this._saveModel();
                            }
                        }
                    }, this));
                } else {
                    this.editClicked();
                }
            }, this),
            lastModified: this.model.get('date_modified'),
            viewed: true
        };

        options = _.extend({}, options, this.getCustomSaveOptions(options));

        this.model.save({}, options);
    },


    _buildGridsFromPanelsMetadata: function(panels) {
        var lastTabIndex = 0;
        this.noEditFields = [];

        _.each(panels, function(panel) {
            // it is assumed that a field is an object but it can also be a string
            // while working with the fields, might as well take the opportunity to check the user's ACLs for the field
            _.each(panel.fields, function(field, index) {
                if(this.checkReadonly(field)){
                    field.readonly = true;
                }
                if (_.isString(field)) {
                    panel.fields[index] = field = {name: field};
                }

                var keys = _.keys(field);

                // Make filler fields readonly
                if (keys.length === 1 && keys[0] === 'span')  {
                    field.readonly = true;
                }

                // disable the pencil icon if the user doesn't have ACLs
                if (field.type === 'fieldset') {
                    if (field.readonly || _.every(field.fields, function(field) {
                        return !app.acl.hasAccessToModel('edit', this.model, field.name);
                    }, this)) {
                        this.noEditFields.push(field.name);
                    }
                } else if (field.readonly || !app.acl.hasAccessToModel('edit', this.model, field.name)) {
                    this.noEditFields.push(field.name);
                }
            }, this);

            // Set flag so that show more link can be displayed to show hidden panel.
            if (panel.hide) {
                this.hiddenPanelExists = true;
            }

            // labels: visibility for the label
            if (_.isUndefined(panel.labels)) {
                panel.labels = true;
            }

            if (_.isFunction(this.getGridBuilder)) {
                var options = {
                        fields: panel.fields,
                        columns: panel.columns,
                        labels: panel.labels,
                        labelsOnTop: panel.labelsOnTop,
                        tabIndex: lastTabIndex
                    },
                    gridResults = this.getGridBuilder(options).build();

                panel.grid = gridResults.grid;
                lastTabIndex = gridResults.lastTabIndex;
            }
        }, this);
    },


    getFieldNames: function(module) {

        var fields = app.view.View.prototype.getFieldNames.call(this, module);
        var favorite = _.find(this.meta.panels, function(panel) {
            return _.find(panel.fields, function(field) {
                return field.type === 'favorite';
            });
        });
        var follow = _.find(this.meta.panels, function(panel) {
            return _.find(panel.fields, function(field) {
                return field.type === 'follow';
            });
        });
        if (favorite) {
            fields = _.union(fields, ['my_favorite']);
        }
        if (follow) {
            fields = _.union(fields, ['following']);
        }
        return fields;
    },


    checkReadonly: function(field){
        var isReadonly = false;
        _.each(this.case.readonly, function(caseField){
            if(field.name=== caseField){
                isReadonly = true;
            }
        }, this);
        return isReadonly;
    },

    checkRequired: function(field){
        var isRequired = false;
        _.each(this.case.required, function(caseField){
            if(field.name=== caseField){
                isRequired = true;
            }
        }, this);
        return isRequired;
    }

})
