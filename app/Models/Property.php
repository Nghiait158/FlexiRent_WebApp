<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $table = 'properties';
    protected $primaryKey = 'property_id';

    protected $fillable = [
        'property_name',
        'landlord_id',
        'location',
        'location_details',
        'education_and_community',
        'nbedrooms',
        'nbathrooms',
        'area',
        'view',
        'floor',
        'elevator',
        'price_per_month',
        'description',
        'available',
        'guest_capacity',
        'status',
        'city',
        'district',
        'accommodation_type',
        'room',
        'wifi',
        'internetSpeed',
        'ListingTitle',
        'is_verified',
    ];
    public function landlord()
    {
        return $this->belongsTo(Landlord::class, 'landlord_id');
    }

    public function amenities()
    {
        return $this->belongsToMany(Amenity::class, 'property_amenities', 'property_id', 'amenity_id');
    }
    public function images()
    {
        return $this->hasMany(PropertyImg::class, 'property_id', 'property_id');
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class, 'property_id');
    }
}
