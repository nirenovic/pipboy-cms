<?php

use Illuminate\Database\Seeder;

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
    }
}
