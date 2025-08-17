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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->foreignId('approved_travel_order_id')->constrained('approved_travel_orders')->onDelete('cascade');
            $table->string('employee_name');
            $table->timestamps();
        });
 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
