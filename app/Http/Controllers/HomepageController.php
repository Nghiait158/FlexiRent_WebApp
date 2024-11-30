<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Feedback;
use App\Models\PropertyImg;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
// use Illuminate\Support\Facades\Session;
class HomepageController extends Controller
{
    public function showProperty(){
        $properties = Property::all();
        $properties_images = PropertyImg::all();
        $feedbacks = Feedback::orderBy('updated_at', 'desc')
        ->take(10)
        ->get();
        
        $data = [
            'properties' => $properties,
            'properties_images' => $properties_images,
            'feedbacks'=>$feedbacks,
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

    public function saveFeedback(Request $request){
        $data = $request->all();
        $feedback = new Feedback();

        $feedback->name = $data['name'];
        $feedback->email = $data['email'];
        $feedback->phone_number = $data['phone_number'];
        $feedback->message = $data['message'];
        $feedback->role = $data['role'] ?? null;
        $feedback->save();
        return Redirect::to('thankFeedback');
    }
}
