<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apparel extends Model
{
    protected $table = "items_apparel";
    protected $fillable = [
        'name',
        'dmg_threshold',
        'weight',
        'value',
        'health',
        'effect',
        'main_type',
        'sub_type',
    ];
}
