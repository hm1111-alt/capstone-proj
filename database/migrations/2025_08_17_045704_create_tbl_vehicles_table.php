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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->enum('classification', ['Van Vehicle', 'Small Vehicle', 'Truck', 'Philscat Vehicle']);
            $table->string('plate_no')->unique();
            $table->string('model');
            $table->string('fuel_type');
            $table->integer('seating_capacity');
            $table->date('vehicle_registration_date');
            $table->enum('status', ['Under Maintenance', 'Available', 'In Use','Archived']);
            $table->string('image')->nullable();
            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_vehicles');
    }
};
