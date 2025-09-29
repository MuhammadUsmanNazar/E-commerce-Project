<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('variants', function (Blueprint $table) {
            $table->foreign('product_id')
                ->references('id')
                ->on('products')
                ->onDelete('cascade');

            $table->foreign('storage_id')
                ->references('id')
                ->on('storages')
                ->onDelete('restrict');

            $table->foreign('ram_id')
                ->references('id')
                ->on('rams')
                ->onDelete('restrict');

            $table->foreign('color_id')
                ->references('id')
                ->on('colors')
                ->onDelete('restrict');

            $table->foreign('display_id')
                ->references('id')
                ->on('displays')
                ->onDelete('restrict');

            $table->foreign('battery_id')
                ->references('id')
                ->on('batteries')
                ->onDelete('restrict');
        });
    }

    public function down(): void
    {
        Schema::table('variants', function (Blueprint $table) {
            $table->dropForeign(['product_id']);
            $table->dropForeign(['storage_id']);
            $table->dropForeign(['ram_id']);
            $table->dropForeign(['color_id']);
            $table->dropForeign(['display_id']);
            $table->dropForeign(['battery_id']);
        });
    }
};
