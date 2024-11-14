<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;

    protected $table = 'contracts';
    protected $primaryKey = 'contract_id';

    protected $fillable = [
        // 'landlord_id',
        'guest_id',
        'property_id',
        'rent_amount',
        'payment_method',
        'payment_due_date',
        'start_date',
        'end_date',
        'deposit_amount',
        'deposit_conditions',
        'landlord_responsibilities',
        'tenant_responsibilities',
        'termination_conditions',
        'usage_rules',
    ];

    // Relationship to the Guest model
    public function guest()
    {
        return $this->belongsTo(Guest::class, 'guest_id');
    }

    // Relationship to the Property model
    public function property()
    {
        return $this->belongsTo(Property::class, 'property_id');
    }
}
