<?php

namespace App\Http\Controllers;

use App\Models\Landlord;
use App\Models\Property;
use App\Models\PropertyImg;
use App\Models\PropertyAmenity;
use App\Models\Booking;
use App\Models\Amenity;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Mail\LandlordConfimBooking;
use Illuminate\Support\Facades\Mail;

class LandlordController extends Controller
{

    // ------------------ Frontend---------------

    public function index()
    {
        $currentUser = Auth::user();
        $currentLandlord = Landlord::where('id', $currentUser->id)->first();

        if (!$currentLandlord) {
            return redirect()->back()->with('error', 'No admin data found for this user.');
        }

        $propertiesIsVerify = Property::where('landlord_id', $currentLandlord->landlord_id)
            ->where('is_verified', true)
            ->get();

        foreach ($propertiesIsVerify as $property) {
            // Find and cancel expired bookings
            $expiredBookings = Booking::where('property_id', $property->property_id)
                ->where('status', 'confirmed')
                ->where('check_out', '<=', now())
                ->get();

            foreach ($expiredBookings as $booking) {
                $booking->status = 'cancelled';
                $booking->save();
            }

            // Check for active bookings to set property status
            $hasActiveBookings = Booking::where('property_id', $property->property_id)
                ->where('status', 'confirmed')
                ->where('check_out', '>=', now())
                ->exists();

            $property->status = $hasActiveBookings ? '1' : '0';
            $property->save();
        }

        $bookings = [];
        foreach ($propertiesIsVerify as $property) {
            $propertyBookings = Booking::where('property_id', $property->property_id)
                ->with('guest')
                ->with('property')
                ->get();

            $bookings[$property->property_id] = $propertyBookings;
        }

        $bookingOfPropertyhasStatus1 = Booking::whereHas('property', function ($query) use ($currentLandlord) {
            $query->where('landlord_id', $currentLandlord->landlord_id)
                ->where('status', 1);
        })
            ->where('status', 'confirmed')
            ->with('property')
            ->get();

        $data = [
            'currentLandlord' => $currentLandlord,
            'propertiesIsVerify' => $propertiesIsVerify,
            'bookings' => $bookings,
            'bookingOfPropertyhasStatus1' => $bookingOfPropertyhasStatus1,
        ];

        return view('landlord.dashboard', $data);
    }

    public function updateEmailLandlord(Request $request, $landlord_id)
    {
        $data = $request->all();
        $Landlord = Landlord::with('user')->find($landlord_id);
        if (!$Landlord) {
            return redirect()->back()->withErrors(['error' => 'Landlord not found']);
        }
        // $Landlord->landlord_id= $data['landlord_id'];

        $Landlord->user->email = $data['email'];

        $Landlord->user->save();
        Session::put('message', 'Update your email successful');
        return Redirect::to('landlord/dashboard');
    }
    public function updatestatusBooking(Request $request, $booking_id)
    {
        $data = $request->all();
        $booking = Booking::find($booking_id);
        if (!$booking) {
            return redirect()->back()->withErrors(['error' => 'booking not found']);
        }
        // update other booking status is canncelled
        Booking::where('property_id', $booking->property_id)
            ->where('booking_id', '!=', $booking_id) // Exclude the current booking
            ->update(['status' => 'cancelled']);

        $booking->status = 'confirmed';
        // dd($matchingProperties);

        //update status of property 
        $matchingProperties = Property::where('property_id', $booking->property_id)
            ->update(['status' => '1']);


        $booking->save();



        $guest = $booking->guest;

        if ($guest && $guest->user) {
            $email = $guest->user->email;
        } else {
            return redirect()->back()->withErrors(['error' => 'Guest or user email not found']);
        }
        // dd($email);
        // $emailsContent = [
        //     'message' => 'Your booking has been confirmed.',
        // ];

        Mail::to($guest->user->email)->send(new LandlordConfimBooking($booking));
        Session::put('message', 'Update status booking successful');
        return Redirect::to('landlord/dashboard');
    }

    public function updateLandlordDashboard(Request $request, $landlord_id)
    {
        $data = $request->all();
        $Landlord = Landlord::with('user')->find($landlord_id);
        if (!$Landlord) {
            return redirect()->back()->withErrors(['error' => 'Landlord not found']);
        }
        // $Landlord->landlord_id= $data['landlord_id'];
        $Landlord->first_name = $data['first_name'];
        $Landlord->last_name = $data['last_name'];
        // $Landlord->user->email = $data['email'];
        $Landlord->phonenumber = $data['phonenumber'];
        $Landlord->nationality = $data['nationality'];

        $Landlord->save();
        Session::put('message', 'Update your information successful');
        return Redirect::to('landlord/dashboard');
    }


