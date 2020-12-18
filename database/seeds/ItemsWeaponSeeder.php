<?php

use Illuminate\Database\Seeder;

class ItemsWeaponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items_weapon')->insert([
            'name' => '.44 Magnum Revolver',
            'dmg' => 36,
            'fire_rate' => 1.875,
            'crit_chance_multiplier' => 1,
            'crit_dmg' => 36,
            'ap_cost' => 25,
            'dmg_per_ap' => 1.44,
            'spread' => 0.7,
            'ammo_type' => null,
            'mag_size' => 6,
            'durability' => 1245,
            'weight' => 3.5,
            'value' => 2500,
            'skill_req' => 50,
            'str_req' => 5,
            'main_type' => 'gun',
            'sub_type' => 'pistol',
        ]);
    }
}
