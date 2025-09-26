<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('product_fixed_specs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id');   // later add FK
            $table->foreignId('display_id')->nullable(); // later add FK
            $table->foreignId('battery_id')->nullable(); // later add FK
            $table->string('operating_system')->nullable();
            $table->string('os_version')->nullable();
            $table->string('chipset')->nullable();
            $table->string('cpu')->nullable();
            $table->string('gpu')->nullable();
            $table->string('camera_rear')->nullable();
            $table->string('camera_front')->nullable();
            $table->integer('weight_g')->nullable();
            $table->string('sim_type')->nullable();
            $table->string('connectivity')->nullable();
            $table->json('other_features')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product_fixed_specs');
    }
};
