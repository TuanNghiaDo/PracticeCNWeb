<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('medicines', function (Blueprint $table) {
            $table->integerIncrements('medicine_id');
            $table->string('medicine_name');
            $table->date('product_date');
            $table->date('expiry_date');
            $table->string('medicinal_group');
            $table->unsignedInteger('type_id');
            $table->foreign('type_id')->references('type_id')->on('medicine_types')->onDelete('cascade');
            $table->string('des');
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('medicines');
    }
};
