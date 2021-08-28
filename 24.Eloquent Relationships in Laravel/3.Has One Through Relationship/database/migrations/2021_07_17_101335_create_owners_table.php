<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOwnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create Owner Database Table
        Schema::create('owners', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
            // Create Foreign Key Column
            $table->unsignedBigInteger('car_id');
            // Connect Car and Owner by Foreign Key
            $table->foreign('car_id')->references('id')->on('cars');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('owners');
    }
}
