<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice Details</title>
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
            font-size: 24px; /* Increase font size */
        }
        table {
            width: 80%; /* Adjusted width */
            border-collapse: collapse;
            margin: auto; /* Centering the table */
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 12px; /* Increase padding */
            font-size: 18px; /* Increase font size */
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #ffffff;
        }
        p {
            text-align: center;
            font-size: 18px; /* Increase font size */
        }
        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            background-color: #4CAF50;
            color: white;
            padding: 14px 24px; /* Increase padding */
            text-decoration: none;
            border-radius: 5px;
            font-size: 18px; /* Increase font size */
        }
        a:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Invoice Details</h1>
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
{{--<a href="{{ route('receiptClient.show') }}">Pay</a>--}}
</body>
</html>
