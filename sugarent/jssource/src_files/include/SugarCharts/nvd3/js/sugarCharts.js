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

function loadSugarChart(chartId, jsonFilename, css, chartConfig, chartParams, callback) {
    this.chartObject = '';

    // get chartId from params or use the default for sugar
    var d3ChartId = 'd3_' + chartId || 'd3_c3090c86-2b12-a65e-967f-51b642ac6165';
    var canvasChartId = 'canvas_' + chartId || 'canvas_c3090c86-2b12-a65e-967f-51b642ac6165';

    if (document.getElementById(d3ChartId) === null) {
        return false;
    }

    var labelType = 'Native',
        useGradients = false,
        animate = false,
        that = this,
        /**
         * the main container to render chart
         */
        contentEl = 'content',
        /**
         * width of one column to render bars
         */
        minColumnWidth = 40;

    var params = _.extend({
        show_title: true,
        show_legend: true,
        show_controls: false,
        show_tooltips: true,
        show_y_label: false,
        y_axis_label: '',
        show_x_label: false,
        x_axis_label: '',
        vertical: true,
        wrapTicks: true,
        staggerTicks: true,
        rotateTicks: true,
        reduceXTicks: false,
        allowScroll: false,
        overflowHandler: false,
        showValues: false,
        hideEmptyGroups: true,
        stacked: true,
        colorData: 'default',
        margin: {top: 10, right: 10, bottom: 10, left: 10},
        direction: chartConfig['direction'] || 'ltr'
    }, chartParams);

    contentEl = params.contentEl || contentEl;
    minColumnWidth = params.minColumnWidth || minColumnWidth;

    switch (chartConfig['chartType']) {

        case 'paretoChart':
            SUGAR.charts.get(jsonFilename, params, function(data) {

                if (SUGAR.charts.isDataEmpty(data)) {

                    var json = SUGAR.charts.translateParetoDataToD3(data, params, chartConfig);

                    var paretoChart = nv.models.paretoChart()
                        .margin(params.margin)
                        .showTitle(false)
                        .tooltips(true)
                        .direction(params.direction)
                        .tooltipLine(function(key, x, y, e, graph) {
                            // Format the value using currency class and user settings
                            var val = App.currency.formatAmountLocale(e.point.y);
                            return '<p>' + key + ': <b>' + val + '</b></p>';
                        })
                        .tooltipBar(function(key, x, y, e, graph) {
                            // Format the value using currency class and user settings
                            var val = App.currency.formatAmountLocale(e.value);
                            return '<p>' + SUGAR.charts.translateString('LBL_SALES_STAGE', 'Forecasts') + ': <b>' + key + '</b></p>' +
                                   '<p>' + SUGAR.charts.translateString('LBL_AMOUNT', 'Forecasts') + ': <b>' + val + '</b></p>' +
                                   '<p>' + SUGAR.charts.translateString('LBL_PERCENT', 'Forecasts') + ': <b>' + x + '%</b></p>';
                        })
                        .showControls(false)
                        .colorData('default')
                        .colorFill('default')
                        .allowScroll(false)
                        .stacked(!params.display_manager)
                        .id(chartId)
                        .strings({
                            legend: {
                                close: SUGAR.charts.translateString('LBL_CHART_LEGEND_CLOSE'),
                                open: SUGAR.charts.translateString('LBL_CHART_LEGEND_OPEN')
                            },
                            noData: SUGAR.charts.translateString('LBL_CHART_NO_DATA')
                        });

                    // get chartId from params or use the default for sugar
                    d3ChartId = params.chartId || 'db620e51-8350-c596-06d1-4f866bfcfd5b';

                    var completeCallback = function() {
                        SUGAR.charts.renderChart(chartId, paretoChart, json);
                        d3.select('#' + d3ChartId)
                            .selectAll('.nv-y.nv-axis text')
                            .text(function(d) {
                                return App.user.get('preferences').currency_symbol + d3.format(',.2s')(d);
                            });
                    };

                    that.chartObject = paretoChart;

                    if (chartConfig['ReportModule']) {
                        paretoChart.legend
                            .showAll(true);

                        SUGAR.charts.trackWindowResize(paretoChart);

                        if (chartConfig['imageExportType']) {
                            SUGAR.charts.saveImageFile(chartId, paretoChart, json, jsonFilename, chartConfig['imageExportType'], completeCallback);
                        } else {
                            SUGAR.charts.renderChart(chartId, paretoChart, json);
                        }
                    } else {
                        // After the .call(paretoChart) line, we are selecting the text elements for the Y-Axis
                        // only so we can custom format the Y-Axis values
                        d3.select('#' + d3ChartId)
                            .append('svg')
                            .datum(json)
                            .transition().duration(500)
                            .call(paretoChart)
                            .selectAll('.nv-y.nv-axis text')
                            .text(function(d) {
                                return App.user.get('preferences').currency_symbol + d3.format(',.2s')(d);
                            });
                    }

                    SUGAR.charts.callback(callback, paretoChart);
                }
            });
            break;

        case 'barChart':
            SUGAR.charts.get(jsonFilename, params, function(data) {

                if (SUGAR.charts.isDataEmpty(data)) {

                    var json = SUGAR.charts.translateDataToD3(data, params, chartConfig);

                    if (json.properties && json.properties.labels && json.properties.labels.length > 50) {
                        SUGAR.charts.renderError(chartId, SUGAR.charts.translateString('LBL_CANNOT_DISPLAY_CHART_MESSAGE', 'Reports'));
                        return;
                    }

                    params.vertical = chartConfig['orientation'] === 'vertical' ? true : false;

                    var barChart = nv.models.multiBarChart()
                        .id(d3ChartId)
                        .vertical(params.vertical)
                        .margin(params.margin)
                        .showTitle(params.show_title)
                        .tooltips(params.show_tooltips)
                        .tooltipContent(function(key, x, y, e, graph) {
                            return '<h3>' + key + '</h3>' +
                                '<p>' + y + '</p>';
                        })
                        .direction(params.direction)
                        .showLegend(params.show_legend)
                        .showControls(params.show_controls)
                        .wrapTicks(params.wrapTicks)
                        .staggerTicks(params.staggerTicks)
                        .rotateTicks(params.rotateTicks)
                        .reduceXTicks(params.reduceXTicks)
                        .colorData(params.colorData)
                        .stacked(params.stacked)
                        .allowScroll(params.allowScroll)
                        .overflowHandler(params.overflowHandler)
                        .showValues(params.showValues)
                        .strings({
                            legend: {
                                close: SUGAR.charts.translateString('LBL_CHART_LEGEND_CLOSE'),
                                open: SUGAR.charts.translateString('LBL_CHART_LEGEND_OPEN')
                            },
                            noData: SUGAR.charts.translateString('LBL_CHART_NO_DATA')
                        });

                    barChart.yAxis
                        .tickSize(0)
                        .axisLabel(params.show_y_label)
                        .tickFormat(d3.format('s'));

                    if (params.show_x_label) {
                        barChart.xAxis
                            .axisLabel(params.x_axis_label);
                    }

                    if (params.show_y_label) {
                        barChart.yAxis
                            .axisLabel(params.y_axis_label);
                    }

                    that.chartObject = barChart;

                    if (chartConfig['ReportModule']) {

                        if (chartConfig['orientation'] === 'vertical') {
                          barChart.legend
                              .rowsCount(5);
                          barChart.legend
                              .showAll(false);
                        }
                        else {
                          barChart.legend
                              .showAll(true);
                        }

                        SUGAR.charts.trackWindowResize(barChart);

                        if (chartConfig['imageExportType']) {
                            SUGAR.charts.saveImageFile(chartId, barChart, json, jsonFilename, chartConfig['imageExportType']);
                        } else {
                            SUGAR.charts.renderChart(chartId, barChart, json);
                        }
                    } else {
                        SUGAR.charts.renderChart(chartId, barChart, json);
                    }

                    SUGAR.charts.callback(callback, barChart);
                }
            });
            break;

        case 'lineChart':
            SUGAR.charts.get(jsonFilename, params, function(data) {
                if (SUGAR.charts.isDataEmpty(data)) {

                    var json = SUGAR.charts.translateDataToD3(data, params, chartConfig);
                    var xLabels = data.label;

                    var lineChart = nv.models.lineChart()
                        .id(d3ChartId)
                        .x(function(d) { return d[0]; })
                        .y(function(d) { return d[1]; })
                        .size(function() { return 123; })
                        .margin(params.margin)
                        .tooltips(params.show_tooltips)
                        .tooltipContent(function(key, x, y, e, graph) {
                            return '<h3>' + key + '</h3>' +
                                '<p>' + y + '</p>';
                        })
                        .direction(params.direction)
                        .showTitle(params.show_title)
                        .showLegend(params.show_legend)
                        .showControls(params.show_controls)
                        .rotateTicks(params.rotateTicks)
                        .colorData(params.colorData)
                        .strings({
                            legend: {
                                close: SUGAR.charts.translateString('LBL_CHART_LEGEND_CLOSE'),
                                open: SUGAR.charts.translateString('LBL_CHART_LEGEND_OPEN')
                            },
                            noData: SUGAR.charts.translateString('LBL_CHART_NO_DATA')
                        });

                    if (params.show_x_label) {
                        lineChart.xAxis
                            .axisLabel(params.x_axis_label);
                    }

                    if (params.show_y_label) {
                        lineChart.yAxis
                            .axisLabel(params.y_axis_label);
                    }

                    lineChart.xAxis
                        .showMaxMin(false)
                        .highlightZero(false)
                        .tickFormat(function(d, i) { return xLabels[d]; });

                    lineChart.yAxis
                        .tickFormat(d3.format('s'));

                    that.chartObject = lineChart;

                    if (chartConfig['ReportModule']) {
                        lineChart.legend
                            .showAll(true);

                        SUGAR.charts.trackWindowResize(lineChart);

                        if (chartConfig['imageExportType']) {
                            SUGAR.charts.saveImageFile(chartId, lineChart, json, jsonFilename, chartConfig['imageExportType']);
                        } else {
                            SUGAR.charts.renderChart(chartId, lineChart, json);
                        }
                    } else {
                        SUGAR.charts.renderChart(chartId, lineChart, json);
                    }

                    SUGAR.charts.callback(callback, lineChart);
                }
            });
            break;

        case 'pieChart':
            SUGAR.charts.get(jsonFilename, params, function(data) {
                if (SUGAR.charts.isDataEmpty(data)) {

                    var json = SUGAR.charts.translateDataToD3(data, params, chartConfig);

                    if (json.properties && json.properties.labels && json.properties.labels.length > 50) {
                        SUGAR.charts.renderError(chartId, SUGAR.charts.translateString('LBL_CANNOT_DISPLAY_CHART_MESSAGE', 'Reports'));
                        return;
                    }

                    var pieChart = nv.models.pieChart()
                        .id(d3ChartId)
                        .margin(params.margin)
                        .tooltips(params.show_tooltips)
                        .showTitle(params.show_title)
                        .showLegend(params.show_legend)
                        .colorData(params.colorData)
                        .direction(params.direction)
                        .strings({
                            legend: {
                                close: SUGAR.charts.translateString('LBL_CHART_LEGEND_CLOSE'),
                                open: SUGAR.charts.translateString('LBL_CHART_LEGEND_OPEN')
                            },
                            noData: SUGAR.charts.translateString('LBL_CHART_NO_DATA')
                        });

                    that.chartObject = pieChart;

                    if (chartConfig['ReportModule']) {
                        pieChart.legend
                            .showAll(true);

                        SUGAR.charts.trackWindowResize(pieChart);

                        if (chartConfig['imageExportType']) {
                            SUGAR.charts.saveImageFile(chartId, pieChart, json, jsonFilename, chartConfig['imageExportType']);
                        } else {
                            SUGAR.charts.renderChart(chartId, pieChart, json);
                        }
                    } else {
                        SUGAR.charts.renderChart(chartId, pieChart, json);
                    }

                    SUGAR.charts.callback(callback, pieChart);
                }
            });
            break;

        case 'funnelChart':
            SUGAR.charts.get(jsonFilename, params, function(data) {
                if (SUGAR.charts.isDataEmpty(data)) {

                    var json = SUGAR.charts.translateDataToD3(data, params, chartConfig);

                    if (json.properties && json.properties.labels && json.properties.labels.length > 16) {
                        SUGAR.charts.renderError(chartId, SUGAR.charts.translateString('LBL_CANNOT_DISPLAY_CHART_MESSAGE', 'Reports'));
                        return;
                    }

                    var funnelChart = nv.models.funnelChart()
                        .id(d3ChartId)
                        .margin(params.margin)
                        .showTitle(params.show_title)
                        .tooltips(params.show_tooltips)
                        .tooltipContent(function(key, x, y, e, graph) {
                            return '<h3>' + key + '</h3>' +
                                '<p>' + (e.label || e.value) + '</p>';
                        })
                        .direction(params.direction)
                        .colorData(params.colorData)
                        .fmtValueLabel(function(d) {
                            return d.label || d.value || d;
                        })
                        .clipEdge(false)
                        .delay(1)
                        .strings({
                            legend: {
                                close: SUGAR.charts.translateString('LBL_CHART_LEGEND_CLOSE'),
                                open: SUGAR.charts.translateString('LBL_CHART_LEGEND_OPEN')
                            },
                            noData: SUGAR.charts.translateString('LBL_CHART_NO_DATA')
                        });

                    that.chartObject = funnelChart;

                    if (chartConfig['ReportModule']) {
                        funnelChart.legend
                            .showAll(true);

                        SUGAR.charts.trackWindowResize(funnelChart, chartId, data);

                        if (chartConfig['imageExportType']) {
                            SUGAR.charts.saveImageFile(chartId, funnelChart, json, jsonFilename, chartConfig['imageExportType']);
                        } else {
                            SUGAR.charts.renderChart(chartId, funnelChart, json);
                        }
                    } else {
                        SUGAR.charts.renderChart(chartId, funnelChart, json);
                    }

                    SUGAR.charts.callback(callback, funnelChart);
                }
            });
            break;

        case 'gaugeChart':
            SUGAR.charts.get(jsonFilename, params, function(data) {
                if (SUGAR.charts.isDataEmpty(data)) {

                    var json = SUGAR.charts.translateDataToD3(data, params, chartConfig);
                    var maxValue = d3.max(json.data.map(function(d) { return d.y; }));

                    if (maxValue === 0) {
                        json.data[0].y = 1;
                        maxValue = 1;
                    }

                    json.data.map(function(d, i) {
                        d.classes = 'nv-fill0' + (i + 1);
                    });

                    //init Gauge Chart
                    var gaugeChart = nv.models.gaugeChart()
                            .id(d3ChartId)
                            .x(function(d) { return d.key; })
                            .y(function(d) { return d.y; })
                            .direction(params.direction)
                            .showLabels(true)
                            .showTitle(true)
                            .colorData('class')
                            .ringWidth(50)
                            .maxValue(maxValue)
                            .transitionMs(4000);

                    that.chartObject = gaugeChart;

                    if (chartConfig['ReportModule']) {
                        gaugeChart.legend
                           .showAll(true);

                        SUGAR.charts.trackWindowResize(gaugeChart);

                        if (chartConfig['imageExportType']) {
                            SUGAR.charts.saveImageFile(chartId, gaugeChart, json, jsonFilename, chartConfig['imageExportType']);
                        } else {
                            SUGAR.charts.renderChart(chartId, gaugeChart, json);
                        }
                    } else {
                        SUGAR.charts.renderChart(chartId, gaugeChart, json);
                    }

                    SUGAR.charts.callback(callback, gaugeChart);
                }
            });
            break;
    }
}

