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
            $table->string('discount',10)->nullable();
            $table->string('file',255);
            $table->string('content',255)->nullable();
            $table->integer('quantity')->nullable();
            $table->integer('sold')->nullable();
            $table->integer('old_price')->nullable();
            $table->integer('price_after_discount')->nullable();
            $table->text("product_specifications")->nullable();
            $table->text("product_reviews")->nullable();
            $table->unsignedBigInteger("category_id");
            $table->unsignedBigInteger("company_id");
            $table->string('status',20);
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
