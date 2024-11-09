<?php

namespace App\Http\Controllers;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyDetailsPageController extends Controller
{
    public function showData($property_id, Request $request){
        
        
        // $from = $request->input('from');
        // $to = $request->input('to');
        $propertyDetail = Property::find($property_id);
        $address = $propertyDetail->location; 

        $data = [
            'address' => $address,
            'propertyDetail' => $propertyDetail,
            // 'from'=>$from,
            // 'to'=>$to,
            
        ];
        // dd($data);
        
        return view('PropertyDetails', $data);

    }


}
