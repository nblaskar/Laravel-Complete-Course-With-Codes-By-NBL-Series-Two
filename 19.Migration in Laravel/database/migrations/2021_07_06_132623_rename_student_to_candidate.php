<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameStudentToCandidate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 4.1)Rename Table Name on Migration
        Schema::rename('student', 'candidate');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
           // 4.2)Undo the Renamed Table Name on Rollback
           Schema::rename('candidate', 'student');
    }
}
