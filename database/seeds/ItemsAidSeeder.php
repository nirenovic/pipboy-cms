<?php

use Illuminate\Database\Seeder;
use App\Aid;

class ItemsAidSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items_aid')->insert([
            [
                'name' => 'Ant meat',
                'weight' => 1,
                'value' => 4,
                'effect' => '+1 HP (5s), +3 Radiation',
            ], 
            [
                'name' => 'Sugar Bombs',
                'weight' => 1,
                'value' => 5,
                'effect' => '+1 HP (7s), +3 Radiation, +5 AP (30s)',
            ],
        ]);
        foreach(Aid::all() as $aid)
        {
            DB::table('items')->insert([
                'itemable_id' => $aid->id,
                'itemable_type' => "aid",
                'item_name' => $aid->name,
            ]);
        }
    }
}
