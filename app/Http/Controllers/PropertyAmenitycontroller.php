<?php

namespace App\Http\Controllers;

use App\Models\PropertyAmenity;
use App\Models\Landlord;
use App\Models\Property;
use App\Models\Amenity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class PropertyAmenitycontroller extends Controller
{
    // ------------------Frontend------------

    // ----------------Backend-----------------

    // Manage Property Amenity
    public function manage_property_amenity() {  
        $allPropertyAmenity = PropertyAmenity::all();
        return view('admin.manage_property_amenity', compact('allPropertyAmenity'));
    }

    // Edit Amenity (Composite Key)
    public function editPropertyAmenity($property_id, $amenity_id) {
        $editPropertyAmenity = PropertyAmenity::where('property_id', $property_id)
                                              ->where('amenity_id', $amenity_id)
                                              ->first();
        $properties = Property::all();
        $amenities = Amenity::all();
        $landlords = Landlord::all();
        if (!$editPropertyAmenity) {
            return redirect()->back()->with('error', 'Property amenity not found.');
        }

        $data = [
            'editPropertyAmenity' => $editPropertyAmenity,
            'properties' => $properties,
            'amenities' => $amenities,
            'landlords' => $landlords,
        ];

        return view('admin.edit_property_amenity', $data);
    }

  
    

    // Update Amenity (Composite Key)
    public function updatePropertyAmenity(Request $request, $property_id, $amenity_id) {
        $data = $request->all();

        // Fetch the specific record by composite key
        $property_amenity = PropertyAmenity::where('property_id', $property_id)
                                  ->where('amenity_id', $amenity_id)
                                  ->first();

     

        if (!$property_amenity) {
            return redirect()->back()->withErrors(['error' => 'Property amenity not found']);
        }

        // Update the amenity details
        $property_amenity->property_id = $data['property_id'];
        $property_amenity->amenity_id = $data['amenity_id'];
        

        $property_amenity->save();
        Session::put('message', 'Update property amenity successful');
        return Redirect::to('manage_property_amenity');
    }

    // Delete Amenity (Composite Key)
    public function deletePropertyAmenity($property_id, $amenity_id) {
        $amenity = PropertyAmenity::where('property_id', $property_id)
                                  ->where('amenity_id', $amenity_id)
                                  ->first();

        if ($amenity) {
            $amenity->delete();
            Session::flash('message', 'Delete property amenity successful');
        } else {
            Session::flash('message', 'Property Amenity does not exist');
        }

        return Redirect::to('manage_property_amenity');
    }

    // Add Amenity
    public function addPropertyAmenity() {
        $properties = Property::all();
        $amenities = Amenity::all();
        $landlords = Landlord::all();
        return view('admin.add_property_amenity' , compact('properties','amenities', 'landlords'));
    }

    // Save New Amenity
    public function savePropertyAmenity(Request $request) {
        $data = $request->all();
        $property_amenity = new PropertyAmenity();
        
        // Make sure you assign both property_id and amenity_id (for composite key)
        $property_amenity->property_id = $data['property_id'];
        $property_amenity->amenity_id = $data['amenity_id'];
        
        $property_amenity->save();
        Session::put('message', 'Add property amenity successfully!!!');
        return Redirect::to('addPropertyAmenity');
    }
}
