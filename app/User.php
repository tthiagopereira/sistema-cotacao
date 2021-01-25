<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name','email','cpf','tipo','cpf','status','password'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}


