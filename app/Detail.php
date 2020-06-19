<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    // fillables
    protected $fillable = [
        'name',
        'gf',
        'assist'
    ];
}
