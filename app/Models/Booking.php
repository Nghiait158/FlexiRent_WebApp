<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $primaryKey = 'booking_id';

    protected $fillable = [
        'property_id',
        'guest_id',
        'check_in',
        'check_out',
        'nguests',
        'total_cost',
        'status',
        'payment_method',
    ];

    public function property()
    {
        return $this->belongsTo(Property::class, 'property_id');
    }

    public function guest()
    {
        return $this->belongsTo(Guest::class, 'guest_id');
    }
}
