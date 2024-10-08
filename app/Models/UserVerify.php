<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserVerify extends Model
{
    use HasFactory;
    protected $table = 'user_verifies';
    protected $fillable = [
        'email',
        'otp',
    ];
}
