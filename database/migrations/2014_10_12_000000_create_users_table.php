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
            $table->string('name', 30);
            $table->string('email', 50)->unique();
            $table->string('password', 255);
            $table->string('phone', 20)->nullable();
            $table->string('conscious', 40)->nullable();
            $table->string('district', 40)->nullable();
            $table->string('commune', 40)->nullable();
            $table->string('address', 100)->nullable();
            $table->string('user_type')->default('user');
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
