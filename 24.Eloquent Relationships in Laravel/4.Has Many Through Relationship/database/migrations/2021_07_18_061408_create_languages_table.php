<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create Language Database Table
        Schema::create('languages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
            // Create Foreign Key Column
            $table->unsignedBigInteger('project_id');
            // Connect Project and Language By Foreign Key
            $table->foreign('project_id')->references('id')->on('projects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('languages');
    }
}
