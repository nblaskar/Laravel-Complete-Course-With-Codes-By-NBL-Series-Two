<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkeyCourseStudent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //15.1)Add Foreign key at Student and Course Table
        Schema::table('course', function (Blueprint $table) {
            // Make A Colum and Assign as foreign Key   
            $table->unsignedBigInteger('stu_id');
            $table->foreign('stu_id')->references('id')->on('students');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //15.2)Drop Foreign key
        Schema::table('course', function (Blueprint $table) {
            $table->dropForeign(['stu_id']);
            $table->dropColumn('stu_id');
        });
    }
}
