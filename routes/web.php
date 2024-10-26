<?php

use App\Http\Controllers\UrlController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UrlController::class, 'index'])->name('index');
Route::post('/', [UrlController::class, 'store'])->name('storeUrl');

