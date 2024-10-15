<?php

namespace App\Http\Controllers;
use App\Models\Property;
use Illuminate\Http\Request;

class BookingPageController extends Controller
{

    public function sendData() {
        // Get all properties sorted by updated_at in descending order
        $allProperty = Property::orderBy('updated_at', 'desc')->get();
    
        // Assuming you want to get the location of the first property in the collection:
        $address = $allProperty->isNotEmpty() ? $allProperty->first()->location : 'No address found';
    
        $data = [
            'allProperty' => $allProperty,
            'address' => $address,
        ];
    
        // Debugging the data
        // dd($data);
    
        // Return view with data
        return view('bookingPage', $data);
    }
    
    
}
