<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class ProfileController extends Controller
{
    public function index(): View
    {
        $client = auth('client')->user()->load(['trainingCourses', 'bookings']);

        return view('pages.profile.profile', compact('client'));
    }

    public function update(Request $request): RedirectResponse
    {
        $client = auth('client')->user();

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['nullable', 'string', 'max:30'],
        ]);

        $client->update($validated);

        return back()->with('success', 'تم تحديث البيانات بنجاح.');
    }

    public function updatePassword(Request $request): RedirectResponse
    {
        $client = auth('client')->user();

        $request->validate([
            'current_password' => ['required'],
            'password' => ['required', 'min:8', 'confirmed'],
        ]);

        if (! Hash::check($request->current_password, $client->password)) {
            return back()->withErrors(['current_password' => 'كلمة المرور الحالية غير صحيحة.']);
        }

        $client->update(['password' => Hash::make($request->password)]);

        return back()->with('success', 'تم تغيير كلمة المرور بنجاح.');
    }
}
