<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingPageController extends Controller
{
    public function showMap()
    {
        $address = "Trường Đại Học Quốc Tế"; 
        return view('bookingPage', compact('address'));
    }
}
