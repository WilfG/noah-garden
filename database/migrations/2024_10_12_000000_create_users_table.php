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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('firstname', 45);
            $table->string('lastname', 45);
            $table->string('middlename', 45)->nullable();
            $table->date('birthdate')->nullable();
            $table->string('gender', 6)->nullable();
            $table->string('title', 6)->nullable();
            $table->string('email', 45);
            $table->string('phoneNumber', 15)->nullable();
            $table->string('password');
            $table->string('photo', 255)->nullable();
            $table->index('role_id')->nullable();
            $table->foreignId('role_id')->references('id')->on('roles')->onDelete('cascade');
            $table->boolean('prod')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
