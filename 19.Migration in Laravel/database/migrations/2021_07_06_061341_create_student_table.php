<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 1)Table Creation
        // Schema::create('student', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        // });

        // 3)Checking for Table/Column Existance
        if (!Schema::hasTable('student')) {
            Schema::create('student', function (Blueprint $table) {
                $table->id();
                $table->timestamps();
            });            
        }

      

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
