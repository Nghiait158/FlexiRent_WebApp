<?php

namespace App\Http\Controllers;
use App\Models\Property;
use App\Models\Landlord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
class Propertycontroller extends Controller
{
    // ------------------Frontend------------
   

    // ----------------Backend-----------------

    public function manage_property(){  
        $allProperty = Property::all();
        return view('admin.manage_property', compact('allProperty'));
    }
    public function editProperty($property_id){
        $editProperty = Property::find($property_id);
        $landlords = Landlord::all();
        $data = [
            'editProperty' => $editProperty,
            'landlords' => $landlords,
        ];
        return view('admin.edit_property', $data);
    }
    public function updateProperty(Request $request, $property_id ){
        $data= $request->all();
        
        $property = Property::find($property_id);
        if (!$property) {
            return redirect()->back()->withErrors(['error' => 'Property not found']);
        }
        $property->property_id = $data['property_id'];
        $property->property_name = $data['property_name'];
        $property->landlord_id = $data['landlord_id'];
        $property->location = $data['location'];
        $property->nbedrooms = $data['nbedrooms'];
        $property->nbathrooms = $data['nbathrooms'];
        $property->area = $data['area'];
        $property->view = $data['view'];
        $property->floor = $data['floor'];
        $property->elevator = $data['elevator'];
        $property->price_per_month = $data['price_per_month'];

        $property->save();
        Session::put('message','Update property successful');
        return Redirect::to('manage_property');
    }
    public function deleteProperty($property_id ){
        $property = Property::find($property_id );
        if ($property) {
            $property->delete();
            Session::flash('message', 'Delete property successful');
        } else {
            Session::flash('message', 'Property does not exist');
        }
        return Redirect::to('manage_property');
    }
    

    public function addProperty(){
        $landlords = Landlord::all();
        return view('admin.add_property', compact('landlords'));
    }   

    public function saveProperty(Request $request){
        $data = $request->all();
        $property = new Property();

        $property->property_name = $data['property_name'];
        $property->landlord_id = $data['landlord_id'];
        $property->location = $data['location'];
        $property->nbedrooms = $data['nbedrooms'];
        $property->nbathrooms = $data['nbathrooms'];
        $property->area = $data['area'];
        $property->view = $data['view'];
        $property->floor = $data['floor'];
        $property->elevator = $data['elevator'];
        $property->price_per_month = $data['price_per_month'];
        

        $property ->save();
        Session::put('message','Add property successfully!!!');
        return Redirect::to('manage_property');
    }


}
