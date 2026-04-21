<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('client_training_course', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->constrained()->cascadeOnDelete();
            $table->foreignId('training_course_id')->constrained()->cascadeOnDelete();
            $table->decimal('amount_paid', 10, 2)->default(0);
            $table->timestamps();

            $table->unique(['client_id', 'training_course_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('client_training_course');
    }
};
