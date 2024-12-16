<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $fillable = [
        'test', // Unique test identifier
        'email', // Email address of the user
        'phone', // Optional phone number
        'score', // User's score
    ];
}
