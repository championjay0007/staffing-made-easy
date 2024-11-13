<?php

namespace App\Providers;
use App\View\Components\MainLayout;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

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
        // Register your Blade components
        Blade::component('layouts.main', MainLayout::class);
    }
}


// namespace App\Providers;

// use Illuminate\Support\ServiceProvider;
// use Illuminate\Support\Facades\Blade;
// use App\View\Components\MainLayout;

// class AppServiceProvider extends ServiceProvider
// {
//     public function boot(): void
//     {
//         // Register MainLayout component as layouts.main
//         Blade::component('layouts.main', MainLayout::class);
//     }
// }
