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
 * @class View.Views.Base.CreateView
 * @alias SUGAR.App.view.views.CreateView
 * @extends View.Views.Base.RecordView
 */
({
    extendsFrom: 'RecordView',
    editAllMode: false,

    SAVEACTIONS: {
        SAVE_AND_CREATE: 'saveAndCreate',
        SAVE_AND_VIEW: 'saveAndView'
    },

    enableDuplicateCheck: false,
    dupecheckList: null, //duplicate list layout

    saveButtonName: 'save_button',
    cancelButtonName: 'cancel_button',
    saveAndCreateButtonName: 'save_create_button',
    saveAndViewButtonName: 'save_view_button',
    restoreButtonName: 'restore_button',

    /**
     * An array of the {@link #alerts alert} names in this view.
     *
     * @protected
     * @type {Array}
     */
    _viewAlerts: [],

    /**
     * If this create view has subpanel models to save
     */
    hasSubpanelModels: false,

    /**
     * A collection of alert messages to be used in this view. The alert methods
     * should be invoked by Function.prototype.call(), passing in an instance of
     * a sidecar view. For example:
     *
     *     // ...
     *     this.alerts.showInvalidModel.call(this);
     *     // ...
     *
     * FIXME: SC-3451 will refactor this `alerts` structure.
     * @property {Object}
     */
    alerts: {
        showInvalidModel: function() {
            if (!this instanceof app.view.View) {
                app.logger.error('This method should be invoked by Function.prototype.call(), passing in as argument' +
                    'an instance of this view.');
                return;
            }
            var name = 'invalid-data';
            this._viewAlerts.push(name);
            app.alert.show(name, {
                level: 'error',
                messages: 'ERR_RESOLVE_ERRORS'
            });
        },
        showSuccessButDeniedAccess: function() {
            if (!this instanceof app.view.View) {
                app.logger.error('This method should be invoked by Function.prototype.call(), passing in as argument' +
                    'an instance of this view.');
                return;
            }
            var name = 'invalid-data';
            this._viewAlerts.push(name);
            app.alert.show(name, {
                level: 'warning',
                messages: 'LBL_RECORD_SAVED_ACCESS_DENIED',
                autoClose: true,
                autoCloseDelay: 9000
            });
        }
    },

    /**
     * Initialize the view and prepare the model with default button metadata
     * for the current layout.
     */
    initialize: function (options) {
        this.plugins = _.union(this.plugins || [], [
            'FindDuplicates'
        ]);

        //add states for create view
        this.STATE = _.extend({}, this.STATE, {
            CREATE: 'create',
            SELECT: 'select',
            DUPLICATE: 'duplicate'
        });

        //inherit base create metadata for purpose of initialization
        options.meta = _.extend({}, app.metadata.getView(null, 'create'), options.meta);

        this._super("initialize", [options]);
        this.model.off("change", null, this);

        //keep track of what post-save action was chosen in case user chooses to ignore dupes
        this.context.lastSaveAction = null;

        //listen for the select and edit button
        this.context.on('list:dupecheck-list-select-edit:fire', this.editExisting, this);

        //extend the record view definition
        this.meta = _.extend({}, app.metadata.getView(this.module, 'record'), this.meta);

        //enable or disable duplicate check?
        var moduleMetadata = app.metadata.getModule(this.module);
        this.enableDuplicateCheck = (moduleMetadata && moduleMetadata.dupCheckEnabled) || false;

        // If user has no list acl it doesn't make sense to enable dupecheck
        if (!app.acl.hasAccess('list', this.module)) {
            this.enableDuplicateCheck = false;
        }

        var fields = (moduleMetadata && moduleMetadata.fields) ? moduleMetadata.fields : {};

        this.model.relatedAttributes = this.model.relatedAttributes || {};

        var assignedUserField = _.find(fields, function(field) {
            return field.type === 'relate' &&
                (field.name === 'assigned_user_id' || field.id_name === 'assigned_user_id');
        });
        if (assignedUserField) {
            // set the default assigned user as current user, unless we are copying another record
            var isDuplicate = this.model.has('assigned_user_id') && this.model.has('assigned_user_name');
            if (!isDuplicate) {
                this.model.setDefault({
                    'assigned_user_id': app.user.id,
                    'assigned_user_name': app.user.get('full_name')
                });
            }
            this.model.relatedAttributes.assigned_user_id = app.user.id;
            this.model.relatedAttributes.assigned_user_name = app.user.get('full_name');
        }

        this.model.on('error:validation', function() {
            this.alerts.showInvalidModel.call(this);
            this.enableButtons();
        }, this);

        // need to reset the default attributes because the plugin may have
        // calculated default values.
        this.on('sugarlogic:initialize', function() {
            this.model.setDefault(this.model.attributes);
        }, this);
    },

    /**
     * Extends in order to set the {@link #action} to `create` while the fields
     * are rendering.
     *
     * This is a temporary fix that will be reviewed in 7.8. The action should
     * be `create` at all times but doing the proper fix may have bad impacts on
     * ACLs/non editable fields. Follow up in SC-4511.
     *
     * @inheritDoc
     */
    _renderFields: function() {
        var current = this.action;
        this.action = 'create';
        this._super('_renderFields');
        this.action = current;
    },

    /**
     * @inheritDoc
     */
    /**
     * Check unsaved changes.
     * This method is called by {@link app.plugins.Editable}.
     *
     * @return {Boolean} `true` if current model contains unsaved changes,
     *  `false` otherwise.
     */
    hasUnsavedChanges: function() {
        if (this.resavingAfterMetadataSync) {
            return false;
        }
        return this.model.isNew() && !_.isEqual(this.model.getDefault(), this.model.attributes);
    },

    handleSync: function () {
        //override handleSync since there is no need to save the previous model state
    },

    /**
     * @inheritdoc
     *
     * Wires up the save buttons.
     */
    delegateButtonEvents: function() {
        this.context.on('button:' + this.saveButtonName + ':click', this.save, this);
        this.context.on('button:' + this.saveAndCreateButtonName + ':click', this.saveAndCreate, this);
        this.context.on('button:' + this.saveAndViewButtonName + ':click', this.saveAndView, this);
        this.context.on('button:' + this.cancelButtonName + ':click', this.cancel, this);
        this.context.on('button:' + this.restoreButtonName + ':click', this.restoreModel, this);
    },

    _render: function () {
        this._super("_render");

        this.setButtonStates(this.STATE.CREATE);

        // Don't need to add dupecheck layout if dupecheck disabled
        if (this.enableDuplicateCheck) {
            this.renderDupeCheckList();
        }

        //SP-1502: Broadcast model changes so quickcreate field can keep track of unsaved changes
        app.events.trigger('create:model:changed', false);
        this.model.on('change', function() {
            app.events.trigger('create:model:changed', this.hasUnsavedChanges());
        }, this);
    },

    /**
     * Determine appropriate save action and execute it
     * Default to saveAndClose
     */
    save: function () {
        switch (this.context.lastSaveAction) {
            case this.SAVEACTIONS.SAVE_AND_CREATE:
                this.saveAndCreate();
                break;
            case this.SAVEACTIONS.SAVE_AND_VIEW:
                this.saveAndView();
                break;
            default:
                this.saveAndClose();
        }
    },

    /**
     * Save and close drawer
     */
    saveAndClose: function () {
        this.initiateSave(_.bind(function () {
            if(app.drawer){
                app.drawer.close(this.context, this.model);
            }
        }, this));
    },

    /**
     * Handle click on the cancel link
     */
    cancel: function () {
        //Clear unsaved changes on cancel.
        app.events.trigger('create:model:changed', false);
        this.$el.off();
        if(app.drawer){
            app.drawer.close(this.context);
            this._dismissAllAlerts();
        }
    },

    /**
     * Handle click on save and create another link
     */
    saveAndCreate: function() {
        this.context.lastSaveAction = this.SAVEACTIONS.SAVE_AND_CREATE;
        this.initiateSave(_.bind(
            function() {
                this.clear();
                // set the default attributes and the relatedAttributes back
                // on the model since it's been cleared out
                this.model.set(_.extend(this.model.getDefault(), this.model.relatedAttributes));
                this.resetDuplicateState();

                if (this.hasSubpanelModels) {
                    // loop through subpanels and call resetCollection on create subpanels
                    _.each(this.context.children, function(child) {
                        if (child.get('isCreateSubpanel')) {
                            this.context.trigger('subpanel:resetCollection:' + child.get('link'), true);
                        }
                    }, this);

                    // reset the hasSubpanelModels flag
                    this.hasSubpanelModels = false;
                }
        }, this));
    },

    /**
     * Handle click on save and view link
     */
    saveAndView: function () {
        this.context.lastSaveAction = this.SAVEACTIONS.SAVE_AND_VIEW;
        this.initiateSave(_.bind(function () {
                app.navigate(this.context, this.model);
        }, this));
    },

    /**
     * Handle click on restore to original link
     */
    restoreModel: function () {
        this.model.clear();
        if (this._origAttributes) {
            this.model.set(this._origAttributes);
            this.model.isCopied = true;
        }

        // reset subpanels
        if (this.hasSubpanelModels) {
            // loop through subpanels and call resetCollection on create subpanels
            _.each(this.context.children, function(child) {
                if (child.get('isCreateSubpanel')) {
                    this.context.trigger('subpanel:resetCollection:' + child.get('link'), true);
                }
            }, this);

            // reset the hasSubpanelModels flag
            this.hasSubpanelModels = false;
        }
        
        this.createMode = true;
        if (!this.disposed) {
            this.render();
        }
        this.setButtonStates(this.STATE.CREATE);
    },

    /**
     * Check for possible duplicates before creating a new record
     * @param callback
     */
    initiateSave: function (callback) {
        this.disableButtons();
        async.waterfall([
            _.bind(this.validateSubpanelModelsWaterfall, this),
            _.bind(this.validateModelWaterfall, this),
            _.bind(this.dupeCheckWaterfall, this),
            _.bind(this.createRecordWaterfall, this)
        ], _.bind(function (error) {
            this.enableButtons();
            if (error && error.status == 412 && !error.request.metadataRetry) {
                this.handleMetadataSyncError(error);
            } else if (!error && !this.disposed) {
                this.context.lastSaveAction = null;
                callback();
            }
        }, this));
    },
    /**
     * Check to see if all fields are valid
     * @param callback
     */
    validateModelWaterfall: function(callback) {
        this.model.doValidate(this.getFields(this.module), function(isValid) {
            callback(!isValid);
        });
    },

    /**
     * Check to see if there are subpanel create models on this view
     * And trigger an event to tell the subpanel to validate itself
     *
     * @param callback
     * @returns {*}
     */
    validateSubpanelModelsWaterfall: function(callback) {
        this.hasSubpanelModels = false;
        _.each(this.context.children, function(child) {
            if (child.get('isCreateSubpanel')) {
                this.hasSubpanelModels = true;
                this.context.trigger('subpanel:validateCollection:' + child.get('link'), callback, true);
            }
        }, this);

        // If there are no subpanel models, callback false so the waterfall can continue
        if (!this.hasSubpanelModels) {
            return callback(false);
        }
    },

    /**
     * Check for possible duplicate records
     * @param callback
     */
    dupeCheckWaterfall: function (callback) {
        var success = _.bind(function (collection) {
                if (this.disposed) {
                    callback(true);
                }
                if (collection.models.length > 0) {
                    this.handleDuplicateFound(collection);
                    callback(true);
                } else {
                    this.resetDuplicateState();
                    callback(false);
                }
            }, this),
            error = _.bind(function (e) {
                if (e.status == 412 && !e.request.metadataRetry) {
                    this.handleMetadataSyncError(e);
                } else {
                    callback(true);
                }
            }, this);

        if (this.skipDupeCheck() || !this.enableDuplicateCheck) {
            callback(false);
        } else {
            this.checkForDuplicate(success, error);
        }
    },

    /**
     * Create new record
     * @param callback
     */
    createRecordWaterfall: function (callback) {
        var success = _.bind(function () {
                var acls = this.model.get('_acl');
                if (!_.isEmpty(acls) && acls.access === 'no' && acls.view === 'no') {
                    //This happens when the user creates a record he won't have access to.
                    //In this case the POST request returns a 200 code with empty response and acls set to no.
                    this.alerts.showSuccessButDeniedAccess.call(this);
                    callback(false);
                } else {
                    this._dismissAllAlerts();
                    app.alert.show('create-success', {
                        level: 'success',
                        messages: this.buildSuccessMessage(this.model),
                        autoClose: true,
                        autoCloseDelay: 10000,
                        onLinkClick: function() {
                            app.alert.dismiss('create-success');
                        }
                    });
                    callback(false);
                }
            }, this),
            error = _.bind(function (e) {
                if (e.status == 412 && !e.request.metadataRetry) {
                    this.handleMetadataSyncError(e);
                } else {
                    callback(true);
                }
            }, this);

        this.saveModel(success, error);
    },

    /**
     * Check the server to see if there are possible duplicate records.
     * @param success
     * @param error
     */
    checkForDuplicate: function (success, error) {
        var options = {
            //Show alerts for this request
            showAlerts: true,
            success: success,
            error: error
        };

        this.context.trigger("dupecheck:fetch:fire", this.model, options);
    },

    /**
     * Duplicate found: display duplicates and change buttons
     */
    handleDuplicateFound: function () {
        this.setButtonStates(this.STATE.DUPLICATE);
        this.dupecheckList.show();
    },

    /**
     * Clear out all things related to duplicate checks
     */
    resetDuplicateState: function () {
        this.setButtonStates(this.STATE.CREATE);
        this.hideDuplicates();
    },

    /**
     * Called when current record is being saved to allow customization of options and params
     * during save
     *
     * Override to return set of custom options
     *
     * @param {Object} options The current set of options that is going to be used.  This is hand for extending
     */
    getCustomSaveOptions: function (options) {
        return {};
    },

    /**
     * Create a new record
     * @param success
     * @param error
     */
    saveModel: function (success, error) {
        var self = this,
            options;
        options = {
            success: success,
            error: error,
            viewed: true,
            relate: (self.model.link) ? true : null,
            //Show alerts for this request
            showAlerts: {
                'process': true,
                'success': false,
                'error': false //error callback implements its own error handler
            },
            lastSaveAction: this.context.lastSaveAction
        };
        this.applyAfterCreateOptions(options);

        // Check if this has subpanel create models
        if (this.hasSubpanelModels) {
            _.each(this.context.children, function(child) {
                if (child.get('isCreateSubpanel')) {
                    // create the child collection JSON structure to save
                    var childCollection = {
                        create: []
                    };

                    // loop through the models in the collection and push each model's JSON
                    // data to the 'create' array
                    _.each(child.get('collection').models, function(model) {
                        childCollection.create.push(model.toJSON())
                    }, this)

                    // set the child JSON collection data to the model
                    this.model.set(child.get('link'), childCollection);
                }
            }, this);
        }

        options = _.extend({}, options, self.getCustomSaveOptions(options));
        self.model.save(null, options);
    },

    /**
     * Apply after_create parameters to the URL to specify operations to execute after creating a record.
     * @param options
     */
    applyAfterCreateOptions: function(options) {
        var copiedFromModelId = this.context.get('copiedFromModelId');

        if (copiedFromModelId && this.model.isCopy()) {
            options.params = options.params || {};
            options.params.after_create = {
                copy_rel_from: copiedFromModelId
            };
        }
    },

    /**
     * Using the model returned from the API call, build the success message
     * @param model
     * @returns {*}
     */
    buildSuccessMessage: function(model) {
        var modelAttributes,
            successLabel = 'LBL_RECORD_SAVED_SUCCESS',
            successMessageContext;

        //if we have model attributes, use them to build the message, otherwise use a generic message
        if (model && model.attributes) {
            modelAttributes = model.attributes;
        } else {
            modelAttributes = {};
            successLabel = 'LBL_RECORD_SAVED';
        }

        //use the model attributes combined with data from the view to build the success message context
        successMessageContext = _.extend({
            module: this.module,
            moduleSingularLower: this.moduleSingular.toLowerCase()
        }, modelAttributes);

        return app.lang.get(successLabel, this.module, successMessageContext);
    },

    /**
     * Check to see if we should skip duplicate check.
     * @return {boolean}
     */
    skipDupeCheck: function () {
        return (this.getCurrentButtonState() === this.STATE.DUPLICATE);
    },

    /**
     * Clears out field values
     */
    clear: function () {
        this.model.clear();
        if (!this.disposed) {
            this.render();
        }
    },

    /**
     * Make the specified record as the data to be edited, and merge the existing data.
     * @param model
     */
    editExisting: function (model) {
        var origAttributes = this.saveFormData();

        this.model.clear();
        this.model.set(this.extendModel(model, origAttributes));

        this.createMode = false;
        if (!this.disposed) {
            this.render();
        }
        this.toggleEdit(true);

        this.hideDuplicates();
        this.setButtonStates(this.STATE.SELECT);
    },

    /**
     * Merge the selected record with the data entered in the form
     * @param newModel
     * @param origAttributes
     * @return {*}
     */
    extendModel: function (newModel, origAttributes) {
        var modelAttributes = _.clone(newModel.attributes);

        _.each(modelAttributes, function (value, key) {
            if (_.isUndefined(value) || _.isNull(value) ||
                ((_.isObject(value) || _.isArray(value) || _.isString(value)) && _.isEmpty(value))) {
                delete modelAttributes[key];
            }
        });

        return _.extend({}, origAttributes, modelAttributes);
    },

    /**
     * Save the data entered in the form
     * @return {*}
     */
    saveFormData: function () {
        this._origAttributes = _.clone(this.model.attributes);
        return this._origAttributes;
    },

    /**
     * Sets the dupecheck list type
     *
     * @param {String} type view to load
     */
    setDupeCheckType: function(type) {
        this.context.set('dupelisttype', type);
    },

    /**
     * Render duplicate check list table
     */
    renderDupeCheckList: function () {
        this.setDupeCheckType('dupecheck-list-edit');
        this.context.set('collection', this.createDuplicateCollection(this.model));

        if (_.isNull(this.dupecheckList)) {
            this.dupecheckList = app.view.createLayout({
                context: this.context,
                name: 'create-dupecheck',
                module: this.module
            });
            this.addToLayoutComponents(this.dupecheckList);
        }

        this.$('.headerpane').after(this.dupecheckList.$el);
        this.dupecheckList.hide();
        this.dupecheckList.render();
    },

    /**
     * Add component to layout's component list so it gets cleaned up properly on dispose
     *
     * @param component
     */
    addToLayoutComponents: function (component) {
        this.layout._components.push(component);
    },

    /**
     * If initialized (depends on this.enableDuplicateCheck flag) hides the
     * duplicate list.
     */
    hideDuplicates: function () {
        if (this.dupecheckList) {
            this.dupecheckList.hide();
        }
    },

    /**
     * Disable buttons
     */
    disableButtons: function () {
        this.toggleButtons(false);
    },

    /**
     * Enable buttons
     */
    enableButtons: function () {
        this.toggleButtons(true);
    },

    registerShortcuts: function() {
        this._super('registerShortcuts');

        app.shortcuts.register('Create:Save', ['ctrl+s','ctrl+alt+a'], function() {
            var $saveButton = this.$('a[name=' + this.saveButtonName + ']');
            if ($saveButton.is(':visible') && !$saveButton.hasClass('disabled')) {
                $saveButton.get(0).click();
            }
        }, this, true);

        app.shortcuts.register('Create:Cancel', ['esc','ctrl+alt+l'], function() {
            var $cancelButton = this.$('a[name=' + this.cancelButtonName + ']');
            if ($cancelButton.is(':visible') && !$cancelButton.hasClass('disabled')) {
                $cancelButton.get(0).click();
            }
        }, this, true);
    },

    /**
     * Dismisses all {@link #_viewAlerts alerts} defined in this view.
     *
     * @private
     */
    _dismissAllAlerts: function() {
        if (_.isEmpty(this._viewAlerts)) {
            return;
        }
        _.each(_.uniq(this._viewAlerts), function(alert) {
            app.alert.dismiss(alert);
        });
    }
})
