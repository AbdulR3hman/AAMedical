/*
|
|
|   Author: Abdul AL-Faraj
|   School: EEE, Newcastle University
|
|
*/



(function($) {

    var jan, feb, mar, apr, may, jun, jul, aug, sept, nov, oct, dec;

    jan = $("#apps_per_month").data("jan");
    feb = $("#apps_per_month").data("feb");
    mar = $("#apps_per_month").data("mar");
    apr = $("#apps_per_month").data("apr");
    may = $("#apps_per_month").data("may");
    jun = $("#apps_per_month").data("jun");
    jul = $("#apps_per_month").data("jul");
    aug = $("#apps_per_month").data("aug");
    sept = $("#apps_per_month").data("sept");
    nov = $("#apps_per_month").data("nov");
    oct = $("#apps_per_month").data("oct");
    dec = $("#apps_per_month").data("dec");


    var lineChartData = {
        labels: ["January", "February", "March", "April", "May", "June", "July", "August", "Sept", "October", "November", "December"],
        datasets: [{
                fillColor: "rgba(128,0,0,0.5)",
                strokeColor: "rgba(220,220,220,1)",
                pointColor: "rgba(220,220,220,1)",
                pointStrokeColor: "#fff",
                data: [jan, feb, mar, apr, may, jun, jul, aug, sept, oct, nov, dec]
            }
            // }, {
            //     fillColor: "rgba(151,187,205,0.5)",
            //     strokeColor: "rgba(151,187,205,1)",
            //     pointColor: "rgba(151,187,205,1)",
            //     pointStrokeColor: "#fff",
            //     data: [28, 48, 40, 19, 96, 27, 100]
            // }
        ]

    }

    var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Line(lineChartData);



})(jQuery);