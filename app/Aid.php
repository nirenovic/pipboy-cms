<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aid extends Model
{
    protected $table = "items_aid";
    protected $fillable = [
        'name',
        'qty',
        'weight',
        'value',
        'effect',
    ];
}
