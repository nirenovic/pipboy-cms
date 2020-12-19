<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Misc extends Model
{
    protected $table = "items_misc";
    protected $fillable = [
        'name',
        'qty',
        'weight',
        'value',
    ];
}
