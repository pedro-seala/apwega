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
        Schema::create('seal_notes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('month_id');
            $table->foreign('month_id')
                    ->references('id')
                    ->on('months');

            $table->unsignedBigInteger('quarter_id');
            $table->foreign('quarter_id')
                    ->references('id')
                    ->on('quarters');

            $table->tinyInteger('status')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seal_notes');
    }
};
