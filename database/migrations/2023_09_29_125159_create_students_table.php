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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('processNb')->nullable();
            $table->string('name', 128);
            $table->tinyInteger('gender');
            $table->string('father', 128)->nullable();
            $table->string('mother', 128)->nullable();
            $table->date('birthDate');
            $table->string('identityCard', 14);
            $table->date('icIssueDate')->nullable();
            $table->date('icExpirationDate')->nullable();
            $table->string('naturalness', 64)->nullable();
            $table->string('address', 64)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
