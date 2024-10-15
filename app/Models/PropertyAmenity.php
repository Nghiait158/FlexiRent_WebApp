<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyAmenity extends Model
{
    use HasFactory;
    protected $table = 'property_amenities';

    protected $fillable = [
        'property_id',
        'amenity_id',
    ];

    public function amenities()
    {
        return $this->belongsToMany(Amenity::class, 'property_amenities', 'property_id', 'amenity_id');
    }

    public function properties()
    {
        return $this->belongsToMany(Property::class, 'property_amenities', 'amenity_id', 'property_id');
    }
}
