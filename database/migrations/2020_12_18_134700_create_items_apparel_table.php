<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsApparelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items_apparel', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('qty')->unsigned()->default(1);
            $table->integer('dmg_threshold')->unsigned()->default(0);
            $table->integer('weight')->unsigned();
            $table->integer('value')->unsigned()->default(0);
            $table->integer('health')->unsigned()->default(0);
            $table->string('effect')->nullable();
            $table->enum('main_type', [
                'clothing',
                'armor',
                'headgear',
            ]);
            $table->enum('sub_type', [
                'light',
                'medium',
                'heavy',
                'glasses',
                'hats',
                'helmets',
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
        Schema::dropIfExists('items_apparel');
    }
}
