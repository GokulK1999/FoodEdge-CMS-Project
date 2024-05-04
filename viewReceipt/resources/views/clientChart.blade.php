<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Registration Report</title>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>

<h1 style ="text-align: center; color: red;"> Client Registration Report Sales </h1>
 <div style="width: 80%; margin: auto;">
    <canvas id="chart"></canvas>
</div>

<script>
    var ctx = document.getElementById('chart').getContext('2d');
    var userChart = new Chart(ctx,{
        type: 'bar',
        data: {
            labels: {!! json_encode($labels) !!},
            datasets: {!! json_encode($datasets) !!}
        },
    });
</script>

</body>
</html>
