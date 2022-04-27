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
        Response::macro('api_custom_response', function ($success = true, $data = [], $status = 200, $msg = '', $dev_log = [], $headers = []) {
            if (!$success) {
                \Log::channel('api_custom_error_responses')->error(
                    'api_custom_response Error', [
                    'data' => $data,
                    'dev_log' => $dev_log
                ]);
            }

            return Response::make([
                'success' => $success,
                'data' => $data,
                'msg' => $msg
            ], $status, $headers);
        });
    }
}
