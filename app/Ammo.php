<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ammo extends Model
{
    protected $table = "items_ammo";
    protected $fillable = [
        'name',
        'weight',
        'type',
        'value',
        'effect',
    ];
}
