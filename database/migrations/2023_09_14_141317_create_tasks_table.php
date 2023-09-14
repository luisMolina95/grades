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
        Schema::create('quaterly', function (Blueprint $table) {
            $table->id('quaterly_id');
            $table->float('average');
            $table->timestamps();

            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')
                ->references('student_id')
                ->on('student')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quaterly');
    }
};
