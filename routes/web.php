<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingPageController;
use App\Http\Controllers\PropertyDetailsPageController;

use App\Http\Controllers\MapController;
// --------FrontEnd-------------------------
Route::get('/', function () {
    return view('Homepage');
});
Route::get('/HomePage', function () {
    return view('Homepage');
});

Route::get('/Landlord', function () {
    return view('Landlords');
});

Route::get('/Blog', function () {
    return view('Blog');
});

Route::get('/PropertyDetails', function () {
    return view('PropertyDetails');
});
Route::get('/CheckoutPageA', function () {
    return view('CheckoutPageA');
});

// Route::get('/map', [MapController::class, 'generateMapIframe']);

Route::get('/bookingPage', [BookingPageController::class, 'showMap']);
Route::get('/PropertyDetails', [PropertyDetailsPageController::class, 'showMap']);



