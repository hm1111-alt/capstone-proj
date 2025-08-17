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
        
        Schema::create('approved_travel_orders', function (Blueprint $table) {
            $table->id();
            $table->string('employee_name');
            $table->date('date');
            $table->string('destination');
            $table->time('departure_time');
            $table->string('means_of_transportation')->default('University Vehicle');
            $table->enum('status', ['Assigned', 'Pending Assignment']);
            $table->string('attachment')->nullable(); // img/pdf
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_approved_travel_order');
    }
};
