<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'date',
        'organizer_id'
    ];

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

    public function areas()
    {
        return $this->hasMany(Area::class);
    }
}
