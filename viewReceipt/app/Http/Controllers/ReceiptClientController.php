<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReceiptClientController extends Controller
{
    public function show()
{
    // Retrieving invoice details from session
    $invoice = session('invoice_details');

    // Clearing session after retrieving the details
    session()->forget('invoice_details');

    // Passing invoice details to the receipt view
    return view('receiptClient', ['invoice' => $invoice]);
}

}
