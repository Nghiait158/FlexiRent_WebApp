<?php

namespace App\Http\Controllers;
use App\Models\Contract;
use App\Models\Booking;
// use App\Models\Guest;
// use App\Models\Landlord;

use Illuminate\Http\Request;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
class ContractController extends Controller
{
    public function manage_contract(){  
        $allContract = Contract::all();
        return view('admin.manage_contract', compact('allContract'));
    }
    public function addContract(){
        $listBooking = Booking::with(['property', 'guest'])->get();
        $data = [
            'listBooking' => $listBooking,
        ];
        return view('admin.addContract', $data);
    }   

    public function saveContract(Request $request){
        $data = $request->all();
        $contract = new Contract();
        $contract->booking_id = $data['booking_id'];
        $contract->rent_amount = $data['rent_amount'];
        $contract->payment_method = $data['payment_method'];
        $contract->start_date = $data['start_date'];
        $contract->end_date = $data['end_date'];
        $contract->landlord_responsibilities = $data['landlord_responsibilities'];
        $contract->tenant_responsibilities = $data['tenant_responsibilities'];
        $contract->termination_conditions = $data['termination_conditions'];
        $contract->usage_rules = $data['usage_rules'];
        
        $contract ->save();
        Session::put('message','Add contract successfully!!!');
        return Redirect::to('addContract');
    }

    public function editContract($contract_id){
        $editContract = Contract::find($contract_id );
        $listBooking = Booking::with(['property', 'guest'])->get();
        $data = [
            'editContract' => $editContract,
            // 'listProperty' => $listProperty,
            // 'listGuest' => $listGuest,
            // 'listLandlord'=>$listLandlord,
        ];
        return view('admin.edit_contract', $data);
    }
    public function updateContract(Request $request, $contract_id){
        $data= $request->all();
        $contract = Contract::with('guest','property','landlord')->find($contract_id);
        if (!$contract) {
            return redirect()->back()->withErrors(['error' => 'Booking not found']);
        }
        
        $contract->booking_id = $data['booking_id'];
        $contract->rent_amount = $data['rent_amount'];
        $contract->payment_method = $data['payment_method'];
        // $contract->payment_due_date = $data['payment_due_date'];
        $contract->start_date = $data['start_date'];
        $contract->end_date = $data['end_date'];
        // $contract->deposit_amount = $data['deposit_amount'];
        // $contract->deposit_conditions = $data['deposit_conditions'];
        $contract->landlord_responsibilities = $data['landlord_responsibilities'];
        $contract->tenant_responsibilities = $data['tenant_responsibilities'];
        $contract->termination_conditions = $data['termination_conditions'];
        $contract->usage_rules = $data['usage_rules'];
        $contract ->save();
        Session::put('message','Update contract successful');
        return Redirect::to('manage_contract');
    }
    public function deleteContract($contract_id){
        $contract = Contract::find($contract_id);
        if ($contract) {
            $contract->delete();
            Session::flash('message', 'Delete contract successful');
        } else {
            Session::flash('message', 'Contract does not exist');
        }
        return Redirect::to('manage_contract');
    }
}
