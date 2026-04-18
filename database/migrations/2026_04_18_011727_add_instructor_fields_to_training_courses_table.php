<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('training_courses', function (Blueprint $table) {
            $table->string('instructor_name')->nullable();
            $table->string('instructor_title')->nullable();
            $table->string('instructor_image')->nullable();
            $table->text('instructor_bio')->nullable();
            $table->decimal('rating', 3, 1)->nullable()->default(0);
            $table->integer('reviews_count')->nullable()->default(0);
            $table->integer('students_count')->nullable()->default(0);
            $table->integer('duration_hours')->nullable()->default(0);
        });
    }

    public function down(): void
    {
        Schema::table('training_courses', function (Blueprint $table) {
            $table->dropColumn([
                'instructor_name', 'instructor_title', 'instructor_image',
                'instructor_bio', 'rating', 'reviews_count', 'students_count', 'duration_hours',
            ]);
        });
    }
};
