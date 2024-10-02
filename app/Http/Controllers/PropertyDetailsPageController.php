<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropertyDetailsPageController extends Controller
{
    public function showMap()
    {
        $address = "Bcons Suối Tiên"; 
        return view('PropertyDetails', compact('address'));
    }
}
