<?php

namespace App\Http\Controllers;

use App\Http\Services\SpotifyService;

class SpotifyTestController extends Controller
{
    /**
     * Sandbox methods
     *
     * @return mixed
     */
    public function sandbox()
    {
        $spotify_service = new SpotifyService();

//        $lions_way_id = '0S19bvGpa2VINEqCezbuvf';
//        $turboveja_id = '2g2kFbEB7gaYJ9VePbkGTg';
//        return $spotify_service->getArtist('0S19bvGpa2VINEqCezbuvf');

        $album_inflexion_id = '3E2b5FLpPgxNqKMdJCRNvh';




        return $spotify_service->getAlbum($album_inflexion_id);
    }
}
