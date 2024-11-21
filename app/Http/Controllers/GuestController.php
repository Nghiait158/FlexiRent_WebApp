<?php

namespace App\Http\Controllers;
use App\Models\Guest;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
class GuestController extends Controller
{
    // ------------------Frontend------------
    public function index(){
        return view('guest.dashboard');
    }
    public function sendDatafromPropertyDetail(Request $request, $property_id){
        $propertyDetail = Property::find($property_id);
        $from = $request->input('from');
        $to = $request->input('to');
        $guestCount = $request->input('guest_count');
        $data = [
            'from' => $from,
            'to' => $to,
            'guestCount' => $guestCount,
            // 'property_id' => $property_id,
            'propertyDetail'=>$propertyDetail,
        ];
        $request->session()->put('checkout_data', $data);
        // dd($data);
        return view('guest.CheckoutPageA', $data);
    }


    // ----------------Backend-----------------

    public function manage_guest(){  
        $allGuest = Guest::with('user')->get();
        return view('admin.manage_guest', compact('allGuest'));
    }
    public function editGuest($guest_id){
        $editGuest = Guest::with('user')->find($guest_id );
        $data = [
            'editGuest' => $editGuest,
        ];
        return view('admin.edit_guest', $data);
    }
    public function updateGuest(Request $request, $guest_id ){
        $data= $request->all();
        $guest = Guest::with('user')->find($guest_id );
        if (!$guest) {
            return redirect()->back()->withErrors(['error' => 'Guest not found']);
        }
        // $guest->guest_id= $data['guest_id'];
        $guest->first_name = $data['first_name'];
        $guest->last_name = $data['last_name'];
        $guest->phone_number = $data['phone_number'];
        $guest->purpose_of_stay = $data['purpose_of_stay'];
        $guest->user->email = $data['email'];
        
        $guest->save();
        Session::put('message','Update guest successful');
        return Redirect::to('manage_guest');
    }
    public function deleteGuest($guest_id ){
        $guest = Guest::with('user')->find($guest_id );
        if ($guest) {
            $user = $guest->user;
            if ($user) {
                $user->delete(); 
            }
            $guest->delete();
            Session::flash('message', 'Delete Guest successful');
        } else {
            Session::flash('message', 'Guest does not exist');
        }
        return Redirect::to('manage_guest');
    }
    


}
