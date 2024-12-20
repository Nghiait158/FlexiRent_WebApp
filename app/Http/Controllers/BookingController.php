<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Property;
use App\Models\Guest;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    // ------------------Frontend------------



    // ----------------Backend-----------------

    public function manage_booking()
    {
        $allBooking = Booking::all();
        return view('admin.manage_booking', compact('allBooking'));
    }
    public function addBooking()
    {
        $listProperty = Property::all();
        $listGuest = Guest::all();
        $data = [
            'listProperty' => $listProperty,
            'listGuest' => $listGuest,
        ];
        return view('admin.addBooking', $data);
    }

    public function saveBooking(Request $request)
    {
        $data = $request->all();
        $booking = new Booking();
        // $booking->booking_id= $data['booking_id'];
        $booking->property_id = $data['property_id'];
        $booking->guest_id = $data['guest_id'];
        $booking->check_in = $data['check_in'];
        $booking->check_out = $data['check_out'];
        $booking->nguests = $data['nguests'];
        $booking->total_cost = $data['total_cost'];
        $booking->status = $data['status'];
        $booking->payment_method = $data['payment_method'];
        $booking->save();
        // Update the available date of the property
    $property = Property::find($data['property_id']);
    $property->updateAvailableDate($data['check_out']);

        Session::put('message', 'Add booking successfully!!!');
        return Redirect::to('addBooking');
    }

    public function editBooking($booking_id)
    {
        $editBooking = Booking::find($booking_id);
        $listProperty = Property::all();
        $listGuest = Guest::all();
        $data = [
            'editBooking' => $editBooking,
            'listProperty' => $listProperty,
            'listGuest' => $listGuest,
        ];
        return view('admin.edit_booking', $data);
    }
    public function updateBooking(Request $request, $booking_id)
    {
        $data = $request->all();
        $booking = Booking::with('guest', 'property')->find($booking_id);
        if (!$booking) {
            return redirect()->back()->withErrors(['error' => 'Booking not found']);
        }
        // $booking->booking_id= $data['booking_id'];
        $booking->property_id = $data['property_id'];
        $booking->guest_id = $data['guest_id'];
        $booking->check_in = $data['check_in'];
        $booking->check_out = $data['check_out'];
        $booking->nguests = $data['nguests'];
        $booking->total_cost = $data['total_cost'];
        $booking->status = $data['status'];
        $booking->payment_method = $data['payment_method'];
        $booking->save();
        // Update the available date of the property
    $property = Property::find($data['property_id']);
    $property->updateAvailableDate($data['check_out']);

        Session::put('message', 'Update booking successful');
        return Redirect::to('manage_booking');
    }
    public function deleteBooking($booking_id)
    {
        $booking = Booking::find($booking_id);
        if ($booking) {
            $booking->delete();
            Session::flash('message', 'Delete booking successful');
        } else {
            Session::flash('message', 'Booking does not exist');
        }
        return Redirect::to('manage_booking');
    }
}
