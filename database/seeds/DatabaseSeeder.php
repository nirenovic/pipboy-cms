<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(ItemsWeaponSeeder::class);
        $this->call(ItemsApparelSeeder::class);
        $this->call(ItemsAidSeeder::class);
        $this->call(ItemsMiscSeeder::class);
        $this->call(ItemsAmmoSeeder::class);
    }
}
