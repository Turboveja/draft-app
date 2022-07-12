<?php

namespace App\Http\Controllers;

use App\Http\Repositories\ArtistRepository;
use App\Http\Repositories\Interfaces\ArtistRepositoryInterface;
use App\Models\Artist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LandingController extends Controller
{
    private ArtistRepositoryInterface $artist_repository;

    /**
     * @param ArtistRepositoryInterface $artist_repository
     */
    public function __construct(ArtistRepositoryInterface $artist_repository)
    {
        $this->artist_repository = $artist_repository;
    }


    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index($artist_web_slug)
    {
        if (!$artist_web_slug) {
            //TODO return 404 custom
            die();
        }

        //Find the artist
        $artist = $this->artist_repository->getArtistByWebSlug($artist_web_slug);

        if (!$artist) {
            //TODO return 404 custom
            die();
        }

        $artist = $this->artist_repository->getFullInfoArtist($artist->uuid);

        return view('front-end-dynamic.app', compact('artist'));
    }

    public function indexDemo()
    {
        return view('front-end-static.app');
    }

    /**
     * @return string|null
     */
    public function sandbox()
    {
        return Storage::disk('artists')->url('17195d98-52bd-4abc-8bb9-c2149b4a2a40/main.png');
    }
}
