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

  //creates plot graph
  (FlotChart.prototype.createPlotGraph = function(
    selector,
    data1,
    data2,
    data3,
    labels,
    colors,
    borderColor,
    bgColor
  ) {
    //shows tooltip
    function showTooltip(x, y, contents) {
      $('<div id="tooltip" class="tooltipflot">' + contents + "</div>")
        .css({
          position: "absolute",
          top: y + 5,
          left: x + 5
        })
        .appendTo("body")
        .fadeIn(200);
    }

    $.plot(
      $(selector),
      [
        {
          data: data1,
          label: labels[0],
          color: colors[0]
        },
        {
          data: data2,
          label: labels[1],
          color: colors[1]
        },
        {
          data: data3,
          label: labels[2],
          color: colors[2]
        }
      ],
      {
        series: {
          lines: {
            show: true,
            fill: true,
            lineWidth: 2,
            fillColor: {
              colors: [
                {
                  opacity: 0.3
                },
                {
                  opacity: 0.3
                },
                {
                  opacity: 0.3
                }
              ]
            }
          },
          points: {
            show: true
          },
          shadowSize: 0
        },

        grid: {
          hoverable: true,
          clickable: true,
          borderColor: borderColor,
          tickColor: "#f9f9f9",
          borderWidth: 1,
          labelMargin: 30,
          backgroundColor: bgColor
        },
        legend: {
          position: "ne",
          margin: [0, -32],
          noColumns: 0,
          labelBoxBorderColor: null,
          labelFormatter: function(label, series) {},
          width: 30,
          height: 2
        },
        yaxis: {
          tickColor: "#f5f5f5",
          font: {
            color: "#bdbdbd"
          }
        },
        xaxis: {
          tickColor: "#f5f5f5",
          font: {
            color: "#bdbdbd"
          }
        },
        tooltip: true,
        tooltipOpts: {
          content: "%s: Value of %x is %y",
          shifts: {
            x: -60,
            y: 25
          },
          defaultTheme: false
        },
        splines: {
          show: true,
          tension: 0.1, // float between 0 and 1, defaults to 0.5
          lineWidth: 1 // number, defaults to 2
        }
      }
    );
  }),
    //end plot graph

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
    /* Bar chart start */
    (FlotChart.prototype.createStackBarGraph = function(
      selector,
      ticks,
      colors,
      data
    ) {
      var options = {
        bars: {
          show: true,
          barWidth: 0.8,
          fill: 1,
          align: "center"
        },
        grid: {
          show: false,
          aboveData: false,
          labelMargin: 5,
          axisMargin: 0,
          borderWidth: 1,
          minBorderMargin: 5,
          clickable: true,
          hoverable: true,
          autoHighlight: false,
          mouseActiveRadius: 20,
          borderColor: "#f5f5f5"
        },
        series: {
          stack: 1
        },
        legend: {
          position: "ne",
          margin: [0, -32],
          noColumns: 0,
          labelBoxBorderColor: null,
          labelFormatter: function(label, series) {
            // just add some space to labes
          },
          width: 10,
          height: 2
        },
        yaxis: ticks.y,
        xaxis: ticks.x,
        colors: colors,
        tooltip: false, //activate tooltip
        tooltipOpts: {
          content: "",
          shifts: {
            x: -30,
            y: -50
          }
        }
      };
      $.plot($(selector), data, options);
    }),
    /* end bar */

    //initializing various charts and components
    (FlotChart.prototype.init = function() {
      //plot graph data
      var uploads = [
        [0, 13],
        [1, 13],
        [2, 14],
        [3, 17],
        [4, 13],
        [5, 10],
        [6, 12],
        [7, 13],
        [8, 12],
        [9, 20],
        [10, 18],
        [11, 16],
        [12, 14]
      ];
      var downloads = [
        [0, 8],
        [1, 10],
        [2, 12],
        [3, 14],
        [4, 11],
        [5, 7],
        [6, 9],
        [7, 10],
        [8, 9],
        [9, 17],
        [10, 15],
        [11, 13],
        [12, 11]
      ];
      var downloads1 = [
        [0, 3],
        [1, 6],
        [2, 8],
        [3, 10],
        [4, 7],
        [5, 3],
        [6, 5],
        [7, 7],
        [8, 6],
        [9, 14],
        [10, 12],
        [11, 10],
        [12, 8]
      ];
      var plabels = ["Google", "Yahoo", "Facebook"];
      var pcolors = ["#4489e4", "#78c350", "#f18f1c"];
      var borderColor = "#f5f5f5";
      var bgColor = "#fff";
      this.createPlotGraph(
        "#website-stats",
        uploads,
        downloads,
        downloads1,
        plabels,
        pcolors,
        borderColor,
        bgColor
      );

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

      //bar chart = stacked
      var stack_ticks = {
        y: {
          axisLabel: "",
          tickColor: "#f5f5f5",
          font: {
            color: "#bdbdbd"
          }
        },
        x: {
          axisLabel: "",
          tickColor: "#f5f5f5",
          font: {
            color: "#bdbdbd"
          }
        }
      };
      //random data
      var d1 = [];
      for (var i = 0; i <= 10; i += 1)
        d1.push([i, parseInt(Math.random() * 30)]);

      var ds = new Array();

      ds.push({
        label: "",
        data: d1,
        bars: {
          order: 0
        }
      });

      this.createStackBarGraph(
        "#bar-1-chart",
        stack_ticks,
        ["#23d0ea", "#3f4958", "#ebeff2"],
        ds
      );
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
