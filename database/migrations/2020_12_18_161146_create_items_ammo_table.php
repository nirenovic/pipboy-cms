<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsAmmoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items_ammo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('weight')->unsigned();
            $table->string('type')->nullable();
            $table->integer('value')->unsigned();
            $table->string('effect')->default("Damage x 1");
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
        Schema::dropIfExists('items_ammo');
    }
}
