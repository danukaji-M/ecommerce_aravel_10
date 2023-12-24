<?php

use Illuminate\Database\Eloquent\Scope;
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
        Schema::create('user_has_user_type', function(Blueprint $table){
            $table->id();
            $table->string('user_email',100);
            $table->foreignId('user_type_id');
            $table->timestamps();


            $table->foreign('user_email')->references('email')->on('users');
            $table->foreign('user_type_id')->references('id')->on('user_type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_has_user_type');
    }
};
