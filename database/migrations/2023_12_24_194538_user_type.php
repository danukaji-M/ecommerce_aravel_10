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
        Schema::create('user_type', function(Blueprint $table){
            $table->id();
            $table->string('user_type_name',45);
            $table->timestamps();
        });
        DB::table('user_type')->insert([
            'user_type_name'=>'Admin',
            'user_type_name'=>'Seller',
            'user_type_name'=>'Customer',
            'user_type_name'=>'Moderator'
        
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_type');
    }
};
