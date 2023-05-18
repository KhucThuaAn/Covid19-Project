<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'area_id',
        'capacity',
    ];

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function sessions()
    {
        return $this->hasMany(Ticket::class);
    }
}
