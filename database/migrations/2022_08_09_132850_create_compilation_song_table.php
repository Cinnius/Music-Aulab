<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compilation_song', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('song_id');
            $table->foreign('song_id')->references('id')->on('songs');
            $table->unsignedBigInteger('compilation_id');
            $table->foreign('compilation_id')->references('id')->on('compilations');
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
        Schema::dropIfExists('compilation_song');
    }
};
