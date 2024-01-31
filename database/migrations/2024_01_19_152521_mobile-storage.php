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
        Schema::create("storage", function(Blueprint $table){
            $table->id();
            $table->string("storage");
            $table->timestamps();
        });

        Schema::create("mobile_has_storage", function(Blueprint $table){
            $table->id();
            $table->unsignedBigInteger("product_id");
            $table->unsignedBigInteger("storage_id");
            $table->timestamps();
            $table->foreign("product_id")->references("id")->on("product");
            $table->foreign("storage_id")->references("id")->on("storage");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("mobile_storage");
    }
};
