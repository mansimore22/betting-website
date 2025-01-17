<?php

// app/Models/Otp.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Otp extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'mobile_number',
        'country_code',
        'otp',
        'expires_at',
    ];
}

