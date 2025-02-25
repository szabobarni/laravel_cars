<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('vin')->index();
            $table->string('license_plate');
            $table->unsignedBigInteger('maker_id');
            $table->foreign('maker_id')->references('id')->on('makers');
            $table->unsignedBigInteger('model_id');
            $table->foreign('model_id')->references('id')->on('models');
            $table->unsignedBigInteger('body_id');
            $table->foreign('body_id')->references('id')->on('bodies');
            $table->unsignedBigInteger('fuel_id');
            $table->foreign('fuel_id')->references('id')->on('fuels');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
};
