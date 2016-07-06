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
 * @class View.Views.Base.ConfigHeaderButtonsView
 * @alias SUGAR.App.view.views.BaseConfigHeaderButtonsView
 * @extends  View.View
 */
({
    events: {
        'click a[name="cancel_button"]': 'cancelConfig',
        'click a[name="save_button"]:not(.disabled)': 'saveConfig'
    },

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
     * @inheritdoc
     */
    initialize: function(options) {
        this._super('initialize', [options]);

        this.currentModule = app.controller.context.get('module');
        this.moduleLangObj = {
            // get the actual plural module name
            module: app.lang.getModuleName(this.currentModule, { plural: true })
        };

        /**
         * todo: when backbone.js gets updated to > 0.9.10 this will not be necessary
         * THIS WHOLE SECTION IS A BACKBONE SYNC/FETCH/PARSE HACK
         *
         * TODO: SIDECAR-404
         */
        var model = this.context.get('model');
        model.url = app.api.buildURL(this.currentModule, 'config');
        model.sync = function(method, model, options) {
            this.trigger('data:sync:start', method, model, options);
            var url = _.isFunction(model.url) ? model.url() : model.url;
            return app.api.call(method, url, model, options);
        };

        model.fetch = function (options) {
            options = options ? _.clone(options) : {};
            if (options.parse === void 0) options.parse = true;
            var model = this,
                success = options.success;
            options.success = function (resp) {
                if (!model.set(model.parse(resp, options), options)) {
                    return false;
                }
                if (success) {
                    success(model, resp, options);
                }
                model.trigger('sync', model, resp, options);
            };
            var error = options.error;
            options.error = function (resp) {
                if (error) {
                    error(model, resp, options);
                }
                model.trigger('error', model, resp, options);
            };
            return this.sync('read', this, options);
        };
        // Set a hash of model attributes, and sync the model to the server.
        // If the server returns an attributes hash that differs, the model's
        // state will be `set` again.
        model.save = function(key, val, options) {
            var attrs, method, xhr, attributes = this.attributes;

            // Handle both `'key', value` and `{key: value}` -style arguments.
            if (key == null || typeof key === 'object') {
                attrs = key;
                options = val;
            } else {
                (attrs = {})[key] = val;
            }

            // If we're not waiting and attributes exist, save acts as `set(attr).save(null, opts)`.
            if (attrs && (!options || !options.wait) && !this.set(attrs, options)) {
                return false;
            }

            options = _.extend({validate: true}, options);

            // Do not persist invalid models.
            if (!this._validate(attrs, options)) {
                return false;
            }

            // Set temporary attributes if `{wait: true}`.
            if (attrs && options.wait) {
                this.attributes = _.extend({}, attributes, attrs);
            }

            // After a successful server-side save, the client is (optionally)
            // updated with the server-side state.
            if (options.parse === void 0) options.parse = true;
            var model = this,
                success = options.success;
            options.success = function(resp) {
                // Ensure attributes are restored during synchronous saves.
                model.attributes = attributes;
                var serverAttrs = model.parse(resp, options);
                if (options.wait) {
                    serverAttrs = _.extend(attrs || {}, serverAttrs);
                }
                if (_.isObject(serverAttrs) && !model.set(serverAttrs, options)) {
                    return false;
                }
                if (success) {
                    success(model, resp, options);
                }
                model.trigger('sync', model, resp, options);
            };

            method = this.isNew() ? 'create' : (options.patch ? 'patch' : 'update');
            if (method === 'patch') {
                options.attrs = attrs;
            }
            xhr = this.sync(method, this, options);

            // Restore attributes.
            if (attrs && options.wait) {
                this.attributes = attributes;
            }

            return xhr;
        }

        // push the model back to the context model
        this.context.set({model: model});
        /**
         * END HACK
         */

        this.before('save', this._beforeSaveConfig, null, this);
    },

    /**
     * Click handler for the save button, triggers save event
     */
    saveConfig: function() {
        if (this.triggerBefore('save')) {
            this.getField('save_button').setDisabled(true);
            this._saveConfig();
        }
    },

    /**
     * Calls the context model save and saves the config model in case
     * the default model save needs to be overwritten
     *
     * @private
     */
    _saveConfig: function() {
        this.context.get('model').save({}, {
            // getting the fresh model with correct config settings passed in as the param
            success: _.bind(function(model) {
                // If we're inside a drawer and Forecasts is setup and this isn't the first time, otherwise refresh
                if (app.drawer) {
                    this.showSavedConfirmation();
                    // close the drawer and return to Forecasts
                    app.drawer.close(this.context, this.context.get('model'));
                }
            }, this),
            error: _.bind(function() {
                this.getField('save_button').setDisabled(false);
            }, this)
        });
    },

    /**
     * Noop for use if model needs updating before save
     * Gets called before the model actually saves
     *
     * @private
     */
    _beforeSaveConfig: function() {
    },

    /**
     * Show the saved confirmation alert
     *
     * @param {Object|Undefined} [onClose] the function fired upon closing.
     */
    showSavedConfirmation: function(onClose) {
        onClose = onClose || function() {};
        var alert = app.alert.show('module_config_success', {
            level: 'success',
            title: app.lang.get('LBL_CONFIG_TITLE_MODULE_SETTINGS', this.currentModule, this.moduleLangObj) + ':',
            messages: app.lang.get('LBL_CONFIG_MODULE_SETTINGS_SAVED', this.currentModule, this.moduleLangObj),
            autoClose: true,
            autoCloseDelay: 10000,
            onAutoClose: _.bind(function() {
                alert.getCloseSelector().off();
                onClose();
            })
        });
        var $close = alert.getCloseSelector();
        $close.on('click', onClose);
        app.accessibility.run($close, 'click');
    },

    /**
     * Cancels the config setup process and redirects back
     */
    cancelConfig: function() {
        // If we're inside a drawer
        if (app.drawer) {
            // close the drawer
            app.drawer.close(this.context, this.context.get('model'));
        }

        this._handleCancelRedirect();
    },

    /**
     * Handles where to redirect on cancel
     * @private
     */
    _handleCancelRedirect: function() {
        app.router.goBack();
    }
})
