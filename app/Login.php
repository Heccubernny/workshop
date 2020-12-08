<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    //
    protected $fillable = ['username', 'password'];

    protected $hidden = [
        'password',
        'remember_token'
    ];

    protected $casts = [
        'username' => 'string',
        'email_verified_at' => 'datetime',
    ];
}
