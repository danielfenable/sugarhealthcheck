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
 * Base bean class. Use {@link Data.DataManager} to create instances of beans.
 *
 * **CRUD**
 *
 * Use standard Backbone's `fetch`, `save`, and `destroy`
 * methods to perform CRUD operations on beans. See {@link Data.DataManager} class for details.
 *
 * **Validation**
 *
 * This class does not override Backbone.Model's `validate` method.
 * The validation is done in `save` method. If the bean is invalid the save is rejected.
 * Use {@link Data.Bean#isValid} method to check if the bean is valid in other situations.
 * Failed validations trigger an `"app:error:validation:<field-name>"` event.
 *
 * @class Data.Bean
 * @alias SUGAR.App.Bean
 * @extends Backbone.Model
 */
(function(app) {

    /**
     * Add doValidate method to Backbone.Model so it won't fail when calling doValidate
     * @param {Array/Object} fields A hash of field definitions or array of field names to validate.
     * @param {Function} callback Function called with isValid flag once the validation is complete
     */
    Backbone.Model.prototype.doValidate = function(fields, callback) {
        callback(this.isValid());
    };

    app.augment('Bean', Backbone.Model.extend({
        /**
         * Model plugins are attached in the constructor to allow initialize()
         * to be overridden.
         *
         * @inheritdoc
         * @constructor
         * @param {Object} attributes
         * @param {Object} options
         */
        constructor: function(attributes, options) {
            app.plugins.attach(this, 'model');
            Backbone.Model.prototype.constructor.call(this, attributes, options);
        },

        /**
         * @inheritDoc
         */
        initialize: function(attributes) {
            Backbone.Model.prototype.initialize.call(this, attributes);
            // assume our attributes from creation are synced
            this.setSyncedAttributes(attributes);
            this.on('sync',
                function() {
                    this.setSyncedAttributes(this.attributes);
                }
                , this);
            this._relatedCollections = null;

            // Populate with default values only if the model is new and has not yet been populated
            if (this.isNew() && this._defaults) {
                _.each(this._defaults, function(value, key) {
                    if (!this.has(key)) {
                        this.set(key, value, { silent: true });
                    }
                }, this);
            }

            //Clone the fields to allow dynamic changes to vardefs per bean instance
            if (this.fields) {
                this.fields = app.metadata.copy(this.fields, { bean: this });
            }

            this.addValidationTask('sidecar', _.bind(this._doValidate, this));
        },

        /**
         * Disposes a bean.
         */
        dispose: function() {
            app.plugins.detach(this, "model");
        },

        /**
         * Caches a collection of related beans in this bean instance.
         * @param {string} link Relationship link name.
         * @param collection A collection of related beans to cache.
         * @private
         */
        _setRelatedCollection: function(link, collection) {
            if (!this._relatedCollections) this._relatedCollections = {};
            this._relatedCollections[link] = collection;
        },

        /**
         * Gets a collection of related beans.
         *
         * This method returns a cached in memory instance of the collection. If the collection doesn't exist in the cache,
         * it will be created using {@link Data.DataManager#createRelatedCollection} method.
         * Use {@link Data.DataManager#createRelatedCollection} method to get a new instance of a related collection.
         *
         * <pre><code>
         * // Get a cached copy or create contacts collection for an existing opportunity.
         * var contacts = opportunity.getRelatedCollection("contacts");
         * contacts.fetch({ relate: true });
         * </code></pre>
         *
         * @param {string} link Relationship link name.
         * @return {Data.BeanCollection} Previously created collection or a new collection of related beans.
         */
        getRelatedCollection: function(link) {
            if (this._relatedCollections && this._relatedCollections[link]) {
                return this._relatedCollections[link];
            }

            return app.data.createRelatedCollection(this, link);
        },

        /**
         * Validates a bean asynchronously.
         *
         * This method is called before {@link Data.Bean#save}.
         * Failed validations trigger an `"error:validation:<field-name>"` event.
         *
         * @param {Array/Object} fields(optional) A hash of field definitions or array of field names to validate.
         * If not specified, all fields will be validated. View-agnostic validation will be run.
         * Keys are field names, values are field definitions (combination of view defs and vardefs).
         * @param {Function} callback(optional) Function called with isValid flag once the validation is complete.
         */
        doValidate: function(fields, callback) {
            var self = this;
            fields = fields || this.fields;

            this.trigger('validation:start');

            async.waterfall(
                //Validation tasks
                _.flatten([
                    function(callback) {
                        callback(null, fields, {});
                    },
                    _.sortBy(self._validationTasks)
                ]),
                //Callback
                function(didItFail, fields, errors) {
                    if (!didItFail) {
                        var isValid = _.isEmpty(errors);
                        if(isValid){
                            self.trigger('validation:success');
                        }
                        self.trigger("validation:complete", self._processValidationErrors(errors));
                        if (_.isFunction(callback)) callback(isValid);
                    }
                }
            );

            return;
        },

        /**
         * Runs sidecar validation on fields.
         *
         * @param {Array/Object} fields A hash of field definitions or array of field names to validate.
         * @param {Object} errors validation errors object.
         * @param {Function} callback Async.js waterfall callback
         *
         * - keys: field names, values: errors hash
         * - errors hash is a collection of error definitions
         * - error definition can be a primitive type or an object. It depends on validator.
         *
         * Example:
         * <pre><code>
         * {
         *    first_name: {
         *       maxLength: 20,
         *       someOtherValidatorName: { some complex error definition... }
         *    },
         *    last_name: {
         *       required: true
         *    }
         * }
         * </code></pre>
         *
         * @private
         */
        _doValidate: function(fields, errors, callback) {
            var value;

            // fields can be either array or object
            _.each(fields, function(field, fieldName) {
                if (_.isString(field)) {
                    fieldName = field;
                    field = this.fields[fieldName];
                }

                value = this.get(fieldName);

                if (field) { // Safeguard against missing field definitions
                    _addValidationError(errors,
                        app.validation.requiredValidator(field, field.name, this, value), fieldName, "required");

                    if (value || value === 0) { // "0" must have validation
                        _.each(app.validation.validators, function(validator, validatorName) {
                            _addValidationError(errors, validator(field, value, this), fieldName, validatorName);
                        }, this);
                    }
                }
            }, this);

            callback(null, fields, errors);
        },

        /**
         * Adds a validation task to the validation waterfall
         * @param {string} taskName The name of the task.
         * @param {Function} validate The validation task
         */
        addValidationTask: function(taskName, validate) {
            this._validationTasks = this._validationTasks || {};

            this._validationTasks[taskName] = validate;
        },

        /**
         * Remove a specified validation task from the bean.
         * @param {string} taskName The name of the task
         */
        removeValidationTask: function(taskName) {
            if (this._validationTasks) {
                this._validationTasks = _.omit(this._validationTasks, taskName);
            }
        },

        /**
         * Processes validation errors and triggers validation error events.
         * @param {Object} errors validation errors.
         * @return {Boolean} `true` if `errors` parameter is empty, otherwise `false`.
         * @private
         */
        _processValidationErrors: function(errors) {
            var isValid = true;
            if (!_.isEmpty(errors)) {
                app.error.handleValidationError(this, errors);
                _.each(errors, function(fieldErrors, fieldName) {
                    this.trigger("error:validation:" + fieldName, fieldErrors);
                }, this);
                this.trigger("error:validation", errors);
                isValid = false;
            }

            return isValid;
        },

        /**
         * Overloads standard bean save so we can run validation outside of the standard validation loop.
         *
         * This method checks if this bean is valid if `options` hash contains `fieldsToValidate` parameter.
         *
         * @param {Object} attributes(optional) model attributes
         * @param {Object} options(optional) standard save options as described by Backbone docs and
         * optional `fieldsToValidate` parameter.
         */
        save: function(attributes, options) {
            var isValid = true,
                self = this;

            if (options && options.fieldsToValidate) {
                this.doValidate(options.fieldsToValidate, function(isValid){
                    if (isValid)
                        Backbone.Model.prototype.save.call(self, attributes, options);
                });
                return;
            }
            return Backbone.Model.prototype.save.call(this, attributes, options);
        },

        /**
         * Checks if a bean can have attachments.
         *
         * REST API introduced a convenience field called `attachment_list` which is an array
         * with attachment information. Modules such as `Documents` and `KBDocuments` use this field
         * to simplify access to file revisions.
         * @return {Boolean} `true` if bean's field definition has `attachment_list` field.
         */
        canHaveAttachments: function() {
            return _.has(this.fields, 'attachment_list');
        },

        /**
         * Fetches a list of files (attachments).
         *
         * This method uses REST {@link SUGAR.Api#file} API to retrieve file list.
         * @param callbacks(optional) Hash with success, error, and complete callbacks.
         * @param options(optional) Request options. See {@link SUGAR.Api#file} for details.
         */
        getFiles: function(callbacks, options) {
            options = options || {};
            // The token will be passed in the header
            options.passOAuthToken = false;
            return app.api.file("read", {
                module: this.module,
                id: this.id
            }, null, callbacks, options);
        },

        /**
         * Copies fields from a given bean into this bean.
         *
         * This method does not copy `id` field, `link`-type fields, and fields whose values are auto-incremented
         * (metadata field definition has `auto_increment === true`).
         * @param {Data.Bean} source The bean to copy the fields from.
         * @param {Array} fields(optional) The fields to copy. All fields are copied if not specified.
         * @param options(optional) Standard Backbone options that should be passed to `Backbone.Model#set` method.
         */
        copy: function(source, fields, options) {
            var attrs = {};
            var vardefs = app.metadata.getModule(this.module).fields;
            fields = fields || _.pluck(vardefs, "name");

            // Iterate over fields and copy everything except auto_increment fields, links, ID,
            // or any field with an explicit duplicate_on_record_copy set to 'no'
            _.each(fields, function(name) {
                    var def = vardefs[name],
                        permitCopy;

                    if (!def || def.duplicate_on_record_copy === 'no') {
                        return;
                    }

                    permitCopy = (def.duplicate_on_record_copy === 'always') ||
                        (name !== 'id' && def.type !== 'link' &&
                            !def.auto_increment);

                    if (permitCopy && source.has(name)) {

                        var value = source.get(name);
                        // Perform deep copy in case the value is not a primitive type
                        if (_.isObject(value)) {
                            value = app.utils.deepCopy(value);
                        }
                        attrs[name] = value;
                    }
                }
            );

            this.set(attrs, options);
            this.isCopied = true;
        },

        /**
         * Returns whether the bean was populated as a result of a copy
         *
         * @returns {boolean} was the bean populated as a result of a copy
         */
        isCopy: function() {
            return (this.isCopied === true);
        },

        /**
         * Uploads a file.
         * @param {string} fieldName Name of the file field.
         * @param $files List of DOM elements that contain file inputs.
         * @param callbacks(options) Callback hash.
         * @param options(optional) Upload options. See {@link SUGAR.Api#file} method for details.
         * @return {Object} XHR object.
         */
        uploadFile: function(fieldName, $files, callbacks, options) {
            callbacks = callbacks || {};
            options = options || {};

            return app.api.file(
                'create',
                {
                    //Set id to temp if we save a temporary file to reach correct API
                    id: (options.temp !== true) ? this.id : 'temp',
                    module: this.module,
                    field: fieldName
                },
                $files,
                callbacks,
                options
            );
        },

        /**
         * Favorites or un-favorites a record.
         * @param {Boolean} flag Flag indicating if the record must be marked as favorite (`true`).
         * @param {Object} options(optional) Standard Backbone options for Backbone.Model#save operation.
         */
        favorite: function(flag, options) {
            options = options || {};
            options.favorite = true;
            return this.save({ my_favorite: !!flag }, options);
        },

        /**
         * Subscribe/unsubscribe a record changes.
         * @param {Boolean} flag Flag indicating subscribe (`true`) or unsubscribe (`false`)
         * the record changes.
         * @param {Object} options Options for {@link Backbone.Model#save} operation.
         * @return {Object} `jqXHR` object or `false` if error occurs.
         */
        follow: function (flag, options) {
            options = options || {};
            flag = flag || false;
            options.following = true;
            return this.save({ following: flag }, options);
        },

        /**
         * Retruns a flag indicating if a record is marked as favorite.
         * @return {Boolean} `true` if the record is marked as favorite, `false` otherwise.
         */
        isFavorite: function() {
            var flag = this.get("my_favorite");
            return (flag === "1" || flag === true);
        },

        /**
         * Returns an object of attributes. This method is called when JSON.stringify() is called on the
         * bean. When the bean's attribute has toJSON() method, it will call its function.
         *
         * @inheritdoc
         *
         * @param {Object} [options.fields] - List of field names to be included in the object of attributes.
         * It retrieves all fields by default.
         * @return {Object}
         */
        toJSON: function(options) {
            var fields = (options && options.fields) ? options.fields : _.keys(this.attributes),
                json = {};

            _.each(fields, function(fieldName) {
                var attributeValue = this.get(fieldName);
                if (_.isObject(attributeValue) && _.isFunction(attributeValue.toJSON)) {
                    attributeValue = attributeValue.toJSON(options);
                }
                json[fieldName] = attributeValue;
            }, this);

            return json;
        },

        /**
         * Returns string representation useful for debugging:
         * <code>bean:[module-name]/[id]</code>
         * @return {string} string representation of this bean
         */
        toString: function() {
            return "bean:" + this.module + "/" + (this.id ? this.id : "<no-id>");
        },
        /**
         * Reverts model attributes to the last values from last sync or values on creation.
         *
         * @triggers attributes:revert if `options.silent` is falsy.
         *
         * @param options Options are passed onto set such as `silent:true`.
         */
        revertAttributes: function(options) {
            options = options || {};
            var changedAttr = this.changedAttributes(this.getSyncedAttributes());
            this.set(app.utils.deepCopy(changedAttr) || {}, options);
            if (!options.silent) {
                this.trigger('attributes:revert');
            }
        },
        /**
         * Sets internal synced attribute hash that's used in revertAttributes.
         *
         * @param {Object} attributes Attributes of model to setup.
         */
        setSyncedAttributes: function(attributes) {
            this._syncedAttributes = attributes ? app.utils.deepCopy(attributes) : {};
        },
        /**
         * Gets internal synced attribute hash.
         * @return {Object}
         */
        getSyncedAttributes: function() {
            return this._syncedAttributes;
        },

        /**
         * Sets the hash of default values on the model.
         *
         * Default values will be ignored when checking if the model
         * `has changed`.
         *
         * @param {Object} attributes The hash of key/value pairs.
         *
         * @deprecated since 7.6. Will be removed in 7.8.
         *  Use {link Data.Bean#setDefault instead}. Note that unlike the
         *  previous behavior, {link Data.Bean#setDefault instead} takes care
         *  of filling undefined attributes.
         */
        setDefaultAttributes: function(attributes) {
            app.logger.warn('Data.Bean.setDefaultAttributes is deprecated. ' +
                'Please update your code to use Data.Bean.setDefault');
            this._defaults = {};
            this.setDefault(attributes);
        },

        /**
         * Sets a default value on the model.
         *
         * Default values will be ignored when checking if the model
         * `has changed`.
         *
         * @param {string} key The attribute key.
         * @param {Mixed} value The default value.
         *
         * @deprecated since 7.6. Will be removed in 7.8.
         *  Use {link Data.Bean#setDefault instead}. Note that unlike the
         *  previous behavior, {link Data.Bean#setDefault instead} takes care
         *  of filling undefined attributes.
         */
        setDefaultAttribute: function(key, value) {
            app.logger.warn('Data.Bean.setDefaultAttribute is deprecated. ' +
                'Please update your code to use Data.Bean.setDefault');
            this.setDefault(key, value);
        },

        /**
         * Removes the default value of an attribute.
         *
         * @param {string} key The attribute key.
         *
         * @deprecated since 7.6. Will be removed in 7.8. We consider that it
         *  is a bad practice to remove default values. Please update your code
         *  to stop using it.
         */
        removeDefaultAttribute: function(key) {
            app.logger.warn('Data.Bean.removeDefaultAttribute is deprecated. ' +
                'We consider it as a bad practice so the method will be ' +
                'removed in 7.8. Please update your code to stop using it.');
            if (this._defaults) {
                // do not delete from _defaults on the prototype
                if (!this.hasOwnProperty('_defaults')) {
                    this._defaults = _.clone(this._defaults);
                }
                delete this._defaults[key];
            }
        },

        /**
         * Gets a default value.
         *
         * @param {string} The attribute key.
         * @return {Mixed} The default value.
         *
         * @deprecated since 7.6. Will be removed in 7.8.
         *  Use {link Data.Bean#getDefault instead}.
         */
        getDefaultAttribute: function(key) {
            app.logger.warn('Data.Bean.getDefaultAttribute is deprecated. ' +
                'Please update your code to use Data.Bean.getDefault');
            return this.getDefault(key);
        },

        /**
         * Gets all the default values.
         *
         * @return {Object} The hash of default values.
         *
         * @deprecated since 7.6. Will be removed in 7.8.
         *  Use {link Data.Bean#getDefault instead}.
         */
        getDefaultAttributes: function() {
            app.logger.warn('Data.Bean.getDefaultAttributes is deprecated. ' +
                'Please update your code to use Data.Bean.getDefault');
            return this.getDefault();
        },

        /**
         * Gets the default values (one or many).
         *
         * @param {string} [key] The name of the attribute.
         * @return {Mixed} The default value if you passed a `key`, or the hash of
         *  default values.
         */
        getDefault: function(key) {
            var defaults = _.clone(this._defaults) || {};
            if (_.isUndefined(key)) {
                return defaults;
            }
            return defaults[key];
        },

        /**
         * Sets the default values (one or many) on the model, and fill in
         * undefined attributes with the default values.
         *
         * @param {string|Object} key The name of the attribute, or an hash of
         *  attributes.
         * @param {Mixed} [val] The default value for the `key` argument.
         *
         * @chainable
         */
        setDefault: function(key, val) {
            var attrs;
            if (_.isObject(key)) {
                attrs = key;
            } else {
                (attrs = {})[key] = val;
            }
            this._defaults = _.extend({}, this._defaults, attrs);
            this.attributes = _.defaults(this.attributes, attrs);
            return this;
        }
    }), false);

    /**
     * Adds validation error to the passed in error object.
     * @param {Object} errors
     * @param {Object} result
     * @param {string} fieldName
     * @param {string} validatorName
     * @private
     * @ignore
     */
    function _addValidationError(errors, result, fieldName, validatorName) {
        if (_.isUndefined(result)) return;

        if (_.isUndefined(errors[fieldName])) {
            errors[fieldName] = {};
        }
        errors[fieldName][validatorName] = result;
    }

})(SUGAR.App);
