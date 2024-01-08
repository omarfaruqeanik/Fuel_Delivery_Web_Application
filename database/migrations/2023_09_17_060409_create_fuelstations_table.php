<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuelstationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fuelstations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('owner_name');
            $table->string('owner_email');
            $table->string('stn_name');
            $table->string('stn_phn');
            $table->string('fuel_name1');
            $table->string('fuel_name2');
            $table->string('fuel_name');
            $table->string('fuel1_price');
            $table->string('fuel2_price');
            $table->string('fuel3_price');
            $table->string('area');
            $table->string('map_url');
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
        Schema::dropIfExists('fuelstations');
    }
}
