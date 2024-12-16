<?php

use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PropertyAmenitycontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\BookingPageController;
use App\Http\Controllers\LandlordController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminManageController;
use App\Http\Controllers\Amenitycontroller;
use App\Http\Controllers\LogoutAndLoginAgain;
use Illuminate\Support\Facades\Session;

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
Route::get('logoutAndLoginAgain', [LogoutAndLoginAgain::class, 'index']);






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

    Route::get('/admin/unverified-properties', action: [AdminController::class, 'unverifiedProperties'])->name('admin.unverified-properties');
    Route::post('/admin/properties/{propertyId}/verify', [AdminController::class, 'verifyProperty'])->name('admin.properties.verify');

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


    // manage Contract
    Route::get('/manage_contract', [ContractController::class, 'manage_contract']);
    Route::get('/editContract/{contract_id}', [ContractController::class, 'editContract']);
    Route::post('/updateContract/{contract_id}', [ContractController::class, 'updateContract']);
    Route::get('/deleteContract/{contract_id}', [ContractController::class, 'deleteContract']);
    Route::get('/addContract', [ContractController::class, 'addContract']);
    Route::post('/saveContract', [ContractController::class, 'saveContract']);


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


Route::middleware(['auth', 'guest'])->group(function () {
    // Backend---------------
    Route::get('guest/dashboard', [GuestController::class, 'index']);
    Route::get('guest/myBookingPage', [GuestController::class, 'listMyBooking']);
    Route::delete('/deleteGuestBooking/{booking_id}', [GuestController::class, 'deleteGuestBooking']);

    Route::post('/updateGuestDashboard/{guest_id}', [GuestController::class, 'updateGuestDashboard']);
    Route::post('/updateEmailGuest/{guest_id}', [GuestController::class, 'updateEmailGuest']);

    // Frontend---------------
    Route::get('/CheckoutPageB/{property_id}', [GuestController::class, 'Booking']);
    Route::post('/savedBooking/{property_id}/{guest_id}', [GuestController::class, 'savedBooking']);

    Route::get('/thankBooking', function () {
        return view('guest.thankBooking');
    });

    // Route::get('/CheckoutPageB/{property_id}',  [GuestController::class, 'index'] {
    //     return view('CheckoutPageB');
    // });
});

Session::start();

