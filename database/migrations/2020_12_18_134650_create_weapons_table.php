<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeaponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weapon_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('damage');
            $table->double('fire_rate', 8, 2);
            $table->double('crit_chance_multiplier', 8, 1)->default(1);
            $table->integer('crit_damage')->unsigned();
            $table->integer('action_point_cost')->unsigned()->default(30);
            $table->double('damage_per_action_point')->default(2);
            $table->double('weapon_spread', 8, 2)->nullable();
            $table->foreign('ammo_type')->references('id')->on('ammo_items')->nullable();
            $table->integer('magazine_size')->unsigned()->nullable();
            $table->integer('durability')->unsigned()->nullable();
            $table->integer('weight')->unsigned();
            $table->integer('value')->unsigned();
            $table->integer('skill_required')->unsigned()->default(0);
            $table->integer('strength_required')->unsigned()->default(0);
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
                'thrown',
                'unarmed',
            ]);
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
        Schema::dropIfExists('weapon_items');
    }
}
