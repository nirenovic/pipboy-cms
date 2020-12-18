<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use stdClass;

class HomeController extends Controller
{
    public function index()
    {
        // weapons
        $weapon_items = new stdClass;
        $weapon_items->name = "weapons";
        $weapon_items->items = DB::table('items_weapon')->orderBy('name')->get();
        // apparel
        $apparel_items = new stdClass;
        $apparel_items->name = "apparel";
        $apparel_items->items = DB::table('items_apparel')->orderBy('name')->get();
        // aid
        $aid_items = new stdClass;
        $aid_items->name = "aid";
        $aid_items->items = DB::table('items_aid')->orderBy('name')->get();
        // misc
        $misc_items = new stdClass;
        $misc_items->name = "misc";
        $misc_items->items = DB::table('items_misc')->orderBy('name')->get();
        // ammo
        $ammo_items = new stdClass;
        $ammo_items->name = "ammo";
        $ammo_items->items = DB::table('items_ammo')->orderBy('name')->get();

        $items = [
            $weapon_items,
            $apparel_items,
            $aid_items,
            $misc_items,
            $ammo_items
        ];

        return view('site.home')->with('items', $items);
    }
}
