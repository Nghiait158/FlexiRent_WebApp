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
        Schema::create('contracts', function (Blueprint $table) {
            $table->id('contract_id');
            // $table->unsignedBigInteger('landlord_id');
            // $table->unsignedBigInteger('guest_id');
            $table->unsignedBigInteger('booking_id');
            $table->decimal('rent_amount', 10, 2);
            $table->string('payment_method', 50);
            // $table->date('payment_due_date');
            $table->date('start_date');
            $table->date('end_date');
            // $table->decimal('deposit_amount', 10, 2);
            // $table->text('deposit_conditions')->nullable();
            $table->text('landlord_responsibilities')->nullable();
            $table->text('tenant_responsibilities')->nullable();
            $table->text('termination_conditions')->nullable();
            $table->text('usage_rules')->nullable();
            $table->timestamps();
        
            // Khai báo khóa ngoại
            // $table->foreign('landlord_id')->references('landlord_id')->on('landlords')->onDelete('cascade');
            // $table->foreign('guest_id')->references('guest_id')->on('guests')->onDelete('cascade');
            $table->foreign('booking_id')->references('booking_id')->on('bookings')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contracts');
    }
};
