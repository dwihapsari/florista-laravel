<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = "admin";

    protected $fillable = [
        'nama',
        'username',
        'password'
    ];

    protected $hidden = [
        'password'
    ];
}
