<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('prices', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('school_year_id')->nullable();
            $table->foreign('school_year_id')
                ->references('id')
                ->on('school_years');

            $table->unsignedBigInteger('school_class_id')->nullable();
            $table->foreign('school_class_id')
                ->references('id')
                ->on('school_classes');

            $table->unsignedBigInteger('payment_description_id')->nullable();
            $table->foreign('payment_description_id')
                ->references('id')
                ->on('payment_descriptions');

            $table->unsignedBigInteger('course_id')->nullable();
            $table->foreign('course_id')
                ->references('id')
                ->on('courses');

            $table->float('price')->nullable();

            $table->tinyInteger('entity')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prices');
    }
};
