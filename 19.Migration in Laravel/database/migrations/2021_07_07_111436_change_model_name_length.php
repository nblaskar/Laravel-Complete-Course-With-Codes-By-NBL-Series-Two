<?php

use Illuminate\Broadcasting\Channel;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeModelNameLength extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 10.1)Modify/Update the Column Types and Attributes
        Schema::table('laptop', function (Blueprint $table) {
            $table->string('model_name', 150)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // 10.2)Undo the above Modify/Update Column Types and Attributes
        Schema::table('laptop', function (Blueprint $table) {
            $table->string('model_name', 255)->change();
        });
    }
}
