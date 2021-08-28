<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaptopTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 9)Column Modifier to Modify a Column Before Create
        Schema::create('laptop', function (Blueprint $table) {
            $table->id();
            $table->string('model_name');
            $table->string('brand_name')->default('NooreHost');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laptop');
    }
}
