<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsAidTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items_aid', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('qty')->unsigned()->default(1);
            $table->integer('weight')->unsigned()->default(1);
            $table->integer('value')->unsigned();
            $table->string('effect')->nullable();
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
        Schema::dropIfExists('items_aid');
    }
}
