<?php

use Illuminate\Support\Facades\Route;

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
