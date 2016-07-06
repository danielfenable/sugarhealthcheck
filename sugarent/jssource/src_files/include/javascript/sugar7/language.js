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
        app.lang = _.extend(app.lang, {

            /**
             * Retrieves module singular from name.
             *
             * @deprecated Deprecated since 7.6.0. Use
             *   {@link Core.Language#getModuleName} instead. Will be removed
             *   in 7.8.0.
             * @param {String} module Module name.
             * @return {String} Module singular form.
             */
            getModuleSingular: function(module) {
                app.logger.warn('The `app.lang.getModuleSingular` function has been deprecated since 7.6.0. Please ' +
                    + 'upgrade your code to use `app.lang.getModuleName`.');

                var modString = app.metadata.getStrings('mod_strings')[module],
                    moduleSingular = (modString ? modString['LBL_MODULE_NAME_SINGULAR'] : '') ||
                        app.lang.getAppListStrings('moduleListSingular')[module] ||
                        app.lang.getAppListStrings('moduleList')[module] ||
                        module;

                return moduleSingular;
            },

            /**
             * Gets the letters used for the icons shown in various headers for
             * each module, based on the translated singular module name.
             *
             * This does not always match the name of the module in the model,
             * e.g. "Product" maps to "Quoted Line Item".
             *
             * If the module has an icon string defined, use it, otherwise
             * fallback to the module's translated name.
             *
             * If there are spaces in the name, (e.g. Revenue Line Items or
             * Product Catalog), it takes the initials from the first two words,
             * instead of the first two letters (e.g. RL and PC, instead of Re
             * and Pr).
             *
             * @param {string} module Module to which the icon belongs.
             */
            getModuleIconLabel: function(module) {
                var name = app.lang.getAppListStrings('moduleIconList')[module] ||
                        app.lang.getModuleName(module);
                var space = name.indexOf(' ');
                var hasSpace = space !== -1;
                var result;

                if (hasSpace) {
                    result = name.substring(0, 1) + name.substring(space + 1, space + 2);
                } else {
                    result = name.substring(0, 2);
                }

                return result;
            }
        });

    });

    /**
     * When application finishes syncing.
     */
    app.events.on('app:sync:complete', function() {
        app.date.lang(app.user.getPreference('language'));
    });

    app.events.on('lang:direction:change', function() {
        var direction = app.lang.direction,
            isRTL = direction === 'rtl';
        $('html').toggleClass('rtl', isRTL);
    });

})(SUGAR.App);
