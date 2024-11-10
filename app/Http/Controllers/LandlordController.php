<?php

namespace App\Http\Controllers;
use App\Models\Landlord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class LandlordController extends Controller
{

    // ------------------ Frontend---------------

    public function index(){
        return view('landlord.dashboard');
    }

    public function addPropertyAddress(){
        return view('landlord.add_property_address');
    }

    public function addPropertyDetails(){
        return view('landlord.add_property_details');
    }


    // ----------------------Backend--------------
    public function manage_landlord(){  
        $allLandlord = Landlord::with('user')->get();
        return view('admin.manage_landlord', compact('allLandlord'));
    }
    public function editLandlord($landlord_id){
        $editLandlord = Landlord::with('user')->find($landlord_id );
        $data = [
            'editLandlord' => $editLandlord,
        ];
        return view('admin.edit_Landlord', $data);
    }
    public function updateLandlord(Request $request, $landlord_id ){
        $data= $request->all();
        $Landlord = Landlord::with('user')->find($landlord_id );
        if (!$Landlord) {
            return redirect()->back()->withErrors(['error' => 'Landlord not found']);
        }
        $Landlord->landlord_id= $data['landlord_id'];
        $Landlord->first_name = $data['first_name'];
        $Landlord->last_name = $data['last_name'];
        $Landlord->user->email = $data['email'];
        
        $Landlord->save();
        Session::put('message','Update Landlord successful');
        return Redirect::to('manage_landlord');
    }
    public function deleteLandlord($landlord_id ){
        $Landlord = Landlord::with('user')->find($landlord_id );
        if ($Landlord) {
            $user = $Landlord->user;
            if ($user) {
                $user->delete(); 
            }
            $Landlord->delete();
            Session::flash('message', 'Delete Landlord sucesfull');
        } else {
            Session::flash('message', 'Landlord does not exist');
        }
        return Redirect::to('manage_landlord');
    }
    

}