function swapChart(chartId, jsonFilename, css, chartConfig) {
    $('#d3_' + chartId).empty();
    var chart = new loadSugarChart(chartId, jsonFilename, css, chartConfig);
    return chart;
}

/**
 * As you touch the code above, migrate the code to use the pattern below.
 */
(function($) {

    if (typeof SUGAR == 'undefined' || !SUGAR) {
        SUGAR = {};
    }
    SUGAR.charts = {

        chart: null,

        /**
         * Execute callback function if specified
         *
         * @param callback function
         */
        callback: function(callback, chart) {
            if (callback) {
                // if the call back is fired, include the chart as the only param
                callback(chart || this.chart);
            }
        },

        renderChart: function(id, chart, json) {
            $('#d3_' + id).empty();
            d3.select('#d3_' + id)
                .append('svg')
                .datum(json)
                .transition().duration(500)
                .call(chart);
        },

        renderError: function(id, str) {
            $('#d3_' + id).empty();
            d3.select('.reportChartContainer')
                .style('height', 'auto');
            d3.select('.reportChartContainer .chartContainer')
                .style('float', 'none')
                .style('position', 'relative')
                .style('width', '100%');
            d3.select('#d3_' + id)
                .style('height', 'auto')
                .append('div')
                    .attr('class', 'nv-data-error')
                    .attr('align', 'center')
                    .style('padding', '12px')
                    .text(str);
        },
        /**
         * Handle the Legend Generation
         *
         * @param chart
         * @param chartId
         * @return {*}
         */
        generateLegend: function(chart, chartId) {
            var list = $jit.id('legend' + chartId);
            var legend = chart.getLegend();
            var table, i;
            if (typeof legend['wmlegend'] != 'undefined' && legend['wmlegend']['name'].length > 0) {
                table = '<div class="col">';
            } else {
                table = '<div class="row">';
            }
            for (i = 0; i < legend['name'].length; i++) {
                table += '<div class="legendGroup">';
                table += '<div class="query-color" style="background-color:' + legend['color'][i] + '"></div>';
                table += '<div class="label">';
                table += legend['name'][i];
                table += '</div>';
                table += '</div>';
            }

            table += '</div>';


            if (typeof legend['wmlegend'] != 'undefined' && legend['wmlegend']['name'].length > 0) {

                table += '<div class="col2">';
                for (i = 0; i < legend['wmlegend']['name'].length; i++) {
                    table += '<div class="legendGroup">';
                    table += '<div class="waterMark  ' + legend['wmlegend']['type'][i] + '" style="background-color:' + legend['wmlegend']['color'][i] + '"></div>';
                    table += '<div class="label">' + legend['wmlegend']['name'][i] + '</div>';
                    table += '</div>';
                }
                table += '</div>';

            }

            list.innerHTML = table;

            //adjust legend width to chart width
            jQuery('#legend' + chartId).ready(function() {
                var chartWidth = jQuery('#' + chartId).width();
                var sel;
                chartWidth = chartWidth - 20;
                $('#legend' + chartId).width(chartWidth);
                var legendGroupWidth = [];
                if (typeof legend['wmlegend'] != 'undefined' && legend['wmlegend']['name'].length > 0) {
                    sel = '.col .legendGroup';
                } else {
                    sel = '.row .legendGroup';
                }
                $(sel).each(function(index) {
                    legendGroupWidth[index] = $(this).width();
                });
                var largest = Math.max.apply(Math, legendGroupWidth);
                $(sel).width(largest + 2);
            });

            return list;
        },

        /**
         * Calls the server to retrieve chart data, but
         * For D3 charts we already have the data, don't need to make an ajax call to get anything
         * so this is now a polymorphic method.
         *
         * @param urlordata - JSON data for the chart field or target url for Reports module
         * @param param - object of parameters to pass to the server
         * @param success - callback function to be executed after a successful call
         */
        get: function(urlordata, params, success) {
            if (typeof urlordata === 'string') {
                var data = {
                    r: new Date().getTime()
                };
                $.extend(data, params);
                $.ajax({
                    url: urlordata,
                    data: data,
                    dataType: 'json',
                    async: false,
                    success: success
                });
            } else {
                success(urlordata);
            }
        },

        translateString: function(appString, module) {
            if (SUGAR.language) {
                if (module) {
                    return SUGAR.language.get(module, appString);
                } else {
                    return SUGAR.language.get('app_strings', appString);
                }
            } else if (SUGAR.App) {
                if (module) {
                    return SUGAR.App.lang.get(appString, module);
                } else {
                    return SUGAR.App.lang.get(appString);
                }
            } else {
                return appString;
            }
        },

        translateDataToD3: function(json, params, chartConfig) {
            var data = [],
                value = 0,
                strUndefined = SUGAR.charts.translateString('LBL_CHART_UNDEFINED');

            if (json.values.filter(function(d) { return d.values && d.values.length; }).length) {

                switch (chartConfig['chartType']) {

                    case 'barChart':
                        data = chartConfig.barType === 'stacked' || chartConfig.barType === 'grouped' ?
                            json.label.map(function(d, i) {
                                return {
                                    'key': d !== '' ? d : strUndefined,
                                    'type': 'bar',
                                    'values': json.values.map(function(e, j) {
                                        return {
                                          'series': i,
                                          'x': j + 1,
                                          'y': parseFloat(e.values[i]) || 0,
                                          'y0': 0
                                        };
                                    })
                                };
                            }) :
                            json.values.map(function(d, i) {
                                return {
                                    'key': d.values.length > 1 ? d.label : d.label[0] !== '' ? d.label[0] : strUndefined,
                                    'type': 'bar',
                                    'values': json.values.map(function(e, j) {
                                        return {
                                          'series': i,
                                          'x': j + 1,
                                          'y': i === j ? e.values.length > 1 ? e.values.reduce(function(a, b) { return parseFloat(a) + parseFloat(b); }) : parseFloat(e.values[0]) : 0,
                                          'y0': 0
                                        };
                                    })
                                };
                            });
                        break;

                    case 'pieChart':
                        data = json.values.map(function(d, i) {
                            var data = {
                                'key': [].concat(d.label)[0] !== '' ? [].concat(d.label)[0] : strUndefined,
                                'value': parseFloat(d.values.reduce(function(a, b) { return a + b; }, 0))
                            };
                            if (d.color !== undefined) {
                                data.color = d.color;
                            }
                            if (d.classes !== undefined) {
                                data.classes = d.classes;
                            }
                            return data;
                        });
                        break;

                    case 'funnelChart':
                        data = json.values.reverse().map(function(d, i) {
                            return {
                                'key': [].concat(d.label)[0] !== '' ? [].concat(d.label)[0] : strUndefined,
                                'values': [{
                                  'series': i,
                                  'label': d.valuelabels[0] ? d.valuelabels[0] : d.values[0],
                                  'x': 0,
                                  'y': parseFloat(d.values.reduce(function(a, b) { return a + b; }, 0)) || 0,
                                  'y0': 0
                                }]
                            };
                        });
                        break;

                    case 'lineChart':
                        data = json.values.map(function(d, i) {
                            return {
                                'key': d.label !== '' ? d.label : strUndefined,
                                'values': d.values.map(function(e, j) {
                                    return [j, parseFloat(e)];
                                })
                            };
                        });
                        break;

                    case 'gaugeChart':
                        value = json.values.shift().gvalue;
                        var y0 = 0;

                        data = json.values.map(function(d, i) {
                            var values = {
                                'key': d.label !== '' ? d.label : strUndefined,
                                'y': parseFloat(d.values[0]) + y0
                            };
                            y0 += parseFloat(d.values[0]);
                            return values;
                        });
                        break;
                }
            }

            return {
                'properties': {
                    'title': json.properties[0].title,
                    // bar group data (x-axis)
                    'labels': !json.values.filter(function(d) { return d.values.length; }).length ? [] :
                        json.values.map(function(d, i) {
                        return {
                            'group': i + 1,
                            'l': d.label !== '' ? d.label : strUndefined
                        };
                    }),
                    'values': chartConfig['chartType'] === 'gaugeChart' ?
                        [{'group' : 1, 't': value}] :
                        json.values.filter(function(d) { return d.values.length; }).length ?
                            json.values.map(function(d, i) {
                                return {
                                    'group': i + 1,
                                    't': d.values.reduce(function(a, b) {
                                        return parseFloat(a) + parseFloat(b);
                                    })
                                };
                            }) :
                            []
                },
                // series data
                'data': data
            };
        },

        translateParetoDataToD3: function(json, params) {
            return {
                'properties': {
                    'title': json.properties[0].title,
                    'quota': parseInt(json.values[0].goalmarkervalue[0], 10),
                    // bar group data (x-axis)
                    'groupData': (!json.values.filter(function(d) { return d.values.length; }).length) ? [] :
                        json.values.map(function(d, i) {
                        return {
                            'group': i,
                            'l': json.values[i].label,
                            't': json.values[i].values.reduce(function(p, c, i, a) {
                                return parseInt(p, 10) + parseInt(c, 10);
                            })
                        };
                    })
                },
                // series data
                'data': (!json.values.filter(function(d) { return d.values.length; }).length) ? [] :
                    json.label.map(function(d, i) {
                        return {
                            'key': d,
                            'type': 'bar',
                            'series': i,
                            'values': json.values.map(function(e, j) {
                                return { 'series': i, 'x': j + 1, 'y': parseInt(e.values[i], 10), y0: 0};
                            }),
                            'valuesOrig': json.values.map(function(e, j) {
                                return { 'series': i, 'x': j + 1, 'y': parseInt(e.values[i], 10), y0: 0};
                            })
                        };
                    }).concat(
                            json.properties[0].goal_marker_label.filter(function(d, i) {
                                return d !== 'Quota';
                            }).map(function(d, i) {
                                    return {
                                        'key': d,
                                        'type': 'line',
                                        'series': i,
                                        'values': json.values.map(function(e, j) {
                                            return {'series': i, 'x': j + 1, 'y': parseInt(e.goalmarkervalue[i + 1], 10)};
                                        }),
                                        'valuesOrig': json.values.map(function(e, j) {
                                            return {'series': i, 'x': j + 1, 'y': parseInt(e.goalmarkervalue[i + 1], 10)};
                                        })
                                    };
                                })
                        )
            };
        },
        /**
         * Is data returned from the server empty?
         *
         * @param data
         * @return {Boolean}
         */
        isDataEmpty: function(data) {
            if (data !== undefined && data !== 'No Data' && data !== '') {
                return true;
            } else {
                return false;
            }
        },

        /**
         * Resize graph on window resize
         *
         * @param chart
         * @param chartId
         * @param json
         */
        trackWindowResize: function(chart) {
            var timeout,
                delay = 500,
                origWindowWidth = document.documentElement.scrollWidth;

            // refresh graph on window resize
            $(window).resize(function() {
                if (timeout) {
                    clearTimeout(timeout);
                }

                timeout = setTimeout(function() {
                    var newWindowWidth = document.documentElement.scrollWidth;

                    // if window width has changed during resize
                    if (newWindowWidth !== origWindowWidth) {
                        // measure container width
                        chart.update();
                        origWindowWidth = newWindowWidth;
                    }
                }, delay);
            });
        },

        /**
         * Update chart with new data from server
         *
         * @param chart
         * @param url
         * @param params
         * @param callback
         */
        update: function(chart, url, params, callback) {
            var self = this;
            params = params ? params : {};
            self.chart = chart;
            this.get(url, params, function(data) {
                if (self.isDataEmpty(data)) {
                    self.chart.busy = false;
                    self.chart.updateJSON(data);
                    self.callback(callback);
                }
            });
        },

        saveImageFile: function(id, chart, json, jsonfilename, imageExt, saveTo, complete) {
            var self = this;
            var d3ChartId = '#d3_' + id + '_print' || 'd3_c3090c86-2b12-a65e-967f-51b642ac6165_print';
            var canvasChartId = 'canvas_' + id || 'canvas_c3090c86-2b12-a65e-967f-51b642ac6165';
            var svgChartId = 'svg_' + id || 'canvas_c3090c86-2b12-a65e-967f-51b642ac6165';
            var legendShowState = chart.legend.showAll();
            chart.legend
                .showAll(true); //set showAll legend property for images

            var completeCallback = complete || function() {
                chart.legend
                    .showAll(legendShowState); //restore showAll state for web render
                self.renderChart(id, chart, json);
            };

            d3.select(d3ChartId + ' svg').remove();

            d3.select(d3ChartId)
                .append('svg')
                .attr('id', svgChartId)
                .datum(json)
                .call(chart);

            d3.select(d3ChartId).selectAll('.nv-axis line')
              .style('stroke', '#DDD')
              .style('stroke-width', 1)
              .style('stroke-opacity', 1);

            var parts = jsonfilename.split('/'),
                filename = parts[parts.length - 1].replace('.js', '.' + imageExt),
                oCanvas = document.getElementById(canvasChartId),
                d3Container = document.getElementById(svgChartId),
                serializer = new XMLSerializer(),
                saveToUrl = saveTo || 'index.php?action=DynamicAction&DynamicAction=saveImage&module=Charts&to_pdf=1';

            if (!oCanvas) {
                return;
            }

            $.ajax({
                url: 'styleguide/assets/css/nvd3_print.css',
                dataType: 'text',
                success: function(css) {
                    var canvgOptions = {
                            ignoreMouse: true,
                            ignoreAnimation: false,
                            ignoreClear: true,
                            ignoreDimensions: true,
                            scaleWidth: 1440,
                            scaleHeight: 960,
                            renderCallback: function() {
                                var uri = oCanvas.toDataURL((imageExt === 'jpg' ? 'image/jpeg' : 'image/png'));

                                $.post(saveToUrl, {imageStr: uri, filename: filename});

                                var ctx = oCanvas.getContext('2d');
                                ctx.clearRect(0, 0, 1440, 960);

                                completeCallback();
                            }
                        };

                    setTimeout(function() {
                        var svg = serializer.serializeToString(d3Container),
                            svgAttr = ' xmlns:xlink="http://www.w3.org/1999/xlink" width="720" height="480" viewBox="0 0 1440 960">',
                            cssCdata = '<style type="text/css"><![CDATA[' + css.trim() + ']]></style>',
                            d3Chart = svg.replace(/><g class="nvd3/, (svgAttr + cssCdata + '<g class="nvd3'));

                        canvg(canvasChartId, d3Chart, canvgOptions);
                    }, 1000);
                }
            });
        }
    };
})(jQuery);
