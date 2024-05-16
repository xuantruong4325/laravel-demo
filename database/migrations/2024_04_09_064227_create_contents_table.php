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
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->string('product_type');
            $table->string('discount')->nullable();
            $table->string('file');
            $table->string('content')->nullable();
            $table->integer('quantity')->nullable();
            $table->integer('old_price')->nullable();
            $table->integer('price_after_discount')->nullable();
            $table->string("product_specifications")->nullable();
            $table->string("product_reviews")->nullable();
            $table->unsignedBigInteger("category_id");
            $table->unsignedBigInteger("company_id");
            $table->string('status');
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('category')->onDelete('no action');
            $table->foreign('company_id')->references('id')->on('company')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contents');
    }
};
