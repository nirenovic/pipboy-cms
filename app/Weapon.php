<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Weapon extends Model
{
    protected $table = "items_weapon";
    protected $fillable = [
        'name',
        'dmg',
        'fire_rate',
        'crit_chance_multiplier',
        'crit_dmg',
        'ap_cost',
        'dmg_per_ap',
        'spread',
        'ammo_type',
        'mag_size',
        'durability',
        'weight',
        'value',
        'skill_req',
        'str_req',
        'main_type',
        'sub_type',
    ];
}
