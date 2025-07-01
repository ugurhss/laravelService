<?php

namespace App\Providers;

use App\Services\GreetingService;
use Illuminate\Support\ServiceProvider;
use App\Services\TurkishGreetingService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
         $this->app->bind(GreetingService::class, function ($app) {
        return new TurkishGreetingService();
    });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
