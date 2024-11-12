<?php

namespace App\Http\Controllers;
use App\Models\Property;
use Illuminate\Http\Request;
class BookingPageController extends Controller
{

    public function sendData(Request $request) {
        // Get all properties sorted by updated_at in descending order
        $city = $request->input('city');
        $from = $request->input('from');
        $to = $request->input('to');
        $guestCount = $request->input('guest_count');
        $query = Property::query();
    
        if ($city) {
            $query->where('location', 'LIKE', "%$city%");
        }
        if ($guestCount) {
            $query->where('guest_capacity', '>=', $guestCount);
        }
        // if ($from) {
        //     $query->where('available', '>=', $from);
        // }
    
        if ($to) {
            $query->where('available', '<=', $to);
        }
    
        $properties = $query->get();
    
        $address = $properties->isNotEmpty() ? $properties->first()->location : 'No address found';
    
        $data = [
            
            'city'=>  $city,
            'from'=> $from,
            'to'=>$to,
            'guestCount'=>$guestCount,
            'properties' => $properties,
            'address' => $address,
        ];
        // dd($data);
        return view('bookingPage', $data);
    }
    
    
}
