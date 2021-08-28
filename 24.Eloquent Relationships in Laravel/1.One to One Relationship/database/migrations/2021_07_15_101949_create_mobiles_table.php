<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMobilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Creating Table For Mobile with foreign key
        Schema::create('mobiles', function (Blueprint $table) {
            $table->id();
            $table->string('model');
            $table->timestamps();
            // Creating a column for Foreign key to connect Customer Table with Mobile Table
            $table->unsignedBigInteger('customer_id');// this filed name should be (TargetModelName_id) and column type also should matched with targeted column type
            //Assign the generated column as Foreign Key as
            $table->foreign('customer_id')->references('id')->on('customers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mobiles');
    }
}
