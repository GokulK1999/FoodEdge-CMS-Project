<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        return view('payment.index');
    }

public function checkInvoice(Request $request)
{
    $invoiceId = $request->input('invoice_id');
    
    // Simulating invoice presence
    $invoice = [
        'id' => $invoiceId,
        'items' => [
            ['name' => 'Chinese Cuisine', 'quantity' => 2, 'price' => 15.00],
            ['name' => 'Malay Cuisine', 'quantity' => 1, 'price' => 12.50],
            // Add more items as needed
        ],
        'total' => 0
    ];

    // Calculate total
    foreach ($invoice['items'] as $item) {
        $invoice['total'] += $item['quantity'] * $item['price'];
    }

    if ($invoice) {
        return view('payment.details', ['invoice' => $invoice]);
    } else {
        return redirect()->route('payment.index')->with('error', 'Invoice not found!');
    }
}

}

