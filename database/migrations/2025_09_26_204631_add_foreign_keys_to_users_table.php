<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->foreign('country_id')
                ->references('id')
                ->on('countries')
                ->onDelete('restrict');

            $table->foreign('province_id')
                ->references('id')
                ->on('provinces')
                ->onDelete('restrict');

            $table->foreign('city_id')
                ->references('id')
                ->on('cities')
                ->onDelete('restrict');

            $table->foreign('sub_locality_id')
                ->references('id')
                ->on('sub_localities')
                ->onDelete('restrict');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['country_id']);
            $table->dropForeign(['province_id']);
            $table->dropForeign(['city_id']);
            $table->dropForeign(['sub_locality_id']);
        });
    }
};
