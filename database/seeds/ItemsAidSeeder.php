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
            'name' => 'Ant meat',
            'weight' => 1,
            'value' => 4,
            'effect' => "+1 HP (5s), +3 Radiation",
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
