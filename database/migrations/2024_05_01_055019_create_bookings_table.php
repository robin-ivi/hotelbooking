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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone_no')->nullable();
            $table->string('travel_type')->nullable();
            $table->string('country')->nullable();
            $table->string('id_proof_type')->nullable();
            $table->string('booked_via')->nullable();
            $table->string('billing_instr')->nullable();
            $table->string('payment_mode')->nullable();
            $table->string('type_of_room')->nullable();
            $table->string('room')->nullable();
            $table->string('room_category')->nullable();
            $table->string('occupancy')->nullable();
            $table->string('addvanced_amount')->nullable();
            $table->string('amount')->nullable();
            $table->string('booked_by')->nullable();
            $table->string('check_in')->nullable();
            $table->string('check_out')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
