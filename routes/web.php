<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\HomeController;
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('image-form', [ImageUploadController::class, 'index']);
Route::post('upload', [ImageUploadController::class, 'upload']);

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

Route::get('/multiuploads', 'UploadController@uploadForm');
Route::post('/multiuploads', 'UploadController@uploadSubmit');