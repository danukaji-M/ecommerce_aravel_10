<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        Schema::create('address_type', function (Blueprint $table){
            $table->id();
            $table->string('address_type',100);
            $table->timestamps();


        } );

        Schema::create('province', function (Blueprint $table) {
            $table->id();
            $table->string('province_name',100);
            $table->timestamps();
        });

        Schema::create('district', function (Blueprint $table) {
            $table->id();
            $table->string('district_name',100);
            $table->unsignedBigInteger('province_id');
            $table->timestamps();
            $table->foreign('province_id')->references('id')->on('province');
        });

        Schema::create('city', function (Blueprint $table) {
            $table->id();
            $table->string('city_name',100);
            $table->unsignedBigInteger('district_id');
            $table->timestamps();
            $table->foreign('district_id')->references('id')->on('district');
        });

        Schema::create('address', function (Blueprint $table) {
            $table->id();
            $table->string('ad_ln1',100);
            $table->string('ad_ln2',100);
            $table->integer('postal_code');
            $table->unsignedBigInteger('district_id');
            $table->unsignedBigInteger('province_id');
            $table->unsignedBigInteger('city_id');
            $table->string('user_email');
            $table->unsignedBigInteger('address_type_id');
            $table->timestamps();
            $table->foreign('user_email')->references('email')->on('users')->cascadeOnDelete();
            $table->foreign('district_id')->references('id')->on('district');
            $table->foreign('province_id')->references('id')->on('province');
            $table->foreign('city_id')->references('id')->on('city');
            $table->foreign('address_type_id')->references('id')->on('address_type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
