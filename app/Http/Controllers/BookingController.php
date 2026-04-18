<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function store(Request $request): \Illuminate\Http\JsonResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string'],
            'phone' => ['required', 'string'],
            'email' => ['required', 'email'],
            'date' => ['required', 'date'],
            'time' => ['required', 'string'],
            'session_type' => ['required', 'string'],
            'notes' => ['nullable', 'string'],
            'psychological_session_id' => ['nullable', 'integer'],
        ]);

        Booking::create($validated);

        return response()->json(['message' => 'تم تأكيد الحجز بنجاح!']);
    }
}

