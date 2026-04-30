<?php

namespace App\Models;

use App\Traits\HasTranslations;
use Illuminate\Database\Eloquent\Model;

class Value extends Model
{
    use HasTranslations;

    protected $guarded = ['id'];
}
