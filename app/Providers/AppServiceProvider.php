<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL; // <--- Tambahkan Baris Ini

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Gunakan \URL atau URL saja sekarang sudah aman
        if (config('app.env') === 'production') {
            URL::forceScheme('https');
        }
    }
}