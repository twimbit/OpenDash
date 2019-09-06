/**
 * Theme: Adminox Admin Template
 * Author: Coderthemes
 * Morris Chart
 */

!(function($) {
  "use strict";

  var MorrisCharts = function() {};

  //creates area chart
  (MorrisCharts.prototype.createAreaChart = function(
    element,
    pointSize,
    lineWidth,
    data,
    xkey,
    ykeys,
    labels,
    lineColors
  ) {
    Morris.Area({
      element: element,
      pointSize: 0,
      lineWidth: 0,
      data: data,
      xkey: xkey,
      ykeys: ykeys,
      labels: labels,
      hideHover: "auto",
      resize: true,
      gridLineColor: "#eef0f2",
      lineColors: lineColors
    });
  }),
    //creates area chart with dotted

    (MorrisCharts.prototype.init = function() {
      //creating area chart
      var $areaData = [
        { y: "2009", a: 10, b: 20 },
        { y: "2010", a: 75, b: 65 },
        { y: "2011", a: 50, b: 40 },
        { y: "2012", a: 75, b: 65 },
        { y: "2013", a: 50, b: 40 },
        { y: "2014", a: 75, b: 65 },
        { y: "2015", a: 90, b: 60 }
      ];
      this.createAreaChart(
        "morris-area-example",
        0,
        0,
        $areaData,
        "y",
        ["a", "b"],
        ["Series A", "Series B"],
        ["#5553ce", "#bdbdbd"]
      );
    }),
    //init
    ($.MorrisCharts = new MorrisCharts()),
    ($.MorrisCharts.Constructor = MorrisCharts);
})(window.jQuery),
  //initializing
  (function($) {
    "use strict";
    $.MorrisCharts.init();
  })(window.jQuery);
