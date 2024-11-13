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
        Schema::table('bookings', function (Blueprint $table) {
            $table->enum('PurposeOfStay', ['Business Travel/ Work', 'Moving to this city or country', 'Holiday', 'Other'])->nullable();
            $table->string('purposeExplain')->nullable();
            $table->boolean('is_booking_for_other')->default(false);
            $table->string('other_name')->nullable();
            $table->string('other_email')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->dropColumn('PurposeOfStay');
            $table->dropColumn('purposeExplain');
            $table->dropColumn('is_booking_for_other');
            $table->dropColumn('other_name');
            $table->dropColumn('other_email');
        });
    }
};
