<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate; // Import Gate
use App\Models\User; // Import Model User

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
        // 1. Definisikan Gate untuk pengecekan role yang lebih mudah
        // Ini berguna di Blade: @can('is-admin') ... @endcan
        
        Gate::define('is-admin', function (User $user) {
            return $user->role === 'admin';
        });

        Gate::define('is-owner', function (User $user) {
            return $user->role === 'owner';
        });

        Gate::define('is-buyer', function (User $user) {
            return $user->role === 'buyer';
        });
    }
}