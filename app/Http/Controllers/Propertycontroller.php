<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\Landlord;
use App\Models\Amenity;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class Propertycontroller extends Controller
{
    // ------------------Frontend------------

    public function search(Request $request)
    {
        // Lấy dữ liệu từ form tìm kiếm
        $city = $request->input('city');
        $from = $request->input('from');
        $to = $request->input('to');
        $guestCount = $request->input('guest_count');

        // Tìm kiếm các properties dựa trên điều kiện
        $properties = Property::where('city', 'LIKE', "%$city%")
            ->where('available', true) // Chỉ tìm kiếm properties đang available
            ->where('guest_capacity', '>=', $guestCount) // Kiểm tra sức chứa khách
            ->whereDoesntHave('bookings', function ($query) use ($from, $to) {
                // Kiểm tra xem property không bị booked trong khoảng thời gian từ from -> to
                $query->where('check_in', '<=', $to)
                    ->where('check_out', '>=', $from);
            })
            ->get();

        // Trả về view cùng với danh sách các properties
        return view('bookingPage', compact('properties'));
    }

    // ----------------Backend-----------------

    public function manage_property()
    {
        $allProperty = Property::orderBy('updated_at', 'desc')->get();

        return view('admin.manage_property', compact('allProperty'));
    }
    public function editProperty($property_id)
    {
        $editProperty = Property::with('amenities')->findOrFail($property_id);
        $landlords = Landlord::all();
        $amenity = Amenity::all();
        $data = [
            'amenity' => $amenity,
            'editProperty' => $editProperty,
            'landlords' => $landlords,
        ];
        return view('admin.edit_property', $data);
    }
    public function updateProperty(Request $request, $property_id)
    {
        $data = $request->all();

        $property = Property::find($property_id);
        if (!$property) {
            return redirect()->back()->withErrors(['error' => 'Property not found']);
        }
        $property->property_name = $data['property_name'];
        $property->landlord_id = $data['landlord_id'];
        $property->location = $data['location'];
        $property->district = $data['district'];
        $property->city = $data['city'];
        $property->nbedrooms = $data['nbedrooms'];
        $property->nbathrooms = $data['nbathrooms'];
        $property->area = $data['area'];
        $property->description = $data['description'];
        $property->available = $data['available'];
        $property->view = $data['view'];
        $property->floor = $data['floor'];
        $property->elevator = $data['elevator'];
        $property->price_per_month = $data['price_per_month'];
        $property->guest_capacity = $data['guest_capacity'];


        $property->save();
        if (!empty($data['amenities'])) {
            // Lấy danh sách các amenity hợp lệ
            $validatedAmenities = Amenity::whereIn('amenity_id', $data['amenities'])->pluck('amenity_id')->toArray();

            // Đồng bộ danh sách amenity với property
            $property->amenities()->sync($validatedAmenities);
        } else {
            // Xóa tất cả liên kết nếu không có amenities trong request
            $property->amenities()->detach();
        }
        Session::put('message', 'Update property successful');
        return Redirect::to('manage_property');
    }
    public function deleteProperty($property_id)
    {
        $property = Property::find($property_id);
        if ($property) {
            $property->delete();
            Session::flash('message', 'Delete property successful');
        } else {
            Session::flash('message', 'Property does not exist');
        }
        return Redirect::to('manage_property');
    }


    public function addProperty()
    {
        $landlords = Landlord::all();
        $amenity = Amenity::all();
        $data = [
            'amenity' => $amenity,
            // 'editProperty' => $editProperty,
            'landlords' => $landlords,
        ];
        return view('admin.add_property', $data);
    }

    public function saveProperty(Request $request)
    {
        $data = $request->all();
        $property = new Property();

        $property->property_name = $data['property_name'];
        $property->landlord_id = $data['landlord_id'];
        $property->location = $data['location'];
        $property->district = $data['district'];
        $property->city = $data['city'];
        $property->nbedrooms = $data['nbedrooms'];
        $property->nbathrooms = $data['nbathrooms'];
        $property->area = $data['area'];
        $property->description = $data['description'];
        $property->available = $data['available'];
        $property->view = $data['view'];
        $property->floor = $data['floor'];
        $property->elevator = $data['elevator'];
        $property->price_per_month = $data['price_per_month'];
        $property->guest_capacity = $data['guest_capacity'];



        $property->save();
        if (!empty($data['amenities'])) {
            // Đảm bảo danh sách amenity là một mảng và các giá trị hợp lệ
            $validatedAmenities = Amenity::whereIn('amenity_id', $data['amenities'])->pluck('amenity_id')->toArray();

            // Liên kết các amenities với property
            $property->amenities()->sync($validatedAmenities);
        }
        Session::put('message', 'Add property successfully!!!');
        return Redirect::to('manage_property');
    }

    public function getPropertyImages($property_id)
    {
        $property = Property::with('images')->find($property_id);
        if ($property) {
            return response()->json($property->images);
        } else {
            return response()->json([], 404);
        }
    }
}
