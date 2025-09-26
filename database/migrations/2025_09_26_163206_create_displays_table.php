<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('displays', function (Blueprint $table) {
            $table->id();
            $table->string('type'); // e.g. AMOLED, LCD
            $table->string('size')->nullable(); // e.g. 6.5 inch
            $table->string('resolution')->nullable(); // e.g. 1080x2400
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('displays');
    }
};
