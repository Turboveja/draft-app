<?php

namespace App\Providers;

use Aerni\Spotify\Providers\SpotifyServiceProvider;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(SpotifyServiceProvider::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Response::macro('api_custom_response', function ($wrap) {
            return Response::make($wrap['custom_wrapper'], $wrap['status_code'], $wrap['headers']);
        });
    }
}
