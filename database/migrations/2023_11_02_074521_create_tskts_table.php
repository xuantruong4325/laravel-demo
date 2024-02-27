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
        Schema::create('tskts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('technicaInformation_id');
            $table->unsignedBigInteger('content_id');
            $table->string('information');
            $table->timestamps();

            $table->foreign('content_id')->references('id')->on('contents')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tskts');
    }
};
