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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('photo');
            $table->string('fname');
            $table->string('lname');
            $table->enum('gender', ['Male', 'Female', 'Others']);
            $table->string('email');
            $table->string('mobile');
            $table->string('address');
            $table->string('pob');
            $table->date('dob');
            $table->enum('status', ['work', 'fired', 'others']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
