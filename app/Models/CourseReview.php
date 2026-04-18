<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseReview extends Model
{
    protected $fillable = [
        'training_course_id',
        'reviewer_name',
        'reviewer_image',
        'rating',
        'review',
        'review_date',
    ];

    public function trainingCourse()
    {
        return $this->belongsTo(TrainingCourse::class);
    }
}
