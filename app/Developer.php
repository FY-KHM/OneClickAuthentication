<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Developer extends Model
{
	protected $table = 'devuser';
    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password',
    ];
}
