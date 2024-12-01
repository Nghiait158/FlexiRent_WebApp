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
    public function index()
    {
        $currentUser = Auth::user();
        $currentGuest = Guest::where('id', $currentUser->id)->first();

        if (!$currentGuest) {
            return redirect()->back()->with('error', 'No admin data found for this user.');
        }

        $data = [
            'currentGuest' => $currentGuest,
        ];

        return view('guest.dashboard', $data);
    }
    public function sendDatafromPropertyDetail(Request $request, $property_id)
    {
        $propertyDetail = Property::find($property_id);
        $from = $request->input('from');
        $to = $request->input('to');
        $guestCount = $request->input('guest_count');
        $data = [
            'from' => $from,
            'to' => $to,
            'guestCount' => $guestCount,
            'propertyDetail' => $propertyDetail,
        ];
        $request->session()->put('checkout_data', $data);
        // dd($data);
        return view('guest.CheckoutPageA', $data);
    }
    public function Booking(Request $request, $property_id)
    {
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
            'propertyDetail' => $propertyDetail,
            'currentGuest' => $currentGuest,
        ];
        // dd($data);
        return view('guest.CheckoutPageB', $data);
    }

    public function savedBooking(Request $request, $property_id, $guest_id)
    {
        $data = $request->all();
        $guest = Guest::with('user')->find($guest_id);
        if (!$guest) {
            return redirect()->back()->withErrors(['error' => 'Guest not found']);
        }
        // $guest->guest_id= $data['guest_id'];
        $guest->first_name = $data['fName'];
        $guest->last_name = $data['lName'];
        $guest->phone_number = $data['phone_number'];
        $guest->purpose_of_stay = $data['purpose_of_stay'] ?? null;
        $guest->user->email = $data['email'];

        $guest->save();
        if ($guest->user) { // Ensure the Guest has an associated User
            $guest->user->email = $data['email'];
            $guest->user->save(); // Save the User changes
        }
        $property = Property::find($property_id);
        if (!$property) {
            return redirect()->back()->withErrors(['error' => 'Property not found']);
        }

        if ($property->status != 0 || !$property->is_verified) {
            return redirect()->back()->withErrors(['error' => 'Property is not available for booking']);
        }

        $booking = new Booking();
        $booking->property_id = $property_id;
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
        $booking->save();
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

    public function manage_guest()
    {
        $allGuest = Guest::with('user')->get();
        return view('admin.manage_guest', compact('allGuest'));
    }
    public function editGuest($guest_id)
    {
        $editGuest = Guest::with('user')->find($guest_id);
        $data = [
            'editGuest' => $editGuest,
        ];
        return view('admin.edit_guest', $data);
    }
    public function updateGuest(Request $request, $guest_id)
    {
        $data = $request->all();
        $guest = Guest::with('user')->find($guest_id);
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
        Session::put('message', 'Update guest successful');
        return Redirect::to('manage_guest');
    }
    public function deleteGuest($guest_id)
    {
        $guest = Guest::with('user')->find($guest_id);
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

    public function updateGuestDashboard(Request $request, $guest_id)
    {
        $data = $request->all();
        $Guest = Guest::with('user')->find($guest_id);
        if (!$Guest) {
            return redirect()->back()->withErrors(['error' => 'Guest not found']);
        }
        $Guest->first_name = $data['first_name'];
        $Guest->last_name = $data['last_name'];
        $Guest->phone_number = $data['phone_number'];
        $Guest->purpose_of_stay = $data['purpose_of_stay'];

        $Guest->save();
        Session::put('message', 'Update your information successful');
        return Redirect::to('guest/dashboard');
    }

    public function updateEmailGuest(Request $request, $guest_id)
    {
        $data = $request->all();

        $validatedData = $request->validate([
            'new_email' => 'required|email|max:255',
            'confirm_new_email' => 'required|same:new_email',
            'old_email' => 'required|email|max:255',
        ]);

        $Guest = Guest::with('user')->find($guest_id);

        if (!$Guest) {
            return redirect()->back()->withErrors(['error' => 'Guest not found']);
        }

        if ($Guest->user->email !== $data['old_email']) {
            return redirect()->back()->withErrors(['error' => 'Old email does not match our records.']);
        }

        $Guest->user->email = $data['new_email'];

        $Guest->user->save();

        Session::put('message', 'Email updated successfully.');
        return Redirect::to('guest/dashboard');
    }


    public function listMyBooking()
    {
        $currentUser = Auth::user();
        $currentGuest = Guest::where('id', $currentUser->id)->first();

        $bookings = Booking::with(['property', 'guest'])
            ->where('guest_id', $currentGuest->guest_id)
            ->get();

        return view('guest.myBookingPage', compact('bookings'));
    }
    
}
