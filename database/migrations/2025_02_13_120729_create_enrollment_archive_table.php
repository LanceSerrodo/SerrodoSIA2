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
        Schema::create('enrollment_archive', function (Blueprint $table) {
            $table->id();
            $table->string('studentId');
            $table->integer('TrackId');
            $table->string('medical_image')->nullable();
            $table->string('parent_Consent')->nullable();
            $table->integer('TrackName');
            $table->enum(('status'), ['Pending', 'Enrolled', 'Declined']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enrollment_archive');
    }
};
