<?php

use Illuminate\Database\Seeder;
use App\Weapon;

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
            [
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
            ],
            [
                'name' => 'Cowboy repeater',
                'dmg' => 32,
                'fire_rate' => 1.69,
                'crit_chance_multiplier' => 1.25,
                'crit_dmg' => 32,
                'ap_cost' => 27,
                'dmg_per_ap' => 1.19,
                'spread' => 0.06,
                'ammo_type' => null,
                'mag_size' => 7,
                'durability' => 595,
                'weight' => 5,
                'value' => 800,
                'skill_req' => 25,
                'str_req' => 4,
                'main_type' => 'gun',
                'sub_type' => 'rifle',
            ],
        ]);
        foreach(Weapon::all() as $weapon)
        {
            DB::table('items')->insert([
                'itemable_id' => $weapon->id,
                'itemable_type' => "weapon",
                'item_name' => $weapon->name,
            ]);
        }
    }
}
