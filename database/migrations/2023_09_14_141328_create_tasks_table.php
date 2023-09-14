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
        Schema::create('trimester', function (Blueprint $table) {
            $table->id('trimester_id');
            $table->float('math_grade');
            $table->float('science_grade');
            $table->float('history_grade');
            $table->float('language_grade');
            $table->timestamps();

            $table->unsignedBigInteger('quaterly_id');
            $table->foreign('quaterly_id')
                ->references('quaterly_id')
                ->on('quaterly')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trimester');
    }
};
