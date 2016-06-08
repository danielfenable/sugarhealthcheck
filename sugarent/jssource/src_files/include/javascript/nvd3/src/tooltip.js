
/*****
 * A no frills tooltip implementation.
 *****/


(function() {

  var nvtooltip = window.nv.tooltip = {};

  nvtooltip.show = function(evt, content, gravity, dist, container, classes) {

    var tooltip = document.createElement('div'),
        inner = document.createElement('div'),
        arrow = document.createElement('div');

    gravity = gravity || 's';
    dist = dist || 5;

    inner.className = 'tooltip-inner';
    arrow.className = 'tooltip-arrow';
    inner.innerHTML = content;
    tooltip.style.left = 0;
    tooltip.style.top = -1000;
    tooltip.style.opacity = 0;
    tooltip.className = 'tooltip xy-tooltip in';

    tooltip.appendChild(inner);
    tooltip.appendChild(arrow);
    container.appendChild(tooltip);

    nvtooltip.position(container, tooltip, evt, gravity, dist);
    tooltip.style.opacity = 1;

    return tooltip;
  };

  nvtooltip.cleanup = function() {
      // Find the tooltips, mark them for removal by this class
      // (so others cleanups won't find it)
      var tooltips = document.getElementsByClassName('tooltip'),
          purging = [],
          i = tooltips.length;

      while (i > 0) {
          i -= 1;

          if (tooltips[i].className.indexOf('xy-tooltip') !== -1) {
              purging.push(tooltips[i]);
              tooltips[i].style.transitionDelay = '0 !important';
              tooltips[i].style.opacity = 0;
              tooltips[i].className = 'nvtooltip-pending-removal out';
          }
      }

      setTimeout(function() {
          var removeMe;
          while (purging.length) {
              removeMe = purging.pop();
              removeMe.parentNode.removeChild(removeMe);
          }
      }, 500);
  };

  nvtooltip.position = function(container, tooltip, evt, gravity, dist) {
    var pos = [
      typeof evt.layerX === 'undefined' ? evt.offsetX : evt.layerX,
      typeof evt.layerY === 'undefined' ? evt.offsetY : evt.layerY
    ];

    gravity = gravity || 's';
    dist = dist || 5;
    var tooltipWidth = parseInt(tooltip.offsetWidth, 10),
        tooltipHeight = parseInt(tooltip.offsetHeight, 10),
        containerWidth = container.clientWidth,
        containerHeight = container.clientHeight,
        scrollTop = container.scrollTop,
        scrollLeft = container.scrollLeft,
        class_name = tooltip.className.replace(/ top| right| bottom| left/g, ''),
        left, top;

    function alignCenter() {
      var left = pos[0] - (tooltipWidth / 2);
      if (left < scrollLeft) left = scrollLeft;
      if (left + tooltipWidth > containerWidth) left = containerWidth - tooltipWidth;
      return left;
    }
    function alignMiddle() {
      var top = pos[1] - (tooltipHeight / 2);
      if (top < scrollTop) top = scrollTop;
      if (top + tooltipHeight > scrollTop + containerHeight) top = scrollTop - tooltipHeight;
      return top;
    }
    function arrowLeft(left) {
      var marginLeft = pos[0] - (tooltipWidth / 2) - left - 5,
          arrow = tooltip.getElementsByClassName('tooltip-arrow')[0];
      arrow.style.marginLeft = marginLeft + 'px';
    }
    function arrowTop(top) {
      var marginTop = pos[1] - (tooltipHeight / 2) - top - 5,
          arrow = tooltip.getElementsByClassName('tooltip-arrow')[0];
      arrow.style.marginTop = marginTop + 'px';
    }

    switch (gravity) {
      case 'e':
        top = alignMiddle();
        left = pos[0] - tooltipWidth - dist;
        arrowTop(top);
        if (left < scrollLeft) {
          left = pos[0] + dist;
          class_name += ' right';
        } else {
          class_name += ' left';
        }
        break;
      case 'w':
        top = alignMiddle();
        left = pos[0] + dist;
        arrowTop(top);
        if (left + tooltipWidth > containerWidth) {
          left = pos[0] - tooltipWidth - dist;
          class_name += ' left';
        } else {
          class_name += ' right';
        }
        break;
      case 'n':
        left = alignCenter();
        top = pos[1] + dist;
        arrowLeft(left);
        if (top + tooltipHeight > scrollTop + containerHeight) {
          top = pos[1] - tooltipHeight - dist;
          class_name += ' top';
        } else {
          class_name += ' bottom';
        }
        break;
      case 's':
        left = alignCenter();
        top = pos[1] - tooltipHeight - dist;
        arrowLeft(left);
        if (scrollTop > top) {
          top = pos[1] + 10;
          class_name += ' bottom';
        } else {
          class_name += ' top';
        }
        break;
    }

    tooltip.style.left = left + 'px';
    tooltip.style.top = top + 'px';

    tooltip.className = class_name;
  };

})();
