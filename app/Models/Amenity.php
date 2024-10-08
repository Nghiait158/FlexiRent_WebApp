<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Models\Property;
class Amenity extends Model
{
    use HasFactory;
    protected $table = 'amenities';
    protected $primaryKey = 'amenity_id';

    protected $fillable = [
        'amenity_name',
        'icon',
    ];

    public function properties()
    {
        return $this->belongsToMany(Property::class, 'property_amenities', 'amenity_id', 'property_id');
    }
}
