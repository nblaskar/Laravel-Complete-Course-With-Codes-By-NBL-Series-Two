<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DroppingEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 2.1)Dropping Table on Migratiuon
        Schema::dropIfExists('employee');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // 2.2)Create the Above Dropped Table on RollBack
        Schema::create('employee', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }
}
