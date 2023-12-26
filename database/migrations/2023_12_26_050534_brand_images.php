<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Reference\Reference;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('brand_images', function(Blueprint $table){
            $table->id();
            $table->text('brand_img_src');
            $table->unsignedBigInteger('product_brand_id');
            $table->timestamps();
            $table->foreign('product_brand_id')->references('id')->on('product_brand');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brand_images');
    }
};
