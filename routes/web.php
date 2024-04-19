<?php

use App\Http\Controllers\CateringController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ReceiptController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ListingTest', function(){
    return view('testlistings', [
        'heading'=> 'Latest Listings',
        'listings'=> [
            [
                'id'=> 0,
                'title'=> '',
                'description' => ''
            ]
        ]
    ]);
});

// Define routes for handling invoices

//Route for invoices
Route::get('/invoices', [InvoiceController::class, 'index'])->name('invoice.index');
Route::get('/invoices/create', [InvoiceController::class, 'create'])->name('invoice.create');
//Route::post('/invoices', [InvoiceController::class, 'store'])->name('invoices.store');
//Route::get('/invoices/{id}', [InvoiceController::class, 'index'])->name('invoices.index');
Route::get('/invoices/{id}', [InvoiceController::class, 'show'])->name('invoice.show');
Route::get('/invoices/{id}/edit', [InvoiceController::class, 'edit'])->name('invoice.edit');
Route::put('/invoices/{id}', [InvoiceController::class, 'update'])->name('invoice.update');
Route::delete('/invoices/{id}', [InvoiceController::class, 'destroy'])->name('invoice.destroy');
//must define the destroy method here or the button will no work, this is the url link wth function ability
Route::post('/invoices', [InvoiceController::class, 'store'])->name('invoice.store');

Route::get('/users/', function()
{
    return view('invoicesindex');
});

//Route::get('/receipt', [ReceiptController::class, 'index'])->name('/receipt/index');



//

Route::get('/catering', [CateringController::class, 'index']); //index is the function in CateringController
