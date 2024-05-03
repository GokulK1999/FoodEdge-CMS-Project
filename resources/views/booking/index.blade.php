<!DOCTYPE html>
<html>

<head>
    <title>Item Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        .value {
            font-weight: bold;
        }
        .btn-box {
        display: flex;
        justify-content: space-around; /* Evenly space the buttons */
        margin-top: 20px; /* Add some space between the box and the buttons */
    }

    /* Styling the buttons */
    .btn-box a {
        padding: 10px 20px;
        background-color: #ffcc00; /* bright color */
        color: #ffffff; /* white text color */
        text-decoration: none; /* Remove underline from links */
        border-radius: 5px; /* Rounded corners */
        transition: background-color 0.3s; /* Smooth transition on hover */
    }

    /* Hover effect for buttons */
    .btn-box a:hover {
        background-color: #ffa500; /* Darker color on hover */
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12" style="padding:20px;">
                <div class="card">
                    <div class="card-header"><h1>Catering Booking List</h1></div>
                    <div class="card-body">
                    
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Catering Booking ID</th>
                                        <th>Catering Booking Theme</th>
                                        <th>Catering Booking Type</th>
                                        <th>Catering Booking Date</th>
                                        <th>Customer Name</th>
                                        <th>Email</th> 
                                        <th>Phone Number</th> 
                                        <th>Food Order </th> 
                                        <th>Remarks</th> 
                                        <th>Remarks</th> 
                                </thead>
                                </thead>
                                <tbody>
                               
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="btn-box">
            <a href="customerviewallproduct">
                View All products
            </a>
            <a href="add-booking" class="option1">
            Add New Item
         </a>
        </div>
    </div>
    
    </body>

</html>