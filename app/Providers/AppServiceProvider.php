<?php

namespace App\Providers;

use Aerni\Spotify\Providers\SpotifyServiceProvider;
use Illuminate\Database\Eloquent\Relations\Relation;
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
        Relation::enforceMorphMap([
            'album' => 'App\Models\Album',
            'track' => 'App\Models\Track',
            'artist' => 'App\Models\Artist',
        ]);

        Response::macro('api_custom_response', function ($success = true, $data = [], $status = 200, $msg = '', $dev_log = [], $extra_data = [], $headers = []) {
            if (!$success) {
                \Log::channel('api_custom_error_responses')->error(
                    'api_custom_response Error', [
                    'data' => $data,
                    'dev_log' => $dev_log
                ]);
            }

            $response_array = [
                'success' => $success,
                'data' => $data,
                'msg' => $msg
            ];

            if(count($extra_data)){
                foreach($extra_data as $extra_data_key => $extra_data_value){
                    $response_array[$extra_data_key] = $extra_data_value;
                }
            }

            return Response::make($response_array, $status, $headers);
        });
    }
}
