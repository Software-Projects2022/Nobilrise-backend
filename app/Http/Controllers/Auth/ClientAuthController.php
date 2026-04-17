<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ClientAuthController extends Controller
{
    /**
     * Show the login page to the user
     * This is called first when the user visits /login
     */
    public function showLogin(): \Illuminate\View\View
    {
        return view('pages.login.login');
    }

    public function login(Request $request): \Illuminate\Http\RedirectResponse
    {
        // Validate that email and password fields are filled correctly
        $credentials = $request->validate([
            'email'    => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Try to log in with the given credentials
        if (Auth::guard('client')->attempt($credentials, $request->boolean('remember'))) {

            $request->session()->regenerate();

            return redirect()->intended(route('home'));
        }

        return back()->withErrors([
            'email' => 'The email or password is incorrect.',
        ])->onlyInput('email');
    }

    /**
     * Show the register page to the user
     * Same view as login but opens the register tab
     */
    public function showRegister(): \Illuminate\View\View
    {
        return view('pages.login.login');
    }

    /**
     * Handle the register form submission and create a new account
     *
     * Steps:
     * 1. Validate all input fields
     * 2. Create a new client record in the database
     * 3. Log in the new client automatically
     * 4. Redirect to the profile page
     */
    public function register(Request $request): \Illuminate\Http\RedirectResponse
    {
        // Validate the input and reject if anything is wrong
        $validated = $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name'  => ['required', 'string', 'max:255'],
            'email'      => ['required', 'email', 'unique:clients'],
            'password'   => ['required', 'min:8', 'confirmed'],
            'phone'      => ['nullable', 'string'],
        ]);

        // Create the new client record in the database
        $client = Client::create([
            'name'     => $validated['first_name'] . ' ' . $validated['last_name'],
            'email'    => $validated['email'],
            'password' => Hash::make($validated['password']),
            'phone'    => $validated['phone'] ?? null,
        ]);

        // Log in the new client automatically without requiring them to log in manually
        Auth::guard('client')->login($client);

        // Redirect to the profile page
        return redirect()->route('profile');
    }

    /**
     * Log the client out and end the session
     *
     * Steps:
     * 1. Log out from the client guard
     * 2. Clear all session data
     * 3. Generate a new CSRF token for security
     * 4. Redirect to the home page
     */
    public function logout(Request $request): \Illuminate\Http\RedirectResponse
    {
        // Log out from the client guard
        Auth::guard('client')->logout();

        // Clear all session data
        $request->session()->invalidate();

        // Generate a new CSRF token for security
        $request->session()->regenerateToken();

        // Redirect to the home page
        return redirect()->route('home');
    }
}
