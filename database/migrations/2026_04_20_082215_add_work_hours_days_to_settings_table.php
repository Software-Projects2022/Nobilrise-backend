<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->string('work_hours_sat_wed_day')->nullable()->default('السبت — الأربعاء');
            $table->string('work_hours_thu_day')->nullable()->default('الخميس');
            $table->string('work_hours_fri_day')->nullable()->default('الجمعة');
        });
    }

    public function down(): void
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->dropColumn(['work_hours_sat_wed_day', 'work_hours_thu_day', 'work_hours_fri_day']);
        });
    }
};
