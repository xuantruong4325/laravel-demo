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
        Schema::create('nd_techniques', function (Blueprint $table) {
            $table->id();
            $table->string('nameTechnique')->nullable();
            $table->unsignedBigInteger("content_id");
            $table->unsignedBigInteger("technique_id");
            $table->timestamps();

            $table->foreign('content_id')->references('id')->on('contents')->onDelete('cascade');
            $table->foreign('technique_id')->references('id')->on('technique')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nd_techniques');
    }
};
