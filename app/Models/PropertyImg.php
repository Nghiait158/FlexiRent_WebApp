<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyImg extends Model
{
    use HasFactory;

    protected $table = 'property_imgs';

    protected $primaryKey = 'propertyImg_id';

    protected $fillable = [
        'propertyImg_name',
        'property_id',
        'path',
    ];

    public function property()
    {
        return $this->belongsTo(Property::class, 'property_id');
    }
}
