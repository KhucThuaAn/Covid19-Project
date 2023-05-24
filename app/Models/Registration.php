<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;
    protected $fillable = [
        'citizen_id',
        'ticket_id',
        'registration_time',
    ];

    
    public function citizen()
    {
        return $this->belongsTo(Citizen::class);
    }

    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }

}
