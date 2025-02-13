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
        Schema::create('track_enrollment', function (Blueprint $table) {
            $table->id();
            $table->string('studentId')->unique(); // Must match the type in student_acc_tblss
            $table->unsignedBigInteger('trackId');
            $table->string('medical')->nullable();
            $table->string('parentconsent')->nullable();
            $table->string('trackname');
            $table->string('Status');
        

            $table->foreign('studentId')->references('studentId')->on('student_acc_tbl')->onDelete('cascade')->onUpdate('cascade');
            $table-> foreign('trackId')->references('trackId')->on('tracks')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('track_enrollment');
    }
};
