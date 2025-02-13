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
        Schema::create('student_detailstbl', function (Blueprint $table) {
            $table->id();
            $table->string('studentId'); // Must match the type in student_acc_tbl
            $table->string('lname');
            $table->string('fname');
            $table->string('mname')->nullable();
            $table->string('suffix')->nullable();
            $table->string('email');
            $table->string('phone'); // Use string for phone numbers
            $table->string('gender');
            $table->string('profile')->nullable();
            $table->timestamps();
        
            // Define studentId as a foreign key referencing student_acc_tbl
            $table->foreign('studentId')->references('studentId')->on('student_acc_tbl')->onDelete('cascade')->onUpdate('cascade');
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_detailstbl');
    }
};
