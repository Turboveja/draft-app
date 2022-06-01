<?php

namespace App\Providers;

use App\Http\Repositories\AlbumRepository;
use App\Http\Repositories\ArtistRepository;
use App\Http\Repositories\BaseRepository;
use App\Http\Repositories\GenreRepository;
use App\Http\Repositories\Interfaces\ArtistRepositoryInterface;
use App\Http\Repositories\Interfaces\EloquentRepositoryInterface;
use App\Http\Repositories\Interfaces\GenreRepositoryInterface;
use App\Http\Repositories\Interfaces\TrackRepositoryInterface;
use App\Http\Repositories\Interfaces\AlbumRepositoryInterface;
use App\Http\Repositories\TrackRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(EloquentRepositoryInterface::class, BaseRepository::class);
        $this->app->bind(GenreRepositoryInterface::class, GenreRepository::class);
        $this->app->bind(ArtistRepositoryInterface::class, ArtistRepository::class);
        $this->app->bind(TrackRepositoryInterface::class, TrackRepository::class);
        $this->app->bind(AlbumRepositoryInterface::class, AlbumRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
