<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $fillable = ['name', 'phone', 'source', 'is_read'];

    protected $casts = ['is_read' => 'boolean'];
}
