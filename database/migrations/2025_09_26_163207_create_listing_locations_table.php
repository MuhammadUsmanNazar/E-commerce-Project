<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('listing_locations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('listing_id'); // later add FK
            $table->foreignId('country_id'); // later add FK
            $table->foreignId('province_id')->nullable(); // later add FK
            $table->foreignId('city_id')->nullable(); // later add FK
            $table->foreignId('sub_locality_id')->nullable(); // later add FK
            $table->string('address')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('listing_locations');
    }
};
