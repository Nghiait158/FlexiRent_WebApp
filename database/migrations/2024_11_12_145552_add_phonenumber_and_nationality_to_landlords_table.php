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
        Schema::table('landlords', function (Blueprint $table) {
            $table->string('phonenumber')->nullable();
            $table->string('nationality')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('landlords', function (Blueprint $table) {
            $table->dropColumn(['phonenumber', 'nationality']);
        });
    }
};
