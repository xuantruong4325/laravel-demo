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
            $table->integer("category_id");
            $table->integer("company_id");
            $table->string('status',20);
            $table->timestamps();
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
