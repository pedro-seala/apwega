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
        Schema::create('created_classes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('school_year_id')->constrained()->restrictOnDelete;
            $table->foreignId('school_class_id')->constrained()->restrictOnDelete;
            $table->foreignId('course_id')->constrained()->restrictOnDelete;
            $table->enum('day_period', ['Manhã', 'Tarde', 'Noite']);
            $table->string('room_number', 3)->nullable();
            $table->string('description', 32);
            $table->integer('student_limit')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('created_classes');
    }
};
