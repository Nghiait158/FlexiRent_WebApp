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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id('review_id');
            $table->unsignedBigInteger('property_id');
            $table->unsignedBigInteger('guest_id');
            $table->integer('rating')->nullable()->check(function ($table) {
                return $table->rating >= 1 && $table->rating <= 5;
            });
            $table->text('comment')->nullable();
            $table->timestamps();

            $table->foreign('property_id')->references('property_id')->on('properties')->onDelete('cascade');
            $table->foreign('guest_id')->references('guest_id')->on('guests')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
