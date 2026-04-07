<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PsychologicalSessionCategory extends Model
{
    //
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
