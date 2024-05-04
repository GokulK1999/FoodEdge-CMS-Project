<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Rating Report</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #ff5733;
        }
        canvas {
            margin: 0 auto;
            display: block;
            width: 600px; /* Set larger fixed width */
            height: 600px; /* Set larger fixed height */
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Service Rating Report</h1>
    <canvas id="chart"></canvas>
</div>

<script>
    var ctx = document.getElementById('chart').getContext('2d');
    var reviewChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: {!! json_encode($labels) !!},
            datasets: {!! json_encode($datasets) !!}
        },
        options: {
            plugins: {
                datalabels: {
                    color: '#fff',
                    font: {
                        weight: 'bold'
                    },
                    formatter: function(value, context) {
                        return (value * 100).toFixed(2) + '%';
                    }
                }
            }
        }
    });
</script>

</body>
</html>
