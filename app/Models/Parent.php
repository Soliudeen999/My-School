<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Parent extends Authenticatable
{
    use Notifiable;

    protected $guard = 'prnt';

    protected $fillable = [
        'fullname','occupation','phone_no','email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
