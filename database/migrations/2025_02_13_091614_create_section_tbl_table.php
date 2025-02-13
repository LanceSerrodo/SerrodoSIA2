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
        Schema::create('section_tbl', function (Blueprint $table) {
            $table->id();
            $table->string('studentId');
            $table->string('Course');
            $table->string('yearlevel');
            $table->string('section');
            $table->string('instructorId');
            $table->string('Track');
            $table->timestamps();

            $table->foreign('studentId')->references('studentId')->on('student_detailstbl')->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('instructorId')->references('instructorId')->on('instructors_tbl')->onDelete('cascade')->onUpdate('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('section_tbl');
    }
};
