<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
        }
        table {
            width: 80%;
            border-collapse: collapse;
            margin: auto;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 12px;
            font-size: 18px;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #ffffff;
        }
        p {
            text-align: center;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <h1>Receipt</h1>
    <p>Invoice ID: {{ $invoice['id'] }}</p>
    <table>
        <tr>
            <th>Food Menu</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Total</th>
        </tr>
        @foreach($invoice['items'] as $item)
        <tr>
            <td>{{ $item['name'] }}</td>
            <td>{{ $item['quantity'] }}</td>
            <td>${{ $item['price'] }}</td>
            <td>${{ $item['quantity'] * $item['price'] }}</td>
        </tr>
        @endforeach
    </table>
    <p>Total: ${{ $invoice['total'] }}</p>
    <p>Payment Method: {{ $paymentMethod }}</p> <!-- Assuming you have passed payment method from PaymentController -->
    <p>Time Paid: {{ $timePaid }}</p> <!-- Assuming you have passed time paid from PaymentController -->
    <p>Company Name: {{ $companyName }}</p> <!-- Assuming you have passed company name from PaymentController -->
    <p>Thank you for your support!</p>
</body>
</html>
