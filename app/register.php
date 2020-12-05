<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class register extends Model
{
    //
    protected $fillable = ['name', 'email', 'password'];

    protected $hidden = [
        'password',
        'remember_token'
    ];

    protected $casts = [
        'name' => 'string',
        'email_verified_at' => 'datetime',
    ];
}
