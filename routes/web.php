<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ViewItemDetailsController;
use App\Http\Controllers\AddItemController;
use App\Http\Controllers\EditItemDetailsController;


// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('item-details', [ViewItemDetailsController::class,'viewItemDetails']);
Route::get('edit-item-details', [EditItemDetailsController::class,'editItemDetails']);
Route::put('update-details/{id}', [EditItemDetailsController::class, 'updateItemDetails'])->name('update-details');
Route::get('delete-item-details/{id}', [EditItemDetailsController::class,'deleteItemDetails']);
Route::get('image-form', [ImageUploadController::class, 'index']);
Route::post('upload', [ImageUploadController::class, 'upload']);
Route::post('submit-item', [AddItemController::class, 'addItem'])->name('submit.item');
Route::get('add-item', [AddItemController::class, 'additemform']);
Route::get('view-menu-page', [HomeController::class, 'viewmenupage']);

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


Route::get('/',[HomeController::class,'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/redirect',[HomeController::class,'redirect']);


