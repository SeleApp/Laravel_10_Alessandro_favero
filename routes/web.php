<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/area-riservata', function () {
    return view('area-riservata');
})->middleware('auth')->name('area-riservata');
