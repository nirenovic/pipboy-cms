<?php

use Illuminate\Database\Seeder;

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
    }
}
