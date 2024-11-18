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
            $table->decimal('cleaning_fee', 10, 2)->nullable()->after('ListingTitle'); // Add cleaning_fee
            $table->decimal('security_deposit', 10, 2)->nullable()->after('cleaning_fee'); // Add security_deposit
            $table->enum('petsAllowed', ['Allowed', 'Allowed under certain conditions', 'Not allow'])
                  ->default('Allowed')
                  ->after('security_deposit'); // Pets allowed
            $table->enum('smokingAllowed', ['Allowed', 'Allowed under certain conditions', 'Not allow'])
                  ->default('Allowed')
                  ->after('petsAllowed'); // Smoking allowed
            $table->text('rules')->nullable()->after('smokingAllowed'); 
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('properties', function (Blueprint $table) {
            $table->dropColumn(['cleaningFee', 'securityDeposit', 'petsAllowed', 'smokingAllowed', 'rules']);
        });
    }
};
