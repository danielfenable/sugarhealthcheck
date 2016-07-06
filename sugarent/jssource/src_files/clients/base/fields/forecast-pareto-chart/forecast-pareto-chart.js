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
 * @class View.Fields.Base.ForecastParetoChartField
 * @alias SUGAR.App.view.fields.BaseForecastParetoChartField
 * @extends View.Field
 */
({
    /**
     * The data from the server
     */
    _serverData: undefined,

    /**
     * The open state of the sidepanel
     */
    state: "open",

    /**
     * Visible state of the preview window
     */
    preview_open: false,

    /**
     * Is the dashlet collapsed or not
     * @param boolean
     */
    collapsed: false,

    /**
     * Throttled Set Server Data call to prevent it from firing multiple times right in a row.
     */
    throttledSetServerData: false,

    /**
     * {@inheritdoc}
     */
    initialize: function(options) {
        this.once('render', function() {
            this.renderChart();
        }, this);

        this._super('initialize', [options]);

        // we need this if because Jasmine breaks with out as you can't define a view with a layout in Jasmine Test
        // @see BR-1217
        if (this.view.layout) {
            // we need to listen to the context on the layout for this view for when it collapses
            this.view.layout.on('dashlet:collapse', this.handleDashletCollapse, this);
            this.view.layout.context.on('dashboard:collapse:fire', this.handleDashletCollapse, this);
            // We listen to this event to call the chart resize method
            // because the size of the dashlet can change in the dashboard.
            this.view.layout.context.on('dashlet:draggable:stop', this.handleDashletCollapse, this);
        }

        this.throttledSetServerData = _.throttle(this._setServerData, 1000);
    },

    /**
     * {@inheritDoc}
     */
    bindDataChange: function() {
        app.events.on('preview:open', function() {
            this.preview_open = true;
        }, this);
        app.events.on('preview:close', function() {
            this.preview_open = false;
            this.renderDashletContents();
        }, this);

        var defaultLayout = this.closestComponent('sidebar');
        if (defaultLayout) {
            this.listenTo(defaultLayout, 'sidebar:state:changed', function(state) {
                this.state = state;
                this.renderDashletContents();
            });
        }

        this.model.on('change', function(model) {
            var changed = _.keys(model.changed);
            if (!_.isEmpty(_.intersection(['user_id', 'display_manager', 'timeperiod_id'], changed))) {
                this.renderChart();
            }
        }, this);

        this.model.on('change:group_by change:dataset change:ranges', this.renderDashletContents, this);
    },

    /**
     * Utility method to check is the dashlet is visible
     *
     * @returns {boolean}
     */
    isDashletVisible: function() {
        return (!this.disposed && this.state === 'open' &&
                !this.preview_open && !this.collapsed && !_.isUndefined(this._serverData));
    },

    /**
     * Utility method to resize dashlet with check for visibility
     *
     * @returns {boolean}
     */
    resize: function() {
        if (this.isDashletVisible() && this.paretoChart && _.isFunction(this.paretoChart.update)) {
            this.paretoChart.update();
        }
    },

    /**
     * Utility method to render the chart if the dashlet is visible
     *
     * @return {boolean}
     */
    renderDashletContents: function() {
        if (this.isDashletVisible()) {
            this.convertDataToChartData();
            this.generateD3Chart();

            return true;
        }

        return false;
    },

    /**
     * Utility method since there are two event listeners
     *
     * @param {Boolean} collapsed       Is this dashlet collapsed or not
     */
    handleDashletCollapse: function(collapsed) {
        this.collapsed = collapsed;

        this.renderDashletContents();
    },

    /**
     * Attach and detach a resize method to the print event
     * @param {string} The state of print handling.
     */
    handlePrinting: function(state) {
        var self = this,
            mediaQueryList = window.matchMedia && window.matchMedia('print'),
            pausecomp = function(millis) {
                // www.sean.co.uk
                var date = new Date(),
                    curDate = null;
                do {
                    curDate = new Date();
                } while (curDate - date < millis);
            },
            printResize = function(mql) {
                if (mql.matches) {
                    self.paretoChart.width(640).height(320).update();
                    // Pause for a second to let chart finish rendering
                    pausecomp(200);
                } else {
                    browserResize();
                }
            },
            browserResize = function() {
                self.paretoChart.width(null).height(null).update();
            };

        if (state === 'on') {
            if (window.matchMedia) {
                mediaQueryList.addListener(printResize);
            } else if (window.attachEvent) {
                window.attachEvent('onbeforeprint', printResize);
                window.attachEvent('onafterprint', printResize);
            } else {
                window.onbeforeprint = printResize;
                window.onafterprint = browserResize;
            }
        } else {
            if (window.matchMedia) {
                mediaQueryList.removeListener(printResize);
            } else if (window.detachEvent) {
                window.detachEvent('onbeforeprint', printResize);
                window.detachEvent('onafterprint', printResize);
            } else {
                window.onbeforeprint = null;
                window.onafterprint = null;
            }
        }
    },

    /**
     * @inheritDoc
     * Clean up!
     */
    unbindData: function() {
        // we need this if because Jasmine breaks with out as you can't define a view with a layout in Jasmine Test
        // @see BR-1217
        if (this.view.layout) {
            this.view.layout.off('dashlet:collapse', null, this);
            this.view.layout.context.off('dashboard:collapse:fire', null, this);
            this.view.layout.context.off('dashlet:draggable:stop', null, this);
        }
        app.events.off(null, null, this);
        this._super('unbindData');
    },

    /**
     * Render the chart for the first time
     *
     * @param {Object} [options]        Options from the dashlet loaddata call
     */
    renderChart: function(options) {
        if (this.disposed || !this.triggerBefore('chart:pareto:render') ||
            _.isUndefined(this.model.get('timeperiod_id')) ||
            _.isUndefined(this.model.get('user_id'))
        ) {
            return;
        }

        this._serverData = undefined;

        this.chartId = this.cid + '_chart';
        this.paretoChart = nv.models.paretoChart()
            .margin({top: 0, right: 10, bottom: 0, left: 10})
            .showTitle(false)
            .tooltips(true)
            .direction(app.lang.direction)
            .tooltipQuota(function(key, x, y, e, graph) {
                // Format the value using currency class and user settings
                var val = app.currency.formatAmountLocale(e.val, app.currency.getBaseCurrencyId());
                return '<p><b>' + e.key + ': <b>' + val + '</b></p>';
            })
            .tooltipLine(function(key, x, y, e, graph) {
                // Format the value using currency class and user settings
                var val = app.currency.formatAmountLocale(e.point.y, app.currency.getBaseCurrencyId());
                return '<p><b>' + app.lang.get('LBL_CUMULATIVE_TOTAL', 'Forecasts') + '</b></p><p>' + key + ': <b>' + val + '</b></p>';
            })
            .tooltipBar(_.bind(function(key, x, y, e, graph) {
                // Format the value using currency class and user settings
                var val = app.currency.formatAmountLocale(e.value),
                    lbl = app.lang.get('LBL_SALES_STAGE', 'Forecasts');
                if(this.model.get('group_by') == 'probability') {
                    lbl = app.lang.get('LBL_OW_PROBABILITY', 'Forecasts') + ' (%)';
                }

                return '<p>' + lbl + ': <b>' + key + '</b></p>' +
                    '<p>' + app.lang.get('LBL_AMOUNT', 'Forecasts') + ': <b>' + val + '</b></p>' +
                    '<p>' + app.lang.get('LBL_PERCENT', 'Forecasts') + ': <b>' + x + '%</b></p>';
            }, this))
            .colorData('default')
            .colorFill('default')
            .yAxisTickFormat(function(d) {
                return app.currency.getCurrencySymbol(app.currency.getBaseCurrencyId()) + d3.format(',.2s')(d);
            })
            .quotaTickFormat(function(d) {
                return app.currency.getCurrencySymbol(app.currency.getBaseCurrencyId()) + d3.format(',.3s')(d);
            })
            .id(this.chartId)
            .strings({
                legend: {
                    close: app.lang.get('LBL_CHART_LEGEND_CLOSE'),
                    open: app.lang.get('LBL_CHART_LEGEND_OPEN')
                },
                noData: app.lang.get('LBL_CHART_NO_DATA')
            });

        // just on the off chance that no options param is passed in
        options = options || {};
        options.success = _.bind(function(data) {
            if(this.model) {
                this.model.set({
                    title: data.title
                });
                this._serverData = data;
                this.convertDataToChartData();
                this.generateD3Chart();
            }
        }, this);

        var read_options = {};
        if (this.model.has('no_data') && this.model.get('no_data') === true) {
            read_options['no_data'] = 1;
        }

        // if this is a manager view, send the target_quota param to the endpoint
        if(this.model.get('display_manager')) {
            read_options['target_quota'] = (this.model.get('show_target_quota')) ? 1 : 0;
        }

        var url = app.api.buildURL(this.buildChartUrl(), null, null, read_options);

        app.api.call('read', url, {}, options);
    },

    /**
     * Generate the D3 Chart Object
     */
    generateD3Chart: function() {
        var params = this.model.toJSON();

        // clear out the current chart before a re-render
        if (!_.isEmpty(this.paretoChart)) {
            $(window).off('resize.' + this.sfId);
            d3.select('#' + this.chartId + ' svg').remove();
        }

        this.paretoChart.stacked(!params.display_manager);

        if (this.d3Data.data.length > 0) {
            // if the chart element is hidden by a previous render, but has data now, show it
            this.$('.nv-chart').toggleClass('hide', false);
            this.$('.block-footer').toggleClass('hide', true);

            // After the .call(paretoChart) line, we are selecting the text elements for the Y-Axis
            // only so we can custom format the Y-Axis values
            d3.select('#' + this.chartId)
                .append('svg')
                .datum(this.d3Data)
                .call(this.paretoChart);

            $(window).on('resize.' + this.sfId, _.debounce(_.bind(this.resize, this), 100));
            this.handlePrinting('on');

            this.$('.nv-chart').on('click', _.bind(function(e){
              this.paretoChart.dispatch.chartClick();
            }, this));
        } else {
            this.$('.nv-chart').toggleClass('hide', true);
            this.$('.block-footer').toggleClass('hide', false);
        }

        this.trigger('chart:pareto:rendered');
    },

    /**
     * Utility method to determine which data we need to parse,
     */
    convertDataToChartData: function() {
        if(this.state == 'closed' || this.preview_open || this.collapsed || _.isUndefined(this._serverData)) {
            return -1;
        }

        if (this.model.get('display_manager')) {
            this.convertManagerDataToChartData();
        } else {
            this.convertRepDataToChartData(this.model.get('group_by'));
        }
    },

    /**
     * Parse the Manager Data and set the d3Data object
     */
    convertManagerDataToChartData: function() {
        var dataset = this.model.get('dataset'),
            records = this._serverData.data,
            chartData = {
                'properties': {
                    'name': this._serverData.title,
                    'quota': parseFloat(this._serverData.quota),
                    'quotaLabel': app.lang.get((this.model.get('show_target_quota')) ? 'LBL_QUOTA_ADJUSTED' : 'LBL_QUOTA', 'Forecasts'),
                    'groupData': records.map(function(record, i) {
                        return {
                            group: i,
                            l: record.name,
                            t: parseFloat(record[dataset]) + parseFloat(record[dataset + '_adjusted'])
                        };
                    })
                },
                'data': []
            },
            disabledKeys = this.getDisabledChartKeys(),
            barData = [dataset, dataset + '_adjusted'].map(function(ds, seriesIdx) {
                var vals = records.map(function(rec, recIdx) {
                        return {
                            series: seriesIdx,
                            x: recIdx + 1,
                            y: parseFloat(rec[ds]),
                            y0: 0
                        };
                    }),
                    label = this._serverData.labels['dataset'][ds];

                return {
                    disabled: (_.contains(disabledKeys, label)),
                    key: label,
                    series: seriesIdx,
                    type: 'bar',
                    values: vals,
                    valuesOrig: vals
                };
            }, this),
            lineData = [dataset, dataset + '_adjusted'].map(function(ds, seriesIdx) {
                var vals = records.map(function(rec, recIdx) {
                        return {
                            series: seriesIdx,
                            x: recIdx + 1,
                            y: parseFloat(rec[ds])
                        };
                    }),
                    addToLine = 0,
                    label = this._serverData.labels['dataset'][ds];

                _.each(vals, function(val, i, list) {
                    list[i].y += addToLine;
                    addToLine = list[i].y;
                });

                return {
                    disabled: (_.contains(disabledKeys, label)),
                    key: label,
                    series: seriesIdx,
                    type: 'line',
                    values: vals,
                    valuesOrig: vals
                };
            }, this);

        if(this.model.get('show_target_quota')) {
            // add target quota to chart data
            chartData.properties.targetQuota = +this._serverData.target_quota;
            chartData.properties.targetQuotaLabel = app.lang.get('LBL_QUOTA', 'Forecasts');
        }

        chartData.data = barData.concat(lineData);
        this.d3Data = chartData;
    },

    /**
     * Convert the Rep Data and set the d3Data Object
     *
     * @param {string} type     What we are dispaying
     */
    convertRepDataToChartData: function(type) {
        // clear any NaNs
        _.each(this._serverData.data, function(point) {
            if (_.has(point, 'likely') && isNaN(point.likely)) {
                point.likely = 0;
            }
            if (_.has(point, 'best') && isNaN(point.best)) {
                point.best = 0;
            }
            if (_.has(point, 'worst') && isNaN(point.worst)) {
                point.worst = 0;
            }
        });

        var dataset = this.model.get('dataset'),
            ranges = this.model.get('ranges'),
            seriesIdx = 0,
            barData = [],
            lineVals = this._serverData['x-axis'].map(function(axis, i) {
                return { series: seriesIdx, x: i + 1, y: 0 };
            }),
            line = {
                'key': this._serverData.labels.dataset[dataset],
                'type': 'line',
                'series': seriesIdx,
                'values': [],
                'valuesOrig': []
            },
            chartData = {
                'properties': {
                    'name': this._serverData.title,
                    'quota': parseFloat(this._serverData.quota),
                    'quotaLabel': app.lang.get('LBL_QUOTA', 'Forecasts'),
                    'groupData': this._serverData['x-axis'].map(function(item, i) {
                        return {
                            'group': i,
                            'l': item.label,
                            't': 0
                        };
                    })
                },
                'data': []
            },
            records = this._serverData.data,
            data = (!_.isEmpty(ranges)) ? records.filter(function(rec) {
                return _.contains(ranges, rec.forecast);
            }) : records,
            disabledKeys = this.getDisabledChartKeys();

        _.each(this._serverData.labels[type], function(label, value) {
            var td = data.filter(function(d) {
                return (d[type] == value);
            });

            if (!_.isEmpty(td)) {
                var barVal = this._serverData['x-axis'].map(function(axis, i) {
                        return { series: seriesIdx, x: i + 1, y: 0, y0: 0 };
                    }),
                    axis = this._serverData['x-axis'];

                // loop though all the data and map it to the correct x series
                _.each(td, function(record) {
                    for (var y = 0; y < axis.length; y++) {
                        if (record.date_closed_timestamp >= axis[y].start_timestamp &&
                            record.date_closed_timestamp <= axis[y].end_timestamp) {
                            // add the value
                            var val = parseFloat(record[dataset]);
                            barVal[y].y += val;
                            chartData.properties.groupData[y].t += val;
                            lineVals[y].y += val;
                            break;
                        }
                    }
                }, this);

                barData.push({
                    disabled: (_.contains(disabledKeys, label)),
                    key: label,
                    series: seriesIdx,
                    type: 'bar',
                    values: barVal,
                    valuesOrig: app.utils.deepCopy(barVal)
                });

                // increase the series
                seriesIdx++;
            }
        }, this);

        if (!_.isEmpty(barData)) {
            // fix the line
            var addToLine = 0;
            _.each(lineVals, function(val, i, list) {
                list[i].y += addToLine;
                addToLine = list[i].y;
            });

            line.values = lineVals;
            line.valuesOrig = app.utils.deepCopy(lineVals);

            barData.push(line);
            chartData.data = barData;
        }

        this.d3Data = chartData;
    },

    /**
     * Look at the current chart if it exists and return the keys that are currently
     * disabled they can still be disabled when the chart is re-rendered
     *
     * @return {Array}
     */
    getDisabledChartKeys: function() {
        var currentChartData = d3.select('#' + this.chartId + ' svg').data(),
            disabledBars = (!_.isUndefined(currentChartData[0])) ?
                _.filter(currentChartData[0].data, function(d) {
                    return (!_.isUndefined(d.disabled) && d.disabled === true);
                }) : [];

        return (!_.isEmpty(disabledBars)) ? _.map(disabledBars, function(d) {
            return d.key;
        }) : [];
    },

    /**
     * Accepts params object and builds the proper endpoint url for charts
     *
     * @return {String} has the proper structure for the chart url.
     */
    buildChartUrl: function() {
        var baseUrl = this.model.get('display_manager') ? 'ForecastManagerWorksheets' : 'ForecastWorksheets';
        return baseUrl + '/chart/' + this.model.get('timeperiod_id') + '/' + this.model.get('user_id');
    },

    /**
     * Do we have serverData yet?
     * @returns {boolean}
     */
    hasServerData: function() {
        return !_.isUndefined(this._serverData);
    },

    /**
     * Return the data that was passed back from the server
     * @returns {Object}
     */
    getServerData: function() {
        return this._serverData;
    },

    /**
     *
     * @param {Object} data
     * @param {Boolean} [adjustLabels]
     */
    setServerData: function(data, adjustLabels) {
        this.throttledSetServerData(data, adjustLabels);
    },

    /**
     * This method is called by the _.throttle call in initialize
     *
     * @param {Object} data
     * @param {Boolean} [adjustLabels]
     * @private
     */
    _setServerData: function(data, adjustLabels) {
        this._serverData = data;

        if (adjustLabels === true) {
            this.adjustProbabilityLabels();
        }
        this.renderDashletContents();
    },

    /**
     * When the Probability Changes on the Rep Worksheet, The labels in the chart data need to be updated
     * to Account for the potentially new label.
     */
    adjustProbabilityLabels: function() {
        var probabilities = _.unique(_.map(this._serverData.data, function(item) {
            return item.probability;
        })).sort();

        this._serverData.labels.probability = _.object(probabilities, probabilities);
    },

    /**
     * @inheritDoc
     */
    _dispose: function() {
        this.handlePrinting('off');
        $(window).off('resize.' + this.sfId);
        this.$('.nv-chart').off('click');
        this._super('_dispose');
    }

})
