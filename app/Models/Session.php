<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'place_id',
        'title',
        'description',
        'vaccinator',
        'start',
        'end',
        'type',
        'cost',
    ];

    public function place()
    {
        return $this->belongsTo(Place::class);
    }

    public function session_registrations()
    {
        return $this->hasMany(SessionRegistration::class);
    }
}
