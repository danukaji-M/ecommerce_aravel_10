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
        Schema::create('product_img', function (Blueprint $table) {
            $table->id();
            $table->text('product_img');
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('product_color');
            $table->timestamps();

            $table->foreign('product_id')->references('id')->on('product');
            $table->foreign('product_color')->references('id')->on('color');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_img');
    }
};
