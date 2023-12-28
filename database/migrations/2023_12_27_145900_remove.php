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
        Schema::table('address', function (Blueprint $table) {
            $table->dropForeign(['address_type_id']); // Drop foreign key constraint
            $table->dropColumn('address_type_id');   // Drop the column
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('address', function (Blueprint $table) {
            $table->unsignedBigInteger('address_type_id');
            $table->foreign('address_type_id')->references('id')->on('address_type');
        });
    }
};
