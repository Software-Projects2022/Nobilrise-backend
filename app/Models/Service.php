<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //
    protected $fillable = [
        'name',
        'short_description',
        'description',
        'image',
        'most_requested',
        'name_ar',
        'short_description_ar',
        'description_ar',
    ];
}
