<?php

use Illuminate\Support\Facades\Route;

Route::get('/bookingPage', function () {
    return view('bookingPage');
});


Route::get('/', function () {
    return view('Homepage');
});
Route::get('/HomePage', function () {
    return view('Homepage');
});



