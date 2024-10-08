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
        Schema::create('properties', function (Blueprint $table) {
            $table->id('property_id');
            $table->string('property_name', 255);
            $table->unsignedBigInteger('landlord_id');
            $table->string('location', 255);
            $table->integer('nbedrooms');
            $table->integer('nbathrooms');
            $table->float('area');
            $table->string('view', 255)->nullable();
            $table->integer('floor')->nullable();
            $table->boolean('elevator')->nullable();
            $table->decimal('price_per_month', 10, 2);
            $table->timestamps();

            $table->foreign('landlord_id')->references('landlord_id')->on('landlords')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
