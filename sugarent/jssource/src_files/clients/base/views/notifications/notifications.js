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
 * Notifications will pull information from the server based on a given delay.
 *
 * Supported properties:
 *
 * - {Number} delay How often (minutes) should the pulling mechanism run.
 * - {Number} limit Limit imposed to the number of records pulled.
 *
 * Example:
 * <pre><code>
 * // ...
 *     array(
 *         'delay' => 5,
 *         'limit' => 4,
 *     ),
 * //...
 * </code></pre>
 *
 * @class View.Views.Base.NotificationsView
 * @alias SUGAR.App.view.views.BaseNotificationsView
 * @extends View.View
 */
({
    plugins: ['Dropdown', 'RelativeTime', 'EllipsisInline', 'Tooltip'],

    /**
     * Notifications bean collection.
     *
     * @property {Data.BeanCollection}
     */
    collection: null,

    /**
     * Collections for additional modules.
     */
    _alertsCollections: {},

    /**
     * @property {Number} Interval ID for checking reminders.
     */
    _remindersIntervalId: null,

    /**
     * @property {Number} Timestamp of last time when we checked reminders.
     */
    _remindersIntervalStamp: 0,

    /**
     * Interval ID defined when the pulling mechanism is running.
     *
     * @property {Number}
     * @protected
     */
    _intervalId: null,

    /**
     * Default options used when none are supplied through metadata.
     *
     * Supported options:
     * - delay: How often (minutes) should the pulling mechanism run.
     * - limit: Limit imposed to the number of records pulled.
     *
     * @property {Object}
     * @protected
     */
    _defaultOptions: {
        delay: 5,
        limit: 4
    },

    events: {
        'click [data-action=is-read-handler]': 'isReadHandler'
    },

    /**
     * {@inheritDoc}
     */
    initialize: function(options) {
        options.module = 'Notifications';

        this._super('initialize', [options]);
        app.events.on('app:sync:complete', this._bootstrap, this);
        app.events.on('app:logout', this.stopPulling, this);
    },

    /**
     * Bootstrap feature requirements.
     *
     * @return {View.Views.BaseNotificationsView} Instance of this view.
     * @protected
     */
    _bootstrap: function() {
        this._initOptions();
        this._initCollection();
        this._initReminders();
        this.startPulling();

        this.collection.on('change:is_read', this.render, this);

        return this;
    },

    /**
     * Initialize options, default options are used when none are supplied
     * through metadata.
     *
     * @return {View.Views.BaseNotificationsView} Instance of this view.
     * @protected
     */
    _initOptions: function() {
        var options = _.extend(this._defaultOptions, this.meta || {});

        this.delay = options.delay * 60 * 1000;
        this.limit = options.limit;

        return this;
    },

    /**
     * Initialize feature collection.
     *
     * @return {View.Views.BaseNotificationsView} Instance of this view.
     * @protected
     */
    _initCollection: function() {
        this.collection = app.data.createBeanCollection(this.module);
        this.collection.options = {
            params: {
                order_by: 'date_entered:desc'
            },
            limit: this.limit,
            myItems: true,
            fields: [
                'date_entered',
                'id',
                'is_read',
                'name',
                'severity'
            ],
            apiOptions: {
                skipMetadataHash: true
            }
        };

        this.collection.filterDef = [{
            is_read: {$equals: false}
        }];

        return this;
    },

    /**
     * Initialize reminders for Calls and Meetings.
     *
     * Setup the reminderMaxTime that is based on maximum reminder time option
     * added to the pulls delay to get a big interval to grab for possible
     * reminders.
     * Setup collections for each module that we support with reminders.
     *
     * FIXME this will be removed when we integrate reminders with
     * Notifications on server side. This is why we have modules hardcoded.
     * We also don't check for meta as optional because it is required.
     * We will keep all this code private because we don't want to support it
     *
     * @return {View.Views.BaseNotificationsView} Instance of this view.
     * @private
     */
    _initReminders: function() {

        var timeOptions = _.keys(app.lang.getAppListStrings('reminder_time_options')),
            max = _.max(timeOptions, function(key) {
            return parseInt(key, 10);
        });

        this.reminderMaxTime = parseInt(max, 10) + this.delay / 1000;
        this.reminderDelay = 30 * 1000;

        _.each(['Calls', 'Meetings'], function(module) {
            this._alertsCollections[module] = app.data.createBeanCollection(module);
            this._alertsCollections[module].options = {
                limit: this.meta.remindersLimit,
                fields: ['date_start', 'id', 'name', 'reminder_time', 'location', 'parent_name']
            };
        }, this);

        return this;
    },

    /**
     * Start pulling mechanism, executes an immediate pull request and defines
     * an interval which is responsible for executing pull requests on time
     * based interval.
     *
     * @return {View.Views.BaseNotificationsView} Instance of this view.
     */
    startPulling: function() {
        if (!_.isNull(this._intervalId)) {
            return this;
        }
        this._remindersIntervalStamp = new Date().getTime();

        this.pull();
        this._pullReminders();
        this._intervalId = window.setTimeout(_.bind(this._pullAction, this), this.delay);
        this._remindersIntervalId = window.setTimeout(_.bind(this.checkReminders, this), this.reminderDelay);
        return this;
    },

    /**
     * Pulling functionality.
     *
     * @protected
     */
    _pullAction: function() {
        if (!app.api.isAuthenticated()) {
            this.stopPulling();
            return;
        }

        this._intervalId = window.setTimeout(_.bind(this._pullAction, this), this.delay);

        this.pull();
        this._pullReminders();
    },

    /**
     * Stop pulling mechanism.
     *
     * @return {View.Views.BaseNotificationsView} Instance of this view.
     */
    stopPulling: function() {
        if (!_.isNull(this._intervalId)) {
            window.clearTimeout(this._intervalId);
            this._intervalId = null;
        }
        if (!_.isNull(this._remindersIntervalId)) {
            window.clearTimeout(this._remindersIntervalId);
            this._remindersIntervalId = null;
        }
        return this;
    },

    /**
     * Pull and render notifications, if view isn't disposed or dropdown isn't
     * open.
     *
     * @return {View.Views.BaseNotificationsView} Instance of this view.
     */
    pull: function() {
        if (this.disposed || this.isOpen()) {
            return this;
        }

        var self = this;

        this.collection.fetch({
            success: function() {
                if (self.disposed || self.isOpen()) {
                    return this;
                }

                self.render();
            }
        });

        return this;
    },

    /**
     * Pull next reminders from now to the next remindersMaxTime.
     *
     * This will give us all the reminders that should be triggered during the
     * next maximum reminders time (with pull delay).
     */
    _pullReminders: function() {

        if (this.disposed || !_.isFinite(this.reminderMaxTime)) {
            return this;
        }

        var date = new Date(),
            startDate = date.toISOString(),
            endDate;

        date.setTime(date.getTime() + this.reminderMaxTime * 1000);
        endDate = date.toISOString();

        _.each(['Calls', 'Meetings'], function(module) {

            this._alertsCollections[module].filterDef = _.extend({},
                this.meta.remindersFilterDef || {},
                {
                    'date_start': {'$dateBetween': [startDate, endDate]},
                    'users.id': {'$equals': app.user.get('id')}
                }
            );
            this._alertsCollections[module].fetch({
                silent: true,
                merge: true,
                //Notifications should never trigger a metadata refresh
                apiOptions: {skipMetadataHash: true}
            });
        }, this);

        return this;
    },

    /**
     * Check if there is a reminder we should show in the near future.
     *
     * If the reminder exists we immediately show it.
     *
     * @return {View.Views.BaseNotificationsView} Instance of this view.
     */
    checkReminders: function() {
        if (!app.api.isAuthenticated()) {
            this.stopPulling();
            return this;
        }
        var date = (new Date()).getTime(),
            diff = this.reminderDelay - (date - this._remindersIntervalStamp) % this.reminderDelay;
        this._remindersIntervalId = window.setTimeout(_.bind(this.checkReminders, this), diff);
        _.each(this._alertsCollections, function(collection) {
            _.chain(collection.models)
                .filter(function(model) {
                    var needDate = (new Date(model.get('date_start'))).getTime() - parseInt(model.get('reminder_time'), 10) * 1000;
                    return needDate > this._remindersIntervalStamp && needDate - this._remindersIntervalStamp <= diff;
                }, this)
                .each(this._showReminderAlert, this);
        }, this);
        this._remindersIntervalStamp = date + diff;
        return this;
    },

    /**
     * Show reminder alert based on given model.
     *
     * @param {Backbone.Model} model Model that is triggering a reminder.
     *
     * @private
     */
    _showReminderAlert: function(model) {
        var url = app.router.buildRoute(model.module, model.id),
            dateFormat = app.user.getPreference('datepref') + ' ' + app.user.getPreference('timepref'),
            dateValue = app.date.format(new Date(model.get('date_start')), dateFormat),
            template = app.template.getView('notifications.notifications-alert'),
            message = template({
                title: app.lang.get('LBL_REMINDER_TITLE', model.module),
                module: model.module,
                model: model,
                location: model.get('location'),
                description: model.get('description'),
                dateStart: dateValue,
                parentName: model.get('parent_name')
            });
        _.defer(function() {
            if (confirm(message)) {
                app.router.navigate(url, {trigger: true});
            }
        });
    },

    /**
     * Check if dropdown is open.
     *
     * @return {Boolean} `True` if dropdown is open, `false` otherwise.
     */
    isOpen: function() {
        return this.$('[data-name=notifications-list-button]').hasClass('open');
    },

    /**
     * Event handler for notifications.
     *
     * Whenever the user clicks a notification, its `is_read` property is
     * defined as read.
     *
     * We're doing this instead of a plain save in order to
     * prevent the case where an error could occur before the notification get
     * rendered, thus making it as read when the user didn't actually see it.
     *
     * @param {Event} event Click event.
     */
    isReadHandler: function(event) {
        var element = $(event.currentTarget),
            id = element.data('id'),
            notification = this.collection.get(id),
            isRead = notification.get('is_read');

        if (!isRead) {
            notification.set({is_read: true});
        }
    },

    /**
     * {@inheritDoc}
     */
    _renderHtml: function() {
        if (!app.api.isAuthenticated() || app.config.appStatus === 'offline') {
            return;
        }

        this._super('_renderHtml');
    },

    /**
     * {@inheritDoc}
     *
     * Stops pulling for new notifications and disposes all reminders.
     */
    _dispose: function() {
        this.stopPulling();
        this._alertsCollections = {};

        this._super('_dispose');
    }
})
