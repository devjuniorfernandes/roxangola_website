<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceBooking extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'email',
        'model',
        'plate',
        'service_type',
        'preferred_date',
        'preferred_time',
        'observations',
        'is_read',
    ];

    protected $casts = [
        'preferred_date' => 'date',
    ];
}
