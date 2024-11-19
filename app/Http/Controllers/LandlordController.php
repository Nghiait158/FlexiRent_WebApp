<?php

namespace App\Http\Controllers;
use App\Models\Landlord;
use App\Models\Property;
use App\Models\Booking;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class LandlordController extends Controller
{

    // ------------------ Frontend---------------

    public function index(){
        $currentUser = Auth::user();
        $currentLandlord = Landlord::where('id', $currentUser->id)->first();


        if (!$currentLandlord) {
            return redirect()->back()->with('error', 'No admin data found for this user.');
        }
        $properties = Property::where('landlord_id', $currentLandlord->landlord_id)->get();
        $bookings = [];

        foreach ($properties as $property) {
            // Fetch bookings for each property
            $bookings[$property->property_id] = Booking::where('property_id', $property->property_id)
            ->with('guest')
            ->with('property')
            ->get();
        }

        // $bookingOfPropertyhasStatus1 = Booking::with(['property', 'guest'])
        //     ->whereHas('property', function ($query) {
        //         $query->where('status', 1);
        //     })
        //     ->get();
        $bookingOfPropertyhasStatus1 = Booking::whereHas('property', function ($query) use ($currentLandlord) {
            $query->where('landlord_id', $currentLandlord->landlord_id);
        })
        ->where('status', 1)
        ->with('property')
        ->get();


                             
        $data = [
            'currentLandlord' => $currentLandlord,
            'properties'=>$properties,
            'bookings'=>$bookings,
            'bookingOfPropertyhasStatus1'=>$bookingOfPropertyhasStatus1,
        ];
        // dd($data);
        return view('landlord.dashboard', $data);
    }
    public function updateEmailLandlord(Request $request, $landlord_id ){
        $data= $request->all();
        $Landlord = Landlord::with('user')->find($landlord_id );
        if (!$Landlord) {
            return redirect()->back()->withErrors(['error' => 'Landlord not found']);
        }
        // $Landlord->landlord_id= $data['landlord_id'];
       
        $Landlord->user->email = $data['email'];

        $Landlord->user->save();
        Session::put('message','Update your email successful');
        return Redirect::to('landlord/dashboard');
    }
    public function updatestatusBooking(Request $request, $booking_id ){
        $data= $request->all();
        $booking = Booking::find($booking_id );
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
        Session::put('message','Update status booking successful');
        return Redirect::to('landlord/dashboard');
    }

    public function updateLandlordDashboard(Request $request, $landlord_id ){
        $data= $request->all();
        $Landlord = Landlord::with('user')->find($landlord_id );
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
        Session::put('message','Update your information successful');
        return Redirect::to('landlord/dashboard');
    }


    // Register Property fo Landlord
    public function addPropertyAddress(){
        return view('landlord.add_property_address');   
    }
    public function storePropertyAddress(Request $request){
        $data = $request->validate([
            'address-input' => 'required|string',
        ]);
        session(['address' => $data]);
        return redirect('landlord/add_property_details');
    }


    public function addPropertyDetails(){
        $address = session('address', []);
        // dd($Amenities);
        return view('landlord.add_property_details', ['address' => $address]);
        // return view('landlord.add_property_details');
    }
    public function storePropertyDetails(Request $request){
        $data = $request->validate([
            'area' => 'required|numeric',
            'accommodation_type' => 'required|string|max:255',
            'floor' => 'required|integer',
            'guest_capacity' => 'required|integer',
            'room'=> 'required|integer',

        ]);
        session(['details' => $data]);

        return redirect('landlord/add_property_services');
    }

    public function addPropertyServices(){
        return view('landlord.add_property_services');
    }
    public function storePropertyServices(Request $request){
        $data = $request->validate([
            'wifi' => 'nullable|boolean',
            'internetSpeed' => 'nullable|integer',
        ]);
        session(['services' => $data]);

        return redirect('landlord/add_property_amenities');
    }


    public function addPropertyAmenities(){
        return view('landlord.add_property_amenities');
    }
    public function storePropertyAmenities(Request $request) {
        $defaultValues = [
            'TV' => 0,
            'Coffee_machine' => 0,
            'Dryer' => 0,
            'Phone' => 0,
            'Dish' => 0,
            'Fridge' => 0,
            'Kettle' => 0,
            'Wardrobe' => 0,
            'Iron' => 0,
            'Work_desk' => 0,
            'Washing_Machine' => 0, 
            'Fireplace' => 0,
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
    

    public function addPropertyImages(){
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
    
    


    public function addPropertyDescribe(){
        $Images = session('Images', []);
        return view('landlord.add_property_describe', ['Images' => $Images]);
    }
    public function storePropertyDescribe(Request $request){
        $data = $request->validate([
            'ListingTitle' => 'required|string|max:255',
            'education_and_community' => 'nullable|string|max:500', // Optional and string with a length limit
            'description' => 'required|string|max:1000', // Required, must be a string, with a length limit

        ]);
        session(['Describe' => $data]);


        return redirect('landlord/add_property_price');
    }

    public function addPropertyPrice(){
        $Describe = session('Describe', []);
        return view('landlord.add_property_price', ['Describe' => $Describe]);
    }
    public function storePropertyPrice(Request $request){
        $data = $request->validate([
            
            'price_per_month'=>'required|numeric|min:0',
            'security_deposit'=>'required|numeric|min:0',
            'cleaning_fee'=>'required|numeric|min:0',

        ]);
        session(['Prices' => $data]);

        return redirect('landlord/add_property_rules');
    }

    public function addPropertyRules(){
        $prices = session('Prices', []);
        // dd($data); 
        return view('landlord.add_property_rules', ['prices' => $prices]);
    }
    public function storePropertyRules(Request $request){
        $data = $request->validate([
            'petsAllowed' => 'string|required', 
            'smokingAllowed' => 'string|required',
            'rules' => 'string|nullable', 
        ]);
        session(['Rules' => $data]);
        
        return redirect('/test');
    }
    public function showAllData(){
        // dd(session()->all());
        $data = [
            'address' => session('property_address', []),
            'details' => session('property_details', []),
            'services' => session('property_services', []),
            'amenities' => session('property_amenities', []),
            'images' => session('property_images', []),
            'describe' => session('property_describe', []),
            'rules' => session('property_rules', []), 
        ];
        dd($data);
        return view('landlord.show_all_register_data', compact('data'));
    }

    // ----------------------Backend--------------
    public function manage_landlord(){  
        $allLandlord = Landlord::with('user')->get();
        return view('admin.manage_landlord', compact('allLandlord'));
    }
    public function editLandlord($landlord_id){
        $editLandlord = Landlord::with(relations: 'user')->find($landlord_id );
        $data = [
            'editLandlord' => $editLandlord,
        ];
        return view('admin.edit_Landlord', $data);
    }
    public function updateLandlord(Request $request, $landlord_id ){
        $data= $request->all();
        $Landlord = Landlord::with('user')->find($landlord_id );
        if (!$Landlord) {
            return redirect()->back()->withErrors(['error' => 'Landlord not found']);
        }
        // $Landlord->landlord_id= $data['landlord_id'];
        $Landlord->first_name = $data['first_name'];
        $Landlord->last_name = $data['last_name'];
        $Landlord->user->email = $data['email'];
        
        $Landlord->save();
        Session::put('message','Update Landlord successful');
        return Redirect::to('manage_landlord');
    }
    public function deleteLandlord($landlord_id ){
        $Landlord = Landlord::with('user')->find($landlord_id );
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
