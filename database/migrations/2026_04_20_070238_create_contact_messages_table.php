<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// ══════════════════════════════════════════════════════════════════
//  ما هو الـ Migration؟
//  ─────────────────
//  ┌─────────────────────────────────────────────────────┐
//  │ php artisan migrate           → شغّل كل migrations  │
//  │ php artisan migrate:rollback  → تراجع عن آخر دفعة   │
//  │ php artisan migrate:fresh     → احذف كل شيء وابدأ   │
//  │ php artisan migrate:status    → شوف إيه اللي اتعمل  │
//  └─────────────────────────────────────────────────────┘
// ══════════════════════════════════════════════════════════════════

return new class extends Migration
{

    public function up(): void
    {
        // Schema::create(اسم الجدول، function)
        // بنقول لـ Laravel: "انشئ جدول اسمه contact_messages"
        Schema::create('contact_messages', function (Blueprint $table) {

            // ─── id() ───────────────────────────────────────────────────
            $table->id();


            // ─── string() ───────────────────────────────────────────────
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');

            // ─── nullable() ─────────────────────────────────────────────
            $table->string('phone')->nullable();


            // ─── default() ──────────────────────────────────────────────
            $table->string('topic')->default('استفسار عام');
            $table->string('service')->nullable();


            // ─── text() ─────────────────────────────────────────────────
            $table->text('message');


            // ─── unsignedTinyInteger() ──────────────────────────────────
            $table->unsignedTinyInteger('rating')->nullable();


            // ─── enum() ─────────────────────────────────────────────────
            $table->enum('status', [
                'new',
                'read',
                'replied',
                'closed',
            ])->default('new');


            $table->text('admin_notes')->nullable();


            // ─── timestamps() ───────────────────────────────────────────
            $table->timestamps();

        }); // ← نهاية Schema::create
    }


    public function down(): void
    {
        Schema::dropIfExists('contact_messages');
    }
};
