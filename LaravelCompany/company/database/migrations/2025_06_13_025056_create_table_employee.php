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
        Schema::create('employees', function (Blueprint $table) {
            $table->integerIncrements('EmployeeID');
            $table->string('Name');
            $table->string('Location');
            $table->date('BirthDate');
            $table->unsignedInteger('DepartmentID');
            $table->foreign('DepartmentID')
                ->references('DepartmentID')
                ->on('departments')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
