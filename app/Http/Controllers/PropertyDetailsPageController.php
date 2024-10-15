<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropertyDetailsPageController extends Controller
{
    public function showMap()
    {
        $address = "Ton Duc Thang Ben Nghe District 1"; 
        return view('PropertyDetails', compact('address'));
    }
}
