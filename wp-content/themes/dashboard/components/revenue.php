<canvas id="myChart"></canvas>
<script>
    new Chart(document.getElementById("myChart"), {
        "type": "line",
        "data": {
            "labels": ["2010", "2012", "2014", "2016", "2018", "2019"],
            "datasets": [{
                    "label": "",
                    "data": [45, 59, 67, 78, 90, 74, 40],
                    "fill": true,
                    "borderColor": "rgb(75, 112, 154)",
                    "lineTension": 0.1,
                    "backgroundColor": "rgb(75, 112, 154,0.3)",
                }, {
                    "label": "",
                    "data": [62, 17, 09, 56, 34, 12, 120],
                    "fill": true,
                    "borderColor": "rgb(23, 152, 136)",
                    "lineTension": 0.1,
                    "backgroundColor": "rgb(23, 152, 136,0.3)",
                },
                {
                    "label": "",
                    "data": [52, 90, 63, 93, 89, 45, 80],
                    "fill": true,
                    "borderColor": "rgb(10, 134, 112)",
                    "lineTension": 0.1,
                    "backgroundColor": "rgb(10, 134, 112,0.3)",
                }
            ],
        },
        "xAxisID": "Revenue",
        "options": {
            scales: {
                yAxes: [{
                    scaleLabel: {
                        display: true,
                        labelString: 'revenue'
                    }
                }]
            }
        }
    });
</script>