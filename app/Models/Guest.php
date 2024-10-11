<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;
    protected $table = 'guests';
    protected $primaryKey = 'guest_id';

    protected $fillable = [
        'id',
        'first_name',
        'last_name',
        'phone_number',
        'purpose_of_stay',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class, 'guest_id');
    }
}
