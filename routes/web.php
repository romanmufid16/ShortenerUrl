<?php

use App\Livewire\UrlShortener;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::post('/', UrlShortener::class);
