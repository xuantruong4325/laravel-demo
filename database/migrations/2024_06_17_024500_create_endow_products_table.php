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
        Schema::create('endow_products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("content_id");
            $table->unsignedBigInteger("endow_id");
            $table->timestamps();

            $table->foreign('content_id')->references('id')->on('contents')->onDelete('cascade');
            $table->foreign('endow_id')->references('id')->on('endows')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('endow_products');
    }
};
