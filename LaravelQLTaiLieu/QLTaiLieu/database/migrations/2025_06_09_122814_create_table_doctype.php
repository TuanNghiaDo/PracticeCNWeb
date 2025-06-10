<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('doctype', function (Blueprint $table) {
            $table->integerIncrements('doc_type_id');
            $table->string('doc_type_name');
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('doctype');
    }
};
