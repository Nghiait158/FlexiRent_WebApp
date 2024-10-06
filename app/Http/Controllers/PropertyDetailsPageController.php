<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropertyDetailsPageController extends Controller
{
    public function showMap()
    {
        $address = "London, Notting Hill"; 
        return view('PropertyDetails', compact('address'));
    }
}
