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
        Schema::create('trip_tickets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('approved_travel_order_id')->constrained('approved_travel_orders')->onDelete('cascade');
            $table->foreignId('vehicle_id')->constrained('vehicles')->onDelete('cascade');
            $table->foreignId('driver_id')->constrained('drivers')->onDelete('cascade');
            $table->string('trip_ticket_no')->unique(); // format YYYY-MM-XXXX
            $table->time('time');
            $table->date('date_from');
            $table->date('date_to');
            $table->string('employee_names');
            $table->string('head_of_the_party');
            $table->string('destination');
            $table->string('vehicle_name');
            $table->string('driver_name');
            $table->enum('status', ['Upcoming', 'Dispatched', 'Completed']);
            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_trip_tickets');
    }
};
