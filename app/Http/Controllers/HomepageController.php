<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\PropertyImg;

use Illuminate\Support\Facades\Session;
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

    public function index(){
        $rules = session('Rules', []);
        $prices = session('Prices', []);
        $describe = session('Describe', []);
        $Images = session('Images', []);
        $address= session('address', []);
        $details= session('details', []);
        $services= session('services', []);
        $Amenities= session('Amenities', []);

        
        $data = [
            'rules' => $rules,
            'prices' => $prices,
            'describe' => $describe,
            'address'=>$address,
            'details'=>$details,
            'services'=>$services,
            'Amenities'=>$Amenities,
            'Images'=>$Images,
        ];
        dd($data);

        return view('seesion', ['data' => $data]);

    }
}
