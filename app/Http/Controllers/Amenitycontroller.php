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
        return view('admin.manage_amenity', compact('allAmenity'));
    }
    public function editAmenity($amenity_id){
        $editAmenity = Amenity::find($amenity_id);
        $data = [
            'editAmenity' => $editAmenity,
        ];
        return view('admin.edit_amenity', $data);
    }
    public function updateAmenity(Request $request, $amenity_id ){
        $data= $request->all();
        $amenity = Amenity::find($amenity_id);
        if (!$amenity) {
            return redirect()->back()->withErrors(['error' => 'Guest not found']);
        }
        $amenity->amenity_id = $data['amenity_id'];
        $amenity->amenity_name = $data['amenity_name'];
        $amenity->icon = $data['icon'];

        $amenity->save();
        Session::put('message','Update amenity successful');
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
        return view('admin.add-amenity');
    }   

    public function saveAmenity(Request $request){
        $data = $request->all();
        $amenity = new Amenity();
        $amenity->amenity_id = $data['amenity_id'];
        $amenity->amenity_name = $data['amenity_name'];
        $amenity->icon = $data['icon'];

        $amenity ->save();
        Session::put('message','Add amenity successfully!!!');
        return Redirect::to('addAmenity');
    }


}
