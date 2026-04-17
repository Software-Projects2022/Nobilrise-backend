<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->string('app_store_link')->nullable();
            $table->string('google_play_link')->nullable();
            $table->string('app_rating')->nullable()->default('4.9');
            $table->string('app_downloads')->nullable()->default('+10K');
        });
    }

    public function down(): void
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->dropColumn(['app_store_link', 'google_play_link', 'app_rating', 'app_downloads']);
        });
    }
};
