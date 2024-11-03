<?php

namespace App\Http\Controllers;
use App\Models\Amenity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
class Amenitycontroller extends Controller
{
    // ------------------Frontend------------
   

    // ----------------Backend-----------------

    public function manage_amenity(){  
        $allAmenity = Amenity::all();
        // dd($allAmenity);
        return view('admin.manage_amenity', compact('allAmenity'));
    }
    public function editAmenity($amenity_id){
        $editAmenity = Amenity::find($amenity_id);
        $data = [
            'editAmenity' => $editAmenity,
        ];
        return view('admin.edit_amenity', $data);
    }
    // public function updateAmenity(Request $request, $amenity_id ){
    //     $data= $request->all();
    //     $amenity = Amenity::find($amenity_id);
    //     if (!$amenity) {
    //         return redirect()->back()->withErrors(['error' => 'Amenity not found']);
    //     }
    //     $amenity->amenity_id = $data['amenity_id'];
    //     $amenity->amenity_name = $data['amenity_name'];
    //     $amenity->icon = $data['icon'];

    //     $amenity->save();
    //     Session::put('message','Update amenity successful');
    //     return Redirect::to('manage_amenity');
    // }
    public function updateAmenity(Request $request, $amenity_id) {
        // Validate the request data
        $request->validate([
            'amenity_id' => 'required|integer',
            'amenity_name' => 'required|string|max:255',
            'iconType' => 'required|string|in:svg,more', // Check the icon type
            'svgIcon' => 'nullable|string', // For SVG input
            'moreIcon' => 'nullable|string', // For "More" input
        ]);
    
        // Find the amenity by ID
        $amenity = Amenity::find($amenity_id);
        if (!$amenity) {
            return redirect()->back()->withErrors(['error' => 'Amenity not found']);
        }
    
        // Update the amenity's attributes
        $amenity->amenity_id = $request->amenity_id;
        $amenity->amenity_name = $request->amenity_name;
    
        // Check which icon type is selected and update accordingly
        if ($request->iconType === 'svg') {
            $amenity->icon = $request->svgIcon; // Update SVG icon
        } else {
            $amenity->icon = $request->moreIcon; // Update More icon
        }
    
        // Save the updated amenity to the database
        $amenity->save();
    
        // Set a success message in the session
        Session::put('message', 'Update amenity successful');
        
        // Redirect to the manage amenity page
        return Redirect::to('manage_amenity');
    }
    
    public function deleteAmenity($amenity_id ){
        $amenity = Amenity::find($amenity_id );
        if ($amenity) {
            $amenity->delete();
            Session::flash('message', 'Delete amenity successful');
        } else {
            Session::flash('message', 'Amenity does not exist');
        }
        return Redirect::to('manage_amenity');
    }
    

    public function addAmenity(){
        return view('admin.add_amenity');
    }   

    // public function saveAmenity(Request $request){
    //     $data = $request->all();
    //     $amenity = new Amenity();
    //     $amenity->amenity_id = $data['amenity_id'];
    //     $amenity->amenity_name = $data['amenity_name'];
    //     $amenity->icon = $data['icon'];

    //     $amenity ->save();
    //     Session::put('message','Add amenity successfully!!!');
    //     return Redirect::to('addAmenity');
    // }
    public function saveAmenity(Request $request) {
        // Validate the request data
        $request->validate([
            'amenity_id' => 'required|integer',
            'amenity_name' => 'required|string|max:255',
            'iconType' => 'required|string|in:svg,more', // Check the icon type
            'svgIcon' => 'nullable|string', // For SVG input
            'moreIcon' => 'nullable|string', // For "More" input
        ]);
    
        // Create a new Amenity instance
        $amenity = new Amenity();
        $amenity->amenity_id = $request->amenity_id;
        $amenity->amenity_name = $request->amenity_name;
    
        // Check which icon type is selected and save accordingly
        if ($request->iconType === 'svg') {
            $amenity->icon = $request->svgIcon; // Save SVG icon
        } else {
            $amenity->icon = $request->moreIcon; // Save More icon
        }
    
        // Save the amenity to the database
        $amenity->save();
    
        // Set a success message in the session
        Session::put('message', 'Add amenity successfully!!!');
        
        // Redirect to the add amenity page
        return Redirect::to('addAmenity');
    }
    

}
