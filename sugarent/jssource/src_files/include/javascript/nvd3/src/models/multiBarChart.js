nv.models.multiBarChart = function() {

  //============================================================
  // Public Variables with Default Settings
  //------------------------------------------------------------

  var vertical = true,
      margin = {top: 10, right: 10, bottom: 10, left: 10},
      width = null,
      height = null,
      showTitle = false,
      showControls = false,
      showLegend = true,
      direction = 'ltr',
      tooltip = null,
      tooltips = true,
      scrollEnabled = true,
      overflowHandler = function(d) { return; },
      x,
      y,
      state = {},
      strings = {
        legend: {close: 'Hide legend', open: 'Show legend'},
        controls: {close: 'Hide controls', open: 'Show controls'},
        noData: 'No Data Available.'
      },
      hideEmptyGroups = true,
      dispatch = d3.dispatch('chartClick', 'elementClick', 'tooltipShow', 'tooltipHide', 'tooltipMove', 'stateChange', 'changeState');

  //============================================================
  // Private Variables
  //------------------------------------------------------------

  // Scroll variables
  var useScroll = false,
      scrollOffset = 0;

  var multibar = nv.models.multiBar()
        .stacked(false),
      xAxis = nv.models.axis()
        .tickSize(0)
        .tickPadding(4)
        .highlightZero(false)
        .showMaxMin(false)
        .tickFormat(function(d) { return d; }),
      yAxis = nv.models.axis()
        .tickPadding(4)
        .tickFormat(d3.format('s')),
      legend = nv.models.legend(),
      controls = nv.models.legend()
        .color(['#444']),
      scroll = nv.models.scroll();

  var tooltipContent = function(key, x, y, e, graph) {
    return '<h3>' + key + '</h3>' +
           '<p>' + y + ' on ' + x + '</p>';
  };

  var showTooltip = function(e, offsetElement, groupTotals) {
    var left = e.pos[0],
        top = e.pos[1],
        x = (groupTotals) ?
              (e.point.y * 100 / groupTotals[e.pointIndex].t).toFixed(1) :
              xAxis.tickFormat()(multibar.x()(e.point, e.pointIndex)),
        y = yAxis.tickFormat()(multibar.y()(e.point, e.pointIndex)),
        content = tooltipContent(e.series.key, x, y, e, chart),
        gravity = e.value < 0 ?
          vertical ? 'n' : 'e' :
          vertical ? 's' : 'w';

    tooltip = nv.tooltip.show([left, top], content, gravity, null, offsetElement);
  };

  var seriesClick = function(data, e) {
    return;
  };

  //============================================================

  function chart(selection) {

    selection.each(function(chartData) {

      var that = this,
          className = vertical ? 'multibarChart' : 'multiBarHorizontalChart';

      var properties = chartData ? chartData.properties : {},
          data = chartData ? chartData.data : null,
          groupLabels = [],
          groupTotals = [],
          totalAmount = 0,
          dataBars = [],
          seriesCount = 0,
          groupCount = 0;

      // Chart layout
      var container = d3.select(this),
          availableWidth = (width || parseInt(container.style('width'), 10) || 960) - margin.left - margin.right,
          availableHeight = (height || parseInt(container.style('height'), 10) || 400) - margin.top - margin.bottom,
          innerWidth = innerWidth || availableWidth,
          innerHeight = innerHeight || availableHeight,
          innerMargin = {top: 0, right: 0, bottom: 0, left: 0},
          trans = '';

      // Legend variables
      var maxControlsWidth = 0,
          maxLegendWidth = 0,
          widthRatio = 0;

      // Scroll variables
      var minDimension = 0,
          boundsWidth = 0,
          baseDimension = multibar.stacked() ? vertical ? 60 : 30 : 20,
          gap = 0;

      chart.update = function() {
        container.transition().call(chart);
      };

      chart.dataSeriesActivate = function(e) {
        var series = e.series;

        series.active = (!series.active || series.active === 'inactive') ? 'active' : 'inactive';
        series.values.map(function(d) {
          d.active = series.active;
        });

        // if you have activated a data series, inactivate the rest
        if (series.active === 'active') {
          data.filter(function(d) {
            return d.active !== 'active';
          }).map(function(d) {
            d.active = 'inactive';
            d.values.map(function(d) {
              d.active = 'inactive';
            });
            return d;
          });
        }

        // if there are no active data series, activate them all
        if (!data.filter(function(d) {
          return d.active === 'active';
        }).length) {
          data.map(function(d) {
            d.active = '';
            d.values.map(function(d) {
              d.active = '';
            });
            container.selectAll('.nv-series').classed('nv-inactive', false);
            return d;
          });
        }

        container.call(chart);
      };

      chart.container = this;

      //------------------------------------------------------------
      // Display No Data message if there's nothing to show.

      if (!data || !data.length || !data.filter(function(d) { return d.values.length; }).length) {
        displayNoData();
        return chart;
      }

      //------------------------------------------------------------
      // Process data

      // set title display option
      showTitle = showTitle && properties.title;

      var controlsData = [
        { key: 'Grouped', disabled: state.stacked },
        { key: 'Stacked', disabled: !state.stacked }
      ];

      //make sure untrimmed values array exists
      if (hideEmptyGroups) {
        data.map(function(d) {
          if (!d._values) {
            d._values = d.values;
          }
          return d;
        });
      }

      // add series index to each data point for reference
      // and disable data series if total is zero
      data.map(function(d, i) {
        d.series = i;
        d.total = d3.sum(d.values, function(d) {
          return d.y;
        });
        if (!d.total) {
          d.disabled = true;
        }
      });

      // update groupTotal amounts based on enabled data series
      groupTotals = properties.values
        .map(function(d, i) {
          d.t = d3.sum(
            // only sum enabled series
            data
              .map(function(m, j) {
                if (m.disabled) {
                  return 0;
                }
                return (hideEmptyGroups ? m._values : m.values)
                  .filter(function(v, k) {
                    return multibar.x()(v, k) === d.group;
                  })
                  .map(function(v, k) {
                    return multibar.y()(v, k);
                  });
              })
          );
          return d;
        });

      totalAmount = d3.sum(groupTotals, function(d) { return d.t; });

      // build a trimmed array for active group only labels
      groupLabels = properties.labels
        .filter(function(d, i) {
          return hideEmptyGroups ? groupTotals[i].t !== 0 : true;
        })
        .map(function(d) {
          return d.l;
        });

      dataBars = data
        .filter(function(d, i) {
          return !d.disabled && (!d.type || d.type === 'bar');
        });

      if (hideEmptyGroups) {
        // build a discrete array of data values for the multibar
        // based on enabled data series
        dataBars
          .map(function(d, i) {
            //reset series values to exlcude values for
            //groups that have a sum of zero
            d.values = d._values
              .filter(function(d, i) {
                return groupTotals[i].t !== 0;
              })
              .map(function(m, j) {
                return {
                  "series": d.series,
                  "x": (j + 1),
                  "y": m.y,
                  "y0": m.y0,
                  "active": typeof d.active !== 'undefined' ? d.active : ''
                };
              });
            return d;
          });
      }

      //------------------------------------------------------------
      // Display No Data message if there's nothing to show.

      if (!totalAmount) {
        displayNoData();
        return chart;
      } else {
        container.selectAll('.nv-noData').remove();
      }

      // safety array
      if (!dataBars.length) {
        dataBars = [{values: []}];
      }

      // set state.disabled
      state.disabled = data.map(function(d) { return !!d.disabled; });
      state.stacked = multibar.stacked();

      groupCount = groupLabels.length;
      seriesCount = dataBars.length;

      // for stacked, baseDimension is width of bar plus 1/4 of bar for gap
      // for grouped, baseDimension is width of bar plus width of one bar for gap
      boundsWidth = state.stacked ? baseDimension : baseDimension * seriesCount + baseDimension,
      gap = baseDimension * (state.stacked ? 0.25 : 1);
      minDimension = groupCount * boundsWidth + gap;
      useScroll = (minDimension > (vertical ? innerWidth : innerHeight));

      //------------------------------------------------------------
      // Setup Scales and Axes

      x = multibar.xScale();
      y = multibar.yScale();

      xAxis
        .orient(vertical ? 'bottom' : 'left')
        .scale(x)
        .tickFormat(function(d, i) {
          // Set xAxis to use trimmed array rather than data
          return groupLabels[i] || 'undefined';
        });

      yAxis
        .orient(vertical ? 'left' : 'bottom')
        .scale(y);

      //------------------------------------------------------------
      // Setup containers and skeleton of chart

      var wrap = container.selectAll('.nvd3.nv-wrap').data([data]),
          gEnter = wrap.enter().append('g').attr('class', 'nvd3 nv-wrap').append('g'),
          g = wrap.select('g').attr('class', 'nv-chartWrap');
      wrap
        .attr('class', 'nvd3 nv-wrap nv-' + className);

      /* Clipping box for scroll */
      gEnter.append('defs');

      /* Container for scroll elements */
      gEnter.append('g').attr('class', 'nv-scroll-background');

      gEnter.append('g').attr('class', 'nv-titleWrap');
      var titleWrap = g.select('.nv-titleWrap');

      gEnter.append('g').attr('class', 'nv-y nv-axis');
      var yAxisWrap = g.select('.nv-y.nv-axis');

      /* Append scroll group with chart mask */
      gEnter.append('g').attr('class', 'nv-scroll-wrap');
      var scrollWrap = g.select('.nv-scroll-wrap');

      gEnter.select('.nv-scroll-wrap').append('g')
        .attr('class', 'nv-x nv-axis');
      var xAxisWrap = g.select('.nv-x.nv-axis');

      gEnter.select('.nv-scroll-wrap').append('g')
        .attr('class', 'nv-barsWrap');
      var barsWrap = g.select('.nv-barsWrap');

      gEnter.append('g').attr('class', 'nv-controlsWrap');
      var controlsWrap = g.select('.nv-controlsWrap');
      gEnter.append('g').attr('class', 'nv-legendWrap');
      var legendWrap = g.select('.nv-legendWrap');

      wrap.attr('transform', 'translate(' + margin.left + ',' + margin.top + ')');

      //------------------------------------------------------------
      // Title & Legend & Controls

      if (showTitle) {
        titleWrap.select('.nv-title').remove();

        titleWrap
          .append('text')
            .attr('class', 'nv-title')
            .attr('x', direction === 'rtl' ? availableWidth : 0)
            .attr('y', 0)
            .attr('dy', '.75em')
            .attr('text-anchor', 'start')
            .text(properties.title)
            .attr('stroke', 'none')
            .attr('fill', 'black');

        innerMargin.top += parseInt(g.select('.nv-title').node().getBoundingClientRect().height / 1.15, 10) +
          parseInt(g.select('.nv-title').style('margin-top'), 10) +
          parseInt(g.select('.nv-title').style('margin-bottom'), 10);
      }

      if (showControls) {
        controls
          .id('controls_' + chart.id())
          .strings(chart.strings().controls)
          .margin({top: 10, right: 10, bottom: 10, left: 10})
          .align('left')
          .height(availableHeight - innerMargin.top);
        controlsWrap
          .datum(controlsData)
          .call(controls);

        maxControlsWidth = controls.calculateWidth();
      }

      if (showLegend) {
        if (multibar.barColor()) {
          data.forEach(function(series, i) {
            series.color = d3.rgb('#ccc').darker(i * 1.5).toString();
          });
        }

        legend
          .id('legend_' + chart.id())
          .strings(chart.strings().legend)
          .margin({top: 10, right: 10, bottom: 10, left: 10})
          .align('right')
          .height(availableHeight - innerMargin.top);
        legendWrap
          .datum(data)
          .call(legend);

        maxLegendWidth = legend.calculateWidth();
      }

      // calculate proportional available space
      widthRatio = availableWidth / (maxControlsWidth + maxLegendWidth);
      maxControlsWidth = Math.floor(maxControlsWidth * widthRatio);
      maxLegendWidth = Math.floor(maxLegendWidth * widthRatio);

      if (showControls) {
        controls
          .arrange(maxControlsWidth);
        maxLegendWidth = availableWidth - controls.width();
      }
      if (showLegend) {
        legend
          .arrange(maxLegendWidth);
        maxControlsWidth = availableWidth - legend.width();
      }

      if (showControls) {
        controlsWrap
          .attr('transform', 'translate(' + (direction === 'rtl' ? availableWidth - controls.width() : 0) + ',' + innerMargin.top + ')');
      }

      if (showLegend) {
        legendWrap
          .attr('transform', 'translate(' + (direction === 'rtl' ? 0 : availableWidth - legend.width()) + ',' + innerMargin.top + ')');
      }

      // Recalc inner margins based on legend and control height
      innerMargin.top += Math.max(legend.height(), controls.height()) + 4;
      innerHeight = availableHeight - innerMargin.top - innerMargin.bottom;

      //------------------------------------------------------------
      // Main Chart Component(s)

      function getDimension(d) {
        if (d === 'width') {
          return vertical && scrollEnabled ? Math.max(innerWidth, minDimension) : innerWidth;
        } else if (d === 'height') {
          return !vertical && scrollEnabled ? Math.max(innerHeight, minDimension) : innerHeight;
        } else {
          return 0;
        }
      }

      function displayNoData() {
        container.select('.nvd3.nv-wrap').remove();
        var noDataText = container.selectAll('.nv-noData').data([chart.strings().noData]);

        noDataText.enter().append('text')
          .attr('class', 'nvd3 nv-noData')
          .attr('dy', '-.7em')
          .style('text-anchor', 'middle');

        noDataText
          .attr('x', margin.left + availableWidth / 2)
          .attr('y', margin.top + availableHeight / 2)
          .text(function(d) {
            return d;
          });
      }

      multibar
        .vertical(vertical)
        .baseDimension(baseDimension)
        .disabled(data.map(function(series) { return series.disabled; }))
        .width(getDimension('width'))
        .height(getDimension('height'))
        .clipEdge(false);
      barsWrap
        .data([dataBars])
        .call(multibar);

      //------------------------------------------------------------
      // Setup Axes

      // Y-Axis
      yAxisWrap
        .call(yAxis);

      innerMargin[yAxis.orient()] += vertical ? yAxis.width() : yAxis.height();
      innerWidth = availableWidth - innerMargin.left - innerMargin.right;
      innerHeight = availableHeight - innerMargin.top - innerMargin.bottom;

      // Recalc chart dimensions and scales based on new inner dimensions
      multibar.resetDimensions(getDimension('width'), getDimension('height'));
      multibar.resetScale();

      // X-Axis
      xAxisWrap
        .call(xAxis);

      innerMargin[xAxis.orient()] += vertical ? xAxis.height() : xAxis.width();
      innerWidth = availableWidth - innerMargin.left - innerMargin.right;
      innerHeight = availableHeight - innerMargin.top - innerMargin.bottom;

      multibar.resetDimensions(getDimension('width'), getDimension('height'));
      multibar.resetScale();

      //------------------------------------------------------------
      // Main Chart Components
      // Recall to set final size

      scrollWrap
        .attr('transform', 'translate(' + innerMargin.left + ',' + innerMargin.top + ')');

      barsWrap
        .transition()
          .call(multibar);

      trans = 'translate(';
      trans += vertical ? 0 : (xAxis.orient() === 'left' ? 0 : innerWidth);
      trans += ',';
      trans += vertical ? (xAxis.orient() === 'bottom' ? innerHeight : 0) : 0;
      trans += ')';

      xAxisWrap
        .attr('transform', trans)
        .transition()
          .call(xAxis);

      xAxisWrap.select('.nv-axislabel')
        .attr('x', (vertical ? innerWidth : -innerHeight) / 2);

      trans = 'translate(';
      trans += innerMargin.left + (vertical ? (yAxis.orient() === 'left' ? 0 : innerWidth) : 0);
      trans += ',';
      trans += innerMargin.top + (vertical ? 0 : (yAxis.orient() === 'bottom' ? innerHeight : 0));
      trans += ')';

      yAxis
        //.ticks(innerHeight / 36)
        .tickSize((vertical ? -innerWidth : -innerHeight), 0);

      yAxisWrap
        .attr('transform', trans)
        .transition()
          .call(yAxis);


      //------------------------------------------------------------
      // Enable scrolling
      if (scrollEnabled) {
        var diff = (vertical ? innerWidth : innerHeight) - minDimension,
            panMultibar = function() {
              dispatch.tooltipHide(d3.event);
              scrollOffset = scroll.pan(diff);
              xAxisWrap.select('.nv-axislabel')
                .attr('x', (vertical ? innerWidth - scrollOffset * 2 : scrollOffset * 2 - innerHeight) / 2);
            };

        scroll
          .id(chart.id())
          .enable(useScroll)
          .vertical(vertical)
          .width(innerWidth)
          .height(innerHeight)
          .margin(innerMargin)
          .minDimension(minDimension)
          .panHandler(panMultibar);

        scroll(g, gEnter, scrollWrap, xAxis);

        scroll.init(scrollOffset, overflowHandler);

        // initial call to zoom in case of scrolled bars on window resize
        scroll.panHandler()();
      }

      //============================================================
      // Event Handling/Dispatching (in chart's scope)
      //------------------------------------------------------------

      legend.dispatch.on('legendClick', function(d, i) {
        d.disabled = !d.disabled;

        if (hideEmptyGroups) {
          data.map(function(m, j) {
            m._values.map(function(v, k) {
              v.disabled = (k === i ? d.disabled : v.disabled ? true : false);
              return v;
            });
            return m;
          });
        }

        if (!data.filter(function(d) { return !d.disabled; }).length) {
          data.map(function(d) {
            d.disabled = false;
            g.selectAll('.nv-series').classed('disabled', false);
            return d;
          });
        }

        state.disabled = data.map(function(d) { return !!d.disabled; });
        dispatch.stateChange(state);

        container.transition().call(chart);
      });

      controls.dispatch.on('legendClick', function(d, i) {

        //if the option is currently enabled (i.e., selected)
        if (!d.disabled) {
          return;
        }

        //set the controls all to false
        controlsData = controlsData.map(function(s) {
          s.disabled = true;
          return s;
        });
        //activate the the selected control option
        d.disabled = false;

        switch (d.key) {
          case 'Grouped':
            multibar.stacked(false);
            break;
          case 'Stacked':
            multibar.stacked(true);
            break;
        }

        state.stacked = multibar.stacked();
        dispatch.stateChange(state);

        container.transition().call(chart);
      });

      dispatch.on('tooltipShow', function(e) {
        if (tooltips) {
          showTooltip(e, that.parentNode, groupTotals);
        }
      });

      dispatch.on('tooltipHide', function() {
        if (tooltips) {
          nv.tooltip.cleanup();
        }
      });

      dispatch.on('tooltipMove', function(e) {
        if (tooltip) {
          nv.tooltip.position(tooltip, e.pos, vertical ? 's' : 'w');
        }
      });

      // Update chart from a state object passed to event handler
      dispatch.on('changeState', function(e) {
        if (typeof e.disabled !== 'undefined') {
          data.forEach(function(series, i) {
            series.disabled = e.disabled[i];
          });
          state.disabled = e.disabled;
        }

        if (typeof e.stacked !== 'undefined') {
          multibar.stacked(e.stacked);
          state.stacked = e.stacked;
        }

        container.transition().call(chart);
      });

      dispatch.on('chartClick', function(e) {
        if (controls.enabled()) {
          controls.dispatch.closeMenu(e);
        }
        if (legend.enabled()) {
          legend.dispatch.closeMenu(e);
        }
      });

      multibar.dispatch.on('elementClick', function(e) {
        seriesClick(data, e);
      });

    });

    return chart;
  }

  //============================================================
  // Event Handling/Dispatching (out of chart's scope)
  //------------------------------------------------------------

  multibar.dispatch.on('elementMouseover.tooltip', function(e) {
    dispatch.tooltipShow(e);
  });

  multibar.dispatch.on('elementMouseout.tooltip', function(e) {
    dispatch.tooltipHide(e);
  });

  multibar.dispatch.on('elementMousemove.tooltip', function(e) {
    dispatch.tooltipMove(e);
  });

  //============================================================
  // Expose Public Variables
  //------------------------------------------------------------

  // expose chart's sub-components
  chart.dispatch = dispatch;
  chart.multibar = multibar;
  chart.legend = legend;
  chart.controls = controls;
  chart.xAxis = xAxis;
  chart.yAxis = yAxis;

  d3.rebind(chart, multibar, 'id', 'x', 'y', 'xScale', 'yScale', 'xDomain', 'yDomain', 'forceX', 'forceY', 'clipEdge', 'delay', 'color', 'fill', 'classes', 'gradient');
  d3.rebind(chart, multibar, 'stacked', 'showValues', 'valueFormat');
  d3.rebind(chart, xAxis, 'rotateTicks', 'reduceXTicks', 'staggerTicks', 'wrapTicks');

  chart.colorData = function(_) {
    var type = arguments[0],
        params = arguments[1] || {};
    var color = function(d, i) {
          return nv.utils.defaultColor()(d, d.series);
        };
    var classes = function(d, i) {
          return 'nv-group nv-series-' + d.series;
        };

    switch (type) {
      case 'graduated':
        color = function(d, i) {
          return d3.interpolateHsl(d3.rgb(params.c1), d3.rgb(params.c2))(d.series / params.l);
        };
        break;
      case 'class':
        color = function() {
          return 'inherit';
        };
        classes = function(d, i) {
          var iClass = (d.series * (params.step || 1)) % 14;
          iClass = (iClass > 9 ? '' : '0') + iClass;
          return 'nv-group nv-series-' + d.series + ' nv-fill' + iClass;
        };
        break;
      case 'data':
        color = function(d, i) {
          return d.classes ? 'inherit' : d.color || nv.utils.defaultColor()(d, d.series);
        };
        classes = function(d, i) {
          return 'nv-group nv-series-' + d.series + (d.classes ? ' ' + d.classes : '');
        };
        break;
    }

    var fill = (!params.gradient) ? color : function(d, i) {
      var p = {orientation: params.orientation || (vertical ? 'vertical' : 'horizontal'), position: params.position || 'middle'};
      return multibar.gradient(d, d.series, p);
    };

    multibar.color(color);
    multibar.fill(fill);
    multibar.classes(classes);

    legend.color(color);
    legend.classes(classes);

    return chart;
  };

  chart.margin = function(_) {
    if (!arguments.length) {
      return margin;
    }
    for (var prop in _) {
      if (_.hasOwnProperty(prop)) {
        margin[prop] = _[prop];
      }
    }
    return chart;
  };

  chart.vertical = function(_) {
    if (!arguments.length) {
      return vertical;
    }
    vertical = _;
    return chart;
  };

  chart.width = function(_) {
    if (!arguments.length) {
      return width;
    }
    width = _;
    return chart;
  };

  chart.height = function(_) {
    if (!arguments.length) {
      return height;
    }
    height = _;
    return chart;
  };

  chart.showTitle = function(_) {
    if (!arguments.length) {
      return showTitle;
    }
    showTitle = _;
    return chart;
  };

  chart.showControls = function(_) {
    if (!arguments.length) {
      return showControls;
    }
    showControls = _;
    return chart;
  };

  chart.showLegend = function(_) {
    if (!arguments.length) {
      return showLegend;
    }
    showLegend = _;
    return chart;
  };

  chart.tooltip = function(_) {
    if (!arguments.length) {
      return tooltip;
    }
    tooltip = _;
    return chart;
  };

  chart.tooltips = function(_) {
    if (!arguments.length) {
      return tooltips;
    }
    tooltips = _;
    return chart;
  };

  chart.tooltipContent = function(_) {
    if (!arguments.length) {
      return tooltipContent;
    }
    tooltipContent = _;
    return chart;
  };

  chart.state = function(_) {
    if (!arguments.length) {
      return state;
    }
    state = _;
    return chart;
  };

  chart.strings = function(_) {
    if (!arguments.length) {
      return strings;
    }
    for (var prop in _) {
      if (_.hasOwnProperty(prop)) {
        strings[prop] = _[prop];
      }
    }
    return chart;
  };

  chart.allowScroll = function(_) {
    if (!arguments.length) {
      return scrollEnabled;
    }
    scrollEnabled = _;
    return chart;
  };

  chart.overflowHandler = function(_) {
    if (!arguments.length) {
      return overflowHandler;
    }
    overflowHandler = d3.functor(_);
    return chart;
  };

  chart.seriesClick = function(_) {
    if (!arguments.length) {
      return seriesClick;
    }
    seriesClick = _;
    return chart;
  };

  chart.hideEmptyGroups = function(_) {
    if (!arguments.length) {
      return hideEmptyGroups;
    }
    hideEmptyGroups = _;
    return chart;
  };

  chart.direction = function(_) {
    if (!arguments.length) {
      return direction;
    }
    direction = _;
    multibar.direction(_);
    xAxis.direction(_);
    yAxis.direction(_);
    legend.direction(_);
    controls.direction(_);
    return chart;
  };


  //============================================================

  return chart;
};
