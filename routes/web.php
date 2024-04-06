<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageUploadController;
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('image-form', [ImageUploadController::class, 'index']);
Route::post('upload', [ImageUploadController::class, 'upload']);