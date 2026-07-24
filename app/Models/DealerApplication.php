<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DealerApplication extends Model
{
    protected $fillable = ['company_name', 'contact_name', 'email', 'phone', 'location', 'message', 'is_read'];
}
