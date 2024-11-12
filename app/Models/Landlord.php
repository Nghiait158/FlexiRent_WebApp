<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Landlord extends Model
{
    use HasFactory;
    protected $table = 'landlords';
    protected $primaryKey = 'landlord_id';

    protected $fillable = [
        'id',
        'first_name',
        'last_name',
        'phonenumber',
        'nationality'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }

    public function properties()
    {
        return $this->hasMany(Property::class, 'landlord_id');
    }
}
