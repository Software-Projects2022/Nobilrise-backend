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
        Schema::create('psychological_sessions', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('name_ar')->nullable();
            $table->string('short_description')->nullable();
            $table->string('short_description_ar')->nullable();
            $table->text('description')->nullable();
            $table->text('description_ar')->nullable();
            $table->foreignId('psychological_session_category_id')->constrained('psychological_session_categories')->onDelete('cascade');
            $table->string('image')->nullable();
            $table->decimal('price', 10, 2)->nullable()->default(0);
            $table->decimal('discount_price', 10, 2)->nullable()->default(0);
            $table->integer('duration')->nullable();
            $table->integer('people_count')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('psychological_sessions');
        Schema::dropIfExists('psychological_session_categories');
        Schema::table('psychological_sessions', function (Blueprint $table) {
            $table->dropForeign(['psychological_session_category_id']);
        });
        Schema::table('psychological_session_categories', function (Blueprint $table) {
            $table->dropForeign(['psychological_session_category_id']);
        });
    }
};
