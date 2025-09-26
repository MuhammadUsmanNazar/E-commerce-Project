<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('short_name', 5);
            $table->string('iso2_code', 5);
            $table->string('currency_code', 10);
            $table->string('currency_symbol', 5);
            $table->string('currency_name', 50);
            $table->string('phone_code', 10);
            $table->string('continent')->nullable();
            $table->string('flag_svg_url')->nullable();
            $table->string('time_zone')->nullable();
            $table->string('default_language', 10)->nullable();
            $table->string('week_start_day', 10)->nullable();
            $table->decimal('latitude', 10, 7)->nullable();
            $table->decimal('longitude', 10, 7)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void {
        Schema::dropIfExists('countries');
    }
};
