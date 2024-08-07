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
        Schema::create('editfooters', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('file_banner1');
            $table->string('file_banner2');
            $table->string('file_banner3');
            $table->string('file_banner4');
            $table->string('file_cart');
            $table->string('file_footer_left');
            $table->string('file_footer_right');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('editfooters');
    }
};
