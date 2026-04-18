<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'email',
        'date',
        'time',
        'session_type',
        'notes',
        'psychological_session_id',
    ];
}
