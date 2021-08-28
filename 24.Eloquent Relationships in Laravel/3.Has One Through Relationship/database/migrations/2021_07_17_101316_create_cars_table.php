<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create Car Database Table
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('model');
            $table->timestamps();
            // Create Foreign Key Column
            $table->unsignedBigInteger('mechanic_id');
            // Connect Mechanic and Car by Foreign Key
            $table->foreign('mechanic_id')->references('id')->on('mechanics');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
