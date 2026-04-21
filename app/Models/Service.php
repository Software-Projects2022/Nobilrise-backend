<?php

namespace App\Models;

use App\Traits\HasTranslations;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasTranslations;

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
