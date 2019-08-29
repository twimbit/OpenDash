<style scoped>
    .legend {
        position: absolute;
        padding: 6px;
    }

    .profit {
        font-size: 13px;
        color: #26d4d4;
    }

    #myChart-area {
        height: 153px;
    }
</style>
<div class="legend">
    <div class="dollor">$200.01</div>
    <div class="profit">+#99.9(1.98)</div>
</div>
<canvas id="myChart-area"></canvas>
<script>
    new Chart(document.getElementById("myChart-area"), {
        "type": "line",
        "data": {
            "labels": ["2010", "2012", "2014", "2016", "2018", "2019", "2010", "2012", "2014", "2016", "2018", "2019", "2018", "2019", "2010", "2012", "2014", "2016", "2018", "2019", "2010", "2012", "2014", "2016", "2018", "2019", "2018", "2019"],
            "datasets": [{
                "label": "",
                "data": [45, 20, 34, 28, 40, 32, 24, 55, 34, 38, 60, 55, 38, 40, 45, 20, 34, 28, 40, 32, 24, 55, 34, 38, 60, 55, 38, 40],
                "fill": true,
                "borderColor": "#1c9f9f",
                "lineTension": 0.1,
                "backgroundColor": "rgb(28,159,159,0.3)",
                borderWidth: 1
            }],
        },
        "options": {
            maintainAspectRatio: false,
            legend: {
                display: false,
            },
            "title": {
                display: false,
                text: "Revenue",
            },
            scales: {
                xAxes: [{
                    display: false,
                    afterFit: (scale) => {
                        scale.height = 20;
                    }
                }],
                yAxes: [{
                    display: false,
                    ticks: {
                        suggestedMin: 50,
                        suggestedMax: 100
                    }
                }]
            }
        }
    });
</script>