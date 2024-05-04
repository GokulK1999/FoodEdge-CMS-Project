
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Chart</title>

    <!-- Include Highcharts library -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
</head>
<body>

<h1 style="text-align: center; color: red;">Booking Chart</h1>

<div style="width: 80%; margin: auto;">
    <div id="chart"></div>
</div>

<script>
    // Define chart options
    var options = {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Monthly Booking Count'
        },
        xAxis: {
            categories: {!! json_encode($labels) !!},
            title: {
                text: 'Month'
            }
        },
        yAxis: {
            title: {
                text: 'Count'
            }
        },
        series: {!! json_encode($datasets) !!}
    };

    // Render the chart
    Highcharts.chart('chart', options);
</script>

</body>
</html>
