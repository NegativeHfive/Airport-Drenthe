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
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->integer("airline_ID");
            $table->integer("amount_of_seats");
            $table->double("price_per_seat");
            $table->integer("employee_ID");
            $table->timestamps();

            $table->foreign("airline_ID")->references('id')->on('airlines');
            $table->foreign("employee_ID")->references('id')->on('employees');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flights');
    }
};