    // Register Property fo Landlord
    public function addPropertyAddress()
    {
        return view('landlord.add_property_address');
    }
    public function storePropertyAddress(Request $request)
    {
        $data = $request->validate([
            'address-input' => 'required|string',
        ]);
        session(['address' => $data]);
        return redirect('landlord/add_property_details');
    }


    public function addPropertyDetails()
    {
        $address = session('address', []);
        // dd($Amenities);
        return view('landlord.add_property_details', ['address' => $address]);
        // return view('landlord.add_property_details');
    }
    public function storePropertyDetails(Request $request)
    {
        $data = $request->validate([
            'area' => 'required|numeric',
            'accommodation_type' => 'required|string|max:255',
            'floor' => 'required|integer',
            'guest_capacity' => 'required|integer',
            'bedroom' => 'required|integer',
            'bathroom' => 'required|integer',
        ]);
        session(['details' => $data]);

        return redirect('landlord/add_property_services');
    }

    public function addPropertyServices()
    {
        return view('landlord.add_property_services');
    }
    public function storePropertyServices(Request $request)
    {
        $data = $request->validate([
            'wifi' => 'nullable|in:1,0',
            'internetSpeed' => 'nullable|integer',
            'elevator' => 'nullable|in:1,0',
        ]);
        session(['services' => $data]);

        return redirect('landlord/add_property_amenities');
    }


    public function addPropertyAmenities()
    {
        return view('landlord.add_property_amenities');
    }
    public function storePropertyAmenities(Request $request)
    {
        $defaultValues = [
            'TV' => 0,
            'Work_desk' => 0,
            'Phone' => 0,
            'Dish' => 0,
            'Fridge' => 0,
            'Kettle' => 0,
            'Washing_Machine' => 0,
            'Dryer' => 0,
            'Coffee_machine' => 0,
            'Iron' => 0,
            'Fireplace' => 0,
            'Wardrobe' => 0,
        ];

        // Validate the request data
        $data = $request->validate([
            'TV' => 'nullable|boolean',
            'Coffee_machine' => 'nullable|boolean',
            'Dryer' => 'nullable|boolean',
            'Phone' => 'nullable|boolean',
            'Dish' => 'nullable|boolean',
            'Fridge' => 'nullable|boolean',
            'Kettle' => 'nullable|boolean',
            'Wardrobe' => 'nullable|boolean',
            'Iron' => 'nullable|boolean',
            'Work_desk' => 'nullable|boolean',
            'Washing_Machine' => 'nullable|boolean',
            'Fireplace' => 'nullable|boolean',
        ]);

        // Merge defaults with validated data
        $finalData = array_merge($defaultValues, $data);

        // Store merged data in session
        session(['Amenities' => $finalData]);

        return redirect('landlord/add_property_images');
    }


    public function addPropertyImages()
    {
        // $Amenities = session('Amenities', []);
        // dd($Amenities);
        return view('landlord.add_property_images');
    }
    public function storePropertyImages(Request $request)
    {
        // $data = $request->validate([
        //     'imageChoice' => 'required|in:file,text',
        //     'loImgPath' => 'required_if:imageChoice,file|file|mimes:jpg,jpeg,png|max:2048',
        //     'locationImgUrl' => 'required_if:imageChoice,text|url',
        // ]);
        $data = $request->all();
        if ($data['imageChoice'] === 'text') {

            $path = $data['locationImgUrl'];
        }
        // elseif ($data['imageChoice'] === 'file') {

        //     if ($request->hasFile('loImgPath') && $request->file('loImgPath')->isValid()) {
        //         $get_image = $request->file('loImgPath');
        //         $new_image_name = time() . '_' . $get_image->getClientOriginalName();
        //         $get_image->move(public_path('Frontend/Image/PropertyImages'), $new_image_name);
        //         $path = '/Frontend/Image/PropertyImages/' . $new_image_name;
        //     } else {
        //         $path= 'null';
        //         return back()->withErrors(['loImgPath' => 'The uploaded file is invalid.']);
        //     }
        // }



        $data = [
            'imageChoice' => $data['imageChoice'],
            'path' => $path,
        ];
        session(['Images' => $data]);

        return redirect('landlord/add_property_describe');
    }




