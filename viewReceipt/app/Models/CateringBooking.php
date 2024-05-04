<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CateringBooking extends Model
{
    use HasFactory;

    protected $primaryKey = 'bookingID';

    protected $fillable = [
        'customer_name',
        'customer_email',
        'customer_phone',
        'total_items',
        'payment_amount',
        'bookDate',
    ];

    protected $casts = [
        'bookDate' => 'datetime',
    ];
}
