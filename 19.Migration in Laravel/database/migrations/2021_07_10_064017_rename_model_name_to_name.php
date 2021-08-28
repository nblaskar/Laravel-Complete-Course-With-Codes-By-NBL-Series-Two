<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameModelNameToName extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 11.1)Rename Existing Column Name by Migration
        Schema::table('laptop', function (Blueprint $table) {
            $table->renameColumn('model_name','name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // 11.2)Undo the above Renamed Column Name by Rollback
        Schema::table('laptop', function (Blueprint $table) {
            $table->renameColumn('name','model_name');
        });
    }
}
