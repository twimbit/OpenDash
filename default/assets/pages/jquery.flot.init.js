/**
 * Theme: Adminox Admin Template
 * Author: Coderthemes
 * Module/App: Flot-Chart
 */

!(function($) {
  "use strict";

  var FlotChart = function() {
    this.$body = $("body");
    this.$realData = [];
  };

  //returns some random data
  (FlotChart.prototype.randomData = function() {
    var totalPoints = 300;
    if (this.$realData.length > 0) this.$realData = this.$realData.slice(1);

    // Do a random walk
    while (this.$realData.length < totalPoints) {
      var prev =
          this.$realData.length > 0
            ? this.$realData[this.$realData.length - 1]
            : 50,
        y = prev + Math.random() * 10 - 5;

      if (y < 0) {
        y = 0;
      } else if (y > 100) {
        y = 100;
      }

      this.$realData.push(y);
    }

    // Zip the generated y values with the x values
    var res = [];
    for (var i = 0; i < this.$realData.length; ++i) {
      res.push([i, this.$realData[i]]);
    }

    return res;
  }),
    (FlotChart.prototype.createRealTimeGraph = function(
      selector,
      data,
      colors
    ) {
      var plot = $.plot(selector, [data], {
        colors: colors,
        series: {
          grow: {
            active: false
          }, //disable auto grow
          shadowSize: 0, // drawing is faster without shadows
          lines: {
            show: true,
            fill: true,
            lineWidth: 2,
            steps: false
          }
        },
        grid: {
          show: true,
          aboveData: false,
          color: "#dcdcdc",
          labelMargin: 15,
          axisMargin: 0,
          borderWidth: 0,
          borderColor: null,
          minBorderMargin: 5,
          clickable: true,
          hoverable: true,
          autoHighlight: false,
          mouseActiveRadius: 20
        },
        tooltip: true, //activate tooltip
        tooltipOpts: {
          content: "Value is : %y.0" + "%",
          shifts: {
            x: -30,
            y: -50
          }
        },
        yaxis: {
          axisLabel: false,
          show: false,
          min: 0,
          max: 100,
          tickColor: "#f5f5f5",
          color: "rgba(0,0,0,0.1)"
        },
        xaxis: {
          axisLabel: false,
          show: false,
          tickColor: "#f5f5f5"
        }
      });

      return plot;
    }),
    //initializing various charts and components
    (FlotChart.prototype.init = function() {
      //real time data representation
      var plot = this.createRealTimeGraph("#flotRealTime", this.randomData(), [
        "#64c5b1"
      ]);
      plot.draw();
      var $this = this;
      function updatePlot() {
        plot.setData([$this.randomData()]);
        // Since the axes don't change, we don't need to call plot.setupGrid()
        plot.draw();
        setTimeout(updatePlot, $("html").hasClass("mobile-device") ? 500 : 500);
      }

      updatePlot();
    }),
    //init flotchart
    ($.FlotChart = new FlotChart()),
    ($.FlotChart.Constructor = FlotChart);
})(window.jQuery),
  //initializing flotchart
  (function($) {
    "use strict";
    $.FlotChart.init();
  })(window.jQuery);
