<?php

// ══════════════════════════════════════════════════════════════════
// ══════════════════════════════════════════════════════════════════

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // ──────────────────────────────────────────────────────────────
    //  index()
    // ──────────────────────────────────────────────────────────────
    public function index()
    {
        return view('pages.contact.contact');
    }

    // ──────────────────────────────────────────────────────────────
    //  store()
    // ──────────────────────────────────────────────────────────────
    public function store(Request $request)
    {
        // ─── validate() ─────────────────────────────────────────────
        $validated = $request->validate([
            'first_name' => ['required', 'string', 'max:100'],
            'last_name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:30'],  // nullable
            'topic' => ['nullable', 'string', 'max:100'],
            'service' => ['nullable', 'string', 'max:150'],
            'message' => ['required', 'string', 'min:10', 'max:500'],
            'rating' => ['nullable', 'integer', 'min:1', 'max:5'],
        ],

            [
                'first_name.required' => 'الاسم الأول مطلوب.',
                'last_name.required' => 'الاسم الأخير مطلوب.',
                'email.required' => 'البريد الإلكتروني مطلوب.',
                'email.email' => 'البريد الإلكتروني غير صالح.',
                'message.required' => 'الرسالة مطلوبة.',
                'message.min' => 'الرسالة يجب أن تكون 10 أحرف على الأقل.',
                'message.max' => 'الرسالة يجب ألا تتجاوز 500 حرف.',
            ]);

        // ─── create() ───────────────────────────────────────────────
        ContactMessage::create($validated);

        // ─── back()->with() ─────────────────────────────────────────
        return back()->with('success', 'تم إرسال رسالتك بنجاح! سنرد عليك في أقرب وقت ممكن.');
    }
}
