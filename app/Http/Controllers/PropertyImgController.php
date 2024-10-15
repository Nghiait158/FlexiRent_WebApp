<?php

namespace App\Http\Controllers;
use App\Models\PropertyImg;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
class PropertyImgController extends Controller
{
    public function manage_PropertyImg($property_id) {
        $property = Property::find($property_id);
        if (!$property) {
            return redirect()->back()->with('error', 'Property not found.');
        }
        $allImgOfProperty = PropertyImg::where('property_id', $property->property_id)
                                        ->with('property')
                                        ->get();
        $data = [
            'allImgOfProperty' => $allImgOfProperty,
            'property' => $property, 
        ];
    
        return view('admin.manage_propertyImg', $data);
    }
    

    public function addPropertyImg($property_id) {
        $property = Property::find($property_id);
        if (!$property) {
            return redirect()->back()->with('error', 'Property not found.');
        }
        $allImgOfProperty = PropertyImg::where('property_id', $property_id)->get();
        $data = [
            'allImgOfProperty' => $allImgOfProperty,
            'property' => $property, 
        ];
        return view('admin.add_propertyImg', $data);
    }
    
   
    public function savePropertyImg(Request $request,$property_id){
        $data = $request->all();
        $img = new PropertyImg();

        $img->propertyImg_name = $data['propertyImg_name'];   
        $img->property_id = $property_id;   
        // $img->path = $data['path'];

        if ($request->imageChoice == 'file' && $request->hasFile('PropertyImgPath')) {
            $get_image = $request->file('PropertyImgPath');
            $new_image = $data['PropertyImgPath'] . '.' . $get_image->getClientOriginalExtension();
            $get_image->move(public_path('frontend/img'), $new_image);
            $img->path = '/frontend/img/' . $new_image;
        } elseif ($request->imageChoice == 'text' && !empty($data['PropertyImgUrl'])) {
            $img->path = $data['PropertyImgUrl'];
        }
       
        $img->save();
        Session::put('message', 'Image uploaded successfully');
        return Redirect::to('manage_PropertyImg/'.$property_id);
    }
    public function editPropertyImg($propertyImg_id){
        $editPropertyImg = PropertyImg::find($propertyImg_id);
        $data = [
            'editPropertyImg'=>$editPropertyImg,
        ];
        return view('admin.edit_PropertyImg', $data);
    }
    public function updatePropertyImg(Request $request, $propertyImg_id){
        $data= $request->all();
        $img= PropertyImg::find($propertyImg_id);
        if (!$img) {
            return redirect()->back()->withErrors(['error' => 'Image not found']);
        }
        $img->propertyImg_name = $data['propertyImg_name'];   

        if ($request->imageChoice == 'file' && $request->hasFile('PropertyImgPath')) {
            $get_image = $request->file('PropertyImgPath');
            $new_image = $data['PropertyImgPath'] . '.' . $get_image->getClientOriginalExtension();
            $get_image->move(public_path('frontend/img'), $new_image);
            $img->path = '/frontend/img/' . $new_image;
        } elseif ($request->imageChoice == 'text' && !empty($data['PropertyImgUrl'])) {
            $img->path = $data['PropertyImgUrl'];
        }
       
        $img->save();
        Session::put('message','Image edited successfully');
        return Redirect::to('manage_PropertyImg/'.$img->property_id);

    }
    public function deletePropertyImg($propertyImg_id){
        $img = PropertyImg::find($propertyImg_id);
        if ($img) {
            // Xóa mục
            $img->delete();
            Session::flash('message', 'Image deleted successfully.');
        } else {
            Session::flash('message', 'Image does not exist');
        }
        return Redirect::to('manage_PropertyImg/'.$img->property_id);
    }
}
