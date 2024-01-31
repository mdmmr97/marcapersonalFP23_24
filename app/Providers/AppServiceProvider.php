<?php

namespace App\Providers;

use App\Models\Curriculo;
use Illuminate\Support\ServiceProvider;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\View;


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
        Gate::define('update-curriculo', function (User $user, Curriculo $curriculo) {
            return $user->id === $curriculo->user_id;
        });
    }

}
