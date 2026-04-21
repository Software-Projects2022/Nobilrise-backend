<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->string('whatsapp')->nullable();
            $table->string('work_hours_sat_wed')->nullable()->default('9:00 ص — 9:00 م');
            $table->string('work_hours_thu')->nullable()->default('9:00 ص — 5:00 م');
            $table->boolean('work_hours_fri_closed')->default(true);
            $table->string('map_embed_url')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->dropColumn(['whatsapp', 'work_hours_sat_wed', 'work_hours_thu', 'work_hours_fri_closed', 'map_embed_url']);
        });
    }
};
