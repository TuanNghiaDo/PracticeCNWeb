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
        Schema::create('thietbis', function (Blueprint $table) {
            $table->integerIncrements('ma_of_thietbi');
            $table->string('ten_thiet_bi');
            $table->string('mota_thiet_bi');
            $table->year('nam_san_xuat');
            $table->unsignedInteger('ma_loai');
            $table->foreign('ma_loai')->references('ma_thietbi')->on('loai_thietbi')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('thietbis');
    }
};
