<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->string('app_screenshot_1')->nullable();
            $table->string('app_screenshot_2')->nullable();
            $table->string('app_screenshot_3')->nullable();
            $table->string('app_phone_frame')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->dropColumn(['app_screenshot_1', 'app_screenshot_2', 'app_screenshot_3', 'app_phone_frame']);
        });
    }
};
