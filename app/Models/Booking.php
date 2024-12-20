<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'bookings';
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
        'PurposeOfStay',
        'purposeExplain',
        'is_booking_for_other',
        'other_name',
        'other_email',
    ];

    public function property()
    {
        return $this->belongsTo(Property::class, 'property_id');
    }

    public function updateCheckOutDate($date)
    {
        $this->check_out = $date;
        $this->save();
    }

    protected static function boot()
    {
        parent::boot();

        static::updated(function ($booking) {
            if ($booking->property->available != $booking->check_out) {
                $booking->property->updateAvailableDate($booking->check_out);
            }
        });
    }

    public function guest()
    {
        return $this->belongsTo(Guest::class, 'guest_id');
    }
}
