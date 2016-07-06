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
    //Pull the precompile header and footer from the node precompile implementation for handlebars
    var _header = "(function() {\n  var template = Handlebars.template, templates = Handlebars.templates = Handlebars.templates || {};\n",
        _footer = '})();',
        _templates = {},
        _sources = {},
        _templateManager;

    /**
     * Manages Handlebars templates.
     *
     * @class View.TemplateManager
     * @alias SUGAR.App.template
     * @singleton
     */
    _templateManager = {

        /**
         * Loads templates from local storage and populates `Handlebars.templates` collection.
         */
        init: function() {
            _templates = app.config.cacheMeta ? app.cache.get("templates") || {} : {};
            var src = "";
            _.each(_templates, function(t) {
                src += t;
            });

            try {
                eval(_header + src + _footer);
            }
            catch (e) {
                app.logger.error("Failed to eval templates retrieved from local storage:\n" + e);
                // TODO: Trigger app:error event
            }
        },

        /**
         * Used to register a template src without compiling the template yet. The template will be
         * compiled the first time it is used (requested with getView/getLayout/getField)
         * @param tpl
         * @param src
         * @param force
         * @private
         */
        _add : function(tpl, src, force) {
            var key = tpl[0],
                loaded = this.get(key, false);
            if (loaded && !force) {
                return;
            }
            //If we have already loaded this template but with a different source, we need to mark it for recompilation
            if (loaded && force && _sources[key] != src) {
                _templates[key] =  Handlebars.templates[key] = null;
            }
            _sources[key] = src;
        },

        /**
         * Conditionally compiles a template.
         * @param {Array} tpl First item is template key, the second is compiled template.
         * @param {String} src Template source code.
         * @param {Boolean} force Flag indicating if the template must be re-compiled.
         * @private
         * @ignore
         */
        _compile: function(tpl, src, force) {
            Handlebars.templates = Handlebars.templates || {};
            _templates[tpl[0]] =  Handlebars.templates[tpl[0]] = (force || !tpl[1]) ? this.compile(tpl[0], src) : tpl[1];
            return _templates[tpl[0]];
        },

        /**
         * Compiles a template.
         *
         * This method puts the precompiled version of the template in cache and returns the compiled template.
         * The template can be accessed directly via `Handlebars.templates[key]` statement.
         *
         * @param {String} key Template identifier.
         * @param {String} src The actual template source to be compiled.
         * @return {Function} Compiled template.
         */
        compile: function(key, src) {
            try {
                _templates[key] = "templates['" + key + "'] = template(" + Handlebars.precompile(src) + ");\n";
                eval(_header + _templates[key] + _footer);
            } catch (e) {
                // Invalid templates will cause a JS error when they either pre-compile or compile.
                app.logger.error("Failed to compile or eval template " + key + ".\n" + e);
            }
            return this.get(key, false) || this.empty;
        },

        /**
         * Retrieves a compiled handlebars template.
         * @param {String} key Identifier of the template to be retrieved.
         * @param {boolean=} (optional) compile force the template to compile if we have uncompiled source.
         *  Defaults to true.
         * @return {Function} Compiled Handlebars template.
         */
        get: function(key, compile) {
            //Undefined should default to true for compiled (not passed means compile)
            compile = _.isUndefined(compile) || compile;
            if (compile && !Handlebars.templates[key] && _sources[key]){
                this._compile([key], _sources[key]);
            }
            return Handlebars.templates ? Handlebars.templates[key] : null;
        },

        // Convenience private method
        _getView: function(name, module, compile) {
            var key = name + (module ? ("." + module) : "");
            return [key, this.get(key, compile)];
        },

        /**
         * Gets compiled template for a view.
         * @param {String} name View name.
         * @param {String} module(optional) Module name.
         * @return {Function} Compiled template.
         */
        getView: function(name, module) {
            return this._getView(name, module, true)[1];
        },

        // Convenience private method
        _getField: function(type, view, module, fallbackTemplate, skipFallbacks, compile) {
           var foundTemplate,
               prefix = "f." + type + ".",
               key = prefix + (module ? (module + ".") : "") + view;

            module += ".";
           
           // get the module specific one first, then try the base one for this view
           foundTemplate = this.get(prefix + module + view, compile) || this.get(prefix + view, compile);
            //skipfallbacks indicates we should only check for the requested field,
           if (!foundTemplate && !skipFallbacks)
           {
               foundTemplate = this.get(prefix + module + fallbackTemplate, compile) || this.get(prefix + fallbackTemplate, compile);
               // If we got nothing for the requested fallback, use base as the last ditch fallback
               if (!foundTemplate)
                   foundTemplate = this.get("f.base." + view, compile) || this.get("f.base." + fallbackTemplate, compile);
           }
           return [key,foundTemplate];
       },

        /**
         * Gets compiled template for a field.
         * @param {String} type Field type.
         * @param {String} view View name.
         * @param {String} module The Module where the field is from
         * @param {Boolean} fallbackTemplate(optional) Template name to fallback to if template for `view` is not found.
         * if view specific is not found. Defaults to `true`.
         * @return {Function} Compiled template.
         */
        getField: function(type, view, module, fallbackTemplate) {
            return this._getField(type, view, module, fallbackTemplate, false, true)[1];
        },

        // Convenience private method
        _getLayout: function(name, moduleName, compile) {
            var key = "l." + (moduleName ? (moduleName + ".") : "") + name;
            return [key, this.get(key, compile)];
        },

        /**
         * Gets compiled template for a layout.
         * @param {String} type Layout Type
         * @param {String} name(optional) Layout name.
         * @param {String} moduleName(optional) Module name.
         * @return {Function} Compiled template.
         */
        getLayout: function(name, moduleName) {
            return this._getLayout(name, moduleName, true)[1];
        },

        /**
         * Compiles and puts into local storage a view template.
         * @param {String} name View name.
         * @param {String} module Module name.
         * @param {String} src Template source code.
         * @param {Boolean} force Flag indicating if the template must be re-compiled.
         * @return {Function} Compiled template.
         */
        setView: function(name, module, src, force) {
            return this._add(this._getView(name, module, false), src, force);
        },

        /**
         * Compiles and puts into local storage a field template.
         * @param {String} type Field type.
         * @param {String} view View name.
         * @param {String} module Module where field came from
         * @param {String} src Template source code.
         * @param {Boolean} force Flag indicating if the template must be re-compiled.
         * @return {Function} Compiled template.
         */
        setField: function(type, view, module, src, force) {
            // Don't fall back to default template (false flag)
            return this._add(this._getField(type, view, module, null, true, false), src, force);
        },

        /**
         * Compiles and stores layout templates
         * @param {String} name Layout Name
         * @param {String} moduleName Module Name (optional)
         * @param {String} src Raw template source
         * @param {Boolean} force Flag indicating if the template must be re-compiled
         * @return {Function} Compiled template
         */
        setLayout: function(name, moduleName, src, force) {
            return this._add(this._getLayout(name, moduleName, false), src, force);
        },

        /**
         * Registers view, layout, and field templates from metadata payload for later "lazy" on-demand compilation.
         * The metadata must contain the following sections:
         *
         * <pre>
         * {
         *    // This should now be deprecated
         *    "view_templates": {
         *       "detail": HB template source,
         *       "list": HB template source,
         *       // etc.
         *    },
         *
         *    "sugarFields": {
         *        "text": {
         *            "templates": {
         *               "default": HB template source,
         *               "detail": HB template source,
         *               "edit": ...,
         *               "list": ...
         *            }
         *        },
         *        "bool": {
         *           // templates for boolean field
         *        },
         *        // etc.
         *    }
         *
         *    "views": {
         *      "text": {
         *          "templates" {
         *              "view": HB template source...
         *              "view2": HB template source..
         *          }.
         *    }
         * }
         * </pre>
         *
         * @param {Object} metadata Metadata payload.
         * @param {Boolean} force(optional) Flag indicating if the cache is ignored and the templates are to be recompiled.
         */
        set: function(metadata, force) {
            if (metadata.views) {
                _.each(metadata.views, function(view, name) {
                    if (name != "_hash") {
                        _.each(view.templates, function(src, key) {
                            key = name == key ? key : name + "." + key;
                            this.setView(key, null, src, force);
                        }, this);
                    }
                }, this);
            }

            if (metadata.fields) {
                _.each(metadata.fields, function(field, type) {
                    if (type != "_hash") {
                        _.each(field.templates, function(src, view) {
                            this.setField(type, view, null, src, force);
                        }, this);
                    }
                }, this);
            }

            if (metadata.layouts) {
                _.each(metadata.layouts, function(layout, type) {
                    if (type != "_hash") {
                        _.each(layout.templates, function(src, key) {
                            key = type == key ? key : type + "." + key;
                            this.setLayout(key, null, src, force);
                        }, this);
                    }
                }, this);
            }

        },

        /**
         * Pre-compiled empty template.
         *
         * @property {Function}
         */
        empty: function() {
            return "";
        }
    };

    app.augment("template", _templateManager);

})(SUGAR.App);
