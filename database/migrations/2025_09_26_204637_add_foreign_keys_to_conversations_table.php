<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('conversations', function (Blueprint $table) {
            $table->foreign('listing_id')
                ->references('id')
                ->on('listings')
                ->onDelete('cascade');

            $table->foreign('seller_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->foreign('buyer_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::table('conversations', function (Blueprint $table) {
            $table->dropForeign(['listing_id']);
            $table->dropForeign(['seller_id']);
            $table->dropForeign(['buyer_id']);
        });
    }
};
