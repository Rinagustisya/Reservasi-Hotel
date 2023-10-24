<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Aunthentificatble;
use Illuminate\Notifications\Notifiable;

class Admin extends Aunthentificatble
{
    use Notifiable;

    protected $fillable = [
        'nama',
        'username',
        'password',
        'role'
    ];

    protected $hidden = [
        'password',
        'remember_token'
    ];
}
