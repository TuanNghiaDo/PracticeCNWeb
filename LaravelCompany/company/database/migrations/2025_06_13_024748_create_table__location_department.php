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
        Schema::create('location_department', function (Blueprint $table) {
            $table->unsignedInteger('DepartmentID');
            $table->string('Location');
            $table->foreign('DepartmentID')
                ->references('DepartmentID')
                ->on('departments')
                ->onDelete('cascade');
            $table->primary(['DepartmentID', 'Location']);
            $table->index(['DepartmentID', 'Location'], 'idx_location_department');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('location_department');
    }
};
