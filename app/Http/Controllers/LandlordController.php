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

        $propetyhasStatus1 = Property::where('status', '1')
                             ->where('landlord_id', $currentLandlord->landlord_id)
                             ->get();

                             
        $data = [
            'currentLandlord' => $currentLandlord,
            'properties'=>$properties,
            'bookings'=>$bookings,
            'propetyhasStatus1'=>$propetyhasStatus1,
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



    public function addPropertyAddress(){
        return view('landlord.add_property_address');
    }

    public function addPropertyDetails(){
        return view('landlord.add_property_details');
    }

    public function addPropertyServices(){
        return view('landlord.add_property_services');
    }

    public function addPropertyAmenities(){
        return view('landlord.add_property_amenities');
    }

    public function addPropertyImages(){
        return view('landlord.add_property_images');
    }

    public function addPropertyDescribe(){
        return view('landlord.add_property_describe');
    }

    public function addPropertyPrice(){
        return view('landlord.add_property_price');
    }

    public function addPropertyRules(){
        return view('landlord.add_property_rules');
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
