<?php

use Illuminate\Database\Seeder;

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
    }
}
