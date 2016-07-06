
nv.models.funnel = function() {

  //============================================================
  // Public Variables with Default Settings
  //------------------------------------------------------------

  var margin = {top: 0, right: 0, bottom: 0, left: 0},
      width = 960,
      height = 500,
      r = 0.3, // ratio of width to height (or slope)
      y = d3.scale.linear(),
      id = Math.floor(Math.random() * 10000), //Create semi-unique ID in case user doesn't select one
      getX = function(d) { return d.x; },
      getY = function(d) { return d.y; },
      getH = function(d) { return d.height; },
      getV = function(d) { return d.value; },
      forceY = [0], // 0 is forced by default.. this makes sense for the majority of bar graphs... user can always do chart.forceY([]) to remove
      clipEdge = true,
      yDomain,
      delay = 0,
      durationMs = 0,
      fmtValueLabel = function(d) { return d.label || d.value || d; },
      color = function(d, i) { return nv.utils.defaultColor()(d, d.series); },
      fill = color,
      classes = function(d, i) { return 'nv-group nv-series-' + d.series; },
      dispatch = d3.dispatch('chartClick', 'elementClick', 'elementDblClick', 'elementMouseover', 'elementMouseout', 'elementMousemove');


  //============================================================
  // Private Variables
  //------------------------------------------------------------

  // These values are preserved between renderings
  var calculatedWidth = 0,
      calculatedHeight = 0,
      calculatedCenter = 0;

  //============================================================
  // Update chart

  function chart(selection) {
    selection.each(function(data) {
      var availableWidth = width - margin.left - margin.right,
          availableHeight = height - margin.top - margin.bottom,
          container = d3.select(this),

          labelGap = 5,
          labelSpace = 5,
          labelOffset = 0,
          funnelTotal = 0,
          funnelOffset = 0;

      // Add series index to each data point for reference
      data.map(function(series, i) {
        series.values = series.values.map(function(point) {
          point.series = i;
          // if value is undefined, not a legitimate 0 value, use point.y
          if (typeof point.value == 'undefined') {
            point.value = getY(point);
          }
          // count total of funnel
          funnelTotal += point.value;
          return point;
        });
        return series;
      });

      //------------------------------------------------------------
      // Setup scales

      function calcDimensions() {
        calculatedWidth = calcWidth(funnelOffset);
        calculatedHeight = calcHeight();
        calculatedCenter = calcCenter(funnelOffset);
      }

      function calcScales() {
        var funnelArea = areaTrapezoid(calculatedHeight, calculatedWidth),
            funnelBase = calculatedWidth - 2 * r * calculatedHeight,
            funnelShift = 0,
            funnelMinHeight = 24;

        //------------------------------------------------------------
        // Adjust points to compensate for parallax of slice
        // by increasing height relative to area of funnel

        data.map(function(series, i) {
          series.values = series.values.map(function(point) {
            point.height = 0;
            if (funnelTotal > 0) {
              point.height = heightTrapezoid(funnelArea * point.value / funnelTotal, funnelBase);
            }
            if (point.height < funnelMinHeight / 2) {
              funnelShift += point.height - funnelMinHeight / 2;
              point.height = funnelMinHeight / 2;
            } else if (funnelShift < 0 && point.height + funnelShift > funnelMinHeight / 2) {
              point.height += funnelShift;
              funnelShift = 0;
            }
            funnelBase += 2 * r * point.height;
            return point;
          });
          return series;
        });

        data = d3.layout.stack()
                    .offset('zero')
                    .values(function(d) { return d.values; })
                    .y(getH)(data);

        // Remap and flatten the data for use in calculating the scales' domains
        var seriesData = (yDomain) ? [] : // if we know yDomain, no need to calculate
              d3.extent(d3.merge(data.map(function(d) {
                return d.values.map(function(d, i) {
                  return getH(d, i) + d.y0;
                });
              })).concat(forceY));

        y .domain(yDomain || seriesData)
          .range([calculatedHeight, 0]);
      }

      calcDimensions();
      calcScales();

      //------------------------------------------------------------
      // Setup containers and skeleton of chart

      var wrap = container.selectAll('g.nv-wrap.nv-funnel').data([data]);
      var wrapEnter = wrap.enter().append('g').attr('class', 'nvd3 nv-wrap nv-funnel');
      var defsEnter = wrapEnter.append('defs');
      var gEnter = wrapEnter.append('g');
      var g = wrap.select('g');

      //set up the gradient constructor function
      chart.gradient = function(d, i, p) {
        return nv.utils.colorLinearGradient(d, id + '-' + i, p, color(d, i), wrap.select('defs'));
      };

      gEnter.append('g').attr('class', 'nv-groups');
      wrap.attr('transform', 'translate(' + margin.left + ',' + margin.top + ')');

      //------------------------------------------------------------
      // Clip path

      defsEnter.append('clipPath')
        .attr('id', 'nv-edge-clip-' + id)
          .append('rect');
      wrap.select('#nv-edge-clip-' + id + ' rect')
        .attr('width', availableWidth + 1)
        .attr('height', availableHeight + 1);
      g.attr('clip-path', clipEdge ? 'url(#nv-edge-clip-' + id + ')' : '');

      //------------------------------------------------------------
      // Append major data series grouping containers

      var groups = wrap.select('.nv-groups').selectAll('.nv-group')
            .data(function(d) { return d; }, function(d) { return d.key; });

      groups.enter().append('g')
        .style('stroke-opacity', 1e-6)
        .style('fill-opacity', 1e-6);

      groups
        .attr('class', classes)
        .attr('fill', fill)
        .classed('hover', function(d) { return d.hover; })
        .classed('nv-active', function(d) { return d.active === 'active'; })
        .classed('nv-inactive', function(d) { return d.active === 'inactive'; })
        .style({'stroke': '#FFFFFF', 'stroke-width': 3});

      groups.transition().duration(durationMs)
          .style('stroke-opacity', 1)
          .style('fill-opacity', 1);

      groups.exit().transition().duration(durationMs)
        .selectAll('polygon.nv-bar')
        .delay(function(d, i) { return i * delay / data[0].values.length; })
          .attr('points', function(d) {
            return pointsTrapezoid(d.y, d.y0, 0, calculatedWidth);
          })
          .style('stroke-opacity', 1e-6)
          .style('fill-opacity', 1e-6)
          .remove();

      groups.exit().transition().duration(durationMs)
        .selectAll('g.nv-label-value')
        .delay(function(d, i) { return i * delay / data[0].values.length; })
          .attr('y', 0)
          .attr('transform', 'translate(' + calculatedCenter + ',0)')
          .style('stroke-opacity', 1e-6)
          .style('fill-opacity', 1e-6)
          .remove();

      //------------------------------------------------------------
      // Append polygons for funnel

      var funs = groups.selectAll('polygon.nv-bar')
            .data(function(d) {
              return d.values;
            });

      funs.exit().remove();

      funs.enter()
        .append('polygon')
          .attr('class', 'nv-bar')
          .attr('points', function(d) {
            return pointsTrapezoid(d.y, d.y0, 0, calculatedWidth);
          });

      funs
        .on('mouseover', function(d, i) {
          d3.select(this).classed('hover', true);
          dispatch.elementMouseover({
            value: getV(d, i),
            point: d,
            series: data[d.series],
            pos: [d3.event.pageX, d3.event.pageY],
            pointIndex: i,
            seriesIndex: d.series,
            e: d3.event
          });
        })
        .on('mouseout', function(d, i) {
          d3.select(this).classed('hover', false);
          dispatch.elementMouseout({
            value: getV(d, i),
            point: d,
            series: data[d.series],
            pointIndex: i,
            seriesIndex: d.series,
            e: d3.event
          });
        })
        .on('mousemove', function(d, i) {
          dispatch.elementMousemove({
            point: d,
            pointIndex: i,
            pos: [d3.event.pageX, d3.event.pageY],
            id: id
          });
        })
        .on('click', function(d, i) {
          dispatch.elementClick({
            value: getV(d, i),
            point: d,
            series: data[d.series],
            pos: [d3.event.pageX, d3.event.pageY],
            pointIndex: i,
            seriesIndex: d.series,
            e: d3.event
          });
          d3.event.stopPropagation();
        })
        .on('dblclick', function(d, i) {
          dispatch.elementDblClick({
            value: getV(d, i),
            point: d,
            series: data[d.series],
            pos: [d3.event.pageX, d3.event.pageY],
            pointIndex: i,
            seriesIndex: d.series,
            e: d3.event
          });
          d3.event.stopPropagation();
        });

      //------------------------------------------------------------
      // Append containers for labels

      var labels = groups.selectAll('.nv-label-value')
            .data(function(d) { return d.values; });

      labels.enter()
        .append('g')
          .attr('class', 'nv-label-value')
          .attr('transform', 'translate(' + calculatedCenter + ',0)');

      var sideLabels = labels.filter('.nv-label-side');

      //------------------------------------------------------------
      // Update funnel labels

      function renderFunnelLabels() {
        // Remove responsive label elements
        labels.selectAll('text').remove();

        // Append label text and wrap if needed
        labels.append('text')
          .text(fmtKey)
            .call(fmtLabel, 'nv-label', 0.85, '11px', 'middle', fmtFill);

        labels.select('.nv-label')
          .call(
            wrapLabel,
            calcFunnelWidth,
            function(txt, dy) {
              fmtLabel(txt, 'nv-label', dy, '11px', 'middle', fmtFill);
            }
          );

        // Append value and count text
        labels.append('text')
          .text(fmtValueLabel)
            .call(fmtLabel, 'nv-value', 0.85, '15px', 'middle', fmtFill);

        labels.select('.nv-value')
          .append('tspan')
            .text(fmtCount);

        labels
          .call(positionValue);

        // Position labels and identify side labels
        labels
          .call(calcFunnelLabelDimensions);

        labels
          .classed('nv-label-side', function(d) { return d.tooTall || d.tooWide; });
      }

      //------------------------------------------------------------
      // Update side labels

      function renderSideLabels() {
        // Remove all responsive elements
        sideLabels = labels.filter('.nv-label-side');
        labels.selectAll('polyline').remove();
        sideLabels.selectAll('.nv-label').remove();

        // Position side labels
        sideLabels.append('text')
          .text(fmtKey)
            .call(fmtLabel, 'nv-label', 0.85, '11px', 'start', '#555');

        sideLabels.select('.nv-label')
          .call(
            wrapLabel,
            calcSideWidth,
            function(txt, dy) {
              fmtLabel(txt, 'nv-label', dy, '11px', 'start', '#555');
            }
          );

        sideLabels
          .call(positionValue);

        sideLabels.select('.nv-value')
          .style({'font-size': '15px', 'text-anchor': 'start', 'fill': '#555'});

        sideLabels
          .call(calcSideLabelDimensions);

        // Reflow side label vertical position to prevent overlap
        // Top to bottom

        var d0 = 0;

        sideLabels.reverse().each(function(d, i) {
            if (!d0) {
              d.labelBottom = d.labelTop + d.labelHeight + labelSpace;
              d0 = d.labelBottom;
              return;
            }

            d.labelTop = Math.max(d0, d.labelTop);
            d.labelBottom = d.labelTop + d.labelHeight + labelSpace;
            d0 = d.labelBottom;
          });

        sideLabels.reverse();

        // And then...
        // Bottom to top
        if (d0 && d0 - labelSpace > d3.max(y.range())) {

          d0 = 0;

          sideLabels.each(function(d, i) {
              if (!d0) {
                d.labelBottom = d3.max(y.range()) - 1;
                d.labelTop = d.labelBottom - d.labelHeight;
                d0 = d.labelTop;
                return;
              }

              d.labelBottom = Math.min(d0, d.labelBottom);
              d.labelTop = d.labelBottom - d.labelHeight - labelSpace;
              d0 = d.labelTop;
            });

          if (d0 < 0) {
            sideLabels.each(function(d, i) {
                d.labelTop -= d0;
                d.labelBottom -= d0;
              });
          }
        }

        d0 = 0;

        //------------------------------------------------------------
        // Recalculate funnel offset based on side label dimensions

        sideLabels
          .call(calcOffsets);
      }

      //------------------------------------------------------------
      // Calculate the width and position of labels which
      // determines the funnel offset dimension

      function renderLabels() {
        renderFunnelLabels();
        renderSideLabels();
      }

      renderLabels();
      calcDimensions();

      // Calls twice since the first call may create a funnel offset
      // which decreases the funnel width which impacts label position

      calcScales();
      renderLabels();
      calcDimensions();

      calcScales();
      renderLabels();
      calcDimensions();

      //------------------------------------------------------------
      // Reposition responsive elements

      funs
        .attr('points', function(d) {
          var scalar = d.active && d.active === 'active' ? 1.05 : 1;
          return pointsTrapezoid(d.y, d.y0, 1, calculatedWidth * scalar);
        });

      labels
        .attr('transform', function(d) {
          var xTrans = d.tooTall ? 0 : calculatedCenter,
              yTrans = d.tooTall ? 0 : d.labelTop;
          return 'translate(' + xTrans + ',' + yTrans + ')';
        });

      sideLabels
        .attr('transform', function(d) {
          return 'translate(' + labelOffset + ',' + d.labelTop + ')';
        });

      sideLabels
        .append('polyline')
          .attr('class', 'nv-label-leader')
          .style({'fill-opacity': 0, 'stroke': '#999', 'stroke-width': 1, 'stroke-opacity': 0.5});

      sideLabels.reverse();
      sideLabels.selectAll('polyline')
        .call(pointsLeader);
      sideLabels.reverse();

      //------------------------------------------------------------
      // Utility functions

      // TODO: use scales instead of ratio algebra
      // var funnelScale = d3.scale.linear()
      //       .domain([w / 2, minimum])
      //       .range([0, maxy1*thenscalethistopreventminimumfrompassing]);

      function wrapLabel(lbl, calcAvailableWidth, fmtLabel) {
        lbl.each(function(d) {
          var text = d3.select(this),
              maxWidth = calcAvailableWidth(d.y, d.y0, 0),
              parent = d3.select(text.node().parentNode),
              words = text.text().split(/\s+/).reverse(),
              word,
              line = [],
              lineNumber = 0,
              dy = parseFloat(text.attr('dy'));
              text.text(null);

          while (word = words.pop()) {
            line.push(word);
            text.text(line.join(' '));

            if (text.node().getComputedTextLength() > maxWidth && line.length > 1) {
              line.pop();
              text.text(line.join(' '));
              line = [word];
              text = parent.append('text');
              text.text(word)
                .call(fmtLabel, ++lineNumber * 1.1 + dy);
            }
          }
        });
      }

      function pointsTrapezoid(dy, dy0, h, w) {
        //MATH: don't delete
        // v = 1/2 * h * (b + b + 2*r*h);
        // 2v = h * (b + b + 2*r*h);
        // 2v = h * (2*b + 2*r*h);
        // 2v = 2*b*h + 2*r*h*h;
        // v = b*h + r*h*h;
        // v - b*h - r*h*h = 0;
        // v/r - b*h/r - h*h = 0;
        // b/r*h + h*h + b/r/2*b/r/2 = v/r + b/r/2*b/r/2;
        // h*h + b/r*h + b/r/2*b/r/2 = v/r + b/r/2*b/r/2;
        // (h + b/r/2)(h + b/r/2) = v/r + b/r/2*b/r/2;
        // h + b/r/2 = Math.sqrt(v/r + b/r/2*b/r/2);
        // h  = Math.abs(Math.sqrt(v/r + b/r/2*b/r/2)) - b/r/2;
        var y0 = y(dy0),
            y1 = y(dy0 + dy),
            w0 = w / 2 - r * y0,
            w1 = w / 2 - r * y1,
            c = calculatedCenter;

        return (
          (c - w0) + ',' + (y0 * h) + ' ' +
          (c - w1) + ',' + (y1 * h) + ' ' +
          (c + w1) + ',' + (y1 * h) + ' ' +
          (c + w0) + ',' + (y0 * h)
        );
      }

      function heightTrapezoid(a, b) {
        var x = b / r / 2;
        return Math.abs(Math.sqrt(a / r + x * x)) - x;
      }

      function areaTrapezoid(h, w) {
        return h * (w - h * r);
      }

      function calcWidth(offset) {
        return Math.round(Math.max(Math.min(availableHeight / 1.1, availableWidth - offset), 40));
      }

      function calcHeight() {
        // MATH: don't delete
        // h = 666.666
        // w = 600
        // m = 200
        // at what height is m = 200
        // w = h * 0.3 = 666 * 0.3 = 200
        // maxheight = ((w - m) / 2) / 0.3 = (w - m) / 0.6 = h
        // (600 - 200) / 0.6 = 400 / 0.6 = 666
        return Math.min(calculatedWidth * 1.1, (calculatedWidth - calculatedWidth * r) / (2 * r));
      }

      function calcCenter(offset) {
        return calculatedWidth / 2 + offset;
      }

      function calcFunnelWidth(dy, dy0) {
        var v = y(dy0 + dy / 2);
        return calculatedWidth - v * r * 2;
      }

      function calcSideWidth(dy, dy0, offset) {
        var b = Math.max((availableWidth - calculatedWidth) / 2, offset),
            v = y(dy0 + dy);
        return b + v * r;
      }

      function calcLabelBBox(lbl) {
        return d3.select(lbl).node().getBoundingClientRect();
      }

      function calcFunnelLabelDimensions(lbl) {
        lbl.each(function(d) {
          var bbox = calcLabelBBox(this);

          d.labelHeight = bbox.height;
          d.labelWidth = bbox.width;
          d.labelTop = y(d.y0 + d.y / 2) - d.labelHeight / 2;
          d.labelBottom = d.labelTop + d.labelHeight + labelSpace;

          d.tooWide = d.labelWidth > calcFunnelWidth(d.y - d.labelHeight, d.y0);
          d.tooTall = d.labelHeight > d.height;
        });
      }

      function calcSideLabelDimensions(lbl) {
        lbl.each(function(d) {
          var bbox = calcLabelBBox(this);
          d.labelHeight = bbox.height;
          d.labelWidth = bbox.width;
          d.labelTop = y(d.y0 + d.y);
          d.labelBottom = d.labelTop + d.labelHeight + labelSpace;
        });
      }

      function pointsLeader(polylines, i) {
        var c = polylines.length;
        polylines.each(function(d, i, j) {
          var // previous label
              p = j ? d3.select(polylines[j - 1][i]).data()[0] : null,
              // next label
              n = j < c - 1 ? d3.select(polylines[j + 1][i]).data()[0] : null,
              // label height
              h = Math.round(d.labelHeight) + 0.5,
              // slice bottom
              t = Math.round(y(d.y0) - d.labelTop) - 0.5,
              // previous width
              wp = p ? p.labelWidth - (d.labelBottom - p.labelBottom) * r : 0,
              // current width
              wc = d.labelWidth,
              // next width
              wn = n && h < t ? n.labelWidth : 0,
              // final width
              w = Math.round(Math.max(wp, wc, wn)) + labelGap,
              // funnel edge
              f = Math.round(calcSideWidth(0, d.y0, funnelOffset)) - labelOffset - labelGap,
              // polyline points
              p = 0 + ',' + h + ' ' +
                 w + ',' + h + ' ' +
                 (w + Math.abs(h - t) * r) + ',' + t + ' ' +
                 f + ',' + t;
          d.labelWidth = w;
          d3.select(this).attr('points', p);
        });
      }

      function calcOffsets(lbl) {
        var sideWidth = (availableWidth - calculatedWidth) / 2, // natural width of side
            offset = 0;

        lbl.each(function(d) {

          var // bottom of slice
              sliceBottom = y(d.y0),
              // is slice below or above label bottom
              scalar = d.labelBottom >= sliceBottom ? 1 : 0,
              // the width of the angled leader
              // from bottom right of label to bottom of slice
              slope = Math.abs(d.labelBottom + labelGap - sliceBottom) * r,
              // this is the x component of slope R at y
              base = sliceBottom * r,
              // this is the distance from end of label plus spacing to R
              iOffset = d.labelWidth + slope + labelGap * 3 - base;

          // if this label sticks out past R
          if (iOffset >= offset) {
            // this is the minimum distance for R
            // has to be away from the left edge of labels
            offset = iOffset;
          }
        });

        // how var from chart edge is label left edge
        offset = Math.round(offset * 10) / 10;

        // there are three states:
        if (offset <= 0) {
        // 1. no label sticks out past R
          labelOffset = sideWidth;
          funnelOffset = sideWidth;
        } else if (offset > 0 && offset < sideWidth) {
        // 2. iOffset is > 0 but < sideWidth
          labelOffset = sideWidth - offset;
          funnelOffset = sideWidth;
        } else {
        // 3. iOffset is >= sideWidth
          labelOffset = 0;
          funnelOffset = offset;
        }
      }

      function fmtFill(d, i, j) {
        var backColor = d3.select(this.parentNode).style('fill'),
            textColor = nv.utils.getTextContrast(backColor, i);
        return textColor;
      }

      function fmtKey(d) {
        return data[d.series].key;
      }

      function fmtCount(d) {
        var i = data[d.series].count;
        return i ? ' (' + i + ')' : '';
      }

      function fmtDirection(d) {
        var m = nv.utils.isRTLChar(d.slice(-1)),
            dir = m ? 'rtl' : 'ltr';
        return 'ltr';
      }

      function fmtLabel(txt, classes, dy, fontSize, anchor, fill) {
        txt
          .attr('x', 0)
          .attr('y', 0)
          .attr('dy', dy + 'em')
          .attr('class', classes)
          .attr('direction', function() {
            return fmtDirection(txt.text());
          })
          .style('pointer-events', 'none')
          .style('text-anchor', anchor)
          .style('font-size', fontSize)
          .style('fill', fill);
      }

      function positionValue(lbl) {
        lbl.each(function(d) {
          var lbl = d3.select(this),
              cnt = lbl.selectAll('.nv-label')[0].length + 1,
              dy = .85 * cnt + 'em';

          lbl.select('.nv-value')
            .attr('dy', dy);
        });
      }

    });

    return chart;
  }


  //============================================================
  // Expose Public Variables
  //------------------------------------------------------------

  chart.dispatch = dispatch;

  chart.color = function(_) {
    if (!arguments.length) return color;
    color = _;
    return chart;
  };
  chart.fill = function(_) {
    if (!arguments.length) return fill;
    fill = _;
    return chart;
  };
  chart.classes = function(_) {
    if (!arguments.length) return classes;
    classes = _;
    return chart;
  };
  chart.gradient = function(_) {
    if (!arguments.length) return gradient;
    gradient = _;
    return chart;
  };

  chart.x = function(_) {
    if (!arguments.length) return getX;
    getX = _;
    return chart;
  };

  chart.y = function(_) {
    if (!arguments.length) return getY;
    getY = _;
    return chart;
  };

  chart.margin = function(_) {
    if (!arguments.length) return margin;
    margin = _;
    return chart;
  };

  chart.width = function(_) {
    if (!arguments.length) return width;
    width = _;
    return chart;
  };

  chart.height = function(_) {
    if (!arguments.length) return height;
    height = _;
    return chart;
  };

  chart.xScale = function(_) {
    if (!arguments.length) return x;
    x = _;
    return chart;
  };

  chart.yScale = function(_) {
    if (!arguments.length) return y;
    y = _;
    return chart;
  };

  chart.yDomain = function(_) {
    if (!arguments.length) return yDomain;
    yDomain = _;
    return chart;
  };

  chart.forceY = function(_) {
    if (!arguments.length) return forceY;
    forceY = _;
    return chart;
  };

  chart.id = function(_) {
    if (!arguments.length) return id;
    id = _;
    return chart;
  };

  chart.delay = function(_) {
    if (!arguments.length) return delay;
    delay = _;
    return chart;
  };

  chart.clipEdge = function(_) {
    if (!arguments.length) return clipEdge;
    clipEdge = _;
    return chart;
  };

  chart.fmtValueLabel = function(_) {
    if (!arguments.length) return fmtValueLabel;
    fmtValueLabel = d3.functor(_);
    return chart;
  };

  //============================================================

  return chart;
}
