<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PsychologicalSession extends Model
{
    //
    protected $fillable = [
        'name',
        'name_ar',
        'short_description',
        'short_description_ar',
        'description',
        'description_ar',
        'image',
        'psychological_session_category_id',
        'price',
        'discount_price',
        'duration',
        'people_count',
    ];
    public function psychologicalSessionCategory()
    {
        return $this->belongsTo(PsychologicalSessionCategory::class);
    }
}
