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
        Schema::create('feedback', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('exhibit_id');
            $table->string('full_name');
            $table->string('email');
            $table->text('comment');
            $table->tinyInteger('rating')->nullable();
            $table->timestamps();
    
            $table->foreign('exhibit_id')->references('id')->on('exhibits')->onDelete('cascade');
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feedback');
    }
};
