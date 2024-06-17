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
        Schema::create('checkout_carts', function (Blueprint $table) {
            $table->id();
            $table->string('nameUser',255)->nullable();
            $table->string('phoneUser',255)->nullable();
            $table->integer('idUser')->nullable();
            $table->string('payments',255)->nullable();
            $table->integer('totalProduct')->nullable();
            $table->integer('totalPrice')->nullable();
            $table->string('order_status',30)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('checkout_carts');
    }
};
