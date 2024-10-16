<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PropertyAmenitycontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookingPageController;
use App\Http\Controllers\LandlordController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminManageController;
use App\Http\Controllers\Amenitycontroller;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\BookingController; 
use App\Http\Controllers\PropertyImgController; 
use App\Http\Controllers\Propertycontroller;
use App\Http\Controllers\PropertyDetailsPageController;

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/dashboard', function () {
//     return view('dashboard');
// });
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

use App\Http\Controllers\DashboardController;

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
});


// Route::get('admin/dashboard',[AdminController::class,'index'])->
//         middleware(['auth','admin']);
// Route::get('guest/dashboard',[GuestController::class,'index'])->
//         middleware(['auth','guest']);
// Route::get('landlord/dashboard',[LandlordController::class,'index'])->
//         middleware(['auth','landlord']);


Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('admin/dashboard', [AdminController::class, 'currentAdmin']);
    Route::get('/admin', action: [AdminManageController::class, 'index']);
    Route::post('/updatecurrentAdmin/{adminID}', [AdminController::class, 'updatecurrentAdmin']);


    // -------------- Manage admin-----------
    Route::get('/manage_admin', [AdminController::class, 'manage_admin']);
    Route::get('/editAdmin/{admin_id}', [AdminController::class, 'editAdmin']);
    Route::post('/updateAdmin/{adminID}', [AdminController::class, 'updateAdmin']);
    Route::get('/deleteAdmin/{admin_id}', [AdminController::class, 'deleteAdmin']);

    // -------------Manage Landlord-----------
    Route::get('/manage_landlord', [LandlordController::class, 'manage_landlord']);
    Route::get('/editLandlord/{landlord_id}', [LandlordController::class, 'editLandlord']);
    Route::post('/updateLandlord/{landlord_id}', [LandlordController::class, 'updateLandlord']);
    Route::get('/deleteLandlord/{landlord_id}', [LandlordController::class, 'deleteLandlord']);

    // -------------- Manage Guest-------------
    Route::get('/manage_guest', [GuestController::class, 'manage_guest']);
    Route::get('/editGuest/{guest_id}', [GuestController::class, 'editGuest']);
    Route::post('/updateGuest/{guest_id}', [GuestController::class, 'updateGuest']);
    Route::get('/deleteGuest/{guest_id}', [GuestController::class, 'deleteGuest']);

    // Manage Amenities
    Route::get('/manage_amenity', [Amenitycontroller::class, 'manage_amenity']);
    Route::get('/editAmenity/{amenity_id}', [Amenitycontroller::class, 'editAmenity']);
    Route::post('/updateAmenity/{amenity_id}', [Amenitycontroller::class, 'updateAmenity']);
    Route::get('/deleteAmenity/{amenity_id}', [Amenitycontroller::class, 'deleteAmenity']);
    Route::get('/addAmenity', [Amenitycontroller::class, 'addAmenity']);
    Route::post('/saveAmenity', [Amenitycontroller::class, 'saveAmenity']);

    // Manage property
    Route::get('/manage_property', [Propertycontroller::class, 'manage_property']);
    Route::get('/editProperty/{property_id}', [Propertycontroller::class, 'editProperty']);
    Route::post('/updateProperty/{property_id}', [Propertycontroller::class, 'updateProperty']);
    Route::get('/deleteProperty/{property_id}', [Propertycontroller::class, 'deleteProperty']);
    Route::get('/addProperty', [Propertycontroller::class, 'addProperty']);
    Route::post('/saveProperty', [Propertycontroller::class, 'saveProperty']);

    // ---------Property Img-----------------
    Route::get('/manage_PropertyImg/{property_id}', [PropertyImgController::class, 'manage_PropertyImg']);
    Route::get('/editPropertyImg/{propertyImg_id}', [PropertyImgController::class, 'editPropertyImg']);
    Route::post('/updatePropertyImg/{propertyImg_id}', [PropertyImgController::class, 'updatePropertyImg']);
    Route::get('/deletePropertyImg/{propertyImg_id}', [PropertyImgController::class, 'deletePropertyImg']);
    Route::get('/addPropertyImg/{property_id}', [PropertyImgController::class, 'addPropertyImg']);
    Route::post('/savePropertyImg/{property_id}', [PropertyImgController::class, 'savePropertyImg']);


    // Manage Review
    Route::get('/manage_review', [ReviewController::class, 'manage_review']);
    Route::get('/editReview/{review_id}', [ReviewController::class, 'editReview']);
    Route::post('/updateReview/{review_id}', [ReviewController::class, 'updateReview']);
    Route::get('/deleteReview/{review_id}', [ReviewController::class, 'deleteReview']);
    Route::get('/addReview', [ReviewController::class, 'addReview']);
    Route::post('/saveReview', [ReviewController::class, 'saveReview']);

    // Manage Property Amenity
    Route::get('/manage_property_amenity', [PropertyAmenityController::class, 'manage_property_amenity']);
    Route::get('/editPropertyAmenity/{property_id}/{amenity_id}', [PropertyAmenityController::class, 'editPropertyAmenity']);
    Route::post('/updatePropertyAmenity/{property_id}/{amenity_id}', [PropertyAmenityController::class, 'updatePropertyAmenity']);
    Route::get('/deletePropertyAmenity/{property_id}/{amenity_id}', [PropertyAmenityController::class, 'deletePropertyAmenity']);
    Route::get('/addPropertyAmenity', [PropertyAmenityController::class, 'addPropertyAmenity']);
    Route::post('/savePropertyAmenity', [PropertyAmenityController::class, 'savePropertyAmenity']);


    // ---------Booking-----------------
    Route::get('/manage_booking', [BookingController::class, 'manage_booking']);
    Route::get('/editBooking/{booking_id}', [BookingController::class, 'editBooking']);
    Route::post('/updateBooking/{booking_id}', [BookingController::class, 'updateBooking']);
    Route::get('/deleteBooking/{booking_id}', [BookingController::class, 'deleteBooking']);
    Route::get('/addBooking', [BookingController::class, 'addBooking']);
    Route::post('/saveBooking', [BookingController::class, 'saveBooking']);



    
});


Route::middleware(['auth','guest','admin'])->group(function () {
    // Backend---------------
    Route::get('guest/dashboard', [GuestController::class, 'index']);


    // Frontend---------------
    Route::get('/CheckoutPageA', function () {
        return view('CheckoutPageA');
    });

    Route::get('/CheckoutPageB', function () {
        return view('CheckoutPageB');
    });
});


Route::middleware(['auth', 'landlord', 'admin'])->group(function () {
    Route::get('landlord/dashboard', [LandlordController::class, 'index']);
});


// ------FrontEnd------------------------
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

Route::get('/Contact', function () {
    return view('contactPage');
});
// Route::get('/CheckoutPageA', function () {
//     return view('CheckoutPageA');
// });

// Route::get('/CheckoutPageB', function () {
//     return view('CheckoutPageB');
// });

// Route::get('/map', [MapController::class, 'generateMapIframe']);

Route::post('/bookingPage', [BookingPageController::class, 'sendData'])->name('search.properties');
// Route::get('/search', [PropertyController::class, 'search'])->name('search.properties');
Route::get('/PropertyDetails', [PropertyDetailsPageController::class, 'showMap']);