    public function addPropertyDescribe()
    {
        $Images = session('Images', []);
        return view('landlord.add_property_describe', ['Images' => $Images]);
    }
    public function storePropertyDescribe(Request $request)
    {
        $data = $request->validate([
            'ListingTitle' => 'required|string|max:255',
            'view' => 'required|string|max:255',
            'education_and_community' => 'nullable|string|max:500', // Optional and string with a length limit
            'description' => 'required|string|max:1000', // Required, must be a string, with a length limit
        ]);
        session(['Describe' => $data]);


        return redirect('landlord/add_property_price');
    }

    public function addPropertyPrice()
    {
        $Describe = session('Describe', []);
        return view('landlord.add_property_price', ['Describe' => $Describe]);
    }
    public function storePropertyPrice(Request $request)
    {
        $data = $request->validate([

            'price_per_month' => 'required|numeric|min:0',
            'security_deposit' => 'required|numeric|min:0',
            'cleaning_fee' => 'required|numeric|min:0',

        ]);
        session(['Prices' => $data]);

        return redirect('landlord/add_property_rules');
    }

    public function addPropertyRules()
    {
        $prices = session('Prices', []);
        // dd($data); 
        return view('landlord.add_property_rules', ['prices' => $prices]);
    }
    public function storePropertyRules(Request $request)
    {
        $data = $request->validate([
            'petsAllowed' => 'string|required',
            'smokingAllowed' => 'string|required',
            'rules' => 'string|nullable',
        ]);
        session(['Rules' => $data]);

        return redirect('landlord/showAllRegisterData');
    }
    public function showAllData()
    {
        // dd(session()->all());
        $rules = session('Rules', []);
        $prices = session('Prices', []);
        $describe = session('Describe', []);
        $Images = session('Images', []);
        $address = session('address', []);
        $details = session('details', []);
        $services = session('services', []);
        $Amenities = session('Amenities', []);
        $currentUser = Auth::user();
        $currentLandlord = Landlord::where('id', $currentUser->id)->first();

        $data = [
            'rules' => $rules,
            'prices' => $prices,
            'describe' => $describe,
            'address' => $address,
            'details' => $details,
            'services' => $services,
            'Amenities' => $Amenities,
            'Images' => $Images,
            // 'currentLandlord' => $currentLandlord,
        ];

        // dd($data);
        return view('landlord.showAllRegisterData', [
            'data' => $data,
            'currentLandlord' => $currentLandlord,
        ]);
    }

