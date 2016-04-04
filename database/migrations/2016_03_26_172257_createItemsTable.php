<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('item_id');
            $table->string('item_type');

            $table->string('item_name');
            $table->float('item_weight');

            $table->tinyInteger('wpn_hands')->nullable();

            $table->float('mel_oal')->nullable();
            $table->float('mel_pob')->nullable();

            $table->string('rng_projectile')->nullable();
            $table->float('rng_range')->nullable();

            $table->string('armr_material')->nullable();

            $table->string('shld_shape')->nullable();
            $table->float('shld_height')->nullable();
            $table->float('shld_width')->nullable();

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
        Schema::drop('users');
    }
}
