<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product_has_storage_size_capacity_size', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id');
            $table->foreignId('storage_size_capacity_size_id');
            $table->timestamps();

            // Specify custom names for the foreign key constraints
            $table->foreign('product_id', 'fk_product_has_storage_product')->references('id')->on('product');
            $table->foreign('storage_size_capacity_size_id', 'fk_product_has_storage_size')->references('id')->on('storage_size_capacity_size');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('product_has_storage_size_capacity_size', function (Blueprint $table) {
            // Drop the foreign key constraints using the custom names
            $table->dropForeign('fk_product_has_storage_product');
            $table->dropForeign('fk_product_has_storage_size');
        });

        Schema::dropIfExists('product_has_storage_size_capacity_size');
    }
};