    public function savePropertyLandlord(Request $request, $landlord_id)
    {
        $data = $request->all();
        $property = new Property();

        $property->landlord_id = $landlord_id;
        $property->location = $data['address'];

        $property->area = $data['area'];
        $property->accommodation_type = $data['accommodation_type'];
        $property->floor = $data['floor'];
        $property->guest_capacity = $data['guest_capacity'];
        $property->nbedrooms = $data['bedroom'];
        $property->nbathrooms = $data['bathroom'];

        $property->wifi = $data['wifi_checkbox'] ?? null;
        $property->internetSpeed = $data['internetSpeed'] ?? null;
        $property->elevator = $data['elevator'] ?? null;

        $property->property_name = $data['listing_title'];
        $property->description = $data['description'];
        $property->education_and_community = $data['education_and_community'];

        $property->price_per_month = $data['price_per_month'];
        $property->security_deposit = $data['security_deposit'];
        $property->cleaning_fee = $data['cleaning_fee'];

        $property->petsAllowed = $data['pets_allowed'];
        $property->smokingAllowed = $data['smoking_allowed'];
        $property->rules = $data['rules'];
        $property->view = $data['listing_view'];

        $property->save();

        // Handle image uploads
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagePath = $image->store('property_images', 'public');

                $propertyImage = new PropertyImg([
                    'propertyImg_name' => $image->getClientOriginalName(),
                    'path' => $imagePath,
                ]);

                $property->images()->save($propertyImage);
            }
        }

        if (isset($data['amenities']) && is_array($data['amenities'])) {
            $selectedAmenityIds = array_map('intval', $data['amenities']);
            $property->amenities()->sync($selectedAmenityIds);
        }

        Session::put('message', 'Add property successfully!!!');
        Session::put('address', $data['address']);
        return Redirect::to('landlord/savedPropertylandlord');
    }

    public function savedPropertylandlord()
    {
        $address = Session::get('address', 'No address provided');
        return view('landlord.savedPropertylandlord', compact('address'));
    }

    public function editProperty()
    {
        return view('landlord.edit_property');
    }
    public function listProperty()
{
    $currentUser = Auth::user();
    $currentLandlord = Landlord::where('id', $currentUser->id)->first();
    $properties = Property::where('landlord_id', $currentLandlord->landlord_id)->get();

    foreach ($properties as $property) {
        // Check for active bookings to set property status
        $hasActiveBookings = Booking::where('property_id', $property->property_id)
            ->where('status', 'confirmed')
            ->where('check_out', '>=', now())
            ->exists();

        $property->status = $hasActiveBookings ? '1' : '0';
        $property->save();
    }

    return view('landlord.myProperty', compact('properties'));
}



    public function deleteLandlordProperty($property_id)
    {
        try {
            Log::info('Attempting to delete property: ' . $property_id); // Debug log

            // Fetch the property by its ID
            $property = Property::findOrFail($property_id);

            Log::info('Found property: ' . $property->property_id); // Debug log

            // Get current landlord
            $currentUser = Auth::user();
            $currentLandlord = Landlord::where('id', $currentUser->id)->first();

            // Check authorization
            if ($property->landlord_id != $currentLandlord->landlord_id) {
                Log::warning('Unauthorized deletion attempt'); // Debug log
                return redirect()->back()->with('error', 'You are not authorized to delete this property');
            }

            // Begin transaction
            DB::beginTransaction();
            try {
                // Delete related records
                PropertyImg::where('property_id', $property_id)->delete();
                PropertyAmenity::where('property_id', $property_id)->delete();

                // Delete the property
                $property->delete();

                DB::commit();
                Log::info('Property deleted successfully'); // Debug log

                return redirect()->back()->with('success', 'Property deleted successfully');
            } catch (\Exception $e) {
                DB::rollBack();
                Log::error('Error in transaction: ' . $e->getMessage()); // Debug log
                throw $e;
            }
        } catch (\Exception $e) {
            Log::error('Error deleting property: ' . $e->getMessage()); // Debug log
            return redirect()->back()->with('error', 'Error deleting property: ' . $e->getMessage());
        }
    }

    public function editLandlordProperty($property_id)
    {
        $editProperty = Property::with('amenities')->findOrFail($property_id);
        $landlords = Landlord::all();
        $amenity = Amenity::all();
        $data = [
            'amenity' => $amenity,
            'editProperty' => $editProperty,
            'landlords' => $landlords,
        ];
        return view('landlord/edit_property', $data);
    }

    public function updateLandlordProperty(Request $request, $property_id)
{
    $data = $request->all();

    // Find the property by ID
    $property = Property::find($property_id);
    if (!$property) {
        return redirect()->back()->withErrors(['error' => 'Property not found']);
    }

    // Update existing fields
    $property->property_name = $data['property_name'];
    $property->landlord_id = $data['landlord_id'];
    $property->location = $data['location'];
    $property->district = $data['district'];
    $property->city = $data['city'];
    $property->nbedrooms = $data['nbedrooms'];
    $property->nbathrooms = $data['nbathrooms'];
    $property->area = $data['area'];
    $property->description = $data['description'];
    $property->available = $data['available'];
    $property->view = $data['view'];
    $property->floor = $data['floor'];
    $property->elevator = $data['elevator'];
    $property->price_per_month = $data['price_per_month'];
    $property->guest_capacity = $data['guest_capacity'];
    

    // Update missing fields if they are present in the request
    if (isset($data['location_details'])) {
        $property->location_details = $data['location_details'];
    }
    if (isset($data['education_and_community'])) {
        $property->education_and_community = $data['education_and_community'];
    }
    if (isset($data['status'])) {
        $property->status = $data['status']; // Ensure this is either '1' or '0'
        Log::info('Status updated to: ' . $data['status']);
    }
    if (isset($data['accommodation_type'])) {
        $property->accommodation_type = $data['accommodation_type'];
    }
    if (isset($data['room'])) {
        $property->room = $data['room'];
    }
    if (isset($data['wifi'])) {
        $property->wifi = $data['wifi']; // Ensure this is either '1' or '0'
    }
    if (isset($data['internetSpeed'])) {
        $property->internetSpeed = $data['internetSpeed'];
    }

    // Save the updated property
    $property->save();

    // Handle amenities if they are present in the request
    if (!empty($data['amenities'])) {
        // Get valid amenities from the database
        $validatedAmenities = Amenity::whereIn('amenity_id', $data['amenities'])->pluck('amenity_id')->toArray();

        // Sync amenities with the property
        $property->amenities()->sync($validatedAmenities);
    } else {
        // Detach amenities if none are provided
        $property->amenities()->detach();
    }

    // Set success message in session
    Session::put('message', 'Update property successful');

    // Redirect to the property management page
    return Redirect::to('landlord/myProperty');
}

