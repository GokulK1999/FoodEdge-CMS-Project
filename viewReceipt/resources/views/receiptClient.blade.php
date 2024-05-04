<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 50%;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f9f9f9;
        }
        h1 {
            text-align: center;
        }
        .details {
            margin-bottom: 20px;
        }
        .details p {
            margin: 5px 0;
        }
        .end-greeting {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Receipt</h1>
        <div class="details">
            {{--<p><strong>Company Name:</strong> {{ $companyName }}</p>--}}
            {{--<p><strong>Time Paid:</strong> {{ $timePaid }}</p>--}}
            {{--<p><strong>Total Paid:</strong> ${{ $totalPaid }}</p>--}}
            {{--<p><strong>Payment Method:</strong> {{ $paymentMethod }}</p>--}}
        </div>
        <div class="end-greeting">
            <p>Thank you for your support!</p>
        </div>
    </div>
</body>
</html>
