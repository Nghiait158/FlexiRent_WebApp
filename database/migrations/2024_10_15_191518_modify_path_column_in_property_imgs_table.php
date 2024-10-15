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
        Schema::table('property_imgs', function (Blueprint $table) {
            // Modify the 'path' column to allow for a longer string
            $table->string('path', 1000)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('property_imgs', function (Blueprint $table) {
            // Revert back to the original column length if needed
            $table->string('path', 255)->change();
        });
    }
};
