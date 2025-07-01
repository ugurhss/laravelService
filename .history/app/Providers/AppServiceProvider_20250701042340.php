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




    /*
    $this->app->bind(GreetingService::class, function () {
    return new TurkishGreetingService();
});
    $service1 = app()->make(GreetingService::class);
$service2 = app()->make(GreetingService::class);

var_dump($service1 === $service2); // false çünkü farklı nesneler

echo $service1->greet(); // Selam!
echo $service2->greet(); // Selam!



$this->app->singleton(GreetingService::class, function () {
    return new TurkishGreetingService();
});

$service1 = app()->make(GreetingService::class);
$service2 = app()->make(GreetingService::class);

var_dump($service1 === $service2); // true — aynı nesne

echo spl_object_id($service1); // Nesne 1’in ID’si
echo spl_object_id($service2); // Nesne 2’nin ID’si aynı olacak


    */
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
