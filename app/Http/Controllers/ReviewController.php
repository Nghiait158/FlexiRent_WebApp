<?php

namespace App\Http\Controllers;
use App\Models\Review;
use App\Models\Property;
use App\Models\Guest;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
class ReviewController extends Controller
{
    // ------------------Frontend------------
   

    // ----------------Backend-----------------

    public function manage_review(){  
        $allReview = Review::all();
        return view('admin.manage_review', compact('allReview'));
    }
    public function addReview(){
        $listProperty= Property::all();
        $listGuest= Guest::all(); 
        $data = [
            'listProperty' => $listProperty,
            'listGuest' => $listGuest,
        ];
        return view('admin.addReview', $data);
    }   

    public function saveReview(Request $request){
        $data = $request->all();
        $review = new Review();
        // $review->review_id= $data['review_id '];
        $review->property_id= $data['property_id'];
        $review->guest_id= $data['guest_id'];
        $review->rating = $data['rating'];
        $review->comment = $data['comment'];
        $review ->save();
        Session::put('message','Add review successfully!!!');
        return Redirect::to('addReview');
    }

    public function editReview($review_id ){
        $editReview = Review::find($review_id );
        $listProperty= Property::all();
        $listGuest= Guest::all(); 
        $data = [
            'editReview' => $editReview,
            'listProperty' => $listProperty,
            'listGuest' => $listGuest,
        ];
        return view('admin.edit_review', $data);
    }
    public function updateReview(Request $request, $review_id){
        $data= $request->all();
        $review = Review::with('guest','property')->find($review_id);
        if (!$review) {
            return redirect()->back()->withErrors(['error' => 'Review not found']);
        }
        $review->review_id  = $data['review_id'];
        $review->property_id   = $data['property_id'];
        $review->guest_id   = $data['guest_id'];
        $review->rating = $data['rating'];
        $review->comment = $data['comment'];
        $review->save();
        Session::put('message','Update review successful');
        return Redirect::to('manage_review');
    }
    public function deleteReview($review_id  ){
        $review = Review::find($review_id);
        if ($review) {
            $review->delete();
            Session::flash('message', 'Delete review successful');
        } else {
            Session::flash('message', 'Review does not exist');
        }
        return Redirect::to('manage_review');
    }
    



}
