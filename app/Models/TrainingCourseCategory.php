<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrainingCourseCategory extends Model
{
    //
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
