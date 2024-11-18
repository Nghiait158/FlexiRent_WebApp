<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\PropertyImg;
class HomepageController extends Controller
{
    public function showProperty(){
        $properties = Property::all();
        $properties_images = PropertyImg::all();
        $data = [
            'properties' => $properties,
            'properties_images' => $properties_images
        ];
        return view('Homepage', $data);
    }
}
