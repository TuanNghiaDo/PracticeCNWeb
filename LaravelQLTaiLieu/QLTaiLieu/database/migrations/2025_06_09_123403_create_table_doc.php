<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('doc', function (Blueprint $table) {
            $table->integerIncrements('doc_id');
            $table->string('doc_name');
            $table->unsignedInteger('doc_type_id');
            $table->foreign('doc_type_id')->references('doc_type_id')->on('doctype')->onDelete('cascade');
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('doc');
    }
};
