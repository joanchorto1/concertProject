<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('concert_p_s', function (Blueprint $table) {
            $table->id();
            $table->string('place');
            $table->date('date');
            $table->unsignedBigInteger('artist_id'); // Cambia 'artists' por 'artist_id'
            $table->timestamps();

            // Foreign key definittion;)

            $table->foreign('artist_id')->references('id')->on('artists');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('concert_p_s');
    }
};
