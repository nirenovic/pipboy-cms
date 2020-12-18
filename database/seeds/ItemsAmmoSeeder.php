<?php

use Illuminate\Database\Seeder;
use App\Ammo;

class ItemsAmmoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items_ammo')->insert([
            'name' => ".22LR round",
            'value' => 1
        ]);
        foreach(Ammo::all() as $ammo)
        {
            DB::table('items')->insert([
                'itemable_id' => $ammo->id,
                'itemable_type' => "ammo",
                'item_name' => $ammo->name,
            ]);
        }
    }
}
