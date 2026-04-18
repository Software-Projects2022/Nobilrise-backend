<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('course_reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('training_course_id')->constrained()->cascadeOnDelete();
            $table->string('reviewer_name');
            $table->string('reviewer_image')->nullable();
            $table->decimal('rating', 3, 1)->default(5);
            $table->text('review');
            $table->string('review_date')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('course_reviews');
    }
};
