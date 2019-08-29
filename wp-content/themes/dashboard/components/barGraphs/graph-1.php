<canvas id="myChart-bar-1"></canvas>
<script>
    var myBarChart = new Chart(document.getElementById("myChart-bar-1"), {
        type: 'bar',
        data: {
            labels: ["2015-01", "2015-02", "2015-03", "2015-04", "2015-05", "2015-06", "2015-07", "2015-08", "2015-09", "2015-10", "2015-11", "2015-12"],
            datasets: [{
                label: '# of Tomatoes',
                data: [12, 19, 3, 5, 2, 3, 20, 3, 5, 6, 2, 1],
                backgroundColor: "rgb(28,159,159,1)",
                borderColor: "#1c9f9f",
                borderWidth: 1
            }]
        },
        options: {
            maintainAspectRatio: false,
            legend: {
                display: false,
            },
            responsive: false,
            scales: {
                xAxes: [{
                    display: false,
                }],
                yAxes: [{
                    display: false,
                }]
            }
        }
    });
</script>