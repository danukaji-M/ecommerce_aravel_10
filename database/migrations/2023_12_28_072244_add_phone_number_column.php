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
        Schema::table('address', function (Blueprint $table) {
            $table->string('phone_number', 20)->nullable();
        });

        // Move the new column to the desired position (after 'user_email')
        DB::statement('ALTER TABLE address MODIFY COLUMN phone_number VARCHAR(20) AFTER user_email');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('address', function (Blueprint $table) {
            $table->dropColumn('phone_number');
        });
    }
};
