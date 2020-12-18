<?php

use Illuminate\Database\Seeder;
use App\Misc;

class ItemsMiscSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items_misc')->insert([
            'name' => '$5 NCR',
            'weight' => 0,
            'value' => 2,
        ]);
        foreach(Misc::all() as $misc)
        {
            DB::table('items')->insert([
                'itemable_id' => $misc->id,
                'itemable_type' => "misc",
                'item_name' => $misc->name,
            ]);
        }
    }
}
