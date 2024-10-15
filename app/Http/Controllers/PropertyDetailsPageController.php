<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropertyDetailsPageController extends Controller
{
    public function showMap()
    {
        $address = "No. 5 Ward 26 Binh Thanh"; 
        return view('PropertyDetails', compact('address'));
    }
}
