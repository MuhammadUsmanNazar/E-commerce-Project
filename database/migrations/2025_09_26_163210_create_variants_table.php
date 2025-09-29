<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('variants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id'); // later FK
            $table->foreignId('storage_id'); // later FK
            $table->foreignId('ram_id');     // later FK
            $table->foreignId('color_id');   // later FK
            $table->foreignId('display_id')->nullable(); // later FK
            $table->foreignId('battery_id')->nullable(); // later FK
            $table->string('name'); // e.g. 128GB / 8GB RAM / Red
            $table->decimal('additional_price', 10, 2)->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('variants');
    }
};
