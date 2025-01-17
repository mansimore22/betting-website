<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Withdrawal extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'withdraw_coins', // Coins withdrawn by the user
    ];

    /**
     * The table associated with the model (if the table name doesn't match the pluralized model name).
     *
     * @var string
     */
    protected $table = 'withdrawals';
}