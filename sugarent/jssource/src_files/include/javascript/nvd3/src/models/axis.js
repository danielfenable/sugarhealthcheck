nv.models.axis = function() {

  //============================================================
  // Public Variables with Default Settings
  //------------------------------------------------------------

  var axis = d3.svg.axisStatic();

  var margin = {top: 0, right: 0, bottom: 0, left: 0},
      thickness = 0,
      scale = d3.scale.linear(),
      axisLabelText = null,
      showMaxMin = true, //TODO: showMaxMin should be disabled on all ordinal scaled axes
      highlightZero = true,
      direction = 'ltr',
      wrapTicks = false,
      staggerTicks = false,
      rotateTicks = 0, //one of (rotateTicks, staggerTicks, wrapTicks)
      reduceXTicks = false, // if false a tick will show for every data point
      rotateYLabel = true,
      isOrdinal = false,
      textAnchor = null,
      ticks = null,
      axisLabelDistance = 8; //The larger this number is, the closer the axis label is to the axis.

  axis
    .scale(scale)
    .orient('bottom')
    .tickFormat(function(d) { return d; });

  //============================================================


  //============================================================
  // Private Variables
  //------------------------------------------------------------

  var scale0;

  //============================================================

  function chart(selection) {
    selection.each(function(data) {
      var container = d3.select(this);

      //------------------------------------------------------------
      // Setup containers and skeleton of chart
      var wrap = container.selectAll('g.nv-wrap.nv-axis').data([data]),
          gEnter = wrap.enter()
            .append('g').attr('class', 'nvd3 nv-wrap nv-axis')
            .append('g').attr('class', 'nv-axis-inner'),
          g = wrap.select('.nv-axis-inner');

      //------------------------------------------------------------

      var orientation = axis.orient() === 'left' || axis.orient() === 'right' ? 'vertical' : 'horizontal',
          labelThickness = null,
          textAnchorString = '';

      var fmt = axis.tickFormat(),
          w = typeof scale.rangeExtent === 'function' ?
                scale.rangeExtent()[1] :
                //scale.range()[scale.range().length - 1] + (scale.range()[1] - scale.range()[0])
                Math.abs(scale.range()[0] - scale.range()[1]),
          label = {y: 0, dy: 0, x: 0, a: 'middle', t: ''},
          maxmin = {};

      if (ticks !== null) {
        axis.ticks(ticks);
      } else if (axis.orient() === 'top' || axis.orient() === 'bottom') {
        axis.ticks(Math.ceil(Math.abs(scale.range()[1] - scale.range()[0]) / 100));
      }

      // test to see if rotateTicks was passed as a boolean
      if (rotateTicks && !isFinite(String(rotateTicks))) {
        rotateTicks = 30;
      }

      //TODO: investigate why the ticks are not being removed on data.exit()
      var myTicks = g.selectAll('.tick')
            .data(data, function(d) { return d; });
      myTicks.exit().remove();

      g.call(axis);

      scale0 = scale0 || axis.scale();

      if (fmt === null) {
        fmt = scale0.tickFormat();
      }

      //------------------------------------------------------------
      //Calculate the longest tick width and height
      thickness = defaultThickness();

      var tickText = g.selectAll('g.tick').select('text');

      var tickValueArray = tickText[0].map(function(d, i, j) {
        return d3.select(d).text();
      });

      var maxTickWidth = 0,
          maxTickHeight = 0;

      calculateMax();

      function calculateMax() {
        var maxW = 0,
            maxH = 0;
        tickText.each(function(d, i) {
          var bbox = this.getBoundingClientRect(),
              w = parseInt(bbox.width, 10),
              h = parseInt(bbox.height / 1.15, 10);
          if (w > maxW) {
            maxW = w;
          }
          if (h > maxH) {
            maxH = h;
          }
        });
        maxTickWidth = maxW;
        maxTickHeight = maxH;
      }

      function labelCollision(s) {
        if (axis.scale().rangeBand) {
          return axis.scale().rangeBand() * s < maxTickWidth;
        } else {
          return false;
        }
      }

      function tickRotation(a) {
        //Convert to radians before calculating sin. Add 30 to margin for healthy padding.
        var tickAnchor = direction === 'rtl' ? a % 360 > 0 ? 'end' : 'start' : a % 360 > 0 ? 'start' : 'end',
            sin = Math.abs(Math.sin(a * Math.PI / 180));
        thickness = defaultThickness() + 2;
        thickness += sin ? sin * maxTickWidth : maxTickWidth;
        thickness += sin ? sin * maxTickHeight : 0;

        //Rotate all tickText
        tickText
          .attr('transform', function(d, i, j) {
            return 'translate(0,' + axis.tickPadding() + ') rotate(' + a + ')';
          })
          .attr('y', '0')
          .style('text-anchor', tickAnchor);
      }

      function resetTicks() {
        tickText.selectAll('tspan').remove();
        tickText
          .attr('dy', '.71em')
          .attr('y', axis.tickPadding())
          .attr('transform', 'translate(0,0)')
          .text(function(d, i) { return tickValueArray[i]; });
        calculateMax();
      }

      function defaultThickness() {
        return axis.tickPadding() + (!!axisLabelText ? axisLabelDistance : 0);
      }

      //------------------------------------------------------------
      // Orientation parameters

      switch (axis.orient()) {
        case 'top':

          if (axisLabelText) {
            label.y = -thickness;
            label.dy = '-.71em';
            label.x = w / 2;
          }

          if (showMaxMin) {
            maxmin = {
              data: scale.domain(),
              translate: function(d, i) { return 'translate(' + scale(d) + ',0)'; },
              dy: '0em',
              x: 0,
              y: -axis.tickPadding(),
              transform: '',
              anchor: rotateTicks ? (rotateTicks % 360 > 0 ? 'start' : 'end') : 'middle'
            };
          }

          break;

        case 'bottom':


          var wrapSucceeded = false,
              staggerSucceeded = false,
              rotateSucceeded = false;

          // if wrap is enabled, try it first
          if (wrapTicks && labelCollision(1.25)) {
            tickText.each(function(d) {

              var textContent = this.textContent,
                  textNode = d3.select(this),
                  textArray = textContent.replace('/', '/ ').split(' '),
                  i = 0,
                  l = textArray.length,
                  dy = 0.71,
                  maxWidth = axis.scale().rangeBand();

              // do wrapping if needed
              if (this.getBoundingClientRect().width > maxWidth) {
                this.textContent = '';

                do {
                  var textString,
                    textSpan = textNode.append('tspan')
                      .text(textArray[i] + ' ')
                      .attr('dy', dy + 'em')
                      .attr('x', 0 + 'px');

                  if (i === 0) {
                    dy = 1;
                  }

                  i += 1;

                  while (i < l) {
                    textString = textSpan.text();
                    textSpan.text(textString + ' ' + textArray[i]);
                    if (this.getBoundingClientRect().width <= maxWidth) {
                      i += 1;
                    } else {
                      textSpan.text(textString);
                      break;
                    }
                  }
                } while (i < l);
              }

            });

            // this resets the maxTickWidth for label collision detction
            calculateMax();

            // check to see if we still have collisions
            if (labelCollision(1.25)) {
              resetTicks();
            } else {
              wrapSucceeded = true;
              thickness = 1;
            }
          }

          // wrapping failed so fall back to stagger if enabled
          if (!wrapSucceeded && staggerTicks && labelCollision(1.25)) {
            tickText
              .text(function(d, i) { return tickValueArray[i]; });

            // this sets the maxTickWidth for label collision detction
            calculateMax();

            tickText
              .attr('transform', function(d, i) { return 'translate(0,' + (i % 2 * (maxTickHeight + 2)) + ')'; });

            // check to see if we still have collisions
            if (labelCollision(2.5)) {
              resetTicks();
            } else {
              staggerSucceeded = true;
              thickness = maxTickHeight + 2;
            }
          }

          // if we still have a collision
          if (!wrapSucceeded && !staggerSucceeded && rotateTicks % 360 && labelCollision(1.25)) {
            tickRotation(rotateTicks);
            rotateSucceeded = true;
          } else {
            textAnchorString = 'middle';
            thickness += defaultThickness() + maxTickHeight;
          }

          if (axisLabelText) {
            label.y = thickness;
            label.dy = '.71em';
            label.x = w / 2;
          }

          if (reduceXTicks) {
            g.selectAll('.tick')
                .each(function(d, i) {
                  d3.select(this).selectAll('text,line')
                    .style('opacity', i % Math.ceil(data[0].values.length / (w / 100)) !== 0 ? 0 : 1);
                });
          }

          if (showMaxMin) {
            maxmin = {
              data: [scale.domain()[0], scale.domain()[scale.domain().length - 1]],
              translate: function(d, i) {
                return 'translate(' + (scale(d) + (isOrdinal ? scale.rangeBand() / 2 : (d > 0 ? -8 : +4))) + ',0)';
              },
              dy: '.71em',
              x: 0,
              y: axis.tickPadding(),
              rotate: function(d) { return 'rotate(' + rotateTicks + ' 0,0)'; },
              anchor: rotateTicks ? (rotateTicks % 360 > 0 ? 'start' : 'end') : 'middle'
            };
          }

          break;

        case 'right':

          thickness += maxTickWidth;

          if (axisLabelText) {
            label = {
              y: rotateYLabel ? -(thickness + 2) : -10,
              dy: 0,
              x: rotateYLabel ? w / 2 : axis.tickPadding(),
              a: rotateYLabel ? 'middle' : 'begin',
              t: rotateYLabel ? 'rotate(90)' : ''
            };
          }

          if (showMaxMin) {
            maxmin = {
              data: scale.domain(),
              translate: function(d, i) { return 'translate(0,' + scale(d) + ')'; },
              dy: '.32em',
              x: axis.tickPadding(),
              y: 0,
              rotate: '',
              anchor: direction === 'rtl' ? 'end' : 'start'
            };
          }

          if (textAnchor) {
            if (direction === 'rtl') {
              if (textAnchor === 'start') {
                textAnchorString = 'end';
              } else if (textAnchor === 'end') {
                textAnchorString = 'start';
              } else {
                textAnchorString = textAnchor;
              }
            } else {
              textAnchorString = textAnchor;
            }
          } else {
            textAnchorString = direction === 'rtl' ? 'end' : 'start';
          }

          break;

        case 'left':

          thickness += maxTickWidth + 2;

          if (axisLabelText) {
            label = {
              y: rotateYLabel ? -(thickness + 2) : -10, //TODO: consider calculating this based on largest tick width... OR at least expose this on chart
              dy: 0,
              x: rotateYLabel ? -w / 2 : -axis.tickPadding(),
              a: rotateYLabel ? 'middle' : 'end',
              t: rotateYLabel ? 'rotate(-90)' : ''
            };
          }

          if (showMaxMin) {
            maxmin = {
              data: scale.domain(),
              translate: function(d, i) { return 'translate(0,' + scale(d) + ')'; },
              dy: '.32em',
              x: -axis.tickPadding(),
              y: 0,
              rotate: '',
              anchor: direction === 'rtl' ? 'start' : 'end'
            };
          }

          if (textAnchor) {
            if (direction === 'rtl') {
              if (textAnchor === 'start') {
                textAnchorString = 'end';
              } else if (textAnchor === 'end') {
                textAnchorString = 'start';
              } else {
                textAnchorString = textAnchor;
              }
            } else {
              textAnchorString = textAnchor;
            }
          } else {
            textAnchorString = direction === 'rtl' ? 'start' : 'end';
          }

          break;
      }

      //------------------------------------------------------------
      // Axis label

      var axisLabel = g.selectAll('text.nv-axislabel').data([axisLabelText]);

      if (textAnchorString !== '') {
        g.selectAll('g.tick') // the g's wrapping each tick
          .each(function(d, i) {
            d3.select(this).select('text')
              .style('text-anchor', textAnchorString);
          });
      }

      axisLabel.exit().remove();
      axisLabel.enter().append('text').attr('class', 'nv-axislabel');

      if (axisLabelText) {

        axisLabel
          .text(function(d) { return d; })
          .attr('y', label.y)
          .attr('dy', label.dy)
          .attr('x', label.x)
          .attr('transform', label.t)
          .style('text-anchor', label.a);

        axisLabel.each(function(d, i) {
          labelThickness += axis.orient() === 'left' || axis.orient() === 'right' ?
            parseInt(this.getBoundingClientRect().width / 1.15, 10) :
            parseInt(this.getBoundingClientRect().height / 1.15, 10);
        });

        thickness += labelThickness;
      }

      //------------------------------------------------------------
      // Min Max values

      if (showMaxMin) {
        var axisMaxMin = wrap.selectAll('g.nv-axisMaxMin').data(maxmin.data);
        axisMaxMin.enter().append('g').attr('class', 'nv-axisMaxMin').append('text')
          .style('opacity', 0);
        axisMaxMin.exit().remove();
        axisMaxMin
            .attr('transform', maxmin.translate)
          .select('text')
            .text(function(d, i) {
              var v = fmt(d);
              return ('' + v).match('NaN') ? '' : v;
            })
            .attr('dy', maxmin.dy)
            .attr('x', maxmin.x)
            .attr('y', maxmin.y)
            .attr('transform', maxmin.rotate)
            .style('text-anchor', maxmin.anchor);
        axisMaxMin
            .attr('transform', maxmin.translate)
          .select('text')
            .style('opacity', 1);
      }

      if (showMaxMin && (axis.orient() === 'left' || axis.orient() === 'right')) {
        //check if max and min overlap other values, if so, hide the values that overlap
        g.selectAll('g.tick') // the g's wrapping each tick
            .each(function(d, i) {
              d3.select(this).select('text').style('opacity', 1);
              if (scale(d) > scale.range()[0] - 10 || scale(d) < scale.range()[1] + 10) { // 10 is assuming text height is 16... if d is 0, leave it!
                if (d < 1e-10 && d > -1e-10) {// accounts for minor floating point errors... though could be problematic if the scale is EXTREMELY SMALL
                  d3.select(this).select('text').style('opacity', 0);
                  d3.select(this).select('line').style('opacity', 0);
                }
                d3.select(this).select('text').style('opacity', 0); // Don't remove the ZERO line!!
              }
            });

        //if Max and Min = 0 only show min, Issue #281
        if (scale.domain()[0] === scale.domain()[1] && scale.domain()[0] === 0) {
          wrap.selectAll('g.nv-axisMaxMin')
            .style('opacity', function(d, i) { return !i ? 1 : 0; });
        }
      }

      if (showMaxMin && (axis.orient() === 'top' || axis.orient() === 'bottom')) {
        var maxMinRange = [];
        wrap.selectAll('g.nv-axisMaxMin')
              .each(function(d, i) {
                try {
                  if (i) { // i== 1, max position
                    maxMinRange.push(scale(d) - this.getBoundingClientRect().width - 4);  //assuming the max and min labels are as wide as the next tick (with an extra 4 pixels just in case)
                  }
                  else { // i==0, min position
                    maxMinRange.push(scale(d) + this.getBoundingClientRect().width + 4);
                  }
                } catch (err) {
                  if (i) { // i== 1, max position
                    maxMinRange.push(scale(d) - 4);  //assuming the max and min labels are as wide as the next tick (with an extra 4 pixels just in case)
                  }
                  else { // i==0, min position
                    maxMinRange.push(scale(d) + 4);
                  }
                }
              });

        //check if max and min overlap other values, if so, hide the values that overlap
        g.selectAll('g.tick') // the g's wrapping each tick
            .each(function(d, i) {
              d3.select(this).select('text').style('opacity', 1);
              if (scale(d) < maxMinRange[0] || scale(d) > maxMinRange[1]) {
                if (d < 1e-10 && d > -1e-10) {// accounts for minor floating point errors... though could be problematic if the scale is EXTREMELY SMALL
                  d3.select(this).select('text').style('opacity', 0);
                  d3.select(this).select('line').style('opacity', 0);
                }
                d3.select(this).select('text').style('opacity', 0); // Don't remove the ZERO line!!
              }
            });
      }


      //highlight zero line ... Maybe should not be an option and should just be in CSS?
      if (highlightZero) {
        g.selectAll('line.tick')
            .filter(function(d) {
              return !parseFloat(Math.round(d * 100000) / 1000000);
            }) //this is because sometimes the 0 tick is a very small fraction, TODO: think of cleaner technique
              .classed('zero', true);
      }

      //store old scales for use in transitions on update
      scale0 = scale.copy();

      chart.labelThickness = function() {
        return labelThickness;
      };

    });

    return chart;
  }


  //============================================================
  // Expose Public Variables
  //------------------------------------------------------------

  // expose chart's sub-components
  chart.axis = axis;

  d3.rebind(chart, axis, 'orient', 'tickValues', 'tickSubdivide', 'tickSize', 'tickPadding', 'tickFormat');
  d3.rebind(chart, scale, 'domain', 'range', 'rangeBand', 'rangeBands'); //these are also accessible by chart.scale(), but added common ones directly for ease of use

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

  chart.width = function(_) {
    if (!arguments.length) {
      return thickness;
    }
    thickness = _;
    return chart;
  };

  chart.height = function(_) {
    if (!arguments.length) {
      return thickness;
    }
    thickness = _;
    return chart;
  };

  chart.ticks = function(_) {
    if (!arguments.length) {
      return ticks;
    }
    ticks = _;
    return chart;
  };

  chart.axisLabel = function(_) {
    if (!arguments.length) {
      return axisLabelText;
    }
    axisLabelText = _;
    return chart;
  };

  chart.showMaxMin = function(_) {
    if (!arguments.length) {
      return showMaxMin;
    }
    showMaxMin = _;
    return chart;
  };

  chart.highlightZero = function(_) {
    if (!arguments.length) {
      return highlightZero;
    }
    highlightZero = _;
    return chart;
  };

  chart.scale = function(_) {
    if (!arguments.length) {
      return scale;
    }
    scale = _;
    axis.scale(scale);
    isOrdinal = typeof scale.rangeBands === 'function';
    d3.rebind(chart, scale, 'domain', 'range', 'rangeBand', 'rangeBands');
    return chart;
  };

  chart.wrapTicks = function(_) {
    if (!arguments.length) {
      return wrapTicks;
    }
    wrapTicks = _;
    return chart;
  };

  chart.rotateTicks = function(_) {
    if (!arguments.length) {
      return rotateTicks;
    }
    rotateTicks = _;
    return chart;
  };

  chart.staggerTicks = function(_) {
    if (!arguments.length) {
      return staggerTicks;
    }
    staggerTicks = _;
    return chart;
  };

  chart.reduceXTicks = function(_) {
    if (!arguments.length) {
      return reduceXTicks;
    }
    reduceXTicks = _;
    return chart;
  };

  chart.rotateYLabel = function(_) {
    if (!arguments.length) {
      return rotateYLabel;
    }
    rotateYLabel = _;
    return chart;
  };

  chart.axisLabelDistance = function(_) {
    if (!arguments.length) {
      return axisLabelDistance;
    }
    axisLabelDistance = _;
    return chart;
  };

  chart.maxTickWidth = function(_) {
    if (!arguments.length) {
      return maxTickWidth;
    }
    maxTickWidth = _;
    return chart;
  };

  chart.textAnchor = function(_) {
    if (!arguments.length) {
      return textAnchor;
    }
    textAnchor = _;
    return chart;
  };

  chart.direction = function(_) {
    if (!arguments.length) {
      return direction;
    }
    direction = _;
    return chart;
  };

  //============================================================


  return chart;
};
