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

        Schema::create('product_type', function (Blueprint $table) {
            $table->id();
            $table->string('product_type_name', 45);
            $table->timestamps();
        });

        Schema::create('product_category', function(Blueprint $table){
            $table->id();
            $table->string('product_category_name',45);
            $table->timestamps();
        });

        Schema::create('product_brand', function(Blueprint $table){
            $table->id();
            $table->string('brand_name',45);
            $table->timestamps();
        });

                Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('product_name', 50);
            $table->string('product_description', 400);
            $table->double('product_price');
            $table->double('Shipping_price');
            $table->unsignedBigInteger('product_type_id');
            $table->unsignedBigInteger('product_category_id');
            $table->unsignedBigInteger('product_brand_id');
            $table->string('seller_email', 100);
            $table->integer('product_count');
            $table->timestamps();

            $table->foreign('product_category_id')->references('id')->on('product_category');
            $table->foreign('product_brand_id')->references('id')->on('product_brand');
            $table->foreign('seller_email')->references('email')->on('users');
        });

        Schema::create('storage_size_capacity_size', function (Blueprint $table) {
            $table->id();
            $table->string('storage_size_capacity_size', 45);
            $table->string('ram_rom_size');
            $table->unsignedBigInteger('category_id');
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('product_category');
        });
        schema::create('color', function(Blueprint $table){
            $table->id();
            $table->string('color_name',45);
            $table->timestamps();
        });
        Schema::create('product_has_color', function (Blueprint $table){
            $table->id();
            $table->foreignId('product_id');
            $table->foreignId('color_id');
            $table->timestamps();

            $table->foreign('product_id')->references('id')->on('product');
            $table->foreign('color_id')->references('id')->on('color');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
        Schema::dropIfExists('product_type');
        Schema::dropIfExists('product_category');
        Schema::dropIfExists('product_brand');
        Schema::dropIfExists('storage_size_capacity_size');
        Schema::dropIfExists('color');
        Schema::dropIfExists('product_has_color');

    }
};
