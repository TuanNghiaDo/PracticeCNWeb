<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->integerIncrements('RoomID');
            $table->unsignedInteger('RoomNumber');
            $table->enum('RoomType', ['standard', 'deluxe', 'suite']);
            $table->enum('Availability', ['available', 'occupied', 'under maintenance']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
