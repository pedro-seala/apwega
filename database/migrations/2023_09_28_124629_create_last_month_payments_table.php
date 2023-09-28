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
        Schema::create('last_month_payments', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('month_id');
            $table->foreign('month_id')
                ->references('id')
                ->on('months');

            $table->unsignedBigInteger('school_class_id');
            $table->foreign('school_class_id')
                ->references('id')
                ->on('school_classes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('last_month_payments');
    }
};
