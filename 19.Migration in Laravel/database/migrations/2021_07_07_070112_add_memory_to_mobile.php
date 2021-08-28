<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMemoryToMobile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //6.1)Add A New Column To Existing Table on migration
        Schema::table('mobile', function (Blueprint $table) {
            $table->string('memory');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //6.2)Remove above added Column on rollback
        Schema::table('mobile', function (Blueprint $table) {
            $table->dropColumn('memory');
        });
    }
}
