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
        Schema::table('users', function (Blueprint $table) {
            $table->string('country_name')->nullable()->after('email_verified_at');
            $table->string('country_code')->nullable()->after('country_name');
            $table->string('country_flag')->nullable()->after('country_code');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('country_name');
            $table->dropColumn('country_code');
            $table->dropColumn('country_flag');
        });
    }
};
