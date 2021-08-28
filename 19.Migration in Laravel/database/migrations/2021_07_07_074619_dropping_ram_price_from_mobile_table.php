<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DroppingRamPriceFromMobileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 8.1)Drop Existing Columns on Migration
        Schema::table('mobile', function (Blueprint $table) {
            $table->dropColumn(['ram','price']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // 8.2)Add the above dropped Columns on Rollback
        Schema::table('mobile', function (Blueprint $table) {
            $table->integer('ram');
            $table->float('price', 8, 2);
        });
    }
}
