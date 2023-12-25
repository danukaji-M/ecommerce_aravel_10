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
        Schema::create('product_click', function (Blueprint $table){
            $table->id();
            $table->foreignId('product_id');
            $table->integer('clicks');
            $table->timestamps();

            $table->foreign('product_id')->references('id')->on('product');
        } );

        Schema::create('category_click', function(Blueprint $table){
            $table->id();
            $table->foreignId('category_id');
            $table->integer('clicks');
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('product_category');
        });

        Schema::create('brand_click', function(Blueprint $table){
            $table->id();
            $table->foreignId('brand_id');
            $table->integer('clicks');
            $table->timestamps();
            $table->foreign('brand_id')->references('id')->on('product_brand');
        });
            
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_click');
        Schema::dropIfExists('category_click');
        Schema::dropIfExists('brand_click');
    }
};
