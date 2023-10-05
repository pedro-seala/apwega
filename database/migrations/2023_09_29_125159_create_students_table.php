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
            $table->string('processNb')->unique('idx_student_process')->nullable();
            $table->string('name', 64)->unique('idx_student_name');
            $table->tinyInteger('gender');
            $table->string('father', 64)->nullable();
            $table->string('mother', 64)->nullable();
            $table->date('birthDate');
            $table->string('identityCard', 14)->unique('idx_student_ic');
            $table->date('icIssueDate')->nullable();
            $table->string('naturalness', 32)->nullable();
            $table->string('address', 32)->nullable();
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
