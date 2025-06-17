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
        Schema::create('medecines', function (Blueprint $table) {
            $table->integerIncrements('medecine_id');
            $table->string('medecine_name');
            $table->date('product_date');
            $table->date('out_of_date');
            $table->string('nhom_duoc_tinh');
            $table->unsignedInteger('medecine_type_id');
            $table->string('des');
            $table->foreign('medecine_type_id')->references('medecine_type_id')->on('medecinetypes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medecines');
    }
};
