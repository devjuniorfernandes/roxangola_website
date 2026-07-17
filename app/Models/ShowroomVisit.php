<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShowroomVisit extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'email',
        'model_interest',
        'preferred_date',
        'preferred_time',
        'observations',
        'is_read',
    ];

    protected $casts = [
        'preferred_date' => 'date',
    ];
}
