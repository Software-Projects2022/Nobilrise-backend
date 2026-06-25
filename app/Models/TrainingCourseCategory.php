<?php

namespace App\Models;

use App\Traits\HasTranslations;
use Illuminate\Database\Eloquent\Model;

class TrainingCourseCategory extends Model
{
    use HasTranslations;

    protected $fillable = [
        'name',
        'name_ar',
        'image',
    ];

    public function trainingCourses()
    {
        return $this->hasMany(TrainingCourse::class);
    }
}
