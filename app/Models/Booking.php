<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Booking extends Model
{
    protected $fillable = [
        'client_id',
        'name',
        'phone',
        'email',
        'date',
        'time',
        'session_type',
        'notes',
        'psychological_session_id',
        'status',
    ];

    /** @return array<string, string> */
    public static function statuses(): array
    {
        return [
            'pending' => 'قيد الانتظار',
            'accepted' => 'مقبولة',
            'rejected' => 'مرفوضة',
        ];
    }

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    public function psychologicalSession(): BelongsTo
    {
        return $this->belongsTo(PsychologicalSession::class);
    }
}
