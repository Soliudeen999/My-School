<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Authenticatable
{
    use Notifiable;

    protected $guard = 'stn';

    protected $fillable = [
        'fullname','occupation','phone_no','email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function myParental()
    {
    	return $this->belongsToMany(Guardian::class);
    }
    public function guardian(){
        return $this->belongsTo(Guardian::class);
    }

    // public function guardians(){
    //     return $this->hasOne('App\Models\Guardian');
    // }

    public function messages()
    {
    	return $this->belongsToMany('App\Models\Message');
    }
}