public function manageLandlordPropertyImg($property_id) {
    $property = Property::find($property_id);
    if (!$property) {
        return redirect()->back()->with('error', 'Property not found.');
    }
    $allImgOfProperty = PropertyImg::where('property_id', $property_id)->get();
    $data = [
        'allImgOfProperty' => $allImgOfProperty,
        'property' => $property,
    ];
    return view('landlord.manage_landlord_property_img', $data);
}

public function addLandlordPropertyImg($property_id) {
    $property = Property::find($property_id);
    if (!$property) {
        return redirect()->back()->with('error', 'Property not found.');
    }
    $data = [
        'property' => $property,
    ];
    return view('landlord.add_landlord_property_img', $data);
}

public function saveLandlordPropertyImg(Request $request, $property_id) {
    $data = $request->all();
    $img = new PropertyImg();

    $img->propertyImg_name = $data['propertyImg_name'];
    $img->property_id = $property_id;

    if (!empty($data['PropertyImgUrl'])) {
        $img->path = $data['PropertyImgUrl'];
    }

    $img->save();
    Session::put('message', 'Image uploaded successfully');
    return Redirect::to('manage_landlord_property_img/' . $property_id);
}

public function editLandlordPropertyImg($propertyImg_id) {
    $editPropertyImg = PropertyImg::find($propertyImg_id);
    $data = [
        'editPropertyImg' => $editPropertyImg,
    ];
    return view('landlord.edit_landlord_property_img', $data);
}

public function updateLandlordPropertyImg(Request $request, $propertyImg_id) {
    $data = $request->all();
    $img = PropertyImg::find($propertyImg_id);
    if (!$img) {
        return redirect()->back()->withErrors(['error' => 'Image not found']);
    }
    $img->propertyImg_name = $data['propertyImg_name'];

    if (!empty($data['PropertyImgUrl'])) {
        $img->path = $data['PropertyImgUrl'];
    }

    $img->save();
    Session::put('message', 'Image edited successfully');
    return Redirect::to('manage_landlord_property_img/' . $img->property_id);
}

public function deleteLandlordPropertyImg($propertyImg_id) {
    $img = PropertyImg::find($propertyImg_id);
    if ($img) {
        $img->delete();
        Session::flash('message', 'Image deleted successfully.');
    } else {
        Session::flash('message', 'Image does not exist');
    }
    return Redirect::to('manage_landlord_property_img/' . $img->property_id);
}



    // ----------------------Backend--------------
    public function manage_landlord()
    {
        $allLandlord = Landlord::with('user')->get();
        return view('admin.manage_landlord', compact('allLandlord'));
    }
    public function editLandlord($landlord_id)
    {
        $editLandlord = Landlord::with(relations: 'user')->find($landlord_id);
        $data = [
            'editLandlord' => $editLandlord,
        ];
        return view('admin.edit_Landlord', $data);
    }
    public function updateLandlord(Request $request, $landlord_id)
    {
        $data = $request->all();
        $Landlord = Landlord::with('user')->find($landlord_id);
        if (!$Landlord) {
            return redirect()->back()->withErrors(['error' => 'Landlord not found']);
        }
        // $Landlord->landlord_id= $data['landlord_id'];
        $Landlord->first_name = $data['first_name'];
        $Landlord->last_name = $data['last_name'];
        $Landlord->user->email = $data['email'];

        $Landlord->save();
        Session::put('message', 'Update Landlord successful');
        return Redirect::to('manage_landlord');
    }
    public function deleteLandlord($landlord_id)
    {
        $Landlord = Landlord::with('user')->find($landlord_id);
        if ($Landlord) {
            $user = $Landlord->user;
            if ($user) {
                $user->delete();
            }
            $Landlord->delete();
            Session::flash('message', 'Delete Landlord sucesfull');
        } else {
            Session::flash('message', 'Landlord does not exist');
        }
        return Redirect::to('manage_landlord');
    }
}
