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
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->string('name', 128)->unique();
            $table->string('email', 216)->nullable();
            $table->string('phone', 24)->nullable();
            $table->string('alternative_phone', 24)->nullable();
            $table->string('province', 24)->nullable();
            $table->string('county', 24)->nullable();
            $table->string('town', 24)->nullable();
            $table->string('creation_document', 32)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schools');
    }
};
