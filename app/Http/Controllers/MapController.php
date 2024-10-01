<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class MapController extends Controller
{
    public function getCoordinates($address)
    {
        // Encode địa chỉ để sử dụng trong URL
        $address = urlencode($address);
        // Lấy API key từ file .env
        $apiKey = config('services.google.maps_api_key');
        // Tạo URL yêu cầu đến Geocoding API
        $url = "https://maps.googleapis.com/maps/api/geocode/json?address={$address}&key={$apiKey}";

        // Gửi request đến Google API
        $response = Http::get($url);
        $data = $response->json();

        // Lấy tọa độ từ kết quả trả về
        if (isset($data['results'][0])) {
            $location = $data['results'][0]['geometry']['location'];
            return [
                'lat' => $location['lat'],
                'lng' => $location['lng'],
            ];
        }

        return null;
    }

    // Tạo URL iframe cho Google Maps
    public function generateMapIframe()
    {
        // Biến địa chỉ được định nghĩa trong ứng dụng, ví dụ: từ database hoặc form.
        $address = "Bcons Suối Tiên";
    
        // Gọi hàm lấy tọa độ từ địa chỉ
        $coordinates = $this->getCoordinates($address);
    
        if ($coordinates) {
            $lat = $coordinates['lat'];
            $lng = $coordinates['lng'];
    
            // Debug tọa độ (hiển thị lat)
            dd($lat);
    
            // Tạo URL iframe với tọa độ
            $iframeUrl = "https://www.google.com/maps/embed/v1/place?key=" . config('services.google.maps_api_key') . "&q={$lat},{$lng}";
    
            // Trả về view với URL iframe
            return view('bookingPage', ['iframeUrl' => $iframeUrl]);
        }
    
        return "Không tìm thấy tọa độ.";
    }
    
    public function showMap()
    {
        $address = "Trường Đại Học Quốc Tế"; 
        return view('bookingPage', compact('address'));
    }
    
    
    
}
