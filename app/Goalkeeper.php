<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goalkeeper extends Model
{
    protected $fillable = [
        'name',
        'gs',
        'penaltyshots'
    ];
}
