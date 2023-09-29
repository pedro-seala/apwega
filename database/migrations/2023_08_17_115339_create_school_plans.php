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
        Schema::create('school_plans', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('course_id');
            $table->foreign('course_id')
                    ->references('id')
                    ->on('courses');

            $table->unsignedBigInteger('school_class_id');
            $table->foreign('school_class_id')
                    ->references('id')
                    ->on('school_classes');

            $table->unsignedBigInteger('subject_category_id');
            $table->foreign('subject_category_id')
                    ->references('id')
                    ->on('subject_categories');

            $table->unsignedBigInteger('school_subject_id');
            $table->foreign('school_subject_id')
                    ->references('id')
                    ->on('school_subjects');

            $table->integer('time');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('school_plans');
    }
};
