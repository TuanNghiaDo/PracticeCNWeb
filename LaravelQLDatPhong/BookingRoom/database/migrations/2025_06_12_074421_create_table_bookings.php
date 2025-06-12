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
            $table->integerIncrements('BookingID');
            $table->unsignedInteger('RoomID');
            $table->unsignedInteger('CustomerID');
            $table->date('CheckInDate');
            $table->date('CheckOutDate');
            $table->foreign('RoomID')->references('RoomID')->on('rooms')->onDelete('cascade');
            $table->foreign('CustomerID')->references('CustomerID')->on('customers')->onDelete('cascade');
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
