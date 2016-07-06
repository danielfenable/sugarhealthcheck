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
 * ParticipantsField is a field for Meetings/Calls that manages the invitees of an event
 *
 * FIXME: This component will be moved out of clients/base folder as part of MAR-2274 and SC-3593
 *
 * @class View.Fields.Base.ParticipantsField
 * @alias SUGAR.App.view.fields.BaseParticipantsField
 * @extends View.Field
 */
({
    fieldTag: 'input.select2',

    plugins: ['EllipsisInline', 'SearchForMore', 'Tooltip'],

    events: {
        'click button[data-action=addRow]': 'addRow',
        'click button[data-action=removeRow]:not(.disabled)': 'removeRow',
        'click button[data-action=previewRow]:not(.disabled)': 'previewRow',
        'click button[data-action=show-more]': 'showMore'
    },

    placeholder: 'LBL_SEARCH_SELECT',

    // Number of hours before the meeting start datetime that will be the beginning
    // of the free/busy schedule timeline.
    timelineStart: 4,
    // Number of hours to display on free/busy schedule timeline.
    timelineLength: 9,
    // Regular Expression that parses module and ID from url
    moduleAndIdParserRegExp: new RegExp('/v\\d+/([^/]+)/([^/]+)/freebusy'),

    /**
     * @inheritdoc
     *
     * View.Fields.Base.ParticipantsField#placeholder can be overridden via
     * options.
     *
     * Adds a delay to the View.Fields.Base.ParticipantsField#addRow,
     * View.Fields.Base.ParticipantsField#removeRow,
     * View.Fields.Base.ParticipantsField#previewRow, and
     * View.Fields.Base.ParticipantsField#search methods so that these event
     * handlers do not execute too frequently.
     *
     * The current user is added to the collection if the model is new.
     */
    initialize: function(options) {
        var currentUser, fieldValue;

        this._super('initialize', [options]);

        // translate the placeholder
        this.placeholder = app.lang.get(this.def.placeholder || this.placeholder, this.module);

        this.addRow = _.debounce(this.addRow, 200);
        this.removeRow = _.debounce(this.removeRow, 200);
        this.previewRow = _.debounce(this.previewRow, 200);
        this.search = _.debounce(this.search, app.config.requiredElapsed || 500);

        if (this.model.isNew()) {
            fieldValue = this.model.get(this.name);
            currentUser = _.extend({_module: 'Users'}, app.utils.deepCopy(app.user));

            if (fieldValue instanceof app.BeanCollection) {
                fieldValue.add(currentUser);
            } else {
                // create a new virtual collection
                this.model.set(this.name, []);
                // add to the virtual collection
                this.model.get(this.name).add(currentUser);
            }
        }

        // get template for timeline header
        this.timelineHeaderTemplate = app.template.getField(this.type, 'timeline-header.partial', this.module);

        // get template for search result formatting
        this.searchResultTemplate = app.template.getField(this.type, 'search-result.partial', this.module);

        // caches the string "More {{field label}}..." for use in the template
        this.showMoreTemplate = app.lang.get('LBL_SHOW_MORE_GENERIC', this.module, {name: this.label});
    },

    /**
     * @inheritdoc
     */
    getFieldElement: function() {
        return this.$(this.fieldTag);
    },

    /**
     * Returns the collection stored for this field.
     *
     * @throws An exception when the value is not a collection
     * @return {VirtualCollection}
     */
    getFieldValue: function() {
        var value = this.model.get(this.name);

        if (!(value instanceof app.BeanCollection)) {
            throw 'the value must be a BeanCollection';
        }

        return value;
    },

    /**
     * @inheritdoc
     *
     * Renders the field anytime the collection is changed. Updates the
     * scheduler UI anytime the start date or end date changes on the model.
     * Attempts to hide the show more button anytime the collection is
     * synchronized.
     */
    bindDataChange: function() {
        this.model.on('change:' + this.name, this.render, this);
        this.model.on('change:date_start', function() {
            this.clearFreeBusyInformationCache();
            this.renderTimelineInfo();
        }, this);
        this.model.on('change:date_end', this.markStartAndEnd, this);
        this.model.on('sync:' + this.name, this.hideShowMoreButton, this);

        // Fetch free/busy information again on save to get the latest.
        this.model.on('sync', function() {
            this.clearFreeBusyInformationCache();
            this.fetchFreeBusyInformation();
        }, this);
    },

    /**
     * @inheritdoc
     *
     * Adds the selected record to the collection.
     */
    bindDomChange: function() {
        var onChange = _.bind(function(event) {
            try {
                this.getFieldValue().add(event.added.attributes);
            } catch (e) {
                app.logger.warn(e);
            }
        }, this);

        this.getFieldElement().on('change', onChange);
    },

    /**
     * @inheritdoc
     *
     * Destroys the Select2 element.
     */
    unbindDom: function() {
        this._super('unbindDom');
        this.getFieldElement().select2('destroy');
    },

    /**
     * @inheritdoc
     *
     * @chainable
     * @private
     */
    _render: function() {
        var $el;

        this._super('_render');

        $el = this.getFieldElement();
        $el.select2({
            allowClear: false,
            formatInputTooShort: '',
            formatSearching: app.lang.get('LBL_LOADING', this.module),
            formatResult: _.bind(this.formatSearchResult, this),
            minimumInputLength: 1,
            query: _.bind(this.search, this),
            selectOnBlur: false
        });
        this.addSearchForMoreButton($el);

        this._renderWithNewRow();

        this.renderTimelineInfo();

        this.hideShowMoreButton();

        return this;
    },

    /**
     * Called by {@link #_render} to handle the visibility of the new
     * participant row during rendering of the field.
     *
     * The select2 widget is hidden by default and never shown unless in edit
     * mode. The select2 widget is shown after render if in edit mode and the
     * collection is empty.
     *
     * If the select2 widget is shown, the delete button is disabled to prevent
     * users from deleting the row and putting the field in a state where new
     * participants cannot be added without re-rendering.
     */
    _renderWithNewRow: function() {
        var value;

        this.$('[name=newRow]').hide();

        if (this.action !== 'edit') {
            return;
        }

        try {
            value = this.getFieldValue();

            if (value.length === 0) {
                this.addRow();
                this.$('button[data-action=removeRow]').addClass('disabled');
            }
        } catch (e) {
            app.logger.warn(e);
        }
    },

    /**
     * Render timeline header, meeting start and end lines, and fill in busy
     * schedule timeslots.
     */
    renderTimelineInfo: function() {
        var startAndEndDates = this.getStartAndEndDates();

        if ((this.getTimelineBlocks().length > 0) && (!_.isEmpty(startAndEndDates))) {
            this.renderTimelineHeader();
            this.markStartAndEnd();
            this.fetchFreeBusyInformation();
        }
    },

    /**
     * Render timeline header. It begins 4 hours before the meeting start datetime
     * and ends 5 hours after.
     */
    renderTimelineHeader: function() {
        var timelineHeader = [],
            startAndEndDates = this.getStartAndEndDates(),
            timeFormat,
            timelineStart;

        if (_.isEmpty(startAndEndDates)) {
            return;
        }

        timeFormat = this.getTimeFormat();
        timelineStart = startAndEndDates.timelineStart;

        for (var index = 0; index < this.timelineLength; index++) {
            timelineHeader.push({
                hour: timelineStart.format(timeFormat),
                alt: (index % 2 === 0)
            });
            timelineStart.add('hours', 1);
        }

        this.$('[data-render=timeline-header]').html(this.timelineHeaderTemplate(timelineHeader));
    },

    /**
     * Get the time display format for timeline header.
     * @return {string}
     */
    getTimeFormat: function() {
        var timeFormat = app.date.getUserTimeFormat(),
            hourFormat = timeFormat.charAt(0),
            meridiem = '';

        if (hourFormat === 'h') {
            meridiem = timeFormat.substr(-1, 1);
        }

        return (hourFormat + meridiem);
    },

    /**
     * Mark the start and end datetime on the timeline for all participants.
     */
    markStartAndEnd: function() {
        var startAndEndDates = this.getStartAndEndDates(),
            timelineBlockStart,
            timelineBlockEnd,
            $timelineBlocks;

        this.getTimelineBlocks().removeClass('schedule start end start-end');

        if (_.isEmpty(startAndEndDates)) {
            return;
        }

        timelineBlockStart = startAndEndDates.meetingStart.diff(startAndEndDates.timelineStart, 'hours', true) * 4;
        timelineBlockEnd = (startAndEndDates.meetingEnd.diff(startAndEndDates.timelineStart, 'hours', true) * 4) - 1;

        this.getFieldValue().each(function(participant) {
            $timelineBlocks = this.getTimelineBlocks(participant.module, participant.get('id'));

            // start and end datetime is the same
            if (timelineBlockStart - timelineBlockEnd === 1) {
                $timelineBlocks.eq(timelineBlockStart).addClass('start-end');
                return;
            }

            // mark start and end datetime range
            $timelineBlocks.each(function(index, timelineBlock) {
                var $block = $(timelineBlock);

                if ((index >= timelineBlockStart) && (index <= timelineBlockEnd)) {
                    $block.addClass('schedule');
                }

                if (index === timelineBlockStart) {
                    $block.addClass('start');
                }

                if (index === timelineBlockEnd) {
                    $block.addClass('end');
                }
            });
        }, this);
    },

    /**
     * Fetch schedules for Users.
     */
    fetchFreeBusyInformation: function() {
        var self = this,
            requests = [],
            startAndEndDates = this.getStartAndEndDates(),
            participants = this.getFieldValue();

        if (this.freebusy.isFetching()) {
            return;
        }

        participants.each(function(participant) {
            var url,
                freeBusyFromCache,
                moduleName = participant.module,
                id = participant.get('id');

            if (moduleName === 'Users') {
                freeBusyFromCache = self.getFreeBusyInformationFromCache(moduleName, id);

                if (freeBusyFromCache) {
                    self.fillInFreeBusyInformation(freeBusyFromCache);
                } else {
                    url = app.api.buildURL(moduleName, 'freebusy', {id: id}, {
                        start: startAndEndDates.timelineStart.formatServer(),
                        end: startAndEndDates.timelineEnd.formatServer()
                    });
                    requests.push({
                        url: url.substring(4) //need to remove "rest" from the URL to be compatible with the bulk API
                    });

                    self.showLoadingOnTimeline(moduleName, id);
                }
            }
        });

        this.freebusy.fetch(requests, {
            success: function(data) {
                if (!self.disposed) {
                    _.each(data, function(response) {
                        self.fillInFreeBusyInformation(response.contents);
                    });
                }
            },
            error: function() {
                app.logger.warn('Error received from server while retrieving free/busy information.');
                app.alert.show('freebusy-error', {
                    level: 'warning',
                    autoClose: true,
                    messages: 'LBL_ERROR_RETRIEVING_FREE_BUSY'
                });
            },
            complete: function(request) {
                var data;
                if (!self.disposed && request.params.data) {
                    data = JSON.parse(request.params.data);
                    _.each(data.requests, function(requestData) {
                        var moduleAndId = self.parseModuleAndIdFromUrl(requestData.url);
                        self.hideLoadingOnTimeline(moduleAndId.module, moduleAndId.id);
                    });
                }
            }
        });
    },

    freebusy: (function() {
        var fetching = false;

        return {
            /**
             * Calls the bulk api to make multiple free/busy GET requests in a single call.
             * @param {Array} requests
             * @param {Object} options
             */
            fetch: function(requests, options) {
                var self = this;
                if (!_.isEmpty(requests)) {
                    options.complete = _.wrap(options.complete, function(func, request) {
                        func(request);
                        self.isFetching(false);
                    }, this);
                    app.api.call('create', app.api.buildURL(null, 'bulk'), {requests: requests}, options);
                    this.isFetching(true);
                }
            },

            /**
             * Is it currently in the process of fetching?
             * @param {boolean} [isFetching] Set whether or not it is currently fetching
             * @return {boolean}
             */
            isFetching: function(isFetching) {
                if (_.isUndefined(isFetching)) {
                    return fetching;
                } else {
                    fetching = isFetching;
                }
            }
        }
    })(),

    /**
     * Fill in the busy slots on the timeline.
     * @param {Object} scheduleInfo - free/busy info from the server
     */
    fillInFreeBusyInformation: function(scheduleInfo) {
        var startAndEndDates = this.getStartAndEndDates(),
            timelineStart = startAndEndDates.timelineStart,
            timelineEnd = startAndEndDates.timelineEnd;

        if (!scheduleInfo || _.isEmpty(startAndEndDates)) {
            return;
        }

        this.cacheFreeBusyInformation(scheduleInfo);
        this.getTimelineBlocks(scheduleInfo.module, scheduleInfo.id).removeClass('busy');

        _.each(scheduleInfo.freebusy, function(busy) {
            var busyStartDate = app.date(busy.start),
                busyEndDate = app.date(busy.end);

            if (busyStartDate.isBefore(timelineEnd) && !busyEndDate.isBefore(timelineStart)) {
                this.setAsBusy(busy, scheduleInfo.module, scheduleInfo.id);
            }
        }, this);
    },

    /**
     * Mark the timeslot as busy.
     * @param {Object} busy - start and end datetime that should be marked as busy
     * @param {string} moduleName
     * @param {string} id
     */
    setAsBusy: function(busy, moduleName, id) {
        var startAndEndDates = this.getStartAndEndDates(),
            busyStartDate = app.date(busy.start),
            busyEndDate = app.date(busy.end),
            diffInHours,
            $timelineBlocks = this.getTimelineBlocks(moduleName, id);

        if (_.isEmpty(startAndEndDates)) {
            return;
        }

        // To optimize, we set the busyStartDate as the beginning of the timeline.
        if (busyStartDate.isBefore(startAndEndDates.timelineStart)) {
            busyStartDate = app.date(startAndEndDates.timelineStart);
        }

        while (busyStartDate.isBefore(busyEndDate) && busyStartDate.isBefore(startAndEndDates.timelineEnd)) {
            diffInHours = busyStartDate.diff(startAndEndDates.timelineStart, 'hours', true);

            if (diffInHours >= 0) {
                $timelineBlocks.eq(diffInHours * 4).addClass('busy');
            }

            busyStartDate.add('minutes', 15);
        }
    },

    /**
     * Get timeline start and end datetime and meeting start and end datetimes.
     * Returns empty object if the meeting start and end datetimes are invalid.
     * @return {Object}
     */
    getStartAndEndDates: function() {
        var dateStartString = this.model.get('date_start'),
            dateEndString = this.model.get('date_end'),
            meetingStart,
            meetingEnd,
            result = {};

        if (!dateStartString || !dateEndString) {
            return result;
        }

        meetingStart = app.date(dateStartString);
        meetingEnd = app.date(dateEndString);

        if (!meetingStart.isAfter(meetingEnd)) {
            result.meetingStart = meetingStart;
            result.meetingEnd = meetingEnd;
            result.timelineStart = app.date(meetingStart).subtract('hours', this.timelineStart).minutes(0);
            result.timelineEnd = app.date(result.timelineStart).add('hours', this.timelineLength).minutes(0);
        }

        return result;
    },

    /**
     * Get timeline timeslots for a given module and ID. If moduleName and ID are
     * not specified, return timeslots for all timelines.
     * @param {string} moduleName (optional)
     * @param {string} id (optional)
     * @return {jQuery}
     */
    getTimelineBlocks: function(moduleName, id) {
        var selector;

        if (moduleName && id) {
            selector = '[data-module=' + moduleName + '][data-id=' + id + ']';
        } else {
            selector = '.participant';
        }

        selector += ' .times .timeblock span';

        return this.$(selector);
    },

    /**
     * Cache free/busy data received from the server.
     * @param {Object} data - the free/busy data from the server
     */
    cacheFreeBusyInformation: function(data) {
        if (_.isUndefined(this._freeBusyCache)) {
            this._freeBusyCache = [];
        } else {
            this._freeBusyCache = _.reject(this._freeBusyCache, function(freebusy) {
                return (freebusy.id === data.id) && (freebusy.module === data.module);
            });
        }

        this._freeBusyCache.push(data);
    },

    /**
     * Get free/busy data from cache.
     * @param {string} moduleName
     * @param {string} id
     * @return {Object}
     */
    getFreeBusyInformationFromCache: function(moduleName, id) {
        return _.findWhere(this._freeBusyCache, {
            module: moduleName,
            id: id
        });
    },

    /**
     * Clear free/busy data cache.
     */
    clearFreeBusyInformationCache: function() {
        this._freeBusyCache = [];
    },

    /**
     * Show loading message on timeline.
     * @param {string} moduleName
     * @param {string} id
     */
    showLoadingOnTimeline: function(moduleName, id) {
        this.$('[data-module=' + moduleName + '][data-id=' + id + '] .times')
            .addClass('loading')
            .find('[data-toggle=loading]')
            .removeClass('hide');
    },

    /**
     * Hide loading message on timeline.
     * @param {string} moduleName
     * @param {string} id
     */
    hideLoadingOnTimeline: function(moduleName, id) {
        this.$('[data-module=' + moduleName + '][data-id=' + id + '] .times')
            .removeClass('loading')
            .find('[data-toggle=loading]')
            .addClass('hide');
    },

    /**
     * Get module name and ID from URL.
     * @param {string} url
     * @return {Object}
     */
    parseModuleAndIdFromUrl: function(url) {
        var moduleAndId = {},
            parsed = this.moduleAndIdParserRegExp.exec(url);

        if (parsed) {
            moduleAndId.module = parsed[1];
            moduleAndId.id = parsed[2];
        }

        return moduleAndId;
    },

    /**
     * @inheritdoc
     *
     * Converts the models found in the collection to ones that can be used in
     * the templates.
     *
     * @param {VirtualCollection} value
     * @return {Object} Array of models with view properties defined
     * @return {string} return.accept_status The translated string
     * indicating the model's accept status
     * @return {string} return.accept_class The CSS class representing
     * the model's accept status per Twitter Bootstrap's label component
     * @return {string} return.avatar The URL where the model's avatar
     * can be downloaded or undefined if one does not exist
     * @return {boolean} return.deletable Whether or not the model can
     * be removed from the collection
     * @return {boolean} return.last Whether or not the model is the
     * last one in the collection
     * @return {Object} return.preview Preview information for model
     * @return {boolean} return.preview.enabled Whether or not preview
     * is enabled for the model
     * @return {string} return.preview.label The tooltip to be shown for
     * the model when hovering over the preview button
     */
    format: function(value) {
        var acceptStatus, acceptStatusFieldName, deletable, i, preview, rows, self;

        self = this;

        acceptStatusFieldName = 'accept_status_' + this.module.toLowerCase();
        acceptStatus = function(participant) {
            var status = {};

            switch (participant.get(acceptStatusFieldName)) {
                case 'accept':
                    status.label = 'LBL_CALENDAR_EVENT_RESPONSE_ACCEPT';
                    status.css_class = 'success';
                    break;
                case 'decline':
                    status.label = 'LBL_CALENDAR_EVENT_RESPONSE_DECLINE';
                    status.css_class = 'important';
                    break;
                case 'tentative':
                    status.label = 'LBL_CALENDAR_EVENT_RESPONSE_TENTATIVE';
                    status.css_class = 'warning';
                    break;
                default:
                    status.label = 'LBL_CALENDAR_EVENT_RESPONSE_NONE';
                    status.css_class = '';
            }

            return status;
        };

        deletable = function(participant) {
            var assignedUser, undeletable;

            if (participant.deletable === false) {
                return false;
            }

            assignedUser = self.model.get('assigned_user_id');
            undeletable = [assignedUser];

            if (app.user.id !== assignedUser && self.model.isNew()) {
                undeletable.push(app.user.id);
            }

            return !_.contains(undeletable, participant.id);
        };

        preview = function(participant) {
            var isBwc, moduleMetadata, preview;

            isBwc = false;
            preview = {
                enabled: true,
                label: 'LBL_PREVIEW'
            };

            moduleMetadata = app.metadata.getModule(participant.module);
            if (moduleMetadata) {
                isBwc = moduleMetadata.isBwcEnabled;
            }

            if (isBwc) {
                preview.enabled = false;
                preview.label = 'LBL_PREVIEW_BWC_TOOLTIP';
            } else if (_.isEmpty(participant.module) || _.isEmpty(participant.id)) {
                preview.enabled = false;
                preview.label = 'LBL_PREVIEW_DISABLED_NO_RECORD';
            } else if (!app.acl.hasAccess('view', participant.module)) {
                preview.enabled = false;
                preview.label = 'LBL_PREVIEW_DISABLED_NO_ACCESS';
            }

            return preview;
        };

        try {
            i = 1;
            rows = value.length;
            value = value.map(function(participant) {
                var attributes;

                attributes = {
                    accept_status: acceptStatus(participant),
                    deletable: deletable(participant),
                    last: (rows === i++),
                    name: app.utils.getRecordName(participant),
                    preview: preview(participant),
                    module: participant.module
                };

                if (!_.isEmpty(participant.get('picture'))) {
                    attributes.avatar = app.api.buildFileURL({
                        module: participant.module,
                        id: participant.id,
                        field: 'picture'
                    });
                }

                return _.extend(attributes, participant.attributes);
            });
        } catch (e) {
            app.logger.warn(e);
            value = [];
        }

        return value;
    },

    /**
     * Displays the search and select to add a new participant.
     *
     * Hides the [+] button.
     *
     * @param {Event} [event]
     */
    addRow: function(event) {
        this.$('.participants-schedule').addClass('new');
        this.$('[name=newRow]').css('display', 'table-row');

        if (event) {
            $(event.currentTarget).hide();
        }

        this.getFieldElement().select2('open');
    },

    /**
     * Removes the row where the [-] button was clicked.
     *
     * The participant is removed from the collection if it is an participant
     * row. Otherwise, the search and select row is hidden and the [+] is shown
     * again.
     *
     * @param {Event} event
     */
    removeRow: function(event) {
        var id, participants;

        id = $(event.currentTarget).data('id');

        if (id) {
            try {
                participants = this.getFieldValue();
                participants.remove(participants.get(id));
            } catch (e) {
                app.logger.warn(e);
            }
        } else {
            this.$('[name=newRow]').hide();
            this.$('button[data-action=addRow]').show();
            this.$('.participants-schedule').removeClass('new');
        }
    },

    /**
     * Shows or hides the preview of the participant.
     *
     * @param {Event} event
     */
    previewRow: function(event) {
        var data, model, success;

        success = _.bind(function(model) {
            model.module = data.module;
            app.events.trigger('preview:render', model);
        }, this);

        data = $(event.currentTarget).data();
        if (data && data.module && data.id) {
            model = app.data.createBean(data.module, {id: data.id});
            model.fetch({
                showAlerts: true,
                success: success
            });
        }
    },

    /**
     * Loads the next set of participants.
     *
     * The new participants will be rendered once they are added to the
     * collection.
     *
     * @param {Event} event
     */
    showMore: function(event) {
        var options;

        options = {
            fields: ['id', 'full_name', 'email', 'picture', 'accept_status_' + this.module.toLowerCase()],
            order_by: 'full_name:asc'
        };

        try {
            this.getFieldValue().paginate(options);
        } catch (e) {
            app.logger.warn(e);
        }
    },

    /**
     * Hides the pagination button if creating a new record -- because there is
     * no need for it -- or if the virtual collection indicates that there are
     * no additional participants to fetch.
     */
    hideShowMoreButton: function() {
        try {
            if (this.model.isNew() || !this.getFieldValue().hasMore()) {
                this.$('[data-action=show-more]').hide();
            }
        } catch (e) {
            app.logger.warn(e);
        }
    },

    /**
     * Searches for more participants that match the query.
     *
     * Matches that already exist in the collection are suppressed. See
     * [Select2](http://ivaynberg.github.io/select2/) for documentation on
     * using the query function.
     *
     * Pagination is disabled.
     *
     * @param {Object} query
     * @param {string} query.term The search term
     * @param {Function} query.callback The callback where data should be
     * passed once it has been loaded
     */
    search: function(query) {
        var data, participants, success;

        data = {
            results: [],
            more: false
        };

        success = function(result) {
            result.each(function(record) {
                var participant = participants.get(record.id);

                if (participant) {
                    app.logger.debug(record.module + '/' + record.id + ' is already in the collection');
                } else {
                    record.text = record.get('name');
                    data.results.push(record);
                }
            });
        };

        try {
            participants = this.getFieldValue();
            participants.search({
                query: query.term,
                success: success,
                search_fields: ['full_name', 'email', 'account_name'],
                fields: ['id', 'full_name', 'first_name', 'last_name', 'email', 'account_name', 'picture'],
                complete: function() {
                    query.callback(data);
                }
            });
        } catch (e) {
            app.logger.warn(e);
            query.callback(data);
        }
    },

    /**
     * Format the search result for display in select2 result list
     *
     * @param {Data.Bean} bean A bean result
     * @return {string}
     */
    formatSearchResult: function(bean) {
        var result = {
            module: bean.module,
            name: app.utils.getRecordName(bean)
        };

        _.each(bean.searchInfo.highlighted, function(field) {
            result.field_name = app.lang.get(field.label, field.module);
            result.field_value = field.text;
        });

        return this.searchResultTemplate(result);
    }
})
