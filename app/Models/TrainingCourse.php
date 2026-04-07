<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrainingCourse extends Model
{
    protected $fillable = [
        'name',
        'short_description',
        'description',
        'name_ar',
        'short_description_ar',
        'description_ar',
        'image',
        'training_course_category_id',
        'price',
        'discount_price',
    ];
    //
    public function trainingCourseCategory()
    {
        return $this->belongsTo(TrainingCourseCategory::class);
    }
}
