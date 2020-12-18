<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = "items";
    protected $fillable = [
        'itemable_id',
        'itemable_type',
        'item_name',
    ];

    public function itemable()
    {
        return $this->morphTo();
    }
}
