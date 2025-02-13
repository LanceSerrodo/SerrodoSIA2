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
        Schema::create('coordinator_acc_tbl', function (Blueprint $table) {
            $table->id();
            $table->string('coordinatorId')->unique();
            $table->string('lname');
            $table->string('fname');
            $table->string('mname');
            $table->string('suffix');
            $table->string('gender');
            $table->string('email');
            $table->string('password');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coordinator_acc_tbl');
    }
};
