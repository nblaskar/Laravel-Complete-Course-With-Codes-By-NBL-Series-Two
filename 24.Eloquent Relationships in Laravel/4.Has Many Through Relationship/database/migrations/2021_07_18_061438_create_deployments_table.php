<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeploymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create Deployment Database Table
        Schema::create('deployments', function (Blueprint $table) {
            $table->id();
            $table->string('work');
            $table->timestamps();
            // Create Foreign Key Column
            $table->unsignedBigInteger('language_id');
            // Connect Language and Deployment By Foreign Key
            $table->foreign('language_id')->references('id')->on('languages');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deployments');
    }
}
