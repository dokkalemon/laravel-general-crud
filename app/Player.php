<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    public $fillable = [
        'name',
        'last',
        'birth',
        'height',
        'team',
        'team_logo',
        'photo',
        'average_point',
    ];
}
