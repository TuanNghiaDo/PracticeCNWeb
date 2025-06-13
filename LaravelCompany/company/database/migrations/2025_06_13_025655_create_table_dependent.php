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
        Schema::create('dependents', function (Blueprint $table) {
            $table->integerIncrements('DependentID');
            $table->string('Name');
            $table->enum('sex', ['Nam', 'Nữ']);
            $table->unsignedInteger('EmployeeID');
            $table->foreign('EmployeeID')
                ->references('EmployeeID')
                ->on('employees')
                ->onDelete('cascade');
            $table->string('relationship');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dependents');
    }
};
