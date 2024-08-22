<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('audio_files', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('exhibit_id');
            $table->unsignedBigInteger('language_id');
            $table->string('audio_url');
            $table->timestamps();

            $table->foreign('exhibit_id')->references('id')->on('exhibits')->onDelete('cascade');
            $table->foreign('language_id')->references('id')->on('languages')->onDelete('cascade');
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('audio_files');
    }
};
