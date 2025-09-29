<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('listing_images', function (Blueprint $table) {
            // $table->boolean('is_primary')->default(false)->after('listing_id');

            $table->foreign('listing_id')
                ->references('id')
                ->on('listings')
                ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::table('listing_images', function (Blueprint $table) {
            $table->dropForeign(['listing_id']);
            $table->dropColumn('is_primary');
        });
    }
};
