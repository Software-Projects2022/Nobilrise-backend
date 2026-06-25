<?php

namespace App\Models;

use App\Traits\HasTranslations;
use Illuminate\Database\Eloquent\Model;

class PsychologicalSessionCategory extends Model
{
    use HasTranslations;

    protected $fillable = [
        'name',
        'name_ar',
        'image',
    ];

    public function psychologicalSessions()
    {
        return $this->hasMany(PsychologicalSession::class);
    }
}
