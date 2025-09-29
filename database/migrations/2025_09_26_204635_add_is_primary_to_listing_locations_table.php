<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('listing_locations', function (Blueprint $table) {
            $table->boolean('is_primary')->default(false)->after('sub_locality_id');

            $table->foreign('listing_id')
                ->references('id')
                ->on('listings')
                ->onDelete('cascade');

            $table->foreign('country_id')
                ->references('id')
                ->on('countries')
                ->onDelete('cascade');

            $table->foreign('province_id')
                ->references('id')
                ->on('provinces')
                ->onDelete('cascade');

            $table->foreign('city_id')
                ->references('id')
                ->on('cities')
                ->onDelete('cascade');

            $table->foreign('sub_locality_id')
                ->references('id')
                ->on('sub_localities')
                ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::table('listing_locations', function (Blueprint $table) {
            $table->dropForeign(['listing_id']);
            $table->dropForeign(['country_id']);
            $table->dropForeign(['province_id']);
            $table->dropForeign(['city_id']);
            $table->dropForeign(['sub_locality_id']);
            $table->dropColumn('is_primary');
        });
    }
};