Route::middleware(['auth', 'landlord'])->group(function () {
    Route::get('landlord/dashboard', [LandlordController::class, 'index']);
    Route::get('landlord/savedPropertylandlord', [LandlordController::class, 'savedPropertylandlord']);

    Route::post('/savePropertyLandlord/{landlord_id}', [LandlordController::class, 'savePropertyLandlord']);

    Route::get('landlord/edit_property', [LandlordController::class, 'editProperty'])->name('property.edit');
    Route::get('landlord/myProperty', [LandlordController::class, 'listProperty']);
    Route::delete('/deleteLandlordProperty/{property_id}', [LandlordController::class, 'deleteLandlordProperty']);
    Route::get('/editLandlordProperty/{property_id}', [LandlordController::class, 'editLandlordProperty']);
    Route::post('/updateLandlordProperty/{property_id}', [LandlordController::class, 'updateLandlordProperty']);

    Route::get('/manage_landlord_property_img/{property_id}', [LandlordController::class, 'manageLandlordPropertyImg']);
    Route::get('/addLandlordPropertyImg/{property_id}', [LandlordController::class, 'addLandlordPropertyImg']);
    Route::post('/saveLandlordPropertyImg/{property_id}', [LandlordController::class, 'saveLandlordPropertyImg']);
    Route::get('/editLandlordPropertyImg/{propertyImg_id}', [LandlordController::class, 'editLandlordPropertyImg']);
    Route::post('/updateLandlordPropertyImg/{propertyImg_id}', [LandlordController::class, 'updateLandlordPropertyImg']);
    Route::get('/deleteLandlordPropertyImg/{propertyImg_id}', [LandlordController::class, 'deleteLandlordPropertyImg']);
    

    Route::get('landlord/add_property_address', [LandlordController::class, 'addPropertyAddress'])->name('property.add.address');
    Route::post('/store_property_address', [LandlordController::class, 'storePropertyAddress'])->name('property.store.address');

    Route::get('landlord/add_property_details', [LandlordController::class, 'addPropertyDetails'])->name('property.add.details');
    Route::post('/store_property_details', [LandlordController::class, 'storePropertyDetails'])->name('property.store.details');

    Route::get('landlord/add_property_services', [LandlordController::class, 'addPropertyServices'])->name('property.add.services');
    Route::post('/store_property_services', [LandlordController::class, 'storePropertyServices'])->name('property.store.services');

    Route::get('landlord/add_property_amenities', [LandlordController::class, 'addPropertyAmenities'])->name('property.add.amenities');
    Route::post('/store_property_amenities', [LandlordController::class, 'storePropertyAmenities'])->name('property.store.amenities');

    Route::get('landlord/add_property_images', [LandlordController::class, 'addPropertyImages'])->name('property.add.images');
    Route::post('/store_property_images', [LandlordController::class, 'storePropertyImages'])->name('property.store.images');

    Route::get('landlord/add_property_describe', [LandlordController::class, 'addPropertyDescribe'])->name('property.add.describe');
    Route::post('/store_property_describe', [LandlordController::class, 'storePropertyDescribe'])->name('property.store.describe');

    Route::get('landlord/add_property_price', [LandlordController::class, 'addPropertyPrice'])->name('property.add.price');
    Route::post('/store_property_price', [LandlordController::class, 'storePropertyPrice'])->name('property.store.price');

    Route::get('landlord/add_property_rules', [LandlordController::class, 'addPropertyRules'])->name('property.add.rules');
    Route::post('landlord/store_property_rules', [LandlordController::class, 'storePropertyRules'])->name('property.store.rules');

    Route::get('landlord/showAllRegisterData', [LandlordController::class, 'showAllData'])->name('property.show.all');


    Route::post('/updateLandlordDashboard/{landlord_id}', [LandlordController::class, 'updateLandlordDashboard']);
    Route::post('/updateEmailLandlord/{landlord_id}', [LandlordController::class, 'updateEmailLandlord']);

    // ---- update status for booking 
    Route::post('/updatestatusBooking/{booking_id}', [LandlordController::class, 'updatestatusBooking']);
});


// ------FrontEnd------------------------
// Route::get('/', function () {
//     return view('Homepage');
// });
// Route::get('/HomePage', action: function () {
//     return view('Homepage');
// });
Route::get('/test', [HomepageController::class, 'index']);



Route::get('/HomePage', [HomepageController::class, 'showProperty']);


Route::get('/', [HomepageController::class, 'showProperty']);

Route::get('/Landlord', function () {
    return view('Landlords');
});

Route::get('/Blog', function () {
    return view('Blog');
});

Route::get('/PropertyDetails', function () {
    return view('PropertyDetails');
});
Route::post('/CheckoutPageA/{property_id}', [GuestController::class, 'sendDatafromPropertyDetail']);

Route::get('/Contact', function () {
    return view('contactPage');
});


Route::get('/thankFeedback', function () {
    return view('thankFeedback');
});
// Route::get('/CheckoutPageA', function () {
//     return view('CheckoutPageA');
// });

// Route::get('/CheckoutPageB', function () {
//     return view('CheckoutPageB');
// });

// Route::get('/map', [MapController::class, 'generateMapIframe']);

Route::match(['get', 'post'], '/bookingPage', [BookingPageController::class, 'handleRequest'])->name('bookingPage');
Route::post('/saveFeedback', [HomepageController::class, 'saveFeedback']);


// Route::get('/search', [PropertyController::class, 'search'])->name('search.properties');
Route::get('/PropertyDetails/{property_id}', [PropertyDetailsPageController::class, 'showData']);
