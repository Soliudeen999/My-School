<?php

namespace App\models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Guardian extends Authenticatable
{
   use Notifiable;

    protected $guard = 'prnt';

    const MYNAME = 'Soliu Yusuf Olayemi';

    protected $fillable = [
        'fullname','occupation','phone_no','email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
    // Getting the fullname datas in the db in ucwords case
    public function getfullNameAttribute($data)
    {
    	return ucwords($data);
    }

    // Linking of parent to their child or children
    public function myChild(){
    	return $this->hasMany('App\Models\Student');
    }

    public function Guardian(){
        return $this->hasMany('App\Models\Student');
    }



    // Getting all messages and notifications
    public function messages(){
    	return $this->belongsToMany('App\Models\Message');
    }

}