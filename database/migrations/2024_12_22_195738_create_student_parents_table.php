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
        Schema::create('student_parents', function (Blueprint $table) {
            $table->id();
            $table->string('firsName',50);
            $table->string('lastName',50);
            $table->dateTime('date_of_birth');
            $table->enum('gender',['m','f']);
            $table->enum('blood_Type',['O-','O+','A-','A+','B-','B+','AB-','AB+',]);
            $table->string('adress');
            $table->string('phone',10)->unique();
            $table->string('email',60)->unique();
            $table->dateTime('last_login');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_parents');
    }
};
