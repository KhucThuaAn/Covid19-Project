<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'campaign_id',
    ];

    public function campaign()
    {
        return $this->belongsTo(Campaign::class);
    }

    public function places()
    {
        return $this->hasMany(Place::class);
    }
}
