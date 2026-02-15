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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->integer("flight_ID");
            $table->integer("seat_ID");
            $table->integer("user_ID");
            $table->timestamps();

            $table->foreign("flight_ID")->references('id')->on('flights');
            $table->foreign("seat_ID")->references('id')->on('seats');
            $table->foreign("user_ID")->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
