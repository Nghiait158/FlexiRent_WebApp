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
        Schema::table('properties', function (Blueprint $table) {
            $table->string('accommodation_type')->nullable();  
            $table->integer('room')->nullable();               
            $table->enum('wifi', [1, 0])->default('0');          
            $table->integer('internetSpeed')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('properties', function (Blueprint $table) {
            $table->dropColumn(['accommodation_type', 'room', 'wifi', 'internetSpeed']);
        });
    }
};
