<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citizen extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'username',
        'email',
        'registration_code',
        'login_token',
    ];
    
    public function registrations()
    {
        return $this->hasMany(Registration::class);
    }
}
