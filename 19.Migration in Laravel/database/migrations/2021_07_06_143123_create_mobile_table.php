<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMobileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 5)Creating Table with Multiple Column
        Schema::create('mobile', function (Blueprint $table) {
            $table->id();
            $table->string('model_name');
            $table->string('brand_name');
            $table->float('price',8,2);
            $table->integer('ram');
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
        Schema::dropIfExists('mobile');
    }
}
