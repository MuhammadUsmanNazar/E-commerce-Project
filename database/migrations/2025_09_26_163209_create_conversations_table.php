<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('conversations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('listing_id'); // later add FK
            $table->foreignId('seller_id');  // later add FK
            $table->foreignId('buyer_id');   // later add FK
            $table->string('room_id')->unique();
            $table->timestamp('started_at')->nullable();
            $table->boolean('status')->default(true); // active/inactive
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('conversations');
    }
};
