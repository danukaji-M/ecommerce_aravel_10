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
        Schema::create("cloth_sizes", function(Blueprint $table){
            $table->id();
            $table->unsignedBigInteger("product_id");
            $table->string("Small");
            $table->string("Medium");
            $table->string("Large");
            $table->string("XL");
            $table->string("XXL");
            $table->timestamps();
            $table->foreign("product_id")->references("id")->on("product");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("cloth_sizes");
    }
};
