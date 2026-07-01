<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void {}

    public function boot(): void
    {
        View::composer(['*'], function (\Illuminate\View\View $view) {
            if (! request()->is('admin*')) {
                $view->with('settings', Setting::first() ?? new Setting);
            }
        });
    }
}
