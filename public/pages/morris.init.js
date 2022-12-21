
/**
* Theme: Xadmino
* Morris Chart
*/

!function($) {
    "use strict";

    var MorrisCharts = function() {};


    //creates line chart
    MorrisCharts.prototype.createLineChart = function(element, data, xkey, ykeys, labels, lineColors) {
        Morris.Line({
          element: element,
          data: data,
          xkey: xkey,
          ykeys: ykeys,
          labels: labels,
          gridLineColor: '#eef0f2',
          resize: true, //defaulted to true
          lineColors: lineColors
        });
    },
    //creates Bar chart
    MorrisCharts.prototype.createBarChart  = function(element, data, xkey, ykeys, labels, lineColors) {
        Morris.Bar({
            element: element,
            data: data,
            xkey: xkey,
            ykeys: ykeys,
            labels: labels,
            gridLineColor: '#eef0f2',
            barColors: lineColors
        });
    },
    MorrisCharts.prototype.init = function() {
//create line chart
var $data  = [
    { y: '2009', a: 100, b: 90 },
    { y: '2010', a: 75,  b: 65 },
    { y: '2011', a: 50,  b: 40 },
    { y: '2012', a: 75,  b: 65 },
    { y: '2013', a: 50,  b: 40 },
    { y: '2014', a: 75,  b: 65 },
    { y: '2015', a: 100, b: 90 }
  ];
this.createLineChart('morris-line-example', $data, 'y', ['a', 'b'], ['Series A', 'Series B'], ['#03a9f4', '#dcdcdc']);

      
        //creating bar chart
        var $barData  = [
            { y: '2009', a: 100, b: 90 },
            { y: '2010', a: 75,  b: 65 },
            { y: '2011', a: 50,  b: 40 },
            { y: '2012', a: 75,  b: 65 },
            { y: '2013', a: 50,  b: 40 },
            { y: '2014', a: 75,  b: 65 },
            { y: '2015', a: 100, b: 90 }
        ];
        this.createBarChart('morris-bar-example', $barData, 'y', ['a', 'b'], ['Series A', 'Series B'], ['#03a9f4', '#dcdcdc']);
    },
    //init
    $.MorrisCharts = new MorrisCharts, $.MorrisCharts.Constructor = MorrisCharts
}(window.jQuery),

//initializing 
function($) {
    "use strict";
    $.MorrisCharts.init();
}(window.jQuery);