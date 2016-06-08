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
({
    extendsFrom: 'DnbView',
    plugins: ['Chart', 'Dashlet'],

    meterConst: {
        'responseCode' : 'GetMeterResponse.TransactionResult.ResultID',
        'responseMsg' : 'GetMeterResponse.TransactionResult.ResultText',
        'meterInfoPath' : 'GetMeterResponse.GetMeterResponseDetail.GetMeterResult'
    },

    meterDD: {
        'productCode': {
            'json_path': 'DNBProductID',
            'productMapping': {
                'DCP_PREM': 'LBL_DNB_METER_ACCT',
                'DCP_STD': 'LBL_DNB_METER_ACCT',
                'DCP_BAS': 'LBL_DNB_METER_ACCT',
                'LNK_FF': 'LBL_DNB_METER_FF',
                'CNTCT_PLUS': 'LBL_DNB_METER_PREM_CNTCT',
                'CNTCT': 'LBL_DNB_METER_STD_CNTCT'
            }
        },
        'maxLimit': {
            'json_path': 'MeterDetail.UsageLimit',
            'label': 'LBL_DNB_METER_REMAINING'
        },
        'usage': {
            'json_path': 'MeterDetail.UsageCount',
            'label': 'LBL_DNB_METER_USED'
        },
        'contractStart': {
            'json_path': 'MeterDetail.StartTimestamp',
            'label': 'LBL_DNB_CONT_START'
        },
        'contractEnd': {
            'json_path': 'MeterDetail.EndTimestamp',
            'label': 'LBL_DNB_CONT_END'
        }
    },

    initialize: function(options) {
        this._super('initialize', [options]);
        this.dnbChartIds = _.keys(this.meterDD.productCode.productMapping);
        this.chart = this.createChart();
    },

    /**
     * Return pie chart model
     */
    createChart: function () {
        return nv.models.pieChart()
            .x(function(d) { return d.key })
            .margin({top: 5, right: 5, bottom: 5, left: 5})
            .startAngle(function(d) { return (d.startAngle - Math.PI) / 2 })
            .endAngle(function(d) { return (d.endAngle - Math.PI) / 2 })
            .showLabels(false)
            .donut(true)
            .donutRatio(0.70)
            .donutLabelsOutside(true)
            .showTitle(false)
            .tooltips(true)
            .showLegend(false)
            .direction(app.lang.direction)
            .tooltipContent(function(key, x, y, e, graph) {
                return '<p><b>' + key + ': ' + y.replace('.00','') + '</b></p>';
            });
    },

    /**
     * Refresh dashlet once Refresh link clicked from geat button
     * To show updated data from D&B Competitors service
     */
    refreshClicked: function() {
        this.chartCollection = null;
        this.contractInfo = null;
        this.loadData();
    },

    /**
     * Generic method to render chart with check for visibility and data.
     * Called by _renderHtml and loadData.
     */
    renderChart: function() {
        if (!this.isChartReady()) {
            return;
        }
        //remove unwanted chart ids
        _.each(_.difference(this.dnbChartIds, _.keys(this.chartCollection)), function(chartId) {
            this.$('div#dnb' + chartId).remove();
        }, this);
        //render chart
        _.each(this.chartCollection, function(chartDetails, chartId) {
            this.$('div#dnb' + chartId).removeClass('hide');
            var chartSelector = 'svg#' + chartId;
            var dnbChart = this.createChart();
            dnbChart.hole(chartDetails.chartData.data[0].value);
            dnbChart.holeFormat(function(wrap, data) {
                var wrapEnter = wrap.selectAll('text').data([null]).enter().append('g')
                    .attr('transform', 'translate(0,-1)');
                wrapEnter.append('text')
                    .text(chartDetails.chartData.data[0].value)
                    .attr('dy', '-.2em')
                    .attr('class', 'nv-pie-hole-value');
                wrapEnter.append('text')
                    .text(chartDetails.chartLabel)
                    .attr('text-anchor', 'middle')
                    .attr('class', 'nv-pie-hole-label')
                    .attr('dy', '.8em')
                    .style('fill', '#333')
                    .style('font-size', '11px');
            });
            d3.select(this.el).select(chartSelector)
                .datum(chartDetails.chartData)
                .transition().duration(500)
                .call(dnbChart);
        }, this);
    },

    /**
     * @inheritdoc
     */
    loadData: function(options) {
        var self = this;
        if (this.meta.config) {
            return;
        }
        if (!this.disposed) {
            this.render();
        }
        var dnbMeterURL = app.api.buildURL('connector/dnb/meter/', '', {},{}),
            resultData = {'product': null, 'errmsg' : null};
        app.api.call('read', dnbMeterURL, null, {
            success: function(data) {
                var responseCode = self.getJsonNode(data, self.meterConst.responseCode),
                    responseMsg = self.getJsonNode(data, self.meterConst.responseMsg);
                if (responseCode && responseCode === self.responseCodes.success) {
                    resultData.product = data;
                } else {
                    resultData.errmsg = responseMsg || app.lang.get('LBL_DNB_SVC_ERR');
                }
                self.renderMeterInfo.call(self, resultData);
            },
            error: _.bind(self.checkAndProcessError, self)
        });
    },

    /**
     * Render D&B Meter response to charts
     * @param {Object} dnbMeterResponse
     */
    renderMeterInfo: function(dnbMeterResponse) {
        if (dnbMeterResponse.product) {
            var meterDetail = this.getJsonNode(dnbMeterResponse.product, this.meterConst.meterInfoPath);
            this.chartCollection = this.formatMeterInfo(meterDetail, this.meterDD);

            if (!this.disposed) {
                this.render();
            }
        } else if(dnbMeterResponse.errmsg) {
            this.renderError(dnbMeterResponse.errmsg);
        }
    },

    /**
     * Format the D&B Meter Response
     * @param {Object} dnbMeterResponse
     * @param {Object} dnbMeterDD data dictionary
     * @return {Object}
     */
    formatMeterInfo: function(dnbMeterResponse, dnbMeterDD) {
        var formattedMeterResponse = {};
        _.each(dnbMeterResponse, function(meterDetailObj){
            var productCode = this.getJsonNode(meterDetailObj, dnbMeterDD.productCode.json_path);
            if (!_.isUndefined(productCode)) {
                var meterDetails = {};
                meterDetails.data = [];
                var meterUsage = parseInt(this.getJsonNode(meterDetailObj, dnbMeterDD.usage.json_path), 10),
                    meterLimit = parseInt(this.getJsonNode(meterDetailObj, dnbMeterDD.maxLimit.json_path), 10);
                meterDetails.data.push({
                    'key':   app.lang.get(dnbMeterDD.usage.label),
                    'value': meterUsage,
                    'color': this.usageToColorMapping(meterUsage, meterLimit)
                });
                meterDetails.data.push({
                    'key':   app.lang.get(dnbMeterDD.maxLimit.label),
                    'value': meterLimit - meterUsage,
                    'color': 'grey'
                });
                formattedMeterResponse[productCode] = {
                    'chartData':  meterDetails,
                    'chartLabel': app.lang.get(dnbMeterDD.productCode.productMapping[productCode])
                };
            }
            //get contract start and end dates
            if (_.isUndefined(this.contractInfo) || _.isNull(this.contractInfo)) {
                var contractEndDate = this.getJsonNode(meterDetailObj, dnbMeterDD.contractEnd.json_path);
                if(!_.isUndefined(contractEndDate)) {
                    contractEndDate = app.date(contractEndDate.substr(0,10)).format(app.date.convertFormat(app.user.getPreference('datepref')));
                    this.contractInfo = {
                        'cntLabel': app.lang.get(dnbMeterDD.contractEnd.label),
                        'cntInfo': contractEndDate
                    };
                }
            }
        }, this);
        return formattedMeterResponse;
    },

    /**
     * Returns color for the donut chart based on meterUsage percentage
     * @param {Number} meterUsage
     * @param {Number} meterLimit
     * @return {string}
     */
    usageToColorMapping: function(meterUsage, meterLimit) {
        var meterUsagePercentage = meterUsage / meterLimit;
        if (meterUsagePercentage < 0.5) {
            return 'green'
        } else if (meterUsagePercentage > 0.5 && meterUsagePercentage < 0.75) {
            return 'orange'
        } else {
            return 'red';
        }
    },

    /**
     * function for determining if chart has data.
     * Can be overridden in views by defining hasChartData method.
     */
    hasChartData: function() {
        return !(_.isUndefined(this.chartCollection) || _.isNull(this.chartCollection));
    },

    /**
     * Renders an error from the D&B API
     * @param {String} msg The error message from the api
     */
    renderError: function(msg) {
        this.dnbError = {errMsg:  msg};
        this.template = app.template.get('dnb.dnb-error');
        this.renderErrorMessage();
    }
})
