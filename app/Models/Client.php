<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Client extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function trainingCourses(): BelongsToMany
    {
        return $this->belongsToMany(TrainingCourse::class, 'client_training_course')
            ->withPivot('amount_paid', 'status')
            ->withTimestamps();
    }

    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }

    public function isEnrolledIn(int $courseId): bool
    {
        return $this->trainingCourses()->where('training_course_id', $courseId)->exists();
    }
}
