<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class BookingPageController extends Controller
{
    public function handleRequest(Request $request)
    {
        // Get input values
        $city = $request->input('city');
        $from = $request->input('from');
        $to = $request->input('to');
        $guestCount = $request->input('guest_count');
        $sortOption = $request->get('sortOption', 'availability');

        // Build the query with filters
        $propertiesQuery = Property::query();

        if ($city) {
            $propertiesQuery->where('location', 'LIKE', "%$city%");
        }
        if ($guestCount) {
            $propertiesQuery->where('guest_capacity', '>=', $guestCount);
        }
        if ($to) {
            $propertiesQuery->where('available', '<=', $to);
        }

        // Add sorting
        switch ($sortOption) {
            case 'price-asc':
                $propertiesQuery->orderBy('price_per_month', 'asc');
                break;
            case 'price-desc':
                $propertiesQuery->orderBy('price_per_month', 'desc');
                break;
            case 'availability':
            default:
                $propertiesQuery->orderBy('available', 'desc');
                break;
        }

        // Fetch properties
        $properties = $propertiesQuery->where('status', '0')
            ->where('is_verified', true)
            ->orderBy('updated_at', 'desc')
            ->get();

        // Determine the address for the first property
        $address = $properties->isNotEmpty() ? $properties->first()->location : 'No address found';

        // Pass data to the view
        $data = [
            'city' => $city,
            'from' => $from,
            'to' => $to,
            'guestCount' => $guestCount,
            'properties' => $properties,
            'address' => $address,
            'sortOption' => $sortOption,
        ];

        return view('bookingPage', $data);
    }
}
