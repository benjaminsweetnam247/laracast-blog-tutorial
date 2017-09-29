<?php

namespace Blog\Providers;


use Blog\Billing\Stripe;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.sidebar', function ($view) {
            $view->with('archives', \Blog\Post::archives());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Blog::singleton(Stripe::class, function( ) {
        //     return new Stripe(config('services.stripe.secret'));
        // });
    }
}
