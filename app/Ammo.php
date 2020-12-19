<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ammo extends Model
{
    protected $table = "items_ammo";
    protected $fillable = [
        'name',
        'qty',
        'weight',
        'type',
        'value',
        'effect',
    ];
}
