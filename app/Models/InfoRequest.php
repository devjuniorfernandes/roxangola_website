<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InfoRequest extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'is_read'];
}
