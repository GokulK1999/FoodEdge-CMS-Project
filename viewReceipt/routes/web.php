<?php
 
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\ReceiptController;
//use App\Http\Controllers\AuthController;
//use App\Http\Controllers\PaymentController;
//use App\Http\Controllers\ReceiptClientController;
use App\http\Controllers\ChartController;
use App\Http\Controllers\ReviewController;
use App\http\Controllers\PieChartController;
use App\http\Controllers\HighChartController;

Route::get('/review', [ReviewController::class, 'create']);
Route::post('/review', [ReviewController::class, 'store']);

Route::get('/piechart',[PieChartController::class, 'pieChart']);
Route::get('/chart',[ChartController::class,'userChart']);
Route::get('/highchart', [HighchartController::class, 'bookChart']);

/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('main');
});

 
Route::resource('/receipt', ReceiptController::class);

Route::get('/register',[AuthController::class, 'register'])->name('register');

Route::post('/register',[AuthController::class, 'registerPost'])->name('register');

Route::get('/login',[AuthController::class, 'login'])->name('login');

Route::post('/login',[AuthController::class, 'loginPost'])->name('login');

//use App\Http\Controllers\PaymentController;

Route::get('/payment', [PaymentController::class, 'index'])->name('payment.index');
Route::post('/payment/check', [PaymentController::class, 'checkInvoice'])->name('payment.check');

//Route::get('/receipt', [ReceiptClientController::class, 'show'])->name('receiptClient.show');
Route::get('/receipt/{id}/print', 'ReceiptController@printReceipt')->name('receipt.print');

*/
