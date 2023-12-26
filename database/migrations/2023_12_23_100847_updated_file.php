<?php
use Illuminate\Support\Facades\DB;
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
        //create gender table
        Schema::create('gender', function (Blueprint $table) {
            $table->id('gender_id');
            $table->string('gender_name', 10);              
            $table->timestamps();
        });
        //insert gender values
        DB::table('gender')->insert([
            'gender_id'=>'1',
            'gender_name'=>'Male',
            'gender_id'=>'2',
            'gender_name'=>'Female'
        ]);

        Schema::create('users', function (Blueprint $table) {
            $table->string('email', 100)->primary()->unique();
            $table->string('fname', 45);
            $table->string('lname', 45);
            $table->string('password', 100);
            $table->string('phone', 15);
            $table->string('verification_code', 100);
            $table->unsignedBigInteger('gender_gender_id');
            $table->timestamps();

            $table->foreign('gender_gender_id')->references('gender_id')->on('gender')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('gender');
    }
};
