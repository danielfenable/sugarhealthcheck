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
 * @class View.Layouts.Base.ConfigDrawerLayout
 * @alias SUGAR.App.view.layouts.BaseConfigDrawerLayout
 * @extends View.Layout
 */
({

    /**
     * Holds the current module the user is in when config is called
     */
    currentModule: undefined,

    /**
     * Holds an object with the current module in it for parsing language strings
     *
     * <pre><code>
     *  { module: currentModule }
     * </pre></code>
     */
    moduleLangObj: undefined,

    /**
     * Check to make sure the module actually has a config in metadata
     */
    configMetadataOK: false,

    /**
     * If User access to this module is OK
     */
    accessUserOK: false,

    /**
     * If User's access to module-specific ACLs are OK
     */
    accessModuleOK: false,

    /**
     * If DB or other module-specific configuration are OK
     */
    accessConfigOK: false,

    /**
     * @inheritdoc
     */
    initialize: function(options) {
        this.currentModule = app.controller.context.get('module');
        this.moduleLangObj = {
            module: this.currentModule
        };

        if (this.checkAccess()) {
            // get the context model
            var ctxModel = options.context.get('model'),
                metadata = app.metadata.getModule(this.currentModule);
            // empty the model
            ctxModel.clear({silent: true});

            if (_.has(metadata, 'config')) {
                // load the model with module's config
                ctxModel.set(metadata.config);
            }

            this.loadConfig(options);
        } else {
            this.blockModule()
        }
    },

    /**
     * Continues initializing Config and loads data
     *
     * @param {Object} options The `options` param passed in to initialize
     */
    loadConfig: function(options) {
        this._super('initialize', [options]);
        this._super('loadData');
    },

    /**
     * Checks if User has access to this module
     * Should be overridden in modules to provide module-specific access requirements
     *
     * @returns {boolean}
     */
    checkAccess: function() {
        this.configMetadataOK = this._checkConfigMetadata();
        this.accessUserOK = this._checkUserAccess();
        this.accessModuleOK = this._checkModuleAccess();
        this.accessConfigOK = this._checkModuleConfig();
        return (this.configMetadataOK && this.accessUserOK && this.accessModuleOK && this.accessConfigOK);
    },

    /**
     * Checks if there's actually config in the metadata for the current module
     *
     * @returns {boolean}
     * @private
     */
    _checkConfigMetadata: function() {
        return !_.isEmpty(app.metadata.getModule(this.currentModule, 'config'));
    },

    /**
     * Checks if the User has access to the current module
     *
     * @returns {boolean}
     * @private
     */
    _checkUserAccess: function() {
        return !_.has(app.user.getAcls()[this.currentModule], 'access');
    },

    /**
     * Allow modules to have specific access checks to allow configuration
     * Ex. Forecasts is only configurable by SystemAdmins & Forecasts Developers, not Forecasts admins
     *
     * @returns {boolean}
     * @private
     */
    _checkModuleAccess: function() {
        return true;
    },

    /**
     * Adds an extra level for if the config cannot be loaded because of some module-specific case
     * Ex. Forecasts config doesn't have the right Sales Stage Won/Lost
     *
     * @returns {boolean}
     * @private
     */
    _checkModuleConfig: function() {
        return true;
    },

    /**
     * Blocks config from continuing to load
     */
    blockModule: function() {
        var title = app.lang.get('LBL_CONFIG_BLOCKED_TITLE', this.currentModule, this.moduleLangObj),
            msg;

        if (!this.configMetadataOK) {
            msg = app.lang.get('LBL_CONFIG_BLOCKED_DESC_NO_CONFIG_METADATA', this.currentModule, this.moduleLangObj);
        } else if (!this.accessUserOK) {
            msg = app.lang.get('LBL_CONFIG_BLOCKED_DESC_USER_ACCESS', this.currentModule, this.moduleLangObj);
        } else if (!this.accessModuleOK) {
            msg = app.lang.get('LBL_CONFIG_BLOCKED_DESC_MODULE_ACCESS', this.currentModule, this.moduleLangObj);
        } else if (!this.accessConfigOK) {
            msg = app.lang.get('LBL_CONFIG_BLOCKED_DESC_CONFIG_ACCESS', this.currentModule, this.moduleLangObj);
        }

        this.displayNoAccessAlert(title, msg);
    },

    /**
     * Displays an Error Alert with the passed in title and message
     *
     * @param {String} title Already-translated language string for the Alert's title
     * @param {String} msg Already-translated language string for the Alert's message
     */
    displayNoAccessAlert: function(title, msg) {
        var alert = app.alert.show('no_access_to_module_' + this.currentModule, {
            level: 'error',
            title: title,
            messages: [msg]
        });

        var $close = alert.getCloseSelector();
        $close.on('click', function() {
            $close.off();
            app.router.navigate('#Home', {trigger: true});
        });
        app.accessibility.run($close, 'click');
    },

    /**
     * Overrides loadData to defer it running until we call it in _onceInitSelectedUser
     *
     * @override
     */
    loadData: function() {
    }
})
