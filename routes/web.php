<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ViewItemDetailsController;
use App\Http\Controllers\AddItemController;
use App\Http\Controllers\EditItemDetailsController;
use App\Http\Controllers\ReceiptController;
use App\Http\Controllers\InvoiceController;


Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified','client'])
    ->name('dashboard');

    Route::view('management', 'management')
    ->middleware(['auth', 'verified','management'])
    ->name('management');

    Route::view('operation', 'operation')
    ->middleware(['auth', 'verified','operation'])
    ->name('operation');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';


// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('item-details', [ViewItemDetailsController::class,'viewItemDetails']);
Route::get('edit-item-details', [EditItemDetailsController::class,'editItemDetails']);
Route::get('image-form', [ImageUploadController::class, 'index']);
Route::post('upload', [ImageUploadController::class, 'upload']);
Route::post('submit-item', [AddItemController::class, 'addItem'])->name('submit.item');
Route::get('add-item', [AddItemController::class, 'additemform']);
Route::get('view-menu-page', [HomeController::class, 'viewmenupage']);



Route::get('/menu',[HomeController::class,'index']);

Route::get('/redirect',[HomeController::class,'redirect']);



Route::get('/', function () {
    return view('main');
});

 
Route::resource('/receipt', ReceiptController::class);

Route::get('/register',[AuthController::class, 'register'])->name('register');

Route::post('/register',[AuthController::class, 'registerPost'])->name('register');

Route::get('/login',[AuthController::class, 'login'])->name('login');

Route::post('/login',[AuthController::class, 'loginPost'])->name('login');



Route::post('/invoices/{invoice}/pay', [InvoiceController::class, 'pay'])->name('invoice.pay');
Route::get('/invoices', [InvoiceController::class, 'index'])->name('invoice.index');
Route::get('/invoices/create', [InvoiceController::class, 'create'])->name('invoice.create');
Route::get('/invoices/{id}', [InvoiceController::class, 'show'])->name('invoice.show');
Route::get('/invoices/{id}/edit', [InvoiceController::class, 'edit'])->name('invoice.edit');
Route::put('/invoices/{id}', [InvoiceController::class, 'update'])->name('invoice.update');
Route::delete('/invoices/{id}', [InvoiceController::class, 'destroy'])->name('invoice.destroy');
//must define the destroy method here or the button will no work, this is the url link wth function ability
Route::post('/invoices', [InvoiceController::class, 'store'])->name('invoice.store');