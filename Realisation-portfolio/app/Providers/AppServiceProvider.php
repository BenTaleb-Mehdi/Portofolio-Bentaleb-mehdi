<?php

namespace App\Providers;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Services\DeveloperService;

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
        $informations = new DeveloperService();

        View::composer('partials.footer', function ($view) use ($informations) {
            $view->with('getsocialmedia', $informations->getSocialmediaContact());
        });

    }



}
