<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Campaign;

class Ticket extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'cost',
        'validity',
        'amount',
        'until',
        'campaign_id'
    ];
    
    public function campaign()
    {
        return $this->belongsTo(Campaign::class);
    }

    public function registrations()
    {
        return $this->hasMany(Registration::class);
    }
}
