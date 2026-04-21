<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Enrollment extends Pivot
{
    protected $table = 'client_training_course';

    public $incrementing = true;

    protected $fillable = [
        'client_id',
        'training_course_id',
        'amount_paid',
        'status',
    ];

    /** @return array<string, string> */
    public static function statuses(): array
    {
        return [
            'active' => 'جارية',
            'completed' => 'مكتملة',
            'cancelled' => 'ملغية',
        ];
    }

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    public function trainingCourse(): BelongsTo
    {
        return $this->belongsTo(TrainingCourse::class);
    }
}
