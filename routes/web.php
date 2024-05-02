<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['middleware' => 'auth'], function() {});
//Route for invoices - the arrangement matters pay index create show etc.
Route::post('/invoices/{invoice}/pay', [InvoiceController::class, 'pay'])->name('invoice.pay');
Route::get('/invoices', [InvoiceController::class, 'index'])->name('invoice.index');
Route::get('/invoices/create', [InvoiceController::class, 'create'])->name('invoice.create');
Route::get('/invoices/{id}', [InvoiceController::class, 'show'])->name('invoice.show');
Route::get('/invoices/{id}/edit', [InvoiceController::class, 'edit'])->name('invoice.edit')->middleware('checkUserRole');
Route::put('/invoices/{id}', [InvoiceController::class, 'update'])->name('invoice.update');
Route::delete('/invoices/{id}', [InvoiceController::class, 'destroy'])->name('invoice.destroy');
//must define the destroy method here or the button will no work, this is the url link wth function ability
Route::post('/invoices', [InvoiceController::class, 'store'])->name('invoice.store');


//Route::post('/invoices', [InvoiceController::class, 'store'])->name('invoices.store');
//Route::get('/invoices/{id}', [InvoiceController::class, 'index'])->name('invoices.index');

//Routes for receipts
Route::get('/receipts', [ReceiptController::class, 'index'])->name('receipt.index');
Route::get('/receipts/create', [ReceiptController::class, 'create'])->name('receipt.create');
Route::get('/receipts/{id}', [ReceiptController::class, 'show'])->name('receipt.show');
Route::get('/receipts/{id}/edit', [ReceiptController::class, 'edit'])->name('receipt.edit');
Route::put('/receipts/{id}', [ReceiptController::class, 'update'])->name('receipt.update');
Route::delete('/receipts/{id}', [ReceiptController::class, 'destroy'])->name('receipt.destroy');
Route::post('/receipts', [ReceiptController::class, 'store'])->name('receipt.store');
//

//Routes for customer
Route::get('/customers', [CustomerController::class, 'index'])->name('customer.index');
Route::get('/customers/create', [CustomerController::class, 'create'])->name('customer.create');
Route::get('/customers/{id}', [CustomerController::class, 'show'])->name('customer.show');
Route::get('/customers/{id}/edit', [CustomerController::class, 'edit'])->name('customer.edit');
Route::put('/customers/{id}', [CustomerController::class, 'update'])->name('customer.update');
Route::delete('/customers/{id}', [CustomerController::class, 'destroy'])->name('customer.destroy');
Route::post('/customers', [CustomerController::class, 'store'])->name('customer.store');

require __DIR__.'/auth.php';
