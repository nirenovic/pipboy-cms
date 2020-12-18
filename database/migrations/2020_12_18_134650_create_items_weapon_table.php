<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsWeaponTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items_weapon', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('dmg');
            $table->double('fire_rate', 8, 3);
            $table->double('crit_chance_multiplier', 8, 1)->default(1);
            $table->integer('crit_dmg')->unsigned();
            $table->integer('ap_cost')->unsigned()->default(30);
            $table->double('dmg_per_ap')->default(2);
            $table->double('spread', 8, 2)->nullable();
            $table->string('ammo_type')->nullable();
            $table->integer('mag_size')->unsigned()->nullable();
            $table->integer('durability')->unsigned()->nullable();
            $table->double('weight', 8, 2);
            $table->integer('value')->unsigned();
            $table->integer('skill_req')->unsigned()->default(0);
            $table->integer('str_req')->unsigned()->default(0);
            $table->enum('main_type', [
                'gun',
                'energy',
                'explosive',
                'melee',
                'other',
            ]);
            $table->enum('sub_type', [
                'pistol',
                'rifle',
                'SMG',
                'shotgun',
                'heavy',
                'projectile',
                'thrown',
                'placed',
                'bladed',
                'blunt',
                'unarmed',
                'other',
            ])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items_weapon');
    }
}
