<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    public function handle(Request $request, Closure $next): Response
    {
        $locale = $request->segment(1);

        if (in_array($locale, ['ar', 'en'])) {
            app()->setLocale($locale);
            session(['locale' => $locale]);
        } else {
            $sessionLocale = session('locale', 'ar');
            app()->setLocale($sessionLocale);
        }

        return $next($request);
    }
}
