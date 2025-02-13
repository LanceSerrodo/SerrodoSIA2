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
        Schema::create('student_acc_tbl', function (Blueprint $table) {
            $table->id(); // Primary auto-incrementing key
            $table->string('studentId')->unique(); // Unique student identifier
            $table->string('password');
            $table->string('stat');
            $table->timestamps();
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_acc_tbl');
    }
};
