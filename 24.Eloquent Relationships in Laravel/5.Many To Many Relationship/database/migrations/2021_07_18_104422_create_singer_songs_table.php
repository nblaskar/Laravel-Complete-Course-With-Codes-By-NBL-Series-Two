<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSingerSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create SingerSong Mediator Database Table
        Schema::create('singer_songs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            // Create Foreign Key Column to connet Singer and SingerSong Table
            $table->unsignedBigInteger('singer_id');
            $table->foreign('singer_id')->references('id')->on('singers');
            // Create Foreign Key Column to connet Song and SingerSong Table
            $table->unsignedBigInteger('song_id');
            $table->foreign('song_id')->references('id')->on('songs');

            // OR You can follow this format also
            // $table->foreignId('singer_id')->constrained('singers');
            // $table->foreignId('song_id')->constrained('songs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('singer_songs');
    }
}
