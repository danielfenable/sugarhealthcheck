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
        var BeanOverrides, Link, VirtualCollection;

        /**
         * @class Link
         * @extends Data.BeanCollection
         *
         * Manages a relationship on a model.
         *
         * It provides the ability to set up {@link Data.Bean beans} to be related
         * to and unrelated from another record when the record is synchronized. See
         * {@link Link#linkRecord} and {@link Link#unlinkRecord}.
         */
        Link = app.BeanCollection.extend({
            initialize: function(models, options) {
                options || (options = {});

                if (options.module) {
                    this.module = options.module;
                    delete options.module;
                }

                this.defaults = [];

                app.BeanCollection.prototype.initialize.call(this, models, options);
            },

            /**
             * Returns `true` if the model has already been linked; `false` if
             * not.
             *
             * @param {Data.Bean} model
             * @return {boolean}
             */
            isDefault: function(model) {
                return _.contains(this.defaults, model.id);
            },

            /**
             * Returns an object that contains all of the changes to be made to
             * the relationship.
             *
             * Used by {@link VirtualCollection#toJSON} to produce the JSON for
             * linking and unlinking records in conjunction with saving a
             * record.
             *
             *     @example
             *     {
             *         "add":[1,2],
             *         "delete":[3]
             *     }
             *
             * @return {Object}
             */
            transpose: function() {
                var actions;

                actions = this.reduce(function(json, model) {
                    switch (model.get('_action')) {
                        case 'delete':
                            json.delete.push(model.id);
                            break;
                        default:
                            json.add.push(model.id);
                    }

                    return json;
                }, {add: [], delete: []});

                if (actions.add.length === 0) {
                    delete actions.add;
                }

                if (actions.delete.length === 0) {
                    delete actions.delete;
                }

                return actions;
            },

            /**
             * Adds a model to be linked.
             *
             * An `_action` attribute will be set to `create` on the model if
             * the model is a new {@link Data.Bean} to link. The `_action`
             * attribute will be set to `update` on the model if the model has
             * already been linked. The `update` action provides the means for
             * updating relationship data for the association.
             *
             * @param {Data.Bean} model
             * @chainable
             */
            linkRecord: function(model) {
                model.set('_action', this.isDefault(model) ? 'update' : 'create');
                this.add(model, {merge: true});

                return this;
            },

            /**
             * Adds a model to be unlinked.
             *
             * An `_action` attribute will be set to `delete` on the model if
             * the model has already been linked. The model is removed from the
             * collection if the model has not been linked.
             *
             * @param {Data.Bean} model
             * @chainable
             */
            unlinkRecord: function(model) {
                if (this.isDefault(model)) {
                    model.set('_action', 'delete');
                    this.add(model, {merge: true});
                } else {
                    this.undo(model);
                }

                return this;
            },

            /**
             * Removes a model so that it is neither linked or unlinked.
             *
             * @param {Data.Bean} model
             * @chainable
             */
            undo: function(model) {
                this.remove(model);

                return this;
            },

            /**
             * Stores the ID's of the models know to be related through this
             * relationship.
             *
             * There may be more that can be found through pagination.
             *
             * Models that were set to be linked or unlinked are removed from
             * the collection.
             *
             * @param {Array} [models] Array of model ID's. If empty, then the
             * ID's of the models currently in the collection will be used.
             * @chainable
             */
            setDefaults: function(models) {
                var undos = [];

                this.defaults = _.isArray(models) ? models.slice() : this.pluck('id');

                this.each(function(model) {
                    if (_.contains(this.defaults, model.id)) {
                        undos.push(model);
                    }
                }, this);

                _.each(undos, this.undo, this);

                return this;
            },

            /**
             * Clears the changes to the link.
             *
             * Models that were linked are added to the default set. Models
             * that were unlinked are removed from the default set.
             * @chainable
             */
            clearAndUpdateDefaults: function() {
                var linked, unlinked;

                linked = _.union(this.where({'_action': 'create'}), this.where({'_action': 'update'}));
                unlinked = this.where({'_action': 'delete'});

                this.setDefaults(_.union(this.defaults, _.pluck(linked, 'id')));
                this.setDefaults(_.difference(this.defaults, _.pluck(unlinked, 'id')));

                return this;
            },

            /**
             * Sets a model as a default.
             *
             * If the model was set to be linked or unlinked, then that change
             * will be undone.
             *
             * @param {Data.Bean} model
             * @chainable
             */
            addDefault: function(model) {
                this.defaults.push(model.id);
                this.undo(model);

                return this;
            }
        }, false);

        /**
         * @class VirtualCollection
         * @extends Data.MixedBeanCollection
         *
         * VirtualCollection manages changes to a field with the type
         * `collection`.
         *
         * New models can be {@link VirtualCollection#add linked} and existing
         * models can be {@link VirtualCollection#remove unlinked} when the
         * record is synchronized with the server.
         */
        VirtualCollection = app.MixedBeanCollection.extend({
            /**
             * @inheritdoc
             *
             * The initial set of models is assumed to be the state of the
             * collection on the server and do not need to be linked or
             * unlinked. Each {@link Link} instance is reset at the end of
             * construction to avoid marking the initial models to be linked or
             * unlinked. These defaults are stored for reference.
             *
             * To force all models to be linked during synchronization, create
             * the collection without models (`[]`) and subsequently add all
             * models.
             *
             * @param {Object} options
             * @param {Object} [options.offsets] The initial offsets for any
             * links in the collection. The keys are the link names and the
             * values are the offsets. If the initial offset for any link is
             * not provided, then it will be defaulted to the number of records
             * in the collection related through that link.
             */
            constructor: function(models, options) {
                options || (options = {});

                app.MixedBeanCollection.prototype.constructor.call(this, models, options);

                this.offsets = options.offsets || {};

                _.each(this.links, function(link) {
                    // don't want change actions for the initial set
                    link.setDefaults();

                    if (_.isUndefined(this.offsets[link.link.name])) {
                        // set the default offset for this link for use during pagination
                        this.offsets[link.link.name] = link.defaults.length;
                    }
                }, this);
            },

            /**
             * @inheritdoc
             *
             * {@link Link} instances are instantiated for each relationship
             * managed by the collection. The changes in each {@link Link}
             * instance are cleared when the collection is synchronized (See
             * {@link Link#clearAndUpdateDefaults}).
             *
             * @param {Object} options
             * @param {Data.Bean} options.parent The model to which this
             * collection is attached.
             * @param {String} options.fieldName The name of the attribute on
             * the parent model where this collection is stored.
             * @param {Core.Context} options.context The context to which this
             * collection is attached.
             * @param {Array} options.links The link field names included for
             * this collection.
             */
            initialize: function(models, options) {
                options || (options = {});

                this.parent = options.parent;
                delete options.parent;

                this.fieldName = options.fieldName;
                delete options.fieldName;

                this.context = options.context;
                delete options.context;

                this.relatedModules = {};
                this.links = _.reduce(options.links, function(memo, link) {
                    var module, options;

                    module = app.data.getRelatedModule(this.parent.module, link);
                    this.relatedModules[module] = link;

                    options = {
                        link: {name: link, bean: this.parent},
                        module: module
                    };
                    memo[link] = new Link([], options);

                    return memo;
                }, {}, this);
                delete options.links;

                this.parent.on('sync', function() {
                    _.each(this.links, function(link) {
                        link.clearAndUpdateDefaults();
                    });
                }, this);

                app.MixedBeanCollection.prototype.initialize.call(this, models, options);
            },

            /**
             * @inheritdoc
             *
             * Determines which relationship the model can be linked to or
             * unlinked from and adds the reference to the model.
             */
            _prepareModel: function(model, options) {
                model = app.MixedBeanCollection.prototype._prepareModel.call(this, model, options);
                model.link = this.links[this.relatedModules[model.module]].link;

                return model;
            },

            /**
             * @inheritdoc
             *
             * Models that are marked to be unlinked and are found in the collection
             * on the server will not be unlinked when the collection is
             * synchronized.
             *
             * Models that are not found in the collection on the server will be
             * linked when the collection is synchronized.
             *
             * @fires See {@link VirtualCollection#_triggerChange}.
             * @chainable
             */
            add: function(models, options) {
                var added = [];

                options || (options = {});
                models = _.isArray(models) ? models.slice() : [models];

                if (_.compact(models).length === 0) {
                    return this;
                }

                _.each(models, function(model) {
                    var existingModel, relationship;

                    model = this._prepareModel(model, options);
                    existingModel = this.get(model.id);
                    relationship = this.links[model.link.name];

                    if (existingModel) {
                        if (options.merge) {
                            // set up an instruction for updating the
                            // relationship
                            relationship.linkRecord(model);
                        }
                    } else {
                        if (relationship.isDefault(model)) {
                            // reset the model in the relationship as there is
                            // no change
                            relationship.undo(model);
                        } else {
                            // set up an instruction for creating the
                            // relationship
                            relationship.linkRecord(model);
                        }
                    }

                    if (!existingModel || options.merge) {
                        app.MixedBeanCollection.prototype.add.call(this, model, options);
                        added.push(this.get(model.id));
                    }
                }, this);

                if (!options.silent && added.length > 0) {
                    this._triggerChange(added, options);
                }

                return this;
            },

            /**
             * @inheritdoc
             *
             * Models that are found in the collection on the server will be
             * unlinked when the collection is synchronized.
             *
             * Models that are not found in the collection on the server are simply
             * removed.
             *
             * @fires See {@link VirtualCollection#_triggerChange}.
             * @chainable
             */
            remove: function(models, options) {
                var removed = [];

                options || (options = {});
                models = _.isArray(models) ? models.slice() : [models];

                if (_.compact(models).length === 0) {
                    return this;
                }

                _.each(models, function(model) {
                    var existingModel, relationship;

                    existingModel = this.get(model);

                    if (existingModel) {
                        relationship = this.links[existingModel.link.name];
                        relationship.unlinkRecord(existingModel);
                        app.MixedBeanCollection.prototype.remove.call(this, existingModel, options);
                        removed.push(existingModel);
                    }
                }, this);

                if (!options.silent && removed.length > 0) {
                    this._triggerChange(removed, options);
                }

                return this;
            },

            /**
             * @inheritdoc
             *
             * Models that are found in both the collection on the server and
             * the new set of models will not be marked to be linked.
             *
             * Models that are found in the collection on the server but not in
             * the new set of models will be marked to be unlinked.
             *
             * TODO: The new models that are not defaults should be marked to
             * be linked. This will require a refactor where reset is called by
             * revert, instead of the other way around, and will impact
             * initialization with the default models.
             *
             * @fires See {@link VirtualCollection#_triggerChange}.
             * @chainable
             */
            reset: function(models, options) {
                var existingModels;

                options || (options = {});
                models = _.isArray(models) ? models.slice() : [models];

                this.revert(_.extend({}, options, {silent: true}));

                // take a snapshot of the original models
                existingModels = this.models.slice();

                app.MixedBeanCollection.prototype.reset.call(this, models, options);

                _.each(existingModels, function(existingModel) {
                    var relationship = this.links[existingModel.link.name];

                    /**
                     * Returns `true` if the new model exists in both the
                     * synchronized collection and the new collection; `false`
                     * if not.
                     *
                     * @param {Data.Bean} newModel
                     * @return {boolean}
                     */
                    function match(newModel) {
                        return (newModel.id === existingModel.id && newModel.module === existingModel.module);
                    }

                    // models that exist in both the synchronized collection
                    // and the new collection do not need to be linked
                    relationship.undo(existingModel);

                    if (!this.find(match)) {
                        // models from the synchronized collection, but not in
                        // the new collection should be unlinked
                        relationship.unlinkRecord(existingModel);
                    }
                }, this);

                if (!options.silent) {
                    this._triggerChange(this.models, options);
                }

                return this;
            },

            /**
             * Undo any changes to the collection since it was last synchronized.
             *
             * @fires See {@link VirtualCollection#_triggerChange}.
             * @fires reset Revert is a kind of reset, so it triggers a reset
             * event.
             * @param {Object} [options] See {@link Data.Bean#revertAttributes} for
             * usage patterns.
             * @chainable
             */
            revert: function(options) {
                var add, remove;

                options || (options = {});
                add = [];
                remove = [];

                // don't make changes to the collection until all changes have
                // been determined; otherwise the changes to the collection
                // will cause the iteration through models in each relationship
                // to be thrown off
                _.each(this.links, function(relationship) {
                    relationship.each(function(model) {
                        if (relationship.isDefault(model)) {
                            add.push(model);
                        } else {
                            remove.push(model);
                        }
                    });
                });

                this.remove(remove, {silent: true});
                this.add(add, {merge: true, silent: true});

                if (!options.silent) {
                    this._triggerChange(this.models, options);
                    this.trigger('reset', this, options);
                }

                return this;
            },

            /**
             * Returns `true` if the collection has changed; `false` if not.
             *
             * @return {boolean}
             */
            hasChanged: function() {
                var changed = false;

                _.each(this.links, function(link) {
                    if (link.length > 0) {
                        changed = true;
                    }
                }, this);

                return changed;
            },

            /**
             * Returns TRUE if it is believed that there are more records that
             * can be fetched from the server.
             *
             * @return {boolean}
             */
            hasMore: function() {
                return _.some(this.offsets, function(offset) {
                    return (offset > -1);
                });
            },

            /**
             * @inheritdoc
             *
             * Fetches more records from the CollectionApi. The caller should
             * use a success callback to capture the returned records. Any
             * modifications to the collection should be made from within the
             * callback, as `fetch` will not do it for you.
             *
             * @fires sync Triggered after all success callbacks have been
             * executed.
             */
            fetch: function(options) {
                var callbacks, complete, error, params, success, url;

                options || (options = {});

                params = {};
                params.fields = options.fields ? options.fields : ['name'];
                params.order_by = options.order_by || this.parent.fields[this.fieldName].order_by;

                if (!_.isArray(params.order_by)) {
                    params.order_by = [params.order_by];
                }

                // any fields in order_by must be in fields
                _.each(params.order_by, function(sort) {
                    var field = sort.split(':')[0];

                    if (!_.contains(params.fields, field)) {
                        params.fields.push(field);
                    }
                });

                params.module_list = _.keys(this.relatedModules).join(',');
                params.fields = params.fields.join(',');
                params.order_by = params.order_by.join(',');
                params.max_num = options.limit || app.config.maxSubpanelResult;

                if (options.offset) {
                    params.offset = options.offset;
                }

                callbacks = {};
                success = options.success;
                error = options.error;
                complete = options.complete;

                callbacks.success = _.bind(function(data, request) {
                    if (success) {
                        success(data, request);
                    }

                    this.parent.trigger('sync:' + this.fieldName, this, data, options, request);
                }, this);

                if (error) {
                    callbacks.error = error;
                }

                if (complete) {
                    callbacks.complete = complete;
                }

                //TODO: refactor when an app.api.collection convenience method becomes available
                // build the url since there is no convenience method for
                // hitting the Collection API; taken from sugarapi.js
                url = [app.api.serverUrl, this.parent.module, this.parent.id, 'collection', this.fieldName].join('/');

                _.each(params, function(value, key) {
                    if (value === null || value === undefined) {
                        delete params[key];
                    }
                });

                params = $.param(params);

                if (params.length > 0) {
                    url += '?' + params;
                }

                return app.api.call('read', url, null, callbacks);
            },

            /**
             * @inheritdoc
             *
             * Upon success...
             *
             * 1. The offsets for the collection are updated with the values
             * returned by the server. The offsets are updated before adding
             * the records in case any event handlers, like rendering, are
             * dependent on them.
             *
             * 2. All returned records are merged into the collection. Merging
             * forces the events to be triggered even if all of the records
             * already exist in the collection. The change events will only be
             * triggered on the parent model once.
             *
             * 3. Each of the returned records will be added as a default for
             * their respective links.
             */
            paginate: function(options) {
                var success;

                options || (options = {});
                options.offset = this.offsets;

                /**
                 * TODO: VirtualCollection#fetch should operate more like
                 * Backbone.Collection#fetch, where it controls the state of
                 * the models through options instead of pushing that
                 * responsibility to a callback defined by the caller of
                 * `fetch`. This requires using VirtualCollection#reset and
                 * implementing VirtualCollection#update, which includes some
                 * potentially difficult refactorings.
                 */
                success = options.success;
                options.success = _.bind(function(data, request) {
                    var offsets, records;

                    data || (data = {});
                    records = data.records || [];
                    offsets = data.next_offset || {};

                    _.each(offsets, function(offset, link) {
                        this.offsets[link] = offset;
                    }, this);

                    this.add(records, {merge: true});

                    _.each(records, function(record) {
                        var model;

                        model = this._prepareModel(record);
                        this.links[model.link.name].addDefault(model);
                    }, this);

                    if (success) {
                        success(data, request);
                    }
                }, this);

                this.fetch(options);
            },

            /**
             * Searches for records found within this collection's modules.
             *
             * @param {Object} [options] See {@link Data.DataManager#sync} for
             * usage patterns.
             * @return {SUGAR.HttpRequest}
             */
            search: function(options) {
                var callbacks, params, url;

                params = {};
                options || (options = {});

                params.q = options.query;

                // TODO: Invitee Search will return 30 for now, but leaving this in here
                // for when we move to using Unified Search which supports max_num
                params.max_num = options.limit;
                params.search_fields = options.search_fields? options.search_fields.join(',') : 'name';
                params.fields = options.fields ? options.fields.join(',') : 'name';

                if (this.links) {
                    params.module_list = _.map(this.links, function(link) {
                        return link.module;
                    }).join(',');
                }

                callbacks = {};

                callbacks.success = function(data, request) {
                    if (options.success) {
                        options.success(app.data.createMixedBeanCollection(data.records), request);
                    }
                };

                if (options.error) {
                    callbacks.error = options.error;
                }

                if (options.complete) {
                    callbacks.complete = options.complete;
                }

                url = app.api.buildURL('Calendar', 'invitee_search', null, params);
                return app.api.call('read', url, null, callbacks);
            },

            /**
             * Triggers the changes on the {@link Data.Bean parent model}.
             *
             * Mimics the behavior found in {Backbone.Model#set} when an attribute
             * is changed.
             *
             * @fires change:field_name
             * @fires change
             * @param {*} change The relevant changes to the collection.
             * @param {Object} [options] See {@link Backbone.Model#trigger}.
             * @private
             */
            _triggerChange: function(change, options) {
                this.parent.trigger('change:' + this.fieldName, this.parent, this, change, options);
                this.parent.trigger('change', this, options);
            }
        });

        /**
         * @class BeanOverrides
         *
         * Exposes methods that are generically mixed into {@link Data.Bean} so
         * the plugin does not override model methods in an unsafe manner.
         *
         * @param {Data.Bean} model The overridden model can be used within the
         * mixins.
         * @constructor
         */
        BeanOverrides = function(model) {
            this.model = model;
        };

        /**
         * {@link Data.Bean#toJSON}
         *
         * {@link Data.Bean Beans} to be linked or unlinked via the link fields
         * will be reduced to a specific set of attributes.
         *
         *     @example
         *     {
         *         //...
         *         "contacts":{
         *             "add":[1,2],
         *             "delete":[3]
         *         }
         *         //...
         *     }
         */
        BeanOverrides.prototype.toJSON = function(collections, links, options) {
            var json = {},
                fields = _.unique(_.union(collections, _.keys(links)));

            _.each(fields, function(attribute) {
                var field = this.get(attribute);

                if (!field) {
                    return;
                }

                if (_.contains(collections, attribute)) {
                    json[attribute] = field.toJSON(options);
                }

                _.each(links[attribute], function(link) {
                    var actions = field.links[link].transpose();

                    if (actions.add || actions.delete) {
                        json[link] = actions;
                    }
                });
            }, this.model);

            return json;
        };

        /**
         * {@link Data.Bean#copy}
         *
         * Copies any collection fields on the model from the source
         * {@link Data.Bean}.
         */
        BeanOverrides.prototype.copy = function(source, fields, options) {
            var attrs, clone, vardefs;

            attrs = {};
            vardefs = app.metadata.getModule(this.model.module).fields;

            /**
             * Removes the `_action` attribute from a model when copying it.
             *
             * @param {Data.Bean} model The model to copy to the collection
             * field of the target.
             * @return {Object} Attributes hash for the model.
             */
            clone = function(model) {
                var attributes = _.clone(model.attributes);

                delete attributes._action;

                return attributes;
            };

            _.each(fields, function(name) {
                attrs[name] = [];
            });

            if (_.size(attrs) > 0) {
                // create new virtual collection for each collection fields
                this.model.set(attrs, options);
            }

            _.each(fields, function(name) {
                var def = vardefs[name],
                    collection;

                if (def &&
                    def.duplicate_on_record_copy !== 'no' &&
                    (def.duplicate_on_record_copy === 'always' || !def.auto_increment) &&
                    source.has(name)
                ) {
                    // copy data from source to the new collection
                    collection = this.get(name);
                    collection.add(source.get(name).map(clone));
                }
            }, this.model);
        };

        /**
         * {@link Data.Bean#set}
         *
         * Creates a new {@link VirtualCollection} at the attribute using the
         * existing value as the default set of models. The default value of
         * the attribute is set to the collection to avoid triggering any
         * warnings due to the attribute changing.
         *
         * If `models` is an array, then that array is assumed to contain
         * the models to be inserted into the collection.
         *
         * If `models` is a {@link Backbone.Collection}, then the models
         * from that collection are copied and used in the new collection.
         *
         * If `models` is an object that came directly from the server, then
         * it should contain the keys `next_offset` and `records`, where
         * `records` is an array of models. These models are inserted into
         * the collection. `next_offset` is added to the `options` hash -- as
         * `offsets` -- that is passed into the constructor for
         * {@link VirtualCollection}.
         *
         * If `models` is not an array, is not a {@link VirtualCollection},
         * is not null or undefined, and does not have a `records` key, then
         * it is assumed that the object represents a single model to be
         * inserted into the collection.
         *
         * Otherwise, `models` is nothing and the collection is initialized
         * without any models.
         */
        BeanOverrides.prototype.set = function(attr, options) {
            _.each(attr, function(models, key) {
                var collection;

                options = _.extend({}, options, {
                    parent: this,
                    fieldName: key,
                    links: this.fields[key].links
                });

                if (!_.isArray(models)) {
                    if (models instanceof Backbone.Collection) {
                        models = models.models;
                    } else if (models) {
                        if (models.next_offset) {
                            options.offsets = models.next_offset;
                        }

                        if (models.records) {
                            models = models.records;
                        } else {
                            models = [models];
                        }
                    } else {
                        models = [];
                    }
                }

                collection = new VirtualCollection(models, options);

                this.attributes[key] = collection;
                this.setDefault(key, collection);
            }, this.model);

            return this.model;
        };

        /**
         * {@link Data.Bean#hasChanged}
         *
         * Tests the collection fields when determining whether or not the
         * {@link Data.Bean} has changed.
         */
        BeanOverrides.prototype.hasChanged = function(attr) {
            if (attr == null) {
                // test all collection fields
                attr = this.model.getCollectionFieldNames();
            } else if (_.contains(this.model.getCollectionFieldNames(), attr)) {
                // only test one collection field
                attr = [attr];
            } else {
                // don't test any collection fields
                attr = [];
            }

            return _.some(attr, function(attribute) {
                var collection = this.get(attribute);

                return (collection && collection.hasChanged());
            }, this.model);
        };

        /**
         * {@link Data.Bean#changedAttributes}
         *
         * Includes in the return value any collection fields with collections
         * that have changed. When comparing objects, Backbone does not do a
         * deep comparison. As collections are objects, it is necessary to
         * perform this check ourselves.
         */
        BeanOverrides.prototype.changedAttributes = function(diff) {
            var changed = {};

            _.each(this.model.getCollectionFieldNames(), function(attr) {
                var collection = this.get(attr);
                if (collection && collection.hasChanged()) {
                    changed[attr] = collection;
                }
            }, this.model);

            return changed;
        };

        /**
         * {@link Data.Bean#revertAttributes}
         *
         * Reverts all collections to their state when they were last
         * synchronized.
         */
        BeanOverrides.prototype.revertAttributes = function(options) {
            _.each(this.model.getCollectionFieldNames(), function(attr) {
                var collection = this.get(attr);
                if (collection) {
                    collection.revert(options);
                }
            }, this.model);
        };

        /**
         * {@link Data.Bean#getSyncedAttributes}
         *
         * Includes in the return value all collection fields and their
         * associated link attributes. When comparing objects, Backbone does
         * not do a deep comparison. As collections are objects, the current
         * state of the collection is assumed to be synchronized. This method
         * handles the deep comparison for us.
         *
         * TODO: Don't assume the collection is synchronized when moving
         * collection field support to sidecar.
         */
        BeanOverrides.prototype.getSyncedAttributes = function() {
            var syncedAttributes = {};

            _.reduce(this.model.getCollectionFieldNames(), function(memo, attr) {
                var collection = this.get(attr);
                if (collection) {
                    memo[attr] = collection;
                }
            }, syncedAttributes, this.model);

            return syncedAttributes;
        };

        /**
         * The VirtualCollection plugin allows collections, made up of one or
         * more {@link Data.Bean} types, to be managed directly through an
         * attribute on a model and to synchronize changes to the associated
         * relationships at the same time as the model is synchronized.
         */
        app.plugins.register('VirtualCollection', ['model'], {
            /**
             * Wraps {@link Data.Bean} methods with custom behaviors in support
             * of the plugin. These methods include:
             *
             * {@link Data.Bean#toJSON}
             * {@link Data.Bean#copy}
             * {@link Data.Bean#set}
             * {@link Data.Bean#hasChanged}
             * {@link Data.Bean#changedAttributes}
             * {@link Data.Bean#revertAttributes}
             * {@link Data.Bean#getSyncedAttributes}
             *
             * @param {Data.Bean} model The model to which the plugin is
             * attached.
             * @param {Object} plugin The instance of the plugin.
             */
            onAttach: function(model, plugin) {
                var overrides = new BeanOverrides(this);

                /**
                 * Appends the JSON for the link fields to the JSON for the rest
                 * of the model.
                 */
                this.toJSON = _.wrap(this.toJSON, function(_super, options) {
                    var attrs, fields, collectionFieldNames, collections, links, nonAttrFields, collectionsToJSON, attrToJSON;

                    fields = (options && options.fields) ? options.fields : _.keys(this.attributes);

                    // names of all fields that are collection type
                    collectionFieldNames = this.getCollectionFieldNames();

                    // names of collection type fields to be included
                    collections = _.intersection(collectionFieldNames, fields);

                    links = {}; // names of links fields to be included
                    nonAttrFields = _.clone(collections); // names of collection type fields and link fields to be included

                    _.each(collectionFieldNames, function(fieldName) {
                        var field = this.get(fieldName);
                        if (_.isObject(field) && field.links) {
                            _.each(field.links, function(link) {
                                if (_.contains(fields, link.link.name)) {
                                    (links[fieldName] || (links[fieldName] = [])).push(link.link.name);
                                    nonAttrFields.push(link.link.name);
                                }
                            });
                        }
                    }, this);

                    // names of included fields that are not collection type
                    attrs = _.difference(fields, _.unique(nonAttrFields));

                    collectionsToJSON = overrides.toJSON(collections, links, options);
                    attrToJSON = _super.call(this, _.extend({}, options, {
                        fields: attrs
                    }));

                    return _.extend(attrToJSON, collectionsToJSON);
                });

                /**
                 * Copies the collection fields along with the rest of the
                 * attributes.
                 *
                 * See {@link Data.Bean#copy} and {@link BeanOverrides#copy}.
                 */
                this.copy = _.wrap(this.copy, function(_super, source, fields, options) {
                    var attrs, collections, collectionFieldNames, vardefs;

                    vardefs = app.metadata.getModule(this.module).fields;
                    fields = fields || _.pluck(vardefs, 'name');
                    collectionFieldNames = this.getCollectionFieldNames();
                    collections = _.intersection(collectionFieldNames, fields);
                    attrs = _.difference(fields, collectionFieldNames);

                    overrides.copy(source, collections, options);
                    _super.call(this, source, attrs, options);
                });

                /**
                 * Isolates the collection fields from the rest of the
                 * attributes when setting data on the model. Calls
                 * {@link BeanOverrides#set} to handle the collection fields
                 * and {@link Data.Bean#set} to handle the others.
                 */
                this.set = _.wrap(this.set, function(_super, key, val, options) {
                    var attrs, collections;

                    if (key == null) {
                        return this;
                    }

                    if (typeof key === 'object') {
                        attrs = key;
                        options = val;
                    } else {
                        (attrs = {})[key] = val;
                    }

                    options || (options = {});

                    collections = _.pick(attrs, this.getCollectionFieldNames());
                    attrs = _.omit(attrs, _.keys(collections));

                    overrides.set(collections, options);

                    return _super.call(this, attrs, options);
                });

                /**
                 * Defers to {@link BeanOverrides#hasChanged} when the
                 * attribute is a collection field.
                 */
                this.hasChanged = _.wrap(this.hasChanged, function(_super, attr) {
                    return _super.call(this, attr) || overrides.hasChanged(attr);
                });

                /**
                 * See {@link Data.Bean#changedAttributes} and
                 * {@link BeanOverrides#changedAttributes}.
                 */
                this.changedAttributes = _.wrap(this.changedAttributes, function(_super, diff) {
                    var changed = _.extend(_super.call(this, diff) || {}, overrides.changedAttributes(diff));

                    return _.isEmpty(changed) ? false : changed;
                });

                /**
                 * See {@link Data.Bean#revertAttributes} and
                 * {@link BeanOverrides#revertAttributes}.
                 */
                this.revertAttributes = _.wrap(this.revertAttributes, function(_super, options) {
                    overrides.revertAttributes(options);
                    _super.call(this, options);
                });

                /**
                 * See {@link Data.Bean#getSyncedAttributes} and
                 * {@link BeanOverrides#getSyncedAttributes}.
                 */
                this.getSyncedAttributes = _.wrap(this.getSyncedAttributes, function(_super) {
                    return _.extend(app.utils.deepCopy(_super.call(this) || {}), overrides.getSyncedAttributes());
                });
            },

            /**
             * Returns an array of field names for fields of type `collection`.
             *
             * @return {Array}
             */
            getCollectionFieldNames: function() {
                return _.chain(this.fields).where({type: 'collection'}).pluck('name').value();
            }
        });
    });
})(SUGAR.App);
