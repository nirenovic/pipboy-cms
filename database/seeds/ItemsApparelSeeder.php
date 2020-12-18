<?php

use Illuminate\Database\Seeder;
use App\Apparel;

class ItemsApparelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items_apparel')->insert([
            'name' => 'Vault 11 jumpsuit',
            'dmg_threshold' => 0,
            'weight' => 1,
            'value' => 6,
            'health' => 100,
            'effect' => "Melee Weapons +2, Speech +2",
            'main_type' => 'clothing',
            'sub_type' => null,
        ]);
        foreach(Apparel::all() as $apparel)
        {
            DB::table('items')->insert([
                'itemable_id' => $apparel->id,
                'itemable_type' => "apparel",
                'item_name' => $apparel->name,
            ]);
        }
    }
}
