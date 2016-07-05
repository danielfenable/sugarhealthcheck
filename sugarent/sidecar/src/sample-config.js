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
 * Application configuration.
 * @class Config
 * @alias SUGAR.App.config
 * @singleton
 */
(function(app) {

    app.augment("config", {
        /**
         * Application identifier.
         * @cfg {String}
         */
        appId: 'portal',

        /**
         * Application environment. Possible values: 'dev', 'test', 'prod'
         * @cfg {String}
         */
        env: 'dev',

        /**
         * Flag indicating whether to output Sugar API debug information.
         * @cfg {Boolean}
         */
        debugSugarApi: true,

        /**
         * Logging level.
         * @cfg {Object} [logLevel=Utils.Logger.Levels.DEBUG]
         */
        logLevel: 'DEBUG',

        /**
         * Logging writer.
         * @cfg [logWrtiter=Utils.Logger.ConsoleWriter]
         */
        logWriter: 'ConsoleWriter',

        /**
         * Logging formatter.
         * @cfg [logFormatter=Utils.Logger.SimpleFormatter]
         */
        logFormatter: 'SimpleFormatter',

        /**
         * Sugar REST server URL.
         *
         * The URL can be relative or absolute.
         * @cfg {String}
         */
        serverUrl: '../../sugarcrm/rest/v10',

        /**
         * Sugar site URL.
         *
         * The URL can be relative or absolute.
         * @cfg {String}
         */
        siteUrl: '../../sugarcrm',

        /**
         * Minimal server version a client is compatible with.
         * @cfg {String}
         */
        minServerVersion: "6.6",

        /**
         * Server request timeout (in seconds).
         * @cfg {Number}
         */
        serverTimeout: 30,

        /**
         * Max query result set size.
         * @cfg {Number}
         */
        maxQueryResult: 20,

        /**
         * Max search query result set size (for global search)
         * @cfg {Number}        
         */
        maxSearchQueryResult: 3,

        /**
         * A list of routes that don't require authentication (in addition to `login`).
         * @cfg {Array}
         */
        unsecureRoutes: ["signup", "error"],

        /**
         * Platform name.
         * @cfg {String}
         */
        platform: "portal",

        /**
         * Default module to load for the home route (index).
         * If not specified, the framework loads `home` layout for the module `Home`.
         */
        defaultModule: "Cases",

        /**
         * A list of metadata types to fetch by default.
         * @cfg {Array}
         */
        metadataTypes: [],
        
        /**
         * The field and direction to order by.
         *
         * For list views, the default ordering. 
         * <pre><code>
         *         orderByDefaults: {
         *            moduleName: {
         *                field: '<name_of_field>',
         *                direction: '(asc|desc)'
         *            }
         *        }
         * </pre></code>
         * 
         * @cfg {Object}
         */
        orderByDefaults: {
            'Cases': {
                field: 'case_number',
                direction: 'asc'
            },
            'Bugs': {
                field: 'bug_number',
                direction: 'asc'
            },
            'Notes': {
                field: 'date_modified',
                direction: 'desc'
            }
        },
 
        /**
         * Hash of addtional views of the format below to init and render on app start
         ** <pre><code>
         *         additionalComponents: {
         *            viewName: {
         *                target: 'CSSDomselector'
         *            }
         *        }
         * </pre></code>
         * @cfg {Object}
         */
        additionalComponents: {
            header: {
                target: '#header'
            },
            footer: {
                target: '#footer'
            }
        },

        /**
         * Alerts element selector.
         * @cfg {String}
         */
        alertsEl: '#alerts',

        /**
         * Alert dismiss timeout in milliseconds.
         * @cfg {Number}
         */
        alertAutoCloseDelay: 9000,

        /**
         * Client ID for oAuth
         * Defaults to sugar other values are support_portal
         * @cfg {Array}
         */
        clientID: "sugar",

        /**
         * Syncs config from server on app start
         * Defaults to true otherwise set to false
         * @cfg {Boolean}
         */
        syncConfig: true,
        
        /**
         * Loads css dinamically when the app inits
         * Defaults to false otherwise set "url" or "text"
         * @cfg {String}
         */
        loadCss : false

    }, false);

})(SUGAR.App);
