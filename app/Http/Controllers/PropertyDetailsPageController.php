<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use App\Models\PropertyImg;

class PropertyDetailsPageController extends Controller
{
    public function showData($property_id, Request $request)
    {
        $from = $request->input('from');
        $to = $request->input('to');
        $propertyDetail = Property::find($property_id);
        $address = $propertyDetail->location;

        // Fetch up to 5 images for the property
        $propertyImages = PropertyImg::where('property_id', $property_id)->limit(5)->get();

        // Define default images
        $defaultImages = [
            '/Frontend/Image/PropertyDetails/main.png',
            '/Frontend/Image/PropertyDetails/2.png',
            '/Frontend/Image/PropertyDetails/3.png',
            '/Frontend/Image/PropertyDetails/4.png',
            '/Frontend/Image/PropertyDetails/5.png'
        ];

        // Get the image paths, or fill with default images if there are fewer than 5
        $imagesArray = $propertyImages->pluck('path')->toArray();
        $imagesArray = array_merge($imagesArray, array_slice($defaultImages, 0, 5 - count($imagesArray)));

        // Ensure there’s a default value if no image is found
        $firstImage = $imagesArray[0] ?? '/Frontend/Image/PropertyDetails/main.png';

        // Pass the data to the view
        $data = [
            'address' => $address,
            'propertyDetail' => $propertyDetail,
            'from' => $from,
            'to' => $to,
            'imagesArray' => $imagesArray,
            'firstImage' => $firstImage,   // Pass the first image specifically
        ];

        return view('PropertyDetails', $data);
    }
}
