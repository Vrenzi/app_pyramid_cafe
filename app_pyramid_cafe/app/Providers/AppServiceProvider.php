<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

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
        //
        Gate::define('manager', function(User $user) {
            return $user->level_id === 1;
        });

        Gate::define('cashier', function(User $user) {
            return $user->level_id === 2;
        });

        Gate::define('admin', function(User $user) {
            return $user->level_id === 3;
        });

        Gate::define('chef', function(User $user) {
            return $user->level_id === 4;
        });

        Paginator::useBootstrap();
    }
}
