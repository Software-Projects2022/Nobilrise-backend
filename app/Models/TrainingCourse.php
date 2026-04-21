<?php

namespace App\Models;

use App\Traits\HasTranslations;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class TrainingCourse extends Model
{
    use HasTranslations;

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
        'instructor_name',
        'instructor_title',
        'instructor_image',
        'instructor_bio',
        'rating',
        'reviews_count',
        'students_count',
        'duration_hours',
    ];

    //
    public function trainingCourseCategory()
    {
        return $this->belongsTo(TrainingCourseCategory::class);
    }

    public function reviews()
    {
        return $this->hasMany(CourseReview::class);
    }

    public function clients(): BelongsToMany
    {
        return $this->belongsToMany(Client::class, 'client_training_course')
            ->withPivot('amount_paid', 'status')
            ->withTimestamps();
    }

    public function getEnrolledStudentsCountAttribute(): int
    {
        return $this->clients()->count();
    }
}
