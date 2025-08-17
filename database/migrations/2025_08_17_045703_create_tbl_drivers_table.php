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
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('contact_num');
            $table->string('address');
            $table->string('position');
            $table->string('official_station')->default('Motor Pool Section');
            $table->enum('license_type', ['student', 'non-professional', 'professional']);
            $table->enum('employment_status', ['Contractual', 'Permanent']);
            $table->enum('availability_status', ['Available', 'Unavailable']);
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_drivers');
    }
};
