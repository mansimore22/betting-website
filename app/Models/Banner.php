<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Banner extends Model
{
    use HasFactory;

    // Specify the table name if different
    protected $table = 'banners';

    // Fields that can be mass-assigned
    protected $fillable = ['image_path'];

    // Optionally, manage timestamps
    public $timestamps = true;
}
