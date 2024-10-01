<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/bookingPage', function () {
//     return view('bookingPage');
// });

// Route::get('/map', [MapController::class, 'generateMapIframe']);

Route::get('/bookingPage', [MapController::class, 'showMap']);



