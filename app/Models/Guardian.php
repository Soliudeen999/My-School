<?php

namespace App\models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Guardian extends Authenticatable
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