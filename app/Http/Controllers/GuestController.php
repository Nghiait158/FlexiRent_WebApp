<?php

namespace App\Http\Controllers;
use App\Models\Guest;
use App\Models\Booking;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Mail\UserNotificationMail;
use Illuminate\Support\Facades\Mail;
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
            'propertyDetail'=>$propertyDetail,
        ];
        $request->session()->put('checkout_data', $data);
        // dd($data);
        return view('guest.CheckoutPageA', $data);
    }
    public function Booking(Request $request, $property_id){
        $propertyDetail = Property::find($property_id);
        $from = $request->input('from');
        $to = $request->input('to');
        $Reserve = $request->input('Reserve');
        $currentUser = Auth::user();
        $currentGuest = Guest::where('id', $currentUser->id)->first();
        
        $guestCount = $request->input('guest_count');

        $data = [
            'Reserve' => $Reserve,
            'from' => $from,
            'to' => $to,
            'guestCount' => $guestCount,
            'propertyDetail'=>$propertyDetail,
            'currentGuest'=>$currentGuest,
        ];
        // dd($data);
        return view('guest.CheckoutPageB', $data);
    }

    public function savedBooking(Request $request, $property_id, $guest_id){
        $data= $request->all();
        $guest = Guest::with('user')->find($guest_id);
        if (!$guest) {
            return redirect()->back()->withErrors(['error' => 'Guest not found']);
        }
        // $guest->guest_id= $data['guest_id'];
        $guest->first_name = $data['fName'];
        $guest->last_name = $data['lName'];
        $guest->phone_number = $data['phone_number'];
        $guest->purpose_of_stay = $data['purpose_of_stay']??null;
        $guest->user->email = $data['email'];
        
        $guest->save();

        $property = Property::find($property_id);
        if (!$property) {
            return redirect()->back()->withErrors(['error' => 'Property not found']);
        }
    
        if ($property->status != 0 || !$property->is_verified) {
            return redirect()->back()->withErrors(['error' => 'Property is not available for booking']);
        }
        
        $booking = new Booking();
        $booking->property_id= $property_id;
        $booking->guest_id = $guest_id;
        $booking->check_in = $data['from'];
        $booking->check_out = $data['to'];
        $booking->nguests = $data['guest_count'];
        $booking->total_cost = $data['total_cost'];
        $booking->status = 'pending';
        $booking->PurposeOfStay = $data['flexRadioDefault'];
        $booking->purposeExplain = $data['purposeExplain'] ?? null;
        $booking->is_booking_for_other = $data['is_booking_for_other'] ?? 0;
        $booking->other_email = $data['other_email'] ?? null;
        $booking->other_name = $data['other_name'] ?? null;
        
        $booking->payment_method = $data['payment_method'];
        $booking ->save();
        $property = Property::find($property_id);
        if (!$property) {
            return redirect()->back()->withErrors(['error' => 'Property not found']);
        }
        $emailsContent = [
            'guestFname' => $guest->first_name,
            'guestPhone' => $guest->phone_number,
            'check_in' => $booking->check_in,
            'check_out' => $booking->check_out,
            'nguests' => $booking->nguests,
            'total_cost' => $booking->total_cost,
            'propertyName' => $property->property_name,
        ];
        Mail::to($guest->user->email)->send(new UserNotificationMail($emailsContent));
        return Redirect::to('');
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
